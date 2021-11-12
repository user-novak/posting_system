<div>

    @foreach ($posts as $post)
        @foreach ($imgs as $img)
            @if ($img->imageable_id == $post->id && $img->imageable_type == 'use App\Models\Post')
                @if ($post->user_id == $user->id)
                    <div class=" hidden" wire:init='load'>

                    </div>
                @endif
            @endif
        @endforeach
    @endforeach


    @if ($flag)
        {{-- posts section --}}
        <section>
            <div>
                <h1 class="text-5xl mb-5 text-center text-gray-500 my-auto mx-auto py-10 font-mono">MIS PRODUCTOS</h1>
            </div>
            <div
                class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
                @foreach ($posts as $post)
                    @foreach ($imgs as $img)
                        @if ($img->imageable_id == $post->id && $img->imageable_type == 'use App\Models\Post')
                            @if ($post->user_id == $user->id)
                                <article class="bg-white shadow-lg rounded overflow-hidden">
                                    <img class="h-60 w-full object-cover" src="{{ asset($img->url) }}" alt=""><br>
                                    <div class="px-6 py-4">
                                        <h1>{{ Str::limit($post->title, 20) }}</h1>
                                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                                        <p>{{ Str::limit($post->product->description, 40) }}</p>
                                        <div class="flex flex-col justify-start">
                                            <p class="text-sm text-gray-500 mt-1">
                                                <i class="fas fa-tags"></i>
                                                {{ $post->product->category->name }}
                                            </p>

                                            <p class="text-sm text-gray-500">
                                                <i class="fas fa-shopping-bag"></i>
                                                {{ Str::limit($post->product->name, 20) }}
                                            </p>
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

        {{-- aplicando el paginate --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">
            {{ $posts->links() }}
        </div>
    @else
        <p>No ha publicado productos :(</p>
    @endif

</div>
