# Materi 3: Encapsulation (Keamanan Data)
Tidak semua data di Universitas boleh dilihat/diubah sembarangan secara publik, contonya: IPK atau Password Portal Akademik.

### Pembahasan:
- **Public**: Siapa saja dari file luar bisa mengganti nilainya.
- **Private**: Hanya kode dari dalam kurung kurawal `{ .. }` class itu sendiri yang boleh baca/ubah. Anak perusahaannya/Child aja gak boleh.
- **Protected**: Mirip Private, namun diturunkan alias anak kelas / class child yang nge-extends class ini boleh pakai data ini.
- **Getter**: Metode ngakalin ngambil nilai `Private` atau `Protected` misal mau diambil dan disensor.
- **Setter**: Metode ngakalin ngubah nilai dengan validasi kondisi. (Contoh IPK ga boleh di atas 4.0).

---
### 🚀 Cara Menjalankan Kode Ini
**Cara 1: Menggunakan Terminal VSCode (Direkomendasikan)**
1. Pastikan folder utama dibuka di VSCode.
2. Buka Terminal VSCode (`Ctrl` + `~`).
3. Ketik perintah berikut dan tekan Enter:
   ```bash
   php 03_Encapsulation/index.php
   ```

**Cara 2: Menggunakan Browser & XAMPP**
1. Pastikan folder project ini berada di `xampp/htdocs`.
2. Buka browser dan ketik alamat:
   `http://localhost/pwpoopphp/03_Encapsulation/index.php`
