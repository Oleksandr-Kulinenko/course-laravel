@foreach($foods as $food)
    <h2>{{ $food->name }}</h2>
    <ul>
        @foreach($food->animals as $animal)
            <li>{{ $animal->name }}</li>
        @endforeach
    </ul>
@endforeach
