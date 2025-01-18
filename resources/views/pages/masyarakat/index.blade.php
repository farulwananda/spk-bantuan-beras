@extends('layouts.app')
@push('styles')
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Data Masyarakat</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Masyarakat</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-4 card">
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Data Masyarakat</h6>
                        <div>
                            <a href="{{ route('masyarakat.upload.page') }}" class="mb-1 btn btn-success">
                                <i class="fa-solid fa-file-excel"></i> Upload Excel
                            </a>
                            <a href="{{ route('masyarakat.create') }}" class="mb-1 btn btn-primary">
                                <i class="fa-solid fa-file-pen"></i> Tambah Data
                            </a>
                        </div>
                    </div>
                    <div class="p-3 table-responsive">
                        <table class="table align-items-center table-flush" id="dataTable">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Opsi</th>
                                    <th>Kode</th>
                                    <th>ID Kepala Keluarga</th>
                                    <th>Provinsi</th>
                                    <th>Kabupaten/Kota</th>
                                    <th>Kecamatan</th>
                                    <th>Desa/Kelurahan</th>
                                    <th>Desil Kesejahteraan</th>
                                    <th>Alamat</th>
                                    <th>Kepala Keluarga</th>
                                    <th>NIK</th>
                                    <th>Padan Dukcapil</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Pekerjaan</th>
                                    <th>Kepemilikan Rumah</th>
                                    <th>Jenis Atap</th>
                                    <th>Jenis Dinding</th>
                                    <th>Jenis Lantai</th>
                                    <th>Sumber Penerangan</th>
                                    <th>Bahan Bakar Memasak</th>
                                    <th>Sumber Air Minum</th>
                                    <th>Fasilitas BAB</th>
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
                ajax: "{{ route('masyarakat.data') }}",
                columns: [{
                        data: null,
                        name: 'no',
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'kode',
                        name: 'kode'
                    },
                    {
                        data: 'id_kepala_keluarga',
                        name: 'id_kepala_keluarga'
                    },
                    {
                        data: 'provinsi',
                        name: 'provinsi'
                    },
                    {
                        data: 'kabupaten_kota',
                        name: 'kabupaten_kota'
                    },
                    {
                        data: 'kecamatan',
                        name: 'kecamatan'
                    },
                    {
                        data: 'desa_kelurahan',
                        name: 'desa_kelurahan'
                    },
                    {
                        data: 'desil_kesejahteraan',
                        name: 'desil_kesejahteraan'
                    },
                    {
                        data: 'alamat',
                        name: 'alamat'
                    },
                    {
                        data: 'kepala_keluarga',
                        name: 'kepala_keluarga'
                    },
                    {
                        data: 'nik',
                        name: 'nik'
                    },
                    {
                        data: 'padan_dukcapil',
                        name: 'padan_dukcapil'
                    },
                    {
                        data: 'jenis_kelamin',
                        name: 'jenis_kelamin'
                    },
                    {
                        data: 'tanggal_lahir',
                        name: 'tanggal_lahir'
                    },
                    {
                        data: 'pekerjaan',
                        name: 'pekerjaan'
                    },
                    {
                        data: 'kepemilikan_rumah',
                        name: 'kepemilikan_rumah'
                    },
                    {
                        data: 'jenis_atap',
                        name: 'jenis_atap'
                    },
                    {
                        data: 'jenis_dinding',
                        name: 'jenis_dinding'
                    },
                    {
                        data: 'jenis_lantai',
                        name: 'jenis_lantai'
                    },
                    {
                        data: 'sumber_penerangan',
                        name: 'sumber_penerangan'
                    },
                    {
                        data: 'bahan_bakar_memasak',
                        name: 'bahan_bakar_memasak'
                    },
                    {
                        data: 'sumber_air_minum',
                        name: 'sumber_air_minum'
                    },
                    {
                        data: 'fasilitas_bab',
                        name: 'fasilitas_bab'
                    },
                ]
            });
        });
    </script>
@endpush
