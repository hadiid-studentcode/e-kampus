<div class="tab-pane fade" id="assignments">
    <!-- DOSEN ONLY -->
    <div class="card mb-3 dosen-only">
        <div class="card-body">
            <h5 class="card-title">Buat Tugas Baru</h5>
            <form>
                <div class="mb-3">
                    <label class="form-label">Judul Tugas</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deadline</label>
                    <input type="datetime-local" class="form-control">
                </div>
                <button type="button" class="btn btn-primary">Buat Tugas</button>
            </form>
        </div>
    </div>

    <!-- VISIBLE TO ALL -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Daftar Tugas</h5>
        <div class="card-body">
            <h5 class="card-title">Daftar Tugas</h5>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Deadline</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (range(1, 5) as $index)
                            <tr>
                                <td>Judul Tugas {{ $index }}</td>
                                <td>{{ now()->addDays($index)->format('d/m/Y H:i') }}</td>
                                <td>
                                    @if (auth()->user()->hasRole('mahasiswa'))
                                        <span class="mahasiswa-only badge bg-warning">Belum Dikumpulkan</span>
                                    @else
                                        <span class="dosen-only">{{ rand(0, 10) }} submissions</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info">
                                        Detail
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
