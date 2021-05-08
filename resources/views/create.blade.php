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
        <div class="col-lg-10 offset-lg-4 ">
            <h1 class="ml-lg-5">Add Your Todo </h1>
            @if($toDo->id)
                <form action="{{route('update',$toDo->id)}}" method="post">
                    @csrf
                    @method('patch')
                    @else
                        <form action="{{route('store')}}" method="post">
                            @csrf
                            @method("put")
                            @endif
                            <div class="card shadow mb-4 col-6">
                                <div class="form-group">
                                    <label for="Title">Title:</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter title"
                                           value="{{$toDo->title}}" id="title">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea type="text" class="form-control" name="description"
                                              placeholder="Enter disctiption" id="des">{{$toDo->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Location">Location:</label>
                                    <input type="text" class="form-control" name="location" placeholder="Enter Location"
                                           value="{{$toDo->location}}" id="location">
                                </div>
                                <div class="form-group">
                                    <label for="Time">Time:</label>
                                    <input type="text" class="form-control" name='time' placeholder=" Time"
                                           value="{{$toDo->time}}" id="time">
                                </div>
                                <div class="form-group">
                                    <label for="Start Time">Start Time:</label>
                                    <input type="text" class="form-control" name='start_time' placeholder="Enter Time"
                                           value="{{$toDo->start_time}}" id="start time">
                                </div>
                                <div class="form-group">
                                    <label for="End Time">End Time:</label>
                                    <input type="text" class="form-control" name="end_time" placeholder="Enter Time"
                                           value="{{$toDo->end_time}}" id="end time">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn  btn-block btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
        </div>
    </div>
</div>
</body>
</html>
