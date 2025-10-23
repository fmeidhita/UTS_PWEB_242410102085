<!-- navbar utama -->
<nav class="bg-[#1E293B] shadow-md fixed w-full top-0 left-0 z-50">
  <div class="container mx-auto px-6 py-5 flex justify-between items-center">

    <!--himpunan -->
      <h1 class="text-3xl font-bold text-[#3B82F6]">HIMATIF</h1>

    <!-- menu navbar -->
    <div class="space-x-8 text-lg">
      <a href="{{ url('/dashboard?username=' . (request('username') ?? strtolower(str_replace(' ', '', session('user')['nama'] ?? '')))) }}" class="hover:text-[#3B82F6] transition">Dashboard</a>
      <a href="{{ url('/pengelolaan?username=' . (request('username') ?? strtolower(str_replace(' ', '', session('user')['nama'] ?? '')))) }}" class="hover:text-[#3B82F6] transition">Pengelolaan</a>
      <a href="{{ url('/profile?username=' . (request('username') ?? strtolower(str_replace(' ', '', session('user')['nama'] ?? '')))) }}" class="hover:text-[#3B82F6] transition">Profile</a>
      <a href="{{ route('logout') }}" class="bg-[#3B82F6] hover:bg-[#2563EB] text-white px-5 py-2 rounded-lg transition">
         Logout
      </a>
    </div>
  </div>
</nav>

<div class="h-20"></div>
