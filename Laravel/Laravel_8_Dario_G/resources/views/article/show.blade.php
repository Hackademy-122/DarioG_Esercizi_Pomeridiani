<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h1>Dettaglio articolo</h1>
                <p class="fs-1">{{$article->name}}</p>
                <p class="fs-1">Euro {{$article->price}}</p>
                <p>Inserito da: {{$article->user->name}}</p>
                <P>Contattallo al: {{$article->user->email}}</P>
                <p>Categorie:</p>
                        @foreach ($article->categories as $category)
                            <p>{{$category->category}}</p>    
                        @endforeach
                <img class="border border-primary p-3" src="{{Storage::url($article->img)}}" alt="" height="400px">
                
            </div>
            <div class="row my-5 d-flex justify-content-center">
            @auth
            <a href="{{route('edit', $article)}}" class="btn btn-warning">Modifica</a>
            <a class="btn btn-danger" href="#" onclick="event.preventDefault(); document.querySelector('#form-delete-{{$article->id}}').submit()">Elimina</a><form id="form-delete-{{$article->id}}" action="{{route('delete', $article)}}" method="POST" class="d-none">
                @method('delete')
                @csrf</form>
                @endauth
            </div>
        </div>
    </div>
</x-layout>  