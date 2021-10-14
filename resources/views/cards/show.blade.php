<x-app-layout>

    {{-- section card --}}
    <section class="bg-gray-300 py-12 mb-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-6">
            <figure>
                <img class=" h-60 w-full object-cover" src="{{ asset($img->url) }}" alt="img"><br>
            </figure>

            <div class="text-black">
                <h1 class="font-serif text-4xl mb-3">
                    {{ $card->title }}
                </h1>
                <p>
                    {{ $card->service->description }}
                </p>
                <i class="fas fa-tags"></i>
                {{ $card->service->type->name }}
            </div>
        </div>
    </section>

    {{-- section usersCard --}}
    <section class="mt-0 bg-gray-200 flex gap-5 mb-0 py-0">
        @foreach ($images as $image)
            @if ($card->user->id == $image->id)
                <div class="py-5 px-5">
                    <figure>
                        <img class="object-contain h-48 w-full" src={{ asset($image->url) }} alt="">
                    </figure>
                </div>
                <div class="mt-7">
                    <p class="font-serif text-2xl">{{ $card->user->name }}</p>
                    <p>{{ $card->user->email }}</p>
                    <p>{{ $card->user->profile->cellphone_number }}</p>
                    <p>Direccion: {{ $card->user->profile->address }}</p>
                    <p>
                        <i class="fab fa-facebook-square"></i>
                        {{ $card->user->profile->facebook }}
                    </p>
                    <p>
                        <i class="fab fa-linkedin"></i>
                        {{ $card->user->profile->linkedin }}
                    </p>
                </div>
            @endif
        @endforeach
    </section>

    {{-- section recomendados --}}
    <section class="mt-0">
        <div class="container bg-gray-100 py-16 mb-2">
            <h2 class="text-center text-black text-3xl font-mono">TAMBIEN TE PODRIA INTERESAR</h2>
        </div>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($otros as $otro)
                @foreach ($images as $image)
                    @if ($image->id == $otro->id)
                        <x-cardasset-card :card="$otro" :img="$image" />
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