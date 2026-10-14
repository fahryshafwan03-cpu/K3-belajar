
@extends('k3.layout')

@section('title', 'Materi K3')

@section('content')
    <div class="page-heading">
        <div>
            <div class="crumb">
                <a href="{{ route('k3.home') }}">Beranda</a> / Materi
            </div>

            <h1>Jelajahi Materi K3</h1>

            <p>
                Pelajari satu topik setiap kali. Pahami risikonya, lalu terapkan prinsip keselamatan dalam kegiatan sehari-hari.
            </p>
        </div>

        <span class="pill">{{ count($materi) }} Materi tersedia</span>
    </div>

    <div class="list-grid">
        @foreach($materi as $slug => $item)
            <a class="material-card" href="{{ route('k3.detail', $slug) }}">
                <img
                    class="card-photo"
                    style="height:180px"
                    loading="lazy"
                    src="https://images.unsplash.com/{{ $item['foto'] }}?auto=format&fit=crop&w=800&q=85"
                    alt="{{ $item['judul'] }}"
                >

                <div class="card-body">
                    <span class="pill">
                        {{ $item['kategori'] }}
                    </span>

                    <h3 style="font-size:15px">
                        {{ $item['judul'] }}
                    </h3>

                    <p>
                        {{ $item['ringkas'] }}
                    </p>

                    <div class="card-foot">
                        <span>◷ {{ $item['durasi'] }}</span>

                        <span class="round-arrow">→</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
