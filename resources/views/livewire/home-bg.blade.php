<div>
    @if ($flag)
        <section class="bg-contain" style="background-image: url({{ asset('img/home/sale.jpg') }})">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                <div class="w-full md:w-3/4 lg:w-1/2">
                    <h1 class="text-white font-bold text-4xl">Encuentra productos</h1>
                    <p class="text-white text-lg mt-2 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi explicabo blanditiis adipisci
                        fugiat
                        dolorum vero fugit enim sapiente illo asperiores, nam ad at quia, aperiam quis doloremque magni
                        delectus reiciendis!
                    </p>
                    <!-- component -->
                    @livewire('search')
                </div>
                <div class="mt-4  w-72 rounded-full flex justify-start">
                    <label class="inline-flex items-center">
                        <input class="text-white" type="radio" wire:click='products' checked>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input class="bg-yellow-500" type="radio" wire:click='services'>
                    </label>
                </div>
            </div>
        </section>
    @else
        <section class="bg-cover" style="background-image: url({{ asset('img/home/servicio.jpg') }})">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                <div class="w-full md:w-3/4 lg:w-1/2">
                    <h1 class="text-black font-bold text-4xl">Encuentra servicios</h1>
                    <p class=" text-black text-lg mt-2 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi explicabo blanditiis adipisci
                        fugiat
                        dolorum vero fugit enim sapiente illo asperiores, nam ad at quia, aperiam quis doloremque magni
                        delectus reiciendis!
                    </p>
                    <!-- component -->
                    @livewire('search-card')
                </div>
                <div class="mt-4 w-72 rounded-full flex justify-start">
                    <label class="inline-flex items-center">
                        <input class="bg-yellow-500" type="radio" wire:click='products'>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input class="text-white" type="radio" wire:click='services' checked>
                    </label>
                </div>
            </div>
        </section>
    @endif

</div>