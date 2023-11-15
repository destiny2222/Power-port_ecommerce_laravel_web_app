<div class="modal fade" id="modaldemo8{{ $projects->id }}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Update Project</h6>
            </div>
            <div class="modal-body">
                <form action="{{  route('admin.project.update', $projects->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class=" mb-4">
                                <div class="form-group">
                                    <label class=" form-label">Title :</label>
                                    <input type="text" value="{{ $projects->name }}" class="form-control @error('name') is-invalid @enderror" name="name">
                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  
                        </div>
                        <div class="col-lg-12">
                            <div class=" mb-4">
                                <div class="form-group">
                                    <label class="form-label" for="productImage">Project image</label>
                                    <input type="file"  name="image" value="{{ $projects->image }}" class="form-control  @error('image') is-invalid @enderror" id="productImage" />
                                </div>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>  
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary form-control">Save changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>