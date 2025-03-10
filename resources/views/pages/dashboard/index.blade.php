@extends('layouts.app')

@push('css')
    <link href="{{ asset('assets/plugins/highcharts/css/highcharts.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="page-content container-fluid">
        <!-- Stats Cards -->
        <div class="row g-3 mb-4">
            <div class="col">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">Total Mata Kuliah</p>
                                <h5 class="mb-0">24</h5>
                            </div>
                            <div class="ms-auto"> <i class='bx bx-book-open font-30'></i>
                            </div>
                        </div>
                    </div>
                    <div class="" id="chart1"></div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">Total Mahasiswa</p>
                                <h5 class="mb-0">1.247</h5>
                            </div>
                            <div class="ms-auto"> <i class='bx bx-user-pin font-30'></i>
                            </div>
                        </div>
                    </div>
                    <div class="" id="chart2"></div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">Total Tugas</p>
                                <h5 class="mb-0">342</h5>
                            </div>
                            <div class="ms-auto"> <i class='bx bx-task font-30'></i>
                            </div>
                        </div>
                    </div>
                    <div class="" id="chart3"></div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">Rata-rata Nilai</p>
                                <h5 class="mb-0">82,5</h5>
                            </div>
                            <div class="ms-auto"> <i class='bx bx-line-chart font-30'></i>
                            </div>
                        </div>
                    </div>
                    <div class="" id="chart4"></div>
                </div>
            </div>
        </div>

        <!-- Course & Assignment Stats -->
        <div class="row g-3 mb-4">
            <div class="col-12 col-lg-8">
                <div class="card radius-10 h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <h5 class="card-title mb-0">Mahasiswa per Mata Kuliah</h5>
                            <div class="ms-auto">
                                <select class="form-select form-select-sm">
                                    <option>Semester Berjalan</option>
                                    <option>Semester Sebelumnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="chart-container" style="min-height: 300px">
                            <div id="chart5"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card radius-10 h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Status Tugas</h5>
                        <div class="assignments-stats">
                            <div class="mb-4">
                                <div class="d-flex align-items-center mb-2">
                                    <h6 class="mb-0">Tugas Sudah Dinilai</h6>
                                    <span class="ms-auto">75%</span>
                                </div>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex align-items-center mb-2">
                                    <h6 class="mb-0">Tugas Belum Dinilai</h6>
                                    <span class="ms-auto">25%</span>
                                </div>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Student Performance Table -->
        <div class="row">
            <div class="col-12">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <h5 class="card-title mb-0">Kinerja Mahasiswa Terkini</h5>
                            <div class="ms-auto">
                                <button class="btn btn-sm btn-primary">Lihat Semua</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Mata Kuliah</th>
                                        <th class="text-center">Tugas Selesai</th>
                                        <th class="text-center">Rata-rata</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#12345</td>
                                        <td>Budi Santoso</td>
                                        <td>Pemrograman Web</td>
                                        <td class="text-center">8/10</td>
                                        <td class="text-center">85,5</td>
                                        <td class="text-center"><span
                                                class="badge bg-light-success text-success">Baik</span></td>
                                        <td class="text-center"><button
                                                class="btn btn-sm btn-outline-primary">Detail</button></td>
                                    </tr>
                                    <tr>
                                        <td>#12346</td>
                                        <td>Siti Rahayu</td>
                                        <td>Desain Database</td>
                                        <td class="text-center">7/10</td>
                                        <td class="text-center">78,3</td>
                                        <td class="text-center"><span
                                                class="badge bg-light-warning text-warning">Cukup</span></td>
                                        <td class="text-center"><button
                                                class="btn btn-sm btn-outline-primary">Detail</button></td>
                                    </tr>
                                    <tr>
                                        <td>#12347</td>
                                        <td>Ahmad Rizki</td>
                                        <td>Rekayasa Perangkat Lunak</td>
                                        <td class="text-center">9/10</td>
                                        <td class="text-center">92,7</td>
                                        <td class="text-center"><span class="badge bg-light-success text-success">Sangat
                                                Baik</span></td>
                                        <td class="text-center"><button
                                                class="btn btn-sm btn-outline-primary">Detail</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/plugins/highcharts/js/highcharts.js') }}"></script>
    <script src="{{ asset('assets/plugins/highcharts/js/exporting.js') }}"></script>
    <script src="{{ asset('assets/plugins/highcharts/js/variable-pie.js') }}"></script>
    <script src="{{ asset('assets/plugins/highcharts/js/export-data.js') }}"></script>
    <script src="{{ asset('assets/plugins/highcharts/js/accessibility.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/index2.js') }}"></script>
    <script>
        // Add this to ensure charts are responsive
        $(window).on('resize', function() {
            if (typeof chart5 !== 'undefined') {
                chart5.updateSize();
            }
        });
    </script>
@endpush
