<style>
  .bg-pink-theme {
    background: linear-gradient(135deg, #E91E63 0%, #FF4081 50%, #EC407A 100%);
    color: white;
    position: relative;
    overflow: hidden;
  }
  .bg-pink-theme::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #FF80AB 0%, #FF4081 50%, #F50057 100%);
  }
  .footer-link {
    color: white;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
  }
  .footer-link:hover {
    color: #ffebee;
    transform: translateY(-2px);
    text-shadow: 0 2px 4px rgba(0,0,0,0.1);
  }
  .social-icon {
    font-size: 1.5rem;
    margin: 0 10px;
    transition: all 0.3s ease;
  }
  .social-icon:hover {
    transform: scale(1.2) translateY(-3px);
    color: #ffebee;
  }
  .contact-item {
    margin-bottom: 12px;
    padding-left: 8px;
    border-left: 2px solid rgba(255,255,255,0.3);
    transition: all 0.3s ease;
  }
  .contact-item:hover {
    border-left: 2px solid white;
    padding-left: 12px;
  }
  .footer-title {
    position: relative;
    display: inline-block;
    padding-bottom: 5px;
  }
  .footer-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 2px;
    background: white;
  }
  .footer-wave {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 20px;
    background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" fill="rgba(255,255,255,0.1)" opacity=".25"/></svg>');
    background-size: cover;
  }
</style>

<footer class="bg-pink-theme text-white py-5 mt-auto position-relative">
  <div class="footer-wave"></div>
  <div class="container position-relative">
    <div class="row">
      <div class="col-lg-4 mb-4 mb-lg-0">
        <h5 class="mb-3 footer-title">CityNews</h5>
        <p class="mb-4">Media informasi terkini seputar Sosial, berita terbaru, dan gaya hidup sehat untuk masyarakat modern.</p>
        <div class="d-flex">
          <a href="inde.php" class="btn btn-outline-light btn-sm rounded-pill me-2">Beranda</a>
          <a href="#" class="btn btn-outline-light btn-sm rounded-pill me-2">Artikel</a>
          <a href="#" class="btn btn-outline-light btn-sm rounded-pill">Tentang</a>
        </div>
      </div>
      
      <div class="col-lg-4 mb-4 mb-lg-0">
        <h5 class="mb-3 footer-title">Kontak Kami</h5>
        <div class="contact-item">
          <i class="bi bi-envelope me-2"></i>
          <a href="mailto:syifakhalilah216@gmail.com" class="footer-link">syifakhalilah216@gmail.com</a>
        </div>
        <div class="contact-item">
          <i class="bi bi-instagram me-2"></i>
          <a href="https://www.instagram.com/khalilah_msyifaa?igsh=aHllNDZ4ZWVkdDVx" target="_blank" class="footer-link">@Khalilah_msyifaa</a>
        </div>
        <div class="contact-item">
          <i class="bi bi-whatsapp me-2"></i>
          <a href="https://wa.me/6281371775657" target="_blank" class="footer-link">+62 813-7177-5657</a>
        </div>
        <div class="contact-item">
          <i class="bi bi-geo-alt me-2"></i>
          <span>Politeknik Negeri Medan</span>
        </div>
      </div>
      
      <div class="col-lg-4">
        <h5 class="mb-3 footer-title">Media Sosial</h5>
        <div class="d-flex mb-4">
          <a href="#" class="footer-link social-icon"><i class="bi bi-facebook"></i></a>
          <a href="#" class="footer-link social-icon"><i class="bi bi-instagram"></i></a>
          <a href="#" class="footer-link social-icon"><i class="bi bi-tiktok"></i></a>
          <a href="#" class="footer-link social-icon"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
    </div>
    
    <hr class="my-4" style="border-color: rgba(255,255,255,0.2);">
    
    <div class="text-center pt-2">
      <p class="mb-0">&copy; 2025 <strong>PortalPolmed</strong>. All Rights Reserved. | <a href="#" class="footer-link">Kebijakan Privasi</a> | <a href="#" class="footer-link">Syarat & Ketentuan</a></p>
    </div>
  </div>
</footer>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>