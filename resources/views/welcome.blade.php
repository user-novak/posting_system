<x-app-layout>

    {{-- commercial section --}}
    <section class="bg-cover" style="background-image: url({{ asset('img/home/sale.jpg') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Encuentra eso que estas buscando</h1>
                <p class="text-white text-lg mt-2 mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi explicabo blanditiis adipisci fugiat
                    dolorum vero fugit enim sapiente illo asperiores, nam ad at quia, aperiam quis doloremque magni
                    delectus reiciendis!
                </p>
                <!-- component -->
                <div class="relative text-gray-600">
                    <input type="search" name="serch" placeholder="Search" class="w-full bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded absolute right-0 top-0">
                        Buscar
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- content section --}}
    <section class="mt-24">
        <h1 class="text-grey-600 text-center text-3xl mb-6">TE OFRECEMOS</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-8 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/producto.png') }}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Productos</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia aliquid
                </p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/servicio.png') }}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Servicios</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia aliquid
                </p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/simple.jpg') }}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Simplicidad</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia aliquid
                </p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/seguro.png') }}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Seguridad</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia aliquid
                </p>
            </article>
        </div>
    </section>

    {{-- catalog section --}}
    <section class="mt-24 bg-gray-700 py-12">
        <div class="container mb-3">
            <h1 class="text-center text-white text-3xl">¿No sabes por donde empezar?</h1>
            <p class="text-center text-white">Dale una revisada a nuestras categorias de productos y tipos de servicio</p>
        </div>

        <div class="grid grid-cols-3">
            <div class="flex justify-center mt-4">
                <a href="{{route('posts.index')}}" class="py-4 px-10 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                    Productos
                </a>
            </div>

            <div class="flex justify-center mt-4">
                <a href="https://user-novak.github.io/documentacion/" target="_blank" class="py-4 px-10 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                    Documentación
                </a>
            </div>

            <div class="flex justify-center mt-4">
                <a href="{{route('cards.index')}}" class="py-4 px-10 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                    Servicios
                </a>
            </div>
        </div>

    </section>

    {{-- posts section --}}
    <section class="mt-24">
        <div>
            <h1 class="text-5xl mb-5 text-center text-gray-500 my-auto mx-auto py-10">Ultimos productos</h1>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($posts as $post)
            @foreach ($imgs as $img)
            @if ($img->id == $post->id)
            <x-post-card :post="$post" :img="$img" />
            @endif
            @endforeach
            @endforeach
        </div>
    </section>

    {{-- aplicando el paginate --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">
        {{ $posts->links() }}
    </div>

    {{-- cards section --}}
    <section class="mt-24">
        <div>
            <h1 class="text-5xl mb-5 text-center text-gray-500 my-auto mx-auto py-10">Ultimos servicios </h1>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($cards as $card)
            @foreach ($imgs as $img)
            @if ($img->id == $card->id)
            <x-card-card :card="$card" :img="$img" />
            @endif
            @endforeach
            @endforeach
        </div>
    </section>

    {{-- aplicando el paginate --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">
        {{ $cards->links() }}
    </div>

</x-app-layout>