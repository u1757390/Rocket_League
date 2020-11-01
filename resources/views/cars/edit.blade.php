@extends ('layouts.app')

@section ('header')

    <div class="text-4xl mt-4 mb-8">
        <h1>Edit Details for {{ $cars -> name }}</h1>
    </div>

@endsection

@section ('content')

    <form method="post" action="{{ $cars -> path }}">

        @method ('PATCH')

        @csrf

        <div class="flex flex-wrap">
            <div class="w-1/3">
                <label class="block mb-2" for="name">
                    Car Name
                </label>

                <input type class="block w-3/5 @error ('name') border border-red-500 @enderror"
                       type="text" name="name" data-lpignore="true"
                       autocomplete="off" value="{{ $cars -> name }}" />

                @error ('name')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <div class="w-1/2">
                <label class="block mb-2" for="rarity">
                    Rarity
                </label>
                <input class="block w-2/5 @error ('rarity') border border-red-500 @enderror"
                       type="text" name="rarity" data-lpignore="true"
                       autocomplete="off" value="{{ $cars -> rarity }}" />

                @error ('rarity')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>

        </div>

        <div class="flex flex-wrap">
            <div class="w-1/2">
                <label class="block mb-2 mt-2" for="colour">
                    Colour
                </label>
                <input class="block w-2/5 @error ('colour') border border-red-500 @enderror"
                       type="text" name="colour" data-lpignore="true"
                       autocomplete="off" value="{{ $cars -> colour }}" />

                @error ('colour')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>
        </div>
        <div class="flex flex-wrap mt-8">
            <div class="w-full">
                <button type="submit" class="mr-2 hover:bg-blue-300 text-gray-800 py-2 px-4 border border-gray-400 rounded shadow">
                    Update Details
                </button>
                <a href="{{ $cars -> path }}">
                    <button type="button" class="hover:bg-blue-300 text-gray-800 py-2 px-4 border border-gray-400 rounded shadow">
                        Cancel
                    </button>
                </a>
            </div>
        </div>

    </form>

@endsection
