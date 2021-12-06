<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function inquiry()
    {
        $inputs = [];
        return view('contact/inquiry', ['inputs' => $inputs,]);
    }

    public function confirm(Request $request)
    {
        $inputs = $request->all();
        $inputs['fullname'] = $inputs['familynm'] . '　' . $inputs['firstnm'];
        return view('contact/confirm', ['inputs' => $inputs,]);
    }

    public function revise(Request $request)
    {
        $inputs = $request->all();
        return view('contact/inquiry', ['inputs' => $inputs,]);
    }

    public function send(Request $request)
    {
        $inputs = $request->all();
        unset($inputs['_token']);
        unset($inputs['familynm']);
        unset($inputs['firstnm']);
        Contact::create($inputs);
        return view('contact/complete');
    }

    public function admin(Request $request)
    {
        $inputs = [];
        $results = [];
        return view('/admin', ['inputs' => $inputs, 'results' => $results,]);
    }

    public function serch(Request $request)
    {
        $inputs = $request->all();
        /* 全てのキーを定義*/
        $keys = ['fullname','date_start','date_end','email'];
        foreach($keys as $key){
            if(!isset($inputs[$key])){
                $inputs[$key] = null;
            };
        };
        /* $inputs_キー名を生成*/
        foreach ($keys as $key) {
            ${'inputs_' . $key} = $request->$key;
        };

        if ($inputs['gender'] == '3') {
            $results =
            Contact::when($inputs['fullname'], function ($query, $inputs_fullname) {
                return $query->where('fullname', $inputs_fullname);
            /*部分一致検索の場合、where('fullname' , "LIKE" , "%$inputs_fullname%")*/
            })->when($inputs['date_start'], function ($query, $inputs_date_start) {
                return $query->where('created_at', '>', $inputs_date_start);
            })->when($inputs['date_end'], function ($query, $inputs_date_end) {
                return $query->where('created_at', '<', $inputs_date_end);
            })->when($inputs['email'], function ($query, $inputs_email) {
                return $query->where('email', $inputs_email);
            })
            ->Paginate(10);
        } else{
        $results = Contact:: when($inputs['fullname'], function ($query, $inputs_fullname) {
                return $query->where('fullname', $inputs_fullname);
            /*部分一致検索の場合、where('fullname' , "LIKE" , "%$inputs_fullname%")*/
            })->when($inputs['date_start'], function ($query, $inputs_date_start) {
                return $query->where('created_at', '>', $inputs_date_start);
            })->when($inputs['date_end'], function ($query, $inputs_date_end) {
                return $query->where('created_at', '<', $inputs_date_end);
            })->when($inputs['gender'], function ($query, $inputs_gender) {
                return $query->where('gender', $inputs_gender);
            })->when($inputs['email'], function ($query, $inputs_email) {
                return $query->where('email', $inputs_email);
            })
            ->Paginate(10);
        };
        return view('/admin', ['inputs' => $inputs, 'results' => $results,]);
    }

    public function reset()
    {
        $inputs = [];
        $results = [];
        return view('/admin', ['inputs' => $inputs, 'results' => $results,]);
    }

    public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        $inputs = [];
        $results = [];
        return view('/admin', ['inputs' => $inputs, 'results' => $results,]);
    }
}
