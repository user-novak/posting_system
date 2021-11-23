<div>

    @if (empty($user->profile->cellphone_number))
        <main class="grid grid-cols-2">
            <div>
                @livewire('user-profile',['user' => $user])
            </div>
            <div>
                <p class="text center text-3xl text-blue-600 uppercase font-black">
                    No puedes publicar servicios sino tienes un <span class="ml-60">perfil creado :(</span>
                </p>
                <img class="" src="{{ asset('img/home/user_profile.png') }}" alt="">
            </div>
        </main>
    @else
        <main class="grid grid-cols-2">
            {{-- datos de presentacion --}}
            @livewire('user-profile',['user' => $user])

            {{-- datos del form --}}
            <article>
                <h2 class="text-3xl text-center text-blue-600 font-black uppercase">ofrecer productos de manera sencilla
                </h2>
                <form action="{{ route('posts.store', $user) }}" method="POST"
                    class="flex flex-col gap-y-3 h-full align-middle flex-wrap justify-center" name="form_posts"
                    enctype="multipart/form-data">
                    @csrf
                    <label class="flex gap-2 justify-center items-baseline">
                        <p class="text-blue-500 font-black">Ingresar enunciado del post</p>
                        <input class="w-60 text-center bg-gray-200 text-black border border-gray-200 rounded" type="text"
                            name="title" autofocus>
                    </label>

                    <label class="flex gap-2 justify-center items-baseline">
                        <p class="text-blue-500 font-black">Ingresar el nombre del producto</p>
                        <input class="w-60 text-center bg-gray-200 text-black border border-gray-200 rounded"
                            type="text" name="name">
                    </label>

                    <label class="flex gap-2 justify-center">
                        <p class="text-blue-500 font-black mt-5">Ingresar la descripcion del producto</p>
                        <textarea class="w-60 text-center bg-gray-200 text-black border border-gray-200 rounded"
                            name="description"></textarea>
                    </label>

                    <label class="flex flex-col gap-2 flex-wrap items-center">
                        <i class="fas fa-cloud-upload-alt fa-3x text-blue-500 cursor-pointer hover:text-blue-600"></i>
                        <p class="text-blue-500 font-black cursor-pointer hover:text-blue-600">Ingresar imagen del
                            producto</p>
                        <input type="file" name="image" class="hidden" accept="image/*">
                    </label>

                    <label class="flex gap-2 justify-center" for="form_posts">
                        <p class="text-blue-500 font-black mt-2">Ingresar la categoria del producto</p>
                        <select name="category_name" class=" border-0 rounded-xl">
                            <option disabled selected>Seleccione una categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </label>

                    <label class="flex gap-2 justify-center">
                        <input class="cursor-pointer bg-blue-600 py-3 px-5 rounded-full text-white hover:bg-blue-800"
                            type="submit" value="crear producto">
                    </label>
                </form>
            </article>

        </main>
    @endif
</div>
