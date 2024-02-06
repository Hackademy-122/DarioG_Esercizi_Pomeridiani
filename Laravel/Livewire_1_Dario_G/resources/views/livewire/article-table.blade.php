<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center mt-4">Tutti i nostri articoli</h1>
            </div>
        </div>
    </div>

    <div id="alert" class="modal" tabindex="-1"></div>
    <table class="table">
        <thead>
          <tr class="text-center">
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($articles as $article)
            
                <tr class="text-center">
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->name}}</td>
                <td>{{$article->price}}</td>
                <td>
                    <button class="btn btn-danger" wire:click="destroy({{$article->id}})">Elimina</button>
                    <a class="btn btn-warning" href="{{ route('edit', $article) }}">Modifica</a>
                </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Non ci sono articoli</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
