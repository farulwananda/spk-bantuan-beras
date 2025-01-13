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
                                <div class="mb-1 text-xs font-weight-bold text-uppercase">Jumlah Calon Penerima</div>
                                <div class="mb-0 text-gray-800 h5 font-weight-bold">$40,000</div>
                                <div class="mt-2 mb-0 text-xs text-muted">
                                    <span class="mr-2 text-success"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                    <span>Since last month</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="mb-4 col-xl-3 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="mr-2 col">
                                <div class="mb-1 text-xs font-weight-bold text-uppercase">Penerima Bantuan</div>
                                <div class="mb-0 text-gray-800 h5 font-weight-bold">650</div>
                                <div class="mt-2 mb-0 text-xs text-muted">
                                    <span class="mr-2 text-success"><i class="fas fa-arrow-up"></i> 12%</span>
                                    <span>Since last years</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-shopping-cart fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- New User Card Example -->
            <div class="mb-4 col-xl-3 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="mr-2 col">
                                <div class="mb-1 text-xs font-weight-bold text-uppercase">Jumlah User</div>
                                <div class="mb-0 mr-3 text-gray-800 h5 font-weight-bold">366</div>
                                <div class="mt-2 mb-0 text-xs text-muted">
                                    <span class="mr-2 text-success"><i class="fas fa-arrow-up"></i> 20.4%</span>
                                    <span>Since last month</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="mb-4 col-xl-3 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="mr-2 col">
                                <div class="mb-1 text-xs font-weight-bold text-uppercase">Pending Requests</div>
                                <div class="mb-0 text-gray-800 h5 font-weight-bold">18</div>
                                <div class="mt-2 mb-0 text-xs text-muted">
                                    <span class="mr-2 text-danger"><i class="fas fa-arrow-down"></i> 1.10%</span>
                                    <span>Since yesterday</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="mb-4 card">
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Persentase Penerima Bantuan</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="text-gray-400 fas fa-ellipsis-v fa-sm fa-fw"></i>
                            </a>
                            <div class="shadow dropdown-menu dropdown-menu-right animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Invoice Example -->
            <div class="mb-4 col-xl-12 col-lg-12">
                <div class="card">
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Invoice</h6>
                        <a class="float-right m-0 btn btn-danger btn-sm" href="#">View More <i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Item</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">RA0449</a></td>
                                    <td>Udin Wayang</td>
                                    <td>Nasi Padang</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">RA5324</a></td>
                                    <td>Jaenab Bajigur</td>
                                    <td>Gundam 90' Edition</td>
                                    <td><span class="badge badge-warning">Shipping</span></td>
                                    <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">RA8568</a></td>
                                    <td>Rivat Mahesa</td>
                                    <td>Oblong T-Shirt</td>
                                    <td><span class="badge badge-danger">Pending</span></td>
                                    <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">RA1453</a></td>
                                    <td>Indri Junanda</td>
                                    <td>Hat Rounded</td>
                                    <td><span class="badge badge-info">Processing</span></td>
                                    <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">RA1998</a></td>
                                    <td>Udin Cilok</td>
                                    <td>Baby Powder</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
        <!--Row-->
    </div>
@endsection
