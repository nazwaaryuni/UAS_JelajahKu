# Task 4: Input Nilai Per Mata Pelajaran (Grading)

## Deskripsi
Fasilitas krusial bagi guru mata pelajaran untuk menginput berbagai komponen penilaian siswa sehingga menghasilkan nilai akhir yang terukur.

## Kebutuhan (Requirements)
1. **Pembuatan Struktur Tabel**:
   - `grades`.
2. **Pembuatan Dummy Data (Seeder)**:
   - Buat seeder yang menyuntikkan skor fiktif (tugas, kuis, UTS, UAS) untuk siswa-siswa yang terdaftar (`enrollments`) pada mata pelajaran yang diajar oleh guru tertentu.
3. **Pembuatan Fitur**:
   - Form grid/tabel interaktif bagi Guru untuk menginput nilai secara masif per kelas.
   - Sistem auto-kalkulasi (trigger/mutator/service) nilai akhir (Total Score) berdasarkan bobot yang ditentukan.
   - Tampilan rincian nilai yang dapat dilihat oleh Siswa dan Orang Tua.
