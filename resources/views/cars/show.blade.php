@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="md:w-1/3 md:mx-auto">

            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <h1 class="class=text-xl font-bold mb-2">
                    Car name: {{ $cars -> name }}
                </h1>

                <p class="mt-2">
                    Rarity: {{$cars -> rarity}}
                </p>

                <p class="mt-2">
                    Colour: {{ $cars -> colour}}
                </p>

                <p class="mt-4">
                    <a href="{{ $cars -> path.('/edit')}}"> Edit Car
                        <i class="fas fa-edit"></i>
                    </a>
                </p>

                <form class="mt-4" method="post" action="{{ $cars -> path }}">
                    @method ('DELETE')
                    @csrf
                    <button type="submit">
                        <i>Delete Car</i>
                    </button>
                </form>
            </div>
        </div>
    </main>
@endsection
