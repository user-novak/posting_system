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
                <div class="mt-4">
                    <label class="inline-flex items-center">
                        <input type="radio" wire:click='products' checked>
                        <span class="ml-2">Productos</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" wire:click='services'>
                        <span class="ml-2">Servicios</span>
                    </label>
                </div>
            </div>
        </section>
    @else
        <section class="bg-cover" style="background-image: url({{ asset('img/home/servicio.jpg') }})">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                <div class="w-full md:w-3/4 lg:w-1/2">
                    <h1 class="text-black font-bold text-4xl">Encuentra servicios</h1>
                    <p class=" text-red-600 text-lg mt-2 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi explicabo blanditiis adipisci
                        fugiat
                        dolorum vero fugit enim sapiente illo asperiores, nam ad at quia, aperiam quis doloremque magni
                        delectus reiciendis!
                    </p>
                    <!-- component -->
                    @livewire('search-card')
                </div>
                <div class="mt-4">
                    <label class="inline-flex items-center">
                        <input type="radio" name="accountType" value="personal" wire:click='products'>
                        <span class="ml-2">Productos</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" name="accountType" value="busines" wire:click='services' checked>
                        <span class="ml-2">Servicios</span>
                    </label>
                </div>
            </div>
        </section>
    @endif

</div>