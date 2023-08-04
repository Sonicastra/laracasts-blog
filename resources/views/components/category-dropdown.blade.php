<x-dropdown>
    <x-slot name="trigger">
        <button class="w-full rounded-md shadow-md border-0 py-2 pl-3 pr-9 text-sm text-amber-800 font-semibold text-left flex">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

            <x-icon name="down-arrow" color="#92400e" class="absolute pointer-events-none" style="right: 12px;"/>
        </button>
    </x-slot>

    <x-dropdown-item href="/posts/?{{ http_build_query(request()->except('category', 'page')) }}" :active="request()->routeIs('home')">All
    </x-dropdown-item>

    @foreach ($categories as $category)
        <x-dropdown-item
                href="/posts/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
                :active='request()->is("categories/{$category->slug}")'
        >{{ ucwords($category->name) }}</x-dropdown-item>
    @endforeach
</x-dropdown>