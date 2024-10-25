<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project Semester 3</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-900 text-white">
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-center drop-shadow-[0px_0px_4px_rgba(255,0,0,0.75)] text-3xl font-semibold tracking-wider my-8">
            Daftar Pengguna</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($users as $user)
                <div class="bg-red-600 p-6 rounded-lg shadow-lg drop-shadow-[6px_6px_4px_rgba(0,0,0,0.75)]">
                    <div class="flex flex-col space-y-4">
                        <div>
                            <h3 class="text-xl font-bold">{{ $user['name'] }}</h3>
                            <p class="text-sm text-gray-200">{{ $user['username'] }}</p>
                        </div>
                        <div>
                            <p class="text-sm">Email: <span class="font-medium">{{ $user['email'] }}</span></p>
                            <p class="text-sm">Phone: <span class="font-medium">{{ $user['phone'] }}</span></p>
                        </div>
                        <div class="flex justify-between text-red-200 hover:text-white">
                            <button class="font-semibold">Edit</button>
                            <button class="font-semibold">Delete</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
