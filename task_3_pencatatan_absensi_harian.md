# Task 3: Pencatatan Absensi Harian

## Deskripsi
Mengembangkan modul yang digunakan oleh guru atau wali kelas untuk mencatat dan merekapitulasi presensi harian siswa.

## Kebutuhan (Requirements)
1. **Pembuatan Struktur Tabel**:
   - `attendance` (berelasi dengan `enrollments`).
2. **Pembuatan Dummy Data (Seeder)**:
   - Buat seeder untuk mengisi data kehadiran dummy (seperti status hadir, sakit, izin, alpa) untuk beberapa siswa dalam beberapa minggu terakhir agar *chart* atau tabel rekap dapat divalidasi visualisasinya.
3. **Pembuatan Fitur**:
   - Form input absensi masal per kelas untuk digunakan oleh guru atau wali kelas.
   - Antarmuka riwayat kehadiran siswa yang bisa diakses oleh role Student dan Parent.
