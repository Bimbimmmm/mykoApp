<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
<p align="center"><img src="https://mykohotel.com/wp-content/uploads/2017/08/Myko-Hotel-Convention-Center-Makassar-Hotel-Recommendation-by-MNC-YouTube-Google-Chrome-2017-08-31-16.49.06.png" width="400"></p>


<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Apa itu Myko App?
Myko App adalah sebuah aplikasi berbasis web yang dijalankan menggunakan framework Laravel versi 7.0 dan menggunakan database PostgreSQL versi 12. Aplikasi Myko App ini khusus dipergunakan oleh staff internal Myko Hotel dan tidak digunakan oleh member

## Bagaimana cara menginstall/menggunakan Myko App pada server lokal?
- pull atau download repository github ini.
- install semua perlengkapan yang dibutuhkan seperti composer, dan pgadmin4 (jika belum ada)
- buka command line
- arahkan ke folder Myko App yang telah didownload tadi
- ketikkan perintah "php artisan serve" pada terminal
- buka browser (disarankan menggunakan google chrome)
- ketikkan alamat localhost dan tambahkan port 8000 (127.0.0.1:8000)
- anda akan diarahkan ke halaman login
- jalankan pgadmin dan buat database dengan nama "myko_app"
- buka project Myko App di text editor (Atom, Visual code, Sublime)
- buka file .env dan ubah bagian DB_USERNAME dan DB_PASSWORD sesuai dengan username dan password dari pgadmin anda
- buka terminal baru dan arahkan ke folder myko app yang telah didowload tadi
- ketikkan perintah "php artisan migrate"
- cek di pgadmin4 apakah tabel telah berhasil dibuat
- jika telah berhasil maka langkah selanjutnya adalah melakukan seeder ke database yang telah dibuat tadi
- masuk ke folder seeds lalu buka folder UsersSeeder.php
- isi data yang dibutuhkan untuk login sebagai admin pada public function run()
- buka terminal dan ketikkan "composer dump-autoload"
- lalu ketikkan "php artisan db:seed"
- jika berhasil maka kembali ke halaman login
- masukkan email dan password yang telah dimasukkan tadi untuk login sebagai admin
- TADAAAAAA!!!!!! anda telah berhasil login
- silahkan menunggu atau membuat aplikasi myko_app_mobile untuk digunakan oleh member
