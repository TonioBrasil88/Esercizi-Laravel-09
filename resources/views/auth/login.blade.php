<x-layout>
    <div class="container-">
        <div class="row my-5">
            <div class="col-12">
                <h1>Accesso</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row my-5">
            <div class= "col-4">
                <form method="post" action="{{route('login')}}">
                    @csrf
            
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>