<!DOCTYPE html>
<html>
    <head>
      
    </head>
    <body>
      @include('inc.navbar')  
      <div class ="container">
        @yield('content')
      </div>
    
      @include('inc.navbar')  
      <div class ="container">
        @yield('content')
      </div>
      <nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Never expand</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample01">
        <ul class="navbar-nav me-auto mb-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service">Service</a>
          </li>
        </ul>
        <form role="search">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>

    </body>
</html>
