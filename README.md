# Tugas Rutin 9 -laravel setup
## Nama 
Anandita wulanda Limbong
## Program Studi 
Ilmu komputer kelas C
## Deskripsi 
project ini dibuat untuk memenuhi tugas rutin 9 pemograman web menggunakan framework laravel.
project ini menerapkan:
-instalasi laravel
-konfigurasi database Mysql
-Routing
-Blade View
-Dynamic Data
-Controller
-Model

## Cara Menjalankan Project 
-xampp apache dan mysql pastikan sudah aktif dan tidak error
-buka terminal pada folder project 
-jalankan printah :
'''bash 
php artisan serve
-setelah server berhasil dijalankan buka browser alamat 
## Routing
/ ->halam home
/about -> halaman About
/contact -> halaman contact
Model dibuat dengan menggunakan perintah artisan di termina

## Struktur Folder
pertemuan-9/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── HomeController.php
│   └── Models/
│       └── Mahasiswa.php
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│   └── views/
│       ├── home.blade.php
│       ├── about.blade.php
│       └── contact.blade.php
├── routes/
│   └── web.php
├── storage/
├── tests/
├── .env.example
├── .gitignore
├── artisan
├── composer.json
├── composer.lock
└── README.md

## Teknologi yang digunakan
- PHP
- Lavarel
- MySQL
- Blade
- Composer
- XAMPP