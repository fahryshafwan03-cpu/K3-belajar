
@extends('k3.layout')

@section('title', 'Riwayat Belajar')

@section('content')
    <div class="page-heading">
        <div>
            <div class="crumb">
                <a href="{{ route('k3.home') }}">Beranda</a> / Riwayat
            </div>

            <h1>Riwayat Belajar</h1>

            <p>
                Pantau materi yang sudah kamu selesaikan dan perkembangan nilai kuis.
            </p>
        </div>
    </div>

    <div class="layout" style="grid-template-columns:repeat(2,minmax(0,1fr));align-items:start">
        <section class="panel" style="margin:0">
            <div class="section-head">
                <h2 class="section-title" style="font-size:17px">Materi Selesai</h2>

                <span class="pill">{{ count($selesai) }} topik</span>
            </div>

            @if(count($selesai))
                @foreach($selesai as $slug)
                    <div class="history-row">
                        <span>✓ &nbsp;{{ str_replace('-', ' ', ucfirst($slug)) }}</span>

                        <span class="pill">Selesai</span>
                    </div>
                @endforeach
            @else
                <div class="empty">
                    <div>▤</div>

                    <b>Belum ada materi selesai</b>

                    <p style="font-size:12px">
                        Buka materi dan tandai selesai setelah dipelajari.
                    </p>

                    <a class="btn btn-light" href="{{ route('k3.materi') }}">
                        Jelajahi Materi
                    </a>
                </div>
            @endif
        </section>

        <section class="panel" style="margin:0">
            <div class="section-head">
                <h2 class="section-title" style="font-size:17px">Riwayat Kuis</h2>

                <span class="pill">{{ count($riwayat) }} percobaan</span>
            </div>

            @if(count($riwayat))
                @foreach($riwayat as $hasil)
                    <div class="history-row">
                        <div>
                            <strong style="display:block">Kuis Dasar K3</strong>

                            <span style="font-size:11px;color:var(--muted)">
                                {{ $hasil['tanggal'] }} · {{ $hasil['benar'] }}/{{ $hasil['total'] }} benar
                            </span>
                        </div>

                        <span class="history-score">{{ $hasil['skor'] }}</span>
                    </div>
                @endforeach
            @else
                <div class="empty">
                    <div>☑</div>

                    <b>Belum ada hasil kuis</b>

                    <p style="font-size:12px">
                        Kerjakan kuis pertama untuk melihat nilai di sini.
                    </p>

                    <a class="btn btn-primary" href="{{ route('k3.kuis') }}">
                        Mulai Kuis
                    </a>
                </div>
            @endif
        </section>
    </div>

    <div class="notice" style="margin-top:18px">
        Catatan: versi awal ini menyimpan progres dan riwayat di session browser. Data tidak ditujukan sebagai catatan resmi pelatihan atau sertifikasi K3.
    </div>
@endsection
