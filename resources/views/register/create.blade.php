<x-layouts.layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto">
            <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=amber&shade=600" alt="Your Company">
                    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-amber-800">Register your account</h2>
                </div>

                <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-sm">
                    <form class="space-y-6" action="/register" method="POST">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium leading-6 text-amber-800">Name</label>
                            <div class="mt-2">
                                <input id="name" name="name" type="text" autocomplete="name" required
                                       class="block w-full rounded-md border-0 py-1.5 text-amber-900 shadow-sm ring-1 ring-inset bg-amber-100 ring-amber-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-amber-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <label for="username" class="block text-sm font-medium leading-6 text-amber-800">Username</label>
                            <div class="mt-2">
                                <input id="username" name="username" type="text" autocomplete="username" required
                                       class="block w-full rounded-md border-0 py-1.5 text-amber-900 shadow-sm ring-1 ring-inset bg-amber-100 ring-amber-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-amber-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium leading-6 text-amber-800">Email</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" required
                                       class="block w-full rounded-md border-0 py-1.5 text-amber-900 shadow-sm ring-1 ring-inset bg-amber-100 ring-amber-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-amber-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label for="password" class="block text-sm font-medium leading-6 text-amber-800">Password</label>
                                <div class="text-sm">
                                    <a href="#" class="font-semibold text-amber-600 duration-200 hover:text-amber-500">Forgot password?</a>
                                </div>
                            </div>
                            <div class="mt-2">
                                <input id="password" name="password" type="password" autocomplete="current-password" required
                                       class="block w-full rounded-md border-0 py-1.5 text-amber-900 shadow-sm ring-1 ring-inset bg-amber-100 ring-amber-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-amber-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                    class="flex w-full justify-center rounded-md bg-amber-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm duration-200 hover:bg-amber-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-600">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </main>
    </section>
</x-layouts.layout>