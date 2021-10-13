<x-app-layout>

    {{-- section card --}}
    <section class="bg-gray-300 py-12 mb-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 gap-6">
            <figure>
                <img class=" h-35 w-full object-cover" src="{{ asset($img->url) }}" alt="img"><br>
            </figure>

            <div class="mt-28">
                <h1 class="font-serif text-2xl">
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
    <section class="mt-0 bg-gray-200 flex flex-initial gap-5">
        @foreach ($images as $image)
            @if ($card->user->id == $image->id)
                <figure>
                    <img class="object-contain h-48 w-full"
                        src={{asset($image->url)}} alt="">
                </figure>
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
    <section class="mt-24">
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