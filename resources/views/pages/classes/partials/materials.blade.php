<div class="tab-pane fade show active" id="materials">
    @if (auth()->user()->hasRole('Dosen'))
        <div class="card mb-3 dosen-only">
            <div class="card-body">
                <h5 class="card-title">Upload Materi Baru</h5>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="class_id" value="">
                    <div class="mb-3">
                        <label class="form-label">Judul Materi</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">File Materi</label>
                        <input type="file" name="file" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload Materi</button>
                </form>
            </div>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Daftar Materi</h5>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Tanggal Upload</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (range(1, 5) as $index)
                            <tr>
                                <td>Materi {{ $index }}</td>
                                <td>{{ now()->subDays($index)->format('d/m/Y') }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success">
                                        Download
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
