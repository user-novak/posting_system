<x-app-layout>
    
    {{-- section post --}}
    <section class="bg-gray-300 py-12 mb-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-6">
            <figure>
                <img class=" h-60 w-full object-cover" src="{{ asset($img->url) }}" alt="img"><br>
            </figure>

            <div class="text-black flex  flex-col gap-3">
                <h1 class="font-serif text-4xl mb-3">
                    {{ $post->title }}
                </h1>
                <p>
                    {{ $post->product->description }}
                </p>
                <div>
                    <i class="fas fa-tags"></i>
                    {{ $post->product->category->name }}
                </div>
            </div>
        </div>
    </section>

    {{-- section usersPost --}}
    <section class="mt-0 bg-gray-200 flex flex-col lg:flex-row gap-5 mb-0 py-0 justify-center">
        @foreach ($images as $image)
            @if ($post->user->id == $image->id)
                <div class="py-5 px-5">
                    <figure>
                        <img class="object-contain h-48 w-full rounded-full" src={{ asset($image->url) }} alt="">
                    </figure>
                </div>

                <div class="mt-7 flex flex-col">
                    <h2 class="flex justify-center font-mono text-2xl">
                        USUARIO
                    </h2>
                    <div class="flex flex-col mt-5">
                        <p class="font-serif text-2xl">{{ $post->user->name }}</p>
                        <p>{{ $post->user->email }}</p>
                    </div>
                </div>

                <div class="mt-7">
                    <H2 class="flex justify-center font-mono text-2xl">
                        CONTACTAR CON EL USUARIO
                    </H2>
                    <div class=" flex flex-col gap-2 mt-3">
                        <p>
                            <i class="fas fa-phone-square-alt"></i>
                            {{ $post->user->profile->cellphone_number }}
                        </p>
                        <p>
                            <i class="fas fa-home"></i>
                            {{ $post->user->profile->address }}
                        </p>
                        <p>
                            <i class="fab fa-facebook-square"></i>
                            {{ $post->user->profile->facebook }}
                        </p>
                        <p>
                            <i class="fab fa-linkedin"></i>
                            {{ $post->user->profile->linkedin }}
                        </p>
                    </div>
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
                        <x-postasset-card :post="$otro" :img="$image" />
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