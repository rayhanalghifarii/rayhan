@extends('layout')

@section('content')
    <h2 class="my-4">Tambah Data Kebakaran</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kebakaran.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Lokasi:</label>
            <input type="text" name="lokasi" class="form-control">
        </div>
        <div class="form-group">
            <label>Penyebab:</label>
            <input type="text" name="penyebab" class="form-control">
        </div>
        <div class="form-group">
            <label>Tanggal:</label>
            <input type="date" name="tanggal" class="form-control">
        </div>
        <div class="form-group">
            <label>Kerugian:</label>
            <input type="number" name="kerugian" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection
