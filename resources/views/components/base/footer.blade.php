<footer id="newsletter" class="bg-amber-500 rounded-lg text-center text-amber-800 py-16 px-10 mt-16">
    <h5 class="text-3xl">Stay in touch with the latest posts</h5>
    <p class="text-amber-800 text-sm">Sign up to our newsletter</p>

    <div class="mt-10">
        <div class="relative inline-block mx-auto bg-yellow-400 rounded-full pl-4">

            <form method="POST" action="/newsletter" class="flex text-sm">
                @csrf

                <div class="flex items-center">
                    <label for="email" class="flex items-center inline-block">
                        <i class="fa-solid fa-envelope mr-3"></i>
                    </label>

                    <div>
                        <input id="email" name="email" type="text" placeholder="Your email address"
                               class="bg-yellow-400 text-amber-800 placeholder-amber-800 placeholder:text-sm focus:bg-tr focus:outline-none focus:ring-0 border-none">
                    </div>
                </div>

                @error('email')
                <small class="text-red-500 mt-1">{{ $message }}</small>
                @enderror

                <button type="submit"
                        class="transition-colors duration-300 bg-orange-500 hover:bg-orange-600 rounded-full text-xs font-semibold text-amber-800 uppercase py-3 px-8 ml-4"
                >
                    Subscribe
                </button>
            </form>
        </div>
    </div>
</footer>