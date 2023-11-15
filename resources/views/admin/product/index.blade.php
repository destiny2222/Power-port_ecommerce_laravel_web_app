@extends('layouts.master')
@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Product</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item btn btn-primary">
                    <a href="{{  route('admin.product.create') }}" class="text-white">
                        Add New Product
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
                    <h3 class="card-title">Product</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered border text-nowrap mb-0" id="basic-edit">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>category</th>
                                    <th colspan="2">Description</th>
                                    <th colspan="2">Additional Information</th>
                                    <th>SKU</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $products)
                                <tr>
                                    <td>{{  $loop->index + 1 }}</td>
                                    <td><img src="{{  asset('upload/product/'.$products->image ) }}" alt="" width="100" height="100"></td>
                                    <td>
                                        {{ number_format($products->price, 2) }}
                                    </td>
                                    <td>{{  $products->name }}</td>
                                    <td>
                                        <span class="badge  bg-primary p-3 text-white">{{ $products->category['name'] }}</span>
                                    </td>
                                    <td colspan="2">{!! html_entity_decode(\Str::limit( $products->description, 200)) !!}</td>
                                    <td colspan="2"> {!! html_entity_decode(\Str::limit($products->additional_information,200)) !!}</td>
                                    <td>
                                        @if ( $products->SKU == null)
                                            no sku
                                            @else
                                            {{ $products->SKU }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($products->status == 1)
                                            <span class="badge bg-warning">Hold</span>
                                        @elseif ($products->status == 2)
                                            <span class="badge bg-success"> Publish</span>
                                        @else
                                           
                                        @endif
                                    </td>
                                    <td name="bstable-actions">
                                        <div class="btn-list d-flex">
                                            <a  href="{{ route('admin.product.edit',  $products->id ) }}" class="btn btn-sm btn-primary">
                                                <span class="fe fe-edit"> </span>
                                            </a>
                                            <form  action="{{ route('admin.product.destroy',$products->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button  type="submit"  class="btn  btn-sm btn-danger" onclick="return confirm('Are you sure?');">
                                                    <span class="fe fe-trash-2"> </span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                {{-- @include('admin.projector.edit') --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
@endsection

@push('script')
    <script>
        
    </script>
@endpush