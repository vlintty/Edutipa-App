<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Detail Film</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #FFF59D, #C8E6C9);
      text-align: center;
      padding: 50px;
    }
    .card {
      display: inline-block;
      background: #ffffffcc;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.2);
      width: 320px;
    }
    img {
      width: 200px;
      height: 300px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 20px;
    }
    h2 { color: #4A148C; }
    p { margin: 5px 0; }
    a {
      display: inline-block;
      margin-top: 15px;
      padding: 8px 20px;
      border-radius: 15px;
      background: #C8E6C9;
      text-decoration: none;
      font-weight: bold;
      color: #2E7D32;
    }
  </style>
</head>
<body>
  <div class="card">
    @if($film->poster)
      <img src="{{ asset('posters/' . $film->poster) }}" alt="Poster Film">
    @else
      <img src="https://via.placeholder.com/200x300?text=No+Poster" alt="Tidak ada poster">
    @endif

    <h2>{{ $film->judul }}</h2>
    <p><strong>Sutradara:</strong> {{ $film->sutradara }}</p>
    <p><strong>Tahun Rilis:</strong> {{ $film->tahun_rilis }}</p>
    <p><strong>Genre:</strong> {{ $film->genre }}</p>

    <a href="{{ route('films.index') }}">⬅️ Kembali</a>
  </div>
</body>
</html>
