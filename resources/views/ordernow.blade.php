@extends('master')
@section("content")
<div>
     <div class="col-sm-10">
        <table class="table m-auto border-solid border-2 border-black-500 w-[400px] mt-8 ">
         
            <tbody>
              <tr class="px-8 py-8 border-solid border-2 border-black-500">
                <td class="px-4 py-4 border-solid border-2 border-black-500 text-xl font-bold">Amount</td>
              <td class="px-4 py-4 border-solid border-2 border-black-500">{{$total}}Rs</td>
              </tr>
              <tr class="px-8 py-8 border-solid border-2 border-black-500" >
                <td class="px-4 py-4 border-solid border-2 border-black-500 text-xl font-bold">Tax</td>
                <td class="px-4 py-4 border-solid border-2 border-black-500">0Rs</td>
              </tr>
              <tr class="px-8 py-8 border-solid border-2 border-black-500">
                <td class="px-4 py-4 border-solid border-2 border-black-500 text-xl font-bold">Delivery </td>
                <td class="px-4 py-4 border-solid border-2 border-black-500">10Rs</td>
              </tr>
              <tr class="px-8 py-8 border-solid border-2 border-black-500">
                <td class="px-4 py-4 border-solid border-2 border-black-500 text-xl font-bold">Total Amount</td>
              <td class="px-4 py-4 border-solid border-2 border-black-500">{{$total+10}}Rs</td>
              </tr>
            </tbody>
        </table>


          <div class="mt-8">
            <form action="/orderplace" method="POST" class="m-auto" >
              @csrf
                <div class="form-group ml-[40%]">
                  <textarea name="address" placeholder="Enter your address" class="w-80 text-center h-30 pt-5 rounded-lg" ></textarea>
                </div>
                <br><br>
                <div class="form-group flex justify-center item-center  ">
                  <label for="pwd" class="text-xl px-4">Payment Method</label> 
                  <input type="radio" value="cash" name="payment" > <span class="px-4">online payment</span> 
                  <input type="radio" value="cash" name="payment" > <span class="px-4">EMI payment</span> 
                  <input type="radio" value="cash" name="payment" > <span class="px-4">Payment on Delivery</span> 

                </div>
                <button type="submit" class="text-center px-8 py-4 rounded-lg bg-green-600 text-white mt-8 ml-[45%]">Order Now</button>
              </form>
          </div>
     </div>
</div>
@endsection 