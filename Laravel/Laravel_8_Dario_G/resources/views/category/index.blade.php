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
      <table style="background-color: brown" class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">Action</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
      @foreach($categories as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td><a href="{{route('category_show', $item)}}">Dettaglio</a></td>
        <td><a href="{{route('category_edit', $item)}}">Modifica</a></td>

      </tr>
      @endforeach
      
    </tbody>
  </table>


    </div>
  </div>
</div>
  
  </x-layout>
