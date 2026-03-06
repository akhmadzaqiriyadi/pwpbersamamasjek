# Materi 5: Komposisi Kelas (Trait & Tamu)
Keterbatasan PHP adalah fitur OOP-nya mentok cuma bisa _1 Bapak / 1 Extends Class_ saja. Hal ini bikin repot kalau satu aplikasi butuh sifat dari 2 kelas sekaligus (Multiple Inheritance).

### Pembahasan:
- **Trait**: Fitur "Mix and match" (Copas legal) metode-metode kecil ke class besar tanpa harus ada relasi pewarisan. Syntaxnya pakai `use NamaTrait`. Di kasus ini kita pakai dua Trait `RoleAkses` dan `Fasilitas` sekaligus.
- **Tamu Kelas (Dependency Injection)** / (Object in Parameter): Fungsi gak harus dikasih duit integer / string. Fungsi (Method) juga bisa dikasih Parameter dalam bentuk Object Class lain dari luar ruangan. (Bisa dilihat di `Satpam->periksaIdentitas($tamu)`).

---
### 🚀 Cara Menjalankan Kode Ini
**Cara 1: Menggunakan Terminal VSCode (Direkomendasikan)**
1. Pastikan folder utama dibuka di VSCode.
2. Buka Terminal VSCode (`Ctrl` + `~`).
3. Ketik perintah berikut dan tekan Enter:
   ```bash
   php 05_Komposisi/index.php
   ```

**Cara 2: Menggunakan Browser & XAMPP**
1. Pastikan folder project ini berada di `xampp/htdocs`.
2. Buka browser dan ketik alamat:
   `http://localhost/pwpoopphp/05_Komposisi/index.php`
