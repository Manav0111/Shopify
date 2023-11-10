<?php
use App\Http\Controllers\ProductController;
$total=0;

if(Session::has('user'))
{
  $total=ProductController::cartItem();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="bg-blue-500 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <div class="flex items-center">
        <a href="/" class="text-white text-2xl font-semibold">
          Shopify
        </a>
        <ul class="flex space-x-4 ml-6">
          <li><a href="/" class="text-white">Home</a></li>
          <li><a href="/myorders" class="text-white">Orders</a></li>
          <li><a href="/cartlist" class="text-white">Cart({{$total}})</a></li>
        </ul>
      </div>
      <form action="/search" >
        <div class="flex items-center space-x-4">
          <div class="relative">
            <input type="text" name="query" class="bg-white w-[500px] text-black pl-8 ml-40 pr-2 py-2 rounded-full focus:outline-none focus:ring focus:border-blue-300" placeholder="Search" />
            <i class="fas fa-search absolute left-2 top-2 text-gray-500"></i>
          </div>
          <button class="bg-blue-600 text-white py-2 px-4 rounded-full focus:outline-none hover:bg-blue-700" type="submit">Search</button>
          <a href="#" class="text-white">
            <i class="fas fa-shopping-cart text-2xl"></i>
          </a>
        </div>
    </form>
    
    @if(Session::has('user'))
    
    <a class="bg-blue-600 text-white  py-2 px-4 rounded-full focus:outline-none hover:bg-blue-700" href="/logout">Logout</a>
    @else
    
      <a class="bg-blue-600 ml-40 text-white py-2 px-4 rounded-full focus:outline-none hover:bg-blue-700" href="/register">Register</a>
      <a class="bg-blue-600 text-white  py-2 px-4 rounded-full focus:outline-none hover:bg-blue-700" href="/login">Login</a>
      @endif
    </div>

    
  </nav>
</body>
</html>