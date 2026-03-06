# 🟢 Materi 1: Dasar-Dasar OOP (Cetakan dan Objek Nyata)

Selamat datang di materi pertama! Di sini kita akan mengubah pola pikir dari sekadar ngetik baris perintah (Procedural) menjadi memodelkan "Benda di Dunia Nyata" (OOP).

Bayangkan kita sedang membuat game *The Sims* versi kampus. 

### 📚 Istilah Penting & Analoginya:

1. **Class (Cetakan)**
   *   **Analogi:** Ibarat **Cetakan Kue** atau **KTP Kosong**. Dia cuma desain/kerangka, belum jadi benda nyata yang bisa dimakan/dipegang.
   *   *Di materi ini: Kita buat cetakan bernama `Class Mahasiswa`.*

2. **Object (Objek Nyata / Instantiation)**
   *   **Analogi:** Ini adalah **Kue Beneran** yang keluar dari cetakan tadi, atau **KTP Asli** yang sudah diprint. Proses merubah cetakan jadi objek nyata disebut **Instantiation** (pakai kata kunci `new`).
   *   *Di materi ini: Kita bikin mahasiswa beneran namanya "Budi Santoso".*

3. **Property (Sifat / Ciri-ciri)**
   *   **Analogi:** Apa yang dimiliki oleh si Mahasiswa? Mahasiswa punya **NIM**, **Nama**, dan **Jurusan**. Nah, data-data ini disebut Property. (Di PHP ditulis pakai lambang variabel `$`).

4. **Method (Kemampuan / Aksi)**
   *   **Analogi:** Mahasiswa bisa ngapain aja? Mahasiswa bisa `belajar()`, `nugas()`, atau `tidur()`. Nah, fungsi/aksi yang nempel di mahasiswa ini disebut Method.

5. **Constructor (Persiapan Otomatis)**
   *   **Analogi:** Saat bayi baru lahir ke dunia, otomatis dia diberi `nama` oleh orang tuanya. Nah, Constructor (`__construct`) adalah fungsi yang **otomatis jalan pertama kali** saat kita membuat objek baru (saat proses `new`). Biasanya dipakai buat masukin data awal seperti Nama dan NIM.

### 🎮 Yuk Cobain Kodenya!
Buka file `index.php` di folder ini. Coba ganti nama "Budi Santoso" jadi namamu sendiri, lalu jalankan kodenya lewat terminal! Minta dia (objek mahasiswa barumu) untuk `belajar()`.
