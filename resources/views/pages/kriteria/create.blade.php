@extends('layouts.app')
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Tambah Data Kriteria</h1>
            <ol class="breadcrumb">
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Form Basic -->
                <div class="mb-3 card">
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Kriteria</h6>
                        <a href="{{ route('kriteria.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kriteria.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="kode">Kode</label>
                                        <input type="text" name="kode_kriteria" class="form-control" id="kode"
                                            placeholder="Kode" value="{{ $generateKode }}" readonly>
                                        @error('kode_kriteria')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="nama_kriteria">Nama Kriteria</label>
                                        <input type="text" name="nama_kriteria" class="form-control"
                                            id="nama_kriteria" placeholder="Nama Kriteria"
                                            value="{{ old('nama_kriteria') }}">
                                        @error('nama_kriteria')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="bobot_kriteria">Bobot</label>
                                        <input type="number" name="bobot_kriteria" class="form-control"
                                            id="bobot_kriteria" min="0" placeholder="Bobot"
                                            value="{{ old('bobot_kriteria') }}">
                                        @error('bobot_kriteria')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="tipe_kriteria">Tipe Kriteria</label>
                                        <select name="tipe_kriteria" id="tipe_kriteria" class="form-control">
                                            <option value="">Pilih Tipe Kriteria</option>
                                            <option value="benefit">Benefit</option>
                                            <option value="cost">Cost</option>
                                        </select>
                                        @error('tipe_kriteria')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="mt-4 btn btn-primary">Tambah Data Kriteria</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
