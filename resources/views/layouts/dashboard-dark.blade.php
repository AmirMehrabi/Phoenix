<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css')}}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/ltr.css') }}" rel="stylesheet"> --}}

    @yield('header-assets')
</head>
<body class="bg-gray-bg">
    <div id="app">
        
<nav class="flex items-center  flex-wrap bg-black-transparent fixed w-full mb-10" style="height: 47px;">
  <div class="container mx-auto h-full">
    <div class="flex flex-row justify-between w-full h-full">
      <div class="text-gray-700 text-center px-4 py-2 flex items-center">
        <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" class="rounded-full w-10 h-10" alt=""></a>

        </a>
        {{-- <svg class="fill-current h-6 w-6" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg> --}}
      </div>
      <div class="bg-green-main text-gray-light  shadow-xl text-center flex items-center justify-center h-full" style="width: 47px; height: 47px;">
        <a href="/projects/create" class="button h-full flex justify-center items-center" @click.prevent="$modal.show('new-project')"><i class="fas fa-plus  fa-2x  "></i></a></div>
      <div class="flex text-gray-700 text-center items-center m-2 justify-center content-center">
        <a class="button h-full flex justify-center items-center modal-open profile-open"  data-toggle="modal" data-target="profile-modal">Profile
        <img src="{{gravatar_url(auth()->user()->email)}}" id="profile" class="rounded-full w-10 h-10" alt=""></a>
      </div>
    </div>
  </div>

   
  <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center" id="profile-modal">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    
    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto  mr-4 mb-auto mt-12">
    <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <span class="text-sm">(Esc)</span>
    </div>

    <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content py-4 text-left px-6">
          <div class="flex flex-col">
            <div class="flex flex-row justify-between items-center mb-6">
              <img src="{{gravatar_url(auth()->user()->email)}}" id="profile" class="rounded-xl w-1/4" alt=""></a>
              <h2 class="text-3xl font-bold mr-auto w-full ml-6">Hello <br> {{ Auth::user()->name }}</h2>
            </div>
          </div>

          <div class="flex flex-row justify-between">
            <div class="habit-card habit-box text-white flex flex-col justify-center w-30 mh-30 flex-none px-2 items-center content-between rounded-2xl my-2 text-center bg-spiritual border-spiritual">
              <div>
                <h2 class="text-3xl font-extrabold">N/A</h2>
              </div>
              <div>
                Developed habits
              </div>
            </div>

            <div class="habit-card habit-box text-white flex flex-col justify-center w-30 mh-30 flex-none px-2 items-center content-between rounded-2xl my-2 text-center bg-family border-family">
              <div>
                <h2 class="text-3xl font-extrabold">{{ count(Auth::user()->projects()->get()) }}</h2>
              </div>
              <div>
                Total habits
              </div>
            </div>

            <div class="habit-card habit-box text-white flex flex-col justify-center w-30 mh-30 flex-none px-2 items-center content-between rounded-2xl my-2 text-center bg-physical border-physical">
              <div>
                <h2 class="text-3xl font-extrabold">{{ Carbon\Carbon::parse(Auth::user()->created_at)->diffInDays() }}</h2>
              </div>
              <div>
                Days
              </div>
            </div>
          </div>

        </div>
    </div>
</div>
  {{-- <div class="flex items-center flex-shrink-0 text-white mr-6">
    <svg class="fill-current h-8 w-8 ml-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
    <span class=" text-xl tracking-tight ml-5">ققنوس</span>
  </div>
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white ml-4">
        صفحه‌ی نخست
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white ml-4">
        درباره‌ی ما
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
        بلاگ
      </a>
    </div>
    <div>
      <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">ورود / خروج</a>
    </div>
  </div> --}}
</nav>
<new-project-modal></new-project-modal>

        <main class="py-4 container mx-auto pt-20">
            @yield('content')
        </main>
    </div>
</body>
  {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
@yield('footer-assets')


</html>
