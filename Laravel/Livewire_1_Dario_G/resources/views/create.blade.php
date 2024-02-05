<x-layout>
<div class="container my-5">
    <div class="row justify-content-center text-center">
        <div class="col-12">
            <h1>Inserisci Annuncio</h1>
        </div>
        
        <div class="col-12">
            @if (session('message'))
                <div class="alert alert-success">
                {{ session('message') }}
                </div>
            @endif
        </div>
    
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <livewire:create-form/>
        </div>
    </div>
</div>
</x-layout>