<div class="h-screen bg-white">
    <div class="bg-white w-full flex flex-col items-center py-20">
        <div>
            <h1 class="text-blue-600 text-center mb-5 font-black text-3xl">Todos los errores tienen solucion ;)</h1>
        </div>
        <div class="flex flex-col gap-y-3 flex-wrap items-center">
            <div>
                <span class="text-blue-500 font-black">Enunciado del post</span>
                <input class="w-60 text-center bg-gray-200 text-black border border-gray-200 rounded" type="text"
                    value="{{ $post->title }}" wire:model="enunciado">
            </div>

            <div>
                <span class="text-blue-500 font-black">Nombre del producto</span>
                <input class="w-60 text-center bg-gray-200 text-black border border-gray-200 rounded" type="text"
                    value="{{ $post->product->name }}" wire:model="product_name">
            </div>

            <div class="flex flex-row gap-x-2">
                <span class="text-blue-500 font-black mt-5">Descripcion del producto</span>
                <textarea class="w-80 bg-gray-200 text-black border border-gray-200 rounded"
                    wire:model="description">{{ $post->product->description }}</textarea>
            </div>

            <div>
                <button class="cursor-pointer bg-blue-600 py-3 px-5 rounded-full text-white hover:bg-blue-800"
                    wire:click='update'>actualizar</button>
            </div>
            @if ($alert)
                <div>
                    <h3 class=" text-lg text-red-600">No deje campos vacios</h3>
                </div>
            @endif
        </div>
    </div>
</div>
