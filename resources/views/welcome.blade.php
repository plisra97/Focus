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
 
  <nav class="navbar navbar-expand-lg my-5 ">
    <div class="container-fluid  d-flex justify-content-center align-items-center">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-center align-items-center" id="navbarNav">
        <ul class="navbar-nav  ">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home Page</a>
            </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('chi-siamo')}}">Chi Siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('servizi')}}">Servizi</a>
          </li>
          
          
        </ul>
      </div>
    </div>
  </nav>
   {{-- fine navbar --}}
  {{-- inizio header --}}
  <header class="container-fluid mb-5">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/media/baby.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/media/weddy.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/media/weddy1.jpg" class="d-block w-100 " alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Precedente</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Successivo</span>
        </button>
      </div>
  </header>
  {{-- fine header --}}
  {{-- inizio card servizi --}}
  <h1 class="text-center fw-bold display-1"> Focus </h1>
  <div class="container my-5 pt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-4 ml-1 mb-3">
                <div class="card ">
                    <img src="/media/wedding.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Wedding</h5>
                    <p class="card-text">Per immortalare al meglio il giorno del sì, è fondamentale catturare ogni dettaglio e imprimerlo per sempre in una foto. Si inizia dalle piccole cose, come i preparativi, la vestizione, fino all’emo..</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 ml-1 mb-3">   
                <div class="card">
                    <img src="/media/newborn.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">NewBorn</h5>
                    <p class="card-text">Immortalare momenti che passano così velocemente con la crescita. Immergersi in una realtà magica, fatta di tenerezza e delicatezza, in attesa di un sorriso, una smorfia o solamente il dolce sonno del neonato.</p>
                    </div>
                </div>
            </div>    
            <div class="col-12 col-lg-4 mb-3 ">
                <div class="card">
                    <img src="/media/party.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Party</h5>
                    <p class="card-text">I 18 anni sono un momento fondamentale di transizione all’età adulta e quel giorno merita un’attenzione speciale affinchè i ricordi si conservino vividi nel tempo.</p>
                    </div>
                </div>
                
            </div>
        </div> 
        <div class="row m-5 ">
          <div class="col-12 d-flex justify-content-center align-items-center">
            <a href="{{route('servizi')}}" class="btn btn-dark">Scopri di più</a>
          </div>    
        </div> 
    </div>  
  {{-- fine card servizi --}}




    <script src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>