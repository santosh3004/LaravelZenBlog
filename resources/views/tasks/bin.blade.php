<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @notifyCss
  </head>
  <body>
    <x:notify-messages />
    <div class="container">
        <a name="" id="" class="btn btn-primary" href="{{route('task.create')}}" role="button">Add Task</a>
        <form action="{{route('import')}}" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Import</label>
                <input type="file"
                  class="form-control" name="file" id="" aria-describedby="helpId" placeholder="">
              </div>
              @csrf
              <button type="submit" class="btn btn-primary">Import</button>
        </form>
        <a name="" id="" class="btn btn-primary" href="{{route('export')}}" role="button">Export</a>
        <h4>Manage Tasks Bin</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Task Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($task as $t)
                <tr>
                    <td scope="row">{{$loop->iteration}}</td>
                    <td>{{$t->title}}</td>
                    <td>
                        <a name="" id="" class="btn btn-info" href="{{route('task.show',$t->id)}}" role="button">View</a>
                        <a name="" id="" class="btn btn-primary" href="{{route('task.edit',$t->id)}}" role="button">Edit</a>
                        {{-- <form action="{{route('task.recycle',$t->id)}}" method="POST" enctype="multipart/form-data">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form> --}}
                        <a name="" id="" class="btn btn-info" href="{{route('task.restore',$t->id)}}" role="button">Restore</a>
                        <a name="" id="" class="btn btn-success" href="{{route('generate-pdf',$t->id)}}" role="button">PDF Download</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    @notifyJs
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
