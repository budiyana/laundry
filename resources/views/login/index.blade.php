<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('/template/css/style.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <main class="form-signin w-100 m-auto">
    <form action="{{url('login/proses')}}" method="post">
      @csrf
      {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
      <h1 align="middle" class="h1 mb-3 fw-normal" >Login</h1>
    
      <div class="form-floating">
        <input type="username" class="form-control" name="username"
        id="floatingInput" placeholder="input Username">
        <label for="floatingInput">Username</label>
        @error('username')
        <div class="alert alert-danger mt-2">{{ $message}} </div>
      @enderror
      </div>
      
      <div class="form-floating">
        <input type="password" class="form-control" name="password"
        id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
        @error('password')
        <div class="alert alert-danger mt-2">{{ $message}} </div>
      @enderror
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
