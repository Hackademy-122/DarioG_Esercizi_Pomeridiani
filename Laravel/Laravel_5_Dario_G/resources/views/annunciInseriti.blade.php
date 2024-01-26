<x-layout>

    <div class="div">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5">
                <h1>Solo annunci Inseriti dagli utenti</h1>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            @foreach ($articoli as $item)
            
            <div class="col-12 col-md-3 d-flex justify-content-center mb-5 my-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body d-flex row align-items-between">
                        <img src="{{Storage::url($item->img)}}" alt="">
                        <h5 class="card-title">{{$item['brand']}}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary mb-3">€ {{$item['price']}}</h6>
                        <p class="card-text">{{$item['where']}}</p>
                        <a href="{{ route ('dettagli', ['id' => $item['id']]) }}" class="btn btn-primary">Card link</a>
                    </div>
                </div>
            </div>
            
            @endforeach
            
        </div>
    </div>
</x-layout>