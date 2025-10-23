@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-[80vh]">
  <div class="bg-[#1E293B] p-10 rounded-2xl shadow-lg w-full max-w-xl text-center">
    
<!--  profil -->
    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" 
         alt="Foto Profil"
         class="w-28 h-28 rounded-full mx-auto mb-6 border-4 border-[#3B82F6] shadow-md">

    <h2 class="text-3xl font-bold text-[#3B82F6] mb-6">Profil Anggota</h2>

<!-- data pribadi anggota himatif yang sedang login -->
    <div class="text-gray-200 space-y-2 text-left">
      <p><span class="text-[#3B82F6] font-semibold">Nama Lengkap:</span> {{ $user['nama'] }}</p>
      <p><span class="text-[#3B82F6] font-semibold">NIM:</span> {{ $user['nim'] }}</p>
      <p><span class="text-[#3B82F6] font-semibold">Jabatan:</span> {{ $user['jabatan'] }}</p>
      <p><span class="text-[#3B82F6] font-semibold">Email:</span> {{ strtolower(str_replace(' ', '', $user['nama'])) }}@gmail.com</p>
      <p><span class="text-[#3B82F6] font-semibold">Prodi:</span> Teknologi Informasi</p>
      <p><span class="text-[#3B82F6] font-semibold">Tanggal Bergabung:</span> 15 September 2025</p>
    </div>

<!-- tombol profil -->
    <div class="mt-8 flex flex-col gap-3">
      <button class="bg-[#3B82F6] hover:bg-[#2563EB] px-5 py-2 rounded-lg font-medium text-white transition">
        Edit Profil
      </button>
      <button class="bg-[#0F172A] hover:bg-[#1E3A8A] px-5 py-2 rounded-lg font-medium text-[#3B82F6] border border-[#3B82F6] transition">
        Ubah Password
      </button>
      <a href="{{ url('/dashboard?username=' . strtolower(str_replace(' ', '', $user['nama']))) }}"
      class="block bg-transparent hover:bg-[#1E3A8A] border border-[#3B82F6] px-5 py-2 rounded-lg text-[#3B82F6] font-medium transition">
        Kembali ke Dashboard
      </a>

    </div>

  </div>
</div>
@endsection
