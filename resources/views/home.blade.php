<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cloudy Thoughts</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, 
        #86A788 5%, 
        #FFE2E2 35%, 
        #FFCFCF 60%, 
        #FFFDEC 100%);
      background-size: 300% 300%;
      animation: gradientFlow 10s ease infinite;
      color: #4A3A58;
      overflow-x: hidden;
      padding: 40px 20px;
      position: relative;
    }

    h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3rem;
      color: #3B2E4D;
      margin-bottom: 15px;
      animation: fadeDown 1s ease forwards;
    }

    p {
      font-size: 1.1rem;
      max-width: 520px;
      line-height: 1.8;
      color: #51425E;
      opacity: 0;
      animation: fadeUp 1.5s ease forwards 0.5s;
      margin-bottom: 40px;
    }

    table {
      border-collapse: collapse;
      width: 90%;
      max-width: 700px;
      background: rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1);
      animation: fadeUp 1.5s ease forwards 0.9s;
    }

    th, td {
      padding: 14px 20px;
      border-bottom: 1px solid rgba(0,0,0,0.05);
    }

    th {
      background: rgba(255, 236, 236, 0.7);
      color: #3B2E4D;
      font-weight: 600;
    }

    td {
      color: #4A3A58;
      font-size: 0.95rem;
    }

    tr:hover {
      background: rgba(255, 255, 255, 0.8);
      transform: scale(1.01);
      transition: all 0.3s ease;
    }

    .signature {
      font-family: 'Playfair Display', serif;
      font-style: italic;
      margin-top: 40px;
      font-size: 1.1rem;
      color: #5F4B66;
      opacity: 0;
      animation: fadeUp 2s ease forwards 1.2s;
    }

    .btn {
      margin-top: 30px;
      padding: 12px 32px;
      border-radius: 25px;
      background: #FFE2E2;
      color: #3B2E4D;
      text-decoration: none;
      font-weight: bold;
      transition: all 0.3s ease;
      box-shadow: 0 6px 20px rgba(0,0,0,0.1);
      opacity: 0;
      animation: fadeUp 2s ease forwards 1.5s;
    }

    .btn:hover {
      background: #FFFDEC;
      transform: scale(1.08);
    }

    .circle {
      position: absolute;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.25);
      animation: float 10s infinite ease-in-out;
    }

    .circle:nth-child(1) { width: 100px; height: 100px; top: 10%; left: 15%; animation-delay: 0s; }
    .circle:nth-child(2) { width: 80px; height: 80px; top: 60%; left: 70%; animation-delay: 2s; }
    .circle:nth-child(3) { width: 120px; height: 120px; top: 40%; left: 80%; animation-delay: 4s; }
    .circle:nth-child(4) { width: 70px; height: 70px; top: 80%; left: 25%; animation-delay: 6s; }

    @keyframes fadeUp {
      from { transform: translateY(40px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    @keyframes fadeDown {
      from { transform: translateY(-40px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    @keyframes float {
      0%, 100% { transform: translateY(0) translateX(0); }
      50% { transform: translateY(-30px) translateX(20px); }
    }

    @keyframes gradientFlow {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
  </style>
</head>
<body>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>

  <h1>Data Buku Favorite☁️</h1>

  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Tahun Terbit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($books as $index => $book)
      <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $book['judul'] }}</td>
        <td>{{ $book['penulis'] }}</td>
        <td>{{ $book['tahun'] }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <div class="signature">— crafted with calmness by Ulfahtun Nur Karomah ✨</div>

  <a href="/" class="btn">Back to Main</a>
</body>
</html>
