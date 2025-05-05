<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       @vite(['resources/css/app.css'])
       <title> SmartOnline </title>
</head>
<body>
       <div class="min-h-screen py-15 px-25">
              {{-- TEXT APLIKASI AKUNTAN --}}
              <h1 class="text-3xl font-semibold text-sky-900"> Aplikasi Akuntansi </h1>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                     
                     <!-- Kolom laptop + button -->
                     <div class="flex flex-col items-center">
                            <div class="h-20"></div>    
                         <img src="/image/laptop2.png" alt="Gambar" class="w-full h-auto rounded-lg max-w-[500px] mb-8">
                     </div>
                     <div class="flex flex-col justify-center text-sky-800 ">
                            <h1 class="text-4xl font-semibold tracking-wide mb-3">
                                    Aplikasi akunting untuk membuat laporan laba rugi secara hemat dan cepat
                            </h1>
                            <div class="h-20"></div>
                            {{-- BUTTON REQUEST DEMO --}}
                            <a href="#" class="bg-white text-blue-500 hover:bg-blue-500 hover:text-white px-55 py-2 rounded-full shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-slate-950">
                                   Request Demo
                               </a>
                     </div>
                     <div class="bg-green-50 mt-3 py-3 px-12 w-120 rounded-4xl">
                            <!-- <div class="outline-3 outline-offset-2 outline-solid mt-7 py-3 px-16 w-150 rounded-4xl"> -->
                                   <h1 class="text-2xl font-semibold">Laporan Keuangan Otomatis</h1>
                                          <p>Laporan neraca, laba rugi, arus kas, hutang, piutang, jurnal, hingga buku
                                                 besar dibuat secara otomatis dan real-time.</p>   
                     </div>
                     <div class="bg-green-50 mt-3 py-3 px-12 w-120 rounded-4xl">
                            <!-- <div class="outline-3 outline-offset-2 outline-solid mt-7 py-3 px-16 w-150 rounded-4xl"> -->
                                   <h1 class="text-2xl font-semibold">Catat Pengeluaran & Biaya Belanja</h1>
                                          <p>Catat semua biaya pengeluaran dan biaya belanja selama periode yang
                                                 tertentu dari dashboard majoo.</p>   
                     </div>
                     <div class="bg-green-50 mt-3 py-3 px-12 w-120 rounded-4xl">
                            <!-- <div class="outline-3 outline-offset-2 outline-solid mt-7 py-3 px-16 w-150 rounded-4xl"> -->
                                   <h1 class="text-2xl font-semibold">Kelola Transaksi dari Satu Dashboard</h1>
                                          <p>Catat tanggal jatuh tempo pembayaran, cetak faktur, hingga mengirimkan
                                                 faktur melalui email bisa dilakukan dalam satu dashboard.</p>   
                     </div>
                     <div class="bg-green-50 mt-3 py-3 px-12 w-120 rounded-4xl">
                            <!-- <div class="outline-3 outline-offset-2 outline-solid mt-7 py-3 px-16 w-150 rounded-4xl"> -->
                                   <h1 class="text-2xl font-semibold">Monitor Serta Kelola Kas dan Bank</h1>
                                          <p>Lihat saldo dari Kas dan Bank outlet pada hari itu hingga buat transaksi,
                                                 seperti transfer, terima, dan kirim uang.</p>   
                     </div>
                 </div>
                 <div class="space-y-2"> <!-- Container untuk semua item -->
                     <div class="border-b border-gray-200">
                         <button class="flex justify-between items-center w-full py-4 text-left text-blue-900 hover:text-blue-700" onclick="toggleAccordion(this)">
                             <span class="text-lg">Faktur Penjualan</span>
                             <svg class="w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                             </svg>
                         </button>
                         <div class="hidden pb-4">
                             <p class="text-gray-600">Detail informasi tentang faktur penjualan...</p>
                         </div>
                     </div>
                 
                     <div class="border-b border-gray-200">
                         <button class="flex justify-between items-center w-full py-4 text-left text-blue-900 hover:text-blue-700" onclick="toggleAccordion(this)">
                             <span class="text-lg">Penerimaan</span>
                             <svg class="w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                             </svg>
                         </button>
                         <div class="hidden pb-4">
                             <p class="text-gray-600">Detail informasi tentang penerimaan...</p>
                         </div>
                     </div>
                 
                     <!-- Tambahkan item-item lainnya dengan struktur yang sama -->
                 </div>





       </div>       

</body>
</html>