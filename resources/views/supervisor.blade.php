
<body>
    @extends('index')
    @section('title','supervisors')
    @php
    $supervisors = ["mohamad" , "qusai" , "asala"];
    @endphp
    @section('super')
    @foreach ($supervisors as $supervisor)
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{$supervisor}}</li>
        </ul>
      </div>
      @endforeach
      @endsection
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>