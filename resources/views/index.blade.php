<x-layout>
    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">

            <!-- Column -->
            @foreach($products as $product)
                <x-product-card :product="$product"/>
            @endforeach

            <!-- END Column -->


        </div>
    </div>
</x-layout>
