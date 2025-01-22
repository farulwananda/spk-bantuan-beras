@extends('layouts.app')
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Upload Data Masyarakat</h1>
            <ol class="breadcrumb">
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
                <div class="mb-3 card">
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Upload Data Masyarakat</h6>
                        <a href="{{ route('masyarakat.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('masyarakat.upload.process') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Upload Data</label>
                                <input type="file" name="file" class="form-control" accept=".xlsx,.xls">
                                <small class="text-muted">Catatan: Hanya menerima file dengan ektensi .xlsx dan .xls</small>
                            </div>
                            <button type="submit" class="btn btn-primary" id="uploadButton">
                                Upload Data
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
