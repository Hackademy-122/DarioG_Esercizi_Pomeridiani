<x-layout>
<h1>Home</h1>
<div class="container">
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif


</div>
</x-layout>