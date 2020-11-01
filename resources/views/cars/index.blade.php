@extends('layouts.app')

@section ('header')
    <div class="flex justify-between">
        <div class="text-4xl mb-8">
            <h1>Cars</h1>
        </div>
        <div>
            <div class="mr-2">
                <a href="/cars/"><i class="mr-2"></i>Add a Car</a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="grid grid-cols-3 gap-6 sm:px-6">

            @foreach($cars as $c)
                <div class="bg-blue-300 px-4 py-4 border rounded border-gray-500">

                    <p class="mt-2 bg-blue hover:bg-blue-600 text-gray-800 py-2 px-4 border border-gray-400 rounded shadow">
                        <a href="{{ $c -> path }}">
                            {{ $c -> name }}
                        </a>
                    </p>

                    <div class="flex justify-center">
                    <p class="flex-none mt-2 bg-blue hover:bg-blue-600 text-gray-800 py-2 px-4 border border-gray-400 rounded shadow">
                        <a href="{{ $c -> path.('/edit')}}"> Edit Car
                            <i class="fas fa-edit"></i>
                        </a>
                    </p>

                    <form method="post" action="{{ $c -> path }}">
                        @method ('DELETE')
                        @csrf
                        <p class="flex-none mt-2 bg-blue hover:bg-blue-600 text-gray-800 py-2 px-4 border border-gray-400 rounded shadow">
                        <button type="submit">
                            <i>Delete Car</i>
                        </button>
                        </p>
                    </form>
                    </div>
                </div>
            @endforeach
        </div>

    </main>
@endsection
