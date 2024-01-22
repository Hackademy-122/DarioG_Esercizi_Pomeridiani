<x-layout>
{{-- titolo --}}

    <div id="container_prodotti" class="container mb-5">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h2 class="my-0">Ecco alcune delle nostre tavole <span id="prova">{{$tradeMarks}}</span> </h2>
            </div>
        </div>
    </div>

{{-- fine titolo --}}

{{-- accordion --}}
<div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Marchi
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Default radio
                                    </label>
                                </div>
                                @foreach($prodotti as $singoloProdotto)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault{{$loop->index + 2}}" data-type="{{$singoloProdotto['type']}}">
                                        <label class="form-check-label" for="flexRadioDefault{{$loop->index + 2}}">
                                            {{$singoloProdotto['type']}}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{{-- fine accordion --}}

{{-- cards --}}
<div class="col-10">
    <div class="row justify-content-around">
        @foreach($prodotti as $singoloProdotto)
            <div class="col-12 col-md-4">
                <div class="product {{$singoloProdotto['type']}}">
                    <x-cards
                        pippo="{{ $singoloProdotto['type'] }}"
                        price="{{ $singoloProdotto['price'] }}"
                        pluto="{{ $singoloProdotto['where'] }}"
                        paperino="{{ $singoloProdotto['consigli'] }}"
                        minnie="{{ route('dettagli', ['variabile' => $singoloProdotto['id']]) }}"
                    />
                </div>
            </div>
        @endforeach
    </div>
</div>

</div>
</div>
{{-- fine cards --}}
</x-layout>

<x-footer />