<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Film</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(-45deg, #FFC1CC, #FFF59D, #C8E6C9, #FFECB3);
      background-size: 400% 400%;
      animation: moveBg 10s ease infinite;
      min-height: 100vh;
      padding: 40px;
      text-align: center;
    }
    @keyframes moveBg {
      0% {background-position: 0% 50%;}
      50% {background-position: 100% 50%;}
      100% {background-position: 0% 50%;}
    }
    h1 { color: #4A148C; }
    table {
      width: 80%;
      margin: 20px auto;
      border-collapse: collapse;
      background: #fff7f7b3;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 12px;
      border-bottom: 1px solid #ddd;
    }
    th { background-color: #FFC1CC; color: #4A148C; }
    td button, a {
      border: none;
      padding: 6px 15px;
      border-radius: 15px;
      text-decoration: none;
      font-weight: bold;
      cursor: pointer;
    }
    a.add {
      display: inline-block;
      background: #C8E6C9;
      margin-bottom: 15px;
    }
    .edit { background: #FFF59D; color: #4A148C; }
    .delete { background: #FFC1CC; color: #880E4F; }
    .back {
      display: inline-block;
      margin-top: 20px;
      background: #FFECB3;
      color: #4A148C;
    }
  </style>
</head>
<body>
  <h1>🎬 Daftar Film</h1>

  <a href="{{ route('films.create') }}" class="add">+ Tambah Film</a>

  @if(session('success'))
    <p>{{ session('success') }}</p>
  @endif

  <table>
  <tr>
    <th>Judul</th>
    <th>Genre</th>
    <th>Tahun Rilis</th>
    <th>Aksi</th>
  </tr>
  @foreach($films as $film)
    <tr>
      <td>{{ $film->judul }}</td>
      <td>{{ $film->genre }}</td>
      <td>{{ $film->tahun_rilis }}</td>
      <td>
        <a href="{{ route('films.edit', $film->id) }}" class="edit">✏️ Edit</a>
        <form action="{{ route('films.destroy', $film->id) }}" method="POST" style="display:inline;">
          @csrf
          @method('DELETE')
          <button type="submit" class="delete" onclick="return confirm('Yakin mau hapus?')">🗑️ Hapus</button>
        </form>
      </td>
    </tr>
  @endforeach
</table>


  <a href="/" class="back">⬅️ Kembali ke Welcome</a>
</body>
</html>
