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
  {{-- inizio header --}}
  <header class="container-fluid mb-5">
    
  </header>
  {{-- fine header --}}
    <h1 class="text-center fw-bold display-1 border-bottom border-dark"> Dettaglio servizi </h1>
    <div class="container">
        
        <div class="row m-5">
            <div class="col-12 col-lg-8 d-flex justify-content-around">
                <img src="{{ $servizio['img']}}" alt="" width="700" height="500">
                
            </div>
            <div class="col-12 col-lg-4 d-flex flex-column p-5">

                <h3 class="display 3 fw-bold">{{ $servizio['name'] }} </h3>
                    <p> Prezzo: {{ $servizio ['price'] }}</p>
                    <p> Dettagli {{ $servizio['details'] }}</p>
                    <a href="{{route('dettaglio-servizio', ['id' => $servizio['id']])}}" class="btn btn-dark">Torna indietro</a>

            </div>
        </div>
    </div>
 




    <script src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>