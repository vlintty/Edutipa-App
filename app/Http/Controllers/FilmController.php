<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    // Menampilkan semua film
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    // Menampilkan form tambah film
    public function create()
    {
        return view('films.create');
    }

    // Menyimpan film baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'sutradara' => 'required',
            'tahun_rilis' => 'required|digits:4|integer',
            'genre' => 'required',
        ]);

        Film::create($request->all());
        return redirect()->route('films.index')->with('success', 'Film berhasil ditambahkan!');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $film = Film::findOrFail($id);
        return view('films.edit', compact('film'));
    }

    // Menyimpan perubahan update
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'sutradara' => 'required',
            'tahun_rilis' => 'required|digits:4|integer',
            'genre' => 'required',
        ]);

        $film = Film::findOrFail($id);
        $film->update($request->all());

        return redirect()->route('films.index')->with('success', 'Film berhasil diperbarui!');
    }

    // Menghapus film
    public function destroy($id)
    {
        $film = Film::findOrFail($id);
        $film->delete();

        return redirect()->route('films.index')->with('success', 'Film berhasil dihapus!');
    }
}
