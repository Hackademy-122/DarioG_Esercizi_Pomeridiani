<x-layout>
<div class="container my-5">
  <div class="rov">
    <div class="col-12 text-center">
      <h1>Tutte le categorie</h1>
    </div>
  </div>
</div>

<div class="container my-5">
  <div class="rov">
    <div class="col-12">
      <table class="table">
    <thead>
      @if (session('message'))
    <div class="alert alert-danger text-center">
        {{ session('message') }}
    </div>
    @endif
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
        @auth
        <th scope="col">Action</th>
        <th scope="col">Action</th>
        @endauth

      </tr>
    </thead>
    <tbody>
      @foreach($categories as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td id="prova">{{$item->name}}</td>
        <td><a href="{{route('category_show', $item)}}">Dettaglio</a></td>
        @auth
        <td><a href="{{route('category_edit', $item)}}">Modifica</a></td>
        <td><a href="#" onclick="event.preventDefault(); document.querySelector('#form-delete-{{$item->id}}').submit()">Elimina</a><form id="form-delete-{{$item->id}}" action="{{route('category_delete', $item)}}" method="POST" class="d-none">
        @endauth
          @method('delete')
          @csrf</form>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>


    </div>
  </div>
</div>
  
  </x-layout>
