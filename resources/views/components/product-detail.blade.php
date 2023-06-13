@props(["product"])

<div class="flex my-6 mx-6 items-center justify-center">
    <div class="flex border-2 rounded-xl border-gray-400 w-8/12 h-full">
        <img class="w-6/12 py-2" src="/storage/images/{{$product->image}}" alt="{{$product->slug}}">
        <div class="flex flex-col w-6/12 py-2 pl-4">
            <h1 class="text-2xl font-bold text-blue-900"> {{ $product->title }}</h1>

            <h2 class="pt-1 font-bold">Description</h2>
            <p>{{$product->description}}</p>

            <h2 class="pt-3 font-bold">Price</h2>
            <p>{{$product->price}} USD</p>

            <h2 class="pt-3 font-bold">Category</h2>
            <p>{{$product->category->name}}</p>


            @auth

                @if($product->user->id === auth()->user()->id)

                    <a href="/edit/{{$product->slug}}"
                       class="bg-blue-900 py-2 px-3 w-6/12
                                   mx-2 text-center rounded-xl text-white hover:bg-blue-700">Edit</a>

                @else
                    <form class="py-2 font-bold" action="/rent/{{$product->id}}" method="post">
                        @csrf

                        <button type="submit"
                                class="bg-blue-900 py-2 w-6/12  rounded-xl text-white hover:bg-blue-700"
                                name="product_id"
                                value="{{$product->id}}"
                        >Rent
                        </button>
                    </form>

                @endif

            @endauth
            @guest
                <div class="flex py-2">
                    <a href="/register"
                       class="bg-blue-900 py-2 px-3 w-6/12
                                   mx-2 text-center rounded-xl text-white hover:bg-blue-700">Register</a>
                    <a href="/login"
                       class="bg-blue-900 py-2 px-3 w-6/12
                                   mx-2 text-center rounded-xl text-white hover:bg-blue-700">Login</a>
                </div>
            @endguest

        </div>
    </div>

</div>
