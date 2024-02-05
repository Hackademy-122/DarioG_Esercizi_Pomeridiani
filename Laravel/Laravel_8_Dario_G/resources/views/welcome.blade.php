<x-layout>
<div class="container">
    <div class="row justify-content-center text-center mt-5">
        <h1 class="text-danger fs-1">HOME</h1>
    </div>
</div>

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

</x-layout>