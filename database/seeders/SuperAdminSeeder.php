<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');
        foreach(range(1,2) as $item){
            User::create([
                'role_smp' => 'owner',
                'level' => 'superadmin',
                'name' => $faker->name,
                'username' => $faker->unique()->userName,
                // 'email' => 'user'.$item.'@example.test',
                'password' => Hash::make('password'),
            ]);
       }
    }
}
