-- db = pweb
-- table = tugas7

create table tugas7 (
	nama varchar(255) not null,
  nik varchar(20) PRIMARY KEY,
	umur integer not null,
	alamat varchar(255) not null,
	gender char(1) not null,
	agama varchar(16) not null,
	sekolah_asal varchar(64) not null,
	tanggal_daftar date not null
);