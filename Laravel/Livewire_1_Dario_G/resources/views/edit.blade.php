<x-layout>

    <div class="container my-5">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h1 class="text-danger">Modifica Articolo: {{$article->name}}</h1>
            </div>
        </div>
    </div>
    



    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12">

                <livewire:edit-form :pippo="$article"/>

            </div>
        </div>
    </div>
    
</x-layout>
