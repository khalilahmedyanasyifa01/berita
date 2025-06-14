<?php include 'inc/header.php'; include 'db/config.php'; ?>

<style>
  :root {
    --warna-pink-utama: #E91E63; 
    --warna-pink-hover: #C2185B; 
    --warna-link: #D81B60;       
  }

  .card-header.tema-pink {
    background-color: var(--warna-pink-utama);
    color: white; 
  }

  .card-body h5 a {
    color: var(--warna-link);
    text-decoration: none; 
  }
  .card-body h5 a:hover {
    color: var(--warna-pink-hover); 
  }
  .kategori .list-group-item {
    color: var(--warna-link);
  }
  .kategori .list-group-item:hover {
    background-color: #FCE4EC; 
    color: var(--warna-pink-hover);
  }

  .hot-news-link a {
    color: var(--warna-link) !important; 
    text-decoration: none;
  }
  .hot-news-link a:hover {
    color: var(--warna-pink-hover) !important;
  }
  .pagination .page-link {
    color: var(--warna-pink-utama);
  }
  .pagination .page-link:hover {
    background-color: var(--warna-pink-utama);
    color: white;
  }
  .pagination .page-item.active .page-link {
    background-color: var(--warna-pink-utama);
    border-color: var(--warna-pink-hover);
    color: white;
  }
</style>
<div class="container mt-4">
  <div class="row">
    <div class="col-md-3">
      <div class="card kategori">
        <div class="card-header fw-bold tema-pink">Kategori</div>
        <ul class="list-group list-group-flush">
        <?php
        $kategori = $conn->query("SELECT * FROM kategori");
        while($kat = $kategori->fetch_assoc()) {
          echo "<a href='kategori.php?id={$kat['id']}' class='list-group-item'>{$kat['nama_kategori']}</a>";
        }
        ?>
        </ul>
      </div>
    </div>
    <div class="col-md-6">
      <?php
      $batas = 5;
      $hal = isset($_GET['hal']) ? $_GET['hal'] : 1;
      $mulai = ($hal - 1) * $batas;
      $berita = $conn->query("SELECT * FROM berita ORDER BY tanggal DESC LIMIT $mulai, $batas");
      while($b = $berita->fetch_assoc()) {
        echo "<div class='card mb-4'>
                <img src='uploads/{$b['gambar']}' class='card-img-top'>
                <div class='card-body'>
                  <h5><a href='detail.php?slug={$b['slug']}'>{$b['judul']}</a></h5>
                  <small class='text-muted'>Dipublikasikan: {$b['tanggal']}</small>
                  <p class='mt-2'>".substr(strip_tags($b['isi']),0,150)."...</p>
                </div>
              </div>";
      }
      $total = $conn->query("SELECT COUNT(*) as total FROM berita")->fetch_assoc()['total'];
      $pages = ceil($total / $batas);
      echo "<nav><ul class='pagination'>";
      for($i=1;$i<=$pages;$i++){
        $activeClass = ($i == $hal) ? 'active' : '';
        echo "<li class='page-item $activeClass'><a class='page-link' href='?hal=$i'>$i</a></li>";
      }
      echo "</ul></nav>";
      ?>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-header fw-bold tema-pink">Hot News 🔥</div>
        <ul class="list-group list-group-flush">
        <?php
        $hot = $conn->query("SELECT * FROM berita ORDER BY tanggal DESC LIMIT 5");
        while($h = $hot->fetch_assoc()) {
          echo "<li class='list-group-item'>
                  <div class='d-flex'>
                    <img src='uploads/{$h['gambar']}' width='60' height='40' class='me-2 rounded'>
                    <div class='hot-news-link'>
                      <a href='detail.php?slug={$h['slug']}' class='fw-semibold d-block'>{$h['judul']}</a>
                      <small class='text-muted'>{$h['tanggal']}</small>
                    </div>
                  </div>
                </li>";
        }
        ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php include 'inc/footer.php'; ?>