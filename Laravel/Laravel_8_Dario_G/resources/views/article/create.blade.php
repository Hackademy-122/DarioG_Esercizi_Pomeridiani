
    <x-layout>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
                    <h1 class="text-center display-3">Inserisci oggetto</h1>
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
                    
                    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                        
                        @csrf
                        
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Nome</label>
                            <input name="name" type="text" class="form-control" id="inputName" aria-describedby="nameHelp">
                        </div>
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Prezzo</label>
                            <input name="price" type="text" class="form-control" id="inputName" aria-describedby="nameHelp">
                        </div>
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Foto</label>
                            <input name="img" type="file" class="form-control" id="inputName" aria-describedby="nameHelp">
                        </div>
    
                        
                        <button type="submit" class="btn btn-primary">Crea</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </x-layout>
    
