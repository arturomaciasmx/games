<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games Agregator</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
        <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
            <div class="flex flex-col lg:flex-row items-center">
                <a href="/" class="flex-none">
                    <h3>Games</h3>
                </a>
                <ul class="flex lg:ml-16 space-x-8 mt-6 lg:-mt-0">
                    <li><a href="#" class="hover:text-gray-400">Games</a></li>
                    <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                    <li><a href="#" class="hover:text-gray-400">Coming Soon</a></li>
                </ul>
            </div>
            <div class="flex items-center mt-6 lg:-mt-0">
                <div>
                    <input class="bg-gray-800 px-2 py-1 border border-gray-700 rounded-full focus:outline-none" type="text" placeholder="Search...">
                </div>
                <div class="ml-6">
                    <div class="bg-white w-8 h-8 rounded-full"></div>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-8">
        @yield('content')
    </main>

    <footer class="border-t border-gray-800">
        <div class="container mx-auto">
            Powered by <b>Arturo Macias</b>
        </div>  
    </footer>
</body>
</html>