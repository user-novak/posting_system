<div>
    @if (empty($user->profile->cellphone_number))
        <main class="grid grid-cols-2">
            <div>
                @livewire('user-profile',['user' => $user])
            </div>
            <div>
                <p class="text center text-3xl text-blue-600 uppercase font-black mt-4">
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
            <article class="flex flex-col flex-wrap content-center items-center">
                <h2 class="text-center text-blue-600 text-3xl font-black uppercase mb-7 mt-7">da a conocer tus
                    habilidades al
                    mundo</h2>
                <form action="{{ route('cards.store', $user) }}" method="POST" class="flex flex-col gap-y-3"
                    name="form_posts" enctype="multipart/form-data">
                    @csrf
                    <label class="flex flex-col gap-2 justify-center">
                        <p class="text-blue-500 font-black mt-2 capitalize">Ingresar enunciado</p>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded" type="text"
                            name="title" autofocus>
                    </label>
                    @error('title')
                        <small class="text-red-500">*{{ $message }}</small>
                    @enderror
                    <label class="flex flex-col gap-2 justify-center">
                        <p class="text-blue-500 font-black mt-2 capitalize">Ingresar el nombre del servicio</p>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded" type="text"
                            name="name" autocomplete="off">
                    </label>
                    @error('name')
                        <small class="text-red-500">*{{ $message }}</small>
                    @enderror
                    <label class="flex flex-col gap-2 justify-center">
                        <p class="text-blue-500 font-black mt-5 capitalize">Ingresar la descripcion del servicio</p>
                        <textarea class="w-full bg-gray-200 text-black border border-gray-200 rounded"
                            name="description"></textarea>
                    </label>
                    @error('description')
                        <small class="text-red-500">*{{ $message }}</small>
                    @enderror
                    <div class="flex flex-row gap-3">
                        <label class="flex gap-2 justify-center flex-col items-center">
                            <i
                                class="fas fa-cloud-upload-alt fa-3x text-blue-500 cursor-pointer hover:text-blue-600"></i>
                            <p class="text-blue-500 font-black cursor-pointer hover:text-blue-600 capitalize">Ingresar
                                imagen del servicio</p>
                            <input type="file" name="image" class="hidden" accept="image/*">
                            @error('image')
                                <small class="text-red-500">*{{ $message }}</small>
                            @enderror
                        </label>

                        <label class="flex flex-col gap-2 justify-center" for="form_posts">
                            <p class="text-blue-500 font-black mt-2 capitalize">Ingresar el tipo de servicio</p>
                            <select name="type_name" class=" border-0 rounded-xl">
                                <option disabled selected>Seleccione un tipo</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->name }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                            @error('type_name')
                                <small class="text-red-500">*{{ $message }}</small>
                            @enderror
                        </label>
                    </div>

                    <label class="flex gap-2 justify-center">
                        <input
                            class="mt-5 cursor-pointer bg-blue-600 py-3 px-5 rounded-full text-white font-black capitalize hover:bg-blue-800"
                            type="submit" value="crear servicio">
                    </label>
                </form>
            </article>
        </main>
    @endif
</div>
