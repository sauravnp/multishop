@extends('backend.app')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create Products</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Products</a></li>
                            <li class="breadcrumb-item"><a href="#">Create</a></li>

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"> Fill the form to create new form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action = "{{route('admin.products.store')}}" method = "POST" enctype = "multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" placeholder="Enter name" name = "name">
                </div>

                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" placeholder="Enter price" name = "price">
                </div>

                <div class="form-group">
                    <label>Short Description</label>
                    <input type="text" class="form-control" placeholder="Enter short description" name = "short_description">
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" placeholder="Enter description" name = "description">
                </div>

                <div class="form-group">
                    <label>Information</label>
                    <input type="text" class="form-control" placeholder="Enter information" name="information">
                </div>

                <div class="form-group" >
                    <label>Available Size</label>
                    <input type="text" class="form-control" placeholder="Enter size key seperated by comma(S,M,L,XL)" name = "sizes">
                </div>

                <div class="form-group">
                    <label>Available Color</label>
                    <input type="text" class="form-control" placeholder="Enter color key seperated by comma(Black, White, Red, Blue)" name = colors>
                </div>

                <div class="form-group">
                    <label>Available Quantity</label>
                    <input type="text" class="form-control" placeholder="Enter available quantity" name = "available_quantity">
                </div>


                <div class="form-group">
                    <label for="exampleInputFile">Primary Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Image Two</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Image Three</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Create Product</span>
                      </div>
                    </div>
                  </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

@endsection
<!--@section('scripts')  -->











@endsection
