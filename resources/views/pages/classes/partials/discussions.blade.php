<div class="tab-pane fade" id="discussions">
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Mulai Diskusi Baru</h5>
            <form>
                <div class="mb-3">
                    <label class="form-label">Topik Diskusi</label>
                    <input type="text" class="form-control" placeholder="Masukkan topik diskusi...">
                </div>
                <div class="mb-3">
                    <label class="form-label">Pesan</label>
                    <textarea class="form-control" rows="3" placeholder="Tulis pesan diskusi..."></textarea>
                </div>
                <button type="button" class="btn btn-primary">Mulai Diskusi</button>
            </form>
        </div>
    </div>

    <div class="discussions-list">
        <!-- Contoh Diskusi -->
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Error saat Install Laravel</h5>
                    <span class="badge bg-primary">3 balasan</span>
                </div>
                <p class="card-text">Saya mengalami error saat composer install, bagaimana solusinya?</p>
                <div class="d-flex align-items-center text-muted small">
                    <img src="https://via.placeholder.com/32" class="rounded-circle me-2">
                    <span>Budi (Mahasiswa) - 2 jam yang lalu</span>
                </div>

                <hr>

                <!-- Balasan -->
                <div class="ms-4 mb-3">
                    <div class="d-flex">
                        <img src="https://via.placeholder.com/32" class="rounded-circle me-2">
                        <div class="flex-grow-1">
                            <div class="bg-light p-2 rounded">
                                <div class="d-flex justify-content-between">
                                    <small class="fw-bold">Dr. Andi (Dosen)</small>
                                    <small class="text-muted">1 jam yang lalu</small>
                                </div>
                                <p class="mb-0">Coba hapus folder vendor dan composer.lock lalu install ulang</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ms-4 mb-3">
                    <div class="d-flex">
                        <img src="https://via.placeholder.com/32" class="rounded-circle me-2">
                        <div class="flex-grow-1">
                            <div class="bg-light p-2 rounded">
                                <div class="d-flex justify-content-between">
                                    <small class="fw-bold">Siti (Mahasiswa)</small>
                                    <small class="text-muted">30 menit yang lalu</small>
                                </div>
                                <p class="mb-0">Saya juga mengalami masalah yang sama</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Balas -->
                <div class="mt-3">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Tulis balasan...">
                            <button class="btn btn-outline-primary" type="button">Balas</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Contoh Diskusi 2 -->
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Tentang Middleware Laravel</h5>
                    <span class="badge bg-primary">1 balasan</span>
                </div>
                <p class="card-text">Bagaimana cara kerja middleware di Laravel?</p>
                <div class="d-flex align-items-center text-muted small">
                    <img src="https://via.placeholder.com/32" class="rounded-circle me-2">
                    <span>Rani (Mahasiswa) - 5 jam yang lalu</span>
                </div>

                <hr>

                <!-- Form Balas -->
                <div class="mt-3">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Tulis balasan...">
                            <button class="btn btn-outline-primary" type="button">Balas</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
