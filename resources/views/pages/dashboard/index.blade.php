@extends('layouts.app')
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
            <div class="mb-4 col-xl-3 col-md-6">
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
            <div class="mb-4 col-xl-3 col-md-6">
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
            <div class="mb-4 col-xl-3 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="mr-2 col">
                                <div class="mb-1 text-xs font-weight-bold text-uppercase">Jumlah Sub Kriteria</div>
                                <div class="mb-0 mr-3 text-gray-800 h5 font-weight-bold">{{ $dataSubKriterias }}</div>
                                <div class="mt-2 mb-0 text-xs text-muted">
                                    <span>Sub Kriteria Yang Terdaftar</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4 col-xl-3 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="mr-2 col">
                                <div class="mb-1 text-xs font-weight-bold text-uppercase">Jumlah Pengguna</div>
                                <div class="mb-0 text-gray-800 h5 font-weight-bold">{{ $dataUsers }}</div>
                                <div class="mt-2 mb-0 text-xs text-muted">
                                    <span>Pengguna Yang Terdaftar</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Row-->
    </div>
@endsection
