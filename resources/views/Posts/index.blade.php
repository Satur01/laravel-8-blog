<x-layout>
    <div class="container mx-auto xl:max-w-xl flex flex-col justify-left items-start mt-6 space-y-8">
        @foreach ($posts as $post)
            <article>
                <h1 class="font-bold text-2xl text-gray-800 hover:underline hover:text-green-400">
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h1>
    
                <div class="font-light text-gray-500">
                    {{  $post->excerpt }}
                </div>
            </article>
        @endforeach
    </div>
</x-layout>