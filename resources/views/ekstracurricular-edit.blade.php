@extends('layout.mainlayout')

@section('content')

<div class="mt-5 col-8 m-auto">
<form action="/ekstra/{{ $ekskul->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{ $ekskul->name }}">
    </div>

    <div class="mb-3">
        <button class="btn btn-success" type="submit ">update</button>
    </div>

</form>

</div>

@endsection