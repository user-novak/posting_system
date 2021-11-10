<div>
    @if (!is_null($card->user->profile_photo_url))
        <div class=" bg-white flex flex-wrap px-5 gap-5 my-4">
            <div class="py-5 px-5">
                <figure>
                    <img class="object-center object-cover rounded-full h-48 w-48"
                        src={{ $card->user->profile_photo_url }} alt="">
                </figure>
            </div>

            <div class="mt-7 flex flex-col">
                <h2 class="flex justify-center font-mono text-2xl">
                    USUARIO
                </h2>
                <div class="flex flex-col mt-5">
                    <p class="font-serif text-2xl">{{ $card->user->name }}</p>
                    <p>{{ $card->user->email }}</p>
                </div>
            </div>

            <div class="mt-7">
                <H2 class="flex justify-center font-mono text-2xl">
                    CONTACTAR CON EL USUARIO
                </H2>
                <div class=" flex flex-col gap-2 mt-3">
                    <p>
                        <i class="fas fa-phone-square-alt"></i>
                        @if (empty($card->user->profile->cellphone_number))
                            <span>numero no definido</span>
                        @else
                            {{ $card->user->profile->cellphone_number }}

                        @endif
                    </p>
                    <p>
                        <i class="fas fa-home"></i>
                        @if (empty($card->user->profile->address))
                            <span>direccion no definida</span>
                        @else
                            {{ $card->user->profile->address }}

                        @endif
                    </p>
                    <p>
                        <i class="fab fa-facebook-square"></i>
                        @if (empty($card->user->profile->facebook))
                            <span>direccion no definida</span>
                        @else
                            {{ $card->user->profile->facebook }}

                        @endif
                    </p>
                    <p>
                        <i class="fab fa-linkedin"></i>
                        @if (empty($card->user->profile->linkedin))
                            <span>linkedin no definido</span>
                        @else
                            {{ $card->user->profile->linkedin }}

                        @endif
                    </p>
                </div>
            </div>
        </div>
    @endif
</div>