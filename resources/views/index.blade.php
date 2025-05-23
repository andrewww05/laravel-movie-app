@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres" :imageConfig="$imageConfig" />
                @endforeach
            </div>
        </div>
        {{-- End of popular movies --}}

        <div class="now-playing py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($nowPlaying as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres" :imageConfig="$imageConfig" />
                @endforeach
            </div>
        </div>
    </div>
@endsection
