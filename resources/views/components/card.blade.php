<div class="col-12 col-md-3 my-3">
        <div class="card bg-black">
            <a href="{{route('perfume.show', $perfume)}}">
            <img src="{{Storage::url($perfume->img)}}" class="card-img-top" alt="{{$perfume->name}}"></a>
            <div class="card-body bg-black">
                <h5 class="card-title text-white">{{ $perfume->name}}</h5>
                <p class="card-text text-white ">{{Str::limit($perfume->description, 50)}}</p>
                <p class="d-flex justify-content-around">
                    <span class="text-white">
                        <strong>Sesso: </strong> {{$perfume->genre}}
                    </span>
                    <span class="text-white">
                        @foreach ($perfume->amounts as $amount)
                        <strong>Quantità: </strong>{{$amount->value}}
                        @endforeach
                    </span>
                </p>
                    <div class="d-flex justify-content-around">
                        @auth
                        <a href="{{route('perfume.edit', $perfume)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{route('perfume.delete', $perfume)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                        @endauth
                               {{-- <td class="d-flex justify-content-around">
                                    <a href="{{ route('movie.edit', $movie)}}" class="btn btn-warning">Modifica</a>
                                    <form action="{{ route('movie.delete', $movie)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                    </form>
                                </td> --}}

                    </div>
            </div>
        </div>
</div>