<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

{{-- class ini untuk background belakanganya blur --}}
<body class="bg-secondary">
  {{-- div ini untuk pembungkus keseluruhan content --}}
  <div class="bg-white container-sm col-6 border my-3 rounded px-5 py-3 pb-5">
    
    {{-- ini adalah kata kata header di paling atas --}}
    <h1>Halo!! {{ Auth::user()->name }}</h1> {{-- ini sudah di logic klo yang login user atau admin --}}
    @if (Auth::user()->role == 'admin')
    <div>Selamat datang di halaman admin</div>
    @endif
    @if (Auth::user()->role == 'user')
    <div>Selamat datang di halaman user</div>
    @endif

    {{-- ini adalah button logout --}}
    <div><a href="/logout" class="btn btn-sm btn-secondary">Logout >></a></div>
    
    {{-- ini adalah list secondary --}}
    <div class="card mt-3">
      <ul class="list-group list-group-flush">
        @if (Auth::user()->role == 'admin') {{-- ini sudah di logic klo yang login user atau admin --}}
        <li class="list-group-item">Menu Admin</li>
        @endif
        @if (Auth::user()->role == 'user')
        <li class="list-group-item">Menu User</li>
        @endif
      </ul>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>