<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('/') }}assets/fontAwesome/css/all.min.css " rel="stylesheet"  >

</head>
<body>
    <!-- NAV -->
    <nav class="navbar  navbar-expand-lg navbar-light bg-secondary">
  <div class="container">
    <a class="navbar-brand" href="#">VORTEX</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ( request ()-> segment ('1') ==''||request ()-> segment ('1') =='home') ? 'active' : ''}}" aria-current="page" href="{{url('home')}}">
          <i class="fas fa-home"></i> Home
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{request ()-> segment ('1') =='hunter' ? 'active' : ''}}" aria-current="page" href="{{url('hunter')}}">
          <i class="fas fa-hat-cowboy"></i> Hunter
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- END NAV -->
    <!-- CONTENT -->
    <div class="mt-2">
    <div class="container">
    @yield('content')
    </div>
    </div>
    <!-- END CONTENT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="{{ url('/js/bootstrap.bundle.min.js') }}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>