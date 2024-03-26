@extends('main')

@section('title', 'Animals')

@section('content')
    <div class="container text-center">
        <div class="row mt-3 mb-3">
            <div class="col text-left">
                <b>Animal Name</b>
            </div>
            <div class="col">
                <b>Animal Age</b>
            </div>
            <div class="col">
                <b>Animal Birthdate</b>
            </div>
        </div>
        @foreach($animals as $animal)
            @include('components.zooparkAnimalRow', ['animals' => $animal])
        @endforeach
    </div>
@endsection
