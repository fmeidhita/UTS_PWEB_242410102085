Project ini yang saya buat menampilkan sistem sederhana untuk menampilkan data anggota Himatif. Dan website ini menggunakan framework laravel tanpa menngunakan database.

Website ini memiliki beberapa halaman yaitu:

Login --> Untuk masuk ke website dengan mengisi username dan password
Dashboard --> Menampilkan sapaan selamat datang kepadan user yang sedang login dan menampilkan sedikit informasi penting bagi internal anggota
Pengelolaan -->Menampilkan daftar data anggota Himatif dalam bentuk tabel/card dengan menggunakan looping
Profil --> Menampilkan data profil user yang sedang login
Logout --> Menglogout user yang sedang login, dan dikembalikan ke halaman login
Struktur pada Website:

Routes/web.php
app/Http/Controllers/PageController.php
resource/views/layouts/app.blade.php
resources/views/login.blade.php
resources/views/dashboard.blade.php
resources/views/profile.blade.php
resources/views/pengelolaan.blade.php
resources/views/components/navbar.blade.php
resources/views/components/footer.blade.php
Semua halaman ini dibuat menggunakan Blade Template, dan website ini juga memiliki component seperti navbar dan footer Dan website ini memiliki View, Layout, Controller dan yang lainnnya, dan insyallah memenuhi ketentuan dari UTS.