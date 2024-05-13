# Mitraku

## Prasyarat

Pastiin local/development env kita udah menginstal ini:

-   PHP 8.2 atau yang lebih baru
-   Composer
-   Node.js dan npm
-   xampp / laragon / herd that include mysql
-   Internet

## Instalasi

1. **Clone Repository**

    ```bash
    git clone https://github.com/michael29-code/mitraku.git
    ```

2. **Pindah ke Direktori Proyek**

    ```bash
    cd mitraku
    ```

3. **Instal Dependensi PHP**

    ```bash
    composer install
    ```

4. **Instal Dependensi Frontend**

    ```bash
    npm install && npm run dev
    ```

5. **Salin Berkas Konfigurasi**

    ```bash
    cp .env.example .env && nano .env
    ```

    config env + buat database mitraku

6. **Generate Key Aplikasi** -> buka terminal baru

    ```bash
    php artisan key:generate
    ```

7. **Jalankan Migrasi Database**

    ```bash
    php artisan migrate
    ```

8. **Jalankan Server Pengembangan**

    ```bash
    php artisan serve
    ```

    akses project di `http://localhost:8000`/ `http://127.0.0.1:8000`.

## Penggunaan

Sebelum mau buat project harus fetch dulu yaa, jangan lupa push setelah selesai 1 fitur

MIT © 2024 Mitraku
