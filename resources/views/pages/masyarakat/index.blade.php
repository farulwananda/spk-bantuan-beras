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
                            <a href="{{ route('masyarakat.upload.page') }}" class="mb-1 btn btn-success"><i class="fa-solid fa-file-excel"></i> Upload
                                Excel</a>
                            <a href="{{ route('masyarakat.create') }}" class="mb-1 btn btn-primary"><i
                                    class="fa-solid fa-file-pen"></i> Tambah Data</a>
                        </div>
                    </div>
                    <div class="p-3 table-responsive">
                        <table class="table align-items-center table-flush" id="dataTable">
                            <div class="gap-2 d-flex justify-content-end">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
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
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($masyarakats as $index => $masyarakat)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $masyarakat->kode }}</td>
                                            <td>{{ $masyarakat->id_kepala_keluarga }}</td>
                                            <td>{{ $masyarakat->provinsi }}</td>
                                            <td>{{ $masyarakat->kabupaten_kota }}</td>
                                            <td>{{ $masyarakat->kecamatan }}</td>
                                            <td>{{ $masyarakat->desa_kelurahan }}</td>
                                            <td>{{ $masyarakat->alamat }}</td>
                                            <td>{{ $masyarakat->kepala_keluarga }}</td>
                                            <td>{{ $masyarakat->nik }}</td>
                                            <td>{{ $masyarakat->padan_dukcapil }}</td>
                                            <td>{{ $masyarakat->jenis_kelamin }}</td>
                                            <td>{{ $masyarakat->tanggal_lahir }}</td>
                                            <td>{{ $masyarakat->pekerjaan }}</td>
                                            <td>{{ $masyarakat->kepemilikan_rumah }}</td>
                                            <td>{{ $masyarakat->jenis_atap }}</td>
                                            <td>{{ $masyarakat->jenis_dinding }}</td>
                                            <td>{{ $masyarakat->jenis_lantai }}</td>
                                            <td>{{ $masyarakat->sumber_penerangan }}</td>
                                            <td>{{ $masyarakat->bahan_bakar_memasak }}</td>
                                            <td>{{ $masyarakat->sumber_air_minum }}</td>
                                            <td>{{ $masyarakat->fasilitas_bab }}</td>
                                            <td>
                                                <button class="btn btn-warning"><a href="/tampilupdate/"><i
                                                            class="fa-solid fa-pen-to-square"
                                                            style="color: #f6f6f4;"></i></a></button>
                                                <form action="{{ route('masyarakat.destroy', $masyarakat->id) }}"
                                                    method="POST" style="display:inline;" title="Hapus Masyarakat">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger delete-button">
                                                        <span class="fa-solid fa-trash"></span>
                                                    </button>
                                                </form>
                                            </td>
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
