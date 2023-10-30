<x-layout>

    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h1>La mia lista {{Auth::user()->name}}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-1">
            <div class="col-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome: </th>
                        <th scope="col">Genere</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Quantità</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach (Auth::user()->perfumes as $perfume)
                            <tr>
                                <th scope="row">{{$perfume->id}}</th>
                                <td>{{$perfume->name}}</td>
                                <td>{{$perfume->genre}}</td>
                                <td>{{$perfume->brand}}</td>
                                @foreach ($perfume->amounts as $amount)
                                <td class="d-flex justify-content-around">{!! $amount->value !!} ml</td>
                                @endforeach
                                {{-- <td>{{$movie->amount}}</td> //  for each --}} 
                                {{-- <td class="d-flex justify-content-around">
                                    <a href="{{ route('movie.edit', $movie)}}" class="btn btn-warning">Modifica</a>
                                    <form action="{{ route('movie.delete', $movie)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                    </form>
                                </td> --}}
                            </tr>
                        @endforeach    
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

</x-layout>