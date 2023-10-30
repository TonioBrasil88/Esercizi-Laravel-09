<x-layout>
    <div class="container">
        <div class="card mt-5 border-0">
            <div class="row g-0">
                <div class="col-md-8">
                    <img src="{{Storage::url($perfume->img_1)}}" class="img-fluid rounded-start"
                     alt="{{$perfume->title}}">
                </div>
                <div class="col-md-4">
                    <div class="card-body d-flex flex-column justify-content-between align-items-center h-100">
                    <h2 class="card-title">{!! $perfume->name !!}</h2>
                    <h4 class="card-text">Marca: {!! $perfume->brand !!}</h4>
                    @foreach ($perfume->amounts as $amount)
                    <p class="card-text">{!! $amount->value !!} ml</p>
                    @endforeach
                    <p class="card-text">Sesso: {!! $perfume->genre !!}</p>
                    <p class="card-text">Descrizione: {!! $perfume->description !!}</p>
                    <p class="card-text"><small class="text-body-secondary">created by: {{$perfume->user->name}} on {{$perfume->user->created_at->diffForHumans()}}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
