@extends('layout.mainlayout')

@section('content')

    <h1>Ini Halaman Student</h1>

    <div class="my-5 d-flex justify-content-between"> 
        <a href="students-add" class="btn btn-primary">Add data</a>
        <a href="students-deleted" class="btn btn-info">Show deleted data</a>
    </div>

    @if(Session::has('status'))
     <div class="alert alert-success" role="alert">
       {{ Session::get('message') }}
      </div>
    @endif

    <div class="my-3 col-12 col-sm-8 col-md-5">
        <form action="">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="floatingInputGroup1" name="keyword" placeholder="keyword">
                <button class="input-group-text btn btn-primary">search</button>  
            </div>
        </form>        
    </div>
    
    <h4>Student List</h4>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>NIS</th>
                <th>class</th>
                <th>Action</th>
                {{-- <th>Class ID</th>
                <th>Class</th>
                <th>Ekstracurricular</th>
                <th>Teachers</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($studentlist as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->gender }}</td>
                    <td>{{ $data->nis }}</td>
                    <td>{{ $data->class->name }}</td>
                    <td>
                        <a href="students/{{$data->id }}" class="btn btn-primary">Detail</a>
                        <a href="students-edit/{{$data->id }}" class="btn btn-info">Edit</a>
                        <a href="students-delete/{{$data->id }}" class="btn btn-warning">Delete</a>
                    </td>
                </tr>                
            @endforeach
        </tbody>
    </table>

    <div class="my-5">
        {{ $studentlist->withQueryString()->links() }}
    </div>
    

@endsection
