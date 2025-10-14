<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Film</title>
  <style>
    body {
      background: linear-gradient(135deg, #FFC1CC, #FFF59D, #C8E6C9);
      background-size: 400% 400%;
      animation: gradient 10s infinite;
      font-family: 'Poppins', sans-serif;
      text-align: center;
      padding: 50px;
    }
    @keyframes gradient {
      0% {background-position: 0% 50%;}
      50% {background-position: 100% 50%;}
      100% {background-position: 0% 50%;}
    }
    form {
      display: inline-block;
      background: #ffffffcc;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.2);
      width: 300px;
    }
    input[type="text"],
    input[type="number"],
    input[type="file"] {
      display: block;
      width: 100%;
      margin: 10px 0;
      padding: 10px;
      border: none;
      border-radius: 10px;
      outline: none;
    }
    button {
      background: #81C784;
      border: none;
      padding: 10px 25px;
      border-radius: 15px;
      cursor: pointer;
      font-weight: bold;
      color: white;
      transition: 0.3s;
    }
    button:hover {
      background: #66BB6A;
    }
    a {
      display: block;
      margin-top: 15px;
      color: #4A148C;
      text-decoration: none;
      font-weight: bold;
    }
    h1 {
      color: #4A148C;
    }
  </style>
</head>
<body>
  <h1>Tambah Film Baru 🎬</h1>

  {{-- Penting: gunakan enctype untuk upload gambar --}}
  <form action="{{ route('films.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="poster"><strong>Poster Film:</strong></label>
    <input type="file" name="poster" accept="image/*" required>

    <input type="text" name="judul" placeholder="Judul Film" required>
    <input type="text" name="sutradara" placeholder="Sutradara" required>
    <input type="number" name="tahun_rilis" placeholder="Tahun Rilis" required>
    <input type="text" name="genre" placeholder="Genre" required>

    <button type="submit">💾 Simpan</button>
  </form>

  <a href="{{ route('films.index') }}">⬅️ Kembali</a>
</body>
</html>
