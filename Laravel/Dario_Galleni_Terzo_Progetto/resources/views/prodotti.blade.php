<x-layout>


<div class="container">
    <div class="row mt-5">
        <div class="col-11 text-center">
            <h2>Ecco alcune delle nostre tavole del noto produttore {{$tradeMarks}}</h2>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        @foreach ($prodotti as $singoloProdotto)
            <div class="col-12 col-md-6 d-flex justify-content-center mb-5">
                <div class="card p-1 shadow" style="width: 18rem;">
                    <div class="card-body text-center">
                    <h4 class="card-title mb-5">{{$singoloProdotto['type']}}</h4>
                    <p>{{$singoloProdotto['where']}}</p>
                    <p class="mt-5">{{$singoloProdotto['consigli']}}</p>
                    
                    {{-- <a href="{{ route('details', ['identificativo' => $utente['id']]) }}" class="btn btn-success">Dettaglio</a> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</x-layout>