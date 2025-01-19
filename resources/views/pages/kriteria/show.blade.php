@extends('layouts.app')
@push('styles')
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Data Sub Kriteria {{ Ucfirst($kriteria->nama_kriteria) }}</h1>
            <ol class="breadcrumb">
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="mb-3 card col-lg-12">
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Sub Kriteria
                            {{ Ucfirst($kriteria->nama_kriteria) }}</h6>
                        <a href="{{ route('kriteria.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('subkriteria.store', $kriteria->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="nama_subkriteria">Nama Sub Kriteria</label>
                                        <input type="text" name="nama_subkriteria" class="form-control"
                                            id="nama_subkriteria" placeholder="Nama Sub Kriteria"
                                            value="{{ old('nama_subkriteria') }}">
                                        @error('nama_subkriteria')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="nilai">Nilai</label>
                                        <select name="nilai" class="form-control" id="nilai">
                                            <option value="">Pilih Nilai</option>
                                            <option value="1" {{ old('nilai') == '1' ? 'selected' : '' }}>1 (Sangat
                                                Rendah)</option>
                                            <option value="2" {{ old('nilai') == '2' ? 'selected' : '' }}>2 (Rendah)
                                            </option>
                                            <option value="3" {{ old('nilai') == '3' ? 'selected' : '' }}>3 (Sedang)
                                            </option>
                                            <option value="4" {{ old('nilai') == '4' ? 'selected' : '' }}>4 (Tinggi)
                                            </option>
                                            <option value="5" {{ old('nilai') == '5' ? 'selected' : '' }}>5 (Sangat
                                                Tinggi)</option>
                                        </select>
                                        @error('nilai')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="mt-4 btn btn-primary">Tambah Data Sub Kriteria</button>
                        </form>
                    </div>
                </div>

                <div class="mb-3 card">
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Data Sub Kriteria
                            {{ Ucfirst($kriteria->nama_kriteria) }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush" id="dataTable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Sub Kriteria</th>
                                        <th>Nilai</th>
                                        <th width="10%">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kriteria->subkriteria as $index => $subkriteria)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $subkriteria->nama_subkriteria }}</td>
                                            <td>{{ $subkriteria->nilai }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('subkriteria.edit', $subkriteria->id) }}"
                                                        class="mr-2 btn btn-warning">
                                                        <i class="fa-solid fa-pen-to-square" style="color: #f6f6f4;"></i>
                                                    </a>
                                                    <form action="{{ route('subkriteria.destroy', $subkriteria->id) }}"
                                                        method="POST">
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
                            </table>
                        </div>
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
