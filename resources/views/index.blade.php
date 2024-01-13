<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="/create" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Your Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" placeholder="Enter Full Name">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Enter Your Age</label>
            <input name="age" type="number" class="form-control" id="exampleInputPassword1"
                placeholder="Enter Age">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>

    <br>
    <hr><br>

    <table border="2" class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $t)
                <tr>
                    <td>{{ $t->name }}</td>
                    <td>{{ $t->age }}</td>
                    <td>
                        <button type="button" class="btn btn-primary">
                            <a href="/edit/{{ $t->id }}">Edit</a>
                        </button>
                        <button type="button" class="btn btn-danger">
                            <a href="{{ route('teacher.destroy', $t->id) }}">Delete</a>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
