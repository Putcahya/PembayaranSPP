<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
<img src="{{ asset('/') }}images/logo.png" alt="Total Downloads">
## Tentang Aplikasi Pembayaran SPP

Aplikasi Pembayaran SPP adalah sebuah platform berbasis web yang dirancang untuk memudahkan proses pembayaran SPP (Sumbangan Pengembangan Pendidikan) bagi para siswa di sebuah sekolah. Aplikasi ini memberikan kemudahan bagi siswa dan pihak sekolah dalam mengelola pembayaran SPP secara efisien, aman, dan transparan.

### Fitur yang tersedia di Aplikasi Pembayaran SPP 

- Manajemen Siswa: Aplikasi ini memungkinkan pihak sekolah untuk mengelola data siswa, termasuk informasi pribadi, kelas, dan status pembayaran SPP.
- Pengelolaan Pembayaran SPP: Aplikasi ini memungkinkan siswa untuk melihat tagihan SPP yang harus dibayarkan.
- Riwayat Pembayaran: Aplikasi ini menyimpan riwayat pembayaran SPP, sehingga siswa dan pihak sekolah dapat melacak status pembayaran dengan mudah.
- Laporan Keuangan: Aplikasi ini menyediakan laporan keuangan yang dapat diakses oleh pihak sekolah, berisi informasi tentang jumlah pembayaran yang tertunda, dan riwayat pembayaran.

## Cara Menggunakan Aplikasi Pembayaran SPP
##### **Cara menggunakan Aplikasi Pembayaran SPP untuk Admin dan Petugas**
- Admin / petugas login. 
- Admin pilih menu petugas dan menginputkan data petugas.
- Admin pilih menu kelas dan menginputkan data kelas.
- Admin pilih menu spp dan menginputkan data spp.
- Admin pilih menu siswa dan menginputkan data siswa.
- Admin / Petugas pilih menu pembayaran.
- Admin / Petugas pilih siswa dan cek tagihannya.
- Admin / Petugas pilih bulan yang akan dibayar tagihannya.
- Admin / Petugas menginputkan data pembayaran.
- Admin / Petugas mencetak bukti pembayaran setiap bulan yang sudah dibayar SPP nya.

##### **Cara menggunakan Aplikasi Pembayaran SPP untuk Siswa**
- Siswa login.
- Aplikasi tampil riwayat pembayaran SPP yang sudah dibayar dan tagihan SPP yang belum dibayar sesuai siswa yang login.

## Teknologi Yang Digunakan
**Berikut ini teknologi yang digunakan untuk membuat Aplikasi Pembayaran SPP :**
- [Visual Sudio Code](https://code.visualstudio.com/download) - Text editor.
- [XAMPP](https://www.apachefriends.org/download.html) - Web server.
- [node.js](https://nodejs.org/en/download)
- [git](https://git-scm.com/downloads) - Version Control System.
- [Laravel](laravel.com ) - Framework PHP.
- [Bootstrap](https://getbootstrap.com/) - Framework CSS.
- [Composer](https://getcomposer.org/download/)

## Instalasi Aplikasi Pembayaran SPP

#### Instalasi Teknologi Yang Digunakan
- Install [XAMPP](https://www.apachefriends.org/download.html) dan hidupkan Apache dan MYSQL.
- Install [Node.js](https://nodejs.org/en/download) untuk menjalankan NPM (Node Package Manager).
- Install [Composer](https://getcomposer.org/download/)
- Install [Visual Sudio Code](https://code.visualstudio.com/download)
- Install [Git](https://git-scm.com/downloads)

#### Clone repositori ini dengan cara
- Buka file explore dan pilih letak folder dimana folder repositori ini akan disimpan
- Klik kanan dan pilih *Git Bash Here*
- Mulai clone repositori
```
git clone https://github.com/Putcahya/PembayaranSPP_UKK.git
```
- Pindah ke directori ke dalam folder PembayaranSPP_UKK
```
cd PembayaranSPP_UKK
```
- Menginstall composer ke project
```
composer install
```
- Menginstall NPM (Node Package Manager)
```
npm install
```
- Buka projrct di Text-Editor
```
code .
```
- Buatlah database
- Konfigurasi file *.env*
- Ubah DB_DATABASE pada file *.env* didalam folder PembayaranSPP_UKK untuk konfigurasi database sesuai nama database yang dibuat
- Lakukan perintah migration 
```
php artisan migrate
```
- Ubah *id_kelas* dan *id_spp* di phpmyadmin menjadi *null*
- Comment terlebih dahulu function created pada *UserObserver* agar tidak terjadi error
- Lakukan perintah db:seed untuk mengisi data di database
```
php artisan db:seed
```
- Jalankan Aplikasi Pembayaran SPP
```
npm run dev
```
```
php artisan serve
```
