<?php
// CONTOH KONEKSI DATABASE MEMAKAI OOP PHP (PDO Object)

class Database
{
    // Konfigurasi db bisa diproteksi
    private string $host = "localhost";
    private string $dbname = "kampus_db";
    private string $user = "root";
    private string $pass = "";

    protected $conn; // Menggunakan protected agar class turunannya bisa mengakses variable ini

    public function connect()
    {
        $this->conn = null;
        try {
            // Membutuhkan Instansiasi (Constructor dari PDO Class bawaan PHP)
            $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
            $this->conn = new PDO($dsn, $this->user, $this->pass);

            // Scope Resolution dipanggil pada Konstanta bawaan PDO memalui `::`
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;

        } catch (PDOException $e) { // Error handling PDO bawaan database class exception
            // Catatan: Jika database belum dibuat di lokal MySQL, kita tangkap errornya agar tidak crash merah di layar
            // echo "Koneksi Error: " . $e->getMessage() . PHP_EOL;
            return null;
        }
    }
}

// Menggunakan Inheritance untuk memisahkan logika Database Connection dan logika Manajemen Data
class MahasiswaData extends Database
{
    public function getMahasiswas()
    {
        $koneksi = $this->connect();

        if ($koneksi === null) {
            return "Simulasi Selesai: (Error ditangani dengan rapih, database mysql lokal kampus_db tidak ditemukan atau host menolak. Tetapi alur OOP aman.)\n";
        }

        $query = "SELECT * FROM mahasiswa";
        try {
            // Logika aslinya (Uncomment jika MySQL localhost sudah aktif dan database tersedia):
            /*
            $stmt = $koneksi->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            */
            return "Sukses terhubung DB. (Fungsi simulasi diputus tanpa fetch untuk aman)";
        } catch (PDOException $e) {
            return "Error Eksekusi Query: " . $e->getMessage();
        }
    }
}

// Instantiation & Pemanggilan Logika OOP di dunia nyata (Konek DB)
$repoDatabase = new MahasiswaData();
echo $repoDatabase->getMahasiswas();
