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
                      <h3 class="mb-5 text-uppercase">Form Tambah Jadwal</h3>
                      
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example8" class="form-control form-control-lg" name="nama"/>
                        <label class="form-label" for="form3Example8">Nama Agenda</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example8" class="form-control form-control-lg" name="nama"/>
                        <label class="form-label" for="form3Example8">Tanggal</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example8" class="form-control form-control-lg" name="nama"/>
                        <label class="form-label" for="form3Example8">Jam</label>
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