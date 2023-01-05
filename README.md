# GoAbsensi

## _Apilkasi Presensi Dosen dan Pegawai Berbasis  Mobile_

[![Laravel](https://github.com/galangw/PBLKasir/actions/workflows/testing.yml/badge.svg)](https://github.com/galangw/PBLKasir/actions/workflows/testing.yml) [![Laravel](https://img.shields.io/github/v/release/galangw/PBLKasir)](https://github.com/galangw/PBLKasir/releases) [![Laravel](https://img.shields.io/github/commit-activity/w/galangw/PBLKasir)](https://github.com/galangw/PBLKasir/commits/main)

Aplikasi GoAbsensi Merupakan Aplikasi Presensi Dosen Dan Pegawai Berbasis Website (sebagai dahsboard admin dan layanan API) dan Mobile (Untuk User ketika melakukan Absensi). Dibuat dengan menggunakan framework Laravel, Flutter.

## Kelompok 1 (WEB) Kelas 3E

1. Muhammad F
2. Denta Artha Deananta
3. Irma Dwi Febriana
4. Diana Yuli Hertanti
5. Nisaul Apriyanti

## Kelompok 2 (Mobile) Kelas 3E

1. Agam Surya Armanda
2. Denta Artha Deananta
3. Irma Dwi Febriana
4. Diana Yuli Hertanti
5. Nisaul Apriyanti

## Original Repository

Web & Rest Api
https://github.com/agam-surya/presences_laravel
Mobile Flutter
https://github.com/agam-surya/GoAbsensi

## WEB

## Fitur

1. Autentikasi User

- Login Dan Logout User
- Ganti Password User(Karyawan)

2. Manajemen Produk

- List Produk, Kategori, Supplier
- Input Produk, Kategori, Supplier
- Hapus Produk, Kategori, Supplier

3. Transaksi

- Pencarian produk
- Konfirmasi Transaksi
- Cetak nota

4. Manajemen Transaksi

- List Transaksi Menurut Input tanggal
- Rekap Penjualan Dan Laba Menurut Input Tanggal

5. Manajemen User

- List User (karyawan)
- Input User Baru (karyawan)
- Edit User (karyawan)
- Hapus User (karyawan)

## Demo Web

| URL      | http://api.glng.my.id/login |
| -------- | --------------------------- |
| email    | admin@admin.com             |
| password | password                    |

## Instalasi WEB & REST API

### Spesifikasi

- PHP ^8.1
- PHP Composer
- Database MySQL atau MariaDB

### Cara Install

1. Clone atau download source code
   - Pada terminal, clone repo `git clone https://github.com/galangw/PBLKasir/`
   - Jika tidak menggunakan Git, silakan **Download Zip** dan _extract_ pada direktori web server (misal: xampp/htdocs)
2. `cd PBLKasir`
3. `composer install`
4. `cp .env.example .env`
   - Jika tidak menggunakan Git, bisa rename file `.env.example` menjadi `.env`
5. Pada terminal `php artisan key:generate`
6. Buat **database pada mysql** untuk aplikasi ini
7. **Setting database** pada file `.env`
8. `php artisan migrate`
9. `php artisan db:seed`
10. `php artisan serve`
11. Selesai

### Login Admin

```
Username: admin@admin.com
Password: password
```

## Api Akses Dan Dokumentasi

Dokumentasi Api Bisa Diakses Di : https://documenter.getpostman.com/view/23565435/2s8YzXvfNJ


## MOBILE APP

## Fitur

1. Autentikasi User

- Login Dan Logout User
- active session

2. Absen Masuk

- deteksi radius lokasi absen user dengan lokasi kampus 

3. Absen Pulang

- deteksi radius lokasi absen user dengan lokasi kampus

4. Ijin / Permission

- ijin WFH
- ijin Sakit
- bisa mengunggah file ijin, dan juga akhir waktu ijin

5. History atau Riwayat absensi

- Menampilkan setiap aktifitas (absen masuk, pulang, ijin, status ijin)
- Menampilkan Waktu pada saat melakukan aktifitas tersebut

5. Management User Profile

- add/update photo profile
- update informasi user (nama, no HP, alamat)

### Spesifikasi
- DART version: 2.17.0
- FLUTTER version: 3.0.0
- DEVTOOLS version: 2.12.2

cara installasi :

    - Clone project ini
    - ketikkan perintah flutter pub get di terminal
    
cara run project : 
    - hubungkan HP ke Laptop dengan kabel data
    - ketikkan flutter run di terminal
    - pilih devices yang akan menjalankan flutter nya ( windows,browser, atau Nama device kamu)
    - kemudian tunggu sampai proses compile nya selesai


## Screenshots WEB

    
 
## ScreenShots MOBILE APP



