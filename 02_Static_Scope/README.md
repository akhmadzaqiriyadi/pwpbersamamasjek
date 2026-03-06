# 🟡 Materi 2: Static Modifier & Error Handling (Fasilitas Umum & Penanganan Bencana)

Masuk ke materi pertemuan 4! Kita akan belajar dua konsep penting yang membuat aplikasimu terlihat lebih profesional.

### 1. Static Keyword (Fasilitas Umum Kampus)

Normalnya, kalau mau pakai fungsi di dalam Class, kita harus cetak dulu jadi objek pakai `new` (seperti di Materi 1). Tapi ada kalanya, ada info yang **milik bersama**, bukan milik individu mahasiswanya.

*   **Analogi:** 
    Bayangkan **Papan Pengumuman** di gerbang Universitas atau alamat Universitas. Kamu **nggak perlu repot-repot mendaftar jadi mahasiswa sah dulu** (nggak perlu di-`new`) cuma buat baca tulisan di papan pengumuman itu, kan? Siapapun yang lewat depan kampus bisa baca.
*   **Cara Pakai:**
    Kita cukup tambahkan kata `static`. Lalu untuk memanggilnya, kita pakai simbol titik dua ganda `::` (Disebut *Scope Resolution Operator*).
    Contoh: `Universitas::$namaUniversitas` (Nggak perlu nulis `$budi = new Universitas()` dulu).

### 2. Error Handling / Exception (Penanganan Bencana dengan Elegan)

Sebagai programmer yang baik, kita nggak boleh membiarkan aplikasi langsung *Crash* (tampil layar merah/putih mati) pas ada masalah.

*   **Analogi:**
    Kamu lagi nyetir motor ke kampus. Tiba-tiba ban motor bocor kena paku (Ini namanya `Error`).
    *   **Programmer Pemula:** Langsung marah, nabrak tiang, motor rusak, dan gak jadi ke kampus (Aplikasi *Crash* berhenti total).
    *   **Programmer Profesional:** Menyadari ban bocor, menuntun motor ke bengkel untuk ditambal, bayar, lalu lanjut jalan ke kampus (Ini namanya `Try-Catch`).
*   **Cara Kerja (Try-Catch):**
    *   `Try { ... }`: Kita coba jalankan rencananya (daftar ke kampus).
    *   `Throw`: Kalau ternyata syarat nggak terpenuhi (misal umurnya di bawah batas), lemparkan peringatan!
    *   `Catch (Exception) { ... }`: Tangkap peringatan itu, lalu tampilkan pesan yang ramah ke user ("Maaf, umur kamu belum cukup"), sehingga sisa program di bawahnya **tetap bisa berjalan** dengan aman.

### 🎮 Yuk Cobain Kodenya!
Buka file `index.php` di folder ini. Coba isikan angka umur `16` dan `18` di dalam kurung kurawal fungsi pendaftaran. Lihat bedanya! Yang umur `16` akan masuk ke bengkel `Catch` dengan rapi.

---
### 🚀 Cara Menjalankan Kode Ini
**Cara 1: Menggunakan Terminal VSCode (Direkomendasikan)**
1. Pastikan folder utama dibuka di VSCode.
2. Buka Terminal VSCode (`Ctrl` + `~`).
3. Ketik perintah berikut dan tekan Enter:
   ```bash
   php 02_Static_Scope/index.php
   ```

**Cara 2: Menggunakan Browser & XAMPP**
1. Pastikan folder project ini berada di `xampp/htdocs`.
2. Buka browser dan ketik alamat:
   `http://localhost/pwpoopphp/02_Static_Scope/index.php`
