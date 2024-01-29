<x-layout>

<div class="container my-5">
    <div class="row d-flex justify-content-center">
        <div class="col-12">
            <h1>Grazie! Hai appena aggiunto il tuo articolo. Di seguito i dettagli:</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-5">
            <h3>Marca: {{$brand}}</h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-5">
            <h3>Prezzo: Euro {{$price}}</h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-5">
            <h3>Dove: {{$where}}</h3>
        </div>
    </div>
</div>





<div class="container my-5">
    <div class="row">
        <div class="col-6">
            <a href="{{route('store')}}" class="btn btn-primary">Vedi tutti gli articoli</a>
        </div>
    </div>
</div>
</x-layout>
