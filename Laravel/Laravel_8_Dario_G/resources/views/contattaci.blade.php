<x-layout>
<div class="container my-5">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <h2>Scrivici</h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-10 dflex justify-content-center">
            <form method="post" action="{{route('messaggioinviato')}}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nome</label>
                    <input name="name" type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check p-0">
                    <div class="form-floating">
                        <textarea name="message" type="text" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Scrivi</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</x-layout>