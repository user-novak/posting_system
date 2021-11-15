<x-app-layout>

    {{-- commercial section --}}
    <section class="bg-cover bg-fixed" style="background-image: url({{ asset('img/post/portada.png') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Todos los productos que necesistes a solo 1 click!!!</h1>
                <p class="text-white text-lg mt-2 mb-4">
                    La venta es esencialmente una transferencia de sentimientos entre dos personas.
                </p>
                <!-- component -->
                @livewire('search')
            </div>
        </div>
    </section>

    <!-- llamando al componente livewire -->
    @if (empty($user))
        @livewire('post-index')
    @else
        @livewire('post-index',['user' => $user])
    @endif



</x-app-layout>
