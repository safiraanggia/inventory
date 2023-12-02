@extends('layouts.dashboard-operator')

@section('content')

<main class="content px-3 py-2">
    <div class="container-fluid">
    <div class="mb-3">

        <!--Section Card-->
        <div class="container-fluid">
            <div class="row row-cols-lg-3 mt-3">
                <!--Card BM-->
                <a href="#">
                    <div class="col-12 d-flex">
                    <div class="card flex-fill border-0 kotak">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                        <div class="flex-grown-1">
                            <h5 class="mb-2">Jumlah Barang Masuk</h5>
                            <h4 class="mb-2">234</h4>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </a>
                <!--Card BK-->
                <a href=""> 
                    <div class="col-12 d-flex">
                    <div class="card flex-fill border-0 kotak">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                        <div class="flex-grown-1">
                            <h5 class="mb-2">Jumlah Barang Keluar</h5>
                            <h4 class="mb-2">66</h4>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </a>
                <!--Card Perawat-->
                <a href="#}">
                    <div class="col-12 d-flex">
                    <div class="card flex-fill border-0 kotak">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                        <div class="flex-grown-1">
                            <h5 class="mb-2">Jumlah Distributor</h5>
                            <h4 class="mb-2">13</h4>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
    </div>
    <div class="row row-cols-lg-3 mt-4">
        <div class="container">
            <canvas id="barChart" style="width: 100%; height: 400px;"></canvas>
        </div>
        <div class="container">
            <canvas id="pieChart" style="width: 100%; height: 200px;"></canvas>
        </div>
    </div>
       
</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Data yang disiapkan dari PHP
        const salesData = <?php echo json_encode($monthlySales); ?>;

        // Mendapatkan referensi canvas
        const ctx = document.getElementById('barChart').getContext('2d');

        // Membuat grafik batang menggunakan Chart.js
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: Object.keys(salesData), // Label bulan
                datasets: [{
                    label: 'Monthly Sales',
                    data: Object.values(salesData), // Data penjualan
                    backgroundColor: [
                                '#FF8080',
                                '#F9B572',
                                '#F6FDC3',
                                '#C8E4B2',
                                '#FFD966',
                                '#94AF9F',
                                '#C8FFD4',
                                '#B8E8FC',
                                '#B1AFFF',
                                '#7895B2',
                                '#554994',
                                '#6E85B7',
                                '#C9BBCF',
                                '#73A9AD',
                                '#525E75',
                                '#655D8A',
                                '#BB6464',
                                '#A267AC',
                                '#867070',
                                '#6096B4',
                                '#DEBACE',
                                '#B3A492',
                                '#219C90',
                                '#9EB384',
                                '#FFC95F',
                                '#0E21A0',
                                '#9D44C0',
                                '#FF7676',
                                '#3085C3',
                                '#5CD2E6',
                                '#5C4B99',
                                '#D71313',
                                '#45CFDD',
                                '#22A699',
                                '#245953',
                                '#913175',
                                '#186F65',
                                '#0174BE',
                                '#FF9130',
                                '#706233',
                            ], // Warna latar belakang batang
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true // Mulai sumbu Y dari nilai 0
                    }
                }
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Data proporsi penjualan produk dari PHP
        const productSales = <?php echo json_encode($productSales); ?>;

        // Mendapatkan referensi canvas
        const ctx = document.getElementById('pieChart').getContext('2d');

        // Membuat pie chart menggunakan Chart.js
        const myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: Object.keys(productSales), // Label produk
                datasets: [{
                    label: 'Product Sales',
                    data: Object.values(productSales), // Data penjualan produk
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)', // Warna latar belakang pie chart untuk Product A
                        'rgba(54, 162, 235, 0.5)', // Warna latar belakang pie chart untuk Product B
                        'rgba(255, 206, 86, 0.5)', // Warna latar belakang pie chart untuk Product C
                        // ... tambahkan warna latar belakang lainnya sesuai jumlah produk
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)', // Warna garis border pie chart untuk Product A
                        'rgba(54, 162, 235, 1)', // Warna garis border pie chart untuk Product B
                        'rgba(255, 206, 86, 1)', // Warna garis border pie chart untuk Product C
                        // ... tambahkan warna border lainnya sesuai jumlah produk
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                // Tambahkan opsi lain jika diperlukan
            }
        });
    });
</script>
@endsection