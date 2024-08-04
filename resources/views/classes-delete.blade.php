@extends('layout.mainlayout')

@section('content')

<div class="mt-5">
    <h2>yakin ingin menghapus data : {{ $class->name }} ({{ $class->teacher_id }})</h2>

    <form style="display: inline-block" action="/classes-destroy/{{ $class->id }}" method="post" >
        @csrf
        @method('delete') 
         <button type="submit" class="btn btn-danger">Delete</button>
    </form> 
   
    <a href="/classes" class="btn btn-primary">Cancel</a>
</div>

@endsection