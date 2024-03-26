@extends('main')

@section('title', 'Animal Foods')

@section('content')
    <div class="container text-center">
        <div class="row mt-3 mb-3">
            <div class="col text-left">
                <b>Animal Name</b>
            </div>
            <div class="col">
                <b>Food</b>
            </div>
        </div>
        @foreach($animalFoodData as $food)
            @include('components.foodRow', ['food' => $food], ['animal' => $animal])
        @endforeach
    </div>
@endsection
