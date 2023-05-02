<x-layout>

 <x-navbarDark />
 
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
                    <a href="{{route('servizi')}}" class="btn btn-dark">Torna indietro</a>

            </div>
        </div>
    </div>

</x-layout>