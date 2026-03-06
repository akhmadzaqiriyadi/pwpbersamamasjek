# Materi 7: Koneksi Database dengan PHP Data Object (PDO)
Ini materi praktikum ujung ketika OOP sudah dikuasai.
Kita menggunakan **Native PHP PDO** (Bukan `mysqli_connect` yang sudah sangat usang dan rawan Sql Injection).

### Pembahasan Utama:
- Mengenkapsulasi `host, username, password` pakai Visibility `private`.
- Menerapkan Pewarisan (`extends`) untuk memisahkan logika `Kerja Koneksi Database` dengan `Kerja Pemanggilan Tabel`. Jadi konektornya ada di bapak (Class Database), sedangkan anak-anak tinggal panggil tabel doang (Class MahasiswaRepository / MahasiswaData).
- Menerapkan `try {} catch() {}` lanjutan (PDOException).

---
### 🚀 Cara Menjalankan Kode Ini
**Cara 1: Menggunakan Terminal VSCode (Direkomendasikan)**
1. Pastikan folder utama dibuka di VSCode.
2. Buka Terminal VSCode (`Ctrl` + `~`).
3. Ketik perintah berikut dan tekan Enter:
   ```bash
   php 07_Database/index.php
   ```

**Cara 2: Menggunakan Browser & XAMPP**
1. Pastikan folder project ini berada di `xampp/htdocs`.
2. Buka browser dan ketik alamat:
   `http://localhost/pwpoopphp/07_Database/index.php`
