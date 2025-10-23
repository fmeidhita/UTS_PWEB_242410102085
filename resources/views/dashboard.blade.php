@extends('layouts.app')

@section('content')
<div class="bg-[#1E293B] p-10 rounded-2xl shadow-lg">
  <h1 class="text-5xl font-bold text-center text-[#3B82F6] mb-6">
  Selamat Datang, {{ ucfirst($username) }}!
  </h1>

    <p class="text-center text-gray-300 mx-auto leading-relaxed whitespace-nowrap px-4 mb-10">
      Ini adalah <span class="font-semibold text-[#3B82F6]">Dashboard HIIMATIF Universitas Jember</span> - pusat informasi untuk seluruh anggota Himpunan Mahasiswa Teknologi Informasi.
    </p>
  

<!-- informasi dashboard -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-[#0F172A] p-6 rounded-lg border border-[#3B82F6] text-center">
      <h3 class="text-xl font-bold text-[#3B82F6] mb-2">📢 Pengumuman Terbaru</h3>
      <p class="text-gray-300">Rapat bulanan oktober anggota HIMATIF akan dilaksanakan Jumat, 31 Oktober 2025.</p>
    </div>
    <div class="bg-[#0F172A] p-6 rounded-lg border border-[#3B82F6] text-center">
      <h3 class="text-xl font-bold text-[#3B82F6] mb-2">🗓️ Rapat & Agenda</h3>
      <p class="text-gray-300">Jadwal rapat Oprec bersama BPH akan diumumkan melalui grup panitia Oprec.</p>
    </div>
    <div class="bg-[#0F172A] p-6 rounded-lg border border-[#3B82F6] text-center">
      <h3 class="text-xl font-bold text-[#3B82F6] mb-2">💰 KAS HIMATIF</h3>
      <p class="text-gray-300">Yang belum membayar uang kas pada bulan oktober segera dibayarkan. Untuk laporan kas dapat diakses melalui Spreadshet.</p>
    </div>
  </div>

  <hr class="border-gray-600 mb-8">

  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">

<!-- program kerja yang sedang berjalan -->
    <div class="bg-[#0F172A] p-6 rounded-lg border border-[#3B82F6] text-center">
      <h3 class="text-xl font-bold text-[#3B82F6] mb-2">🛠️ Program Kerja yang Sedang Berjalan</h3>
      <div class="text-left text-gray-300 space-y-3"> 
        <p class="font-semibold text-[#60A5FA] mb-2">Proker yang sedang berjalan pada bulan Oktober:</p>
        <ul class="list-disc list-inside space-y-2 text-justify">
          <li>Oprec (Open Recruitment) adalah proses seleksi untuk merekrut anggota baru yang akan menjadi pengurus Himpunan Mahasiswa Teknologi Informasi</li>
          <li>Makrab (Malam Keakraban) merupakan program kerja HIMATIF untuk menciptakan sikap loyalitas, rasa kekeluargaan, dan kerja sama yang tinggi antar pengurus HIMATIF.</li>
          <li>Mubes (Musyawarah Besar) merupakan program kerja HIMATIF untuk meregulasi ulang undang-undang HIMATIF (AD/ART, GBHO, GBHK, dan mekanisme pemilu) serta mengevaluasi dan menerima laporan pertanggungjawaban pengurus HIMATIF selama satu periode kepengurusan.</li>
          <li>Pemilu (Pemilihan Umum) merupakan program kerja HIMATIF untuk memilih Ketua HIMATIF yang bertanggung jawab, mampu memimpin, mengayomi, serta menerima seluruh aspirasi Mahasiswa Program Studi Teknologi Informasi.</li>
        </ul>
    </div>
  </div>

<!-- program kerja divisi -->
    <div class="bg-[#0F172A] p-6 rounded-lg border border-[#3B82F6] text-center">
      <h3 class="text-xl font-bold text-[#3B82F6] mb-2">🧩 Program Kerja Divisi</h3>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-gray-300 text-left justify-items-center">

      <div class="w-full max-w-xs"> 
        <p class="font-semibold text-[#60A5FA] mb-2">Divisi PSDM:</p>
        <ul class="list-disc list-inside mb-4">
          <li>Welcoming Session</li>
          <li>Makrab</li>
          <li>Mubes</li>
          <li>Pemilu</li>
          <li>Oprec</li>
          <li>COD</li>
          <li>KWU</li>
          <li>Himatif Talk</li>
        </ul>
      </div>
      
      <div class="w-full max-w-xs">
        <p class="font-semibold text-[#60A5FA] mb-2">Divisi LITBANG:</p>
        <ul class="list-disc list-inside mb-4">
          <li>TIC</li>
          <li>ITeC</li>
          <li>Pembinaan Gemastik</li>
          <li>ITDeV</li>
          <li>Kompak</li>
        </ul>
      </div>

      <div class="w-full max-w-xs">
        <p class="font-semibold text-[#60A5FA] mb-2">Divisi HUMAS:</p>
        <ul class="list-disc list-inside mb-4">
          <li>TIT</li>
          <li>DiesGreet</li>
          <li>Skripsi Talk</li>
          <li>Sarasehan</li>
        </ul>
      </div>

      <div class="w-full max-w-xs">
        <p class="font-semibold text-[#60A5FA] mb-2">Divisi MEDIATEK:</p>
        <ul class="list-disc list-inside mb-4">
          <li>MEDTRA</li>
          <li>Web Himatif</li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
