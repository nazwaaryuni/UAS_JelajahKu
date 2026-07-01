# Task 6: Cetak Raport Digital & Rekap Absensi Semester

## Deskripsi
Fase final dari satu siklus akademik (semester). Menggabungkan nilai akademik, ekstrakurikuler, dan rekap kehadiran ke dalam satu dokumen resmi.

## Kebutuhan (Requirements)
1. **Pembuatan Struktur Tabel**:
   - `report_cards`.
   - `settings` (untuk parameter global sekolah).
2. **Pembuatan Dummy Data (Seeder)**:
   - Seeder `settings` sekolah (nama sekolah, logo, rumus).
   - Seeder status `report_cards` untuk validasi tampilan dokumen final.
3. **Pembuatan Fitur**:
   - Dasbor Wali Kelas untuk melihat rekap penuh absensi & nilai kelas selama 1 semester.
   - Form untuk mengisi 'Catatan Wali Kelas'.
   - Tombol "Generate PDF" menggunakan library (misalnya dompdf/snappy) untuk menghasilkan rapor digital.
