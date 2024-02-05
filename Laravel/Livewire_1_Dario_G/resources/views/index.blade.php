<x-layout>

    <div class="container my-5">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h1 class="text-danger">Tutti Gli Articoli</h1>
            </div>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center text-center">
            @foreach ($articles as $item)
                <div class="col-12 col-md-3 mb-5">
                    <x-cards
                        name="{{$item['name']}}"
                        price="{{$item['price']}}"
                        link="{{route('show', $item)}}"
                    />
                </div>
            @endforeach
        </div>
    </div>
    
</x-layout>