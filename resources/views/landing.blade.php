@extends('layouts.app')


@section('content')

{{-- <section class="flex mb-4 items-center text-center py-8">
    <div class="w-full mx-auto">
    <h2 class="text-3xl font-light">روز به روز، کمی آسون‌تر می‌شه <br> قسمت سختش اینه که باید هرروز انجامش بدی</h2>
        <div class="my-4 p-4">
            <a href="#" class="p-3 bg-teal-600 text-white border-3 border-transparent hover:border-teal-600 hover:text-teal-600 hover:bg-white">هرروز انجامش بده</a>
        </div>
    </div>
</section> --}}


<section class="text-center py-8 bg-gray-800">
  <div class="container mx-auto">

  <div class="flex flex-wrap mb-4 items-center">

    <div class="mx-auto m-4 p-4 w-1/2">
      <div class="border-3 text-white border-family rounded-xl px-2 py-4">
        <h2 class=""><span class="text-xs">Small changes make</span><br><span class="text-6xl text-justify">BIG</span><br><span class="text-lg">differences</span></h2>

        <div class="mt-3 font-light">

          <h6>Phoenix helps you take control of your life by changing your habits.</h6>
        </div>
      </div>
    </div>
      
      <div class="mx-auto m-4 p-4 w-1/2 mt-16 lg:mt-0">
        <div class="bg-family rounded-xl px-2 py-4">
          <div class="bg-gray-800 rounded-full w-12 h-12 flex items-center justify-center mx-auto">
            <h1 class="text-center text-white font-extrabold text-3xl">1</h1>
          </div>
          <h4 class="my-3 text-3xl font-bold">Clue</h4>
          <div class="font-light">
            <h5 class="">Make it obvious</h5>
            <hr class="bg-gray-800 border-gray-800">
            <h6>Add your habits to Phoenix</h6>
          </div>
        </div>
      </div>

      <div class="mx-auto m-4 p-4 w-1/2">
        <div class="bg-spiritual rounded-xl px-2 py-4">
          <div class="bg-gray-800 rounded-full w-12 h-12 flex items-center justify-center mx-auto">
            <h1 class="text-center text-white font-extrabold text-3xl">2</h1>
          </div>
          <h4 class="my-3 text-3xl font-bold">Crave</h4>
          <div class="font-light">
            <h5 class="">Make it attractive</h5>
            <hr class="bg-gray-800 border-gray-800">
            <h6>Add your habits to Phoenix</h6>
          </div>
        </div>
      </div>

      <div class="mx-auto m-4 p-4 w-1/2 mt-16 lg:mt-0">
        <div class="bg-physical rounded-xl px-2 py-4">
          <div class="bg-gray-800 rounded-full w-12 h-12 flex items-center justify-center mx-auto">
            <h1 class="text-center text-white font-extrabold text-3xl">3</h1>
          </div>
          <h4 class="my-3 text-3xl font-bold">Response</h4>
          <div class="font-light">
            <h5 class="">Make it easy</h5>
            <hr class="bg-gray-800 border-gray-800">
            <h6>Add your habits to Phoenix</h6>
          </div>
        </div>
      </div>

      <div class="mx-auto m-4 p-4 w-1/2">
        <div class="bg-friends rounded-xl px-2 py-4">
          <div class="bg-gray-800 rounded-full w-12 h-12 flex items-center justify-center mx-auto">
            <h1 class="text-center text-white font-extrabold text-3xl">4</h1>
          </div>
          <h4 class="my-3 text-3xl font-bold">Reward</h4>
          <div class="font-light">
            <h5 class="">Make it satisfying</h5>
            <hr class="bg-gray-800 border-gray-800">
            <h6>Add your habits to Phoenix</h6>
          </div>
        </div>
      </div>

      <div class="mx-auto m-4 p-4 w-1/2 text-gray-light mt-16 lg:mt-0">
        <div class="border-2 border-family rounded-xl px-2 py-4">
          <ion-icon name="repeat-outline" class="text-6xl text-white"></ion-icon>
          <h4 class="text-3xl font-bold">Repeat the cycle</h4>

        </div>
      </div>
  </div>
  </div>
  
</section>


{{-- <section class="flex mb-4 items-center text-center py-8">
    <div class="w-full mx-auto">
    <h2 class="text-3xl font-light">شروع به ایجاد عادت‌های خوب کن</h2>

    <div class="w-1/3 mx-auto">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
          <div class="p-4 mb-4 border-4 text-right">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              نام و نام خانوادگی
            </label>
            <input class=" appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none" id="username" type="text" placeholder="نام و نام خانوادگی">
          </div>
          <div class="p-4 mb-4 border-4 text-right">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              ایمیل
            </label>
            <input class=" appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none" id="email" type="email" placeholder="ایمیل">
          </div>
          <div class="p-4 mb-4 border-4 text-right">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              کلمه عبور
            </label>
            <input class=" appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none" id="password" type="password" placeholder="کلمه عبور">

            <input class=" appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none" id="confirm-password" type="password" placeholder="تائید کلمه عبور">
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
              ثبت نام
            </button>
            <a class="inline-block align-baseline font-bold text-sm text-teal-500 hover:text-teal-800" href="#">
              فراموشی کلمه عبور؟
            </a>
          </div>
        </form>
        {{-- <p class="text-center text-gray-500 text-xs">
          &copy;2020 Acme Corp. All rights reserved.
        </p> --}}
      </div>
        {{-- <div class="my-4 p-4">
            <a href="#" class="p-3 bg-teal-600 text-white border-3 border-transparent hover:border-teal-600 hover:text-teal-600 hover:bg-white">هرروز انجامش بده</a>
        </div> --}}
    </div>
</section> --}}
  
@endsection
