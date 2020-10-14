@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="row justify-content-center">


        <section class="flex mb-4 items-center text-center">
            <div class="w-full mx-auto">
            <h2 class="text-3xl text-white font-light mb-6">Start making good habits</h2>
        
            <div class="w-full md:w-2/3 lg:w-1/3 mx-auto m-4 p-4 bg-white">
                <form method="POST" action="{{ route('register') }}" class="">
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
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                      First Name
                    </label>
                    <input class=" appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none" id="username" type="text" placeholder="Your name goes here"  name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                  </div>

                  <div class="p-4 mb-4 border-4 text-left">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                      Last Name
                    </label>
                    <input class=" appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none" id="username" type="text" placeholder="Your name goes here"  name="last_name" value="{{ old('last_name') }}" required autofocus>
                    @if ($errors->has('last_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="p-4 mb-4 border-4 text-left">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                      E-Mail
                    </label>
                    <input class=" appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none" id="email" type="email" placeholder="Your E-mail goes here"  name="email" value="{{ old('email') }}" required>
                    {{-- @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif --}}
                </div>
                  <div class="p-4 mb-4 border-4 text-left">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                      Password
                    </label>
                    <input class=" appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none" id="password" type="password" placeholder="Your password" name="password" required>
        
                    <input class=" appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none" id="confirm-password" type="password" placeholder="Your password confirmation" name="password_confirmation" required>
                    {{-- @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif --}}
                {{-- @if ($errors->has('password_confirmation'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif --}}
                  </div>
                  <div class="flex items-center justify-between">
                    <button  type="submit" class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                      Register
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


{{-- 
        <div class="w-2/5 mx-auto">
            <div class="card bg-gray-300 p-3">
                <div class="card-header h1 pb-4">
                    <h1 class="text-xl border-b border-gray-600 mb-4">{{ __('ثبت نام') }}</h1>
                    <hr>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام و نام خانوادگی') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="input bg-white border border-grey-400 rounded p-2 text-xs w-full mb-5 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('آدرس ایمیل') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="input bg-white border border-grey-400 rounded p-2 text-xs w-full mb-5 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('کلمه‌ی عبور') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="input bg-white border border-grey-400 rounded p-2 text-xs w-full mb-5 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('تَکرار کلمه عبور') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="input bg-white border border-grey-400 rounded p-2 text-xs w-full mb-5 form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary button p-2 bg-blue-400 text-white rounded">
                                    {{ __('ثبت نام') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
