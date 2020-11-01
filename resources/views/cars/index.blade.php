@extends('layouts.app')

@section ('header')
        <div>

            <div class="sm:mx-auto mt-6 w-2/12">
                <a href="/cars/" class="hover:bg-blue-300 text-gray-800 py-2 px-4 border border-gray-400 rounded shadow" >
                    Add Another Car
                </a>
            </div>
        </div>
    </div>

@endsection

@section('content')
    <main class="lg:container sm:mx-auto sm:mt-10">
        <div class="grid grid-cols-4 gap-6 sm:px-6">

            @foreach($cars as $c)

                <div class="bg-blue-300 w-64 px-4 py-4 border rounded border-gray-500">

                    <img src="{{ $c -> img() }}" >

                    <div class="flex justify-center mt-2">
                        <a href="{{ $c -> path }}" class="text-center bg-blue hover:bg-blue-600 text-gray-800 py-2 px-4 border border-gray-400 rounded shadow">
                            {{ $c -> name }}
                        </a>
                    </div>

                    <div class="flex justify-center mt-2">
                        <a href="{{ $c -> path.('/edit')}}" class="mr-2 bg-blue hover:bg-blue-600 text-gray-800 py-2 px-4 border border-gray-400 rounded shadow">
                            Edit Car
                        </a>

                        <form method="post" action="{{ $c -> path }}">
                            @method ('DELETE')
                            @csrf
                            <button type="submit" class="bg-blue hover:bg-blue-600 text-gray-800 py-2 px-4 border border-gray-400 rounded shadow">
                                <i>Delete Car</i>
                            </button>
                        </form>
                    </div>
                </div>

            @endforeach

        </div>
    </main>
@endsection
