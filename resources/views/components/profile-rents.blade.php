@props(["product"])

<div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

    <form action="/rent/drop/{{$product->id}}" method="POST">
        @csrf
        <div class="max-w-6xl mx-auto">
            <div class="flex items-center justify-center min-h-screen">
                <div class="max-w-sm w-full py-2 px-2">
                    <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                        <div>
                            <img width=400 height="400" src="/storage/images/{{ $product->image }}" alt="{{ $product->slug }}">
                        </div>
                        <div class="p-4">
                            <p class="uppercase tracking-wide text-sm font-bold text-gray-700">{{ $product->title }}</p>
                            <p class="text-gray-700">{{$product->category->name}}</p>
                        </div>

                        <div class="px-4 pt-3 pb-4 border-t border-gray-300 bg-gray-100">
                            <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Renter</div>
                            <div class="flex items-center py-2">
                                <div class="bg-cover bg-center w-10 h-10 rounded-full mr-3"
                                     style="background-image: url(https://images.unsplash.com/photo-1500522144261-ea64433bbe27?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80)">
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">{{$product->user->name}}</p>
                                    <p class="text-sm text-gray-700">{{($product->created_at)->diffForHumans()}}</p>
                                </div>
                            </div>
                            <div class="flex justify-center">
                                @auth()
                                    <button type="submit"
                                            class="bg-blue-900 py-2 w-6/12 px-3 mx-2 rounded-xl text-white hover:bg-blue-700"
                                            value="{{$product->id}}"
                                    >
                                        Drop
                                    </button>
                                @endauth
                                <a href="/products/{{$product->slug}}"
                                   class="bg-blue-900 py-2 px-3 w-6/12
                                   mx-2 text-center rounded-xl text-white hover:bg-blue-700">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
