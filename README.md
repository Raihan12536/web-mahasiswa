<p align="center">
  <img src="public/images/banner.png" alt="Web Mahasiswa Banner" width="100%" style="border-radius: 8px;">
</p>

# 🎓 Web Mahasiswa - Sistem Informasi Akademik

<p align="center">
  <a href="https://laravel.com"><img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel"></a>
  <a href="https://www.php.net"><img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP"></a>
  <a href="https://getbootstrap.com"><img src="https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap"></a>
  <a href="https://www.mysql.com"><img src="https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL"></a>
  <a href="https://vitejs.dev"><img src="https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=white" alt="Vite"></a>
</p>

---

## 📝 Deskripsi Proyek

**Web Mahasiswa** adalah aplikasi sistem informasi akademik berbasis web yang dirancang untuk mengelola data mahasiswa, dosen, dan program studi secara efisien. Proyek ini dibangun menggunakan **Laravel v12** dan dirancang untuk keperluan mata kuliah Pemrograman Semester 4. 

Proyek ini mendemonstrasikan implementasi CRUD (Create, Read, Update, Delete) yang aman dengan validasi form yang ketat, templating dinamis menggunakan Blade, pagination data untuk efisiensi performa, serta pembelajaran query SQL dasar hingga lanjutan (raw SQL, prepared statements, binding queries, dan Eloquent).

---

## 🚀 Fitur Utama

- 👥 **Manajemen Data Mahasiswa (CRUD Lengkap)**
  - Validasi input ketat (NIM unik, alamat email valid, nomor HP numerik, IPK rasional).
  - Formulir penambahan dan pembaruan data yang responsif.
  - Halaman detail dan paginasi data.
- 👨‍🏫 **Manajemen Data Dosen (CRUD Lengkap)**
  - Pencatatan data dosen terintegrasi dengan atribut NIDN unik, program studi, email, dan no HP.
  - Fitur tambah, edit, dan hapus dosen secara real-time.
- 📚 **Manajemen Program Studi (Prodi)**
  - Menampilkan daftar program studi yang aktif di perguruan tinggi dengan antarmuka tabel bersih.
- ⚡ **Modul Praktikum & Query Database**
  - Implementasi berbagai metode query di Laravel (Raw SQL, Prepared Statements, Binding, Select Where, Database Statement).
  - Penanganan parameter route dinamis (`/mahasiswa/{nama}/{nim}`) dan opsional (`/dosen-param/{nama?}/{nip?}`).
- 🛡️ **Sistem Penanganan Error & Keamanan**
  - Mengamankan database dengan form validation (Laravel Request Validation).
  - Menyediakan fallback route kustom untuk menangani error 404 (Halaman Tidak Ditemukan) dengan anggun.

---

## 🛠️ Teknologi & Tools

Aplikasi ini dibangun menggunakan ekosistem teknologi modern:

