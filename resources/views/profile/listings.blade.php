<x-layout>
    <div class="my-6 mx-6">
        <div class="flex flex-col w-full h-full border-2 border-black rounded-l">
            <div class="mx-2 my-2  flex items-center justify-center h-1/3">
                <a href="/profile"
                   class="bg-blue-400 py-2 px-3 w-6/12
                                   mx-2 text-center rounded-xl text-white hover:bg-blue-700">My Rents</a>
                <a href="/profile/listings"
                   class="bg-blue-900 py-2 px-3 w-6/12
                                   mx-2 text-center rounded-xl text-white hover:bg-blue-700">My Listings</a>
            </div>
            <div class="mx-2 my-2 flex items-center justify-center h-2/3">

                @foreach($rents as $rent)
                    <x-profile-listings :product="$rent->product_id"/>
                @endforeach

            </div>
        </div>
    </div>
</x-layout>
