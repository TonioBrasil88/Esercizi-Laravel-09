<x-layout>

    <div class="container">
        <div class="row my-5">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="">Crea il tuo Profumino</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5 d-flex justify-content-center">
            <div class="col-12 col-md-6 ">
                <form method="post" action="{{ route('perfume.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome: </label>
                        <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group my-4">
                        <label for="genre">Sex: </label>
                        <select name="genre" class="form-select @error('genre') is-invalid @enderror">
                            <option value="M">Maschio</option>
                            <option value="F">Femmina</option>
                        </select>
                        @error('genre')
                            <div class="invalid-feedback">{{$message}}</div>
                         @enderror
                    </div>

                    <div class="mb-3">
                      <label for="img" class="form-label">Immagine Profumo</label>
                      <input type="file" name="img" class="form-control"> 
                      @error('img')
                      <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                    </div>

                    <div class="mb-3">
                        <label for="img_1" class="form-label">Immagine Cover</label>
                        <input type="file" name="img_1" class="form-control"> 
                        @error('img_1')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="brand">Marca: </label>
                        <input type="text" name="brand" id="brand" class="form-control">
                    </div>

                    <div class="form-group my-4">
                        <label for="amounts" class="form-label">Quantità:</label>
                        <select name="amounts[]" class="form-select" multiple>
                            @foreach ($amounts as $amount)
                                <option value="{{$amount->id}}">{{$amount->value}}</option>
                            @endforeach
                        </select>
                        @error('amounts')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group my-4">
                        <label for="description">Description: </label>
                        <textarea rows="8" class="form-control" id="description" name="description"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
</x-layout>
