@extends('master')
@section('content')
<div class="flex justify-evenly mt-8">
    <div>
            <h2 class="text-2xl text-bold pl-4 pt-4">Result for  Products</h2><br><br>
            <a class="bg-green-400 text-white rounded-lg px-8 py-4" href="ordernow">Order Now</a>
        <div class="m-[30px]  p-4">
        @foreach ($products as $item)
        <a href="/detail/{{$item->id}}">
            <div class="left mt-8 flex justify-evenly">
                <img class="h-[200px]" src="{{$item->gallery}}" >
                <div class="text-center ml-10 ">
                    <h3>{{$item->name}}</h3>
                    <h5 >{{$item->description}}</h5>
                    <br>
                    <a class="btn bg-red-500 mt-8 text-white rounded-lg px-8 py-4" href="/removecart/{{$item->cart_id}}">Remove from Cart</a>
                </div>
            </div>
        </a>
        @endforeach
        </div>
    </div>


</div>

@endsection