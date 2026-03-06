# Materi 6: Polymorphism (Interface & Abstract)
Polymorphism ini berarti Satu Wajah, Banyak Bentuk (Perilaku).

### Pembahasan:
- **Abstract Class**: Kepala Jurusan yang buat Class "Semi-matang". Ia punya metode biasa, tapi juga punya metode Abstrak (Metode ghoib yang GA ADA ISINYA TAPI WAJIB ADA). Jadi Anak Kelas yang extends Abstract Class WAJIB hukumnya menciptakan implementasi metode abstrak tersebut.
- **Interface**: Bentuk EKSTRIM dari Abstract. Semua isinya 0%. Semuanya cuma deklarasi nama fungsi aja (KONTRAK) tanpa isi sama sekali.
- **Interface Extends Interface / Beranak / Bersarang**: Interface itu juga bisa nurunin bakat ke antar class interface lainnya menggunakan `extends`. 
- **Banyak Implements Interface**: Class kita boleh `implements` ke BUANYAK BANGET Interface dalam 1 baris, dipisah sama koma. (Bedakan dengan `extends` yang cuma boleh 1 parent).

---
### 🚀 Cara Menjalankan Kode Ini
**Cara 1: Menggunakan Terminal VSCode (Direkomendasikan)**
1. Pastikan folder utama dibuka di VSCode.
2. Buka Terminal VSCode (`Ctrl` + `~`).
3. Ketik perintah berikut dan tekan Enter:
   ```bash
   php 06_Polymorphism/index.php
   ```

**Cara 2: Menggunakan Browser & XAMPP**
1. Pastikan folder project ini berada di `xampp/htdocs`.
2. Buka browser dan ketik alamat:
   `http://localhost/pwpoopphp/06_Polymorphism/index.php`
