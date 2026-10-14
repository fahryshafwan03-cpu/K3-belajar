
@extends('k3.layout')

@section('title', $item['judul'])

@section('content')
    <div class="article">
        <div class="page-heading">
            <div>
                <div class="crumb">
                    <a href="{{ route('k3.home') }}">Beranda</a> /
                    <a href="{{ route('k3.materi') }}">Materi</a> /
                    {{ $item['kategori'] }}
                </div>

                <h1>{{ $item['judul'] }}</h1>
                <p>{{ $item['ringkas'] }}</p>
            </div>

            <span class="pill">◷ {{ $item['durasi'] }}</span>
        </div>

        <img
            class="detail-hero"
            src="https://images.unsplash.com/{{ $item['foto'] }}?auto=format&fit=crop&w=1400&q=90"
            alt="Foto {{ $item['judul'] }}"
        >

        <article class="article-body">
            @if(session('pesan'))
                <div class="notice">
                    ✓ {{ session('pesan') }}
                </div>
            @endif

            <h2>Tujuan Pembelajaran</h2>

            <p>
                Setelah mempelajari topik ini, kamu diharapkan mampu mengenali prinsip dasar keselamatan, memahami tindakan pencegahan, dan mengetahui kapan harus meminta bantuan petugas yang berwenang.
            </p>

            @foreach($item['isi'] as $index => $paragraf)
                @if($index % 2 === 0)
                    <h2>{{ $paragraf }}</h2>
                @else
                    <p>{{ $paragraf }}</p>
                @endif
            @endforeach

            <div class="notice">
                Ingat: materi ini untuk pembelajaran umum. Selalu ikuti SOP, rambu, pelatihan, dan arahan petugas K3 di tempat kerja masing-masing.
            </div>

            <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:23px">
                <form method="POST" action="{{ route('k3.selesai', $item['slug']) }}">
                    @csrf

                    <button class="btn btn-primary" type="submit">
                        {{ $sudahDibaca ? '✓ Materi Sudah Selesai' : 'Tandai Materi Selesai ✓' }}
                    </button>
                </form>

                <a class="btn btn-light" href="{{ route('k3.materi') }}">
                    ← Kembali ke Materi
                </a>

                <a class="btn btn-outline" href="{{ route('k3.kuis') }}">
                    Coba Kuis →
                </a>
            </div>
        </article>
    </div>
@endsection
