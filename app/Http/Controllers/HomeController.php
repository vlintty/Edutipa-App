<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Halaman utama dengan data buku
    public function index(Request $request)
    {
        $books = [
            ['judul' => 'Harry Potter and the Sorcerer\'s Stone', 'penulis' => 'J.K. Rowling', 'tahun' => 1997],
            ['judul' => 'The Lord of the Rings', 'penulis' => 'J.R.R. Tolkien', 'tahun' => 1954],
            ['judul' => 'The Hobbit', 'penulis' => 'J.R.R. Tolkien', 'tahun' => 1937],
            ['judul' => 'To Kill a Mockingbird', 'penulis' => 'Harper Lee', 'tahun' => 1960],
            ['judul' => 'Pride and Prejudice', 'penulis' => 'Jane Austen', 'tahun' => 1813],
            ['judul' => '1984', 'penulis' => 'George Orwell', 'tahun' => 1949],
            ['judul' => 'The Great Gatsby', 'penulis' => 'F. Scott Fitzgerald', 'tahun' => 1925],
            ['judul' => 'The Catcher in the Rye', 'penulis' => 'J.D. Salinger', 'tahun' => 1951],
            ['judul' => 'The Chronicles of Narnia', 'penulis' => 'C.S. Lewis', 'tahun' => 1950],
            ['judul' => 'Animal Farm', 'penulis' => 'George Orwell', 'tahun' => 1945],
        ];

        // fitur pencarian
        $search = $request->input('search');
        if ($search) {
            $books = array_filter($books, function ($item) use ($search) {
                return stripos($item['judul'], $search) !== false ||
                       stripos($item['penulis'], $search) !== false;
            });
        }

        return view('home', [
            'books' => $books,
            'search' => $search ?? '',
            'message' => null
        ]);
    }

    // Menampilkan form input
    public function form()
    {
        return view('form');
    }

    // Menerima data form dan kembali ke home
    public function submit(Request $request)
    {
        $dataMessage = $request->message;

        // Tetap menampilkan daftar buku saat kembali
        $books = [
            ['judul' => 'Harry Potter and the Sorcerer\'s Stone', 'penulis' => 'J.K. Rowling', 'tahun' => 1997],
            ['judul' => 'The Lord of the Rings', 'penulis' => 'J.R.R. Tolkien', 'tahun' => 1954],
            ['judul' => 'The Hobbit', 'penulis' => 'J.R.R. Tolkien', 'tahun' => 1937],
            ['judul' => 'To Kill a Mockingbird', 'penulis' => 'Harper Lee', 'tahun' => 1960],
            ['judul' => 'Pride and Prejudice', 'penulis' => 'Jane Austen', 'tahun' => 1813],
            ['judul' => '1984', 'penulis' => 'George Orwell', 'tahun' => 1949],
            ['judul' => 'The Great Gatsby', 'penulis' => 'F. Scott Fitzgerald', 'tahun' => 1925],
            ['judul' => 'The Catcher in the Rye', 'penulis' => 'J.D. Salinger', 'tahun' => 1951],
            ['judul' => 'The Chronicles of Narnia', 'penulis' => 'C.S. Lewis', 'tahun' => 1950],
            ['judul' => 'Animal Farm', 'penulis' => 'George Orwell', 'tahun' => 1945],
        ];

        return view('home', [
            'books' => $books,
            'search' => '',
            'message' => $dataMessage
        ]);
    }
}
