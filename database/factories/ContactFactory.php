<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Contact::class;

    public function definition()
    {
        return [
            'fullname' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['1', '2']),
            'email' => $this->faker->unique()->safeEmail(),
            'postcode' => substr_replace($this->faker->postcode, '-', 3, 0,),
            'address' => $this->faker->address(),
            'building_name' => $this->faker->secondaryAddress,
            'opinion' => $this->faker-> realText(75),
            'created_at' => $this->faker->dateTimeBetween($startDate = '-4 week', $endDate = '-2 week')->format('Y-m-d'),
            'updated_at' => $this->faker->dateTimeBetween($startDate = '-1 week', $endDate = 'now')->format('Y-m-d')
        ];
    }
}



