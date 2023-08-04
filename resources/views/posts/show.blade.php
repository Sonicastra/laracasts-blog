<x-layouts.layout>
    <div class="bg-amber-100 rounded-md shadow-md space-y-4 p-6 mt-20">
        <div class="flex items-center justify-between">
            <h1 class="text-amber-800 font-semibold text-3xl">{{$post->title}}</h1>
            <div class="space-x-2">
                <x-category-button :category="$post->category"/>
            </div>
        </div>

        <span class="mt-2 block text-amber-500 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
        <p class="first-letter:text-amber-900 first-letter:font-bold first-letter:text-xl">{!! $post->body !!}</p>
        <div class="flex items-center justify-end">
            <a href="/?author={{ $post->author->name }}">
                <span class="font-bold text-amber-900 italic">
                    by {{$post->author->name}}
                </span>
            </a>
        </div>
    </div>
    <div class="mt-8">
        <a href="/posts"
           class="text-sm text-amber-700 font-semibold bg-amber-200 hover:bg-amber-300 duration-200 rounded-full py-2 px-8"
        >Back</a>
    </div>
</x-layouts.layout>