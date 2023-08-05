<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl text-amber-800">
        Latest <span
                class="bg-clip-text text-transparent underline decoration-amber-500 bg-gradient-to-r from-amber-500 via-yellow-500 to-orange-500">Funko Blog</span>
        News
    </h1>

    <div class="md:flex items-center md:justify-between my-12">
        <!--  Category -->
        <div class="relative bg-amber-100 rounded-md md:w-52">
            <x-category-dropdown/>
        </div>

        <!-- Search -->
        <div class="mt-4 md:mt-0 md:w-80">
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