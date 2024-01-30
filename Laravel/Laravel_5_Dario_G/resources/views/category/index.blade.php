<x-layout>
  
    @foreach($categories as $item)
    <p>{{$item->name}}</p>
    <a href="{{route('category_show', $item)}}">Premi</a>
    @endforeach
    
  </x-layout>