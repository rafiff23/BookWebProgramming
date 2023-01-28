<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\User;
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

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
            'role' => 'admin'
        ]);

        Category::create([
            'name' => 'Kesehatan'
        ]);
        Category::create([
            'name' => 'Novel'
        ]);
        Category::create([
            'name' => 'Politik'
        ]);

        Publisher::create([
            'name' => 'Erlangga',
            'address' => 'Jln Angsa',
            'phone' => '087541232',
            'email' => 'erlangga@gmail.com',
            'image' => 'erlangga.jpeg'
        ]);
        Publisher::create([
            'name' => 'Bukunesia',
            'address' => 'Jln Kenangan',
            'phone' => '097212343',
            'email' => 'bukunesia@gmail.com',
            'image' => 'bukunesia.jpeg'
        ]);
        Publisher::create([
            'name' => 'Grasindo',
            'address' => 'Jln Cempaka Putih',
            'phone' => '0989767',
            'email' => 'grasindo@gmail.com',
            'image' => 'grasindo.jpeg'
        ]);

        // BookCategory::factory(9)->create();

        Book::create([
            'title' => 'Book 1',
            'author' => 'Author 1',
            'publisher_id' => rand(1,3),
            'year' => rand(2008, 2022),
            'synopsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
            'image' => 'kes_1.jpeg'
        ]);

        Book::create([
            'title' => 'Book 2',
            'author' => 'Author 2',
            'publisher_id' => rand(1,3),
            'year' => rand(2008, 2022),
            'synopsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
            'image' => 'kes_2.jpeg'
        ]);

        Book::create([
            'title' => 'Book 3',
            'author' => 'Author 3',
            'publisher_id' => rand(1,3),
            'year' => rand(2008, 2022),
            'synopsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
            'image' => 'politik_1.jpeg'
        ]);

        Book::create([
            'title' => 'Book 4',
            'author' => 'Author 4',
            'publisher_id' => rand(1,3),
            'year' => rand(2008, 2022),
            'synopsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
            'image' => 'politik_2.jpeg'
        ]);

        Book::create([
            'title' => 'Book 5',
            'author' => 'Author 5',
            'publisher_id' => rand(1,3),
            'year' => rand(2008, 2022),
            'synopsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
            'image' => 'novel_1.jpeg'
        ]);

        Book::create([
            'title' => 'Book 6',
            'author' => 'Author 6',
            'publisher_id' => rand(1,3),
            'year' => rand(2008, 2022),
            'synopsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
            'image' => 'novel_2.jpeg'
        ]);

        for($i = 1; $i <= 6; $i++){
            BookCategory::create([
                'book_id' => $i,
                'category_id' => rand(1,3)
            ]);
        }
    }
}
