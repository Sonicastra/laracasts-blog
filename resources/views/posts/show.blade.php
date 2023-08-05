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

    <section class="space-y-6">

        @auth
            <form method="post" action="/posts/{{ $post->slug }}/comments" class="bg-yellow-300 rounded-md shadow-md p-6 mt-6">
                @csrf

                <div class="flex items-center space-x-4">
                    <img src="https://i.pravatar.cc/100?u={{ auth()->id() }}" class="rounded-full border border-orange-300 w-8 h-8 shadow-lg"
                         alt="Profile image">
                    <h2 class="text-lg text-amber-800 font-semibold">Add a comment?</h2>
                </div>

                <div>
                    <label for="body" class="hidden"></label>
                    <div class="mt-4">
                        <textarea id="body"
                                  name="body"
                                  rows="5"
                                  class="block w-full rounded-md border-0 py-1.5 bg-amber-100 text-amber-900 shadow-sm ring-1 ring-inset ring-amber-300 focus:ring-2 focus:ring-inset focus:ring-amber-600 sm:text-sm sm:leading-6"
                                  required>
                        </textarea>
                        @error('body')
                        <small class="text-red-500 mt-1">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-end mt-6">
                    <button type="submit"
                            class="text-sm text-amber-300 font-semibold bg-amber-800 hover:bg-amber-600 hover:text-amber-100 duration-200 rounded-full py-2 px-8"
                    >Post
                    </button>
                </div>
            </form>
        @else
            <div class="flex items-center space-x-2 text-base text-amber-700 font-semibold my-10">
                <i class="fa-solid fa-angles-right text-amber-700"></i>
                <a href="/register"><span class="underline decoration-amber-500">Register</span> or</a>
                <a href="/login"><span class="underline decoration-amber-500">Login</span> to leave a comment.</a>
            </div>
        @endauth

        @foreach($post->comments as $comment)
            <x-post-comment :comment="$comment"/>
        @endforeach
    </section>

    <div class="mt-10">
        <a href="/posts"
           class="text-sm text-amber-700 font-semibold bg-amber-200 hover:bg-amber-300 duration-200 shadow-md rounded-full py-2 px-8"
        >Back</a>
    </div>
</x-layouts.layout>