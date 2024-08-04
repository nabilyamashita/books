@extends('layout/mainlayout')

@section('content')


    <h1>Ini Halaman Exstracurricular</h1>

    <div class="my-5 d-flex justify-content-between">
        <a href="ekstracurricular-add" class="btn btn-primary">Add data</a>
        <a href="ekstracurricular-deleted" class="btn btn-info">Show deleted data</a>
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
                {{-- <th>anggota</th> --}}
            </tr>
        </thead>
        <tbody>
           @foreach ($ekskullist as $sk)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $sk->name }}</td>
                <td>
                    <a href="ekstracurricular/{{$sk->id}}">Detail</a>
                    <a href="ekstracurricular-edit/{{$sk->id }}">Edit</a>
                    <a href="ekstracurricular-delete/{{$sk->id }}">Delete</a>
                </td>
              </tr>
           @endforeach
        </tbody>
    </table>

    <div class="my-5">
        {{ $ekskullist->withQueryString()->links() }}
    </div>
 
 @endsection