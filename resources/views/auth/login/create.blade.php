<x-layouts.layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto">
            <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-amber-800">Login to your account</h2>
                </div>

                <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-sm">
                    <form class="space-y-6" action="/login" method="POST">
                        @csrf

                        <div>
                            <label for="email" class="block text-sm font-medium leading-6 text-amber-800">Email</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" value="{{ old('email') }}" required
                                       class="block w-full rounded-md border-0 py-1.5 text-amber-900 shadow-sm ring-1 ring-inset bg-amber-100 ring-amber-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-amber-600 sm:text-sm sm:leading-6">
                            </div>
                            @error('email')
                            <small class="text-red-500 mt-1">{{ $message }}</small>
                            @enderror
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
                            @error('password')
                            <small class="text-red-500 mt-1">{{ $message }}</small>
                            @enderror
                        </div>

                        <div>
                            <button type="submit"
                                    class="flex w-full justify-center rounded-md bg-amber-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm duration-200 hover:bg-amber-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-600">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </main>
    </section>
</x-layouts.layout>