# INTI SURYA LABORATORIUM

Project ini adalah proyek yang dibangun menggunakan Laravel 10 dan PHP 8. Proyek ini berisi CRUD data barang untuk keperluan recruitment PT Inti Surya Laboratorium.

## Persyaratan

- PHP 8.0 atau lebih baru
- Composer
- MySQL atau MariaDB

## Instalasi

1. Clone repositori ini ke direktori lokal Anda:

    ```bash
    git clone https://github.com/bagasardi20155/intisuryalab.git
    cd intisuryalab
    ```

2. Instal dependensi menggunakan Composer:

    ```bash
    composer install
    ```

3. Salin file `.env.example` menjadi `.env` dan sesuaikan pengaturan database:

    ```bash
    cp .env.example .env
    ```

    Ubah pengaturan database di file `.env`:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=intisuryalab
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4. Generate application key:

    ```bash
    php artisan key:generate
    ```

5. Migrasi database:

    ```bash
    php artisan migrate
    ```

6. Jalankan server lokal:

    ```bash
    php artisan serve
    ```

    Akses aplikasi di browser Anda di `http://localhost:8000`.

## Catatan

- Jalankan route `http://localhost:8000/products` karena tidak terdapat halaman welcome
- Proyek ini menggunakan library SweetAlert2 untuk menampilkan notifikasi dan konfirmasi yang interaktif.

## Cara Reproduksi

1. Pastikan Anda telah menginstal semua persyaratan yang disebutkan di atas.
2. Ikuti langkah-langkah instalasi untuk mengatur proyek di lingkungan lokal Anda.
3. Jalankan server lokal dan akses aplikasi di browser Anda.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).