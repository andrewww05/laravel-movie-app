<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * List of movies
     * @throws ConnectionException
     */
    public function index()
    {
        $movieDbAuthToken = config('services.tmdb.token');
        $imageConfig = "https://image.tmdb.org/t/p/w500";

        $popularMoviesResponse = Http::withToken($movieDbAuthToken)
            ->get('https://api.themoviedb.org/3/movie/popular');

        $nowPlayingResponse = Http::withToken($movieDbAuthToken)
            ->get('https://api.themoviedb.org/3/movie/now_playing?language=en-US&page=1');

        $genresResponse = Http::withToken($movieDbAuthToken)
            ->get('https://api.themoviedb.org/3/genre/movie/list');

        if ($popularMoviesResponse->failed() || $genresResponse->failed()) {
            abort(500, 'Failed to fetch popularMoviesData from TMDB');
        }

        $popularMoviesData = $popularMoviesResponse->json();
        $nowPlayingData = $nowPlayingResponse->json();
        $genresData = $genresResponse->json()['genres'];

        $popularMoviesList = $popularMoviesData['results'];
        $nowPlayingList = $nowPlayingData['results'];
        $genres = collect($genresData)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

        return view('index', [
            'popularMovies' => $popularMoviesList,
            'nowPlaying' => $nowPlayingList,
            'genres' => $genres,
            'imageConfig' => $imageConfig
        ]);
    }

    /**
     * Movie page
     */
    public function movie_page($id)
    {
        $movieDbAuthToken = config('services.tmdb.token');

        $movie = Http::withToken($movieDbAuthToken)
            ->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')
            ->json();

        return view('show', [
            'movie' => $movie
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
