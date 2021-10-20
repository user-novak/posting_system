<form class="relative text-gray-600" autocomplete="off">
    <input wire:model="search" type="search" name="serch" placeholder="Search"
        class="w-full bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
    <button type="submit"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded absolute right-0 top-0">
        Buscar
    </button>
    <ul class="absolute left-0 w-full bg-white mt-1 rounded-lg overflow-hidden">
        <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">Resultado de busqueda 1</li>
        <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">Resultado de busqueda 2</li>
        <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">Resultado de busqueda 3</li>
        <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">{{$search}}</li>
    </ul>
</form>