@extends('layouts.app')

@section('content')
<div class="h-screen flex items-center justify-center bg-gradient-to-br from-[#0a1a3f] via-[#0e2a63] to-[#1a3d8f]">
  <div class="bg-white/95 rounded-3xl shadow-2xl p-12 w-full max-w-lg backdrop-blur-sm">
    <h2 class="text-4xl font-extrabold text-[#0a1a3f] text-center mb-8">
      Login Anggota HIMATIF
    </h2>

<!-- menampilkan pesan error kalo login gagal -->
    @if(session('error'))
      <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-center">
        {{ session('error') }}
      </div>
    @endif

<!-- menampilkan sukses setalah logout -->
    @if(session('success'))
      <div class="bg-green-100 text-green-700 p-3 rounded mb-4 text-center">
        {{ session('success') }}
      </div>
    @endif


<!-- from untuk login anggota -->
    <form action="{{ route('doLogin') }}" method="POST" class="space-y-6">
      @csrf
<!-- menginput username -->
      <div>
        <label for="username" class="block text-[#0a1a3f] font-semibold mb-2">Username</label>
        <input type="text" id="username" name="username" placeholder="Masukkan Username"
          class="w-full px-4 py-3 border border-[#1a3d8f] rounded-xl focus:ring-2 focus:ring-[#1a3d8f] focus:outline-none text-gray-900 placeholder-gray-400" required>
      </div>

<!-- menginput password -->
      <div>
        <label for="password" class="block text-[#0a1a3f] font-semibold mb-2">Password</label>
        <input type="password" id="password" name="password" placeholder="Masukkan password"
          class="w-full px-4 py-3 border border-[#1a3d8f] rounded-xl focus:ring-2 focus:ring-[#1a3d8f] focus:outline-none text-gray-900 placeholder-gray-400" required>
      </div>

      <button type="submit"
        class="w-full bg-gradient-to-r from-[#1a3d8f] to-[#0e2a63] text-white font-bold py-3 rounded-xl hover:opacity-90 transition">
        Login
      </button>
    </form>

    <p class="text-center text-sm text-gray-500 mt-6">
      Gunakan <span class="font-semibold text-[#1a3d8f]">nama tanpa spasi (huruf kecil)</span> sebagai username<br>
      Contoh: <span class="font-mono">meidhitafaulina</span><br>
    </p>
  </div>
</div>
@endsection
