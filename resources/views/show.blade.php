@extends('layouts.app')

@section('content')

<div class="container m-auto px-4">
    <div class="game-details border-b border-gray-800 pb-8 flex">
        <div class="flex-none">
            <img src="{{ $game['cover_big'] }}" alt="Cover">
        </div>
        <div class="ml-12 mr-64">
            <h2 class="font-semibold text-4xl">{{ $game['name'] }}</h2>
            <div class="text-gray-400">
                <span>{{ $game['genres']}}</span>
                &middot;
                <span>{{ $game['involved_companies'] }}</span>
                &middot;
                <span>
                   {{ $game['platforms'] }}
                </span>
            </div>

            <div class="flex flex-wrap items-center mt-8">
                <div class="flex items-center mr-12">
                    <div class="w-16 h-16 bg-gray-800 rounded-full">
                        <div class="text-xs font-semibold flex justify-center items-center h-full">
                            {{ $game['rating'] }}
                        </div>
                    </div>
                    <div class="ml-4 text-xs">Member<br>Score</div>
                </div>
                <div class="flex items-center mr-12">
                    <div class="w-16 h-16 bg-gray-800 rounded-full">
                        <div class="text-xs font-semibold flex justify-center items-center h-full">
                            {{ $game['aggregated_rating'] }}
                        </div>
                    </div>
                    <div class="ml-4 text-xs">Critic<br>Score</div>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="bg-gray-800 w-8 h-8 flex items-center justify-center rounded-full">
                        <a href="" class="hover:text-gray-400">1</a>
                    </div>
                    <div class="bg-gray-800 w-8 h-8 flex items-center justify-center rounded-full">
                        <a href="" class="hover:text-gray-400">2</a>
                    </div>
                    <div class="bg-gray-800 w-8 h-8 flex items-center justify-center rounded-full">
                        <a href="" class="hover:text-gray-400">3</a>
                    </div>
                    <div class="bg-gray-800 w-8 h-8 flex items-center justify-center rounded-full">
                        <a href="" class="hover:text-gray-400">4</a>
                    </div>
                </div>
            </div>

            <p class="mt-8">{{ $game['summary'] }}</p>

            <a href="https://youtube.com/watch/{{ $game['videos'][0]['video_id'] }}" class="mt-12 inline-flex bg-blue-500 font-semibold p-4 rounded hover:bg-blue-600 transition ease-in duration-150">Play Trailer</a>

        </div>
    </div> <!-- End game-details -->

    <div class="images mt-8 pb-8 border-b border-gray-800">
        <h2 class="font-semibold text-blue-500 uppercase tracking-wide mb-8">Images</h2>
        <div class="grid grid-cols-3 gap-12">
            @foreach ($game['screenshots'] as $screenshot)
            <div>
                <a href="{{ $screenshot['screenshot_huge'] }}">
                    <img src="{{ $screenshot['screenshot_big'] }}" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150 w-full">
                </a>
            </div>
            @endforeach
        </div>

    </div> <!-- End images-->

    <div class="similar-games-container mt-8 pb-8">
        <h2 class="font-semibold text-blue-500 uppercase tracking-wide">Similar Games</h2>

        <div class="similar-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12">

            @foreach ($game['similar_games'] as $game)
               <x-game-card :game="$game"/>
            @endforeach

        </div> <!-- End similar-games -->

    </div> <!-- End similar-games-container -->

</div>

@endsection
