# 🏎️ LuxuryDrive Batam - Premium Car Rental Catalog

**LuxuryDrive Batam** adalah platform katalog penyewaan mobil mewah berbasis web yang dirancang dengan estetika modern, eksklusif, dan elegan. Proyek ini dibangun sebagai bagian dari tugas **Ujian Tengah Semester (UTS)** untuk mendemonstrasikan kemampuan pengembangan web menggunakan framework **Laravel** dengan fokus pada UI/UX yang premium.

---

## ✨ Fitur Utama

* **Obsidian & Glassmorphism UI:** Desain antarmuka gelap yang mewah dengan efek kaca transparan (*glassmorphism*) yang memberikan kesan modern dan mahal.
* **Boutique Gallery Layout:** Tata letak katalog yang asimetris dan artistik, memberikan "ruang napas" pada setiap unit armada agar terlihat lebih prestisius.
* **Dynamic Static Data:** Menggunakan arsitektur MVC (Model-View-Controller) dengan data yang dikelola melalui *Static Array* untuk efisiensi performa tanpa memerlukan database eksternal.
* **Responsive Design:** Tampilan yang optimal di berbagai perangkat, mulai dari desktop hingga perangkat seluler.
* **Smooth Reveal Animations:** Efek transisi halus saat halaman dimuat, memberikan pengalaman pengguna yang lebih interaktif.

---

## 🛠️ Tech Stack

* **Framework:** [Laravel 10+](https://laravel.com/)
* **Frontend:** HTML5, CSS3, JavaScript
* **Styling:** [Bootstrap 5.3](https://getbootstrap.com/)
* **Fonts:** Google Fonts (Montserrat & Inter)
* **Icons:** Bootstrap Icons

---

## 🚀 Panduan Instalasi (Untuk Penguji/Dosen)

Karena folder `vendor` tidak disertakan dalam repositori ini, silakan ikuti langkah-langkah berikut untuk menjalankan proyek di perangkat lokal Anda:

1.  **Clone Repositori:**
    ```bash
    git clone https://github.com/yesiuseai/luxurydrive-batam.git
    cd luxurydrive-batam
    ```

2.  **Instalasi Dependencies:**
    Pastikan Anda sudah menginstal [Composer](https://getcomposer.org/).
    ```bash
    composer install
    ```

3.  **Pengaturan Environment:**
    Salin file `.env.example` menjadi `.env` dan buat *application key*.
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4.  **Menjalankan Server:**
    ```bash
    php artisan serve
    ```
    Akses aplikasi di browser melalui alamat: `http://127.0.0.1:8000`

---

## 📂 Struktur Proyek

* **Controller:** `app/Http/Controllers/LuxuryCarController.php` (Logika data & routing)
* **Layout Utama:** `resources/views/layouts/main.blade.php` (CSS & Master Template)
* **Views:**
    * `home.blade.php`: Halaman landing dengan visual utama.
    * `katalog.blade.php`: Galeri armada kelas dunia.
    * `detail.blade.php`: Spesifikasi teknis mendalam tiap unit.

---

## 👤 Author

* **Nama:** [yesiuseai]
* **Status:** Mahasiswa Universitas (Batam)
* **Project:** UTS Pemrograman Web

---

*Dibuat dengan dedikasi untuk menciptakan pengalaman digital yang elegan.*
