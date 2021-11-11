<x-app-layout>
    <main class="grid grid-cols-2">
        {{-- datos del profile --}}
        <div>
            @livewire('card-profile',['user' => $user])
        </div>

        {{-- datos del form --}}
        <article class="mt-5">
            <form action="{{ route('cards.store',$user) }}" method="POST" class="flex flex-col gap-y-3" name="form_posts" enctype="multipart/form-data">
                @csrf
                <label class="flex gap-2 justify-center">
                    <p>Ingresar nombre del card</p>
                    <input type="text" name="title" autofocus>
                </label>
    
                <label class="flex gap-2 justify-center">
                    <p>Ingresar el nombre del servicio</p>
                    <input type="text" name="name">
                </label>
    
                <label class="flex gap-2 justify-center">
                    <p>Ingresar la descripcion del servicio</p>
                    <textarea name="description"></textarea>
                </label>
    
                <label class="flex gap-2 justify-center">
                    <p>Ingresar imagen del servicio</p>
                    <input type="file" name="image" accept="image/*">
                </label>
    
                <label class="flex gap-2 justify-center" for="form_posts">
                    <p>Ingresar el tipo de servicio</p>
                    <select name="type_name">
                        <option disabled selected>Seleccione un tipo</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->name }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </label>
    
                <label class="flex gap-2 justify-center">
                    {{-- <button type="submit">Publicar post</button> --}}
                    <input type="submit" value="enviar">
                </label>
            </form>
        </article>
    </main>
</x-app-layout>