
@extends('k3.layout')

@section('title', 'Hasil Kuis')

@section('content')
    <div class="page-heading">
        <div>
            <div class="crumb">
                <a href="{{ route('k3.home') }}">Beranda</a> /
                <a href="{{ route('k3.kuis') }}">Kuis</a> /
                Hasil
            </div>

            <h1>Hasil Kuis Kamu</h1>

            <p>
                Evaluasi jawabanmu dan pahami pembahasan di bawah untuk belajar lebih baik.
            </p>
        </div>
    </div>

    <section class="result-score">
        <span class="pill" style="margin:0 auto 12px">
            HASIL EVALUASI
        </span>

        <strong>{{ $hasil['skor'] }}</strong>

        <span style="font-size:13px;color:var(--muted)">
            dari 100 poin
        </span>

        <p style="font-size:14px;line-height:1.7">
            Kamu menjawab
            <b>{{ $hasil['benar'] }} dari {{ $hasil['total'] }}</b>
            pertanyaan dengan benar.
            <br>
            {{ $hasil['skor'] >= 80
                ? 'Hebat! Pemahamanmu sudah baik. Terus pertahankan kebiasaan kerja aman.'
                : ($hasil['skor'] >= 60
                    ? 'Cukup baik! Pelajari lagi bagian yang belum tepat agar makin siap.'
                    : 'Tidak apa-apa, ini kesempatan belajar. Baca kembali materi dan coba lagi.')
            }}
        </p>

        <div style="display:flex;gap:10px;justify-content:center;flex-wrap:wrap;margin-top:18px">
            <a class="btn btn-primary" href="{{ route('k3.kuis') }}">
                Ulangi Kuis ↻
            </a>

            <a class="btn btn-outline" href="{{ route('k3.materi') }}">
                Pelajari Materi
            </a>
        </div>
    </section>

    <div class="section-head" style="margin-top:25px">
        <h2 class="section-title">Pembahasan Jawaban</h2>

        <span class="pill">
            {{ $hasil['total'] }} Soal
        </span>
    </div>

    @foreach($hasil['detail'] as $i => $item)
        <section class="review-item">
            <div class="q-number">
                SOAL {{ $i + 1 }} ·
                <span class="{{ $item['benar'] ? 'good' : 'bad' }}">
                    {{ $item['benar'] ? '✓ Benar' : '✕ Perlu dipelajari' }}
                </span>
            </div>

            <strong style="font-size:14px;line-height:1.6">
                {{ $item['soal'] }}
            </strong>

            <p style="margin:9px 0">
                Jawabanmu: <b>{{ $item['pilihan'] }}</b>
                <br>
                Jawaban tepat: <b class="good">{{ $item['kunci'] }}</b>
            </p>

            <p style="color:var(--muted);margin-bottom:0">
                {{ $item['bahas'] }}
            </p>
        </section>
    @endforeach
@endsection
