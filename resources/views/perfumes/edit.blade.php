<x-layout>
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h3 class="">Modifica Profumino</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col-12 my-5">

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <p>{{ session('message') }}</p>
                    </div>
                @endif
                <form method="post" action="{{ route('perfume.update', $perfume) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Nome: </label>
                        <input type="text" name="name" value="{{old('name') ?? $perfume->name }}"
                            class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="genre">Sex: </label>
                        <select name="genre" value={{old('genre') ?? $perfume->genre}} class="form-select @error('genre') is-invalid @enderror">
                            <option value="M">Maschio</option>
                            <option value="F">Femmina</option>
                        </select>
                        @error('genre')
                            <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="img" class="form-label">Immagine Profumo</label>
                        <div class="d-flex">
                            <input type="file" name="img" class="form-control @error('img') is-invalid @enderror">
                            <img src="{{ Storage::url($perfume->img) }}" class="img-fluid h-25" style="width:50px";>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="img_1" class="form-label">Immagine Cover</label>
                        <div class="d-flex">
                            <input type="file" name="img_1" class="form-control @error('img_1') is-invalid @enderror">
                            <img src="{{ Storage::url($perfume->img_1) }}" class="img-fluid h-25" style="width:50px";>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="brand">Marca: </label>
                        <input type="text" name="brand" value="{{ old('brand') ?? $perfume->brand }}"
                            class="form-control @error('brand') is-invalid @enderror">
                        @error('brand')
                            <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>

                    <div class="form-group my-4">
                        <label for="amounts" class="form-label">Quantità:</label>
                        <select name="amounts[]" class="form-select" multiple>
                            @foreach ($amounts as $amount)
                                <option value="{{ $amount->id }}"
                                    @if ($perfume->amounts->contains($amount->id))
                                    selected
                                    @endif>{{ $amount->value }}</option>
                            @endforeach
                        </select>
                        {{-- @error('amounts')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> --}}

                    <div class="mb-3">
                        <label for="description">Description: </label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="8">{{$perfume->description}}</textarea>
                        @error('description')
                            <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>

                </form>
            </div>
        </div>
    </div>



    </div>
    </div>
    </body>

</x-layout>
