@extends('layout.mainlayout')

@section('content')

<div class="mt-5 col-8 m-auto">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="student" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name">
    </div>

    <div class="mb-3">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" class="form-control">
            <option value="">Select One</option>
            <option value="L">L</option>
            <option value="P">P</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="nis">NIS</label>
        <input type="text" name="nis" class="form-control" id="nis">
    </div>

    <div class="mb-3">
        <label for="class_id">Class</label>
        <select name="class_id" id="class" class="form-control">
            <option value="">Select One</option>
            @foreach ($class as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="nis">Image</label>
        <div class="input-group">
            <input type="file" class="form-control" id="photo" name="photo"> 
        </div>
    </div>

    <div class="mb-3">
        <button class="btn btn-success" type="submit ">save</button>
    </div>

</form>

</div>

@endsection