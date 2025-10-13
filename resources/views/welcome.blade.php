<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Selamat Datang di Website Sekolah</title>

  <style>
    body {
      margin: 0;
      height: 100vh;
      overflow: hidden;
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      background: linear-gradient(-45deg, #FFC1CC, #FFF59D, #C8E6C9, #FFECB3);
      background-size: 400% 400%;
      animation: gradientMove 10s ease infinite;
      position: relative;
    }

    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    h1 {
      color: #4A148C;
      font-size: 2.5rem;
      text-shadow: 2px 2px 10px rgba(0,0,0,0.2);
      margin-bottom: 1rem;
      animation: fadeIn 1.5s ease-in-out;
    }

    p {
      color: #4A148C;
      font-size: 1.1rem;
      opacity: 0.9;
      margin-bottom: 2rem;
      animation: fadeIn 2s ease-in-out;
    }

    .buttons {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      justify-content: center;
    }

    a {
      text-decoration: none;
      padding: 14px 32px;
      border-radius: 30px;
      font-weight: bold;
      font-size: 1rem;
      transition: all 0.3s ease;
      box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
    }

    a.home {
      background-color: #F8BBD0;
      color: #4A148C;
    }
    a.form {
      background-color: #FFF59D;
      color: #4A148C;
    }
    a.films {
      background-color: #C8E6C9;
      color: #1B5E20;
    }

    a:hover {
      transform: scale(1.08);
      filter: brightness(1.1);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Animasi bubble */
    .bubble {
      position: absolute;
      bottom: -100px;
      background: rgba(255,255,255,0.3);
      border-radius: 50%;
      animation: rise 10s infinite ease-in;
    }

    @keyframes rise {
      0% { transform: translateY(0) scale(1); opacity: 1; }
      100% { transform: translateY(-110vh) scale(1.3); opacity: 0; }
    }
  </style>
</head>
<body>

  <h1>Selamat Datang di Website Saya 🌸</h1>
  <p>Tempat belajar digital yang menyenangkan dan interaktif!</p>

  <div class="buttons">
    <a href="/home" class="home">📚Daftar Buku</a>
    <a href="/form" class="form">💌 Kirim Pesan</a>
    <a href="/films" class="films">🎬 Daftar Film</a>
  </div>

  <!-- Bubble animasi -->
  <script>
    const createBubble = () => {
      const bubble = document.createElement('div');
      const size = Math.random() * 60 + 20 + 'px';
      bubble.classList.add('bubble');
      bubble.style.width = size;
      bubble.style.height = size;
      bubble.style.left = Math.random() * 100 + 'vw';
      bubble.style.animationDuration = Math.random() * 5 + 5 + 's';
      document.body.appendChild(bubble);
      setTimeout(() => { bubble.remove(); }, 10000);
    };
    setInterval(createBubble, 500);
  </script>

</body>
</html>
