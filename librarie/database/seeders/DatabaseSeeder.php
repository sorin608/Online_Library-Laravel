<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \DB::table('books')->insert([
            [
                'title' => 'Ion',
                'image' => 'images\1163390-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Gandeste si vei fi bogat',
                'image' => 'images\10895315-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Marcus Aurelius',
                'image' => 'images\28155022-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Toate fantomele din masinarie',
                'image' => 'images\35646765-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Dolores se destrama',
                'image' => 'images\35646807-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Andrei Plesu',
                'image' => 'images\35646884-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Dezumanizat',
                'image' => 'images\35646898-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sufletul lumii',
                'image' => 'images\35646933-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
