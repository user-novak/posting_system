<div>
    <div class="flex flex-col gap-y-3 flex-wrap items-center">
        <div>
            <span>Enunciado del post</span>
            <input type="text" value="{{$post->title}}" wire:model="enunciado">
        </div>

        <div>
            <span>nombre del producto</span>
            <input type="text" value="{{$post->product->name}}" wire:model="product_name">
        </div>

        <div class="flex flex-row">
            <span>Descripcion del producto</span>
            <textarea wire:model="description">{{$post->product->description}}</textarea>
        </div>

        <div>
            <button wire:click='update'>actualizar</button>
        </div>
    </div>
</div>
