@extends('main')

@section('title', 'Employees')

@section('content')
    <div class="container text-center">
        <div class="row mt-3 mb-3">
            <div class="col text-left">
                <b>Food Name</b>
            </div>
        </div>
        @foreach($foods as $food)
            @include('components.zooparkFoodRow', ['food' => $food])
        @endforeach
    </div>
@endsection
