@extends('layout')

@section('content')
    <h2 class="my-4">Edit Data Kebakaran</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kebakaran.update', $kebakaran->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Lokasi:</label>
            <input type="text" name="lokasi" value="{{ $kebakaran->lokasi }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Penyebab:</label>
            <input type="text" name="penyebab" value="{{ $kebakaran->penyebab }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Tanggal:</label>
            <input type="date" name="tanggal" value="{{ $kebakaran->tanggal }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Kerugian:</label>
            <input type="number" name="kerugian" value="{{ $kebakaran->kerugian }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
