@props(["products"])
<x-layout>

    <div class="flex items-center justify-center">
        <h1 class="text-blue-700 font-bold text-3xl px-6 py-6">
            Welcome to RentApp
        </h1>
    </div>

    <div class="container mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">

            <!-- Column -->
            @foreach($products as $product)
                @if(empty($product->rent))
                    <x-product-card :product="$product"/>
                @endif
            @endforeach

            <!-- END Column -->

        </div>
    </div>
</x-layout>
