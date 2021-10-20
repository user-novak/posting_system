<x-app-layout>
{{-- portada --}}
<section class="bg-cover" style="background-image: url({{ asset('img/cards/portada.png') }})">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
        <div class="w-full md:w-3/4 lg:w-1/2">
            <h1 class="text-white font-bold text-4xl">Encuentra el producto o servicio que buscas</h1>
            <p class="text-white text-lg mt-2 mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi explicabo blanditiis adipisci fugiat
                dolorum vero fugit enim sapiente illo asperiores, nam ad at quia, aperiam quis doloremque magni
                delectus reiciendis!
            </p>
            <!-- component -->
            @livewire('search-card')
        </div>
    </div>
</section>

@livewire('card-index')
</x-app-layout>
