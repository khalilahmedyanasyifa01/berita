<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PortalPolmed</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root {
      --warna-pink-utama: #E91E63;
      --warna-pink-gelap: #C2185B;
      --warna-pink-muda: #FF4081;
      --warna-pink-hover: #EC407A;
      --warna-link: #F8BBD0;
      --warna-latar-hover: #FCE4EC;
    }
    
    /* Header Styles */
    .navbar-custom {
      background: linear-gradient(135deg, var(--warna-pink-utama) 0%, var(--warna-pink-muda) 100%);
      box-shadow: 0 4px 12px rgba(233, 30, 99, 0.2);
      padding: 0.5rem 0;
      position: relative;
      z-index: 1000;
    }
    
    .navbar-custom::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 3px;
      background: linear-gradient(90deg, var(--warna-pink-muda), var(--warna-pink-gelap), var(--warna-pink-muda));
    }
    
    .navbar-brand-custom {
      font-weight: 700;
      font-size: 1.8rem;
      background: linear-gradient(to right, white 0%, #FFEBEE 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-shadow: 0 2px 4px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
    }
    
    .navbar-brand-custom:hover {
      transform: translateY(-2px);
      text-shadow: 0 4px 8px rgba(0,0,0,0.15);
    }
    
    .search-btn-custom {
      background-color: white;
      color: var(--warna-pink-utama);
      border-radius: 25px;
      padding: 0.5rem 1.2rem;
      font-weight: 600;
      transition: all 0.3s ease;
      border: none;
    }
    
    .search-btn-custom:hover {
      background-color: var(--warna-latar-hover);
      color: var(--warna-pink-gelap);
      transform: translateY(-2px);
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    .search-input-custom {
      border-radius: 25px;
      padding: 0.5rem 1.5rem;
      border: 2px solid rgba(255,255,255,0.3);
      background-color: rgba(255,255,255,0.2);
      color: white;
      transition: all 0.3s ease;
    }
    
    .search-input-custom:focus {
      background-color: rgba(255,255,255,0.3);
      color: white;
      border-color: white;
      box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25);
    }
    
    .search-input-custom::placeholder {
      color: rgba(255,255,255,0.7);
    }
    
    /* Footer Styles */
    .bg-pink-theme {
      background: linear-gradient(135deg, var(--warna-pink-utama) 0%, var(--warna-pink-muda) 50%, var(--warna-pink-hover) 100%);
      color: white;
      position: relative;
    }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
      <div class="container">
        <a class="navbar-brand navbar-brand-custom" href="index.php">PortalPolmed</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Beranda</a>
            </li>
          </ul>
          
          <form class="d-flex" action="search.php" method="GET">
            <input class="form-control search-input-custom me-2" type="search" placeholder="Cari berita..." name="q">
            <button class="btn search-btn-custom" type="submit">
              <i class="bi bi-search"></i> Cari
            </button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <!-- Konten utama akan berada di sini -->
  <main class="flex-grow-1">
    <div class="container my-5">
      <!-- Konten halaman -->
    </div>
  </main>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>