<div>

    {{-- barra de navegacion --}}
    <div class="bg-gray-200 py-4 mb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-4">
                <i class="fas fa-store text-xs mr-2"></i>
                todos los posts
            </button>

            {{-- boton para categorias --}}
            <div class="relative" x-data="{ open: false }">
                <!-- Dropdown toggle button -->
                <button class="px-4 text-gray-700 mr-4 relative z-10 block p-2 bg-white rounded-lg dark:bg-gray-800 focus:outline-none" x-on:click="open = true">
                    <i class="fas fa-tags text-sm mr-2"></i>
                    categorias
                    <i class="fas fa-chevron-down text-sm ml-2"></i>
                </button>

                <!-- Dropdown menu -->
                <div class="absolute right-0 z-20 w-48 py-2 mt-2 bg-white rounded-md shadow-xl dark:bg-gray-800" x-show="open" x-on:click.away="open = false">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white">
                        your profile
                    </a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white">
                        Your projects
                    </a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white">
                        Help
                    </a>
                </div>
            </div>

            {{-- boton para servicios --}}
            <div class="relative" x-data="{ open: false }">
                <!-- Dropdown toggle button -->
                <button class="px-4 text-gray-700 mr-4 relative z-10 block p-2 bg-white rounded-lg dark:bg-gray-800 focus:outline-none" x-on:click="open = true">
                    <i class="fas fa-tags text-sm mr-2"></i>
                    servicios
                    <i class="fas fa-chevron-down text-sm ml-2"></i>
                </button>

                <!-- Dropdown menu -->
                <div class="absolute right-0 z-20 w-48 py-2 mt-2 bg-white rounded-md shadow-xl dark:bg-gray-800" x-show="open" x-on:click.away="open = false">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white">
                        your profile
                    </a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white">
                        Your projects
                    </a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white">
                        Help
                    </a>
                </div>
            </div>

        </div>
    </div>

    {{-- posts --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        @foreach ($posts as $post)
        @foreach ($imgs as $img)
        @if ($img->id == $post->id)
        <article class="bg-white shadow-lg rounded overflow-hidden">
            <img class="h-35 w-full object-cover" src="{{ $img->url }}" alt=""><br>
            <div class="px-6 py-4">
                <h1>{{ Str::limit($post->title, 20) }}</h1>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                <p>{{ Str::limit($post->product->description, 40) }}</p>
                <div class="flex">
                    <p class="text-sm text-gray-500 ml-auto">
                        <i class="fas fa-tags"></i>
                        {{ $post->product->category->name }}
                    </p>
                </div>
                <a href="{{ route('post.show', $post) }}" class="block text-center w-full mt-4 py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                    más información
                </a>
            </div>
        </article>
        @endif
        @endforeach
        @endforeach
    </div>

    {{--aplicando el paginate--}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">
        {{$posts->links()}}
    </div>
</div>