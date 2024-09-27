<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(70)->create();
        Category::factory()->count(4)
        ->sequence(
            ['name' => 'Living Room'],
            ['name' => 'Bedroom'],
            ['name' => 'Kitchen'],
            ['name' => 'Bathroom'],
        )
        ->hasProducts(50)
        ->create();
    }
}
