<?php

use Illuminate\Database\Seeder;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matkul = array("Bahasa Indonesia", "Dasar Pemrograman", "Fisika 1", "Kimia 1 ", "Matematika 1", "Pancasila", "Agama Buddha ", "Agama Hindu ", "Agama Islam ", "Agama Katolik ", "Agama Khonghucu ", "Agama Kristen", "Bahasa Inggris", "Fisika 2", "Kewarganegaraan", "Matematika 2", "Sistem Digital", "Struktur Data", "Aljabar Linier", "Komputasi Numerik", "Matematika Diskrit", "Organisasi Komputer", "Pemrograman Berorientasi Objek", "Sistem Basis Data", "Analisis dan Perancangan Sistem Informasi", "Kecerdasan Buatan", "Manajemen Basis Data", "Perancangan dan Analisis Algoritma", "Probabilitas dan Statistik", "Sistem Operasi", "Grafika Komputer", "Jaringan Komputer", "Kecerdasan Komputasional", "Manajemen Proyek Perangkat Lunak", "Pemrograman Web", "Perancangan Perangkat Lunak", "Analisis Data Multivariat", "Arsitektur Perangkat Lunak", "Data Mining", "Game Cerdas", "Interaksi Manusia dan Komputer", "Pemrograman Berbasis Kerangka Kerja", "Pemrograman Jaringan", "Pengembangan Analisis Algoritma", "Pengolahan Citra Digital", "Rekayasa Kebutuhan", "Teori Graf dan Otomata", "Basis Data Terdistribusi", "Evolusi Perangkat Lunak", "Jaringan Multimedia", "Jaringan Nirkabel", "Keamanan Informasi dan Jaringan", "Kompresi Data", "Komputasi Awan", "Komputasi Bergerak", "Komputasi Biomedik", "Konstruksi Perangkat Lunak", "Pemorgraman Perangkat Bergerak", "Pemrograman Berbasis Antarmuka", "Pengantar Logika dan Pemrograman", "Pengantar Pengembangan Game", "Pra-Tugas Akhir", "Realitas Virtual dan Augmentasi", "Rekayasa Pengetahuan", "Riset Operasi", "Robotika", "Sistem Enterprise", "Sistem Informasi Geografis", "Sistem Temu Kembali Informasi", "Sistem Terdistribusi", "Teknik Pengembangan Game", "Teknologi antar Jaringan", "Teknopreneur", "Visi Komputer", "Analisis Jejaring Sosial", "Animasi Komputer dan Pemodelan 3D", "Audit Sistem", "Big Data", "Deep Learning", "Forensik Digital", "Kerja Praktik", "Komputasi Grid dan Paralel", "Komputasi Pervasif dan Jaringan Sensor", "Pemodelan dan Simulasi", "Pengantar Proses Mining", "Pengantar Sistem Cerdas", "Pengantar Teknologi Basis Data", "Penjaminan Mutu Perangkat Lunak", "Perancangan Keamanan Sistem dan Jaringan", "Sistem Game", "Tata Kelola Teknologi Informasi", "Teknologi IoT", "Topik Khusus", "Tugas Akhir", "Wawasan dan Aplikasi Teknologi ");
        
        foreach ($matkul as $m) {
            DB::table('mata_kuliah')->insert([
               'kode'=> strtoupper(Str::random(2)),
               'nama'=> ($m),
               'semester' => rand(1,8),
               'sks' => 3
            ]);
        }
    }
}
