<div>

    {{-- posts section --}}
    <section>
        <div>
            <h1 class="text-5xl mb-5 text-center text-gray-500 my-auto mx-auto py-10 font-mono">MIS
                PRODUCTOS</h1>
        </div>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($posts as $post)
                @foreach ($imgs as $img)
                    @if ($img->imageable_id == $post->id && $img->imageable_type == 'use App\Models\Post')
                        @if ($post->user_id == $user->id)
                            <article class="bg-white shadow-lg rounded overflow-hidden" wire:init='load'>
                                <img class="h-60 w-full object-cover" src="{{ asset($img->url) }}" alt=""><br>
                                <div class="px-6 py-4">
                                    <h1>{{ Str::limit($post->title, 20) }}</h1>
                                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                                    <p>{{ Str::limit($post->product->description, 40) }}</p>
                                    <div class="flex flex-row flex-wrap justify-start gap-x-2">
                                        <p class="text-sm text-gray-500 mt-1">
                                            <i class="fas fa-tags"></i>
                                            {{ $post->product->category->name }}
                                        </p>

                                        <p class="text-sm text-gray-500 mt-1">
                                            <i class="fas fa-shopping-bag"></i>
                                            {{ Str::limit($post->product->name, 20) }}
                                        </p>
                                    </div>
                                    <div class="mt-1 grid grid-cols-2 gap-x-1">
                                        <a href="{{ route('posts.edit', $post) }}"
                                            class="text-center bg-blue-500  py-1 px-3 text-white font-semibold rounded-lg">
                                            <i class="fas fa-edit mr-1"></i>edit</a>
                                        <button wire:click='destroy({{ $post->id }})'
                                            class="text-center bg-red-500  py-1 px-3 text-white font-semibold rounded-lg hover:bg-red-600"><i
                                                class="fas fa-trash mr-1"></i>delete</button>
                                    </div>
                                    <a href="{{ route('posts.show', $post) }}"
                                        class="block text-center w-full mt-4 py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                                        más información
                                    </a>
                                </div>
                            </article>
                        @endif
                    @endif
                @endforeach
            @endforeach
        </div>
    </section>

    @if ($post_save_count >= 1)
        {{-- aplicando el paginate --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">
            {{ $posts->links() }}
        </div>
    @else
        <div class="flex flex-col flex-wrap content-center">
            <h2 class="text-blue-400 font-black text-3xl">Aun no has publicado ningun producto :(</h2>
            <img class="w-96 h-96 ml-20" src="{{ asset('img/post/save_vacio.png') }}" alt="">
        </div>
    @endif

</div>
