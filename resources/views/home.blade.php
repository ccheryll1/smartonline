<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       @vite(['resources/css/app.css', 'resources/js/app.js'])       
       <title>SmartOnline</title>
</head>
<body >
<div class="bg-blue-900 min-h-screen">
    <nav class="bg-white fixed top-0 left-0 right-0 mx-auto max-w-6xl rounded-full flex items-center justify-between px-5 py-3 shadow-lg mt-6 z-50">
        <!-- Logo -->
        <div class="text-xl font-bold text-blue-900">
            <span class="bg-blue-900 text-white px-3 py-1 rounded-full">
                SMART <span class="text-blue-300">ONLINE</span>
            </span>
        </div>

        <!-- Menu -->
        <ul class="flex items-center gap-20 font-semibold text-blue-900">
            <li> <a href="#">HOME</a> </li>
            <li> <a href="#">SOLUSI</a> </li>
            <li> <a href="#">BLOG</a> </li>
            <li> <a href="#">HARGA</a> </li>
        </ul>

        <!-- WhatsApp -->
        <a href="#" class="flex items-center gap-2 bg-blue-900 hover:bg-green-600 text-white px-4 py-2 rounded-full shadow-md transition-all">
            <img src="https://img.icons8.com/color/24/000000/whatsapp--v1.png" alt="WhatsApp" />
            <span>Let's Talk</span>
        </a>
    </nav>

    <!-- buat ngasih jarak karena nav fixed -->
    <div class="h-32"></div>    

    <!-- Content Section -->
    <div class="container mx-auto max-w-6xl text-white mt-10">
        <h1 class="text-6xl font-semibold tracking-wide">Partner kolaborasi produktifitas perusahaan anda</h1>
    </div>

    <div class="container mx-auto mt-10 max-w-6xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="flex flex-col items-center">
                <img src="/image/image.png" alt="Gambar" class="w-full h-auto rounded-lg shadow-lg">
                <a href="#" class="mt-6 bg-white text-blue-500 hover:bg-blue-500 hover:text-white px-10 py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-300">
                    Request Demo
                </a>
            </div>

            <div class="text-white h-full flex flex-col justify-center">
                <h1 class="text-4xl font-semibold tracking-wide mb-3"> Pengembangan system </h1>
                <p class="text-lg"> Design dan mengembangkan system sesuai kebutuhan perusahaan </p>

                <h1 class="text-4xl font-semibold tracking-wide mb-3 mt-7"> Berlangganan per bulan </h1>
                <p class="text-lg"> Pilih fitur aplikasi sesuai kebutuhan perusahaan anda </p>

                <h1 class="text-4xl font-semibold tracking-wide mb-3 mt-8"> Design ulang aplikasi anda </h1>
                <p class="text-lg"> Improve the performance of an application by re-design your UI application system </p>
            </div>
        </div>
    </div>
</div>
    <footer>
        <div class="bg-gray-600">

        </div>
    </footer>    

    
    @include('harga')
    @include('footer')
</body>
</html>        
