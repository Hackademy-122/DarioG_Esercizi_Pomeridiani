<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card mt-5">
                    <img src="{{Storage::url($album->img)}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                    <h2 class="card-title">{{$album->title}}</h2>
                    <p class="card-text">{{$album->artist}}</p>
                    <p class="card-text">{{$album->year}}</p>
                    <p>inserito da: {{$album->user->name}} </p>
                    @foreach ($album->genres as $genre)
                            <p>{{$genre->name}}</p>    
                        @endforeach
                        <div class="row">
                            <div class="col-6 text-center">
                                <a href="{{route('edit', $album)}}" class="btn btn-warning">Modifica</a>
                            </div>
                            <div class="col-6 text-center">
                                <a class="btn btn-danger" href="#" onclick="event.preventDefault(); document.querySelector('#form-delete-{{$album->id}}').submit()">Elimina</a><form id="form-delete-{{$album->id}}" action="{{route('delete', $album)}}" method="POST" class="d-none">
                                    @method('delete')
                                    @csrf</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>