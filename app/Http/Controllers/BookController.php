<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->query('per_page', 5); // Jumlah item per halaman
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

        //ambil data 
        $data = $query->paginate($perPage);

        return response()->json([
            'status' => true,
            'message' => 'Successfully fetching books with pagination',
            'data' => $data
        ]);
    }
}
