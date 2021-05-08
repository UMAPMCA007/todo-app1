<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="row ">
        <a class="btn btn-success col-2 offset-5 mt-5" href="{{route('create')}}">Create New Todo</a>
        <h1 class="col-6 offset-5 mt-4"> Todo List </h1>
        <div class="col-lg-10 offset-lg-1 ">
            <table class="table table-bordered">
                <thead>
                <tr>

                    <th>Done</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Time</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                </tr>
                </thead>

                <tbody>

                @foreach($toDo as $toDos)

                    <tr>
                        <td>
                            <form action="{{route('done',$toDos->id)}}" method="post" id="form-{{$toDos->id}}">
                                @csrf
                                <input type="checkbox" @if($toDos->status=="active") checked
                                       @endif  onchange="document.getElementById('form-{{$toDos->id}}').submit()">
                            </form>
                        </td>
                        <th>{{$toDos->title}}</th>
                        <td>{{$toDos->description}}</td>
                        <td>{{$toDos->location}}</td>
                        <td>{{$toDos->time}}</td>
                        <td>{{$toDos->start_time}}</td>
                        <td>{{$toDos->end_time}}</td>
                        <td><a class="btn btn-primary" href="{{route('edit',$toDos->id)}}">Edit</a></td>
                        <td><a class="btn btn-danger" href="{{route('delete',$toDos->id)}}">Delete</a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
