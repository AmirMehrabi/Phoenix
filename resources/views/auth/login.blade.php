@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <section class="flex mb-4 items-center text-center py-8">
        <div class="w-full mx-auto">
        <h2 class="text-3xl text-white font-light my-6">Log-in</h2>
    
        <div class="w-full md:w-2/3 lg:w-1/3 mx-auto">

            <form method="POST" action="{{ route('login') }}" class="m-4 p-4 bg-white">
                @csrf

                @if(!empty($errors))
                @foreach ($errors->all() as $error)
                <div class="bg-red-100 border mb-2 border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                  <strong class="font-bold">اخطار!</strong>
                  <span class="block sm:inline">{{ $error }}</span>
                  <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                  </span>
                </div>
                @endforeach
              @endif
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
