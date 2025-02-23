@extends('layouts.app')

@section('content')
    <div class="page-content container-fluid">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-4">
            <div class="breadcrumb-title pe-3">Courses</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $course->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        @include('components.alert')

        <div class="card shadow-sm">
            <div class="card-header py-3">
                <div class="row align-items-center g-3">
                    <div class="col-12 col-lg">
                        <h5 class="mb-0">Data Mata Kuliah</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="nav-wrapper position-relative mb-4">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" href="#materials" data-bs-toggle="tab">Materi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" href="{{ route('classes.assignments.index', $course->id) }}">Tugas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" href="#discussions" data-bs-toggle="tab">Forum Diskusi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" href="#statistics" data-bs-toggle="tab">Statistik</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="materials">
                        @if (auth()->user()->hasRole('Dosen'))
                            <div class="card mb-4 border">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Upload Materi Baru</h5>
                                    <form action="{{ route('materials.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                                        @csrf
                                        <input type="hidden" name="course_id" value="{{ $course->id }}">
                                        <div class="col-12">
                                            <label class="form-label">Judul Materi</label>
                                            <input type="text" name="title" class="form-control" required>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">File Materi</label>
                                            <input type="file" name="file" class="form-control" required>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary px-4">Upload Materi</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endif

                        <div class="card border">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Daftar Materi</h5>
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <thead>
                                            <tr>
                                                <th class="text-nowrap">Judul</th>
                                                <th class="text-nowrap">Tanggal Upload</th>
                                                <th class="text-center text-nowrap">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($materials as $material)
                                                <tr>
                                                    <td>{{ $material->title }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($material->created_at)->format('d M Y') }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ route('materials.download', $material->id) }}" class="btn btn-sm btn-success px-3">
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

                </div>
            </div>
        </div>
    </div>

           {{-- @include('pages.classes.partials.materials') --}}
                    {{-- @include('pages.classes.partials.assignments')
                    @include('pages.classes.partials.discussions')
                    @include('pages.classes.partials.statistics') --}}
@endsection
