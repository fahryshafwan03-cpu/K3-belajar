<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| DATA MATERI K3
|--------------------------------------------------------------------------
*/

$materiK3 = [
    'dasar-k3' => [
        'judul' => 'Pengertian dan Tujuan K3',
        'kategori' => 'Dasar K3',
        'durasi' => '10 menit',
        'foto' => 'photo-1504307651254-35680f356dfd',
        'ringkas' => 'Memahami pengertian, tujuan, dan manfaat K3 di lingkungan kerja.',
        'isi' => [
            'Apa itu K3?',
            'Keselamatan dan Kesehatan Kerja (K3) adalah upaya untuk melindungi pekerja agar tetap selamat, sehat, dan mampu bekerja dengan baik. K3 juga membantu mencegah kecelakaan, penyakit akibat kerja, dan kerusakan lingkungan kerja.',
            'Tujuan K3',
            'Mencegah kecelakaan dan penyakit akibat kerja, menciptakan tempat kerja yang aman dan sehat, menjaga peralatan serta lingkungan kerja, dan meningkatkan produktivitas.',
            'Prinsip penting',
            'Kenali bahaya sebelum bekerja, patuhi prosedur, gunakan alat sesuai fungsinya, laporkan kondisi tidak aman, dan jangan mengabaikan rambu keselamatan.',
        ],
    ],
    'apd' => [
        'judul' => 'Alat Pelindung Diri (APD)',
        'kategori' => 'Perlengkapan',
        'durasi' => '12 menit',
        'foto' => 'photo-1581092160562-40aa08e78837',
        'ringkas' => 'Mengenal fungsi APD dan cara menggunakannya dengan benar.',
        'isi' => [
            'Apa itu APD?',
            'Alat Pelindung Diri adalah perlengkapan yang digunakan untuk membantu melindungi pekerja dari bahaya di tempat kerja. APD harus sesuai dengan risiko pekerjaan dan tidak menggantikan pengendalian bahaya di sumbernya.',
            'Contoh APD',
            'Helm keselamatan melindungi kepala dari benturan tertentu, kacamata melindungi mata, sarung tangan melindungi tangan sesuai jenis bahaya, sepatu keselamatan membantu melindungi kaki, dan pelindung pendengaran mengurangi paparan bising.',
            'Sebelum digunakan',
            'Periksa kondisi APD, pastikan ukuran sesuai, gunakan sesuai petunjuk, dan ganti jika rusak. Ikuti prosedur serta arahan petugas K3 di tempat kerja.',
        ],
    ],
    'kebakaran' => [
        'judul' => 'Pencegahan dan Tanggap Darurat Kebakaran',
        'kategori' => 'Tanggap Darurat',
        'durasi' => '15 menit',
        'foto' => 'photo-1518709268805-4e9042af9f23',
        'ringkas' => 'Memahami pencegahan kebakaran, alarm, dan jalur evakuasi.',
        'isi' => [
            'Pencegahan kebakaran',
            'Jaga area kerja tetap rapi, jangan menumpuk bahan mudah terbakar dekat sumber panas, gunakan instalasi listrik sesuai standar, dan laporkan kabel atau peralatan yang rusak.',
            'Saat alarm berbunyi',
            'Hentikan pekerjaan jika aman dilakukan, ikuti jalur evakuasi, jangan menggunakan lift saat kebakaran, bantu orang yang membutuhkan tanpa membahayakan diri, lalu menuju titik kumpul.',
            'Penggunaan APAR',
            'Alat Pemadam Api Ringan hanya digunakan jika kebakaran masih pada tahap awal, jenis APAR sesuai, jalur keluar tetap aman, dan pengguna sudah terlatih. Jika situasi tidak aman, segera evakuasi dan hubungi petugas darurat.',
        ],
    ],
    'kesehatan-kerja' => [
        'judul' => 'Kesehatan Kerja dan Ergonomi',
        'kategori' => 'Kesehatan Kerja',
        'durasi' => '12 menit',
        'foto' => 'photo-1559757175-0eb30cd8c063',
        'ringkas' => 'Menjaga kebugaran, postur kerja, dan lingkungan kerja yang sehat.',
        'isi' => [
            'Kesehatan kerja',
            'Kesehatan kerja mencakup upaya menjaga kondisi fisik dan mental pekerja serta mencegah gangguan kesehatan akibat pekerjaan.',
            'Ergonomi',
            'Atur meja dan kursi agar nyaman, jaga posisi tubuh netral, letakkan benda yang sering dipakai dalam jangkauan, dan lakukan jeda gerak sesuai kebutuhan.',
            'Kebiasaan sehat',
            'Ikuti prosedur kebersihan, minum air yang cukup, istirahat sesuai aturan, gunakan teknik angkat yang aman, dan laporkan gejala atau kondisi kerja yang berpotensi membahayakan.',
        ],
    ],
    '5r' => [
        'judul' => '5R dan Budaya Kerja Aman',
        'kategori' => 'Budaya K3',
        'durasi' => '8 menit',
        'foto' => 'photo-1581091226825-a6a2a5aee158',
        'ringkas' => 'Membangun tempat kerja rapi, teratur, bersih, dan disiplin.',
        'isi' => [
            'Apa itu 5R?',
            '5R merupakan budaya kerja yang dikenal sebagai Ringkas, Rapi, Resik, Rawat, dan Rajin.',
            'Penerapan 5R',
            'Pisahkan barang yang diperlukan, simpan alat pada tempatnya, bersihkan area kerja, pertahankan standar yang disepakati, dan lakukan secara disiplin.',
            'Hubungannya dengan K3',
            'Area yang tertata dapat membantu mengurangi risiko tersandung, salah mengambil alat, tumpahan, dan hambatan jalur evakuasi.',
        ],
    ],
];

