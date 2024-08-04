@extends('layout.mainlayout')

@section('content')

<h1>ini halaman student yang sudah di Delete</h1>

<div class="my-5">
    <a href="ekstracurricular" class="btn btn-primary">kembali</a>
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
           @foreach ($ekskul as $sk)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $sk->name }}</td>
                    <td>
                        <a href="/ekstra/{{$sk->id}}/restore">restore</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection