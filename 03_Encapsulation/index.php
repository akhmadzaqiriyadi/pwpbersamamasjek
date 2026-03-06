<?php
// 1. ENCAPSULATION: Membatasi akses properti atau method untuk melindungi data dari perubahan secara acak.
class ProfilMahasiswa
{
    // VISIBILITY MODIFIERS:
    // public: bisa diakses dari mana saja di seluruh aplikasi.
    // protected: hanya bisa diakses oleh class itu sendiri dan class turunannya (konsep inheritance).
    // private: hanya bisa diakses eksklusif oleh class itu sendiri.

    private $passwordPortal;
    protected $ipk;
    public $nama;

    public function __construct(string $nama, string $password, float $ipk)
    {
        $this->nama = $nama;
        $this->passwordPortal = $password;
        $this->ipk = $ipk;
    }

    // Getter Method: Digunakan untuk mengambil data Private/Protected secara aman
    public function getPassword(): string
    {
        // Keuntungan encapsulation: data bisa dimanipulasi dulu. Contoh: di-sensor/enkripsi
        return str_repeat("*", strlen($this->passwordPortal));
    }

    // Setter Method: Digunakan untuk merubah data dengan validasi agar tidak sembarang nilai masuk
    public function setIpk(float $ipkTertinggi): void
    {
        if ($ipkTertinggi >= 0 && $ipkTertinggi <= 4.0) {
            $this->ipk = $ipkTertinggi;
        } else {
            echo "Peringatan: IPK tidak valid. Gagal merubah data.\n";
        }
    }

    public function getIpk(): float
    {
        return $this->ipk;
    }
}

$profil = new ProfilMahasiswa("Andi", "rahasia123", 3.5);
echo "Nama: " . $profil->nama . PHP_EOL;
echo "Password (ter-enkripsi): " . $profil->getPassword() . PHP_EOL;

// $profil->ipk; // FATAL ERROR: Cannot access protected property
// $profil->passwordPortal; // FATAL ERROR: Cannot access private property

// Mengubah IPK dengan setter dengan validasi
$profil->setIpk(3.8); // Berhasil
echo "IPK Baru: " . $profil->getIpk() . PHP_EOL;

$profil->setIpk(5.0); // Gagal (Tertahan oleh Encapsulation Setter)
