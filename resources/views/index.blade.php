<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,700,1,200" />
    @vite('resources/css/app.css')
    <title>Laravel To-Do App - Add Teachers</title>
</head>

<body>
    <style>
        .tooltip-container:hover .tooltip {
            opacity: 1;
            visibility: visible;
        }
    </style>



    <div class=" flex flex-col items-center justify-center w-full h-[100vh] bg-[#111827]">

        <div class="flex w-[50%] gap-5 justify-end">
            <button
                class=" mt-3 flex items-center justify-center gap-1 bg-[#D32F2F] px-4 py-2 rounded-lg font-['sf pro'] tracking-wider hover:-translate-x-2 font-[800] hover:bg-[#C62828] hover:transition-all hover:ease-in uppercase"
                onclick="window.location.href='{{ route('welcome.index') }}'">
                <span class="material-symbols-rounded">
                    home
                </span>
                Cancel
            </button>
        </div>
        <div class="m-3 p-5 rounded-lg shadow-lg bg-[#232C3B]">
            <form action="/create" method="post">
                @csrf
                <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 gap-3">

                    <div>
                        <label for="exampleInputEmail1" class="text-[whitesmoke] font-mono font-bold">Enter Student
                            Name</label>
                        <input type="text" name="name"
                            class="focus:outline-[#10AA50] border py-3 rounded-md placeholder:px-2 px-2 lg:my-0 md:my-0 w-full"
                            placeholder="Enter Full Name">
                    </div>
                    <div>
                        <label for="exampleInputPassword1" class="text-[whitesmoke] font-mono font-bold">Enter Student
                            Age</label>
                        <input type="number" name="age"
                            class="focus:outline-[#10AA50] border py-3 rounded-md placeholder:px-2 px-2 lg:my-0 md:my-0 w-full"
                            placeholder="Enter Your Age">
                    </div>
                </div>
                <button type="submit"
                    class=" mt-3 flex items-center justify-center gap-1 bg-[#2E7D32] px-4 py-2 rounded-lg font-['sf pro'] tracking-wider hover:scale-105 font-[800] hover:bg-[#1B5E20] hover:transition-all hover:ease-in uppercase">
                    Submit
                </button>
            </form>

            <br>
            <hr>
            <br>

            <table border="2" class="w-full text-[#E5E7EB] py-2 border-2 border-[#4A5568] rounded-xl">
                <thead class="">
                    <tr>
                        <th class="border-2 border-[#4A5568] bg-[#4C556A] font-bold uppercase text-left" scope="col">
                            Name
                        </th>
                        <th class="border-2 border-[#4A5568] bg-[#4C556A] font-bold uppercase text-left" scope="col">
                            Age</th>
                        <th class="border-2 border-[#4A5568] bg-[#4C556A] font-bold uppercase text-left w-28"
                            scope="col">
                            Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $t)
                        <tr>
                            <td class="bg-[#2D3748]">{{ $t->name }}</td>
                            <td class="bg-[#2D3748]">{{ $t->age }}</td>
                            <td class="bg-[#2D3748]">
                                <a href="/edit/{{ $t->id }}" class="tooltip-container relative inline-block ">
                                    <span title="Edit"
                                        class="text-[#DEDEDE] bg-[#0088FE] p-1 rounded-full hover:bg-[#0088FEd0] hover:transition-all hover:ease-in material-symbols-rounded">
                                        Edit
                                    </span>
                                    <div class="tooltip bg-gray-800 text-white text-xs p-2 rounded mt-2 hidden">
                                        Edit
                                    </div>
                                </a>

                                <a href="{{ route('teacher.destroy', $t->id) }}"
                                    class="tooltip-container relative inline-block">
                                    <span title="Delete"
                                        class="text-[#DEDEDE] bg-[#D32F2F] p-1 rounded-full hover:bg-[#D32F2Fd0] hover:transition-all hover:ease-in material-symbols-rounded">
                                        delete_forever
                                    </span>
                                    <div class="tooltip bg-gray-800 text-white text-xs p-2 rounded mt-2 hidden">
                                        Delete
                                    </div>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</body>

</html>
