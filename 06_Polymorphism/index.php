<?php
// POLYMORPHISM: Prinsip dimana class yang berbeda bisa bereaksi terhadap method implementasi yang sama dengan perilaku/hasil yang berbeda.
// Hal ini sering didapatkan menggunakan INTERFACE atau ABSTRACT CLASS.

// 1. INTERFACE: Sebuah "Kontrak" murni. Class yang memakainya WAJIB mengimplementasi semua method tanpa terkecuali.
interface HitungNilai
{
    public function setNilaiAkhir(float $nilai);
    public function kelulusanStatus();
}

// 2. INTERFACE EXTENDS INTERFACE (Pewarisan antar interface, mempunyai anak interface)
// Interface dapat memiliki anak interface layaknya kelas biasa.
interface DokumenKelulusan extends HitungNilai
{
    public function cetakIjazah();
}

interface KegiatanEkstra
{
    public function daftarUKM(string $namaUkm);
}

// 3. ABSTRACT CLASS: Kelas setengah matang (bisa punya properti dan method berisi fungsi logic, tetapi bisa juga punya abstract method yang dilarang ada isinya).
// Abstrak Class tidak bisa memproduksi object secara langsung, hanya bisa digunakan dengan cara diturunkan (extends).
abstract class Penilaian
{
    protected float $nilaiAkhir;

    // Abstract method: Anak yang mewarisi class Penilaian WAJIB membuat isi fungsi ini.
    abstract public function hitungGrade(): string;

    // Normal Method: Langsung bisa dipakai/diwariskan tanpa perlu ditulis ulang oleh anak
    public function getNilaiBaris(): float
    {
        return $this->nilaiAkhir;
    }
}

// 4. CLASS BANYAK IMPLEMENT INTERFACE & 1 EXTEND ABSTRACT
// Penjelasan Kondisi:
// - Class `MahasiswaAkhir` harus punya 1 parent utama (extends `Penilaian`)
// - Class `MahasiswaAkhir` boleh banyak melakukan kontrak (implements `DokumenKelulusan`, `KegiatanEkstra`)
class MahasiswaAkhir extends Penilaian implements DokumenKelulusan, KegiatanEkstra
{

    // Implementasi dari Kontrak (Interface) HitungNilai, otomatis tertempel didalam DokumenKelulusan
    public function setNilaiAkhir(float $nilai)
    {
        $this->nilaiAkhir = $nilai; // Disimpan di properti dari abstract class Penilaian
    }

    public function kelulusanStatus()
    {
        if ($this->nilaiAkhir > 60)
            echo "Status: LULUS\n";
        else
            echo "Status: TIDAK LULUS\n";
    }

    // Implementasi dari Abstrak class method HitungGrade (Abstract Class)
    public function hitungGrade(): string
    {
        if ($this->nilaiAkhir >= 85)
            return 'A';
        elseif ($this->nilaiAkhir >= 70)
            return 'B';
        else
            return 'C';
    }

    // Implementasi dari Kontrak (Interface) DokumenKelulusan
    public function cetakIjazah()
    {
        echo "Mencetak ijazah dengan grade: " . $this->hitungGrade() . PHP_EOL;
    }

    // Implementasi dari Kontrak (Interface) KegiatanEkstra
    public function daftarUKM(string $namaUkm)
    {
        echo "Telah berhasil terdaftar di Kegiatan Ekstra: $namaUkm" . PHP_EOL;
    }
}

$lulusan = new MahasiswaAkhir();
$lulusan->setNilaiAkhir(88); // Mengisi nilai
$lulusan->kelulusanStatus(); // Cek Status Kelulusan
$lulusan->cetakIjazah();     // Cetak Ijazah polymorphic call
$lulusan->daftarUKM("Robotics Campus");
