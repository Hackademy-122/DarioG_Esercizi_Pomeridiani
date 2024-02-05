<x-layout>
<div class="container my-5">
    <div class="row">
        <div class="col-12 justify-content-center text-center">
            <h1>Dettaglio articolo <span class="fst-italic">{{$article->name}}</span> </h1>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->name}}</td>
                    <td>{{$article->price}}</td>
                    <td><button class="btn btn-danger">Elimina</button></td>

                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>

</x-layout>