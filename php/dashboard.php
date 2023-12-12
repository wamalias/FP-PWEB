<?php include('connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Dashboard</title> 
</head>
<body>
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="col g-0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="row-md-3">
                                <!-- Sidebar -->
                                <div class="sidebar">
                                <ul class="nav flex-row">
                                    <div class="user-profile text-center py-4">
                                        <?php
                                        // Cek apakah ada pengiriman data dari form pada login.php
                                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                            // Tangkap nilai dari form
                                            $username = $_POST['username'];
                                            $password = $_POST['password'];
                                        
                                            // Query ke database untuk memeriksa username dan password
                                            $query = "SELECT nama FROM siswa_dan_orang_tua WHERE username = '$username' AND password = '$password'";
                                            $result = mysqli_query($koneksi, $query);
                                        
                                            // Periksa apakah hasil query mengembalikan baris data
                                            if (mysqli_num_rows($result) == 1) {
                                                // Ambil data dari hasil query
                                                $row = mysqli_fetch_assoc($result);
                                                $nama = $row['nama'];
                                                echo "<h3>Hello $nama</h3>";

                                            } else {
                                                // Jika tidak ada baris data yang cocok, berarti username atau password salah
                                                echo "<p>Invalid username or password.</p>";
                                            }
                                        
                                            // Bebaskan hasil query
                                            mysqli_free_result($result);
                                        }
                                        ?>
                                    </div>
                                        
                                        <li class="nav-item" align-items-left>
                                            <a class="nav-link"  href="jadwal.php">Jadwal</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="materi.php">Materi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="laporan.php">Laporan</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row-md-9">
                                <!-- Content -->
                                <div class="content">
                                    <h2 class="my-4">Daftar Materi</h2>
                                    <div class="row">
                                        <!-- Loop untuk setiap materi -->
                                        <?php
                                            $query_kelas = "SELECT DISTINCT(mp.nama) AS nama_kelas 
                                                            FROM siswa_dan_orang_tua s 
                                                            INNER JOIN materi_siswa ms ON s.username = ms.uname_Siswa 
                                                            INNER JOIN materi m ON m.ID = ms.ID_Materi 
                                                            INNER JOIN mata_pelajaran mp ON mp.ID = m.mata_pelajaran 
                                                            WHERE username = '$username'"; // Pastikan variabel $username dienkapsulasi dengan tanda kutip jika nilainya adalah string

                                            $result_kelas = mysqli_query($koneksi, $query_kelas);

                                            // Jika query berhasil dan data ditemukan
                                            if ($result_kelas) {
                                                if ($result_kelas->num_rows > 0) {
                                                    $materi = array();
                                                    // Memasukkan hasil query ke dalam array materi
                                                    while ($row = $result_kelas->fetch_assoc()) {
                                                        $namaMateri = $row["nama_kelas"];
                                                        ?>
                                                            <div class="card bg-secondary" style="width: 300px; height: 200px;">
                                                                <div class="card-body" action="materi.php">
                                                                    <h4 class="card-title"><?php echo $namaMateri; ?></h4>
                                                                </div>
                                                            </div>
                                                        <?php
                                                    }
                                                } else {
                                                    echo "Tidak ada data ditemukan.";
                                                }
                                            } else {
                                                echo "Error: " . mysqli_error($koneksi);
                                            }
                                            ?>
                                        </div>
                                        <!-- Akhir loop materi -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
    </section>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>