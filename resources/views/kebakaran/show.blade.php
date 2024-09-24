@extends('layout')

@section('content')
    <h2 class="my-4">Detail Kebakaran</h2>

    <div class="card">
        <div class="card-header">
            <h3>Lokasi: {{ $kebakaran->lokasi }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Penyebab: </strong>{{ $kebakaran->penyebab }}</p>
            <p><strong>Tanggal: </strong>{{ $kebakaran->tanggal }}</p>
            <p><strong>Kerugian: </strong>Rp {{ number_format($kebakaran->kerugian, 0, ',', '.') }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('kebakaran.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('kebakaran.edit', $kebakaran->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('kebakaran.destroy', $kebakaran->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
@endsection
