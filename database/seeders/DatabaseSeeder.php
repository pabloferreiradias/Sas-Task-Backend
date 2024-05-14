<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Book;
use App\Models\Store;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $books = Book::factory(10)->create();
        $stores = Store::factory(10)->hasAttached($books)->create();
    }
}
