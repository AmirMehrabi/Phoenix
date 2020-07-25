@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <section class="flex mb-4 items-center text-center py-8">
        <div class="w-full mx-auto">
        <h2 class="text-3xl text-white font-light my-6">Log-in</h2>
    
        <div class="w-1/3 mx-auto">
            <form method="POST" action="{{ route('login') }}" class="m-4 p-4 bg-white">
                @csrf


              <div class="p-4 mb-4 border-4 text-left">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                  E-Mail
                </label>
                <input class=" appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none" id="email" type="email" placeholder="Your E-Mail" name="email" value="{{ old('email') }}" required autofocus>
              </div>
              <div class="p-4 mb-4 border-4 text-left">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                  Password
                </label>
                <input class=" appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none" id="password" type="password" placeholder="Your password" name="password" required>
    
              </div>
              <div class="flex items-center justify-between">
                <button type="submit" class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                  Login
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-teal-500 hover:text-teal-800" href="#">
                  Forgot your password?
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
    </section>

</div>
@endsection
