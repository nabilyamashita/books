<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * 
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'The Art of Thinking Clearly',
            'image_url' => '',
            'description' => 'Buku ini mengupas berbagai bias dan kesalahan dalam berpikir yang seringkali terjadi dalam kehidupan sehari-hari.',
            'isbn' => '888888'
        ]);


    }
}
