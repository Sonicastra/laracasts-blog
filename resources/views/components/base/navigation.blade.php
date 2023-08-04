<nav class="flex items-center justify-between">
    <div class="border-2 border-orange-400 rounded-full bg-yellow-500 shadow p-2">
        <a href="/">
            <i class="fa-solid fa-crown text-4xl text-amber-800"></i>
        </a>
    </div>

    <ul class="flex space-x-4">
        <li>
            <a href="/" class="text-xs text-amber-800 hover:text-orange-600 duration-200 font-bold uppercase">
                Home Page
            </a>
        </li>
        <li>
            <a href="/posts" class="text-xs text-amber-800 hover:text-orange-600 duration-200 font-bold uppercase">
                Blog
            </a>
        </li>
        @auth
            <li>
                <span class="text-xs text-amber-800 font-bold uppercase">
                    Welcome, {{ auth()->user()->name }}
                </span>
            </li>
            <li>
                <form method="post" action="/logout">
                    @csrf
                    <button type="submit" class="text-xs text-amber-800 hover:text-orange-600 duration-200 font-bold uppercase">Logout</button>
                </form>
            </li>
        @else
            <li>
                <a href="/login" class="text-xs text-amber-800 hover:text-orange-600 duration-200 font-bold uppercase">
                    Login
                </a>
            </li>
            <li>
                <a href="/register" class="text-xs text-amber-800 hover:text-orange-600 duration-200 font-bold uppercase">
                    Register
                </a>
            </li>
        @endauth
        <li>
            <a href="#"
               class="ml-3 rounded-full text-xs text-orange-700 hover:bg-amber-400 shadow duration-200 font-semibold bg-amber-500 uppercase py-3 px-5">
                Subscribe for Updates
            </a>
        </li>
    </ul>
</nav>