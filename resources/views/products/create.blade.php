@props(["categories"])

<x-layout>
    @guest
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    Can't wait to make your next sale?
                </h1>
                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">
                    We are more than excited to see you here! But before you list your item, you need to register or
                    login.
                </p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                    <a href="/register"
                       class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Register
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="/login"
                       class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Login
                    </a>
                </div>
            </div>
        </section>
    @endguest

    @auth
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
                <form action="/new-listing" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                            Title
                        </label>
                        <input class="border border-gray-200 p-2 w-full rounded"
                               type="text"
                               name="title"
                               id="title"
                               value="{{ old('title') }}"
                               required
                        />

                    </div>
                    <div class="mt-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="description">
                            Description
                        </label>
                        <textarea class="border border-gray-200 p-2 w-full rounded"
                                  type="text"
                                  name="description"
                                  id="description"
                                  required
                        >{{ old("description")}}</textarea>

                    </div>
                    <div class="mt-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="image">
                            Image
                        </label>
                        <input class="border border-gray-200 p-2 w-full rounded"
                               type="file"
                               name="image"
                               id="image"
                               required
                        />

                    </div>
                    <div class="mt-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="price">
                            Price
                        </label>
                        <input class="border border-gray-200 p-2 w-full rounded"
                               type="number"
                               name="price"
                               id="price"
                               min="0"
                               value="{{ old('title') }}"
                               step="0.01"
                               required
                        />

                    </div>
                    <div class="mt-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category">
                            Category
                        </label>
                        <select name="category" id="category">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="mt-6">
                        <button type="submit"
                                class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600"
                        >
                            List an item
                        </button>
                    </div>
                </form>
            </div>
        </section>
    @endauth
</x-layout>
