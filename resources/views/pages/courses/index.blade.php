@extends('layouts.app')

@push('css')
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endpush


@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Courses</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">

            </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase mt-3">Daftar Mata Kuliah</h6>
        <hr />

        @include('components.alert')


        <div class="card">



            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div>
                        <h6 class="mb-0">Data Mata Kuliah</h6>
                    </div>
                    <div class="ms-auto">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahMataKuliah">Tambah
                            Mata Kuliah</button>

                        <!-- Modal -->
                        <div class="modal fade" id="tambahMataKuliah" tabindex="-1" aria-labelledby="tambahMataKuliah"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('courses.store') }}" method="post">
                                        @csrf
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="tambahMataKuliah">Tambah Mata Kuliah</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="mk" class="form-label">Mata Kuliah
                                                </label>
                                                <input type="text" class="form-control" id="mk" name="mk"
                                                    placeholder="Masukkan Nama Mata Kuliah" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Deskripsi</label>
                                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">


                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Dosen</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->lecturer->name }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#editMataKuliah_{{ $course->id }}"><i
                                                    class="bx bx-edit"></i></button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="editMataKuliah_{{ $course->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form action="{{ route('courses.update', $course->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="tambahMataKuliah">Edit Mata
                                                                    Kuliah</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="mk" class="form-label">Mata Kuliah
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        id="mk" name="mk"
                                                                        value="{{ $course->name }}"
                                                                        placeholder="Masukkan Nama Mata Kuliah" required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="description"
                                                                        class="form-label">Deskripsi</label>
                                                                    <textarea class="form-control" id="description" name="description" rows="3">{{ $course->description }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>

                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#deleteMataKuliah_{{ $course->id }}"><i
                                                    class="bx bx-trash"></i></button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteMataKuliah_{{ $course->id }}"
                                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete
                                                            </h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Apakah anda yakin ingin menghapus data ini?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <form action="{{ route('courses.destroy', $course->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <form action="{{ route('courses.enroll', $course->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-success"><i
                                                        class="bx bx-check"></i></button>
                                            </form>

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
@endsection

@push('js')
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endpush
