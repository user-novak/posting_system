<x-app-layout>
    <section class="bg-cover" style="background-image: url({{ asset('img/home/digital.jpg') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Domina la tegnologia</h1>
                <p class="text-white text-lg mt-2 mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi explicabo blanditiis adipisci fugiat
                    dolorum vero fugit enim sapiente illo asperiores, nam ad at quia, aperiam quis doloremque magni
                    delectus reiciendis!
                </p>
                <!-- component -->
                <div class="relative text-gray-600">
                    <input type="search" name="serch" placeholder="Search"
                        class="w-full bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded absolute right-0 top-0">
                        Buscar
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-grey-600 text-center text-3xl mb-6">CONTENIDO</h1>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/digital.jpg') }}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">gato</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia aliquid
                </p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/digital.jpg') }}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">girl</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia aliquid
                </p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/digital.jpg') }}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">mom</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia aliquid
                </p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/digital.jpg') }}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">venado</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia aliquid
                </p>
            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">No se que hacer con mi laif</h1>
        <p class="text-center text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <div class="flex justify-center mt-4">
            <a href="#"
                class="py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                Click me
            </a>
        </div>
    </section>

    <section class="mt-24">
        <div>
            <h1 class="text-center text-gray-500 my-auto mx-auto">Ultimos posts</h1>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($posts as $post)
                @foreach ($imgs as $img)
                    @if ($img->id == $post->id)
                        <article class="bg-white shadow-lg rounded">
                            <img src="{{ $img->url }}" alt=""><br>
                            <div class="px-6 py-4">
                                <h1>{{ $post->title }}</h1>
                                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                                <p>{{$post->product->description}}</p>
                                <h3>tag</h3>
                                <p>{{$post->product->category->name}}</p>
                            </div>
                        </article>
                    @endif
                @endforeach
            @endforeach
        </div>
    </section>

</x-app-layout>
