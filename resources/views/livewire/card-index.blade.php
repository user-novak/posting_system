<div>
    {{-- barra de navegacion --}}
    <div class="bg-gray-200 py-4 mb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg-white shadow h-12 px-4 py-8 rounded-lg text-gray-700 mr-4 flex items-center" wire:click="cards">
                <i class="fas fa-store text-xs mr-2"></i>
                todos los cards
            </button>

            {{-- boton para categorias --}}
            <div class="relative" x-data="{ open: false }">
                <!-- Dropdown toggle button -->
                <button
                    class="px-4 text-gray-700 mr-4 relative z-10 block py-4 bg-white rounded-lg dark:bg-gray-800 focus:outline-none"
                    x-on:click="open = true" wire:click="filter">
                    <i class="fas fa-tags text-sm mr-2"></i>
                    tipos
                    <i class="fas fa-chevron-down text-sm ml-2"></i>
                </button>

                <!-- Dropdown menu -->
                <div class="absolute right-0 z-20 w-48 py-2 mt-2 bg-white rounded-md shadow-xl dark:bg-gray-800"
                    x-show="open" x-on:click.away="open = false">
                    @foreach ($types as $type)
                        <a class="cursor-pointer block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white"
                            wire:click="$set('type_id',{{ $type->id }})" x-on:click="open = false">
                            {{ $type->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @if ($flag){
        {{-- cards --}}
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($cards as $card)
                @foreach ($imgs as $img)
                    @if ($img->id == $card->id)
                        <x-card-card :card="$card" :img="$img" />
                    @endif
                @endforeach
            @endforeach
        </div>


        {{-- aplicando el paginate --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">
            {{ $cards->links() }}
        </div>
    }@else
        @livewire('card-filter')
    @endif
</div>
