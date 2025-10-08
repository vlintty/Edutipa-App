<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Buku Luar Negeri</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      color: #333;
      min-height: 100vh;
      overflow-x: hidden;
      position: relative;
      animation: fadeIn 1s ease-in-out;
    }

    /* 🌈 Animasi Background Gradasi Bergerak */
    body::before {
      content: '';
      position: fixed;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      z-index: -2;
      background: linear-gradient(270deg, #FFCFCF, #FFF6B7, #B8E8C1, #FFD1E3);
      background-size: 800% 800%;
      animation: gradientMove 15s ease infinite;
    }

    /* 🫧 Bubble Animasi */
    .bubble {
      position: fixed;
      bottom: -100px;
      background: rgba(255, 255, 255, 0.6);
      border-radius: 50%;
      animation: rise 12s infinite ease-in;
      z-index: -1;
      backdrop-filter: blur(2px);
    }

    @keyframes rise {
      0% { transform: translateY(0) scale(1); opacity: 1; }
      100% { transform: translateY(-110vh) scale(1.2); opacity: 0; }
    }

    /* Bubble variasi ukuran & posisi */
    .bubble:nth-child(1) { left: 10%; width: 60px; height: 60px; animation-delay: 0s; }
    .bubble:nth-child(2) { left: 30%; width: 25px; height: 25px; animation-delay: 3s; }
    .bubble:nth-child(3) { left: 50%; width: 80px; height: 80px; animation-delay: 6s; }
    .bubble:nth-child(4) { left: 70%; width: 40px; height: 40px; animation-delay: 1.5s; }
    .bubble:nth-child(5) { left: 85%; width: 50px; height: 50px; animation-delay: 4s; }

    /* ✨ Kontainer */
    .container {
      max-width: 850px;
      margin: 80px auto;
      background: rgba(255, 255, 255, 0.85);
      padding: 40px;
      border-radius: 25px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(10px);
      animation: fadeUp 1.3s ease-in-out;
    }

    h1 {
      text-align: center;
      margin-bottom: 25px;
      color: #332D56;
      font-size: 2.3rem;
      text-shadow: 1px 1px 4px rgba(255, 255, 255, 0.6);
      animation: slideDown 1s ease-out;
    }

    /* 🔍 Pencarian */
    .search-box {
      text-align: center;
      margin-bottom: 25px;
      animation: fadeUp 1.5s ease;
    }

    .search-box form {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 10px;
    }

    .search-box input {
      width: 70%;
      padding: 12px 15px;
      border-radius: 10px;
      border: 2px solid #FFCFCF;
      outline: none;
      font-size: 16px;
      background-color: #FFFDEC;
      color: #333;
      transition: 0.3s;
    }

    .search-box input:focus {
      border-color: #71C0BB;
      box-shadow: 0 0 10px rgba(255, 182, 193, 0.6);
    }

    .search-box button {
      background-color: #FFB6C1;
      border: none;
      padding: 12px 20px;
      border-radius: 10px;
      cursor: pointer;
      color: #332D56;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    .search-box button:hover {
      background-color: #FFF6B7;
      transform: scale(1.05);
    }

    /* 📖 Tabel Buku */
    table {
      width: 100%;
      border-collapse: collapse;
      overflow: hidden;
      border-radius: 15px;
      margin-top: 10px;
      animation: fadeUp 1.7s ease-in-out;
    }

    th, td {
      padding: 14px;
      text-align: left;
    }

    th {
      background-color: #71C0BB;
      color: #fff;
    }

    tr:nth-child(even) {
      background-color: rgba(255, 255, 255, 0.6);
    }

    tr:hover {
      background-color: #FFE2E2;
      transform: scale(1.01);
      transition: all 0.2s ease-in-out;
    }

    /* ✉️ Pesan */
    .message-box {
      margin-top: 25px;
      background: linear-gradient(90deg, #FFB6C1, #FFF6B7, #B8E8C1);
      padding: 18px;
      border-radius: 15px;
      text-align: center;
      color: #332D56;
      font-weight: 600;
      animation: popIn 1s ease-in-out;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    /* 🔗 Tombol Pesan Baru */
    a {
      display: inline-block;
      margin-top: 25px;
      text-decoration: none;
      color: #332D56;
      font-weight: bold;
      background: linear-gradient(90deg, #FFCFCF, #FFF6B7, #B8E8C1);
      padding: 12px 25px;
      border-radius: 12px;
      transition: 0.3s;
      animation: fadeUp 2s ease;
      box-shadow: 0 5px 10px rgba(0,0,0,0.15);
    }

    a:hover {
      background: linear-gradient(90deg, #B8E8C1, #FFF6B7, #FFCFCF);
      transform: scale(1.05);
    }

    /* 🎞️ Animasi */
    @keyframes fadeIn {
      from { opacity: 0; } to { opacity: 1; }
    }
    @keyframes slideDown {
      from { transform: translateY(-40px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
    @keyframes fadeUp {
      from { transform: translateY(40px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
    @keyframes popIn {
      0% { transform: scale(0.8); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }
    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
  </style>
</head>
<body>
  <!-- 🫧 gelembung latar -->
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>

  <div class="container">
    <h1>🌷 Daftar Buku Luar Negeri</h1>

    <div class="search-box">
      <form method="GET" action="{{ route('home') }}">
        <input type="text" name="search" placeholder="Cari judul atau penulis..." value="{{ $search ?? '' }}">
        <button type="submit">🔍 Cari</button>
      </form>
    </div>

    <table>
      <thead>
        <tr>
          <th>Judul</th>
          <th>Penulis</th>
          <th>Tahun</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($books as $item)
        <tr>
          <td>{{ $item['judul'] }}</td>
          <td>{{ $item['penulis'] }}</td>
          <td>{{ $item['tahun'] }}</td>
        </tr>
        @empty
        <tr>
          <td colspan="3" style="text-align:center;">Tidak ada buku ditemukan</td>
        </tr>
        @endforelse
      </tbody>
    </table>

    @if (!empty($message))
    <div class="message-box">
      Pesan yang kamu kirim: <br> <em>"{{ $message }}"</em>
    </div>
    @endif

    <div style="text-align:center;">
      <a href="{{ route('form') }}">💌 Kirim Pesan Baru</a>
    </div>
  </div>
</body>
</html>
