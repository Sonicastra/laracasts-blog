@props(['comment'])

<article class="flex bg-orange-500 rounded-lg shadow-lg mt-10 p-6">
    <div class="flex-shrink-0 mr-4">
        <img src="https://i.pravatar.cc/100?u={{ $comment->user_id }}" class="rounded-full border border-orange-300 w-16 h-16 shadow-lg"
             alt="Profile image">
    </div>
    <div>
        <header>
            <h3 class="text-amber-200 font-semibold">{{ $comment->author->username }}</h3>
            <p class="text-sm text-amber-300">Posted
                <time>{{ $comment->created_at->format('F j, Y, g:i a') }}</time>
            </p>
        </header>
        <p class="text-orange-100 mt-4">{{ $comment->body }}</p>
    </div>
</article>