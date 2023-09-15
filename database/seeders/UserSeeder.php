<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id'=> 1,
            'name'=> 'Maria',
            'email'=> 'maria@gmail.com',
            'password'=>'maria1234',
            'age'=>30,
            'weight'=> 55        
        ]);

        // User::create([
        //     'id'=> 2,
        //     'name'=> 'Rosalia',
        //     'email'=> 'rosi@gmail.com',
        //     'password'=>'rosi1234',
        //     'age'=>36,
        //     'weight'=> 60        
        // ]);

        // User::create([
        //     'id'=> 3,
        //     'name'=> 'Matilda',
        //     'email'=> 'mati@gmail.com',
        //     'password'=>'mati1234',
        //     'age'=>51,
        //     'weight'=> 70      
        // ]);

        // User::create([
        //     'id'=> 4,
        //     'name'=> 'Gigi',
        //     'email'=> 'gigi@gmail.com',
        //     'password'=>'gigi1234',
        //     'age'=>40,
        //     'weight'=> 76      
        // ]);

        // User::create([
        //     'id'=> 5,
        //     'name'=> 'Carolina',
        //     'email'=> 'caro@gmail.com',
        //     'password'=>'caro1234',
        //     'age'=>33,
        //     'weight'=> 85   
        // ]);
    }
}
