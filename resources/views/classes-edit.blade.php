@extends('layout.mainlayout')

@section('content')

<div class="mt-5 col-8 m-auto">
<form action="/class/{{ $class->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{ $class->name }}" required>
    </div>

    <div class="mb-3">
        <label for="teacher_id">Teacher</label>
        <select name="teacher_id" id="teacher" class="form-control" required>
            @if($class->teacher)
                <option value="{{ $class->teacher->id }}" selected>{{ $class->teacher->name }}</option>
            @else
                <option value="" selected>Select a teacher</option>
            @endif
            @foreach ($teachers as $teacher)
                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <button class="btn btn-success" type="submit">Update</button>
    </div>
</form>
</div>

@endsection
