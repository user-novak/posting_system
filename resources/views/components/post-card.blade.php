@props(['post','img'])


<article class="bg-white shadow-lg rounded overflow-hidden">
    <img class="h-35 w-full object-cover" src="{{ $img->url }}" alt=""><br>
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
        <a href="{{ route('posts.show', $post) }}" class="block text-center w-full mt-4 py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
            más información
        </a>
    </div>
</article>