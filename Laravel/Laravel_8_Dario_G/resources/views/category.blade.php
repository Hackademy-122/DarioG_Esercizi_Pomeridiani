
<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="text-center display-3">Inserisci Categoria</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                {{-- errore --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- categoria creata --}}
                <div class="container">
                    @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                
                
                </div>
                
                <form action="{{route('category_store')}}" method="POST">
                    
                    @csrf
                    
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Nome Categoria</label>
                        <input name="category" type="text" class="form-control" id="inputName" aria-describedby="nameHelp">
                    </div>


                    
                    <button type="submit" class="btn btn-primary">Crea</button>
                </form>
                
            </div>
        </div>
    </div>
</x-layout>