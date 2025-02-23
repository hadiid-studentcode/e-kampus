<div class="tab-pane fade" id="statistics">
    <div class="row">
        <!-- Card Statistik Umum -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Statistik Kelas</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0">
                            <div class="bg-primary rounded p-2">
                                <i class="fas fa-users text-white"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">Total Mahasiswa</h6>
                            <h4 class="mb-0">30</h4>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0">
                            <div class="bg-success rounded p-2">
                                <i class="fas fa-book text-white"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">Total Materi</h6>
                            <h4 class="mb-0">8</h4>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="bg-info rounded p-2">
                                <i class="fas fa-tasks text-white"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">Total Tugas</h6>
                            <h4 class="mb-0">5</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Progress Tugas -->
        <div class="col-md-8 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Progress Pengerjaan Tugas</h5>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <canvas id="taskProgress" width="100%" height="100%"></canvas>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <span class="badge bg-success">70%</span> Sudah Mengumpulkan
                            </div>
                            <div class="mb-3">
                                <span class="badge bg-warning">20%</span> Terlambat
                            </div>
                            <div>
                                <span class="badge bg-danger">10%</span> Belum Mengumpulkan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DOSEN ONLY: Tabel Detail Mahasiswa -->
        <div class="col-12 dosen-only">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Detail Progress Mahasiswa</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Mahasiswa</th>
                                    <th>NIM</th>
                                    <th>Kehadiran</th>
                                    <th>Tugas Selesai</th>
                                    <th>Rata-rata Nilai</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Budi Santoso</td>
                                    <td>2020001</td>
                                    <td>90%</td>
                                    <td>4/5</td>
                                    <td>85.5</td>
                                    <td><span class="badge bg-success">Aktif</span></td>
                                </tr>
                                <tr>
                                    <td>Siti Aminah</td>
                                    <td>2020002</td>
                                    <td>85%</td>
                                    <td>5/5</td>
                                    <td>90.0</td>
                                    <td><span class="badge bg-success">Aktif</span></td>
                                </tr>
                                <tr>
                                    <td>Ahmad Rizki</td>
                                    <td>2020003</td>
                                    <td>75%</td>
                                    <td>3/5</td>
                                    <td>78.5</td>
                                    <td><span class="badge bg-warning">Perlu Perhatian</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        // Dummy Chart untuk Progress Tugas
        const ctx = document.getElementById('taskProgress').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Sudah Mengumpulkan', 'Terlambat', 'Belum Mengumpulkan'],
                datasets: [{
                    data: [70, 20, 10],
                    backgroundColor: ['#28a745', '#ffc107', '#dc3545']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
@endpush

<style>
    For demo purposes - hide/show based on role
    .dosen-only {
        display: block;
    }

    .mahasiswa-only {
        display: none;
    }

    /* Add this to switch views */
    body.is-mahasiswa .dosen-only {
        display: none;
    }

    body.is-mahasiswa .mahasiswa-only {
        display: block;
    }
</style>

<script>
    // Demo purpose role switcher
    document.getElementById('roleSwitch').addEventListener('change', function() {
        document.body.classList.toggle('is-mahasiswa', this.value === 'Mahasiswa');
    });
</script>
