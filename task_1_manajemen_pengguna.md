# Task 1: Manajemen Pengguna & Peran (User & Role Management)

## Deskripsi
Menyesuaikan sistem autentikasi dan manajemen pembuatan akun yang sudah ada di Laravel agar selaras dengan PRD, khusus untuk *role* pengguna: `principal`, `teacher`, `student`, dan `parent`.

## Kebutuhan (Requirements)
1. **Penyesuaian Struktur Tabel**:
   - Update migration tabel `users` untuk mengakomodasi 5 role utama (`admin`, `principal`, `teacher`, `student`, `parent`).
   - Buat migration untuk tabel profil `students` dan `teachers`. (Catatan: Pengisian profil dilakukan di menu terpisah, bukan dari menu CRUD User).
2. **Pembuatan/Pembaruan Dummy Data (Seeder)**:
   - Perbarui `UserSeeder` untuk menyuntikkan data akun dummy bagi setiap role.
   - Buat seeder khusus/terpisah jika memungkinkan atau integrasikan pembuatan profil dummy agar relasi dapat tervisualisasi.
3. **Penyesuaian Logika CRUD User**:
   - Update `UserController` agar **hanya** bertugas membuat akun (name, email, password, role) tanpa menginisialisasi tabel profil.
   - Update `UserController` (atau controller yang mengelola user) untuk menangani operasi Create, Read, Update, dan Delete untuk semua role baru.
   - Sistem harus mengenali dan memproses *role* pengguna secara dinamis saat proses CRUD.
   - **Wajib mengikuti standar coding style, pola arsitektur, dan konvensi penamaan yang sudah ada (existing)** pada modul user saat ini. Dilarang membuat pola baru yang tidak konsisten (misal: menggunakan library otorisasi baru jika sebelumnya manual, ikuti pendekatan manual yang ada).

## Tujuan Akhir (Definition of Done)
- Autentikasi berjalan lancar untuk kelima role tersebut.
- Data di database terisi oleh Seeder dengan format yang benar.
- Modul CRUD pengguna berjalan normal dengan pendekatan kode (coding style) bawaan proyek saat ini.
