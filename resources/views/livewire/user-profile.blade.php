<div class="flex flex-col flex-wrap content-center items-center">
    <h2 class=" text-3xl text-blue-600">COMO CONTACTARLO</h2>

    @if (empty($user->profile->facebook))
        <span>Oh Oh aun no tienes perfil creado, crea un perfil para que tus clientes puedan contactarte ;)</span>
        <div>
            <div>
                <span>Numero de celular</span>
                <input type="number" placeholder="Ingrese numero de celular" wire:model="cellphone_number">
            </div>

            <div>
                <span>Direccion</span>
                <input type="text" placeholder="Ingrese direccion" wire:model="address">
            </div>
            <div>
                <span>Facebook</span>
                <input type="text" name="facebook" placeholder="Ingrese su facebook" wire:model="facebook">
            </div>

            <div>
                <span>Linkedin</span>
                <input type="text" name="linkedin" placeholder="Ingrese su linkedin" wire:model="linkedin">
            </div>
        </div>
        <div>
            <input class="cursor-pointer" type="submit" value="crear perfil" wire:click='update({{ $user->profile }})'>
        </div>
    @else
        <div class="flex flex-col gap-y-4 h-96 items-center flex-wrap justify-center">
            <div>
                <span>Actual numero telefonico: {{ $user->profile->cellphone_number }}</span>
                <span>Nuevo numero:</span>
                <input class="w-60 text-center bg-gray-200 text-black border border-gray-200 rounded" type="number"
                    placeholder="Ingrese numero de celular" wire:model="cellphone_number">
            </div>
            <div>
                <span>Actual direccion: {{ $user->profile->address }}</span>
                <span>Nueva direccion:</span>
                <input class="w-60 text-center bg-gray-200 text-black border border-gray-200 rounded" type="text"
                    placeholder="Ingrese direccion" wire:model="address">
            </div>
            <div>
                <span>Actual cuenta de facebook: {{ $user->profile->facebook }}</span>
                <span>Nueva cuenta:</span>
                <input class="w-60 text-center bg-gray-200 text-black border border-gray-200 rounded" type="text"
                    name="facebook" placeholder="Ingrese su facebook" wire:model="facebook">
            </div>
            <div>
                <span>Actual cuenta de linkedin: {{ $user->profile->linkedin }}</span>
                <span>Nueva cuenta:</span>
                <input class="w-60 text-center bg-gray-200 text-black border border-gray-200 rounded" type="text"
                    name="linkedin" placeholder="Ingrese su linkedin" wire:model="linkedin">
            </div>

            <div>
                <input class="cursor-pointer bg-blue-600 py-3 px-5 rounded-full text-white hover:bg-blue-800"
                    type="submit" value="actualizar perfil" wire:click='update({{ $user->profile }})'>
            </div>
        </div>

    @endif

</div>
