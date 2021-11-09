<x-app-layout>
    <main>
        {{-- datos de presentacion --}}
        @livewire('post-profile',['user' => $user])

        {{-- datos del form --}}
        <article class="mt-5">
            <form action="{{ route('posts.store',$user) }}" method="POST" class="flex flex-col gap-y-3" name="form_posts" enctype="multipart/form-data">
                @csrf
                <label class="flex gap-2 justify-center">
                    <p>Ingresar nombre del post</p>
                    <input type="text" name="title" autofocus>
                </label>
    
                <label class="flex gap-2 justify-center">
                    <p>Ingresar el nombre del producto</p>
                    <input type="text" name="name">
                </label>
    
                <label class="flex gap-2 justify-center">
                    <p>Ingresar la descripcion del producto</p>
                    <textarea name="description"></textarea>
                </label>
    
                <label class="flex gap-2 justify-center">
                    <p>Ingresar imagen del producto</p>
                    <input type="file" name="image" accept="image/*">
                </label>
    
                <label class="flex gap-2 justify-center" for="form_posts">
                    <p>Ingresar la categoria del producto</p>
                    <select name="category_name">
                        <option disabled selected>Seleccione una categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->name }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </label>
    
                <label class="flex gap-2 justify-center">
                    {{-- <button type="submit">Publicar post</button> --}}
                    <input type="submit" value="envair">
                </label>
            </form>
        </article>
        
    </main>
</x-app-layout>