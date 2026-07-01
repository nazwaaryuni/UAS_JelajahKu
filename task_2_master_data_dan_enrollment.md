# Task 2: Master Data & Pembagian Kelas (Enrollment)

## Deskripsi
Membangun fondasi modul untuk pengelolaan master data pendidikan, serta fitur untuk mendistribusikan siswa ke rombongan belajar (kelas) di semester tertentu.

## Kebutuhan (Requirements)
1. **Pembuatan Struktur Tabel**:
   - `semesters`, `subjects`, `classes`, dan `enrollments`.
2. **Pembuatan Dummy Data (Seeder)**:
   - Buat seeder untuk mata pelajaran (`subjects`), daftar semester/tahun ajaran (`semesters`), dan daftar kelas (`classes`).
   - Buat seeder untuk mendaftarkan siswa secara *random* atau spesifik (`enrollments`) ke dalam kelas-kelas yang sudah dibuat agar tabel pivot terisi.
3. **Pembuatan Fitur CRUD & Logika Bisnis**:
   - Sediakan modul CRUD untuk entitas Mata Pelajaran, Semester, dan Kelas.
   - Buat fitur/antarmuka (untuk Admin/Principal) untuk mendaftarkan siswa ke dalam kelas (Enrollment).
