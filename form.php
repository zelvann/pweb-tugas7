<?php
require 'includes/header.php';
?>

<div class="container my-4">
  <div class="row">
    <div class="col col-4 mx-auto">
      <div class="card shadow">
        <div class="card-header">
          <h4 class="text-center">Form Pendaftaran</h4>
        </div>
        <div class="card-body">
          <form action="process-form.php" method="post">
            <div class="form-group">
              <label for="">Nama</label>
              <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap anda...">
            </div>
            <div class="form-group">
              <label for="">NIK</label>
              <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK anda...">
            </div>
            <div class="form-group">
              <label for="">Umur</label>
              <input type="text" name="umur" class="form-control" placeholder="Masukkan Umur anda...">
            </div>
            <div class="form-group">
              <label for="">Alamat</label>
              <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat anda...">
            </div>
            <div class="form-group">
              <label for="">Gender (M/F)</label>
              <input type="text" name="gender" class="form-control" placeholder="Masukkan Jenis Kelamin anda...">
            </div>
            <div class="form-group">
              <label for="">Agama</label>
              <input type="text" name="agama" class="form-control" placeholder="Masukkan Agama anda...">
            </div>
            <div class="form-group">
              <label for="">Sekolah Asal</label>
              <input type="text" name="sekolah_asal" class="form-control" placeholder="Masukkan Sekolah Asal anda...">
            </div>
            <div class="form-group">
              <label for="">Tanggal Daftar</label>
              <input type="date" name="tanggal_daftar" class="form-control" placeholder="Masukkan Tanggal Daftar anda...">
            </div>
          </div>
          <div class="card-footer">
            <div class="d-flex justify-content-around">
              <a href="index.php" class="btn btn-danger btn-sm">Batal</a>
              <button type="submit" name="daftar" class="btn btn-primary btn-sm">Daftar</button>
            </form>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>