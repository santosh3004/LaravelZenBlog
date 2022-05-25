@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper" style="min-height: 1345.31px;">
  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6">
  <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Blog Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form class="form-horizontal" method="POST" action="{{route('blog.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                      <input type="text" name="title" class="form-control" id="name" placeholder="Blog Title">
                    </div>
                    @error('title')
                        {{ $message }}
                    @enderror
                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Slug</label>
                    <div class="col-sm-10">
                      <input type="text" name="slug" class="form-control" id="inputEmail3" placeholder="Slug Text">
                    </div>
                    @error('slug')
                        {{ $message }}
                    @enderror
                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                      <input type="text" name="img" class="form-control" id="inputEmail3" placeholder="Image Link">
                    </div>
                    @error('img')
                        {{ $message }}
                    @enderror
                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                      <input type="textarea" name="content" class="form-control" id="inputEmail3" placeholder="Content">
                    </div>
                    @error('content')
                        {{ $message }}
                    @enderror
                  </div>

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                      <select name="category_id" class="form-control">
                        <option value="">Select Category</option>
                        @foreach($blog_category as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                      </select>
                    </div>
                    @error('category')
                        {{ $message }}
                    @enderror
                  </div>
                  <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-info">Add Blog</button>
                  </div>
                </div>



                <!-- /.card-body -->

                <!-- /.card-footer -->
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
  </div>

@endsection
