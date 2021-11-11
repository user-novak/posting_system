<div class="flex flex-col flex-wrap content-center items-center gap-2 mt-2">
    <h2>Como encontrarlo</h2>
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
        <div>
            <div>
                <span>Actual numero telefonico: {{$user->profile->cellphone_number}}</span>
                <span>Nuevo numero:</span>
                <input type="number" placeholder="Ingrese numero de celular" wire:model="cellphone_number">
            </div>
            <div>
                <span>Actual direccion: {{$user->profile->address}}</span>
                <span>Nueva direccion:</span>
                <input type="text" placeholder="Ingrese direccion" wire:model="address">
            </div>
            <div>
                <span>Actual cuenta de facebook: {{$user->profile->facebook}}</span>
                <span>Nueva cuenta:</span>
                <input type="text" name="facebook" placeholder="Ingrese su facebook" wire:model="facebook">
            </div>
            <div>
                <span>Actual cuenta de linkedin: {{$user->profile->linkedin}}</span>
                <span>Nueva cuenta:</span>
                <input type="text" name="linkedin" placeholder="Ingrese su linkedin" wire:model="linkedin">
            </div>
        </div>
        <div>
            <input class="cursor-pointer" type="submit" value="actualizar" wire:click='update({{ $user->profile }})'>
        </div>
    @endif


</div>