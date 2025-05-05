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
                            <a href="#" class="bg-white text-blue-500 hover:bg-blue-500 hover:text-white px-50 py-2 rounded-full shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-slate-950">
                                   Request Demo
                               </a>
                        </div>
                 </div>
                 





       </div>       

</body>
</html>