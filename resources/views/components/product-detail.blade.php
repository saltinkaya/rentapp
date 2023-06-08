@props(["product"])

<div class="flex my-6 mx-6 items-center justify-center">
    <div class="flex border-2 rounded-xl border-gray-400 w-8/12 h-full">
        <img class="w-6/12 py-2" src="/storage/images/{{$product->image}}" alt="{{$product->slug}}">
        <div class="flex flex-col w-6/12 py-2 pl-4">
            <h1> {{ $product->title }}</h1>
            <p>{{$product->description}}</p>
            <p>{{$product->price}}</p>
            <p>{{$product->category->name}}</p>
            <form action="/rent/{{$product->id}}" method="post">
                @csrf
                @auth
                    <button type="submit"
                            class="bg-blue-900 py-2 w-6/12 px-3 mx-2 rounded-xl text-white hover:bg-blue-700"
                            name="product_id"
                            value="{{$product->id}}"
                    >Rent
                    </button>
                @endauth
                @guest
                    <div class="flex">
                        <a href="/register"
                           class="bg-blue-900 py-2 px-3 w-6/12
                                   mx-2 text-center rounded-xl text-white hover:bg-blue-700">Register</a>
                        <a href="/login"
                           class="bg-blue-900 py-2 px-3 w-6/12
                                   mx-2 text-center rounded-xl text-white hover:bg-blue-700">Login</a>
                    </div>
                @endguest

            </form>
        </div>
    </div>

</div>
