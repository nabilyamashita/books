@extends('layout.mainlayout')

@section('content')

<h2>
    Anda sedang melihat halaman detail ekstracurriculars {{ $ekskul->name }}
</h2>

<div class="mt-5">
    <h3>List Peserta</h3>
    <ol>
        @foreach ($ekskul->student as $item)
            <li>{{ $item->name }}</li>
        @endforeach
    </ol>
</div>

@endsection