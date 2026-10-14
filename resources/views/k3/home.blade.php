
@extends('k3.layout')

@section('title', 'Beranda')

@section('content')
    <section class="hero fade-in">
        <div class="hero-content">
            <span class="eyebrow">✦ SELAMAT DATANG DI WEBSITE K3</span>

            <h1>
                Keselamatan Kerja
                <br>
                Dimulai dari Kita.
            </h1>

            <p>
                Pelajari dasar keselamatan dan kesehatan kerja melalui materi ringkas, visual yang menarik, serta kuis interaktif. Bangun kebiasaan aman, mulai dari hal sederhana.
            </p>

            <a class="btn btn-primary" href="{{ route('k3.materi') }}">
                Mulai Belajar <span>→</span>
            </a>
        </div>
    </section>

    <div class="layout">
        <div class="maincol">
            <section class="features fade-in">
                <div class="feature">
                    <div class="feature-icon">▤</div>
                    <h3>Materi Terstruktur</h3>
                    <p>Belajar K3 dari dasar sampai kebiasaan kerja aman.</p>
                </div>

                <div class="feature">
                    <div class="feature-icon">☑</div>
                    <h3>Kuis Interaktif</h3>
                    <p>Uji pemahaman melalui soal dan hasil otomatis.</p>
                </div>

                <div class="feature">
                    <div class="feature-icon">◉</div>
                    <h3>Evaluasi Diri</h3>
                    <p>Lihat nilai dan pembahasan jawabanmu.</p>
                </div>

                <div class="feature">
                    <div class="feature-icon">✚</div>
                    <h3>Budaya Aman</h3>
                    <p>Biasakan mengenali bahaya sebelum bertindak.</p>
                </div>
            </section>

            <section class="panel fade-in">
                <div class="section-head">
                    <div>
                        <h2 class="section-title">Materi Pilihan</h2>
                        <p class="section-sub">
                            Mulai dari topik penting untuk keselamatan kerja.
                        </p>
                    </div>

                    <a class="text-link" href="{{ route('k3.materi') }}">
                        Lihat semua →
                    </a>
                </div>

                <div class="cards">
                    @foreach(array_slice($materi, 0, 4, true) as $slug => $item)
                        <a class="material-card" href="{{ route('k3.detail', $slug) }}">
                            <img
                                class="card-photo"
                                loading="lazy"
                                src="https://images.unsplash.com/{{ $item['foto'] }}?auto=format&fit=crop&w=650&q=80"
                                alt="Ilustrasi {{ $item['judul'] }}"
                            >

                            <div class="card-body">
                                <span class="pill">
                                    {{ $item['kategori'] }}
                                </span>

                                <h3>{{ $item['judul'] }}</h3>

                                <p>{{ $item['ringkas'] }}</p>

                                <div class="card-foot">
                                    <span>◷ {{ $item['durasi'] }}</span>
                                    <span class="round-arrow">→</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>

            <section class="panel">
                <div class="section-head">
                    <div>
                        <h2 class="section-title">
                            Siap Menguji Pemahaman?
                        </h2>

                        <p class="section-sub">
                            Kerjakan 10 soal seputar prinsip dasar K3.
                        </p>
                    </div>
                </div>

                <a class="btn btn-primary" href="{{ route('k3.kuis') }}">
                    Mulai Kuis Sekarang →
                </a>
            </section>
        </div>

        <aside class="sidebar">
            <section class="panel">
                <div class="progress-head">
                    <span>▥ &nbsp;Progress Belajar</span>

                    <a class="text-link" href="{{ route('k3.riwayat') }}">
                        Detail
                    </a>
                </div>

                @php
                    $selesai = session('materi_selesai_k3', []);
                    $persen = (int) round(count($selesai) / count($materi) * 100);
                @endphp

                <div class="progress-row">
                    <div class="progress-ring" style="--progress:{{ $persen }}">
                        <span>{{ $persen }}%</span>
                    </div>

                    <div>
                        <strong>Materi Selesai</strong>
                        <small>
                            {{ count($selesai) }} dari {{ count($materi) }} materi
                        </small>
                    </div>
                </div>

                <div class="bar">
                    <span style="width:{{ $persen }}%"></span>
                </div>

                <div class="mini-label">▣ &nbsp;Kuis Terakhir</div>

                @if(count($riwayat))
                    <div class="quiz-mini">
                        <div class="mini-icon">▤</div>

                        <div>
                            <strong>Dasar K3</strong>
                            <small>
                                Nilai terakhir: {{ $riwayat[0]['skor'] }} ·
                                {{ $riwayat[0]['tanggal'] }}
                            </small>
                        </div>

                        <span class="score-tag">
                            {{ $riwayat[0]['skor'] >= 70 ? 'Baik' : 'Latihan' }}
                        </span>
                    </div>
                @else
                    <div class="quiz-mini">
                        <div class="mini-icon">▤</div>

                        <div>
                            <strong>Belum ada hasil kuis</strong>
                            <small>Yuk coba kuis pertamamu.</small>
                        </div>

                        <a class="text-link" href="{{ route('k3.kuis') }}">
                            →
                        </a>
                    </div>
                @endif
            </section>

            <div class="quote">
                ✦ &nbsp;“Keselamatan bukan hanya aturan, tetapi kebiasaan yang kita bangun setiap hari.”
            </div>

            <section class="panel">
                <div class="section-head">
                    <h2 class="section-title" style="font-size:16px">
                        Akses Cepat
                    </h2>
                </div>

                <div class="quick-links">
                    <a href="{{ route('k3.materi') }}">
                        <span>▤ &nbsp;Semua Materi</span>
                        <span>→</span>
                    </a>

                    <a href="{{ route('k3.kuis') }}">
                        <span>☑ &nbsp;Semua Kuis</span>
                        <span>→</span>
                    </a>

                    <a href="{{ route('k3.riwayat') }}">
                        <span>◷ &nbsp;Riwayat Belajar</span>
                        <span>→</span>
                    </a>
                </div>
            </section>
        </aside>
    </div>
@endsection
