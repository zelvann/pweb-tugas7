<?php
require 'includes/header.php';

$getUrl = $_SERVER['REQUEST_URI'];
$uri = explode('/', $getUrl);
if($uri[2] == '' || $uri[2] == 'index.php') {
  $minings = All('tugas7');
}
?>

<div class="container my-4">
  <h3>Data Siswa Baru</h3>  
  <div class="row custom d-none">
    <div class="col"></div>
  </div> 
  <div class="row">
    <div class="col-md-10">
      <div class="card shadow">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">NIK</th>
                  <th scope="col">Umur</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Agama</th>
                  <th scope="col">Sekolah Asal</th>
                  <th scope="col">Tanggal Daftar</th>
                  <th scope="col">Tindakan</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($minings as $key => $mining): ?>
                  <tr>
                    <th scope="row"><?= $key + 1 ?></th>
                    <td><?= $mining['nama'] ?></td>
                    <td><?= $mining['nik'] ?></td>
                    <td><?= $mining['umur'] ?></td>
                    <td><?= $mining['alamat'] ?></td>
                    <td><?= $mining['gender'] ?></td>
                    <td><?= $mining['agama'] ?></td>
                    <td><?= $mining['sekolah_asal'] ?></td>
                    <td><?= $mining['tanggal_daftar'] ?></td>
                    <td>
                      <div class="btn-group" role="group">
                        <a href="update.php?nik=<?= $mining['nik'] ?>" class="btn btn-primary btn-sm"><img src="icon/pencil.svg" width="20"></a>
                        <a href="delete.php?nik=<?= $mining['nik'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Data akan terhapus')"><img src="icon/trash.svg" width="20"></a>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>  
    <div class="col-md-2 text-center side-navbar">
      <div class="card shadow">
        <div class="card-body">
          <a href="form.php" class="btn btn-primary btn-sm">Daftar</a>
        </div>
      </div>
    </div>            
  </div>
</div>
