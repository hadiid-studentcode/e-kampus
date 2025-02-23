@extends('layouts.app')

@section('content')
    <div class="page-content container-fluid">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-4">
            <div class="breadcrumb-title pe-3">Submissions</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $assignment->title }}</li>
                    </ol>
                </nav>
            </div>
        </div>

        @include('components.alert')

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Submission Date</th>
                                <th>File</th>
                                <th>Score</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($submissions as $submission)
                                <tr>
                                    <td>{{ $submission->student->name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($submission->created_at)->format('d M Y, H:i') }}</td>
                                    <td>
                                        <a href="{{ asset('storage/' . $submission->file_path) }}"
                                            class="btn btn-sm btn-info" target="_blank">
                                            <i class="bx bx-download"></i> Download
                                        </a>
                                    </td>
                                    <td>{{ $submission->score ?? 'Not graded' }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#gradeModal{{ $submission->id }}">
                                            <i class="bx bx-edit"></i> Grade
                                        </button>

                                        <!-- Grade Modal -->
                                        <div class="modal fade" id="gradeModal{{ $submission->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('submissions.update', $submission->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Grade Submission</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label class="form-label">Student:
                                                                    {{ $submission->student->name }}</label>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="score" class="form-label">Score
                                                                    (0-100)</label>
                                                                <input type="number" class="form-control" id="score"
                                                                    name="score" min="0" max="100"
                                                                    value="{{ $submission->score }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                Score</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
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
