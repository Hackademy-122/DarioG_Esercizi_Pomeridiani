<x-layout>

<div class="container">
    <div class="row">
        <div class="col-12 text-center my-5">
            <h2>Ecco li nostri snowboard</h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
    
        @foreach ($prodotti as $item)
        
            <div class="col-12 col-md-3 d-flex justify-content-center mb-5">
                <x-cards
                type="{{ $item['type'] }}"
                where="{{ $item['where'] }}"
                price="{{ $item['price'] }}"
                link="{{ route('dettagli', ['id' => $item['id']]) }}"
                />
            </div>
        @endforeach

    
    </div>
</div>

</x-layout>
