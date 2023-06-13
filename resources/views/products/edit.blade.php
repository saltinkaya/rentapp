<x-layout>
    @auth
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
                <form action="/edit/{{$product->slug}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")

                    <div class="mt-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                            Title
                        </label>
                        <input class="border border-gray-200 p-2 w-full rounded"
                               type="text"
                               name="title"
                               id="title"
                               value="{{ $product->title }}"
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
                        >{{ $product->description}}</textarea>

                    </div>
                    <div class="mt-6 flex items-center justify-center">
                        <div class="w-3/4">

                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="image">
                                Image
                            </label>
                            <input class="border border-gray-200 p-2 w-full rounded"
                                   type="file"
                                   name="image"
                                   id="image"
                            />
                        </div>
                        <div class="w-1/4 flex items-center justify-center">
                            <img class="border border-black rounded" src="/storage/images/{{$product->image}}"
                                 alt="{{$product->slug}}" width="100"
                                 height="100">
                        </div>

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
                               value="{{ $product->price }}"
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
                            Update
                        </button>
                    </div>
                </form>
                <form class="pt-2" action="/delete/{{$product->slug}}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit"
                            class="bg-red-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-red-600"
                    >
                        Delete
                    </button>
                </form>
            </div>
        </section>
    @endauth
</x-layout>
