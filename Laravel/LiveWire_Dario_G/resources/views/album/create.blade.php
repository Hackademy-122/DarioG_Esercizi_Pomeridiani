<x-layout>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h1>Inserisci Album</h1>
        </div>
        <div class="col-10">
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
        
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-10">
            <livewire:create-form />
        </div>
    </div>
</div>




</x-layout>