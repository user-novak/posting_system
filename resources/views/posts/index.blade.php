<x-app-layout>

{{-- commercial section --}}
    <section class="bg-cover" style="background-image: url({{ asset('img/post/portada.png') }})">
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

<!-- llamando al componente livewire -->

@livewire('post-index')


</x-app-layout>
