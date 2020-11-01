@extends ('layouts.app')

@section ('header')

    <div class="text-4xl mb-8">
        <h1>Add a Car</h1>
    </div>

@endsection

@section ('content')

    <form method="post" action="/cars/">

        @csrf

        <div class="flex flex-wrap">
            <div class="w-full">
                <label class="block" for="name">
                    Car Name
                </label>

                <input class="block w-2/5 @error ('name') border border-red-500 @enderror"
                       type="text" name="name" data-lpignore="true" autocomplete="off" placeholder="e.g. Octane" />

                @error ('name')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-1/2">
                <label class="block" for="email">
                    Rarity
                </label>
                <input class="block w-4/5 @error ('rarity') border border-red-500 @enderror"
                       type="text" name="rarity" data-lpignore="true"
                       autocomplete="off" placeholder="e.g. Import" />

                @error ('rarity')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <div class="w-1/2">
                <label class="block" for="phone">
                    Colour
                </label>
                <input class="block w-4/5 @error ('colour') border border-red-500 @enderror"
                       type="text" name="colour" data-lpignore="true"
                       autocomplete="off" placeholder="e.g. Sky Blue" />

                @error ('colour')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>
        </div>

        <div class="flex flex-wrap mt-4">
            <div class="w-full">
                <button class="nav-button" type="submit"><i class="fas fa-paw mr-2"></i>Add Car</button>
                <a href="/">
                    <button class="nav-button" type="button"><i class="fas fa-paw mr-2"></i>Cancel</button>
                </a>
            </div>
        </div>

    </form>

@endsection
