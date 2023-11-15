@extends('layouts.master')
@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Product</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">
                        Edit Product
                    </a>
                </li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END  -->

    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <form action="{{  route('admin.product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Product</div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <label class=" form-label">Categories :</label>
                                <select name="category_id" class="form-control form-select select2" data-bs-placeholder="Select">
                                    @foreach($category as $categories)
                                        <option value="{{ $categories->id }}" {{ $categories->id == $product->category_id ? 'selected' : '' }}>
                                            {{ $categories->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <label class=" form-label">Product Name :</label>
                                <input type="text" value="{{ $product->name }}" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Product name">
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
                                <input type="text" value="{{ $product->price }}" class="form-control @error('price') is-invalid @enderror" name="price" >
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
                                <input type="text" value="{{ $product->SKU }}" class="form-control @error('SKU') is-invalid @enderror" name="SKU" >
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
                                    <option value="1" {{  $product->status == 1 ? 'selected' : ''  }}>Hold</option>
                                    <option value="2" {{  $product->status == 2 ? 'selected' : '' }}>Publish</option>
                            </select>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-lg-12 mb-3">
                                <label class="form-label" for="productImage">Product image</label>
                                <input type="file"  name="image" value="{{ $product->image }}" class="form-control  @error('image') is-invalid @enderror" id="productImage" />
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 mb-3">
                                <!-- Add form fields for editing cover images -->
                                <div class="form-group">
                                    <label for="cover_image">Cover Images</label>
                                    <input type="file" name="cover_image[]" class="form-control" id="cover_image" multiple>
                                </div>

                                @if ($product->cover_image)
                                    @php
                                        $coverImages = json_decode($product->cover_image, true);
                                    @endphp

                                    @if (is_array($coverImages) && count($coverImages) > 0)
                                        <div class="row">
                                            @foreach ($coverImages as $coverImage)
                                                <div class="col-3">
                                                    <img src="{{ asset('upload/cover/' . $coverImage) }}" alt="Cover Image" class="img-fluid">
                                                    <input type="checkbox" name="remove_cover_images[]" value="{{ $coverImage }}"> Remove
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div> --}}
                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <label class=" form-label mb-4">Description :</label>
                                <textarea class="form-control" id="editor" name="description">{{ $product->description }}</textarea>
                            </div>
                        </div>
                        <!--End Row-->
                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <label class=" form-label mb-4"> Additional Information :</label>
                                <textarea class="form-control" id="body" name="additional_information">{{  $product->additional_information }}</textarea>
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

