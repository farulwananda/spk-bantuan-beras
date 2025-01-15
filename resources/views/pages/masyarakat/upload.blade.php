@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <form id="uploadForm" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Upload Excel</label>
                    <input type="file" name="file" class="form-control" accept=".xlsx,.xls">
                </div>

                <!-- Progress Bar -->
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

            // Show progress bar
            progressBar.classList.remove('d-none');
            uploadButton.disabled = true;
            uploadButton.innerHTML = 'Uploading...';

            // Simulasi progress (karena Laravel Excel tidak memiliki real-time progress)
            let progress = 0;
            const interval = setInterval(() => {
                progress += Math.random() * 30;
                if (progress > 90) clearInterval(interval);
                progressBarInner.style.width = Math.min(progress, 90) + '%';
                progressBarInner.innerHTML = Math.round(Math.min(progress, 90)) + '%';
            }, 1000);

            // Ajax request
            fetch('{{ route('masyarakat.upload.process') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    clearInterval(interval);
                    console.log(data);
                
                    if (data.success) {
                        // Set progress to 100%
                        progressBarInner.style.width = '100%';
                        progressBarInner.innerHTML = '100%';

                    } else {
                        throw new Error(data.message);
                    }
                })
                .catch(error => {
                    clearInterval(interval);

                    // Reset progress bar
                    progressBar.classList.add('d-none');
                    progressBarInner.style.width = '0%';
                })
                .finally(() => {
                    uploadButton.disabled = false;
                    uploadButton.innerHTML = 'Upload Data';
                });
        });
    </script>
@endpush
