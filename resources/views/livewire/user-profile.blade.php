<div class="flex flex-col flex-wrap content-center items-center">
    <h2 class=" text-3xl text-blue-600 font-black mb-10 mt-7">COMO CONTACTARLO</h2>

    @if (empty($user->profile->facebook))
        <span class="text-blue-500 font-black mb-5">Oh Oh aun no tienes perfil creado, crea un perfil para que tus
            clientes puedan contactarte ;)</span>
        <div class="flex flex-col gap-y-4 flex-wrap">
            <div>
                <span class="text-blue-500 font-black">Numero de celular</span>
                <input class="w-full bg-gray-200 text-black border border-gray-200 rounded" type="number"
                    placeholder="Ingrese numero de celular" name="cellphone_number" wire:model="cellphone_number">
            </div>
            
            @error('cellphone_number')
                <small class="text-red-500">*{{ $message }}</small>
            @enderror
            
            <div>
                <span class="text-blue-500 font-black">Direccion</span>
                <textarea class="bg-gray-200 text-black border border-gray-200 rounded w-full"
                    placeholder="Escriba su dirección actual" name="address" wire:model="address"></textarea>
            </div>

            @error('address')
                <small class="text-red-500">*{{ $message }}</small>
            @enderror

            <div>
                <span class="text-blue-500 font-black">Facebook</span>
                <input class="w-full bg-gray-200 text-black border border-gray-200 rounded" type="text" name="facebook"
                    placeholder="Ingrese su facebook" autocomplete="off" name="facebook" wire:model="facebook">
            </div>

            @error('facebook')
                <small class="text-red-500">*{{ $message }}</small>
            @enderror

            <div>
                <span class="text-blue-500 font-black">Linkedin</span>
                <input class="w-full bg-gray-200 text-black border border-gray-200 rounded" type="text" name="linkedin"
                    placeholder="Ingrese su linkedin" autocomplete="off" name="linkedin" wire:model="linkedin">
            </div>

            @error('linkedin')
                <small class="text-red-500">*{{ $message }}</small>
            @enderror

        </div>
        <div>
            <input
                class="mt-5 cursor-pointer bg-blue-600 py-3 px-5 rounded-full text-white capitalize hover:bg-blue-800"
                type="submit" value="crear perfil" wire:click='update({{ $user->profile }})'>
        </div>
    @else
        <div class="flex flex-col gap-y-4 items-center flex-wrap justify-center">
            <div>
                <span class="text-blue-500 font-black capitalize mr-3">Actualizar numero de celular:</span>
                <input class="w-full bg-gray-200 text-black border border-gray-200 rounded" type="number"
                    placeholder="Ingrese numero de celular" name="cellphone_number" wire:model="cellphone_number">
            </div>

            @error('cellphone_number')
                <small class="text-red-500">*{{ $message }}</small>
            @enderror

            <div class="flex flex-row flex-wrap items-center gap-2">
                <span class="text-blue-500 font-black capitalize">Actualizar direccion de usuario:</span>
                <textarea class="bg-gray-200 text-black border border-gray-200 rounded w-full" name="address"
                    wire:model="address"></textarea>
            </div>

            @error('address')
                <small class="text-red-500">*{{ $message }}</small>
            @enderror

            <div>
                <span class="text-blue-500 font-black capitalize">Actualizar cuenta de facebook:</span>
                <input class="w-full bg-gray-200 text-black border border-gray-200 rounded" type="text" name="facebook"
                    placeholder="Ingrese su facebook" wire:model="facebook">
            </div>

            @error('facebook')
                <small class="text-red-500">*{{ $message }}</small>
            @enderror

            <div>
                <span class="text-blue-500 font-black capitalize">Actualizar cuenta de linkedin:</span>
                <input class="w-full bg-gray-200 text-black border border-gray-200 rounded" type="text" name="linkedin"
                    placeholder="Ingrese su linkedin" wire:model="linkedin">
            </div>

            @error('linkedin')
                <small class="text-red-500">*{{ $message }}</small>
            @enderror

            <div>
                <input
                    class="cursor-pointer mt-16 bg-blue-600 py-3 px-5 rounded-full text-white font-black capitalize hover:bg-blue-800"
                    type="submit" value="actualizar perfil" wire:click='update({{ $user->profile }})'>
            </div>
        </div>

    @endif

</div>
