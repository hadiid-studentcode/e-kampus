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
                    <div class="col-12">
                        <h5 class="mb-0">Data Mata Kuliah</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!-- Improved nav tabs for mobile -->
                <div class="nav-wrapper position-relative mb-4">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row gap-2 gap-md-0">
                        <li class="nav-item">
                            <a class="nav-link mb-2 mb-md-0" href="{{ route('classes.show', $course->id) }}">Materi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-2 mb-md-0 active"
                                href="{{ route('classes.assignments.index', $course->id) }}">Tugas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-2 mb-md-0" href="#discussions" data-bs-toggle="tab">Forum Diskusi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-2 mb-md-0" href="#statistics" data-bs-toggle="tab">Statistik</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content">
                    <div class="">
                        <!-- DOSEN ONLY -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Buat Tugas Baru</h5>
                                <form action="{{ route('assignments.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                                    <div class="row">
                                        <div class="col-12 col-md-6 mb-3">
                                            <label class="form-label">Judul Tugas</label>
                                            <input type="text" class="form-control" name="title">
                                        </div>
                                        <div class="col-12 col-md-6 mb-3">
                                            <label class="form-label">Deadline</label>
                                            <input type="datetime-local" class="form-control" name="deadline">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Deskripsi</label>
                                            <textarea class="form-control" name="description" rows="3"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Buat Tugas</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- VISIBLE TO ALL -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Daftar Tugas</h5>
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <thead>
                                            <tr>
                                                <th class="min-w-150">Judul</th>
                                                <th class="min-w-120">Deadline</th>
                                                <th class="min-w-100">Deskripsi</th>
                                                <th class="min-w-100">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($assignments as $assignment)
                                                <tr>
                                                    <td>{{ $assignment->title }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($assignment->deadline)->format('d M Y, H:i') }}
                                                    </td>
                                                    <td>
                                                        {{ $assignment->description }}
                                                    </td>
                                                    <td>



                                                        <div class="btn-group" role="group"
                                                            aria-label="Basic mixed styles example">
                                                            <button type="button" class="btn btn-primary"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#uplaodTugas_{{ $assignment->id }}"><i class='bx bx-upload' ></i></button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="uplaodTugas_{{ $assignment->id }}"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <form action="{{ route('submissions.store') }}"
                                                                            method="post" enctype="multipart/form-data">
                                                                            @csrf
                                                                            <div class="modal-header">
                                                                                <h1 class="modal-title fs-5"
                                                                                    id="exampleModalLabel">
                                                                                    Upload Tugas</h1>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <input type="hidden" name="assignment_id"
                                                                                    value="{{ $assignment->id }}">
                                                                                <input type="hidden" name="student_id"
                                                                                    value="{{ auth()->user()->id }}">

                                                                                <div class="mb-3">
                                                                                    <label for="file"
                                                                                        class="form-label">Upload
                                                                                        Tugas</label>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        id="file" name="file"
                                                                                        aria-describedby="emailHelp">

                                                                                </div>



                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Save
                                                                                    changes</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <a href="{{ route('submissions.show', $assignment->id) }}"  class="btn btn-info" ><i
                                                                    class="bx bx-show"></i></a>

                                                        </div>
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

        {{-- @include('pages.classes.partials.materials') --}}
        {{-- @include('pages.classes.partials.assignments')
                    @include('pages.classes.partials.discussions')
                    @include('pages.classes.partials.statistics') --}}
    @endsection
