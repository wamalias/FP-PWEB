<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Hasil Belajar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">Laporan Hasil Belajar</h1>

        <!-- Informasi Jumlah Kelas -->
        <div class="mb-4">
            <h2>Jumlah Kelas Diikuti</h2>
            <p>Jumlah Kelas: <strong>10</strong></p>
        </div>

        <!-- Rincian Nilai Mata Pelajaran -->
        <div class="mb-4">
            <h2>Rincian Nilai Mata Pelajaran</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Mata Pelajaran</th>
                        <th scope="col">Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Matematika</td>
                        <td>85</td>
                    </tr>
                    <tr>
                        <td>Bahasa Inggris</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Bahasa Indonesia</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>Sejarah</td>
                        <td>82</td>
                    </tr>
                    <tr>
                        <td>Fisika</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>Biologi</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Kimia</td>
                        <td>88</td>
                    </tr>
                    <!-- Anda dapat menambahkan rincian nilai lainnya di sini -->
                </tbody>
            </table>
        </div>

        <!-- Rata-rata Nilai -->
        <div class="mb-4">
            <h2>Rata-rata Nilai</h2>
            <p>Rata-rata Nilai: <strong>85</strong></p>
        </div>

        <!-- Grafik Kemajuan Belajar menggunakan Chart.js -->
        <div class="mb-4">
            <h2>Grafik Kemajuan Belajar</h2>
            <canvas id="myChart" width="400" height="200"></canvas>
        </div>
    </div>

    <!-- Bootstrap JS dan Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Matematika', 'Bahasa Inggris', 'Mata Pelajaran lainnya'],
                datasets: [{
                    label: 'Nilai',
                    data: [85, 78, 90], // Masukkan nilai mata pelajaran di sini
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>