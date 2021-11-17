<div class="flex flex-col flex-wrap content-center items-center">
    <h2 class=" text-3xl text-blue-600 font-black mb-5">COMO CONTACTARLO</h2>

    @if (empty($user->profile->facebook))
        <span class="text-blue-500 font-black mb-5">Oh Oh aun no tienes perfil creado, crea un perfil para que tus
            clientes puedan contactarte ;)</span>
        <div class="flex flex-col gap-y-4 flex-wrap">
            <div>
                <span class="text-blue-500">N° celular</span>
                <input class="w-60 text-center bg-gray-200 text-black border border-gray-200 rounded" type="number"
                    placeholder="Ingrese numero de celular" wire:model="cellphone_number">
            </div>

            <div>
                <span class="text-blue-500">Direccion</span>
                <input class="w-60 text-center bg-gray-200 text-black border border-gray-200 rounded" type="text"
                    placeholder="Ingrese direccion" wire:model="address">
            </div>
            <div>
                <span class="text-blue-500">Facebook</span>
                <input class="w-60 text-center bg-gray-200 text-black border border-gray-200 rounded" type="text"
                    name="facebook" placeholder="Ingrese su facebook" wire:model="facebook">
            </div>

            <div>
                <span class="text-blue-500">Linkedin</span>
                <input class="w-60 text-center bg-gray-200 text-black border border-gray-200 rounded" type="text"
                    name="linkedin" placeholder="Ingrese su linkedin" wire:model="linkedin">
            </div>
        </div>
        <div>
            <input class="mt-5 cursor-pointer bg-blue-600 py-3 px-5 rounded-full text-white hover:bg-blue-800"
                type="submit" value="crear perfil" wire:click='update({{ $user->profile }})'>
        </div>
    @else
        <div class="flex flex-col gap-y-4 items-center flex-wrap justify-center">
            <div>
                <span class="text-blue-500 font-black">Actualizar numero:</span>
                <input class="w-60 text-center bg-gray-200 text-black border border-gray-200 rounded" type="number"
                    placeholder="Ingrese numero de celular" wire:model="cellphone_number">
            </div>
            <div>
                <span class="text-blue-500 font-black">Actualizar direccion:</span>
                <input class="w-60 text-center bg-gray-200 text-black border border-gray-200 rounded" type="text"
                    placeholder="Ingrese direccion" wire:model="address">
            </div>
            <div>
                <span class="text-blue-500 font-black">Actualizar cuenta fb:</span>
                <input class="w-60 text-center bg-gray-200 text-black border border-gray-200 rounded" type="text"
                    name="facebook" placeholder="Ingrese su facebook" wire:model="facebook">
            </div>
            <div>
                <span class="text-blue-500 font-black">Actualizar cuenta lk:</span>
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
