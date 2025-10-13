<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Film</title>
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
      background: #ffffffa1;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.2);
    }
    input {
      display: block;
      width: 250px;
      margin: 10px auto;
      padding: 10px;
      border: none;
      border-radius: 10px;
      outline: none;
    }
    button {
      background: #C8E6C9;
      border: none;
      padding: 10px 25px;
      border-radius: 15px;
      cursor: pointer;
      font-weight: bold;
    }
    a {
      display: block;
      margin-top: 15px;
      color: #4A148C;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <h1>Edit Data Film 🎬</h1>

  <form action="{{ route('films.update', $film->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="judul" value="{{ $film->judul }}" placeholder="Judul Film" required>
    <input type="text" name="sutradara" value="{{ $film->sutradara }}" placeholder="Sutradara" required>
    <input type="number" name="tahun_rilis" value="{{ $film->tahun_rilis }}" placeholder="Tahun Rilis" required>
    <input type="text" name="genre" value="{{ $film->genre }}" placeholder="Genre" required>

    <button type="submit">Update</button>
  </form>

  <a href="{{ route('films.index') }}">⬅️ Kembali</a>
</body>
</html>
