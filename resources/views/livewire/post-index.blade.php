<div>

    {{-- barra de navegacion --}}
    <div class="bg-gray-200 py-12 mb-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-baseline">
            <button class="bg-white shadow h-12 px-4 py-8 rounded-lg text-gray-700 mr-4 flex items-center" wire:click="posts">
                <i class="fas fa-store text-xs mr-2"></i>
                Todos los posts
            </button>

            {{-- boton para categorias --}}
            <div class="relative" x-data="{ open: false }">
                <!-- Dropdown toggle button -->
                <button class="px-4 text-gray-700 mr-4 relative z-10 block py-4 bg-white rounded-lg dark:bg-gray-800 focus:outline-none" x-on:click="open = true" wire:click="filter">
                    <i class=" fas fa-tags text-sm mr-2"></i>
                    categorias
                    <i class="fas fa-chevron-down text-sm ml-2"></i>
                </button>

                <!-- Dropdown menu -->
                <div class="absolute right-0 z-20 w-48 py-2 mt-2 bg-white rounded-md shadow-xl dark:bg-gray-800" x-show="open" x-on:click.away="open = false">
                    @foreach ($categories as $category)
                    <a class="cursor-pointer block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white" wire:click="$set('category_id',{{ $category->id }})" x-on:click="open = false">
                        {{ $category->name }}
                    </a>
                    @endforeach
                </div>
            </div>

            <button class="bg-white shadow h-12 px-4 py-8 rounded-lg text-gray-700 mr-4 flex items-center">
                <i class="fas fa-plus-square text-xs mr-2"></i>
                <a href="{{route('posts.create',$user)}}">Crear post</a>
            </button>

            <button class="bg-white shadow h-12 px-4 py-8 rounded-lg text-gray-700 mr-4 flex items-center">
                <i class="fas fa-save text-xs mr-2"></i>
                <a href="">Mis posts</a>
            </button>

        </div>
    </div>

    @if ($flag){
    {{-- posts --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        @foreach ($posts as $post)
        @foreach ($imgs as $img)
        @if (($img->imageable_id == $post->id) && ($img->imageable_type == "use App\Models\Post"))
        <x-post-card :post="$post" :img="$img" />
        @endif
        @endforeach
        @endforeach
    </div>

    {{-- aplicando el paginate --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">
        {{ $posts->links() }}
    </div>
    }@else
    @livewire('post-filter')
    @endif
</div>