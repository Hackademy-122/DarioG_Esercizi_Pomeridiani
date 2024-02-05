<x-layout>
<div class="container">
    <div class="row">
        
        @foreach ($articles as $item)
        
<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($item->img)}}" alt="">
    <div class="card-body">
        <h5 class="card-title">{{$item->name}}</h5>
        <p>Inserito da: {{$item->user->name}}</p>
        <P>Contattallo al: {{$item->user->email}}</P>
        <p class="card-text">Euro {{$item->price}}</p>
        <div class="container d-flex justify-content-center">
            <a href="{{route('show', $item)}}" class="btn btn-primary">Dettagli</a>
        </div>
        

    </div>
</div>
@endforeach

    </div>
</div>
</x-layout>