@extends('layout.mainlayout')

@section('content')

<h1>ini halaman teacher yang sudah di Delete</h1>

<div class="my-5">
    <a href="teacher" class="btn btn-primary">kembali</a>
</div>

<div class="mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>no.</th>
                <th>name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacher as $tl)
                <tr>
                    <td>{{ $loop->iteration }}</td>  
                    <td>{{ $tl->name }}</td> 
                    <td>
                        <a href="/teachers/{{$tl->id}}/restore">restore</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection