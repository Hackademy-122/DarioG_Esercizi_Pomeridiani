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
        <a href="{{route('show', $item)}}" class="btn btn-primary">Dettagli</a>
            @auth
        <a href="{{route('edit', $item)}}" class="btn btn-warning">Modifica</a>
        <a class="btn btn-danger" href="#" onclick="event.preventDefault(); document.querySelector('#form-delete-{{$item->id}}').submit()">Elimina</a><form id="form-delete-{{$item->id}}" action="{{route('delete', $item)}}" method="POST" class="d-none">
            @method('delete')
            @csrf</form>
            @endauth

    </div>
</div>
@endforeach

    </div>
</div>
</x-layout>