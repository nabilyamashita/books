@extends('layout.mainlayout')

@section('content')

    <h1>Ini Halaman Class</h1>

    <div class="my-5 d-flex justify-content-between">
        <a href="classes-add" class="btn btn-primary">Add data</a>
        <a href="classes-deleted" class="btn btn-info">Show deleted data</a>
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
                <th>teacher</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classeslist as $cs)
                <tr>
                    <td>{{ $loop->iteration }}</td>  
                    <td>{{ $cs->name }}</td> 
                    <td>{{ $cs->teacher->name }}</td>
                    <td>
                        <a href="classes/{{$cs->id}}">Detail</a>
                        <a href="classes-edit/{{$cs->id }}">Edit</a>
                        <a href="classes-delete/{{$cs->id }}">delete</a>
                    </td>
                    {{-- <td>
                        @foreach ($cs->student as $st)
                             {{ $st['name']}} <br> 
                        @endforeach
                    </td>
                    <td>
                      {{ $cs->teachers->name }}
                    </td> --}}
                </tr>                
            @endforeach
        </tbody>
    </table>

    <div class="my-5">
        {{ $classeslist->withQueryString()->links() }}
    </div>
 
    @endsection