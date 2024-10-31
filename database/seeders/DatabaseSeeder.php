<?php

namespace Database\Seeders;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * calls the BookSeeder class to seed the database with initial data.
     */
    public function run(): void
    {
        $this->call([
            BookSeeder::class,
        ]);
    }
}
