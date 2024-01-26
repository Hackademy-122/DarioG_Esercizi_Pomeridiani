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
                {{-- il form scatenerà una rotta di tipo post, cioè reindirizzerà ad una pagina non con get ma con post --}}
            <form method="POST" action="{{route('annuncioinserito')}}">
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
                
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>




</x-layout>