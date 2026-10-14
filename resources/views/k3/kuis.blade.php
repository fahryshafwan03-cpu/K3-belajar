
@extends('k3.layout')

@section('title', 'Kuis K3')

@section('content')
    <div class="page-heading">
        <div>
            <div class="crumb">
                <a href="{{ route('k3.home') }}">Beranda</a> / Kuis
            </div>

            <h1>Kuis Pengetahuan K3</h1>

            <p>
                Jawab berdasarkan pemahamanmu. Setelah dikirim, kamu akan mendapat skor dan pembahasan setiap soal.
            </p>
        </div>

        <span class="pill">10 Pertanyaan · Pilihan Ganda</span>
    </div>

    <div class="notice">
        💡 Tips: baca semua pilihan dengan teliti. Pilih satu jawaban yang paling tepat untuk setiap soal.
    </div>

    <form method="POST" action="{{ route('k3.periksa') }}">
        @csrf

        @php
            $soal = [
                [
                    'q' => 'Apa tujuan utama penerapan K3 di tempat kerja?',
                    'ops' => [
                        'Meningkatkan risiko kerja',
                        'Mencegah kecelakaan dan penyakit akibat kerja',
                        'Mengurangi waktu istirahat',
                        'Menghilangkan semua prosedur'
                    ]
                ],
                [
                    'q' => 'Sebelum memakai APD, tindakan yang tepat adalah…',
                    'ops' => [
                        'Memakai APD apa saja yang tersedia',
                        'Meminjam APD yang rusak',
                        'Memeriksa kondisi dan kesesuaian APD',
                        'Melepas APD agar lebih leluasa'
                    ]
                ],
                [
                    'q' => 'Ketika alarm kebakaran berbunyi, pekerja sebaiknya…',
                    'ops' => [
                        'Bersembunyi di ruang tertutup',
                        'Mengambil barang pribadi terlebih dahulu',
                        'Menggunakan lift agar cepat',
                        'Mengikuti jalur evakuasi menuju titik kumpul'
                    ]
                ],
                [
                    'q' => 'Apa yang perlu dilakukan saat menemukan kabel listrik terkelupas?',
                    'ops' => [
                        'Melaporkan dan menghindari area berbahaya',
                        'Menyentuhnya untuk mengecek arus',
                        'Menutupnya dengan kertas',
                        'Membiarkannya sampai rusak total'
                    ]
                ],
                [
                    'q' => 'Manakah contoh penerapan ergonomi yang baik?',
                    'ops' => [
                        'Membungkuk terus-menerus',
                        'Mengatur posisi meja dan kursi agar nyaman',
                        'Mengangkat beban sambil memutar pinggang',
                        'Mengabaikan rasa nyeri saat bekerja'
                    ]
                ],
                [
                    'q' => 'Apa arti Rapi dalam budaya 5R?',
                    'ops' => [
                        'Menyimpan barang di mana saja',
                        'Membuang semua alat',
                        'Menempatkan barang pada tempat yang ditentukan',
                        'Membersihkan hanya saat ada inspeksi'
                    ]
                ],
                [
                    'q' => 'APAR boleh digunakan oleh siapa pun dalam kondisi apa pun.',
                    'ops' => [
                        'Benar',
                        'Salah'
                    ]
                ],
                [
                    'q' => 'Jalur evakuasi harus dijaga agar tidak terhalang barang.',
                    'ops' => [
                        'Benar',
                        'Salah'
                    ]
                ],
                [
                    'q' => 'Jika APD rusak, tindakan yang tepat adalah…',
                    'ops' => [
                        'Tetap memakainya',
                        'Memperbaikinya dengan cara apa pun',
                        'Menyembunyikannya',
                        'Menghentikan penggunaan dan melaporkan untuk diganti'
                    ]
                ],
                [
                    'q' => 'Mengapa area kerja perlu dijaga tetap bersih dan tertata?',
                    'ops' => [
                        'Agar bahaya lebih mudah terlihat dan risiko tersandung berkurang',
                        'Agar rambu keselamatan bisa dipindahkan',
                        'Supaya alat darurat disimpan jauh',
                        'Agar prosedur tidak diperlukan'
                    ]
                ],
            ]
        @endphp

        @foreach($soal as $i => $item)
            <section class="quiz-question">
                <div class="q-number">
                    Pertanyaan {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }} dari 10
                </div>

                <h3>{{ $item['q'] }}</h3>

                @foreach($item['ops'] as $j => $opsi)
                    <label class="option">
                        <input
                            type="radio"
                            name="jawaban[{{ $i }}]"
                            value="{{ $j }}"
                            required
                        >

                        <span>{{ chr(65 + $j) }}. {{ $opsi }}</span>
                    </label>
                @endforeach
            </section>
        @endforeach

        <button
            type="submit"
            class="btn btn-primary"
            style="width:100%;padding:15px"
        >
            Periksa Jawaban & Lihat Nilai →
        </button>
    </form>
@endsection
