@extends('layouts.app')
@push('styles')
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Data Kriteria</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Kriteria</li>
            </ol>
        </div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                {{ session('success') }}
            </div>
        @endif
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
                        <h6 class="m-0 font-weight-bold text-primary">Data Kriteria</h6>
                        <div>
                            <a href="{{ route('kriteria.create') }}" class="mb-1 btn btn-primary"><i
                                    class="fa-solid fa-file-pen"></i> Tambah Data Kriteria</a>
                        </div>
                    </div>
                    <div class="p-3 table-responsive">
                        <table class="table align-items-center table-flush" id="dataTable">
                            <div class="gap-2 d-flex justify-content-end">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama Kriteria</th>
                                        <th>Bobot</th>
                                        <th>Kategori</th>
                                        <th width="10%">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kriterias as $index => $kriteria)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $kriteria->kode_kriteria }}</td>
                                            <td>{{ $kriteria->nama_kriteria }}</td>
                                            <td>{{ $kriteria->bobot_kriteria }}</td>
                                            <td>{{ Ucfirst($kriteria->tipe_kriteria) }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('kriteria.edit', $kriteria->id) }}"
                                                        class="mr-2 btn btn-warning">
                                                        <i class="fa-solid fa-pen-to-square" style="color: #f6f6f4;"></i>
                                                    </a>
                                                    <a href="{{ route('kriteria.show', $kriteria->id) }}"
                                                        class="mr-2 btn btn-primary">
                                                        <i class="fa-solid fa-eye" style="color: #f3f4f7;"></i>
                                                    </a>
                                                    <form action="{{ route('kriteria.destroy', $kriteria->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fa-solid fa-trash" style="color: #f3f4f7;"></i>
                                                        </button>
                                                    </form>
                                                </div>
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
