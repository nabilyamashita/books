@extends('layout.mainlayout')

@section('content')

    <h1>Ini Halaman Teacher</h1>
    
    <div class="my-5 d-flex justify-content-between">
        <a href="teacher-add" class="btn btn-primary">Add data</a>
        <a href="teacher-deleted" class="btn btn-info">Show deleted data</a>
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

    <table class="table">
        <thead>
            <tr>
                <th>no.</th>
                <th>name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacherlist as $tl)
                <tr>
                    <td>{{ $loop->iteration }}</td>  
                    <td>{{ $tl->name }}</td> 
                    <td>
                        <a href="teacher/{{ $tl->id }}" class="btn btn-primary">Detail</a>
                        <a href="teacher-edit/{{$tl->id }}" class="btn btn-info">Edit</a>
                        <a href="teacher-delete/{{$tl->id }}" class="btn btn-warning">delete</a>
                    </td> 
                </tr>                
            @endforeach
        </tbody>
    </table>

    <div class="my-5">
        {{ $teacherlist->withQueryString()->links() }}
    </div>
 
@endsection