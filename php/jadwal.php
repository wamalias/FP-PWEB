<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Agenda</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">Jadwal Agenda</h1>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nama Agenda</th>
                        <th scope="col">Tanggal Agenda</th>
                        <th scope="col">Jam Agenda</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fisika</td>
                        <td>2023-12-14</td>
                        <td>19:00 AM</td>
                    </tr>
                    <tr>
                        <td>Biologi</td>
                        <td>2023-12-16</td>
                        <td>14:30 AM</td>
                    </tr>
                    <tr>
                        <td>Kimia</td>
                        <td>2023-12-18</td>
                        <td>19:00 AM</td>
                    </tr>
                    <tr>
                        <td>Sejarah</td>
                        <td>2023-12-19</td>
                        <td>19:30 AM</td>
                    </tr>
                    <tr>
                        <td>Fisika</td>
                        <td>2023-12-21</td>
                        <td>18:30 AM</td>
                    </tr>
                    <tr>
                        <td>Biologi</td>
                        <td>2023-12-23</td>
                        <td>14:30 AM</td>
                    </tr>
                    <tr>
                        <td>Matematika</td>
                        <td>2023-12-25</td>
                        <td>19:30 AM</td>
                    </tr>
                </tbody>
            </table>

            <div class="d-flex justify-content-end pt-3" >
            <form action="../php/tambah-jadwal.php" method="post">
                <button type="submit" class="btn btn-warning btn-lg ms-2">Tambah Jadwal</button>
            </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>  