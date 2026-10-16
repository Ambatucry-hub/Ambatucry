# Cashie, pengelolaan stok sederhana berbasis web.

> **Status:** Milestone 1 — perencanaan proyek dan persiapan lingkungan kerja. Fitur di bawah masih berupa rencana dan akan diimplementasikan serta diuji secara bertahap.

## Deskripsi

Cashie membantu toko kecil, kantin, koperasi, dan usaha sederhana dalam mengelola produk, persediaan barang, serta transaksi penjualan. Proyek ini dikembangkan sebagai Project Based Learning (PjBL) mata kuliah **Pemrograman Berbasis Web**, dikerjakan bertahap mulai dari perencanaan antarmuka, implementasi halaman web, autentikasi, pengelolaan database, hingga publikasi aplikasi.

## Latar Belakang

Pencatatan transaksi dan stok secara manual rawan salah catat, menyulitkan pemantauan stok, dan memperlambat penyusunan rekap penjualan. KasirKu dirancang agar pencatatan produk, stok, transaksi, dan perhitungan pembayaran lebih terstruktur dan mudah dipantau.

## Tujuan

1. Mempermudah pengelolaan data produk dan kategori.
2. Membantu pencatatan persediaan barang.
3. Mempermudah pencatatan transaksi penjualan.
4. Menghitung total pembayaran dan kembalian secara otomatis.
5. Memperbarui stok setelah transaksi berhasil disimpan.
6. Menampilkan ringkasan produk dan penjualan melalui dashboard.
7. Menerapkan materi HTML, CSS, JavaScript, PHP, database, dan AJAX dalam aplikasi web sederhana.

## Target Pengguna

| Peran | Tugas |
|---|---|
| Admin | Mengelola produk, kategori, stok, dan memantau transaksi |
| Kasir | Melakukan transaksi penjualan dan mencatat pembayaran |

## Fitur yang Direncanakan

**Autentikasi**
- Login dengan username dan password, serta logout
- Pengelolaan session PHP
- Proteksi halaman agar hanya bisa diakses setelah login

**Dashboard**
- Jumlah produk dan ringkasan stok
- Jumlah transaksi hari ini dan total penjualan sederhana
- Tanggal dan waktu

**Kategori**
- Lihat, tambah, ubah, dan hapus kategori

**Produk dan Stok**
- Lihat, tambah, ubah (nama, kategori, harga, stok), dan hapus produk dengan konfirmasi
- Pencarian produk berdasarkan nama
- Pagination

**Transaksi Penjualan**
- Pilih satu atau beberapa produk beserta jumlahnya
- Hitung subtotal dan total transaksi
- Input pembayaran tunai dan hitung kembalian otomatis
- Simpan transaksi dan detail transaksi
- Kurangi stok setelah transaksi tersimpan

**Riwayat Transaksi**
- Daftar transaksi dan detail produk per transaksi
- Total pembayaran dan tanggal transaksi
- Pencarian/filter transaksi
- Pagination dengan jQuery AJAX

**Fitur Tambahan (setelah fitur wajib selesai)**
- Cetak struk transaksi sederhana
- Laporan penjualan harian dan bulanan
- Peringatan stok menipis

## Teknologi

| Teknologi | Kegunaan |
|---|---|
| HTML5 | Struktur halaman web |
| CSS3 | Desain dan tata letak |
| JavaScript | Interaksi dan validasi ringan |
| PHP Native | Logika aplikasi dan autentikasi |
| MySQL/MariaDB | Penyimpanan data |
| jQuery | Interaksi antarmuka |
| AJAX | Mengambil dan menampilkan data tanpa reload halaman |
| Git & GitHub | Version control dan penyimpanan repository |

## Rencana Struktur Database

| Tabel | Fungsi |
|---|---|
| `users` | Akun pengguna |
| `kategori` | Kategori produk |
| `produk` | Data produk, harga, dan stok |
| `transaksi` | Informasi transaksi penjualan |
| `detail_transaksi` | Rincian produk dalam setiap transaksi |

Struktur kolom, primary key, dan relasi antartabel akan ditentukan pada tahap implementasi database.

## Alur Penggunaan

1. Pengguna membuka aplikasi dan login.
2. Sistem memeriksa data login dan membuat session jika berhasil.
3. Pengguna masuk ke dashboard.
4. Admin mengelola kategori, produk, dan stok.
5. Kasir memilih produk yang dibeli pelanggan.
6. Sistem menghitung subtotal dan total pembayaran.
7. Kasir memasukkan nominal uang yang diterima.
8. Sistem menghitung kembalian dan menyimpan transaksi.
9. Stok produk diperbarui setelah transaksi tersimpan.
10. Riwayat transaksi dapat dilihat kembali melalui halaman transaksi.

## Struktur Folder

```
kasirku/
├── assets/
│   ├── css/
│   ├── js/
│   └── img/
├── config/
├── includes/
├── pages/
├── index.php
├── README.md
└── .gitignore
```

Struktur dapat dikembangkan sesuai kebutuhan selama implementasi.

## Lingkungan Pengembangan

- Visual Studio Code
- XAMPP (Apache, PHP, MySQL/MariaDB)
- Browser untuk menjalankan dan menguji aplikasi

## Cara Menjalankan (Lokal)

1. Instal dan jalankan XAMPP.
2. Aktifkan **Apache** dan **MySQL** melalui XAMPP Control Panel.
3. Letakkan folder `kasirku` di dalam direktori `htdocs`.
4. Buka folder proyek di Visual Studio Code.
5. Akses `http://localhost/kasirku/` di browser.

> Langkah konfigurasi database dan akun login akan ditambahkan setelah implementasi PHP dan database selesai.

## Anggota Kelompok

| No | Nama | NIM |
|---|---|---|
| 1 | Eugene Eric C | A11.2025.16192 |
| 2 | Muhammad Alif Pratama | A11.2025.16585 |
| 3 | Bunayya Iqbal Rafiif | A11.2025.16587 |

## Repository dan Deployment

- Repository GitHub: https://github.com/Ambatucry-hub/Ambatucry
- Tautan hosting: _belum ada_

## Dokumentasi Penggunaan AI

AI digunakan sebagai alat bantu untuk memahami materi pemrograman, menyusun rancangan awal proyek, dan menjelaskan solusi teknis selama pengembangan. Penggunaan AI dicatat dalam **AI Usage Log** untuk setiap milestone, mencakup tujuan penggunaan, ringkasan prompt, bagian yang dibantu, pemahaman mahasiswa, penyesuaian kode, dan hasil pengujian.
