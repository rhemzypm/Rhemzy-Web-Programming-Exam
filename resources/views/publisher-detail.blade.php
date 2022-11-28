@extends('guest')

@section('content')
    <div class="bg-gray-500 py-2 px-2">
        <h1 class="text-white text-3xl font-normal">{{ $publisher->name }}</h1>
        <h1 class="text-white text-3xl font-normal">Address - {{ $publisher->address }}</h1>
        <h1 class="text-white text-3xl font-normal">Phone - {{ $publisher->phone }}</h1>
        <h1 class="text-white text-3xl font-normal">Email - {{ $publisher->email }}</h1>
    </div>

    <div class="flex flex-row flex-wrap justify-around mt-4">
        @foreach ($books as $book)
            <div class="flex flex-col w-1/5 border-[1px] border-gray-300 mb-8 mx-5 shadow-md shadow-black">
                <img src="{{ $book->image }}" alt="book" class="h-full">
                <div class="p-4 space-y-1">
                    <h1 class="text-xl">{{ $book->title }}</h1>
                    <p>by</p>
                    <h2 class="text-lg">{{ $book->author }}</h2>
                    <button
                        class="w-1/4 bg-blue-600 hover:bg-blue-800 transition-all duration-300 ease-in-out py-2 rounded-lg">
                        <a href="{{ route('book-detail', $book->id) }}" class="text-white">
                            Detail
                        </a>
                    </button>
                </div>
            </div>
        @endforeach
    </div>
@endsection
