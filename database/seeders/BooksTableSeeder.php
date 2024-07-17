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
            'image_url' => 'https://example.com/images/book1.jpg',
            'description' => 'Buku ini mengupas berbagai bias dan kesalahan dalam berpikir yang seringkali terjadi dalam kehidupan sehari-hari.',
            'isbn' => '99999999'
        ]);

        Book::create([
            'title' => 'Sapiens: A Brief History of Humankind',
            'image_url' => 'https://example.com/images/book2.jpg',
            'description' => 'Buku ini menjelaskan sejarah panjang manusia dari evolusi hingga peradaban modern.',
            'isbn' => '4567890123'
        ]);

        Book::create([
           'title' => 'Atomic Habits',
            'image_url' => 'https://example.com/images/book3.jpg',
            'description' => 'Buku tentang bagaimana kebiasaan kecil dapat membawa perubahan besar.',
            'isbn' => '5678901234'
        ]);

        Book::create([
           'title' => 'Deep Work: Rules for Focused Success in a Distracted World',
            'image_url' => 'https://example.com/images/book4.jpg',
            'description' => 'Buku ini membahas pentingnya fokus dalam mencapai kesuksesan di dunia yang penuh distraksi.',
            'isbn' => '6789012345'
        ]);

        Book::create([
            'title' => 'Thinking, Fast and Slow',
            'image_url' => 'https://example.com/images/book5.jpg',
            'description' => 'Buku ini mengupas teori proses berpikir manusia dari dua sistem berpikir: cepat dan lambat.',
            'isbn' => '7890123456'
        ]);

        Book::create([
           'title' => 'Start with Why: How Great Leaders Inspire Everyone to Take Action',
            'image_url' => 'https://example.com/images/book6.jpg',
            'description' => 'Buku ini membahas pentingnya memiliki visi (Why) yang kuat dalam memimpin dan menginspirasi orang lain.',
            'isbn' => '8901234567'
        ]);

        Book::create([
           'title' => 'The Lean Startup: How Today\'s Entrepreneurs Use Continuous Innovation to Create Radically Successful Businesses',
            'image_url' => 'https://example.com/images/book7.jpg',
            'description' => 'Buku ini membahas pendekatan startup yang berfokus pada inovasi terus-menerus dan pembelajaran cepat.',
            'isbn' => '9012345678'
        ]);

        Book::create([
            'title' => 'The Power of Habit: Why We Do What We Do in Life and Business',
            'image_url' => 'https://example.com/images/book8.jpg',
            'description' => 'Buku ini mengungkapkan ilmu tentang kebiasaan dan bagaimana membentuk kebiasaan yang efektif.',
            'isbn' => '0123456789'
        ]);

        Book::create([
            'title' => 'Belajar Laravel Dengan Mudah',
            'image_url' => 'https://example.com/images/book9.jpg',
            'description' => 'Buku panduan belajar Laravel untuk pemula.',
            'isbn' => '1234567890'
        ]);

        Book::create([
            'title' => 'Pemrograman Web Modern',
            'image_url' => 'https://example.com/images/book10.jpg',
            'description' => 'Buku tentang pemrograman web modern dengan teknologi terbaru.',
            'isbn' => '2345678901'

        ]);


    }
}
