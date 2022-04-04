<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Form;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        
        $roleAdmin = Role::create(['name' => 'administrador']);
       


        User::create([
            'name' => 'Arling Holguin',
            'email' => 'arlingholguin@gmail.com',
            'email_verified_at' => now(),
            'password' =>  bcrypt('12345678'),
            'remember_token' => Str::random(10)
        ])->assignRole($roleAdmin);



        
        User::create([
            'name' => 'Jhonh Deep',
            'email' => 'jhonhdepph@example.com',
            'email_verified_at' => now(),
            'password' =>  bcrypt('12345678'),
            'remember_token' => Str::random(10)
        ]);

        Form::factory(1000)->create();


       

    
    }
}
