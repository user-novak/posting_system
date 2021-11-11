<x-app-layout>

    {{-- commercial section --}}
    @livewire('home-bg')

    {{-- content section --}}
    @if (is_null($user))
        <section class="mt-10">
            <h1 class="text-gray-500 text-center text-5xl font-mono my-10 mx-auto ">TE OFRECEMOS</h1>
            <div
                class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-8 gap-y-8">
                <article>
                    <figure>
                        <img class="rounded-xl h-48 w-full object-cover" src="{{ asset('img/home/producto.png') }}"
                            alt="">
                    </figure>

                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Productos</h1>
                    </header>

                    <p class="text-sm text-center text-gray-500">Encuentra los productos que estas buscando.
                    </p>
                </article>

                <article>
                    <figure>
                        <img class="rounded-xl h-48 w-full object-cover" src="{{ asset('img/home/servicio.png') }}"
                            alt="">
                    </figure>

                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Servicios</h1>
                    </header>

                    <p class="text-sm text-center text-gray-500">Encuentra los servicios que estas buscando.
                    </p>
                </article>

                <article>
                    <figure>
                        <img class="rounded-xl h-48 w-full object-cover" src="{{ asset('img/home/simple.jpg') }}"
                            alt="">
                    </figure>

                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Simplicidad</h1>
                    </header>

                    <p class="text-sm text-center text-gray-500">Plataforma simple para encontrar y crear productos y servicios.
                    </p>
                </article>

                <article>
                    <figure>
                        <img class="rounded-xl h-48 w-full object-cover" src="{{ asset('img/home/seguro.png') }}"
                            alt="">
                    </figure>

                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Seguridad</h1>
                    </header>

                    <p class="text-sm text-center text-gray-500">Te garantizamos calidad y seguridad en los productos y servicios que ofrecemos.
                    </p>
                </article>
            </div>
        </section>
    @else{
        <section class="mt-10">
            <h1 class="text-gray-500 text-center text-5xl font-mono my-10 mx-auto ">TE OFRECEMOS</h1>
            <div
                class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-8 gap-y-8">
                <article>
                    <figure>
                        <img class="rounded-xl h-56 w-full object-cover" src="{{ asset('img/home/producto.png') }}"
                            alt="">
                    </figure>

                    <div class="flex flex-col gap-1 justify-center align-middle items-center">
                        <header class="mt-2">
                            <h1 class="text-xl text-gray-700 mt-2">Productos</h1>
                        </header>

                        <p class="text-sm text-gray-500 text-center">Gran variedad de productos que te pueden interesar
                        </p>

                        <a href="{{route('posts.index')}}" class="bg-green-100 rounded-lg p-3 text-sm text-green-700 hover:text-white hover:bg-green-400">ir hacia productos</a>
                    </div>

                </article>

                <article>
                    <figure>
                        <img class="rounded-xl h-56 w-full object-cover" src="{{ asset('img/home/servicio.png') }}"
                            alt="">
                    </figure>
                    <div class="flex flex-col gap-1 justify-center align-middle items-center">
                        <header class="mt-2">
                            <h1 class="text-center text-xl text-gray-700 mt-2">Servicios</h1>
                        </header>

                        <p class="text-sm text-gray-500 text-center">Gran variedad de servicios que te pueden ayudar.
                        </p>

                        <a href="{{route('cards.index')}}" class="bg-green-100 rounded-lg p-3 text-sm text-green-700 hover:text-white hover:bg-green-400">ir hacia servicios</a>
                    </div>
                </article>

                <article>
                    <figure>
                        <img class="rounded-xl h-56 w-full object-cover" src="{{ asset('img/home/save_post.png') }}"
                            alt="">
                    </figure>
                    <div class="flex flex-col gap-1 justify-center align-middle items-center">
                        <header class="mt-2">
                            <h1 class="text-center text-xl text-gray-700 mt-2">Publicar tus productos</h1>
                        </header>

                        <p class="text-sm text-gray-500 text-center">Una manera facil y sencilla de ofrecer tus productos.
                        </p>

                        <a href="{{ route('posts.create', $user) }}" class="bg-green-100 rounded-lg p-3 text-sm text-green-700 hover:text-white hover:bg-green-400">crear productos</a>
                    </div>
                </article>

                <article>
                    <figure>
                        <img class="rounded-xl h-56 w-full object-cover" src="{{ asset('img/home/save_card.png') }}"
                            alt="">
                    </figure>
                    <div class="flex flex-col gap-1 justify-center align-middle items-center">
                        <header class="mt-2">
                            <h1 class="text-center text-xl text-gray-700 mt-2">Publicar tus servicios</h1>
                        </header>

                        <p class="text-sm text-gray-500 text-center">Una manera facil y sencilla de ofrecer tus servicios.
                        </p>

                        <a href="{{ route('cards.create', $user) }}" class="bg-green-100 rounded-lg p-3 text-sm text-green-700 hover:text-white hover:bg-green-400">crear servicios</a>
                    </div>
                </article>
            </div>
        </section>
        }
    @endif

    {{-- catalog section --}}
    <section class="mt-14 bg-gray-700 py-12">
        <div class="mb-3 flex flex-col items-center">
            <h1 class="text-white text-3xl">¿No sabes por donde empezar?</h1>
            <p class="text-white">Dale una revisada a nuestras categorias de productos y tipos de servicio
            </p>
        </div>

        <div class="flex justify-evenly">
            <div class="flex justify-center mt-4">
                <a href="{{ route('posts.index') }}"
                    class="py-4 px-10 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                    Productos
                </a>
            </div>

            <div class="flex justify-center mt-4">
                <a href="https://user-novak.github.io/documentacion/" target="_blank"
                    class="py-4 px-10 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                    Documentación
                </a>
            </div>

            <div class="flex justify-center mt-4">
                <a href="{{ route('cards.index') }}"
                    class="py-4 px-10 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                    Servicios
                </a>
            </div>
        </div>

    </section>

    @livewire('home-index')

</x-app-layout>