| Komponen | Teknologi | Deskripsi |
| :--- | :--- | :--- |
| **Framework Utama** | [Laravel 12.x](https://laravel.com/) | Framework MVC PHP dengan ekosistem yang solid dan sintaksis yang elegan. |
| **Bahasa Pemrograman** | [PHP 8.2+](https://www.php.net/) | Engine backend utama dengan performa tinggi. |
| **Database** | [MySQL / MariaDB](https://www.mysql.com/) | Penyimpanan data relasional yang andal. |
| **Tampilan UI** | [Bootstrap 5.3](https://getbootstrap.com/) | Framework CSS modern dan responsif untuk estetika antarmuka. |
| **Build Tool** | [Vite](https://vitejs.dev/) | Frontend asset bundler super cepat. |

---

## 📊 Skema Database

Aplikasi ini memiliki tiga tabel utama yang terhubung:

### 1. Tabel `mahasiswas`
- `id` (Primary Key, Auto Increment)
- `nim` (Varchar, Unique, Kode unik mahasiswa)
- `nama_lengkap` (Varchar, Nama lengkap)
- `tempat_lahir` (Varchar, Kota kelahiran)
- `tgl_lahir` (Date, Tanggal lahir)
- `email` (Varchar, Unique, Alamat surel aktif)
- `no_hp` (Varchar, Nomor handphone aktif)
- `prodi` (Varchar, Nama Program Studi)
- `ipk` (Decimal, Indeks Prestasi Kumulatif)
- `alamat` (Text, Alamat tempat tinggal)
- `created_at` & `updated_at` (Timestamps)

### 2. Tabel `dosens`
- `id` (Primary Key, Auto Increment)
- `nidn` (Varchar, Unique, Nomor Induk Dosen Nasional)
- `nama_lengkap` (Varchar, Nama lengkap dosen)
- `email` (Varchar, Alamat surel dosen)
- `prodi` (Varchar, Program studi dosen)
- `no_hp` (Varchar, Nomor handphone dosen)
- `created_at` & `updated_at` (Timestamps)

### 3. Tabel `prodis`
- `id` (Primary Key, Auto Increment)
- `nama_prodi` (Varchar, Nama program studi)
- `created_at` & `updated_at` (Timestamps)

---

## 🗺️ Daftar Route Utama

Berikut adalah daftar endpoint routing yang tersedia di dalam aplikasi ini:

| HTTP Method | URI | Controller & Method | Deskripsi |
| :--- | :--- | :--- | :--- |
| **GET** | `/` | *Closure* | Halaman utama / Home |
| **GET** | `/profil` | *Closure* | Halaman profil instansi |
| **GET** | `/mahasiswa` | `MahasiswaController@index` | Menampilkan semua data mahasiswa (Pagination) |
| **GET** | `/mahasiswa-create` | `MahasiswaController@create` | Form tambah data mahasiswa |
| **POST** | `/mahasiswa` | `MahasiswaController@store` | Menyimpan data mahasiswa baru |
| **GET** | `/mahasiswa/{id}/edit` | `MahasiswaController@edit` | Form edit data mahasiswa |
| **GET** | `/dosen` | `DosenController@index` | Menampilkan semua data dosen (Pagination) |
| **GET** | `/prodi` | `ProdiController@index` | Menampilkan daftar Program Studi (Pagination) |
| **GET** | `/insert-sql` | `MahasiswaController@insertSql` | Demonstrasi insert menggunakan Raw SQL |
| **GET** | `/insert-prepared` | `MahasiswaController@insertPrepared` | Demonstrasi insert dengan Prepared Statement |
| **GET** | `/select-view` | `MahasiswaController@selectView` | Demonstrasi select database ke view |
| **ANY** | *fallback* | *Closure* | Menangani error 404 (Halaman tidak ditemukan) |

---

## ⚙️ Langkah Instalasi

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek ini di komputer lokal Anda:

### Prasyarat
Pastikan Anda sudah menginstal:
- **PHP >= 8.2**
- **Composer**
- **Node.js & NPM**
- **MySQL / XAMPP**

### Langkah-langkah
1. **Clone repositori ini:**
   ```bash
   git clone https://github.com/Raihan12536/web-mahasiswa.git
   cd belajar-laravel2
   ```

2. **Instal dependensi PHP:**
   ```bash
   composer install
   ```

3. **Salin file konfigurasi lingkungan (.env):**
   ```bash
   cp .env.example .env
   ```

4. **Konfigurasi Database di file `.env`:**
   Buka file `.env` dan sesuaikan nama database, username, dan password Anda:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database_anda
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Generate Application Key:**
   ```bash
   php artisan key:generate
   ```

6. **Jalankan Migrasi & Seeder Database:**
   ```bash
   php artisan migrate --seed
   ```

7. **Instal & bangun asset frontend (Vite & Bootstrap):**
   ```bash
   npm install
   npm run dev
   ```

8. **Jalankan local server Laravel:**
   ```bash
   php artisan serve
   ```
   Aplikasi dapat diakses melalui browser di alamat: [http://localhost:8000](http://localhost:8000)

---

## 📂 Struktur Direktori Utama

Untuk memudahkan pemahaman alur kode, berikut adalah struktur folder utama dari proyek ini:

```text
belajar-laravel2/
├── app/
│   ├── Http/
│   │   └── Controllers/         # Controller utama (Mahasiswa, Dosen, Prodi)
│   └── Models/                  # Model Eloquent (Mahasiswa, Dosen, Prodi)
├── config/                      # Konfigurasi aplikasi Laravel
├── database/
│   ├── migrations/              # Definisi skema tabel database
│   └── seeders/                 # Data dummy awal database
├── public/
│   └── images/                  # Aset gambar pendukung (seperti banner)
├── resources/
│   ├── views/                   # Template Blade (HTML & UI)
│   │   ├── akademik/            # View Mahasiswa (tambah, edit, list)
│   │   ├── dosen/               # View Dosen
│   │   ├── layouts/             # Layout utama (header, footer, main template)
│   │   └── prodi/               # View Program Studi
│   └── js/ & css/               # Script frontend & gaya visual
├── routes/
│   └── web.php                  # Semua rute web aplikasi
└── package.json & composer.json # Manajemen dependensi proyek
```

---

## 🤝 Kontribusi

Kontribusi selalu terbuka! Jika Anda ingin meningkatkan fungsionalitas aplikasi ini:
1. Fork repositori ini.
2. Buat branch fitur baru (`git checkout -b fitur/FiturBaru`).
3. Commit perubahan Anda (`git commit -m 'Menambahkan fitur baru yang luar biasa'`).
4. Push ke branch tersebut (`git push origin fitur/FiturBaru`).
5. Buat Pull Request.

---

## 📄 Lisensi

Proyek ini dilisensikan di bawah **[MIT License](LICENSE)**. Anda bebas menggunakannya untuk kebutuhan belajar maupun komersial.

---

<p align="center">
  Dibuat dengan ❤️ untuk Pembelajaran Pemrograman Web.
</p>
