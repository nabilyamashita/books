@extends('layout.mainlayout')

@section('content')

<div class="mt-5 col-8 m-auto">
<form action="/teachers/{{ $teacher->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{ $teacher->name }}" required>
    </div>

    <div class="mb-3">
        <label for="nis">Image</label>
        <div class="input-group">
            <input type="file" class="form-control" id="photo" name="photo"> 
        </div>
    </div>

    <div class="mb-3">
        <button class="btn btn-success" type="submit ">update</button>
    </div>

</form>

</div>

@endsection