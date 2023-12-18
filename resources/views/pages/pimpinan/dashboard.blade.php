@extends('layouts.dashboard-pimpinan')

@section('content')

<main class="content px-3 py-2">
    <div class="container-fluid">
    <div class="mb-3">

        <!--Section Card-->
        <div class="container-fluid">
            <div class="row row-cols-lg-3 mt-3">
                
                <a href="#">
                    <div class="col-12 d-flex">
                    <div class="card flex-fill border-0 kotak">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                        <div class="flex-grown-1">
                            <h5 class="mb-2">Jumlah Barang Masuk</h5>
                            <h4 class="mb-2">{{ $jumlahMasuk }}</h4>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </a>
                
                <a href=""> 
                    <div class="col-12 d-flex">
                    <div class="card flex-fill border-0 kotak">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                        <div class="flex-grown-1">
                            <h5 class="mb-2">Jumlah Barang Keluar</h5>
                            <h4 class="mb-2">{{ $jumlahKeluar }}</h4>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </a>
                
                <a href="#}">
                    <div class="col-12 d-flex">
                    <div class="card flex-fill border-0 kotak">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                        <div class="flex-grown-1">
                            <h5 class="mb-2">Jumlah Supplier</h5>
                            <h4 class="mb-2">{{ $jumlahSupplier }}</h4>
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
    var ctx = document.getElementById('barChart').getContext('2d');
    var categories = @json($itemCountsByCategory->pluck('kategori'));
    var itemCounts = @json($itemCountsByCategory->pluck('count'));

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: categories,
            datasets: [{
                label: 'Jumlah Item per Kategori',
                data: itemCounts,
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
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