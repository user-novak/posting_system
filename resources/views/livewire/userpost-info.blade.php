<div>
    @if (!is_null($post->user->profile_photo_url))
        <div class=" bg-white flex flex-wrap px-5 gap-5 my-4">
            <div class="py-5 px-5">
                <figure>
                    <img class="object-center object-cover rounded-full h-48 w-48"
                        src={{ $post->user->profile_photo_url }} alt="">
                </figure>
            </div>

            <div class="mt-7 flex flex-col">
                <h2 class="flex justify-center font-mono text-2xl">
                    USUARIO
                </h2>
                <div class="flex flex-col mt-5">
                    <p class="font-serif text-2xl">{{ $post->user->name }}</p>
                    <p>{{ $post->user->email }}</p>
                </div>
            </div>

            <div class="mt-7">
                <H2 class="flex justify-center font-mono text-2xl">
                    CONTACTAR CON EL USUARIO
                </H2>
                <div class=" flex flex-col gap-2 mt-3">
                    <p>
                        <i class="fas fa-phone-square-alt"></i>
                        @if (empty($post->user->profile->cellphone_number))
                            <span>numero no definido</span>
                        @else
                            {{ $post->user->profile->cellphone_number }}

                        @endif
                    </p>
                    <p>
                        <i class="fas fa-home"></i>
                        @if (empty($post->user->profile->address))
                            <span>direccion no definida</span>
                        @else
                            {{ $post->user->profile->address }}

                        @endif
                    </p>
                    <p>
                        <i class="fab fa-facebook-square"></i>
                        @if (empty($post->user->profile->facebook))
                            <span>direccion no definida</span>
                        @else
                            {{ $post->user->profile->facebook }}

                        @endif
                    </p>
                    <p>
                        <i class="fab fa-linkedin"></i>
                        @if (empty($post->user->profile->linkedin))
                            <span>linkedin no definido</span>
                        @else
                            {{ $post->user->profile->linkedin }}

                        @endif
                    </p>
                </div>
            </div>
        </div>
    @endif
</div>
