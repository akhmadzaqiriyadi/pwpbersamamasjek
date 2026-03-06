<?php
// 1. INHERITANCE (Pewarisan) -> Parent Class
class SivitasAkademika
{
    protected string $nama; // Protected Modifier bisa digunakan di Child

    public function __construct(string $nama)
    {
        $this->nama = $nama;
    }

    public function getIdentitas(): string
    {
        return "Sivitas Akademika bernama " . $this->nama;
    }
}

// 2. ANAK KELAS (Child Class) mewarisi dari SivitasAkademika
class Dosen extends SivitasAkademika
{
    protected string $nidn;

    public function __construct(string $nama, string $nidn)
    {
        // 3. PARENT Keyword: Memanggil method (bisa constructor atau fungsi lain) dari parent class
        parent::__construct($nama);
        $this->nidn = $nidn;
    }

    // 4. OVERRIDING: Mengganti / Menulis ulang implementasi method dari parent class
    public function getIdentitas(): string
    {
        return "Dosen bernama $this->nama dengan NIDN $this->nidn";
    }

    // 5. SELF Keyword vs THIS
    public function infoKelas(): string
    {
        // `self` merujuk ke class dimana dia tertulis (Class Dosen), tidak peduli siapa yang memanggilnya. Biasa dipakai untuk static/konstanta class. 
        // `$this` merujuk ke object konkrit yang sedang aktif.
        return "Fungsi ini dipanggil dari scope class: " . self::class;
    }
}

// 6. ANAK DARI ANAK KELAS (Grandchild Class) & FINAL KEYWORD
// final memblokir kelas ini agar TIDAK BISA diwariskan lagi ke siapapun. Ini adalah rantai terakhir.
final class DosenTetap extends Dosen
{
    public function dapatkanFasilitas(): string
    {
        // $this->nama bisa bebas diakses karena modifier PROTECTED pada class kakek (SivitasAkademika) diwariskan dari kakek -> ayah (Dosen) -> cucu (DosenTetap)
        return "Dosen tetap $this->nama berhak mendapatkan asuransi dan pensiun!";
    }
}

// CLASS INI AKAN ERROR JIKA KITA UNCOMMENT KARENA DosenTetap ADALAH FINAL
// class DosenTamu extends DosenTetap {} 

$dosen1 = new Dosen("Dr. Budi", "123456");
echo $dosen1->getIdentitas() . PHP_EOL;
echo $dosen1->infoKelas() . PHP_EOL;

$dosenTetap = new DosenTetap("Prof. Siti", "654321");
echo $dosenTetap->dapatkanFasilitas() . PHP_EOL;
