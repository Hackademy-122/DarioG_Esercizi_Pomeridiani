<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Modifica {{$album->title}}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-10">
                <livewire:edit-form :pippo="$album"/>
            </div>
        </div>
    </div>

</x-layout>