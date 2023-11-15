<div class="modal fade" id="modaldemo8">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add Category</h6>
            </div>
            <div class="modal-body">
                <form action="{{  route('admin.category.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class=" mb-4">
                                <div class="form-group">
                                    <label class=" form-label">Category Name :</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Category Name">
                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary form-control">Upload</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>