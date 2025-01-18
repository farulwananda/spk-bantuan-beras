@extends('layouts.app')
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Tambah Data Masyarakat</h1>
            <ol class="breadcrumb">
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Form Basic -->
                <div class="mb-3 card">
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Masyarakat</h6>
                        <a href="{{ route('masyarakat.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('masyarakat.store') }}" method="POST">
                            @csrf
                            <h5 class="font-weight-bold">A. Identitas Keluarga</h5>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="kode">Kode</label>
                                        <input type="text" name="kode" class="form-control" id="kode"
                                            placeholder="Kode" value="{{ $generateKode }}" readonly>
                                        @error('kode')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="id_kepala_keluarga">ID Kepala Keluarga</label>
                                        <input type="text" name="id_kepala_keluarga" class="form-control"
                                            id="id_kepala_keluarga" placeholder="ID Kepala Keluarga"
                                            value="{{ old('id_kepala_keluarga') }}">
                                        @error('id_kepala_keluarga')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="kepala_keluarga">Nama Kepala Keluarga</label>
                                        <input type="text" name="kepala_keluarga" class="form-control"
                                            id="kepala_keluarga" placeholder="Nama Kepala Keluarga"
                                            value="{{ old('kepala_keluarga') }}">
                                        @error('kepala_keluarga')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input type="text" name="nik" class="form-control" id="nik"
                                            placeholder="NIK">
                                        @error('nik')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin"
                                            placeholder="Jenis Kelamin" value="{{ old('jenis_kelamin') }}">
                                        @error('jenis_kelamin')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir"
                                            placeholder="Tanggal Lahir" value="{{ old('tanggal_lahir') }}">
                                        @error('tanggal_lahir')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="provinsi">Provinsi</label>
                                        <input type="text" name="provinsi" class="form-control" id="provinsi"
                                            placeholder="Provinsi" value="{{ old('provinsi') }}">
                                        @error('provinsi')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="kabupaten_kota">Kabupaten/Kota</label>
                                        <input type="text" name="kabupaten_kota" class="form-control" id="kabupaten_kota"
                                            placeholder="Kabupaten/Kota" value="{{ old('kabupaten_kota') }}">
                                        @error('kabupaten_kota')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="kecamatan">Kecamatan</label>
                                        <input type="text" name="kecamatan" class="form-control" id="kecamatan"
                                            placeholder="Kecamatan" value="{{ old('kecamatan') }}">
                                        @error('kecamatan')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="desa_kelurahan">Desa/Kelurahan</label>
                                        <input type="text" name="desa_kelurahan" class="form-control"
                                            id="desa_kelurahan" placeholder="Desa/Kelurahan"
                                            value="{{ old('desa_kelurahan') }}">
                                        @error('desa_kelurahan')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="desil_kesejahteraan">Desil Kesejahteraan</label>
                                        <input type="text" name="desil_kesejahteraan" class="form-control"
                                            id="desil_kesejahteraan" placeholder="Desil Kesejahteraan"
                                            value="{{ old('desil_kesejahteraan') }}">
                                        @error('desil_kesejahteraan')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" id="alamat"
                                            placeholder="Alamat" value="{{ old('alamat') }}">
                                        @error('alamat')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="padan_dukcapil">Padan Dukcapil</label>
                                        <input type="text" name="padan_dukcapil" class="form-control"
                                            id="padan_dukcapil" placeholder="Padan Dukcapil"
                                            value="{{ old('padan_dukcapil') }}">
                                        @error('padan_dukcapil')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" name="pekerjaan" class="form-control" id="pekerjaan"
                                            placeholder="Pekerjaan" value="{{ old('pekerjaan') }}">
                                        @error('pekerjaan')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <h5 class="mt-4 mb-2 font-weight-bold">B. Kondisi Rumah</h5>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="kepemilikan_rumah">Kepemilikan Rumah</label>
                                        <input type="text" name="kepemilikan_rumah" class="form-control"
                                            id="kepemilikan_rumah" placeholder="Kepemilikan Rumah"
                                            value="{{ old('kepemilikan_rumah') }}">
                                        @error('kepemilikan_rumah')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="jenis_atap">Jenis Atap</label>
                                        <input type="text" name="jenis_atap" class="form-control" id="jenis_atap"
                                            placeholder="Jenis Atap" value="{{ old('jenis_atap') }}">
                                        @error('jenis_atap')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="jenis_dinding">Jenis Dinding</label>
                                        <input type="text" name="jenis_dinding" class="form-control"
                                            id="jenis_dinding" placeholder="Jenis Dinding"
                                            value="{{ old('jenis_dinding') }}">
                                        @error('jenis_dinding')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="jenis_lantai">Jenis Lantai</label>
                                        <input type="text" name="jenis_lantai" class="form-control" id="jenis_lantai"
                                            placeholder="Jenis Lantai" value="{{ old('jenis_lantai') }}">
                                        @error('jenis_lantai')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="sumber_penerangan">Sumber Penerangan</label>
                                        <input type="text" name="sumber_penerangan" class="form-control"
                                            id="sumber_penerangan" placeholder="Sumber Penerangan"
                                            value="{{ old('sumber_penerangan') }}">
                                        @error('sumber_penerangan')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="bahan_bakar_memasak">Bahan Bakar Memasak</label>
                                        <input type="text" name="bahan_bakar_memasak" class="form-control"
                                            id="bahan_bakar_memasak" placeholder="Bahan Bakar Memasak"
                                            value="{{ old('bahan_bakar_memasak') }}">
                                        @error('bahan_bakar_memasak')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="sumber_air_minum">Sumber Air Minum</label>
                                        <input type="text" name="sumber_air_minum" class="form-control"
                                            id="sumber_air_minum" placeholder="Sumber Air Minum"
                                            value="{{ old('sumber_air_minum') }}">
                                        @error('sumber_air_minum')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="fasilitas_bab">Fasilitas BAB</label>
                                        <input type="text" name="fasilitas_bab" class="form-control"
                                            id="fasilitas_bab" placeholder="Fasilitas BAB"
                                            value="{{ old('fasilitas_bab') }}">
                                        @error('fasilitas_bab')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="mt-4 btn btn-primary">Tambah Data Masyarakat</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
