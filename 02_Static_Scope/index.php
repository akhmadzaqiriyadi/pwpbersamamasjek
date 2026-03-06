<?php
class Universitas
{
    // 1. STATIC KEYWORD: Properti/method yang menempel pada class itu sendiri, bukan pada object (tidak perlu inisialisasi / new).
    public static $namaUniversitas = "Universitas Indonesia Maju";

    // Static method
    public static function getInfo(): string
    {
        // 2. SCOPE RESOLUTION OPERATOR (::) : Digunakan dengan kata kunci 'self' untuk mengakses properti static dalam kelas yang sama
        return "Selamat datang di " . self::$namaUniversitas;
    }
}

class Pendaftaran
{
    public function daftar(int $umur)
    {
        // 3. ERROR HANDLING: Menangani error secara profesional dengan custom Exception
        try {
            if ($umur < 17) {
                // Melemparkan exception ke catch block jika kondisi tidak terpenuhi
                throw new Exception("Error: Umur pendaftar harus lebih dari 17 tahun.");
            }
            // Memanggil static properti dari class lain menggunakan :: (Scope Resolution Operator)
            return "Pendaftaran di " . Universitas::$namaUniversitas . " berhasil.";
        } catch (Exception $e) {
            return $e->getMessage(); // Menangkap error agar aplikasi tidak terhenti atau "crash"
        }
    }
}

// Pemanggilan static method atau property menggunakan Scope Resolution Operator (::) tanpa perlu instantiation
echo Universitas::getInfo() . PHP_EOL;

$pendaftaran = new Pendaftaran();
echo $pendaftaran->daftar(16) . PHP_EOL; // Akan masuk ke Exception (Error Handling)
echo $pendaftaran->daftar(18) . PHP_EOL; // Akan berhasil
