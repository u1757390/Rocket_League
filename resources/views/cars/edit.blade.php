@extends ('layouts.app')

@section ('header')

    <div class="text-4xl mb-8">
        <h1>Edit Details for {{ $cars -> name }}</h1>
    </div>

@endsection

@section ('content')

    <form method="post" action="{{ $cars -> path }}">

        @method ('PATCH')

        @csrf

        <div class="flex flex-wrap">
            <div class="w-1/3">
                <label class="block" for="name">
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
                <label class="block" for="email">
                    Rarity
                </label>
                <input class="block w-2/5 @error ('rarity') border border-red-500 @enderror"
                       type="text" name="email" data-lpignore="true"
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
                <label class="block" for="breed">
                    Colour
                </label>
                <input class="block w-2/5 @error ('colour') border border-red-500 @enderror"
                       type="text" name="phone" data-lpignore="true"
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
                <button class="nav-button" type="submit"><i class="fas fa-paw mr-2"></i>Update Details</button>
                <a href="/">
                    <button class="nav-button" type="button"><i class="fas fa-paw mr-2"></i>Cancel</button>
                </a>
            </div>
        </div>

    </form>

@endsection
