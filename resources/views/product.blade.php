@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>


        .carousel {
        width: 100%;
        overflow: hidden;
        }

        /* Style the individual carousel items */
        .carousel-inner {
        display: flex;
        transition: transform 0.3s ease;
        }

        .carousel-item {
        flex: 0 0 100%;
        max-width: 100%;
        }

        /* Style the navigation buttons */
        .carousel-control {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        font-size: 1.5rem;
        padding: 0.5rem;
        border: none;
        z-index: 1;
        }

    </style>
    <script>
       document.addEventListener('DOMContentLoaded', function() {
  const carouselInner = document.querySelector('.carousel-inner');
  const carouselItems = carouselInner.querySelectorAll('.carousel-item');
  const itemWidth = carouselItems[0].offsetWidth;
  let currentIndex = 0;

  const moveToIndex = (index) => {
    if (index < 0) {
      index = carouselItems.length - 1;
    } else if (index >= carouselItems.length) {
      index = 0;
    }

    currentIndex = index;

    const translateValue = -currentIndex * itemWidth;
    carouselInner.style.transform = `translateX(${translateValue}px)`;
  };

  // Automatically move to the next item every 3 seconds (3000 milliseconds)
  setInterval(() => {
    moveToIndex(currentIndex + 1);
  }, 3000);
});

    </script>
</head>
<body>
 


<div class="w-full relative">
  <div class="carousel">
    <div class="carousel-inner relative ">
      @foreach ($products as $item)
      <div class="carousel-item relative bg-white w-[100%]  pt-8">
          <a href="/detail/{{$item['id']}}">
            <img src="{{$item['gallery']}}" class=" align-center item-center m-auto h-64 " alt="Image 1">
            <h2 class="text-2xl font-semibold text-center">{{$item['name']}}</h2>
            <p class="text-gray-600  text-center">{{$item['description']}}</p>
          </a>
        </div>
        @endforeach
  </div>
</div>
<h2 class="text-2xl text-bold pl-4 pt-4 font-bold">Trending Products-</h2>
<div class="m-[30px] flex justify-between flex-wrap">
  @foreach ($products as $item)
  <a href="/detail/{{$item['id']}}">
    <div class="py-4 mx-16 my-4 bg-white px-4">
      <img class="h-[200px] w-[200px]" src="{{$item['gallery']}}" >
      <div class="text-center ">
        <h3 >{{$item['name']}}</h3>
      </div>
    </div>
  </a>
  @endforeach
</div>

</body>
</html>
@endsection