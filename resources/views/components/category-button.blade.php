@props(['category'])

<a href="/categories/{{ $category->slug }}"
   class="px-4 py-1 border border-amber-600 rounded-full text-amber-500 text-xs uppercase font-bold"
>
    #{{ $category->name }}
</a>
