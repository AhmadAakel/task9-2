<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">    
    <title>Document</title>
</head>
<body>
    @extends('index')
    @php
    $students = ["ahmad" , "mohamad" , "duha" , "hadeel" , "nor alden"];
    @endphp
    @section('stud')
    @foreach ($students as $student)
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{$student}}</li>
        </ul>
      </div>
      @endforeach
      @endsection
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>