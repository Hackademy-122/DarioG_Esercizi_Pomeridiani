<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="p-0">
                Tutti gli utenti
            </h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row text-center">
        @foreach ($utenti as $utente)
            <p class="">{{ $utente->name }}</p>
        @endforeach
    </div>
</div>

</x-layout>