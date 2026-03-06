# 🎓 Belajar PHP OOP Bersama Mas Jek
Selamat datang di repositori belajar **Object-Oriented Programming (OOP)** dengan PHP! Di sini kita akan belajar OOP dengan cara yang *sangat santai*, menggunakan analogi kehidupan nyata di **Universitas**.

Bayangkan OOP itu seperti membangun miniatur dunia nyata ke dalam bentuk kode. Daripada pusing memikirkan barisan kode yang rumit, kita akan membayangkan "Mahasiswa", "Dosen", "Satpam", dan "Kampus".

---

## 🗺️ Peta Perjalanan Belajar Kita

Kita akan belajar secara bertahap, mulai dari maba (mahasiswa baru) sampai jadi masta!

### 🟢 Tahap Awal (Dasar Banget)
*   **[01_Dasar](./01_Dasar) (Class, Object, Property, Method)**
    *   **Analogi:** `Class` itu ibarat **Cetakan Kue** atau **Buku Resep**. `Object` itu adalah **Kue Beneran** yang sudah matang. `Property` itu **warna atau rasa kue**-nya (misal: Cokelat). `Method` itu **fungsinya** (misal: Mengenyangkan perut!).

### 🟡 Tahap Menengah (Sedikit Mikir)
*   **[02_Static_Scope](./02_Static_Scope) (Static Modifier & Error Handling)**
    *   **Analogi Static:** Fitur/fasilitas yang nempel langsung di "Kampus", bukan di "Mahasiswa". Contoh: *Papan Pengumuman* kampus. Kamu nggak perlu daftar jadi mahasiswa dulu (`new Mahasiswa()`) buat sekadar baca papan pengumuman di gerbang.
    *   **Analogi Error Handling (Try-Catch):** Kalau kamu naik motor trus bannya bocor (`Error`), kamu nggak langsung buang motornya dan diam di jalan (`Crash`). Kamu nambal bannya (`Catch`) lalu lanjut jalan!

 *(Materi berikut akan dibuka seiring berjalannya pertemuan di kelas ya!)*

*   **[03_Encapsulation](./03_Encapsulation)** (Private, Protected) -> *Analogi: Privasi! Pin ATM kamu itu `Private`, cuma kamu yang tau.*
*   **[04_Inheritance](./04_Inheritance)** (Pewarisan) -> *Analogi: Anak pasti mewarisi sifat, harta, atau marga dari Bapaknya.*
*   **[05_Komposisi](./05_Komposisi)** (Trait & Tamu Kelas) -> *Analogi: Pinjem kemampuan teman tanpa harus jadi anak kandungnya.*
*   **[06_Polymorphism](./06_Polymorphism)** (Abstract & Interface) -> *Analogi: Perintahnya sama "Bersuara!", tapi Kucing bilang "Meow", Anjing bilang "Guk!". Satu perintah, beda respons.*
*   **[07_Database](./07_Database)** (Koneksi Database PDO) -> *Analogi: Menyimpan semua arsip kampus ke dalam Ruang Tata Usaha (Database).*

---

## 🛠️ Cara Cobain Kode-nya

Biar makin paham, kamu wajib cobain dan ubah-ubah kodenya. Ada dua cara gampang:

### 1. Pakai Terminal VSCode (Paling Keren & Cepat ⚡)
**Penting:** Cara ini **TIDAK PERLU** menaruh folder di `htdocs` dan **TIDAK PERLU** menyalakan XAMPP (Apache). Cukup pastikan PHP sudah terhubung ke komputermu. Kamu bisa menaruh folder belajar ini bebas di tempat mana saja (misal di Desktop).

1. Buka folder bebas ini di **VSCode**.
2. Munculkan terminal di VSCode (`Ctrl` + `~` atau `Terminal > New Terminal`).
3. Tinggal ketik perintah php diikuti nama foldernya:
   ```bash
   php 01_Dasar/index.php
   ```
   *Boom! Hasil kode PHP-nya langsung muncul di bawah situ tanpa perlu buka browser.*

### 2. Pakai Browser & XAMPP (Cara Klasik 🌐)
1. Pindahkan folder `pwpoopphp` ini ke dalam folder `htdocs` di XAMPP kamu.
2. Nyalakan tombol **Apache** di XAMPP.
3. Buka Google Chrome, lalu ketik ini di address bar:
   `http://localhost/pwpoopphp/01_Dasar/index.php`

---
*Tetap semangat ngoding! Error itu wajar, nggak error malah mencurigakan. ~ Mas Jek*
