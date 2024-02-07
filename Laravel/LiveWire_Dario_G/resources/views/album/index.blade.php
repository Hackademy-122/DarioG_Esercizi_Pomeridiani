<x-layout>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Tutti gli Album</h1>
            </div>
        </div>
    </div>

    @if(session('message'))
    <h6 class="alert alert-success">
        {{ session('message') }}
    </h6>
    @endif
    
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th class="text-danger" scope="col">Id</th>
                            <th class="text-danger" scope="col">Titolo</th>
                            <th class="text-danger" scope="col">Artista</th>
                            <th class="text-danger" scope="col">Anno</th>
                            <th class="text-danger" scope="col">Info</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($albums as $item)
                        <x-table
                        id="{{$item['id']}}"
                        artist="{{$item['artist']}}"
                        title="{{$item['title']}}"
                        year="{{$item['year']}}"
                        link="{{route('show', $item)}}"
                        />
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-layout>

