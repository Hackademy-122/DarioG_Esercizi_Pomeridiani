<x-layout>

    <div class="container my-5">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h1 class="text-danger">Tutti Gli Articoli</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
            </div>
        </div>
    </div>

    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12">

                    <livewire:article-table/>

            </div>
        </div>
    </div>
    
</x-layout>
