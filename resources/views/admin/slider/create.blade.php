@extends('admin.layouts.app')
@section('content')

  <div class="content-wrapper" style="min-height: 1345.31px;">
  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6">
  <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Slider Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form class="form-horizontal" method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Blog Id</label>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Blog</label>
                        <select name="blogid" class="form-control">
                          <option value="-1" selected>Select</option>

                        </select>
                      </div>
                    </div>

                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                      <input type="text" name="url" class="form-control" id="inputEmail3" placeholder="Url">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Order</label>
                    <div class="col-sm-10">
                      <input type="number" name="order" class="form-control" placeholder="1,2,3.....">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-info">Add Slider</button>

                </div>
                <!-- /.card-footer -->
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
  </div>



@endsection
