<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title ?? 'HIMATIF' }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex flex-col bg-[#0F172A] text-white">
  <x-navbar />
  <main class="flex-grow container mx-auto px-6 py-10">
    @yield('content')
  </main>
  <x-footer />
</body>
</html>
