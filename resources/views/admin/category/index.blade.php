@extends('layouts.master')
@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Category</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item btn btn-primary">
                    <a data-bs-effect="effect-scale" data-bs-toggle="modal" href="#modaldemo8" class="text-white modal-effect">
                        Add New Category
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
                    <h3 class="card-title">Category</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered border text-nowrap mb-0" id="basic-edit">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $categories)
                                <tr>
                                    <td>{{  $loop->index + 1 }}</td>
                                    <td>{{  $categories->name }}</td>
                                    <td name="bstable-actions">
                                        <div class="btn-list d-flex">
                                            <button  type="button" data-bs-effect="effect-super-scaled" data-bs-toggle="modal" href="#modaldemo8{{ $categories->id }}" class="modal-effect  btn btn-sm btn-primary">
                                                <span class="fe fe-edit"> </span>
                                            </button>
                                            <form  action="{{ route('admin.category.destroy',$categories->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button  type="submit"  class="btn  btn-sm btn-danger" onclick="return confirm('Are you sure?');">
                                                    <span class="fe fe-trash-2"> </span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @include('admin.category.edit')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
    @include('admin.category.create')
@endsection

@push('script')
    <script>
        
    </script>
@endpush