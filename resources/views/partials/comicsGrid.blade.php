@php

    $comics = config('comics');

@endphp

<div>
    <div class='btn-category-container col-12'>
        <button type="button" class='btn-category'>CURRENT SERIES</button>
    </div>

    <div class="album col-12">
        <div class="container">
            <div class="row justify-content-center text-center pt-5">
                @foreach ($comics as $comic)
                <div class="col-2">
                    <x-card>
                        <x-slot:imgSrc>{{ $comic['thumb'] }}</x-slot>
                        <x-slot:title>{{ $comic['title'] }}</x-slot>
                    </x-card>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class='btn-load-container col-12'>
        <button type="button" class='btnLoad'>LOAD MORE</button>
    </div>

</div>