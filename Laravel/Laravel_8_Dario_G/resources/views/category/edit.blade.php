<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="text-center display-3">modifica categoria, {{$category->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{route('category_update', $category)}}" method="POST">
                    @method('put')
                    @csrf
                    
                    
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Nome categoria</label>
                        <input name="name" type="text" class="form-control" id="inputName" aria-describedby="nameHelp" value="{{$category->name}}">

                    
                    <button type="submit" class="btn btn-primary">modifica categoria</button>
                </form>
                
            </div>
        </div>
    </div>
</x-layout>