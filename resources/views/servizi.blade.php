<x-layout>
  <x-navbarDark />
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
</x-layout>