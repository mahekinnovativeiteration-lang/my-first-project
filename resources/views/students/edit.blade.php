<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')
    Name: <input type="text" name="name" value="{{ $student->name }}"><br>
    Email: <input type="email" name="email" value="{{ $student->email }}"><br>
    Course: <input type="text" name="course" value="{{ $student->course }}"><br>
    <button type="submit">Update</button>
    </form>
</body>
</html>