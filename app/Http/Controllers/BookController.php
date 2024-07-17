<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        // Mengambil query string dari URL
        $title = $request->query('title');
        $isbn = $request->query('isbn');

        // Query Eloquent untuk filtering
        $query = Book::query();

        if ($title) {
            $query->where('title', 'like', '%' . $title . '%');
        }

        if ($isbn) {
            $query->where('isbn', $isbn);
        }

        // Mengambil hasil data buku setelah filtering
        $data = $query->get();

        return response()->json([
            'status' => true,
            'message' => 'Successfully parsing data Books',
            'data' => $data
        ]);
    }
}
