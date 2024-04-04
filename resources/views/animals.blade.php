@extends('main')

@section('title', 'Animals')

@section('content')
    <div class="container text-center">
        <div class="row mt-3 mb-3">
            <div class="col text-left">
                <b>Animal Name</b>
            </div>
            <div class="col">
                <b>Link to Animal Info</b>
            </div>
        </div>
        @foreach($animals as $animal)
            @include('components.animalRow', ['animals' => $animal])
        @endforeach
    </div>
@endsection
