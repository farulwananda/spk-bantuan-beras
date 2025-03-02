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
                                        <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki"
                                                {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                                            </option>
                                            <option value="Perempuan"
                                                {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan
                                            </option>
                                        </select>
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
                                            placeholder="Provinsi" value="JAWA TIMUR" readonly>
                                        @error('provinsi')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="kabupaten_kota">Kabupaten/Kota</label>
                                        <input type="text" name="kabupaten_kota" class="form-control" id="kabupaten_kota"
                                            placeholder="Kabupaten/Kota" value="BONDOWOSO" readonly>
                                        @error('kabupaten_kota')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="kecamatan">Kecamatan</label>
                                        <input type="text" name="kecamatan" class="form-control" id="kecamatan"
                                            placeholder="Kecamatan" value="BONDOWOSO" readonly>
                                        @error('kecamatan')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="desa_kelurahan">Desa/Kelurahan</label>
                                        <select name="desa_kelurahan" class="form-control" id="desa_kelurahan">
                                            <option value="">Pilih Kelurahan</option>
                                            <option value="BADEAN"
                                                {{ old('desa_kelurahan') == 'BADEAN' ? 'selected' : '' }}>BADEAN
                                            </option>
                                            <option value="Blindungan"
                                                {{ old('desa_kelurahan') == 'BLINDUNGAN' ? 'selected' : '' }}>BLINDUNGAN
                                            </option>
                                            <option value="DABASAH"
                                                {{ old('desa_kelurahan') == 'DABASAH' ? 'selected' : '' }}>DABASAH</option>
                                            <option value="KADEMANGAN"
                                                {{ old('desa_kelurahan') == 'KADEMANGAN' ? 'selected' : '' }}>KADEMANGAN
                                            </option>
                                            <option value="KEMBANG"
                                                {{ old('desa_kelurahan') == 'KEMBANG' ? 'selected' : '' }}>KEMBANG</option>
                                            <option value="KOTAKULON"
                                                {{ old('desa_kelurahan') == 'KOTAKULON' ? 'selected' : '' }}>KOTAKULON
                                            </option>
                                            <option value="NANGKAAN"
                                                {{ old('desa_kelurahan') == 'NANGKAAN' ? 'selected' : '' }}>NANGKAAN
                                            </option>
                                            <option value="PANCORAN"
                                                {{ old('desa_kelurahan') == 'PANCORAN' ? 'selected' : '' }}>PANCORAN
                                            </option>
                                            <option value="PEJATEN"
                                                {{ old('desa_kelurahan') == 'PEJATEN' ? 'selected' : '' }}>PEJATEN
                                            </option>
                                            <option value="SUKOWIRYO"
                                                {{ old('desa_kelurahan') == 'SUKOWIRYO' ? 'selected' : '' }}>SUKOWIRYO
                                            </option>
                                            <option value="TAMANSARI"
                                                {{ old('desa_kelurahan') == 'TAMANSARI' ? 'selected' : '' }}>TAMANSARI
                                            </option>
                                        </select>
                                        @error('desa_kelurahan')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="desil_kesejahteraan">Desil Kesejahteraan</label>
                                        <select name="desil_kesejahteraan" class="form-control" id="desil_kesejahteraan">
                                            <option value="">Pilih Desil Kesejahteraan</option>
                                            <option value="1"
                                                {{ old('desil_kesejahteraan') == '1' ? 'selected' : '' }}>1</option>
                                            <option value="2"
                                                {{ old('desil_kesejahteraan') == '2' ? 'selected' : '' }}>2</option>
                                            <option value="3"
                                                {{ old('desil_kesejahteraan') == '3' ? 'selected' : '' }}>3</option>
                                        </select>
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
                                        <select name="padan_dukcapil" class="form-control" id="padan_dukcapil">
                                            <option value="">Pilih Status Padan Dukcapil</option>
                                            <option value="Ya" {{ old('padan_dukcapil') == 'Ya' ? 'selected' : '' }}>
                                                Ya</option>
                                            <option value="Tidak"
                                                {{ old('padan_dukcapil') == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                                        </select>
                                        @error('padan_dukcapil')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <select name="pekerjaan" class="form-control" id="pekerjaan">
                                            <option value="">Pilih Pekerjaan</option>
                                            @foreach ($pekerjaan as $p)
                                                <option value="{{ $p->nama_subkriteria }}"
                                                    {{ old('pekerjaan') == $p->nama_subkriteria ? 'selected' : '' }}>
                                                    {{ $p->nama_subkriteria }}
                                                </option>
                                            @endforeach
                                        </select>
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
                                        <select name="kepemilikan_rumah" class="form-control" id="kepemilikan_rumah">
                                            <option value="">Pilih Kepemilikan Rumah</option>
                                            @foreach ($kepemilikanRumah as $k)
                                                <option value="{{ $k->nama_subkriteria }}"
                                                    {{ old('kepemilikan_rumah') == $k->nama_subkriteria ? 'selected' : '' }}>
                                                    {{ $k->nama_subkriteria }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('kepemilikan_rumah')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="jenis_atap">Jenis Atap</label>
                                        <select name="jenis_atap" class="form-control" id="jenis_atap">
                                            <option value="">Pilih Jenis Atap</option>
                                            @foreach ($jenisAtap as $j)
                                                <option value="{{ $j->nama_subkriteria }}"
                                                    {{ old('jenis_atap') == $j->nama_subkriteria ? 'selected' : '' }}>
                                                    {{ $j->nama_subkriteria }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('jenis_atap')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="jenis_dinding">Jenis Dinding</label>
                                        <select name="jenis_dinding" class="form-control" id="jenis_dinding">
                                            <option value="">Pilih Jenis Dinding</option>
                                            @foreach ($jenisDinding as $d)
                                                <option value="{{ $d->nama_subkriteria }}"
                                                    {{ old('jenis_dinding') == $d->nama_subkriteria ? 'selected' : '' }}>
                                                    {{ $d->nama_subkriteria }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('jenis_dinding')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="jenis_lantai">Jenis Lantai</label>
                                        <select name="jenis_lantai" class="form-control" id="jenis_lantai">
                                            <option value="">Pilih Jenis Lantai</option>
                                            @foreach ($jenisLantai as $l)
                                                <option value="{{ $l->nama_subkriteria }}"
                                                    {{ old('jenis_lantai') == $l->nama_subkriteria ? 'selected' : '' }}>
                                                    {{ $l->nama_subkriteria }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('jenis_lantai')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="sumber_penerangan">Sumber Penerangan</label>
                                        <select name="sumber_penerangan" class="form-control" id="sumber_penerangan">
                                            <option value="">Pilih Sumber Penerangan</option>
                                            @foreach ($sumberPenerangan as $s)
                                                <option value="{{ $s->nama_subkriteria }}"
                                                    {{ old('sumber_penerangan') == $s->nama_subkriteria ? 'selected' : '' }}>
                                                    {{ $s->nama_subkriteria }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('sumber_penerangan')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="bahan_bakar_memasak">Bahan Bakar Memasak</label>
                                        <select name="bahan_bakar_memasak" class="form-control" id="bahan_bakar_memasak">
                                            <option value="">Pilih Bahan Bakar Memasak</option>
                                            @foreach ($bahanBakarMemasak as $b)
                                                <option value="{{ $b->nama_subkriteria }}"
                                                    {{ old('bahan_bakar_memasak') == $b->nama_subkriteria ? 'selected' : '' }}>
                                                    {{ $b->nama_subkriteria }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('bahan_bakar_memasak')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="sumber_air_minum">Sumber Air Minum</label>
                                        <select name="sumber_air_minum" class="form-control" id="sumber_air_minum">
                                            <option value="">Pilih Sumber Air Minum</option>
                                            @foreach ($sumberAirMinum as $a)
                                                <option value="{{ $a->nama_subkriteria }}"
                                                    {{ old('sumber_air_minum') == $a->nama_subkriteria ? 'selected' : '' }}>
                                                    {{ $a->nama_subkriteria }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('sumber_air_minum')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="fasilitas_bab">Fasilitas BAB</label>
                                        <select name="fasilitas_bab" class="form-control" id="fasilitas_bab">
                                            <option value="">Pilih Fasilitas BAB</option>
                                            @foreach ($fasilitasBab as $f)
                                                <option value="{{ $f->nama_subkriteria }}"
                                                    {{ old('fasilitas_bab') == $f->nama_subkriteria ? 'selected' : '' }}>
                                                    {{ $f->nama_subkriteria }}
                                                </option>
                                            @endforeach
                                        </select>
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
