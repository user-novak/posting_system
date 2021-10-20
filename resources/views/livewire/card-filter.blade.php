<div>
    {{-- cards section --}}
    <section class="mt-10">
        <div>
            <h1 class="text-5xl mb-5 text-center text-gray-500 my-auto mx-auto py-10 font-mono">ULTIMOS SERVICIOS
            </h1>
        </div>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($cards as $card)
                @foreach ($imgs as $img)
                    @if ($img->id == $card->id)
                        <x-card-card :card="$card" :img="$img" />
                    @endif
                @endforeach
            @endforeach
        </div>
    </section>

    {{-- aplicando el paginate --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">
        {{ $cards->links() }}
    </div>
</div>