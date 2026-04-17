<x-layout>
    <h2>Lista dei libri nel DB</h2>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="container mt-5">
        <a href="{{ route('books.create') }}" class="btn btn-primary">Crea nuovo Libro</a>
        <hr>
        <ul>
            @foreach ($books as $book)
                <li>
                    <a href="{{ route('books.show', ['book' => $book]) }}">{{ $book->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>

</x-layout>
