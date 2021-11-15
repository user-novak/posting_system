<x-app-layout>
    {{-- portada --}}
    <section class="bg-cover bg-fixed" style="background-image: url({{ asset('img/cards/portada.jpg') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Encuentra el producto o servicio que buscas</h1>
                <p class="text-white text-lg mt-2 mb-4">
                    La mejor manera de encontrarse, es perderse en servicio de los demás.
                </p>
                <!-- component -->
                @livewire('search-card')
            </div>
        </div>
    </section>

    <!-- llamando al componente livewire -->
    @if (empty($user))
    @livewire('card-index')
    @else
    @livewire('card-index',['user' => $user])
    @endif
</x-app-layout>