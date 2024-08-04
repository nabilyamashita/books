@extends('layout.mainlayout')

@section('content')

<h2>Anda sedang melihat halaman detail teacher {{ $teacher->name }}</h2>  

<div class="my-5 d-flex justify-content-center">
    @if ($teacher->image != '')
         <img src="{{ asset('storage/photo/'.$teacher->image) }}" alt="" width="200px" style="border: 2px solid #000; padding: 10px; border-radius: 10%;">
      @else 
      <img src="{{ asset('img/default.jpg') }}" alt="" width="200px" style="border: 2px solid #000; padding: 10px; border-radius: 10%;">  
    @endif
 </div>

<div class="mt-5">
    <h3>Class: 
       @if ($teacher->class)
            {{ $teacher->class->name }}           
       @else
           -
       @endif
    </h3>
</div>

<div class="mt-5">
    <h4>List Student</h4>
    <ol>
        @if ($teacher->class && $teacher->class->student->isNotEmpty())
            @foreach ($teacher->class->student as $item)
                <li>{{ $item->name }}</li>
            @endforeach
        @else
            <p>Tidak ada siswa yang terdaftar.</p>
        @endif
    </ol>
</div>

@endsection
