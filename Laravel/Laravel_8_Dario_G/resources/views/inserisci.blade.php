<x-layout>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-10 text-center my-5">
            <h1>Inserisci il tuo articolo</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-10 my-5">
            {{-- questo, messo qui, mette l' errore sopra tutti i campi --}}
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <form method="POST" action="{{route('annuncioinserito')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Marca</label>
                    <input name="brand" type="text" class="form-control"  aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Prezzo</label>
                    <input name="price" type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Dove Andare</label>
                    <input name="where" type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label class="form-label">Immagine</label>
                    <input name="img" type="file" class="form-control">
                </div>
                
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>




</x-layout>