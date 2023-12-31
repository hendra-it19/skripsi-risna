<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CiriFisik;
use App\Models\HasilDiagnosa;
use App\Models\JenisKelamin;
use App\Models\SolusiStunting;
use App\Models\TinggiBadan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // admin
        User::create([
            'nama' => 'Admin Web',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);

        // master data
        // jenis_kelamin
        // laki-laki
        JenisKelamin::create([
            'kode' => 'A1',
            'jenis_kelamin' => 'laki-laki',
        ]);
        JenisKelamin::create([
            'kode' => 'A2',
            'jenis_kelamin' => 'perempuan',
        ]);

        // tinggi badan
        TinggiBadan::create([
            'kode' => 'B1',
            'umur' => 0,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '< 46.1'
        ]);
        TinggiBadan::create([
            'kode' => 'B2',
            'umur' => 0,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '46.1 - 48'
        ]);
        TinggiBadan::create([
            'kode' => 'B3',
            'umur' => 1,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '< 50.8'
        ]);
        TinggiBadan::create([
            'kode' => 'B4',
            'umur' => 1,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '50.8 - 52.8'
        ]);
        TinggiBadan::create([
            'kode' => 'B5',
            'umur' => 2,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '< 54.4'
        ]);
        TinggiBadan::create([
            'kode' => 'B6',
            'umur' => 2,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '54.4 - 56.4'
        ]);
        TinggiBadan::create([
            'kode' => 'B7',
            'umur' => 3,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '< 57.3'
        ]);
        TinggiBadan::create([
            'kode' => 'B8',
            'umur' => 3,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '57.3 - 59.4'
        ]);
        TinggiBadan::create([
            'kode' => 'B9',
            'umur' => 4,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '< 59.7'
        ]);
        TinggiBadan::create([
            'kode' => 'B10',
            'umur' => 4,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '59.7 - 61.8'
        ]);
        TinggiBadan::create([
            'kode' => 'B11',
            'umur' => 5,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '< 61.7'
        ]);
        TinggiBadan::create([
            'kode' => 'B12',
            'umur' => 5,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '61.7 - 63.8'
        ]);
        TinggiBadan::create([
            'kode' => 'B13',
            'umur' => 6,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '< 63.3',
        ]);
        TinggiBadan::create([
            'kode' => 'B14',
            'umur' => 6,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '63.3 - 65.5',
        ]);
        TinggiBadan::create([
            'kode' => 'B15',
            'umur' => 7,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '< 64.8',
        ]);
        TinggiBadan::create([
            'kode' => 'B16',
            'umur' => 7,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '64.8 - 67.0',
        ]);
        TinggiBadan::create([
            'kode' => 'B17',
            'umur' => 8,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '< 66.2',
        ]);
        TinggiBadan::create([
            'kode' => 'B18',
            'umur' => 8,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '66.2 - 68.4',
        ]);
        TinggiBadan::create([
            'kode' => 'B19',
            'umur' => 9,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '< 67.5',
        ]);
        TinggiBadan::create([
            'kode' => 'B20',
            'umur' => 9,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '67.5 - 69.7',
        ]);
        TinggiBadan::create([
            'kode' => 'B21',
            'umur' => 10,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '< 68.7',
        ]);
        TinggiBadan::create([
            'kode' => 'B22',
            'umur' => 10,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '68.7 - 71.0',
        ]);
        TinggiBadan::create([
            'kode' => 'B23',
            'umur' => 11,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '< 69.9',
        ]);
        TinggiBadan::create([
            'kode' => 'B24',
            'umur' => 11,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '69.9 - 72.2',
        ]);
        TinggiBadan::create([
            'kode' => 'B25',
            'umur' => 12,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '< 71.0',
        ]);
        TinggiBadan::create([
            'kode' => 'B26',
            'umur' => 12,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '71.0 - 83.9',
        ]);
        TinggiBadan::create([
            'kode' => 'B27',
            'umur' => 24,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '< 81.7',
        ]);
        TinggiBadan::create([
            'kode' => 'B28',
            'umur' => 24,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '81.7 - 91.8',
        ]);
        TinggiBadan::create([
            'kode' => 'B29',
            'umur' => 36,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '< 88.7',
        ]);
        TinggiBadan::create([
            'kode' => 'B30',
            'umur' => 36,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '88.7 - 99.1',
        ]);
        TinggiBadan::create([
            'kode' => 'B31',
            'umur' => 48,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '< 94.9',
        ]);
        TinggiBadan::create([
            'kode' => 'B32',
            'umur' => 48,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '94.9 - 104.8',
        ]);
        TinggiBadan::create([
            'kode' => 'B33',
            'umur' => 60,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '< 100.7',
        ]);
        TinggiBadan::create([
            'kode' => 'B34',
            'umur' => 60,
            'jenis_kelamin' => 1,
            'tinggi_badan' => '100.7 - 105.3',
        ]);
        // perempuan
        TinggiBadan::create([
            'kode' => 'B35',
            'umur' => 0,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '< 45.4',
        ]);
        TinggiBadan::create([
            'kode' => 'B36',
            'umur' => 0,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '45.4 - 47.3',
        ]);
        TinggiBadan::create([
            'kode' => 'B37',
            'umur' => 1,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '< 49.8',
        ]);
        TinggiBadan::create([
            'kode' => 'B38',
            'umur' => 1,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '49.8 - 51.7',
        ]);
        TinggiBadan::create([
            'kode' => 'B39',
            'umur' => 2,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '< 53.0',
        ]);
        TinggiBadan::create([
            'kode' => 'B40',
            'umur' => 2,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '53.0 - 55.0',
        ]);
        TinggiBadan::create([
            'kode' => 'B41',
            'umur' => 3,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '< 55.6',
        ]);
        TinggiBadan::create([
            'kode' => 'B42',
            'umur' => 3,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '55.6 - 57.7',
        ]);
        TinggiBadan::create([
            'kode' => 'B43',
            'umur' => 4,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '< 57.8',
        ]);
        TinggiBadan::create([
            'kode' => 'B44',
            'umur' => 4,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '57. 8 - 59.9',
        ]);
        TinggiBadan::create([
            'kode' => 'B45',
            'umur' => 5,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '< 59.6',
        ]);
        TinggiBadan::create([
            'kode' => 'B46',
            'umur' => 5,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '59.6 - 61.8',
        ]);
        TinggiBadan::create([
            'kode' => 'B47',
            'umur' => 6,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '< 61.2',
        ]);
        TinggiBadan::create([
            'kode' => 'B48',
            'umur' => 6,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '61.2 - 63.5',
        ]);
        TinggiBadan::create([
            'kode' => 'B49',
            'umur' => 7,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '< 62.7',
        ]);
        TinggiBadan::create([
            'kode' => 'B50',
            'umur' => 7,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '62.7 - 65.0',
        ]);
        TinggiBadan::create([
            'kode' => 'B51',
            'umur' => 8,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '< 64.0',
        ]);
        TinggiBadan::create([
            'kode' => 'B52',
            'umur' => 8,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '64.0 - 66.4',
        ]);
        TinggiBadan::create([
            'kode' => 'B53',
            'umur' => 9,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '< 65.3',
        ]);
        TinggiBadan::create([
            'kode' => 'B54',
            'umur' => 9,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '65.3 - 67.7',
        ]);
        TinggiBadan::create([
            'kode' => 'B55',
            'umur' => 10,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '< 66.5',
        ]);
        TinggiBadan::create([
            'kode' => 'B56',
            'umur' => 10,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '66.5 - 69.0',
        ]);
        TinggiBadan::create([
            'kode' => 'B57',
            'umur' => 11,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '< 67.7',
        ]);
        TinggiBadan::create([
            'kode' => 'B58',
            'umur' => 11,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '67.7 - 70.3',
        ]);
        TinggiBadan::create([
            'kode' => 'B59',
            'umur' => 12,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '< 68.9',
        ]);
        TinggiBadan::create([
            'kode' => 'B60',
            'umur' => 12,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '68.9 - 82.3',
        ]);
        TinggiBadan::create([
            'kode' => 'B61',
            'umur' => 24,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '< 80.0 ',
        ]);
        TinggiBadan::create([
            'kode' => 'B62',
            'umur' => 24,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '80.0 - 90.6',
        ]);
        TinggiBadan::create([
            'kode' => 'B63',
            'umur' => 36,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '< 87.4',
        ]);
        TinggiBadan::create([
            'kode' => 'B64',
            'umur' => 36,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '87.4 - 97.9',
        ]);
        TinggiBadan::create([
            'kode' => 'B65',
            'umur' => 48,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '< 93.1',
        ]);
        TinggiBadan::create([
            'kode' => 'B66',
            'umur' => 48,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '93.1 - 104.2',
        ]);
        TinggiBadan::create([
            'kode' => 'B67',
            'umur' => 60,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '< 99.9',
        ]);
        TinggiBadan::create([
            'kode' => 'B68',
            'umur' => 60,
            'jenis_kelamin' => 2,
            'tinggi_badan' => '99.9 - 104.7',
        ]);

        // ciri fisik
        CiriFisik::create([
            'kode' => 'C1',
            'ciri_fisik' => 'Wajah tampak lebih muda dari anak seusianya',
        ]);
        CiriFisik::create([
            'kode' => 'C2',
            'ciri_fisik' => 'Pertumbuhan tubuh dan gigi yang terhambat',
        ]);
        CiriFisik::create([
            'kode' => 'C3',
            'ciri_fisik' => 'Tinggi badan anak cenderung lebih pendek dari anak seusianya',
        ]);
        CiriFisik::create([
            'kode' => 'C4',
            'ciri_fisik' => 'Memiliki kemampuan fokus dan memori belajar yang kurang baik',
        ]);
        CiriFisik::create([
            'kode' => 'C5',
            'ciri_fisik' => 'Berat badan lebih ringan dari anak seusianya',
        ]);
        CiriFisik::create([
            'kode' => 'C6',
            'ciri_fisik' => 'Anak cenderung lebih pendiam',
        ]);
        CiriFisik::create([
            'kode' => 'C7',
            'ciri_fisik' => 'Anak mudah terserang/terinfeksi penyakit, seperti demam, diare, muntah dan lainnya.',
        ]);
        CiriFisik::create([
            'kode' => 'C8',
            'ciri_fisik' => 'Lambatnya perkembangan keterampilan fisik seperti berguling, duduk, berdiri dan berjalan',
        ]);
        CiriFisik::create([
            'kode' => 'C9',
            'ciri_fisik' => 'Menurunnya kemampuan kognitif anak, contoh, di usia 1 tahun anak belum bisa makan sendiri dan belum bisa mengucap kata, usia 2 tahun anak belum bisa mengenali bentuk benda, usia 3 tahun belum mngenal konsep banyak dan sedikit dan belum bisa menempatkan benda berdasarkan ukuran, usia 4 tahun anak belum mengenal benda berdasarkan fungsi, warna, dan ukuran, usia 5 tahun anak belum mampu menunjukkan aktivitas  yang bersifat eksploratif dan menyelidik.',
        ]);

        // Hasil diagnosa
        HasilDiagnosa::create([
            'kode' => 'D1',
            'hasil_diagnosa' => 'stunting'
        ]);
        HasilDiagnosa::create([
            'kode' => 'D2',
            'hasil_diagnosa' => 'tidak stunting'
        ]);

        // solusi stunting
        SolusiStunting::create([
            'jenis_saran' => 'pengobatan',
            'umur_minimal' => 0,
            'umur_maksimal' => 6,
            'solusi_stunting' => '
            <ol>
                <li>Melakukan stimulasi dini perkembangan pada bayi, khususnya jika panjang badan lahir dan stunting sudah terdeteksi</li>
                <li>Pemberian ASI eksklusif sampai usia 6 bulan</li>
                <li>Konsultasi Kesehatan anak secara rutin baik di posyandu, puskesmas, atau pusat pelayanan kesehatan terdekat.</li>
            </ol>
            '
        ]);
        SolusiStunting::create([
            'jenis_saran' => 'pengobatan',
            'umur_minimal' => 6,
            'umur_maksimal' => 23,
            'solusi_stunting' => '
            <ol>
                <li>Pemberian ASI Bersama dengan makanan pendamping ASI (MPASI) setelah usia 6 bulan</li>
                <li>Memberikan nutrisi tambahan berupa makanan yang kaya protein hewani, lemak dan kalori</li>
                <li>Berikan asupan protein harian sebanyak 1,2 g/kg berat badan</li>
                <li>Memberikan suplemen berupa vitamin A, zinc, zat besi, kalsium, dan yodium</li>
                <li>Memberikan pelayanan dan perawatan Kesehatan yang optimal untuk anak dengan Konsultasi Kesehatan anak secara rutin baik di posyandu, puskesmas, atau pusat pelayanan Kesehatan terdekat</li>
            </ol>'
        ]);
        SolusiStunting::create([
            'jenis_saran' => 'pengobatan',
            'umur_minimal' => 24,
            'umur_maksimal' => 60,
            'solusi_stunting' => '
            <ol>
                <li>Pemberian ASI Bersama dengan makanan pendamping ASI (MPASI) setelah usia 6 bulan</li>
                <li>Memberikan nutrisi tambahan berupa makanan yang kaya protein hewani, lemak dan kalori</li>
                <li>Berikan asupan protein harian sebanyak 1,2 g/kg berat badan</li>
                <li>Memberikan suplemen berupa vitamin A, zinc, zat besi, kalsium, dan yodium</li>
                <li>Memberikan pelayanan dan perawatan Kesehatan yang optimal untuk anak dengan Konsultasi Kesehatan anak secara rutin baik di posyandu, puskesmas, atau pusat pelayanan Kesehatan terdekat</li>
            </ol>'
        ]);
        SolusiStunting::create([
            'jenis_saran' => 'pencegahan',
            'umur_minimal' => 24,
            'umur_maksimal' => 60,
            'solusi_stunting' => '
            <ol>
                <li>Memenuhi kebutuhan gizi sejak hamil</li>
                <li>Beri asi eksklusif sejak bayi lahir sampai usia 6 bulan</li>
                <li>Dampingi ASI eksklusif dengan MPASI sehat setelah bayi berusia 6 bulan</li>
                <li>Berikan anak makanan yang mengandung gizi seimbang terutama protein</li>
                <li>Terus pantau pertumbuhan anak dengan rutin membawa anak ke posyandu</li>
                <li>Selalu menjaga kebersihan lingkungan dengan cara memperbaiki sanitasi dan berperilaku hidup bersih dan sehat (PHBS) guna mencapai keluarga yang sehat</li>
            </ol>'
        ]);
    }
}
