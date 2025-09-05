
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" >
    <style>
        body{
            background-color:rgb(210, 229, 235);
        }

    </style>
<body>
    <h1 class="text-center mt-2">All Students</h1>
    <a href="{{ route('students.create') }}">Add Student</a>
    <table class="table table-hover text-center table-striped border-primary table-bordered">
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Action</th>
    </tr>

    @foreach ($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->course }}</td>

        <td>
            <a class="btn btn-primary" href="{{ route('students.edit',$student->id)}}">Edit</a>
            <form action="{{ route('students.destroy',$student->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit" onclick="return confirm('Delete?')">Delete</button>
            </form>
        </td>

    </tr>     
    @endforeach
    
    </table>
</body>
</html>
