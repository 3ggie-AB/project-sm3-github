<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project Semester 3</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class=" bg-stone-900 text-white">
    <div class="container d-flex mx-auto justify-center text-center max-h-max">
        <h2 class=" drop-shadow-[0px_0px_4px_rgba(255,0,0,0.75)] text-3xl font-semibold tracking-wider my-8">Tabel
            Users
        </h2>
        <div class="overflow-x-auto drop-shadow-[6px_6px_4px_rgba(0,0,0,0.75)]">
            <table class=" min-w-full rounded-lg">
                <thead class="bg-red-600">
                    <tr class=" text-center">
                        <th class="py-3 px-6 text-xs font-medium uppercase tracking-wider">
                            Complete
                        </th>
                        <th class="py-3 px-6 text-xs font-medium uppercase tracking-wider">
                            User ID</th>
                        <th class="py-3 px-6 text-xs font-medium uppercase tracking-wider">
                            Tugas
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-red-900 divide-x-2 divide-red-800 text-sm">
                    @foreach ($todos as $todo)
                        <tr>
                            <td class="py-4 px-6 ">
                                <input type="checkbox" @if ($todo['completed']) checked @endif
                                    name="check{{ $todo['id'] }}" id="check{{ $todo['id'] }}">
                            </td>
                            <td class="py-4 px-6 ">{{ $todo['userId'] }}</td>
                            <td class="py-4 px-6  ">{{ $todo['title'] }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
