@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/img/parasite.jpg" alt="parasite" class="w-72 md:w-96 mx-auto">
            <div class="mt-10 md:mt-0 md:ml-24">
                <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
                <div class="flex items-center flex-wrap text-gray-400 text-sm">
                    <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                            clip-rule="evenodd" />
                    </svg>

                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 1, 2020</span>
                    <span class="mx-2">|</span>
                    <span>Action, Thriller, Drama</span>
                </div>
                <p class="text-gray-300 mt-8">Parasite (Korean: 기생충; RR: Gisaengchung) is a 2019 South Korean black
                    comedy[8] thriller film directed by Bong Joon Ho, who co-wrote the film with Han Jin-won. The film,
                    starring Song Kang-ho, Lee Sun-kyun, Cho Yeo-jeong, Choi Woo-shik, Park So-dam, Jang Hye-jin, Park
                    Myung-hoon, and Lee Jung-eun, follows a poor family who infiltrate the life of a wealthy family. The
                    script is based on a play Bong wrote in 2013. He later adapted it into a 15-page film draft, and Han
                    split it into three different drafts. Bong said he was inspired by the 1960 Korean film The Housemaid
                    and by the Christine and Léa Papin incident in the 1930s. Filming began in May 2018 and finished that
                    September. The project included cinematographer Hong Kyung-pyo, film editor Yang Jin-mo, and composer
                    Jung Jae-il.</p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4 gap-8">
                        <div class="">
                            <div>Han Jin-Won</div>
                            <div class="text-sm text-gray-400">Screen Play</div>
                        </div>
                        <div class="">
                            <div>Han Jin-Won</div>
                            <div class="text-sm text-gray-400">Screen Play</div>
                        </div>
                        <div class="">
                            <div>Han Jin-Won</div>
                            <div class="text-sm text-gray-400">Screen Play</div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <button
                        class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150 hover:cursor-pointer">
                        <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
                        </svg>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>
        </div>

    </div>
    {{-- End movie info --}}

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach (range(0, 9) as $item)
                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/parasite.jpg" alt="parasite"
                                class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">Actor {{$item+1}}</a>
                            <div class="text-gray-400 text-sm">
                                Character {{$item+1}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection