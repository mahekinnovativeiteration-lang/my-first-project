<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
    @csrf
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Course: <input type="text" name="course"><br>  
    <button type="submit">Save</button>        
    </form>
</body>
</html>