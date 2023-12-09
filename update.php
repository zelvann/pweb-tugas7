<?php
require 'includes/header.php';
if(isset($_GET['nik'])) {
  $data = bynik($_GET['nik']);
}
?>

<div class="container my-4">
  <div class="row">
    <div class="col col-4 mx-auto">
      <div class="card shadow">
        <div class="card-header">
          <h4 class="text-center">Update Form</h4>
        </div>
        <div class="card-body">
          <form action="process-update.php" method="post">
            <div class="form-group">
              <label for="">Nama</label>
              <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>">
            </div>
            <input type="hidden" name="nik" value="<?= $data['nik'] ?>">
            <div class="form-group">
              <label for="">Umur</label>
              <input type="text" name="umur" class="form-control" value="<?= $data['umur'] ?>">
            </div> 
            <div class="form-group">
              <label for="">Alamat</label>
              <input type="text" name="alamat" class="form-control" value="<?= $data['alamat'] ?>">
            </div>
            <div class="form-group">
              <label for="">Gender (M/F)</label>
              <input type="text" name="gender" class="form-control" value="<?= $data['gender'] ?>">
            </div>
            <div class="form-group">
              <label for="">Agama</label>
              <input type="text" name="agama" class="form-control" value="<?= $data['agama'] ?>">
            </div>
            <div class="form-group">
              <label for="">Sekolah Asal</label>
              <input type="text" name="sekolah_asal" class="form-control" value="<?= $data['sekolah_asal'] ?>">
            </div>
            <div class="form-group">
              <label for="">Tanggal Daftar</label>
              <input type="date" name="tanggal_daftar" class="form-control" value="<?= $data['tanggal_daftar'] ?>">
            </div>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-around">
            <a href="index.php" class="btn btn-danger btn-sm">Batal</a>
            <button type="submit" name="update" class="btn btn-primary btn-sm">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>