@extends('layout.mainlayout')

@section('content')

<h1>ini halaman student yang sudah di Delete</h1>

<div class="my-5">
    <a href="students" class="btn btn-primary">kembali</a>
</div>

<div class="mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>NIS</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>
                        <a href="/student/{{$item->id}}/restore">restore</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection