@extends('layout.mainlayout')

@section('content')

<div class="mt-5">
    <h2>yakin ingin menghapus data : {{ $teacher->name }}</h2>

    <form style="display: inline-block" action="/teacher-destroy/{{ $teacher->id }}" method="post" >
        @csrf
        @method('delete') 
         <button type="submit" class="btn btn-danger">Delete</button>
    </form> 
   
    <a href="/teacher" class="btn btn-primary">Cancel</a>
</div>

@endsection