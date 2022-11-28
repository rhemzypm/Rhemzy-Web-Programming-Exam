@extends('guest')

@section('content')
    <div class="bg-blue-900 py-2 px-2">
        <h1 class="text-white text-3xl font-normal">Publisher</h1>
    </div>

    <div class="flex flex-row flex-wrap justify-around mt-4">
        @foreach ($publishers as $publisher)
            <div class="flex flex-col w-1/5 border-[1px] border-gray-300 mb-8 mx-5 shadow-md shadow-black">
                <img src="{{ $publisher->image }}" alt="publisher" class="h-full">
                <div class="p-4 space-y-1">
                    <h1 class="text-xl">{{ $publisher->name }}</h1>
                    <p>by</p>
                    <h2 class="text-lg">{{ $publisher->address }}</h2>
                    <button
                        class="w-1/4 bg-blue-600 hover:bg-blue-800 transition-all duration-300 ease-in-out py-2 rounded-lg">
                        <a href="{{ route('publisher-detail', $publisher->id) }}" class="text-white">
                            Detail
                        </a>
                    </button>
                </div>
            </div>
        @endforeach
    </div>
@endsection
