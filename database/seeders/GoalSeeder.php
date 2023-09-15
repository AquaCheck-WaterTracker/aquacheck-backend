<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Goal;

class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Goal::create([
         'id'=> 1,
         'id_user'=> 1,
         'goal'=> 2000,
       ]);

    //    Goal::create([
    //     'id'=> 2,
    //     'id_user'=> 2,
    //     'goal'=> 2500,
    //   ]);

    //   Goal::create([
    //     'id'=> 3,
    //     'id_user'=> 3,
    //     'goal'=> 1500,
    //   ]);

    //   Goal::create([
    //     'id'=> 4,
    //     'id_user'=> 4,
    //     'goal'=> 2300,
    //   ]);

    //   Goal::create([
    //     'id'=> 5,
    //     'id_user'=> 5,
    //     'goal'=> 3000,
    //   ]);
    }
}
