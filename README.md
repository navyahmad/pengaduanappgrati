# SMART - Sistem Manajemen APP Grati
[![Laravel Version](https://img.shields.io/badge/Laravel-10.x-red.svg)](https://laravel.com)
[![PHP Version](https://img.shields.io/badge/PHP-8.x-blue.svg)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)

---

## 📌 GitHub Repository Short Description / Deskripsi Singkat Repo GitHub
> **EN:** A Laravel 10-based web application designed to manage, monitor, and track the normalization of Alat Pengukur dan Pembatas (APP) disturbances for PLN customers under PT PLN (Persero) ULP Grati, UP3 Pasuruan.
>
> **ID:** Aplikasi web berbasis Laravel 10 yang dirancang untuk mengelola, memantau, dan mencatat tindak lanjut penormalan gangguan Alat Pengukur dan Pembatas (APP) pelanggan PT PLN (Persero) ULP Grati, UP3 Pasuruan.

---

## 📖 Deskripsi Proyek
**SMART (Sistem Manajemen APP Grati)** adalah platform manajemen internal yang digunakan oleh **PT PLN (Persero) Unit Induk Distribusi Jawa Timur - UP3 Pasuruan - ULP Grati** untuk mendokumentasikan keluhan pelanggan terkait Alat Pengukur dan Pembatas (APP), seperti KWh Meter dan MCB.

Aplikasi ini mendigitalisasi proses pelaporan gangguan dari pelanggan, pengecekan oleh petugas di lapangan, pengangkutan alat pengukur ke kantor, hingga proses penormalan kembali (penggantian/perbaikan meter dan MCB) serta penutupan laporan kasus oleh Admin.

---

## 🛠️ Fitur Utama
1. **Autentikasi & Multi-Role**:
   - **Admin ULP Grati**: Memiliki akses penuh terhadap manajemen data gangguan, pengaduan selesai, pemulihan data, penghapusan massal, dan monitoring laporan.
   - **Petugas Lapangan**: Dapat menginput data gangguan, mengunggah foto bukti pembongkaran, memasukkan data penormalan (nomor meter baru, sisa token, ukuran MCB baru), dan memperbarui status penanganan.
2. **Manajemen Gangguan APP (Gangguan APP)**:
   - Pencatatan informasi lengkap pelanggan (No. Agenda, ID Pelanggan, Nama, Alamat, Tarif, Daya, Telepon).
   - Pencatatan jenis gangguan & kronologi kerusakan (misal: LCD rusak, keypad macet, terminal terbakar, bypass KWh/MCB).
   - Pengunggahan foto bukti (Foto Bongkar, Foto Pasang, Foto Lokasi/Pelanggan).
3. **Penormalan APP (Penormalan APP)**:
   - Pencatatan tindak lanjut pemasangan kembali APP baru.
   - Pendataan detail perangkat baru: Merk Meter, Nomor Meter, Merk MCB, Ukuran MCB, serta Sisa Token saat pembongkaran.
   - Upload foto bukti penormalan lapangan.
4. **Tindak Lanjut Selesai**:
   - Dashboard khusus untuk memonitor laporan-laporan gangguan yang telah sukses dinormalisasi (selesai ditangani).
5. **Ekspor & Impor Data (Excel)**:
   - Fitur ekspor seluruh data laporan gangguan dan penormalan ke format `.xlsx` untuk kebutuhan pelaporan manajemen.
   - Fitur impor data gangguan massal menggunakan template file Excel.
6. **Grafik Data Pengaduan**:
   - Representasi visual data keluhan APP yang terintegrasi di halaman Beranda untuk mempermudah monitoring tren gangguan bulanan/tahunan.

---

## 🔄 Alur Pengaduan & Penormalan APP
Proses penanganan gangguan pada aplikasi SMART mengikuti 6 tahapan utama:
1. **Pelanggan Mengadukan APP**: Pelanggan melaporkan gangguan APP kepada petugas PLN.
2. **Petugas Mengecek APP**: Petugas datang ke lokasi untuk memverifikasi dan mengecek kondisi fisik KWh meter / MCB.
3. **Petugas Menginputkan Pengaduan**: Petugas menginput detail data pelanggan serta kronologi gangguan ke dalam website SMART.
4. **Petugas Mengangkut APP ke Kantor**: Petugas membongkar APP yang rusak dan membawanya ke kantor untuk pemeriksaan lebih mendalam.
5. **Petugas Menginput Tindak Lanjut Penormalan**: Petugas memasang APP pengganti/baru dan menginput data alat baru (nomor seri, merk, sisa token) ke website SMART.
6. **Pemasangan Penormalan Selesai**: APP baru sukses beroperasi di sisi pelanggan, status diperbarui menjadi selesai, dan laporan diarsipkan.

---

## 💻 Tech Stack
- **Backend Framework**: Laravel v10.x
- **Bahasa Pemrograman**: PHP v8.x
- **Database**: MySQL / MariaDB
- **Frontend / Styling**: Vanilla CSS, Bootstrap v4.0, FontAwesome v5.15, Animate On Scroll (AOS), Lottie Files animations.
- **Library Tambahan**: `maatwebsite/excel` (Import/Export Excel)

---

## 🗃️ Struktur Database Utama

### 1. Tabel `users` (Pengguna Sistem)
- `name` (Nama Lengkap)
- `username` (Username login)
- `email` (Alamat email)
- `password` (Password terenkripsi)
- `role` (Peran pengguna: `admin` / `petugas`)

### 2. Tabel `datas` (Laporan Gangguan APP)
- `no_agenda` (Nomor Agenda Pelayanan)
- `nopel` (Nomor ID Pelanggan)
- `nama_pl` (Nama Pelanggan)
- `alamat` (Alamat Pelanggan)
- `tarif` (Golongan Tarif Listrik)
- `daya` (Daya Listrik Pelanggan)
- `tlp` (Nomor Telepon Kontak)
- `jns_p` (Jenis Penertiban / Tindakan)
- `jns` (Kronologi Kerusakan APP)
- `jns_kwh` (Jenis KWh Meter)
- `uk_mcb` (Ukuran MCB Awal)
- `nm_petugas` / `nm_petugas2` (Nama Petugas Lapangan yang Bertugas)
- `tgl` (Tanggal Pengaduan)
- `st` (Status Surat Tugas)
- `kt` (Keterangan Tambahan)
- `ft_bongkar` / `ft_pasang` / `ft_pl` (Path file foto pembongkaran, pemasangan, dan pelanggan)

### 3. Tabel `penormalans` (Pencatatan Penormalan / Tindak Lanjut)
- `data_id` (Relasi Foreign Key ke tabel `datas`)
- `tindak` (Tindak Lanjut Penormalan)
- `nm1` / `nm2` (Nama Petugas Penormalan)
- `tgl_normal` (Tanggal Pemasangan Kembali/Normalisasi)
- `merk_mtr` (Merk KWh Meter Baru)
- `no_mtr` (Nomor KWh Meter Baru)
- `merk_mcb` (Merk MCB Baru)
- `ukr_mcb` (Ukuran MCB Baru)
- `sisa_token` (Sisa Token KWh Meter Lama)
- `ft1` / `ft2` (Foto bukti hasil penormalan)
- `status` (Status penanganan: default `proses`, dapat berubah menjadi selesai)

---

## 🔑 Akun Default (Database Seeders)
Untuk keperluan uji coba sistem, berikut adalah akun default yang telah disiapkan di dalam seeder:

| Peran (Role) | Username | Password | Email |
| :--- | :--- | :--- | :--- |
| **Admin 1** | `navy ahmad` | `okenavy123` | `navyahmad@gmail.com` |
| **Admin ULP** | `51352_ULPGRATI` | `51352_ULPGRATI` | `ulpgrati@gmail.com` |
| **Petugas Lapangan** | `51352_PETUGAS` | `51352_PETUGAS` | `petugas@gmail.com` |

---

## 🚀 Panduan Instalasi & Cara Menjalankan

### Prerequisites
- PHP >= 8.1
- Composer
- MySQL / XAMPP
- Web Browser

### Langkah-langkah
1. **Clone repository ini**:
   ```bash
   git clone https://github.com/username/repo-name.git
   cd SMART
   ```

2. **Install dependencies**:
   ```bash
   composer install
   npm install
   ```

3. **Duplikat dan konfigurasi file `.env`**:
   Salin `.env.example` menjadi `.env` lalu sesuaikan konfigurasi database Anda.
   ```bash
   cp .env.example .env
   ```
   *Atur detail database di `.env`:*
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database_anda
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Generate Application Key**:
   ```bash
   php artisan key:generate
   ```

5. **Jalankan Migrasi & Database Seeder**:
   Gunakan perintah ini untuk membuat tabel sekaligus memasukkan data akun default ke dalam database.
   ```bash
   php artisan migrate --seed
   ```

6. **Hubungkan Storage Link**:
   Perintah ini wajib dijalankan agar file foto bongkar/pasang yang diunggah ke storage dapat diakses secara publik oleh aplikasi.
   ```bash
   php artisan storage:link
   ```

7. **Jalankan Server Lokal**:
   ```bash
   php artisan serve
   ```
   Akses aplikasi melalui browser di alamat: [http://127.0.0.1:8000](http://127.0.0.1:8000)
