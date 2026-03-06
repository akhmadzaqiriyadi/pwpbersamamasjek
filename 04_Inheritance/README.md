# Materi 4: Inheritance (Pewarisan)
Banyak object di universitas itu mirip-mirip fiturnya (Punya nama, alamat, nomor hp). Daripada ditulis ulang mulu, ya dibuat hirarki saja.

### Pembahasan:
- **Pewarisan (extends)**: Bapak ke Anak (`SivitasAkademika` -> `Dosen`).
- **Anak dari Anak (Pewarisan Berantai)**: `SivitasAkademika` -> `Dosen` -> `DosenTetap`. Segala ilmu kakek turun ke cucu.
- **Overriding**: Anak durhaka yang mengganti total isi dari fungsi method bawaan bapaknya dengan isi baru.
- **Parent Keyword**: Daripada nimpa fungsi dari nol, mending panggil fungsi bapaknya (`parent::namaFungsi()`) trus ditambah modifikasi di bagian bawahnya.
- **Final Keyword**: Class Mentok. Di-cap "Final" supaya ga ada lagi yang bisa menjadi anak class ini. (Dipakai untuk sekuritas class super tinggi).

---
### 🚀 Cara Menjalankan Kode Ini
**Cara 1: Menggunakan Terminal VSCode (Direkomendasikan)**
1. Pastikan folder utama dibuka di VSCode.
2. Buka Terminal VSCode (`Ctrl` + `~`).
3. Ketik perintah berikut dan tekan Enter:
   ```bash
   php 04_Inheritance/index.php
   ```

**Cara 2: Menggunakan Browser & XAMPP**
1. Pastikan folder project ini berada di `xampp/htdocs`.
2. Buka browser dan ketik alamat:
   `http://localhost/pwpoopphp/04_Inheritance/index.php`
