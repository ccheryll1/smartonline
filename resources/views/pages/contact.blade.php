<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Workspace</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex justify-center items-center min-h-screen">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold text-indigo-800 mb-4">Daftar Sekarang, untuk Menggunakan Workspace</h2>
            <form>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_lengkap">Nama Lengkap</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama_lengkap" type="text" placeholder="Nama Lengkap">
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="perusahaan">Perusahaan/Instansi</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="perusahaan" type="text" placeholder="Perusahaan/Instansi">
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email">
                </div>
                <div class="grid grid-cols-2 gap-4 mt-4">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="text" placeholder="Phone">
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="jumlaKaryawan">Jumlah Karyawan</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-200" id="jumlaKaryawan" type="text" placeholder="Jumlah Karyawan" disabled>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="posisi_pekerjaan">Posisi Pekerjaan</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="posisi_pekerjaan" type="text" placeholder="Posisi Pekerjaan">
                </div>
                <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="plan">Plan</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-200" id="plan" type="text" placeholder="Plan" disabled>
                </div>
                <div class="mt-6">
                    <button class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="button">
                        Daftar
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>