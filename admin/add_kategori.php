<?php include '../inc/header.php'; include '../db/config.php'; ?>
<div class="container mt-4" style="margin-left:200px">
  <h4>Tambah Kategori</h4>
  <form action="kategori_action.php" method="POST">
    <div class="mb-3">
      <label for="nama_kategori" class="form-label">Nama Kategori</label>
      <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-danger">Simpan</button>
  </form>
</div>
<?php include '../inc/footer.php'; ?>