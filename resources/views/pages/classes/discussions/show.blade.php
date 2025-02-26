@extends('layouts.app')

@section('content')
    <div class="page-content container-fluid">
        <!-- Breadcrumb -->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-4">
            <div class="breadcrumb-title pe-3">Diskusi Kelas</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Forum Diskusi</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Tabs Navigation -->


        @include('components.alert')

        <div class="row">
            <div class="col-12">
                <!-- New Discussion Form -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-4">
                        @include('pages.classes.partials.tabs')
                        <hr>
                        <h5 class="card-title d-flex align-items-center gap-2 mb-3">
                            <i class="bx bx-conversation"></i>
                            Mulai Diskusi Baru
                        </h5>
                        <form action="{{ route('discussions.store') }}" method="POST">
                         
                            <input type="hidden" name="course_id" value="{{ $course->id }}">
                         
                            <div class="mb-3">
                                <label class="form-label">Pesan</label>
                                <textarea name="content" class="form-control" rows="3" placeholder="Tulis pesan diskusi..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="bx bx-plus-circle me-1"></i>
                                Mulai Diskusi
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Discussion List -->
                <div class="discussions-list">
                    <!-- Discussion Card 1 -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title mb-0">Cara Menggunakan Laravel Migration</h5>
                                <span class="badge bg-primary">3 balasan</span>
                            </div>

                            <!-- Main Discussion -->
                            <div class="discussion-content mb-4">
                                <p class="card-text">Bagaimana cara membuat dan menjalankan migration di Laravel? Saya masih
                                    bingung dengan konsepnya.</p>
                                <div class="d-flex align-items-center text-muted small">
                                    <img src="https://ui-avatars.com/api/?name=Budi&background=random"
                                        class="rounded-circle me-2" width="32" height="32" alt="Avatar">
                                    <span>Budi Santoso (Mahasiswa) • 2 jam yang lalu</span>
                                </div>
                            </div>

                            <!-- Replies Section -->
                            <div class="replies-section">
                                <div class="ms-4 mb-3">
                                    <div class="d-flex gap-2">
                                        <img src="https://ui-avatars.com/api/?name=Dosen&background=random"
                                            class="rounded-circle" width="32" height="32" alt="Avatar">
                                        <div class="flex-grow-1">
                                            <div class="bg-light p-3 rounded">
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <span class="fw-bold">Dr. Ahmad (Dosen)</span>
                                                    <small class="text-muted">1 jam yang lalu</small>
                                                </div>
                                                <p class="mb-0">Migration adalah cara untuk mengatur struktur database.
                                                    Gunakan perintah 'php artisan make:migration create_table_name' untuk
                                                    membuatnya.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reply Form -->
                            <div class="mt-3">
                                <form action="#" method="POST" class="d-flex gap-2">
                                    <div class="flex-grow-1">
                                        <input type="text" name="content" class="form-control"
                                            placeholder="Tulis balasan...">
                                    </div>
                                    <button class="btn btn-primary" type="submit">
                                        <i class="bx bx-send me-1"></i>
                                        Balas
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- You can add more discussion cards here -->
                </div>
            </div>
        </div>
    </div>
@endsection
