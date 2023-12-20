@extends('layouts.app')

@section('title', 'All Books')


@section('content')

    <ul>
        @foreach ($books as $book)
            <li>{{ $book->title }}</li>
        @endforeach
    </ul>

@endsection
