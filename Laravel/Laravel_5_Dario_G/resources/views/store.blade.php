<x-layout>

<div class="container">
    <div class="row">
        <div class="col-12 text-center my-5">
            <h2>Ecco i nostri articoli preesistenti ed aggiunti dagli utenti</h2>
        </div>
    </div>
</div>
    
<div class="container">
    <div class="row">
    
        @foreach ($prodotti as $item)
            <div  data-aos="fade-down" data-aos-duration="2000" data-aos-delay="500" class="col-12 col-md-3 d-flex justify-content-center mb-5">
                <x-cards
                type="{{ $item['type'] }}"
                where="{{ $item['where'] }}"
                price="{{ $item['price'] }}"
                link="{{ route('dettagli', ['id' => $item['id']]) }}"
                />
            </div>
        @endforeach
        
        @foreach($prodotti2 as $item)
            <div data-aos="fade-down" data-aos-duration="2000" data-aos-delay="1000" class="col-12 col-md-3 d-flex justify-content-center mb-5">
                <x-cards
                type="{{ $item['type'] }}"
                where="{{ $item['where'] }}"
                price="{{ $item['price'] }}"
                link="{{ route ('dettagli', ['id' => $item['id']]) }}"
                />
            </div>
        @endforeach
    
        @foreach ($articles as $article)
        <div data-aos="fade-down" data-aos-duration="2000" data-aos-delay="1500" class="col-12 col-md-3 d-flex justify-content-center mb-5">
            <div class="card" style="width: 18rem;">
                <div class="card-body d-flex row align-items-between">
                    <img src="{{Storage::url($article->img)}}" alt="">
                    <h5 class="card-title">{{$article['brand']}}</h5>
                    <h6 class="card-subtitle ☺mb-2 text-body-secondary mb-3">€ {{$article['price']}}</h6>
                    <p class="card-text">{{$article['where']}}</p>
                    <a href="{{ route ('dettagli', ['id' => $article['id']]) }}" class="btn btn-primary">Card link</a>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
</div>
    
</x-layout>>