/*
|--------------------------------------------------------------------------
| DATA SOAL KUIS K3
|--------------------------------------------------------------------------
*/

$soalK3 = [
    ['q' => 'Apa tujuan utama penerapan K3 di tempat kerja?', 'ops' => ['Meningkatkan risiko kerja', 'Mencegah kecelakaan dan penyakit akibat kerja', 'Mengurangi waktu istirahat', 'Menghilangkan semua prosedur'], 'benar' => 1, 'bahas' => 'K3 bertujuan melindungi keselamatan dan kesehatan pekerja serta mencegah kecelakaan dan penyakit akibat kerja.'],
    ['q' => 'Sebelum memakai APD, tindakan yang tepat adalah…', 'ops' => ['Memakai APD apa saja yang tersedia', 'Meminjam APD yang rusak', 'Memeriksa kondisi dan kesesuaian APD', 'Melepas APD agar lebih leluasa'], 'benar' => 2, 'bahas' => 'APD harus sesuai dengan bahaya pekerjaan dan diperiksa agar tidak rusak sebelum digunakan.'],
    ['q' => 'Ketika alarm kebakaran berbunyi, pekerja sebaiknya…', 'ops' => ['Bersembunyi di ruang tertutup', 'Mengambil barang pribadi terlebih dahulu', 'Menggunakan lift agar cepat', 'Mengikuti jalur evakuasi menuju titik kumpul'], 'benar' => 3, 'bahas' => 'Ikuti jalur evakuasi yang ditetapkan, hindari lift, dan menuju titik kumpul.'],
    ['q' => 'Apa yang perlu dilakukan saat menemukan kabel listrik terkelupas?', 'ops' => ['Melaporkan dan menghindari area berbahaya', 'Menyentuhnya untuk mengecek arus', 'Menutupnya dengan kertas', 'Membiarkannya sampai rusak total'], 'benar' => 0, 'bahas' => 'Kondisi tidak aman harus dilaporkan. Jangan menyentuh kabel yang rusak; amankan area sesuai prosedur.'],
    ['q' => 'Manakah contoh penerapan ergonomi yang baik?', 'ops' => ['Membungkuk terus-menerus', 'Mengatur posisi meja dan kursi agar nyaman', 'Mengangkat beban sambil memutar pinggang', 'Mengabaikan rasa nyeri saat bekerja'], 'benar' => 1, 'bahas' => 'Pengaturan posisi kerja yang sesuai membantu mengurangi ketegangan dan risiko gangguan muskuloskeletal.'],
    ['q' => 'Apa arti Rapi dalam budaya 5R?', 'ops' => ['Menyimpan barang di mana saja', 'Membuang semua alat', 'Menempatkan barang pada tempat yang ditentukan', 'Membersihkan hanya saat ada inspeksi'], 'benar' => 2, 'bahas' => 'Rapi berarti menempatkan barang secara teratur di lokasi yang ditentukan agar mudah ditemukan dan aman.'],
    ['q' => 'APAR boleh digunakan oleh siapa pun dalam kondisi apa pun.', 'ops' => ['Benar', 'Salah'], 'benar' => 1, 'bahas' => 'APAR digunakan hanya bila situasi masih aman, jenis alat sesuai, dan pengguna memahami prosedurnya. Jika tidak aman, segera evakuasi.'],
    ['q' => 'Jalur evakuasi harus dijaga agar tidak terhalang barang.', 'ops' => ['Benar', 'Salah'], 'benar' => 0, 'bahas' => 'Jalur evakuasi harus selalu mudah diakses agar penghuni dapat keluar dengan cepat saat darurat.'],
    ['q' => 'Jika APD rusak, tindakan yang tepat adalah…', 'ops' => ['Tetap memakainya', 'Memperbaikinya dengan cara apa pun', 'Menyembunyikannya', 'Menghentikan penggunaan dan melaporkan untuk diganti'], 'benar' => 3, 'bahas' => 'APD rusak tidak boleh diandalkan. Hentikan pemakaian dan ikuti prosedur penggantian.'],
    ['q' => 'Mengapa area kerja perlu dijaga tetap bersih dan tertata?', 'ops' => ['Agar bahaya lebih mudah terlihat dan risiko tersandung berkurang', 'Agar rambu keselamatan bisa dipindahkan', 'Supaya alat darurat disimpan jauh', 'Agar prosedur tidak diperlukan'], 'benar' => 0, 'bahas' => 'Area yang bersih dan tertata membantu mengenali bahaya, menjaga akses, dan mengurangi risiko tersandung.'],
];

