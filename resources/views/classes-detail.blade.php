@extends('layout.mainlayout')

@section('content')

<h2>Anda sedang melihat halaman detail dari kelas {{ $class->name }}</h2>  

<div class="mt-5">
    @if ($class->teacher)
        <h4><strong>Teacher:</strong> {{ $class->teacher->name }} </h4>
    @else
        <h4><strong>Teacher:</strong> Data teacher tidak tersedia.</h4>
    @endif
</div>

<div class="mt-5">
    <h4>List Students</h4>
    @if ($class->student->isEmpty())
        <p>Tidak ada siswa dalam kelas ini.</p>
    @else
        <ol>
            @foreach ($class->student as $stu)
                <li>{{ $stu ->name }}</li>   
            @endforeach
        </ol>
    @endif
</div>

@endsection
