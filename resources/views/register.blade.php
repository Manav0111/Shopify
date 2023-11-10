@extends('master')
@section('content')
<div class="mt-28 flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-lg w-96">
      <h2 class="text-2xl font-semibold text-center mb-4">Register</h2>
      <form action="register" method="POST">
        @csrf
        <div class="mb-4">
          <label for="name" class="block text-gray-700 font-medium">Name</label>
          <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" placeholder="Enter Your Name" required>
        </div>
        <div class="mb-4">
          <label for="email" class="block text-gray-700 font-medium">Email</label>
          <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" placeholder="Enter Your Email" required>
        </div>
        <div class="mb-4">
          <label for="password" class="block text-gray-700 font-medium">Password</label>
          <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" placeholder="********" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white w-full py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">Register</button>
      </form>
    </div>
  </div>
@endsection