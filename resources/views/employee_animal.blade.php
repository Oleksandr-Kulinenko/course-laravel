@foreach($employees as $employee)
    <h2>{{ $employee->name }}</h2>
    <ul>
        @foreach($employee->animals as $animal)
            <li>{{ $animal->name }}</li>
        @endforeach
    </ul>
@endforeach
