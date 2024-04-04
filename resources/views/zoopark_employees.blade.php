@extends('main')

@section('title', 'Employees')

@section('content')
    <div class="container text-center">
        <div class="row mt-3 mb-3">
            <div class="col text-left">
                <b>Employee Name</b>
            </div>
            <div class="col">
                <b>Employee Age</b>
            </div>
            <div class="col">
                <b>Employee Home Address</b>
            </div>
            <div class="col">
                <b>Employee Date Start Work</b>
            </div>
        </div>
        @foreach($employees as $employee)
            @include('components.zooparkEmployeeRow', ['employee' => $employee])
        @endforeach
    </div>
@endsection
