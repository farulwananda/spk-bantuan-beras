@extends('layouts.app')
@push('styles')
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Data Sub Kriteria {{ Ucfirst($subkriteria->nama_subkriteria) }}</h1>
            <ol class="breadcrumb">
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="mb-3 card col-lg-12">
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Update Data Sub Kriteria
                            {{ Ucfirst($subkriteria->nama_subkriteria) }}</h6>
                        <a href="{{ route('kriteria.show', $subkriteria->kriteria_id) }}" class="btn btn-secondary">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('subkriteria.update', $subkriteria->id) }}" method="POST">
                            @csrf
                            @method('PUT')  
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="nama_subkriteria">Nama Sub Kriteria</label>
                                        <input type="text" name="nama_subkriteria" class="form-control"
                                            id="nama_subkriteria" placeholder="Nama Sub Kriteria"
                                            value="{{ old('nama_subkriteria', $subkriteria->nama_subkriteria) }}">
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
                                            <option value="1" {{ old('nilai', $subkriteria->nilai) == '1' ? 'selected' : '' }}>1 (Sangat
                                                Rendah)</option>
                                            <option value="2" {{ old('nilai', $subkriteria->nilai) == '2' ? 'selected' : '' }}>2 (Rendah)
                                            </option>
                                            <option value="3" {{ old('nilai', $subkriteria->nilai) == '3' ? 'selected' : '' }}>3 (Sedang)
                                            </option>
                                            <option value="4" {{ old('nilai', $subkriteria->nilai) == '4' ? 'selected' : '' }}>4 (Tinggi)
                                            </option>
                                            <option value="5" {{ old('nilai', $subkriteria->nilai) == '5' ? 'selected' : '' }}>5 (Sangat
                                                Tinggi)</option>
                                        </select>
                                        @error('nilai')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="mt-4 btn btn-primary">Update Data Sub Kriteria</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
