<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project Semester 3</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class=" bg-slate-900">
    <div class="container d-flex mx-auto justify-center text-center max-h-max">
        <h2 class=" text-3xl font-semibold text-white">Tabel Users</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Nama</th>
                        <th class="py-3 px-6 text-center">Kelas</th>
                        <th class="py-3 px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm font-light">
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left">1</td>
                        <td class="py-3 px-6 text-left">Budi Santoso</td>
                        <td class="py-3 px-6 text-center">10</td>
                        <td class="py-3 px-6 text-center">
                            <button class="bg-blue-500 text-white py-1 px-3 rounded hover:bg-blue-600">Edit</button>
                            <button class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600 ml-2">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
