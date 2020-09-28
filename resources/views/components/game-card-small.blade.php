<div class="game flex">
    <a href="#">
        @if (isset($game['cover_url']))
            <img src="{{ $game['cover_url'] }}" alt="" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
        @endif
    </a>
    <div class="ml-4">
        <a href="#" class="hover:text-gray-300">{{ $game['name'] }}</a>
        <p class="text-gray-400 text-sm mt-1">{{$game['first_release_date'] }}</p>
    </div>
</div>
