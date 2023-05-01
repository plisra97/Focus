<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Focus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
  <body>
   {{-- inizio navbar --}}
 
  <nav class="navbar navbar-expand-lg my-5 bg-dark p-5 ">
    <div class="container-fluid  d-flex justify-content-center align-items-center">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-center align-items-center" id="navbarNav">
        <ul class="navbar-nav  ">
            <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="{{route('homepage')}}">Home Page</a>
            </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{route('chi-siamo')}}">Chi Siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('servizi')}}">Servizi</a>
          </li>
          
          
        </ul>
      </div>
    </div>
  </nav>
   {{-- fine navbar --}}
  
    {{-- inizio card servizi --}}
    <h1 class="text-center fw-bold display-1 border-bottom border-dark"> I nostri servizi </h1>
    <div class="container my-5 pt-5">
          <div class="row justify-content-center align-items-center">
            @foreach ($servizi as $servizio)
                
           
              <div class="col-12 col-lg-4 ml-1 mb-3">
                  <div class="card ">
                      <img src="{{ $servizio['img']}}" class="card-img-top" alt="...">
                      <div class="card-body">
                      <h5 class="card-title">{{ $servizio['name'] }}</h5>
                      {{-- <p class="card-text"> {{ $servizio['details'] }} </p> --}}
                      <a href="{{route('dettaglio-servizio', ['id' => $servizio['id']])}}" class="btn btn-dark">Scopri di più</a>
                      </div>
                  </div>
              </div>
              
            @endforeach
          </div>  
      </div>  
    {{-- fine card servizi --}}
 




    <script src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>