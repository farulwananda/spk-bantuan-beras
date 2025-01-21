@extends('layouts.app')
@push('styles')
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Hitung Vektor V</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Hitung Vektor V</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-4 card">
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Hitung Vektor V</h6>
                        <form action="{{ route('vektor-s.proses') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="mb-1 btn btn-primary">
                                <i class="fa fa-refresh"></i> Proses Vektor V
                            </button>
                        </form>
                    </div>
                    <div class="p-3 table-responsive">
                        <table class="table align-items-center table-flush" id="dataTable">
                            <div class="gap-2 d-flex justify-content-end">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Kode</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                        <th>C7</th>
                                        <th>C8</th>
                                        <th>C9</th>
                                        <th>Vektor V</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vektorV as $vektorV)
                                        <tr>
                                            <td>{{ $vektorV->kode }}</td>
                                            <td>{{ $vektorV->C1 }}</td>
                                            <td>{{ $vektorV->C2 }}</td>
                                            <td>{{ $vektorV->C3 }}</td>
                                            <td>{{ $vektorV->C4 }}</td>
                                            <td>{{ $vektorV->C5 }}</td>
                                            <td>{{ $vektorV->C6 }}</td>
                                            <td>{{ $vektorV->C7 }}</td>
                                            <td>{{ $vektorV->C8 }}</td>
                                            <td>{{ $vektorV->C9 }}</td>
                                            <td>{{ $vektorV->vektor_v ?? 'Belum Terproses' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
            $('#dataTableHover').DataTable();
        });
    </script>
@endpush
