@extends('master')
@section('content')
<div class="flex justify-evenly mt-8">
    <div>
        <h2 class="text-2xl text-bold pl-4 pt-4">My Orders</h2><br><br>
        <div class="m-[30px]  p-4">
        @foreach ($orders as $item)
        <a href="/detail/{{$item->id}}">
            <div class="left mt-8 flex justify-evenly">
                <img class="h-[200px]" src="{{$item->gallery}}" >
                <div class="text-center ml-10 ">
                <h2>Name : {{$item->name}}</h2>
                      <h5>Delivery Status : {{$item->status}}</h5>
                      <h5>Address : {{$item->address}}</h5>
                      <h5>Payment Method : {{$item->payment_method}}</h5>
                    <br>
                    
                </div>
               
            </div>
        </a>
        @endforeach
        </div>
    </div>


</div>

@endsection