@extends('master')
@section('content')
<div class="container mt-4">
    <div class="flex justify-evenly ">
        <div class="w-1/2 ml-8">
        <img class="h-[400px]" src="{{$product['gallery']}}">
        </div>
        
        <div class="w-1/2">
            <a href="/">Go Back</a>
            <h2 class="text-3xl font-bold mb-4">{{ $product['name'] }}</h2>
            <h5 class="font-semibold text-gray-600 my-3">Price: {{ $product['price']}}</h5>
            <p>Details:{!! nl2br($product['description']) !!}</p>
            <h5>Categoty: {{$product['category']}}</h5>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{ $product['id'] }}>
             <button class="btn bg-blue-400 text-white p-2 rounded-lg" type="submit">Add to Cart</button>
            </form>
            <br><br>
        </div>
    </div>
</div>
@endsection
