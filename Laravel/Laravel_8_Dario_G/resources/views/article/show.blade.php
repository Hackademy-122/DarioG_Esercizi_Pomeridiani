<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Dettaglio articolo</h1>
                <p class="fs-1">{{$article->name}}</p>
                <p class="fs-1">Euro {{$article->price}}</p>
                <p>Inserito da: {{$article->user->name}}</p>
                <P>Contattallo al: {{$article->user->email}}</P>
                <img src="{{Storage::url($article->img)}}" alt="">
            </div>
        </div>
    </div>
</x-layout>  