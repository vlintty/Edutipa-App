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
            'poster' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->all();

        // Upload poster jika ada
        if ($request->hasFile('poster')) {
            $file = $request->file('poster');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('posters'), $filename);
            $data['poster'] = $filename;
        }

        Film::create($data);

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
            'poster' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $film = Film::findOrFail($id);
        $data = $request->all();

        // Jika ada file poster baru
        if ($request->hasFile('poster')) {
            $file = $request->file('poster');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('posters'), $filename);
            $data['poster'] = $filename;
        }

        $film->update($data);

        return redirect()->route('films.index')->with('success', 'Film berhasil diperbarui!');
    }

    // Menampilkan detail film
    public function show($id)
    {
        $film = Film::findOrFail($id);
        return view('films.show', compact('film'));
    }

    // Menghapus film
    public function destroy($id)
    {
        $film = Film::findOrFail($id);
        $film->delete();

        return redirect()->route('films.index')->with('success', 'Film berhasil dihapus!');
    }
}
