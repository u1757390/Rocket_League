@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="md:w-1/3 md:mx-auto">

            <div class="bg-blue-300 w-64 px-4 py-4 border rounded border-gray-500">

                <img src="{{ $cars -> img() }}" >

                <h1 class="class=text-xl mb-2 mt-2">
                    Car name: {{ $cars -> name }}
                </h1>

                <p class="mt-2">
                    Rarity: {{$cars -> rarity}}
                </p>

                <p class="mt-2">
                    Colour: {{ $cars -> colour}}
                </p>

                <div class="flex justify-center mt-4">
                    <a href="{{ $cars -> path.('/edit')}}" class="mr-6 bg-blue hover:bg-blue-600 text-gray-800 py-2 px-4 border border-gray-400 rounded shadow">
                        Edit Car
                    </a>

                    <form method="post" action="{{ $cars -> path }}">
                        @method ('DELETE')
                        @csrf
                        <button type="submit" class=" bg-blue hover:bg-blue-600 text-gray-800 py-2 px-4 border border-gray-400 rounded shadow">
                            <i>Delete Car</i>
                        </button>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </main>
@endsection
