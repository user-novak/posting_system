<div>
    <div class="flex flex-col items-center py-20">
        <div>
            <h1 class="text-blue-600 text-center mb-5 font-black text-3xl">Todos los errores tienen solucion ;)</h1>
        </div>
        <div class="flex flex-col gap-y-3 flex-wrap">
            <div>
                <span class="text-blue-500 font-black capitalize">Enunciado del post</span>
                <input class="w-full bg-gray-200 text-black border border-gray-200 rounded" type="text" name="enunciado"
                    value="{{ $post->title }}" wire:model="enunciado">
            </div>

            @error('enunciado')
                <small class="text-red-500">*{{ $message }}</small>
            @enderror

            <div>
                <span class="text-blue-500 font-black capitalize">Nombre del producto</span>
                <input class="w-full bg-gray-200 text-black border border-gray-200 rounded" type="text"
                    value="{{ $post->product->name }}" name="name" wire:model="product_name" autocomplete="off">
            </div>

            @error('product_name')
                <small class="text-red-500">*{{ $message }}</small>
            @enderror

            <div class="flex flex-col">
                <span class="text-blue-500 font-black mt-5 capitalize">Descripcion del producto</span>
                <textarea class="w-full bg-gray-200 text-black border border-gray-200 rounded" name="description"
                    wire:model="description">{{ $post->product->description }}</textarea>
            </div>

            @error('description')
                <small class="text-red-500">*{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="flex flex-col items-center">
        <div>
            <button class="cursor-pointer bg-blue-600 py-3 px-5 rounded-full text-white hover:bg-blue-800 capitalize"
                wire:click='update'>actualizar</button>
        </div>
    </div>
</div>
