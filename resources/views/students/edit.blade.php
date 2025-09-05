<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" >
    <style>
        .container{
        margin-top:30px;
        height: 350px;
        width:350px;
        background-color: beige;
        display: flex;
        align-items: center;
        border-radius: 9px;
    }
    input{
        width: 100%;
        margin-top:9px;
    }
    </style>
</head>
<body>
    <h1 class="text-center mt-2">Edit Student</h1>
    <div class="container">
    <form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')
    Name: <input type="text" name="name" value="{{ $student->name }}"><br>
    Email: <input type="email" name="email" value="{{ $student->email }}"><br>
    Course: <input type="text" name="course" value="{{ $student->course }}"><br>
    <button class="btn btn-danger" type="submit">Update</button>
    </form>
    </div>
</body>
</html>