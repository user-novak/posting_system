<x-app-layout>
    
    {{-- section post --}}
    <section class="bg-gray-300 py-12 mb-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 gap-6">
            <figure>
                <img class=" h-35 w-full object-cover" src="{{ asset($img->url) }}" alt="img"><br>
            </figure>

            <div class="mt-28">
                <h1 class="font-serif text-2xl">
                    {{ $post->title }}
                </h1>
                <p>
                    {{ $post->product->description }}
                </p>
                <i class="fas fa-tags"></i>
                {{ $post->product->category->name }}
            </div>
        </div>
    </section>

    {{-- section usersPost --}}
    <section class="mt-0 bg-gray-200 flex flex-initial gap-5">
        @foreach ($images as $image)
            @if ($post->user->id == $image->id)
                <figure>
                    <img class="object-contain h-48 w-full"
                        src={{asset($image->url)}} alt="">
                </figure>
                <div class="mt-7">
                    <p class="font-serif text-2xl">{{ $post->user->name }}</p>
                    <p>{{ $post->user->email }}</p>
                    <p>{{ $post->user->profile->cellphone_number }}</p>
                    <p>Direccion: {{ $post->user->profile->address }}</p>
                    <p>
                        <i class="fab fa-facebook-square"></i>
                        {{ $post->user->profile->facebook }}
                    </p>
                    <p>
                        <i class="fab fa-linkedin"></i>
                        {{ $post->user->profile->linkedin }}
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