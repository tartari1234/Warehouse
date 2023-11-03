<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    {{-- ini div pembungkus keseluruhan form login --}}
    <div class="container py-5">
        {{-- ini div untuk mengatur lebar dan padding form --}}
        <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>Login</h1>
        @if($errors->any())
        {{-- div ini adalah alert klo sebagai pembungkus list --}}
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                {{-- ini List Item klo user belum isi Form  --}}
                {{-- ini {{ $item }} itu adalah kondisi --}}
                    <li> {{ $item }} </li> 
                @endforeach
            </ul>
        </div>
        @endif
        {{-- ini adalah form untuk kalian modifikasi lagi --}}
        {{-- ini adalah value untuk mengambil old email dari data --}}
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ old('email') }}" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div> 
    </div>
</body>
</html>