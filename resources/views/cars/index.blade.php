@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">

            @foreach($cars as $c)
                <div class="bg-blue-300 mb-4 px-4 py-4 border rounded border-gray-500">

                    <a href="{{ $c -> path }}">{{ $c -> name }}</a>

                    <p class="crud-button mt-4">
                        <a href="{{ $c -> path.('/edit')}}"> Edit Car
                            <i class="fas fa-edit"></i>
                        </a>
                    </p>

                    <form class="mt-4" method="post" action="{{ $c -> path }}">
                        @method ('DELETE')
                        @csrf
                        <button type="submit">
                            <i>Delete Car</i>
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
    </main>
@endsection
