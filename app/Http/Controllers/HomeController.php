<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books = [
            ['judul' => 'Pride and Prejudice', 'penulis' => 'Jane Austen', 'tahun' => '1813'],
            ['judul' => 'To Kill a Mockingbird', 'penulis' => 'Harper Lee', 'tahun' => '1960'],
            ['judul' => '1984', 'penulis' => 'George Orwell', 'tahun' => '1949'],
            ['judul' => 'The Great Gatsby', 'penulis' => 'F. Scott Fitzgerald', 'tahun' => '1925'],
            ['judul' => 'The Catcher in the Rye', 'penulis' => 'J.D. Salinger', 'tahun' => '1951'],
            ['judul' => 'Little Women', 'penulis' => 'Louisa May Alcott', 'tahun' => '1868'],
            ['judul' => 'Wuthering Heights', 'penulis' => 'Emily Brontë', 'tahun' => '1847'],
        ];

        return view('home', compact('books'));
    }
}
