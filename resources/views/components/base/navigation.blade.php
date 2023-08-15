<nav class="bg-orange-100">
    <div class="mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between">
            <div x-data="{ show: false }" @click.away="show = false" class="absolute inset-y-0 left-0 flex items-center sm:hidden">

                <!-- Mobile menu button-->
                <button @click="show = ! show" type="button"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-amber-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#92400e" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#92400e" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

            </div>
            <div class="flex flex-1 items-center justify-center sm:justify-between">
                <div class="border-2 border-orange-400 rounded-full bg-yellow-500 shadow p-2">
                    <a href="/">
                        <i class="fa-solid fa-crown text-4xl text-amber-800"></i>
                    </a>
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <ul class="flex items-center space-x-4">
                            <li class="text-amber-800 hover:text-orange-600 duration-200">
                                <a href="/" class="text-xs font-bold uppercase">
                                    <i class="fa-solid fa-house"></i> Home
                                </a>
                            </li>
                            <li>
                                <a href="/posts" class="text-xs text-amber-800 hover:text-orange-600 duration-200 font-bold uppercase">
                                    Blog
                                </a>
                            </li>
                            @auth
                                <li>
                                    <div x-data="{ show: false }" @click.away="show = false" class="relative ml-3">
                                        <div>
                                            <button @click="show = ! show" type="button"
                                                    class="relative flex rounded-full focus:outline-none border-2 hover:border-orange-500 focus:ring-1 ring-orange-500"
                                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                                <span class="absolute -inset-1.5"></span>
                                                <span class="sr-only">Open user menu</span>
                                                <img class="h-8 w-8 rounded-full"
                                                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                     alt="">
                                            </button>
                                        </div>

                                        <div x-show="show"
                                             class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md shadow-md overflow-hidden bg-yellow-100 ring-1 ring-black ring-opacity-5 focus:outline-none"
                                             role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                            <a href="#"
                                               class="text-sm w-full text-left block text-amber-800 hover:text-white hover:bg-orange-600 duration-200 px-4 py-2"
                                               role="menuitem" tabindex="-1"
                                               id="user-menu-item-0"><i class="fa-regular fa-address-card mr-2"></i>Your
                                                Profile</a>
                                            <a href="#"
                                               class="text-sm w-full text-left block text-amber-800 hover:text-white hover:bg-orange-600 duration-200 px-4 py-2"
                                               role="menuitem" tabindex="-1"
                                               id="user-menu-item-1"><i class="fa-solid fa-gear mr-2"></i>Settings</a>
                                            <form method="post" action="/logout">
                                                @csrf
                                                <button type="submit"
                                                        class="text-sm w-full text-left block text-amber-800 hover:text-white hover:bg-orange-600 duration-200 px-4 py-2"
                                                        role="menuitem" tabindex="-1"
                                                        id="user-menu-item-2">
                                                    <i class="fa-solid fa-right-from-bracket mr-1"></i>
                                                    Logout
                                                </button>
                                            </form>
                                        </div>
                                    </div>
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
                                <a href="#newsletter"
                                   class="ml-3 rounded-full text-xs text-orange-700 hover:bg-amber-400 shadow duration-200 font-semibold bg-amber-500 uppercase py-3 px-5">
                                    Subscribe for Updates
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div x-show="show" class="space-y-1 px-2 pb-3 pt-2">
                <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
                <a href="#"
                   class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
                <a href="#"
                   class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
            </div>
        </div>

    </div>
</nav>


{{--<nav class="flex items-center justify-between">--}}
{{--    <div class="border-2 border-orange-400 rounded-full bg-yellow-500 shadow p-2">--}}
{{--        <a href="/">--}}
{{--            <i class="fa-solid fa-crown text-4xl text-amber-800"></i>--}}
{{--        </a>--}}
{{--    </div>--}}

{{--    <ul class="flex space-x-4">--}}
{{--        <li>--}}
{{--            <a href="/" class="text-xs text-amber-800 hover:text-orange-600 duration-200 font-bold uppercase">--}}
{{--                Home Page--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="/posts" class="text-xs text-amber-800 hover:text-orange-600 duration-200 font-bold uppercase">--}}
{{--                Blog--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        @auth--}}
{{--            <li>--}}
{{--                <span class="text-xs text-amber-800 font-bold uppercase">--}}
{{--                    Welcome, {{ auth()->user()->name }}--}}
{{--                </span>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <form method="post" action="/logout">--}}
{{--                    @csrf--}}
{{--                    <button type="submit" class="text-xs text-amber-800 hover:text-orange-600 duration-200 font-bold uppercase">Logout</button>--}}
{{--                </form>--}}
{{--            </li>--}}
{{--        @else--}}
{{--            <li>--}}
{{--                <a href="/login" class="text-xs text-amber-800 hover:text-orange-600 duration-200 font-bold uppercase">--}}
{{--                    Login--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="/register" class="text-xs text-amber-800 hover:text-orange-600 duration-200 font-bold uppercase">--}}
{{--                    Register--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        @endauth--}}
{{--        <li>--}}
{{--            <a href="#"--}}
{{--               class="ml-3 rounded-full text-xs text-orange-700 hover:bg-amber-400 shadow duration-200 font-semibold bg-amber-500 uppercase py-3 px-5">--}}
{{--                Subscribe for Updates--}}
{{--            </a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</nav>--}}