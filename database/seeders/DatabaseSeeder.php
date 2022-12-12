<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(adminseeder::class);
        $this->call(mahasiswaseeder::class);
        $this->call(dosenseeder::class);
        // $this->call(KoordinatorSeeder::class);
        $this->call(RelasiSeeder::class);
        $this->call(rpsseeder::class);
        $this->call(pertemuanseeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