/*
|--------------------------------------------------------------------------
| BERANDA DAN MATERI
|--------------------------------------------------------------------------
*/

Route::get('/', function () use ($materiK3) {
    return view('k3.home', [
        'materi' => $materiK3,
        'riwayat' => session('riwayat_k3', []),
    ]);
})->name('k3.home');

Route::get('/materi', function () use ($materiK3) {
    return view('k3.materi', ['materi' => $materiK3]);
})->name('k3.materi');

Route::get('/materi/{slug}', function (string $slug) use ($materiK3) {
    abort_unless(isset($materiK3[$slug]), 404);

    $item = $materiK3[$slug];
    $item['slug'] = $slug;

    return view('k3.detail', [
        'item' => $item,
        'sudahDibaca' => in_array($slug, session('materi_selesai_k3', []), true),
    ]);
})->name('k3.detail');

Route::post('/materi/{slug}/selesai', function (string $slug) use ($materiK3) {
    abort_unless(isset($materiK3[$slug]), 404);

    $selesai = session('materi_selesai_k3', []);

    if (!in_array($slug, $selesai, true)) {
        $selesai[] = $slug;
    }

    session(['materi_selesai_k3' => $selesai]);

    return redirect()
        ->route('k3.detail', ['slug' => $slug])
        ->with('pesan', 'Materi ditandai selesai. Bagus, lanjutkan kebiasaan belajar aman!');
})->name('k3.selesai');

/*
|--------------------------------------------------------------------------
| KUIS DAN HASIL
|--------------------------------------------------------------------------
*/

Route::get('/kuis', function () use ($soalK3) {
    return view('k3.kuis', [
        'soal' => $soalK3,
        'jumlahSoal' => count($soalK3),
    ]);
})->name('k3.kuis');

Route::post('/kuis/periksa', function (Request $request) use ($soalK3) {
    $jawaban = $request->input('jawaban', []);

    if (!is_array($jawaban)) {
        $jawaban = [];
    }

    $detail = [];
    $skor = 0;

    foreach ($soalK3 as $i => $soal) {
        $pilihan = isset($jawaban[$i]) && is_numeric($jawaban[$i])
            ? (int) $jawaban[$i]
            : -1;

        $benar = $pilihan === $soal['benar'];

        if ($benar) {
            $skor++;
        }

        $detail[] = [
            'soal' => $soal['q'],
            'pilihan' => ($pilihan >= 0 && isset($soal['ops'][$pilihan]))
                ? $soal['ops'][$pilihan]
                : 'Belum dijawab atau jawaban tidak valid',
            'kunci' => $soal['ops'][$soal['benar']],
            'benar' => $benar,
            'bahas' => $soal['bahas'],
        ];
    }

    // Pastikan perkalian ditulis dengan tanda * tanpa garis miring terbalik.
    $persen = (int) round(($skor / count($soalK3)) * 100);

    $riwayat = session('riwayat_k3', []);
    array_unshift($riwayat, [
        'tanggal' => now()->format('d/m/Y H:i'),
        'skor' => $persen,
        'benar' => $skor,
        'total' => count($soalK3),
    ]);

    session([
        'riwayat_k3' => array_slice($riwayat, 0, 20),
        'hasil_kuis_k3' => [
            'skor' => $persen,
            'benar' => $skor,
            'total' => count($soalK3),
            'detail' => $detail,
        ],
    ]);

    return redirect()->route('k3.hasil');
})->name('k3.periksa');

Route::get('/kuis/hasil', function () {
    abort_unless(session()->has('hasil_kuis_k3'), 404);

    return view('k3.hasil', [
        'hasil' => session('hasil_kuis_k3'),
    ]);
})->name('k3.hasil');

/*
|--------------------------------------------------------------------------
| RIWAYAT BELAJAR
|--------------------------------------------------------------------------
*/

Route::get('/riwayat', function () {
    return view('k3.riwayat', [
        'riwayat' => session('riwayat_k3', []),
        'selesai' => session('materi_selesai_k3', []),
    ]);
})->name('k3.riwayat');
