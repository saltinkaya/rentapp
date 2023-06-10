<x-layout>

    @foreach ($products as $product)


    <x-profile-listings :product="$product"/>

    @endforeach



</x-layout>
