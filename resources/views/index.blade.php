@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach (range(0, 9) as $item)
                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>

                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb {{$item+1}}, 2020</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>  
        {{-- End of popular movies --}}

        <div class="now-playing py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach (range(0, 9) as $item)
                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>

                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb {{$item+1}}, 2020</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection