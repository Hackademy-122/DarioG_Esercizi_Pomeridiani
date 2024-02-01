<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                Tutti gli utenti
            </h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach ($utenti as $utente)
            <p>{{ $utente->name }}</p>
        @endforeach
    </div>
</div>

</x-layout>