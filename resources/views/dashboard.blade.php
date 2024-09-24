@extends('layout')

@section('content')
    <h2 class="my-4">Dashboard Pencatatan Kebakaran</h2>

    @if($kebakaran->isEmpty())
        <div class="alert alert-info">
            Belum ada data kebakaran yang tercatat.
        </div>
    @else
        <div class="row">
            @foreach ($kebakaran as $item)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">Lokasi: {{ $item->lokasi }}</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>Penyebab:</strong> {{ $item->penyebab }}</p>
                            <p><strong>Tanggal:</strong> {{ $item->tanggal }}</p>
                            <p><strong>Kerugian:</strong> Rp {{ number_format($item->kerugian, 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $kebakaran->links() }}
                    </div>

                </div>
            @endforeach
        </div>
    @endif
@endsection
