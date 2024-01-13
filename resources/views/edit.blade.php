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
    <form action="/update/{{ $teacherEdit->id }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Your Name</label>
            <input name="name" value="{{ $teacherEdit->name }}" type="text" class="form-control"
                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Full Name">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Enter Your Age</label>
            <input name="age" value="{{ $teacherEdit->age }}" type="number" class="form-control"
                id="exampleInputPassword1" placeholder="Enter Age">
        </div>
        <button type="submit" class="bg-[yellow]">
            Submit
        </button>
    </form>
</body>

</html>
