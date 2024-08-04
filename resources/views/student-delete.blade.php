@extends('layout.mainlayout')

@section('content')

<div class="mt-5">
    <h2>yakin ingin menghapus data : {{ $student->name }} ({{ $student->nis }})</h2>

    <form style="display: inline-block" action="/students-destroy/{{ $student->id }}" method="post" >
        @csrf
        @method('delete') 
         <button type="submit" class="btn btn-danger">Delete</button>
    </form> 
   
    <a href="/student" class="btn btn-primary">Cancel</a>
</div>

@endsection