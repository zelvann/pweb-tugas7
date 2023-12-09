<?php
function All($tbname) {
  global $conn;
  $qry = "SELECT * FROM " . $tbname;
  $res = pg_query($conn,$qry);

  if(!$res) {
    echo "Error when mining data";
    exit;
  }
  while($row = pg_fetch_assoc($res)) {
    $results[] = $row;
  }
  return $results;
}

function bynik($id) {
  global $conn;
  $qry = "SELECT * FROM tugas7 WHERE nik = '$id'";
  $res = pg_query($conn,$qry);

  if(!$res) {
    echo "Error when mining data";
    exit;
  }

  while($row = pg_fetch_assoc($res)) {
    $results[] = $row;
  }
  return $results[0];
}

function insert($data) {
  global $conn;
  $dname = $data['nama'];
  $dnik = $data['nik'];
  $dumur = $data['umur'];
  $dalamat = $data['alamat'];
  $dgender = $data['gender'];
  $dagama = $data['agama'];
  $dsa = $data['sekolah_asal'];
  $ddate = $data['tanggal_daftar'];
  $qry = "insert into tugas7 values('$dname','$dnik',$dumur,'$dalamat','$dgender','$dagama','$dsa','$ddate')";
  $res = pg_query($conn,$qry);
  return pg_affected_rows($res);
}

function delete($id){
  global $conn;
  $qry = "delete from tugas7 where nik = '$id'";
  $res = pg_query($conn,$qry);
  return pg_affected_rows($res);
}

function update($data) {
  global $conn;
  $dname = $data['nama'];
  $dnik = $data['nik'];
  $dumur = $data['umur'];
  $dalamat = $data['alamat'];
  $dgender = $data['gender'];
  $dagama = $data['agama'];
  $dsa = $data['sekolah_asal'];
  $ddate = $data['tanggal_daftar'];
  $qry = "update tugas7 set nama = '$dname', umur = $dumur ,
          alamat = '$dalamat',gender = '$dgender',agama = '$dagama', 
          sekolah_asal = '$dsa', tanggal_daftar = '$ddate' 
          where nik = '$dnik'";
  $res = pg_query($conn,$qry);
  return pg_affected_rows($res);      
}
?>