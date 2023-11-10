@extends('master')
@section('content')
<div class="flex justify-evenly mt-8">
    
    <div>
            <h2 class="text-2xl text-bold pl-4 pt-4">Result for  Products</h2>
        <div class="m-[30px]  p-4">
        @foreach ($products as $item)
        <a href="/detail/{{$item['id']}}">
            <div class="left mt-8 flex justify-evenly">
                <img class="h-[200px]" src="{{$item['gallery']}}" >
                <div class="text-center ml-10 ">
                    <h3>{{$item['name']}}</h3>
                    <h5 >{{$item['description']}}</h5>
                </div>
            </div>
        </a>
        @endforeach
        </div>
    </div>


</div>

@endsection