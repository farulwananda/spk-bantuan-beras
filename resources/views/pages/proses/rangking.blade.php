@extends('layouts.app')
@push('styles')
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Perangkingan</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Perangkingan</li>
            </ol>
        </div>
        @if (session('error'))
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                {{ session('error') }}
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-4 card">
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Perangkingan</h6>
                        <div>
                            <a href="{{ route('masyarakat.export') }}" class="mb-1 btn btn-success"><i
                                    class="fa-solid fa-file-excel"></i> Cetak Excel</a>
                            <a href="{{ route('ranking.pdf') }}" class="mb-1 btn btn-danger" target="_blank"><i
                                    class="fa-solid fa-file-pdf"></i> Cetak PDF</a>
                        </div>
                    </div>
                    <div class="p-3 table-responsive">
                        <table class="table align-items-center table-flush" id="dataTable">
                            <div class="gap-2 d-flex justify-content-end">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Kode</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
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
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                order: [
                    [4, 'desc']
                ],
                ajax: "{{ route('data-siap.data') }}",
                columns: [{
                        data: null,
                        name: 'no',
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                        orderable: false
                    },
                    {
                        data: 'nik',
                        name: 'nik',
                        orderable: false
                    },
                    {
                        data: 'kepala_keluarga',
                        name: 'kepala_keluarga',
                        orderable: false
                    },
                    {
                        data: 'kode',
                        name: 'kode',
                        orderable: false
                    },
                    {
                        data: 'vektor_v',
                        name: 'vektor_v',
                        render: function(data, type, row) {
                            return data ? data : 'Vektor V Belum Diproses';
                        }
                    }
                ]
            });
        });
    </script>
@endpush
