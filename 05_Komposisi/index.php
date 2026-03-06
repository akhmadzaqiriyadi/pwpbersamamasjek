<?php
// 1. TRAIT: Konsep di PHP untuk "mix and match" method. Karena PHP tidak mendukung class mewarisi (extends) dari 2 class sekaligus, Trait adalah solusi dari Multiple Inheritance.
trait RoleAkses
{
    public function cekLogin(): bool
    {
        return true;
    }

    public function getAksesMode(): string
    {
        return "Akses penuh diberikan lewat Trait RoleAkses.";
    }
}

trait Fasilitas
{
    public function gunakanPerpustakaan(): string
    {
        return "Sedang meminjam buku di perpustakaan.";
    }
}

class MahasiswaEkstensi
{
    // Memasukkan method dari 2 trait berbeda ke dalam satu class
    use RoleAkses, Fasilitas;

    public string $nama;
    public function __construct(string $nama)
    {
        $this->nama = $nama;
    }
}

// 2. TAMU KELAS (Dependency Injection / Object as Parameter)
// Ini adalah konsep di mana sebuah class tidak membuat object di dalam dirinya sendiri, tetapi menerima "tamu" (object dari luar) sebagai parameter di methodnya.
class Satpam
{
    // Parameter Object: $tamu merupakan object milik MahasiswaEkstensi
    public function periksaIdentitas(MahasiswaEkstensi $tamu): string
    {
        if ($tamu->cekLogin()) {
            return "[SATPAM]: Silakan masuk, {$tamu->nama}. " . $tamu->getAksesMode();
        }
        return "[SATPAM]: Akses ditolak.";
    }
}


$mhs = new MahasiswaEkstensi("Bima");
// mhs bisa menggunakan Fungsi perpustakaan dari trait Fasilitas
echo $mhs->gunakanPerpustakaan() . PHP_EOL;

$satpam = new Satpam();
// Mengirim object $mhs bertransaksi sebagai Tamu di dalam method Satpam
echo $satpam->periksaIdentitas($mhs) . PHP_EOL;
