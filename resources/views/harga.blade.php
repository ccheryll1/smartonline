<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Harga - SmartOnline</title>
</head>
<body class="bg-white text-blue-900 ">
    <!-- Navigation -->
    {{-- <nav class="bg-white mx-auto mt-6 max-w-6xl rounded-full flex items-center justify-between px-5 py-3 shadow-lg">
        <div class="text-xl font-bold text-blue-900">
            <span class="bg-blue-900 text-white px-3 py-1 rounded-full">
                SMART <span class="text-blue-300">ONLINE</span>
            </span>
        </div>
        <ul class="flex items-center gap-20 fs-5 font-semibold text-blue-900">
            <li><a href="#">HOME</a></li>
            <li><a href="#">SOLUSI</a></li>
            <li><a href="#">HARGA</a></li>
        </ul>
        <a href="#" class="flex items-center gap-2 bg-blue-900 hover:bg-green-600 text-white px-4 py-2 rounded-full shadow-md transition-all">
            <img src="https://img.icons8.com/color/24/000000/whatsapp--v1.png" alt="WhatsApp" />
            <span>Let's Talk</span>
        </a>
    </nav> --}}

    <!-- Main Container -->
    <div class="container mx-auto max-w-6xl mt-10">
        <!-- Blue Background Container -->
        <div class="bg-blue-900 py-10 rounded-3xl">
            <!-- Header Section -->
            <div class="container mx-auto max-w-5xl px-6">
                <h1 class="text-5xl font-semibold tracking-wide text-white">PARTNER KOLABORASI BERSAMA PERUSAHAAN ANDA</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                    <!-- Image Section -->
                    <div class="bg-white rounded-3xl p-6">
                        <img src="{{ asset('images/collaboration.png') }}" alt="Collaboration Illustration" class="w-full h-auto">
                    </div>
                    <!-- Form Section -->
                    <div class="bg-white rounded-3xl p-6 space-y-4">
                        <input type="email" placeholder="Work Email*" class="w-full p-3 border border-gray-300 rounded-lg" disabled>
                        <div class="grid grid-cols-2 gap-4">
                            <input type="text" placeholder="First name*" class="w-full p-3 border border-gray-300 rounded-lg" disabled>
                            <input type="text" placeholder="Last name*" class="w-full p-3 border border-gray-300 rounded-lg" disabled>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <select class="w-full p-3 border border-gray-300 rounded-lg" disabled>
                                <option value="Indonesia">Indonesia</option>
                            </select>
                            <input type="text" placeholder="+62" class="w-full p-3 border border-gray-300 rounded-lg" disabled>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <input type="text" placeholder="Company name*" class="w-full p-3 border border-gray-300 rounded-lg" disabled>
                            <input type="number" placeholder="Number of Employees*" class="w-full p-3 border border-gray-300 rounded-lg" disabled>
                        </div>
                        <button class="w-full bg-blue-900 text-white p-3 rounded-r-3xl rounded-l-lg hover:bg-blue-700 transition-all">REQUEST A DEMO</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Apps Section -->
        <div class="container mx-auto max-w-5xl mt-10 px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white text-blue-900 p-6 rounded-xl shadow-lg text-center">
                    <h3 class="text-xl font-semibold mb-3">Smart Accounting</h3>
                    <p>Aplikasi accounting untuk kebutuhan perusahaan anda</p>
                </div>
                <div class="bg-white text-blue-900 p-6 rounded-xl shadow-lg text-center">
                    <h3 class="text-xl font-semibold mb-3">Smart HRIS</h3>
                    <p>Aplikasi HRIS untuk kebutuhan perusahaan anda</p>
                </div>
                <div class="bg-white text-blue-900 p-6 rounded-xl shadow-lg text-center">
                    <h3 class="text-xl font-semibold mb-3">Smart POS</h3>
                    <p>Aplikasi POS untuk kebutuhan perusahaan anda</p>
                </div>
            </div>
        </div>

        <!-- Pricing Section -->
        <div class="bg-gradient-to-r from-blue-900/70 to-blue-900 py-10 px-6 mt-16">
            <div class="container mx-auto max-w-5xl">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="text-white">
                        <h2 class="text-sm font-semibold uppercase">Beli Sekarang</h2>
                        <h2 class="text-4xl font-semibold mt-2">Pilih Paket dan Nikmati Layanan Aplikasi</h2>
                        <p class="mt-4 text-lg">Temukan paket smart online yang paling tepat dan sesuai dengan kebutuhan perusahaan anda.</p>
                        <a href="#" class="mt-4 inline-block text-white underline text-lg">Lihat harga selengkapnya →</a>
                    </div>
                    <div class="bg-white text-blue-900 p-6 rounded-3xl shadow-lg">
                        <h3 class="text-xl font-semibold mb-3">CUSTOM DEVELOPMENT</h3>
                        <p>Kami menawarkan solusi pengembangan sistem dengan harga yang fleksibel. Dari sistem manajemen hingga aplikasi mobile, tim kami mendukung visi dan tujuan bisnis anda.</p>
                        <button class="w-full bg-blue-900 text-white p-3 mt-4 rounded-3xl hover:bg-blue-700 transition-all">HUBUNGI KAMI</button>
                    </div>
                    <div class="bg-white text-blue-900 p-6 rounded-3xl shadow-lg">
                        <h3 class="text-xl font-semibold mb-3">SUBSCRIPTION</h3>
                        <p>Berlangganan aplikasi smart online sesuai dengan kebutuhan anda</p>
                        <p class="text-3xl font-bold text-black mt-4">Harga mulai Rp 999.000</p>
                        <button class="w-full bg-blue-900 text-white p-3 mt-4 rounded-3xl hover:bg-blue-700 transition-all">PILIH PAKET</button>
                        <button class="w-full bg-transparent text-blue-900 border border-blue-900 p-3 mt-2 rounded-3xl hover:bg-blue-900 hover:text-white transition-all">HUBUNGI KAMI</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>