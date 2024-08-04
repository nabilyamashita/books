@extends('layout.mainlayout')

@section('content')

<div class="mt-5">
    <h2>yakin ingin menghapus data : {{ $ekskul->name }} </h2>

    <form style="display: inline-block" action="/ekstracurricular-destroy/{{ $ekskul->id }}" method="post" >
        @csrf
        @method('delete') 
         <button type="submit" class="btn btn-danger">Delete</button>
    </form> 
   
    <a href="/ekstracurricular" class="btn btn-primary">Cancel</a>
</div>

@endsection