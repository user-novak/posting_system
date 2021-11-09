<x-app-layout>

{{-- commercial section --}}
    <section class="bg-auto" style="background-image: url({{ asset('img/post/portada.png') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Todos los productos que necesistes a solo 1 click!!!</h1>
                <p class="text-white text-lg mt-2 mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi explicabo blanditiis adipisci fugiat
                    dolorum vero fugit enim sapiente illo asperiores, nam ad at quia, aperiam quis doloremque magni
                    delectus reiciendis!
                </p>
                <!-- component -->
                @livewire('search')
            </div>
        </div>
    </section>

<!-- llamando al componente livewire -->

@livewire('post-index',['user' => $user])


</x-app-layout>
