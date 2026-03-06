<?php
// 1. CLASS: Template atau blueprint untuk membuat object
class Mahasiswa
{
    // 2. PROPERTY: Karakteristik atau attribute dari class
    public $nim;
    public $nama;
    public $jurusan;

    // 3. CONSTRUCTOR: Method yang dijalankan otomatis saat object dibuat
    public function __construct(string $nim, string $nama, string $jurusan)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
    }

    // 4. METHOD: Perilaku atau fungsi di dalam class
    public function belajar(): string
    {
        return "$this->nama sedang belajar di jurusan $this->jurusan.";
    }
}

// 5. INSTANTIATION: Membuat object dari class
$mahasiswa1 = new Mahasiswa("101", "Budi Santoso", "Teknik Informatika");
echo $mahasiswa1->belajar() . PHP_EOL;
