@extends('layouts.app')
@push('styles')
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Rating Kecocokan</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Rating Kecocokan</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-4 card">
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Rating Kecocokan</h6>
                    </div>
                    <div class="p-3 table-responsive">
                        <table class="table align-items-center table-flush" id="dataTable">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
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
                                </tr>
                            </thead>
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
                ajax: "{{ route('data-siap.data') }}",
                columns: [{
                        data: null,
                        name: 'no',
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'nik',
                        name: 'nik'
                    },
                    {
                        data: 'kepala_keluarga',
                        name: 'kepala_keluarga'
                    },
                    {
                        data: 'kode',
                        name: 'kode'
                    },
                    {
                        data: 'C1',
                        name: 'C1'
                    },
                    {
                        data: 'C2',
                        name: 'C2'
                    },
                    {
                        data: 'C3',
                        name: 'C3'
                    },
                    {
                        data: 'C4',
                        name: 'C4'
                    },
                    {
                        data: 'C5',
                        name: 'C5'
                    },
                    {
                        data: 'C6',
                        name: 'C6'
                    },
                    {
                        data: 'C7',
                        name: 'C7'
                    },
                    {
                        data: 'C8',
                        name: 'C8'
                    },
                    {
                        data: 'C9',
                        name: 'C9'
                    },
                ]
            });
        });
    </script>
@endpush
