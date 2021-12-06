<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static $rules = array(
        'fullname' => 'required|max:255',
        'gender' => 'required',
        'email' => 'email|required|max:255',
        'postcode' => 'required',/*|regex:/^\d{3}[-]\d{4}$*/
        'address' => 'required',
        'building_name' => 'nullable',
        'opinion' => 'integer|required|max:120'
    );

}
