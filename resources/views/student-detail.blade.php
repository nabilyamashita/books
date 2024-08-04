@extends('layout.mainlayout')

@section('content')

<h2>Anda sedang melihat halaman detail dari siswa yang bernama {{ $student->name }}</h2>  

<div class="my-5 d-flex justify-content-center">
   @if ($student->image != '')
        <img src="{{ asset('storage/photo/'.$student->image) }}" alt="" width="200px" style="border: 2px solid #000; padding: 10px; border-radius: 10%;">
     @else 
     <img src="{{ asset('img/default.jpg') }}" alt="" width="200px" style="border: 2px solid #000; padding: 10px; border-radius: 10%;">  
   @endif
</div>

<div class="mt-5 mb-5">
    <table class="table table-bordered">
    <tr>
        <th>NIS</th>
        <TH>Gender</TH>
        <th>Class</th>
        <th>Teacher</th>
    </tr>
    <tr>
        <td>{{ $student->nis }}</td>
        <td>
            @if ($student->gender == 'p')
                Perempuan
                @else
                    Laki-laki
            @endif
        </td>
       <td>{{ $student->class->name }}</td>
       <td>{{ $student->class->teacher->name }}</td>
    </tr>
</table>
</div>

<div>
    <h3>Ekstracurriculars</h3>
    @foreach ($student->_ekstracurriculars as $item)
        <li>{{ $item->name }}</li>
    @endforeach
</div>


<style>
    th {
        width: 25%;
    }
</style>

@endsection