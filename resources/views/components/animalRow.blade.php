<div class="row mt-3 mb-3 text-left">
    <div class="col">
        {{ $animal->name }}
    </div>
    <div class="col">
        <a href="{{ route('animal.info', ['animal' => $animal]) }}">Link</a>
    </div>
</div>
