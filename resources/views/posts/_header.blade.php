<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-amber-800">Laravel From Scratch</span> News
    </h1>

    <div class="sm:flex items-center sm:justify-between my-12">
        <!--  Category -->
        <div class="relative bg-amber-100 rounded-md sm:w-52">
            <x-category-dropdown/>
        </div>

        <!-- Search -->
        <div class="mt-4 sm:mt-0 sm:w-80">
            <form method="GET" action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <label for="search"></label>
                <input type="text"
                       name="search"
                       id="search"
                       placeholder="Search..."
                       class="block w-full rounded-md border-0 py-1.5 bg-amber-100 text-amber-800 shadow-md ring-inset ring-amber-300 placeholder:text-amber-800 focus:ring-2 focus:ring-inset focus:ring-amber-600 sm:text-sm sm:leading-6"
                       value="{{ trim(request('search')) }}"
                >
            </form>
        </div>
    </div>
</header>