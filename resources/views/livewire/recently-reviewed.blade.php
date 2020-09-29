<div wire:init="loadRecentlyReviewed" class="recently-reviewed w-full lg:w-3/4 lg:mr-32">
    <h2 class="text-blue-500 uppercase tracking-width font-semibold">Recently Reviewed</h2>
    <div class="recently-reviewed-container space-y-12 mt-8">

        @forelse ($recentlyReviewed as $game)
        <div class="game bg-gray-800 rounded-lg flex p-6">
            <div class="relative flex-none">
                <a href="#">
                    <img src="{{ $game['cover_url'] }}" alt="" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                </a>
                @if (array_key_exists('rating', $game))
                    <div id="{{ 'review_' . $game['slug'] }}" class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"  style="bottom: -20px; right:-20px;">

                    </div>
                @endif
            </div>
            <div class="ml-12">
                <a href="#" class="text-lg font-semibold leading-tight hover:text-gray-400 mt-8">{{ $game['name'] }}</a>
                <p class="text-gray-400 mt-1">
                    {{ $game['platforms'] }}
                </p>
                <p class="pt-4 hidden lg:block">{{ $game['summary'] }}</p>
            </div>
        </div>

        @empty
        @foreach (range(1,3) as $game)
            <div class="game bg-gray-800 rounded-lg flex p-6">
                <div class="relative flex-none">
                    <div class="w-44 h-56 bg-gray-700"></div>
                </div>
                <div class="ml-12">
                    <div class="text-transparent bg-gray-600 text-lg">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                    <div class="text-transparent bg-gray-600 mt-2 inline-block">PS4, PC, Switch, X-box</div>
                    <div class="mt-8">
                        <div class="bg-gray-600 text-transparent mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, soluta.</div>
                        <div class="bg-gray-600 text-transparent mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, soluta.</div>
                        <div class="bg-gray-600 text-transparent mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, soluta.</div>
                    </div>
                </div>
            </div>
        @endforeach
        @endforelse

    </div>
</div> <!-- End recently-reviewed -->
@push('scripts')
    @include('partials._rating', [
        'event' => 'recentlyReviewedGameAdded'
    ])
@endpush
