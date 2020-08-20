@extends('layouts.app')

@section('content')

<div class="container m-auto px-4">
    <div class="game-details border-b border-gray-800 pb-8 flex">
        <div class="flex-none">
            <img src="/ff7.jpg" alt="Cover">
        </div>
        <div class="ml-12 mr-64">
            <h2 class="font-semibold text-4xl">Final Fantacy VII Remake</h2>
            <div class="text-gray-400">
                <span>Role, RPG</span>
                &middot;
                <span>Square Enix</span>
                &middot;
                <span>Playstation 4</span>
            </div>

            <div class="flex flex-wrap items-center mt-8">
                <div class="flex items-center mr-12">
                    <div class="w-16 h-16 bg-gray-800 rounded-full">
                        <div class="text-xs font-semibold flex justify-center items-center h-full">80%</div>
                    </div>
                    <div class="ml-4 text-xs">Member<br>Score</div>
                </div>
                <div class="flex items-center mr-12">
                    <div class="w-16 h-16 bg-gray-800 rounded-full">
                        <div class="text-xs font-semibold flex justify-center items-center h-full">96%</div>
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

            <p class="mt-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, nemo. Voluptas similique molestiae odit aut accusantium! Eveniet porro numquam quae voluptatibus incidunt impedit id soluta praesentium harum, illum dolorum earum?</p>

            <button class="mt-12 flex bg-blue-500 font-semibold p-4 rounded hover:bg-blue-600 transition ease-in duration-150">Play Trailer</button>

        </div>
    </div> <!-- End game-details -->

    <div class="images mt-8 pb-8 border-b border-gray-800">
        <h2 class="font-semibold text-blue-500 uppercase tracking-wide mb-8">Images</h2>
        <div class="grid grid-cols-3 gap-12">
            <div>
                <a href="#">
                    <img src="/ff7.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150 w-full">
                </a>
            </div>
            <div>
                <a href="#">
                    <img src="/ff7.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150 w-full">
                </a>
            </div>
            <div>
                <a href="#">
                    <img src="/ff7.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150 w-full">
                </a>
            </div>
        </div>
        
    </div> <!-- End images-->

    <div class="similar-games-container mt-8 pb-8">
        <h2 class="font-semibold text-blue-500 uppercase tracking-wide">Similar Games</h2>

        <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12">
            <div class="game mt-8 m-auto">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"  style="bottom: -20px; right:-20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            85%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-base -font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake    
                </a>   
                <div class="text-gray-400 mt-1">
                    Playstation 4
                </div> 
            </div> 
            <div class="game mt-8 m-auto" >
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"  style="bottom: -20px; right:-20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            85%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-base -font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake    
                </a>   
                <div class="text-gray-400 mt-1">
                    Playstation 4
                </div> 
            </div> 
            <div class="game mt-8 m-auto" >
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"  style="bottom: -20px; right:-20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            85%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-base -font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake    
                </a>   
                <div class="text-gray-400 mt-1">
                    Playstation 4
                </div> 
            </div> 
            <div class="game mt-8 m-auto" >
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"  style="bottom: -20px; right:-20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            85%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-base -font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake    
                </a>   
                <div class="text-gray-400 mt-1">
                    Playstation 4
                </div> 
            </div> 
            <div class="game mt-8 m-auto" >
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"  style="bottom: -20px; right:-20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            85%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-base -font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake    
                </a>   
                <div class="text-gray-400 mt-1">
                    Playstation 4
                </div> 
            </div> 
            <div class="game mt-8 m-auto" >
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"  style="bottom: -20px; right:-20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            85%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-base -font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake    
                </a>   
                <div class="text-gray-400 mt-1">
                    Playstation 4
                </div> 
            </div> 
        </div> <!-- End popular-games -->

    </div> <!-- End similar-games-container -->

</div>

@endsection