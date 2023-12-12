<?php include('connection.php');

// Pastikan ada pengiriman data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $kecamatan = $_POST['kecamatan'];
    $kabupaten = $_POST['kabupaten'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];

    // Query untuk menyimpan data ke dalam tabel sesuai dengan role
    if($role == 'guru'){
      $query = "INSERT INTO guru (username, password, nama, ttl, alamat, kecamatan, kabupaten, jenis_kelamin, no_telp, email) VALUES ('$username', '$password', '$nama', '$ttl', '$alamat', '$kecamatan', '$kabupaten', '$jenis_kelamin', '$no_telp', '$email')";
    } else {
      $query = "INSERT INTO siswa_dan_orang_tua (username, password, role, nama, ttl, alamat, kecamatan, kabupaten, jenis_kelamin, no_telp, email) VALUES ('$username', '$password', '$role', '$nama', '$ttl', '$alamat', '$kecamatan', '$kabupaten', '$jenis_kelamin', '$no_telp', '$email')";
    }
    

    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Login & Registration Form</title> 
</head>
<body>
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                    <img src="../images/accCourse.png"
                      alt="Sample photo" class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                  </div>
                  <form class="col-xl-6" method="post">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">ACC Course Registration Form</h3>
                      
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example8" class="form-control form-control-lg" name="username"/>
                        <label class="form-label" for="form3Example8">Username</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="password" id="form3Example8" class="form-control form-control-lg" name="password"/>
                        <label class="form-label" for="form3Example8">Password</label>
                      </div>

                      <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
      
                        <h6 class="mb-0 me-4">Role: </h6>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="role" id="femaleGender"
                            value="siswa" />
                          <label class="form-check-label" for="femaleGender">Siswa</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="role" id="maleGender"
                            value="ortu" />
                          <label class="form-check-label" for="maleGender">Orang Tua</label>
                        </div>

                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="role" id="maleGender"
                            value="guru" />
                          <label class="form-check-label" for="maleGender">Guru</label>
                        </div>

                      </div>

                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example8" class="form-control form-control-lg" name="nama"/>
                        <label class="form-label" for="form3Example8">Nama</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example8" class="form-control form-control-lg" name="ttl"/>
                        <label class="form-label" for="form3Example8">Tanggal Lahir (YYYY-MM-DD)</label>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example8" class="form-control form-control-lg" name="alamat"/>
                        <label class="form-label" for="form3Example8">Alamat</label>
                      </div>

                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1m" class="form-control form-control-lg" name="kecamatan"/>
                            <label class="form-label" for="form3Example1m">Kecamatan</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1n" class="form-control form-control-lg" name="kabupaten"/>
                            <label class="form-label" for="form3Example1n">Kabupaten</label>
                          </div>
                        </div>
                      </div>
      
                      <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
      
                        <h6 class="mb-0 me-4">Jenis Kelamin: </h6>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" id="femaleGender"
                            value="pria" />
                          <label class="form-check-label" for="femaleGender">Pria</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="jeniskelamin" id="maleGender"
                            value="wanita" />
                          <label class="form-check-label" for="maleGender">Wanita</label>
                        </div>

                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example97" class="form-control form-control-lg" name="no_telp"/>
                        <label class="form-label" for="form3Example97">Nomor Telepon</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example97" class="form-control form-control-lg" name="email"/>
                        <label class="form-label" for="form3Example97">Email</label>
                      </div>
      
                      <div class="d-flex justify-content-end pt-3">
                        <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                      </div>
      
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      

    <script src="../js/bootstrap.min.js"></script>
</body>