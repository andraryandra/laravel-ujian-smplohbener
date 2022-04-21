<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AdminMTSSeeder::class
        ]);
        $this->call([
            AdminSMPSeeder::class
        ]);
        $this->call([
           GuruMTSSeeder::class
        ]);
        $this->call([
            GuruSMPSeeder::class
         ]);
         $this->call([
            SiswaMTSSeeder::class
         ]);
         $this->call([
            SiswaSMPSeeder::class
         ]);
         $this->call([
            SuperAdminSeeder::class
         ]);

    }
}
