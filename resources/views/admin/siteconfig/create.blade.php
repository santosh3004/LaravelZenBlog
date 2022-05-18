@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper" style="min-height: 1345.31px;">
  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6">
  <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Site Config Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form class="form-horizontal" method="POST" action="{{route('siteconfig.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Site Key</label>
                    <div class="col-sm-10">
                      <input type="text" name="sitekey" class="form-control" id="name" placeholder="Enter Site Key">
                    </div>
                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Site Value</label>
                    <div class="col-sm-10">
                      <input type="text" name="sitevalue" class="form-control" id="inputEmail3" placeholder="Enter Site Value">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-info">Add Site Config</button>

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
