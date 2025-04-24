@extends('layouts.app')
@push('styles')
    <style>
        .chart-pie {
            height: 400px !important;
        }
    </style>
@endpush
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Dashboard</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>

        <div class="mb-3 row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="mb-4 col-xl-6 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="mr-2 col">
                                <div class="mb-1 text-xs font-weight-bold text-uppercase">Jumlah Masyarakat</div>
                                <div class="mb-0 text-gray-800 h5 font-weight-bold">{{ $dataMasyarakats }}</div>
                                <div class="mt-2 mb-0 text-xs text-muted">
                                    <span>Msayarakat Yang Terdaftar</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4 col-xl-6 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="mr-2 col">
                                <div class="mb-1 text-xs font-weight-bold text-uppercase">Jumlah Kriteria</div>
                                <div class="mb-0 text-gray-800 h5 font-weight-bold">{{ $dataKriterias }}</div>
                                <div class="mt-2 mb-0 text-xs text-muted">
                                    <span>Kriteria Yang Terdaftar</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-shopping-cart fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Row-->

        <div class="row">
            <!-- Pie Chart -->
            <div class="col-xl-12">
                <div class="mb-4 card">
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Distribusi Masyarakat per Desa/Kelurahan</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-pie">
                            <canvas id="desaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('assets/vendor/chart.js/chart.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart-plugin.js') }}"></script>
    <script>
        const labelsDesa = @json($labelsDesa);
        const dataTotalDesa = @json($dataTotalDesa);

        (function() {
            const canvas = document.getElementById('desaChart');

            canvas.width = 800;
            canvas.height = 400;

            const ctx = canvas.getContext('2d');

            if (window.desaChartInstance) {
                window.desaChartInstance.destroy();
            }

            Chart.register(ChartDataLabels);

            window.desaChartInstance = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: labelsDesa,
                    datasets: [{
                        data: dataTotalDesa,
                        backgroundColor: [
                            '#4e73df',
                            '#1cc88a',
                            '#36b9cc',
                            '#f6c23e',
                            '#e74a3b',
                            '#858796',
                            '#5a5c69',
                            '#17a673',
                            '#2c9faf',
                            '#ff6384',
                            '#ff9f40',
                            '#b6c2cf',
                            '#74c69d',
                            '#ef476f',
                            '#ffd166',
                            '#06d6a0',
                            '#118ab2',
                            '#073b4c',
                            '#f9a03f'
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        },
                        datalabels: {
                            color: '#fefefe',
                            formatter: function(value, ctx) {
                                return value;
                            }
                        }
                    }
                }
            });
        })();
    </script>
@endpush
