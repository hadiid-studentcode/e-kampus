@extends('layouts.app')



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
        <hr />

        @include('components.alert')


        <div class="card">



            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div>
                        <h6 class="mb-0">Data Mata Kuliah</h6>
                    </div>
                    <div class="ms-auto">
                    
                    </div>
                </div>
            </div>
            <div class="card-body">

                <div class="row row-cols-1 row-cols-md-3 g-4 mt-1">
                    @foreach($courses as $course)
                    <div class="col">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1719845853806-1c54b0ed37c5?q=80&w=1744&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="{{ $course->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $course->name }}</h5>
                                <p class="card-text">{{ $course->description }}</p>

                                     <a href="{{ route('classes.show', $course->id) }}" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                 
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
