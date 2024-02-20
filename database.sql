CREATE DATABASE kursus;

USE kursus;

CREATE TABLE pengguna (
    id_pengguna INT PRIMARY KEY,
    nama VARCHAR(255),
    username VARCHAR(255),
    password VARCHAR(255),
    role VARCHAR(50),
    alamat VARCHAR(255),
    email VARCHAR(255),
    login_time TIMESTAMP
);

CREATE TABLE kursus (
    id_kursus INT PRIMARY KEY,
    nama_kursus VARCHAR(255),
    kategori_kursus VARCHAR(50),
    durasi_kursus INT,
    biaya_kursus DECIMAL(10, 2),
    deskripsi_kursus TEXT
);

CREATE TABLE peserta (
    nomor_telepon INT PRIMARY KEY,
    nama_pengguna VARCHAR(255),
    id_pengguna INT,
    id_kursus INT,
    FOREIGN KEY (id_pengguna) REFERENCES pengguna(id_pengguna),
    FOREIGN KEY (id_kursus) REFERENCES kursus(id_kursus)
);

CREATE TABLE video (
    id_video INT PRIMARY KEY,
    id_kursus INT,
    judul_video VARCHAR(255),
    deskripsi_video TEXT,
    link_video VARCHAR(255),
    FOREIGN KEY (id_kursus) REFERENCES kursus(id_kursus)
);
