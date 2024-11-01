<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Card Todo List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-200 text-white">
    <div class="container mx-auto px-4 py-8">
        <h2
            class="text-center drop-shadow-[0px_0px_4px_rgba(20,0,0,0.7)] bg-black rounded-full text-3xl font-semibold tracking-wider my-8 py-3">
            Daftar Pengguna</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($todos as $todo)
                <div class="bg-red-600 p-4 rounded-lg shadow-lg drop-shadow-[6px_6px_4px_rgba(0,0,0,0.75)]">
                    <div class="flex">
                        <input class=" mt-1 size-5" type="checkbox" @if ($todo['completed']) checked @endif
                            name="check">
                        <h3 class="font-semibold ms-2 text-md text-gray-200">{{ $todo['title'] }}</h3>
                    </div>
                    <hr class="mt-3 mb-4 border-slate-950">
                    <div class="flex flex-col">
                        <div>
                            <p class="text-sm">ID Todo: <span class="font-medium">{{ $todo['id'] }}</span></p>
                            <p class="text-sm">ID User: <span class="font-medium">{{ $todo['userId'] }}</span></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
