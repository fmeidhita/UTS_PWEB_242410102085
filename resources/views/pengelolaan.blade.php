@extends('layouts.app')

@section('content')
<div class="bg-[#1E293B] p-8 rounded-2xl shadow-lg">
  <h2 class="text-3xl font-bold text-center text-[#3B82F6] mb-8">Daftar Anggota HIMATIF</h2>

<!-- bagian tabel anggota himatif -->
  <div class="overflow-x-auto mb-10">
    <table class="min-w-full bg-[#0F172A] text-white border border-[#3B82F6] rounded-lg">
      <thead class="bg-[#3B82F6] text-white">
        <tr>
          <th class="px-4 py-3 text-left">Nama</th>
          <th class="px-4 py-3 text-left">NIM</th>
          <th class="px-4 py-3 text-left">Jabatan</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-700">
        @foreach ($anggota as $a)
        <tr class="hover:bg-[#1E3A8A] transition">
          <td class="px-4 py-3">{{ $a['nama'] }}</td>
          <td class="px-4 py-3">{{ $a['nim'] }}</td>
          <td class="px-4 py-3">{{ $a['jabatan'] }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>


  <div class="text-center mb-10">
    <button
      class="bg-[#3B82F6] hover:bg-[#2563EB] text-white font-semibold px-8 py-3 rounded-xl shadow-md transition">
       Tambah Anggota HIMATIF
    </button>
  </div>

<!-- menampilkan data tiap anggota -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach ($anggota as $a)
    <div class="bg-[#0F172A] p-6 rounded-lg shadow-md border border-[#3B82F6]">
      <h3 class="text-2xl font-bold text-[#3B82F6]">{{ $a['nama'] }}</h3>
      <p class="text-gray-300">NIM: {{ $a['nim'] }}</p>
      <p class="text-gray-300 mb-4">Jabatan: {{ $a['jabatan'] }}</p>
      <div class="flex space-x-3">
        <button class="bg-[#2563EB] hover:bg-[#1D4ED8] px-4 py-2 rounded-lg">Edit</button>
        <button class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded-lg">Hapus</button>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
