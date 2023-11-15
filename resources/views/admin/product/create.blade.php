@extends('layouts.master')
@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Product</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">
                        Add New Product
                    </a>
                </li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END  -->

    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            @if (count($category) != null)
                <form action="{{  route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Add New Product</div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <label class=" form-label">Categories :</label>
                                    <select name="category_id" required class="form-control form-select select2" data-bs-placeholder="Select">
                                        <option selected>Select</option>
                                        @foreach ($category as $categories)
                                            <option value="{{ $categories->id }}">{{  $categories->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <label class=" form-label">Product Name :</label>
                                    <input type="text" required class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Product name">
                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <label class=" form-label">Product Price :</label>
                                    <input type="text" required class="form-control @error('price') is-invalid @enderror" name="price" >
                                </div>
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <label class=" form-label">SKU (Option):</label>
                                    <input type="text" class="form-control @error('SKU') is-invalid @enderror" name="SKU" >
                                </div>
                                @error('SKU')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <label class=" form-label">Status :</label>
                                    <select name="status" class="form-control form-select select2" data-bs-placeholder="Select">
                                        <option selected>Select</option>
                                        <option value="1">Hold</option>
                                        <option value="2">Publish</option>
                                </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <label class="form-label" for="productImage">Product image</label>
                                    <input type="file"  name="image" class="form-control  @error('image') is-invalid @enderror" id="productImage" />
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                {{-- <div class="col-lg-12 mb-3">
                                    <label class="form-label" for="inputGroupFile01">Cover image</label>
                                    <input type="file"  name="cover_image[]" class="form-control  @error('cover_image') is-invalid @enderror" id="inputGroupFile01"  multiple />
                                    @error('cover_image')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div> --}}
                            </div>
                            <!-- Row -->
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <label class=" form-label mb-4">Description :</label>
                                    <textarea class="form-control" id="editor" name="description"></textarea>
                                </div>
                            </div>
                            <!--End Row-->
                            <!-- Row -->
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <label class=" form-label mb-4"> Additional Information :</label>
                                    <textarea class="form-control" id="body" name="additional_information"></textarea>
                                </div>
                            </div>
                            <!--End Row-->
                        </div>
                        <div class="card-footer">
                            <!--Row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-primary form-control" value="Upload">
                                </div>
                            </div>
                            <!--End Row-->
                        </div>
                    </div>
                </form>
             @else
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card m-50">
                        <div class="card-body">
                            <h3>There is no categories, must add category before you can upload products</h3>
                            <a class="btn btn-primary" href="{{ route('admin.category.index')  }}">
                                Add Category
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    <!-- End Row -->

<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'editor' );
</script>
<script>
CKEDITOR.replace( 'body' );
</script>

@endsection

