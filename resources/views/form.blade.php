<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kirim Pesan ✉️</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      color: #332D56;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      position: relative;
      text-align: center;
      animation: fadeIn 1s ease-in-out;
    }

    /* 🌈 Gradasi Bergerak */
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

    /* 🫧 Bubble Effect */
    .bubble {
      position: fixed;
      bottom: -100px;
      background: rgba(255, 255, 255, 0.6);
      border-radius: 50%;
      animation: rise 12s infinite ease-in;
      z-index: -1;
      backdrop-filter: blur(2px);
    }

    .bubble:nth-child(1) { left: 10%; width: 60px; height: 60px; animation-delay: 0s; }
    .bubble:nth-child(2) { left: 25%; width: 25px; height: 25px; animation-delay: 2s; }
    .bubble:nth-child(3) { left: 50%; width: 80px; height: 80px; animation-delay: 4s; }
    .bubble:nth-child(4) { left: 70%; width: 40px; height: 40px; animation-delay: 1s; }
    .bubble:nth-child(5) { left: 90%; width: 50px; height: 50px; animation-delay: 3s; }

    @keyframes rise {
      0% { transform: translateY(0) scale(1); opacity: 1; }
      100% { transform: translateY(-110vh) scale(1.2); opacity: 0; }
    }

    /* ✨ Kontainer Form */
    form {
      background: rgba(255, 255, 255, 0.8);
      padding: 35px;
      border-radius: 25px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
      backdrop-filter: blur(10px);
      animation: fadeUp 1.2s ease-in-out;
      text-align: center;
      max-width: 400px;
      width: 90%;
    }

    h1 {
      font-size: 2rem;
      margin-bottom: 25px;
      color: #4A3A58;
      text-shadow: 1px 1px 5px rgba(255, 255, 255, 0.6);
      animation: slideDown 1s ease;
    }

    textarea {
      width: 100%;
      height: 120px;
      border-radius: 15px;
      border: 2px solid #FFCFCF;
      padding: 12px;
      font-size: 16px;
      resize: none;
      outline: none;
      background-color: #FFFDEC;
      transition: 0.3s;
    }

    textarea:focus {
      border-color: #71C0BB;
      box-shadow: 0 0 10px rgba(255, 182, 193, 0.5);
    }

    button {
      margin-top: 20px;
      padding: 10px 25px;
      background: linear-gradient(90deg, #FFCFCF, #FFF6B7, #B8E8C1);
      border: none;
      border-radius: 20px;
      font-weight: bold;
      color: #332D56;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    }

    button:hover {
      background: linear-gradient(90deg, #B8E8C1, #FFF6B7, #FFCFCF);
      transform: scale(1.05);
    }

    a {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      color: #332D56;
      font-weight: bold;
      background: rgba(255, 255, 255, 0.5);
      padding: 10px 20px;
      border-radius: 15px;
      transition: 0.3s;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    a:hover {
      background: rgba(255, 255, 255, 0.7);
      transform: scale(1.05);
    }

    /* 🎞️ Animasi */
    @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
    @keyframes fadeUp { from { transform: translateY(40px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
    @keyframes slideDown { from { transform: translateY(-30px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
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

  <h1>💌 Kirim Pesan </h1>

  <form action="{{ route('form.submit') }}" method="POST">
    @csrf
    <textarea name="message" placeholder="Tulis pesan kamu di sini..."></textarea><br>
    <button type="submit">Kirim Sekarang ✨</button>
  </form>

  <a href="{{ route('home') }}">⬅️ Kembali ke Daftar Buku</a>
</body>
</html>
