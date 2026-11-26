PROJECT CRUD SISTEM INFORMASI PERPUSTAKAAN - PHP NATIVE

TEKNOLOGI:
- PHP Native + PDO
- MySQL/MariaDB (XAMPP)
- HTML + Bootstrap 5

CARA MENJALANKAN:
1. Ekstrak folder perpus-php ke C:\xampp\htdocs\ (sehingga menjadi C:\xampp\htdocs\perpus-php).
2. Buka XAMPP Control Panel, Start Apache dan MySQL.
3. Buka http://localhost/phpmyadmin
4. Klik tab Import, pilih file db_perpustakaan.sql dari folder project, lalu klik Import/Go.
   (File SQL akan membuat database db_perpustakaan dan mengisi contoh data.)
5. Buka http://localhost/perpus-php


FITUR:
- Modul Buku: tambah, lihat, cari, edit, hapus.
- Modul Peminjaman: lihat transaksi, pinjam, kembalikan, hapus.
- Stok otomatis berkurang saat dipinjam dan bertambah saat dikembalikan.
- Peminjaman dicegah saat stok kosong.
- Buku dengan riwayat peminjaman tidak dapat dihapus (foreign key).
- Keterlambatan ditampilkan setelah melewati 7 hari.


CATATAN:
- Jika nama folder project berubah, sesuaikan BASE_URL di config/config.php.
- Bootstrap memakai CDN sehingga perlu koneksi internet untuk styling.
- Database direset setiap file SQL diimport ulang (DROP DATABASE).
