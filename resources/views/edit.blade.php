<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class=" flex flex-col items-center justify-center w-full h-[100vh] bg-[#111827]">
        <div class="m-3 p-5 rounded-lg shadow-lg bg-[#232C3B]">

            <form action="/update/{{ $teacherEdit->id }}" method="post">
                @csrf
                <div class="grid grid-flow-row grid-cols-1 gap-3">

                    <div>
                        <label for="exampleInputEmail1" class="text-[whitesmoke] font-mono font-bold">Enter Student
                            Name</label>
                        <input type="text" name="name" value="{{ $teacherEdit->name }}"
                            class="focus:outline-[#10AA50] border py-3 rounded-md placeholder:px-2 px-2 lg:my-0 md:my-0 w-full"
                            placeholder="Enter Full Name">
                    </div>
                    <div>
                        <label for="exampleInputPassword1" class="text-[whitesmoke] font-mono font-bold">Enter Student
                            Age</label>
                        <input type="number" name="age" value="{{ $teacherEdit->age }}"
                            class="focus:outline-[#10AA50] border py-3 rounded-md placeholder:px-2 px-2 lg:my-0 md:my-0 w-full"
                            placeholder="Enter Your Age">
                    </div>
                </div>
                <button type="submit"
                    class=" mt-3 flex items-center justify-center gap-1 bg-[#2E7D32] px-4 py-2 rounded-lg font-['sf pro'] tracking-wider hover:scale-105 font-[800] hover:bg-[#1B5E20] hover:transition-all hover:ease-in uppercase">
                    Save Changes
                </button>
            </form>


        </div>
    </div>
</body>

</html>
