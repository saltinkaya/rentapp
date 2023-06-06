<x-layout>

    <ul>

@foreach($products as $product)

    <li>{{$product->title}}</li>

@endforeach

    </ul>
</x-layout>
