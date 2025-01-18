@extends('layouts.app')
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Upload Data Masyarakat</h1>
            <ol class="breadcrumb">
            </ol>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <!-- Form Basic -->
                <div class="mb-3 card">
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Upload Data Masyarakat</h6>
                        <a href="{{ route('masyarakat.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>

                    <div class="card-body">
                        <form id="uploadForm" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Upload Data</label>
                                <input type="file" name="file" class="form-control" accept=".xlsx,.xls">
                                <small class="text-muted">Catatan: Hanya menerima file dengan ektensi .xlsx dan .xls</small>
                            </div>

                            <div class="mb-3 progress d-none" id="progressBar">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                    style="width: 0%" id="progressBarInner">0%</div>
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

    <div class="top-0 p-3 toast-container position-fixed end-0">
        <div class="text-white border-0 toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true"
            id="notificationToast">
            <div class="d-flex">
                <div class="toast-body" id="toastMessage">
                </div>
                <button type="button" class="m-auto btn-close btn-close-white me-2" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        document.getElementById('uploadForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = this;
            const formData = new FormData(form);
            const progressBar = document.getElementById('progressBar');
            const progressBarInner = document.getElementById('progressBarInner');
            const uploadButton = document.getElementById('uploadButton');
            const toast = document.getElementById('notificationToast');
            const toastMessage = document.getElementById('toastMessage');
            const bsToast = new bootstrap.Toast(toast);

            progressBar.classList.remove('d-none');
            uploadButton.disabled = true;
            uploadButton.innerHTML = 'Uploading...';

            let progress = 0;
            const interval = setInterval(() => {
                progress += Math.random() * 30;
                if (progress > 90) clearInterval(interval);
                progressBarInner.style.width = Math.min(progress, 90) + '%';
                progressBarInner.innerHTML = Math.round(Math.min(progress, 90)) + '%';
            }, 1000);

            fetch('{{ route('masyarakat.upload.process') }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    timeout: 300000 // 5 menit
                })
                .then(response => {
                    return response.text().then(text => {
                        try {
                            return JSON.parse(text);
                        } catch (e) {
                            console.log('Response asli:', text);
                            throw new Error('Invalid JSON response');
                        }
                    });
                })
                .then(data => {
                    clearInterval(interval);

                    if (data.success) {
                        progressBarInner.style.width = '100%';
                        progressBarInner.innerHTML = '100%';

                        toast.classList.add('bg-success');
                        toast.classList.remove('bg-danger');
                        toastMessage.textContent = data.message;
                        bsToast.show();

                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    } else {
                        throw new Error(data.message);
                    }
                })
                .catch(error => {
                    clearInterval(interval);
                    progressBar.classList.add('d-none');
                    progressBarInner.style.width = '0%';

                    toast.classList.add('bg-danger');
                    toast.classList.remove('bg-success');
                    toastMessage.textContent = error.message;
                    bsToast.show();
                })
                .finally(() => {
                    uploadButton.disabled = false;
                    uploadButton.innerHTML = 'Upload Data';
                });
        });
    </script>
@endpush
