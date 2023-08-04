@props(['post'])

<article {{ $attributes->merge(['class' => 'bg-amber-100 shadow-md rounded-md mt-6']) }}>
    <div class="py-6 px-5 h-full flex flex-col">
        <div>
            {{-- TODO --}}
            <img src="/images/illustration-3.png" alt="Blog Post illustration" class="rounded-md">
        </div>

        <div class="mt-6 flex flex-col justify-between flex-1">
            <header>
                <div class="space-x-2">
                    <x-category-button :category="$post->category"/>
                </div>

                <div class="mt-4">
                    <h1 class="text-amber-800 font-semibold text-3xl clamp one-line">
                        <a href="/posts/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </h1>

                    <span class="mt-2 block text-amber-500 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-4">
                <p>
                    {{ $post->intro }}
                </p>
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3">
                        <h5 class="font-bold text-amber-900 italic">
                            <a href="posts/?author={{ $post->author->username }}">{{ $post->author->name }}
                            </a>
                        </h5>
                    </div>
                </div>

                <div>
                    <a href="/posts/{{ $post->slug }}"
                       class="text-xs text-amber-700 font-semibold bg-amber-200 hover:bg-amber-300 duration-200 rounded-full py-2 px-8"
                    >Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>