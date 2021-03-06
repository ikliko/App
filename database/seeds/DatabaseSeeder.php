<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(\App\Models\User::class, 10)->create();
        factory(\App\Models\Book::class, 10)->create();
    }
}
