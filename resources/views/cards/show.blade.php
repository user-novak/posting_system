<x-app-layout>

    {{-- section card --}}
    <section class="bg-gray-300 py-12 mb-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-6">
            <figure>
                @foreach ($images as $image)
                    @if ($image->imageable_id == $card->id && $image->imageable_type == 'use App\Models\Card')
                        <img class="h-96 w-full object-contain" src="{{ asset($image->url) }}" alt="img"><br>
                    @endif
                @endforeach
            </figure>

            <div class="text-black flex  flex-col gap-3">
                <h1 class="font-serif text-4xl mb-3">
                    {{ $card->title }}
                </h1>
                <p>
                    {{ $card->service->description }}
                </p>
                <div>
                    <i class="fas fa-tags"></i>
                    {{ $card->service->type->name }}
                </div>
                <div>
                    <i class="fas fa-tools"></i>
                    {{ $card->service->name }}
                </div>
            </div>
        </div>
    </section>

    {{-- section usersCard --}}
    <section class="mt-0 bg-gray-200 flex flex-col lg:flex-row gap-5 mb-0 py-0 justify-center">
        @livewire('usercard-info', ['card' => $card])
    </section>

    {{-- section recomendados --}}
    <section class="mt-0">
        <div class="flex justify-center bg-gray-100 py-16 mb-2">
            <h2 class="text-black text-3xl font-mono">TAMBIEN TE PODRIA INTERESAR</h2>
        </div>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($otros as $otro)
                @foreach ($images as $image)
                    @if ($image->imageable_id == $otro->id && $image->imageable_type == 'use App\Models\Card')
                        @if ($otro->id == $card->id)

                        @else
                            <x-cardasset-card :card="$otro" :img="$image" />
                        @endif
                    @endif
                @endforeach
            @endforeach
        </div>
    </section>

    {{-- aplicando el paginate --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">
        {{ $otros->links() }}
    </div>

</x-app-layout>