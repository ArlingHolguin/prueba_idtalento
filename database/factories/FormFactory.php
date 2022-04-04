<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Form;
use App\Models\User;

use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class FormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        

        $first_name = $this->faker->firstName();
        $second_name = $this->faker->firstName();

        $latestUser = User::latest('id')->first();
        $user_id = $latestUser->id;

        $surname = $this->faker->lastName();
        $second_surname = $this->faker->lastName();


        return [
        

        $user = new User(),
        $user->name = $first_name .' '. $second_name,
        $user->email = $this->faker->unique()->safeEmail(),
        $user->email_verified_at = now(),
        $user->password =  bcrypt('12345678'),
        $user->remember_token = Str::random(10),
        $user->save(),


        
        
        

        $form = new Form(),
        
        $form->second_name = $second_name,
        $form->surname = $surname,
        $form->second_surname = $second_surname,
        $form->document_type = $this->faker->randomElement(['CC', 'CE', 'TI', 'PASS']),
        $form->document_number = $this->faker->unique()->numberBetween(1101250100,1101752249),
        $form->user_id = $user_id,

        $form->save(),

    ];

    }
}

