@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper" style="min-height: 1302.4px;">
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Users</h1>
        </div>
        <!-- <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Users</li>
          </ol>
        </div> -->
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
    <div class="row">
      <div class="col-12">
      <div class="card">

            <div class="card-header d-flex justify-content-end">
            <div>
            <a href="{{route('user.create')}}><button type="button"class="btn btn-primary">Add</button></a>
            <a href="manageuserrecycle.php"><button type="button"class="btn btn-info"><i class="fa-solid fa-recycle"></i></button></a>
            </div>
              <!-- <h3 class="card-title">DataTable with minimal features &amp; hover style</h3> -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-responsive table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                <thead>
                <tr>
                  <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Name</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Email</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Status</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Actions</th>
              </tr>
                </thead>
                <tbody>
               @if ($users!=null)
                   @foreach ($users as $user)


                <tr class="odd">
                  <td class="dtr-control sorting_1" tabindex="0"><?php echo $user['name']; ?></td>
                  <td><?php echo $user['email']; ?></td>
                  <td><?php echo $user['status']; ?></td>
                  <td>
                    <a href="{{route('user.edit',$user->id)}}"><button type="button"class="btn btn-info">Edit</button></a>
                    {{-- <button type="button" class="btn btn-danger">Delete</button> --}}
                </td>
                </tr>
                @endforeach
                @else
                <tr>
                  <td colspan="4">No data found</td>
                </tr>
               @endif
              </tbody>

              </table></div></div>
              <!-- <div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
            </div> -->
            <!-- /.card-body -->
          </div>
      </div>
    </div>
    </div>
  </section>
</div>
</div>


@endsection
