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
            {{-- datos del profile --}}
            <div>
                @livewire('user-profile',['user' => $user])
            </div>

            {{-- datos del form --}}
            <article>
                <h2 class="text-center text-blue-600 text-3xl font-black uppercase mb-5">da a conocer tus habilidades al
                    mundo</h2>
                <form action="{{ route('cards.store', $user) }}" method="POST" class="flex flex-col gap-y-3"
                    name="form_posts" enctype="multipart/form-data">
                    @csrf
                    <label class="flex gap-2 justify-center">
                        <p class="text-blue-500 font-black mt-2">Ingresar enunciado  </p>
                        <input class="w-60 text-center bg-gray-200 text-black border border-gray-200 rounded" type="text"
                            name="title" autofocus>
                    </label>

                    <label class="flex gap-2 justify-center">
                        <p class="text-blue-500 font-black mt-2">Ingresar el nombre del servicio</p>
                        <input class="w-60 text-center bg-gray-200 text-black border border-gray-200 rounded"
                            type="text" name="name">
                    </label>

                    <label class="flex gap-2 justify-center">
                        <p class="text-blue-500 font-black mt-5">Ingresar la descripcion del servicio</p>
                        <textarea class="text-center bg-gray-200 text-black border border-gray-200 rounded"
                            name="description"></textarea>
                    </label>

                    <label class="flex gap-2 justify-center flex-col items-center">
                        <i class="fas fa-cloud-upload-alt fa-3x text-blue-500 cursor-pointer hover:text-blue-600"></i>
                        <p class="text-blue-500 font-black cursor-pointer hover:text-blue-600">Ingresar imagen del servicio</p>
                        <input type="file" name="image" class="hidden" accept="image/*">
                    </label>

                    <label class="flex gap-2 justify-center" for="form_posts">
                        <p class="text-blue-500 font-black mt-2">Ingresar el tipo de servicio</p>
                        <select name="type_name" class=" border-0 rounded-xl">
                            <option disabled selected>Seleccione un tipo</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->name }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </label>

                    <label class="flex gap-2 justify-center">
                        <input
                            class="mt-5 cursor-pointer bg-blue-600 py-3 px-5 rounded-full text-white hover:bg-blue-800"
                            type="submit" value="crear servicio">
                    </label>
                </form>
            </article>
        </main>
    @endif
</div>
