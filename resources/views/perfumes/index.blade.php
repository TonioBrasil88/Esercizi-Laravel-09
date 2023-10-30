<x-layout>

    <H1>Lista Profumino</H1>

<div class="container">
    <div class="row my-5">
        @foreach ($perfumes as $perfume)
            <x-card :perfume="$perfume"/>
        @endforeach
    </div>
</div>


</x-layout>