<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $data = Book::get();

        return response()->json([
            'status' => true,
            'message' => 'Successfully parsing data Books',
            'data' => $data
        ]);
    }
}
