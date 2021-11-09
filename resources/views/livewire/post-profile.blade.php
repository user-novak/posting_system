<div class="flex flex-col flex-wrap content-center items-center gap-2 mt-2">
    <h2>Como encontrarlo</h2>

    <div>
        <div>
            Numero de celular
            @if (empty($user->profile->cellphone_number))
            <input type="number" placeholder="Ingrese numero de celular" wire:model="cellphone_number">
            @else
            <input type="number" value={{ $user->profile->cellphone_number }} wire:model="cellphone_number">
            {{ $user->profile->cellphone_number }}
            @endif
        </div>

        <div>
            Direccion
            @if (empty($user->profile->address))
            <input type="text" placeholder="Ingrese direccion" wire:model="address">
            @else
            <input type="text" value="{{ $user->profile->address }}" wire:model="address">
            {{ $user->profile->address }}
            @endif
        </div>
        <div>
            Facebook
            @if (empty($user->profile->facebook))
            <input type="text" name="facebook" placeholder="Ingrese su facebook" wire:model="facebook">
            @else
            <input type="text" name="facebook" value="{{ $user->profile->facebook }}" wire:model="facebook">
            @endif
        </div>

        <div>
            Linkedin
            @if (empty($user->profile->linkedin))
            <input type="text" name="linkedin" placeholder="Ingrese su linkedin" wire:model="linkedin">
            @else
            <input type="text" name="linkedin" value="{{ $user->profile->linkedin }}" wire:model="linkedin">
            @endif
        </div>
    </div>
    <div>
        <input class="cursor-pointer" type="submit" value="actualizar" wire:click='update({{ $user->profile }})'>
    </div>

</div>