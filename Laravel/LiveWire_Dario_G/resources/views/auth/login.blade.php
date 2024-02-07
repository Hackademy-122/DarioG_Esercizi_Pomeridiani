<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Login</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-10">
                <form method="post" action="{{route('login')}}">
                @csrf
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
        
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>