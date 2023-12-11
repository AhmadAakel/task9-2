<body>
    @extends('index')
    @section('title','students')
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