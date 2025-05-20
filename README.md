# UTS Keamanan Informasi

## Tema: Data Fakultas

Proyek ini dibuat menggunakan Laravel 12 dan Filament v3 sebagai studi kasus untuk pengelolaan dan pengamanan data guru.


### Fitur Keamanan Yang diterapkan
| Fitur                   | Implementasi                                                                         |
| ----------------------- | ------------------------------------------------------------------------------------ |
| **Authentication**      | Filament default menggunakan Auth bawaan Laravel (gunakan Laravel Breeze/Jetstream). |
| **Authorization**       | Gunakan Filament Policy atau Gate agar hanya admin yang bisa mengelola data.         |
| **Input Validation**    | Tersedia otomatis melalui Filament Forms.                                            |
| **Database Protection** | Kolom sensitif (jika ada) bisa dienkripsi manual (`Crypt::encrypt`).                 |
| **Session Protection**  | Gunakan middleware `auth` untuk akses halaman.                                       |
| **Password Hashing**    | Jika ada login buatan, gunakan `Hash::make($password)` saat menyimpan.               |


### Fitur Utama:
- CRUD data fakultas (kode, nama, dekan, email)
- Tampilan admin menggunakan Filament v3
- Validasi input
- Pencarian dan sortir data

### File Tambahan:
- `jawaban_essay.pdf`: Berisi jawaban pertanyaan essay untuk UTS keamanan informasi

### Cara Menjalankan (setelah clone):
1. Jalankan `composer install`
2. Copy `.env.example` ke `.env` dan sesuaikan konfigurasi database
3. Jalankan `php artisan migrate`
4. Jalankan `php artisan serve`

---
**Disusun oleh:** Muhammad Fahrel 20230801197
