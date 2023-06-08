<x-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <form action="/login" method="POST">
                @csrf
                <div class="mt-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                        Email
                    </label>
                    <input class="border border-gray-200 p-2 w-full rounded"
                           type="email"
                           name="email"
                           id="email"
                           value="{{ old('email') }}"
                           required
                    />
                    @error("email")
                    <p class="text-red-500 text-xs mt-2"> {{$message}}</p>
                    @enderror

                </div>
                <div class="mt-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                        Password
                    </label>
                    <input class="border border-gray-200 p-2 w-full rounded"
                              type="password"
                              name="password"
                              id="password"
                              required
                    ></input>

                </div>


                <div class="mt-6">
                    <button type="submit"
                            class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600"
                    >
                        Login
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
