<x-layout>
    <div class="container mx-auto xl:max-w-xl flex flex-col justify-center items-center mt-6">
        <article>
            <h1 class="font-bold text-2xl text-gray-800">{{ $post->title }}</h1>

            <div class="font-light text-gray-500">
                {!! $post->body !!}
            </div>
        </article>
        <a class="underline text-red-400 hover:text-green-400" href="/">Go back</a>
    </div>  
</x-layout>