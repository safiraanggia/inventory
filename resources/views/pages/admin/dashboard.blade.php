@extends('layouts.dashboard-admin')

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

<canvas id="pieChart" width="400" height="400"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('pieChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Barang Masuk', 'Barang Keluar'],
            datasets: [{
                label: 'Jumlah Barang',
                data: [{{ $barangMasuk }}, {{ $barangKeluar }}],
                backgroundColor: [
                    '#186F65',
                    '#B1AFFF',
                    '#FF9130',
                    '#706233',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            // Tambahkan opsi lainnya sesuai kebutuhan Anda
        }
    });
</script>
@endsection