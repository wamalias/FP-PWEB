<?php include('connection.php');?>

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
                      <h3 class="mb-5 text-uppercase">Form Tambah Materi</h3>
                      
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example8" class="form-control form-control-lg" name="nama"/>
                        <label class="form-label" for="form3Example8">Nama</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="file" id="form3Example8" class="form-control form-control-lg" name="URL_AKses"/>
                        <label class="form-label" for="form3Example8">File Materi</label>
                      </div>

                      <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
      
                        <h6 class="mb-0 me-4">Jenis Mater: </h6>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="jenis" id="femaleGender"
                            value="dokumen" />
                          <label class="form-check-label" for="femaleGender">Dokumen</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="jenis" id="maleGender"
                            value="video" />
                          <label class="form-check-label" for="maleGender">Video</label>
                        </div>

                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="jenis" id="maleGender"
                            value="Latihan_Soal" />
                          <label class="form-check-label" for="maleGender">Latihan Soal</label>
                        </div>

                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="jenis" id="maleGender"
                            value="Lainnya" />
                          <label class="form-check-label" for="maleGender">Lainnya</label>
                        </div>
                      </div>

                      <label for="mataPelajaran">Pilih Mata Pelajaran:</label>
                        <select name="mataPelajaran" id="mataPelajaran">
                            <?php
                            $query = "SELECT ID, Nama, Jenjang, Kelas FROM mata_pelajaran"; // Pastikan variabel $username dienkapsulasi dengan tanda kutip jika nilainya adalah string

                            $result = mysqli_query($koneksi, $query);
                            // Loop melalui hasil query dan tampilkan sebagai opsi select
                            while ($row = mysqli_fetch_assoc($result)) {
                                $idMataPelajaran = $row['ID'];
                                $namaMataPelajaran = $row['Nama'];
                                $jenjangMataPelajaran = $row['Jenjang'];
                                $kelasMataPelajaran = $row['Kelas'];
                                ?>
                                <option value="<?php echo $idMataPelajaran ; ?>"><?php echo $namaMataPelajaran ; ?><?php echo $kelasMataPelajaran ; ?><?php echo $jenjangMataPelajaran ; ?></option>
                                <?php
                            }
                            ?>
                        </select>
      
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