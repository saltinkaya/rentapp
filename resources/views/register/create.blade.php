<x-layout>

    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <div class="border border-gray-200 p-6 rounded-xl">
                <h1 class="text-center font-bold text-xl">Register</h1>

                <form action="/register" method="POST">
                    @csrf
                    <div class="mt-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                            Name
                        </label>
                        <input class="border border-gray-200 p-2 w-full rounded"
                               type="text"
                               name="name"
                               id="name"
                               value="{{ old('name') }}"
                               required
                        />

                    </div>
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
                        />

                    </div>
                    <div class="mt-6">
                        <button type="submit"
                                class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600"
                        >
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </section>
</x-layout>
