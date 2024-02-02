<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="text-center display-3">modifica oggetto, {{$article->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{route('update', $article)}}" method="POST">
                    @method('put')
                    @csrf
                    
                    
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Nome </label>
                        <input name="name" type="text" class="form-control" id="inputName" aria-describedby="nameHelp" value="{{$article->name}}">
                    </div>
                        
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Prezzo</label>
                        <input name="price" type="text" class="form-control" id="inputNumber" aria-describedby="nameHelp" value="{{$article->price}}">
                    </div>

                    <div class="mb-3">
                        <label for="inputName" class="form-label">Foto</label>
                        <input name="img" type="file" class="form-control" id="inputName" aria-describedby="nameHelp">
                    </div>

                    <img src="{{Storage::url($article->img)}}" alt="">

                    <div class="my-3">
                        <button type="submit" class="btn btn-primary">Modifica</button>
                    </div>
                    
                </form>
                
            </div>
        </div>
    </div>
</x-layout>