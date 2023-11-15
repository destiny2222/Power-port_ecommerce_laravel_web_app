@extends('layouts.master')
@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Project</h1>
        <div>
            <ol class="breadcrumb">
                <li data-bs-effect="effect-scale" data-bs-toggle="modal" href="#modaldemo8" class="text-white modal-effect btn btn-primary">
                    <a  class="text-white">
                        Add New Project
                    </a>
                </li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Project</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered border text-nowrap mb-0" id="basic-edit">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($project as $projects)
                                <tr>
                                    <td>{{  $loop->index + 1 }}</td>
                                    <td><img src="{{  asset('upload/project/'.$projects->image ) }}" alt="" width="100" height="100"></td>
                                    <td>{{  $projects->name }}</td>
                                    <td name="bstable-actions">
                                        <div class="btn-list d-flex">
                                            <button  data-bs-effect="effect-super-scaled" data-bs-toggle="modal" href="#modaldemo8{{ $projects->id }}" class="modal-effect  btn btn-sm btn-primary">
                                                <span class="fe fe-edit"> </span>
                                            </button>
                                            <form  action="{{ route('admin.project.destroy',$projects->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button  type="submit"  class="btn  btn-sm btn-danger" onclick="return confirm('Are you sure?');">
                                                    <span class="fe fe-trash-2"> </span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @include('admin.project.edit')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
    @include('admin.project.create')
@endsection
@push('script')
    <script>
        
    </script>
@endpush