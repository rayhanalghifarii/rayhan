@extends('layout')

@section('content')
    <h2 class="my-4">Daftar Kebakaran</h2>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <a href="{{ route('kebakaran.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Lokasi</th>
                <th>Penyebab</th>
                <th>Tanggal</th>
                <th>Kerugian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kebakaran as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->lokasi }}</td>
                    <td>{{ $item->penyebab }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->kerugian }}</td>
                    <td>
                        <a href="{{ route('kebakaran.show', $item->id) }}" class="btn btn-info btn-sm">Lihat Detail</a>
                        <a href="{{ route('kebakaran.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('kebakaran.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
