@extends('guest')

@section('content')
    <div class="bg-blue-900 py-2 px-2">
        <h1 class="text-white text-3xl font-normal">Book Detail</h1>
    </div>

    <div class="flex flex-col mt-4">
        <img src="{{ $book->image }}" alt="book" class="h-full w-full">
        <div class="flex flex-col space-y-2 mt-4">
            <h1 class="text-xl font-semibold">Title : {{ $book->title }}</h1>
            <h1 class="text-xl font-semibold">Author : {{ $book->author }}</h1>
            <h1 class="text-xl font-semibold">Publisher : {{ $book->name }}</h1>
            <h1 class="text-xl font-semibold">Year : {{ $book->year }}</h1>
            <h1 class="text-xl font-semibold">Synopsis : </h1>
            <p class="text-lg">{{ $book->synopsis }}</p>
        </div>
    </div>
@endsection
