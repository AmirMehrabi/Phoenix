@extends('layouts.dashboard-dark')


@section('content')


<main class="container">

    
    <div class=" bg-gray-bg rounded-lg">
        
    <div class="flex flex-row items-center">
        <div class="text-gray-700 flex-grow py-2">
          {{-- <a href="{{ Carbon\Carbon::parse($now)->addDays(-1)->toDateString()}}">
            <i class="fa fa-arrow-left text-4xl text-gray-light hover:text-white" aria-hidden="true"></i>
          </a> --}}
            <h1 class="text-4xl text-gray-light font-extrabold tracking-wider">{{ Carbon\Carbon::parse($now)->format('l jS\\, F')}}</h1>
            {{-- <a href="{{ Carbon\Carbon::parse($now)->addDays(+1)->toDateString()}}">
              <i class="fa fa-arrow-right text-4xl text-gray-light hover:text-white" aria-hidden="true"></i>
            </a> --}}
            {{-- <p class="text-gray-600">۵ ساعت و ۳۰ دقیقه تا زمان خواب</p> --}}
        </div>
        <div class="text-gray-light py-2 text-left">
            <div class="flex flex-col text-left items-start">
                <div class="bg-green-main text-gray-light shadow-xl text-center flex items-center px-4 h-20 w-20 rounded-lg">
                    <a href="/projects/create" class="button w-full h-full flex items-center justify-center" @click.prevent="$modal.show('new-project')"><i class="fas fa-plus fa-3x   "></i></a></div>  
</div>


        </div>
    </div>
    @if ($daily_percent > 0)
    <div class="mt-8 mb-16">
        <div class=" w-full bg-gray-bg ">
            <div class="text-xl bg-gray-light font-extrabold py-5 text-xs  leading-none text-center text-gray-bg text-4xl shadow-2xl flex justify-end h-24 flex items-center rounded-lg"
                style="width: {{ $daily_percent }}%">{{ $daily_percent }}% &nbsp;</div>
        </div>
        
    </div>
    

    @endif



<div class=" bg-gray-dark rounded-lg p-3 my-8" style="">
    
<div class="flex flex-wrap align-items-center justify-left">
    @forelse ($projects->sortBy('completed') as $key => $project)
{{-- Modal --}}

  
<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center" id="delete-modal-{{ $key }}">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    
    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
    
    <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <span class="text-sm">(Esc)</span>
    </div>

    <!-- Add margin if you want to see some of the overlay behind the modal-->
    <div class="modal-content py-4 text-left px-6">
        <!--Title-->
        <div class="flex flex-col justify-between items-left pb-3">
            <div class="modal-close cursor-pointer z-50">
                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
            </div>
            <p class="text-2xl font-bold">You sure you wanna delete this task: {{ $project->title }}</p>
            <form role="form" action="{{ route('projects.destroy', ['id' => $project->id]) }}" method="post">
              @method('delete')
              <button type="submit" class="btn btn-default"><i class="fa fa-times"></i> Delete</button>
              <input type="hidden" name="_token" value="{{ Session::token() }}">
          </form>
            </div>
        </div>
    </div>
</div>



<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center" id="modal-{{ $key }}">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    
    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
    
    <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <span class="text-sm">(Esc)</span>
    </div>

    <!-- Add margin if you want to see some of the overlay behind the modal-->
    <div class="modal-content py-4 text-left px-6">
        <!--Title-->
        {{-- <p class="text-2xl font-bold">Edit Task: {{ $project->title }}</p> --}}

        <div class="flex justify-between items-center pb-3">
            <form action="{{$project->path()}}" method="POST" class="w-full ">
                        
                @method('PATCH')
                @csrf
            <div class="flex">
              <div class="flex-1 ml-4">
                <div class="mb-4">
                  <input 
                  value="{{ $project->title }}"
                    type="text"
                    name="title"
                    id="title"
                    class="border-b-4 border-gray-bg p-2 text-sm bg-transparent text-gray-bg block w-full rounded text-lg focus:outline-none focus:shadow-lg"
                    placeholder="My new habit"
                    
                  />
                  <span
                    class="text-xs italic text-red-600"
                  ></span> 
                </div>
                <div class="mb-4">
                  <select name="color" value="{{ $project->critical }}" id="color" class="border-b-4 border-gray-bg p-2 text-sm bg-transparent text-gray-bg block w-full rounded text-lg focus:outline-none focus:shadow-lg"  >
      
                    <option value="true">Critical</option>
                    <option value="false">Non-critical</option>
                  </select>
      
                  <span
                    class="text-xs italic text-red-600"
                  ></span>
                </div>
                <div class="mb-4">
                  <select name="color" id="color" class="border-b-4 border-gray-bg p-2 text-sm bg-transparent text-gray-bg block w-full rounded text-lg focus:outline-none focus:shadow-lg">
      
                    <option value="spiritual">Spiritual</option>
                    <option value="physical">physical</option>
                    <option value="emotional">emotional</option>
                    <option value="mental">mental</option>
                    <option value="work">work</option>
                    <option value="family">family</option>
                    <option value="friends">friends</option>
                  </select>
      
                  <span
                    class="text-xs italic text-red-600"
                  ></span>
                </div>
                <div class="mb-4">
                  <textarea
                  
                    name="description"
                    id="description"
                    class="border-b-4 border-gray-bg p-2 text-sm bg-transparent text-gray-bg block w-full rounded text-lg focus:outline-none focus:shadow-lg"
                    
                    placeholder="Why do I want to do this?"
                    rows="3"
                    
                  >{{ $project->description }}</textarea>
                  <span
                    class="text-xs italic text-red-600"
                  ></span>
                </div>
              </div>
            </div>
            <footer class="flex justify-around">
              <button type="submit" class="button rounded-lg bg-gray-bg p-4 p-4 text-orange-500 text-2xl w-2/5 hover:shadow-xl font-extrabold hover:bg-gray-light">Edit</button>
      
              <button
                type="button"
                class="modal-close button rounded-lg border-3 border-gray-bg bg-transparent p-4 text-2xl w-2/5 hover:shadow-xl font-extrabold hover:bg-gray-light"
                
              >Cancel</button>
            </footer>
          </form>

          
        </div>
    </div>
    </div>
</div>
{{-- End of modal --}}
    @if ($project->completed == 0)
    {{-- Habit Card --}}
    <div class="habit-card habit-box w-30 mh-30 flex-none px-2 items-center content-between">
        
        <div class="min-h-full flex flex-wrap content-around bg-gray-dark rounded-2xl mh-20 text-gray-light text-center px-2  border-3 border-{{ $project->color ?? 'blue'}}">
          {{-- <div class="flex flex-row justify-between w-full">
            <a class="button h-full flex justify-center items-center modal-open text-xs"  data-toggle="modal" data-target="modal-{{ $key }}">edit</a>
            <a class="button h-full flex justify-center items-center modal-open text-xs"  data-toggle="modal" data-target="delete-modal-{{ $key }}">delete</a>

          </div> --}}
            {{-- <a class='bg-blue-500 py-2 px-5 text-white rounded modal-open' data-toggle="modal" data-target="modal-{{ $key }}">Open First Modal</a> --}}


            <div class="flex flex-row w-full content-center justify-center items-center my-2">

                <div class="text-center t5ext-sm"> {{mb_strimwidth($project->title, 0, 15, "...") }} </div>
    
            </div>
            <form action="{{$project->path()}}" method="post" class="w-full ">
                        
                @method('PATCH')
                @csrf
                <div class="w-full">

                    @if ($now == Carbon\Carbon::now()->toDateString())
                    <label class="flex justify-center items-center">
                        <div class="rounded  w-10 h-10 flex flex-shrink-0 justify-center items-center  rounded-full shadow-md hover:shadow-xl">
                          <input type="checkbox" class="opacity-0 absolute" onchange="this.form.submit()" name="completed" {{$project->completed ? 'checked' : ''}}>
                          <img src="{{ asset('images/circle.png') }}" alt="">
                        </div>
                      </label>
                    @endif 

                </div>
            </form>
            
        </div>
      </div>
      {{-- End of habit card --}}      
      
      @elseif($project->completed == 1)
      
      <div class="habit-card habit-box w-full sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/12  flex-none px-2 items-center content-between">
        <div class=" min-h-full flex flex-wrap content-around bg-{{ $project->color ?? 'blue'}} rounded-2xl mh-20 text-gray-light text-center p-2  border-0 border-{{ $project->color ?? 'blue'}}">

          {{-- <div class="flex flex-row justify-between w-full">
            <a class="button h-full flex justify-center items-center modal-open text-xs"  data-toggle="modal" data-target="modal-{{ $key }}">edit</a>
            <a class="button h-full flex justify-center items-center modal-open text-xs"  data-toggle="modal" data-target="delete-modal-{{ $key }}">delete</a>

          </div> --}}
          <div class="flex flex-row w-full content-center justify-center items-center my-2">
                <div class="text-center text-sm"> {{mb_strimwidth($project->title, 0, 15, "...") }} </div>
    
            </div>
            <form action="{{$project->path()}}" method="post" class="w-full">
                        
                @method('PATCH')
                @csrf

                <div class="w-full">
                    <label class="flex justify-center items-center">

                        @if ($now == Carbon\Carbon::now()->toDateString())
                        <div class="rounded  w-10 h-10 flex flex-shrink-0 justify-center items-center  rounded-full shadow-md hover:shadow-xl">
                            <input type="checkbox" class="opacity-0 absolute" onchange="this.form.submit()" name="completed" {{$project->completed ? 'checked' : ''}}>
                          <img src="{{ asset('images/circle.png') }}" alt="">
                            {{-- <svg class="fill-current hidden w-4 h-4 text-green-main pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg> --}}
                          </div>
                        @endif
                      </label>
                </div>
            
            </form>

        </div>
      </div>
    @endif

    @empty
        <div class="text-gray-400 text-xl my-4 py-20 text-3xl tracking-widers">You don't have any habits yet.</div>
    @endforelse







</div>


</div>

    </div>
{{-- Day view ends here --}}

</main>


<section class="container rounded-lg mt-5">

<div class="flex-center position-ref py-5">

    <div class="content w-full">

        <div class="w-full py-3 pb-6">
            <div class="">
                <table class="table w-full flex justify-between">
                    <thead id="calendar-body">
                        {{-- <h1 class="table-heading-top flex inline-flex px-2 mb-1">نوشیدن ۳ لیوان آب</h1> --}}
                        {{-- <h3 class="card-header" id="monthAndYear"></h3> --}}
            <div class="">


                <div class="flex flex-row justify-between w-full mb-6">
                    <div class="text-gray-400  text-4xl font-bold"><a href="{{ Carbon\Carbon::parse($now)->addMonthsNoOverflow(-1)->toDateString()}}"> {{ Carbon\Carbon::parse($now)->addMonthsNoOverflow(-1)->format(' F')}}</a> </div>
                    <div class="text-gray-light font-extrabold text-4xl"><a href="{{ Carbon\Carbon::parse($now)->toDateString()}}"> {{ Carbon\Carbon::parse($now)->format(' F')}} </a></div>
                    <div class="text-gray-400  text-4xl font-bold"><a href="{{ Carbon\Carbon::parse($now)->addMonthsNoOverflow(+1)->toDateString()}}"> {{ Carbon\Carbon::parse($now)->addMonthsNoOverflow(+1)->format(' F')}}</a> </div>


                </div>
{{-- <div class="flex flex-row my-12">
    <div class="w-1/2">&nbsp;</div>
    @if ( $daily_percent > 0)
    <div class=" flex  w-1/2 text-gray-light text-center h-32  items-center border-l border-white">
        <div class=" w-full  rounded-full">
            <div class="bg-green-main text-xs leading-none text-center text-gray-light h-20 flex items-center shadow h-24 flex items-center"
                style="width: {{ $daily_percent }}%"><p class="mx-auto text-xl"><span class=" text-3xl font-extrabold">{{ $daily_percent }}%</span> Progress</p></div>
        </div>
</div>        
    @endif

</div> --}}
            </div>
                    </thead>
                    <tr class="">
                        <th class="text-right text-gray-light font-normal "></th>
                        @foreach ($period as $key => $day)
                        <td class="h-2 md:h-4 lg:h-6 xl:h-8 w-2 md:w-4 lg:w-6 xl:w-8 text-center text-gray-400 font-bold">{{ $key+1 }}</td>
     
                        @endforeach



                    </tr>
                    @foreach ($projects as $project)
                    <tr class="">
                        <th class="h-2 md:h-4 lg:h-6 xl:h-8 w-2 md:w-4 lg:w-6 xl:w-8 text-right text-gray-light truncate font-xs sm:font-sm md:font-normal lg:pr-4 text-justify">{{mb_strimwidth($project->title, 0, 15, "...") }}   </th>
                        @foreach ($period as $day)
                            @if ( count($project->done_on_days($day)->get()) )
                            <td class="h-2 md:h-4 lg:h-6 xl:h-8 w-2 md:w-4 lg:w-6 xl:w-8 bg-{{$project->color}}"></td>
                                @else
                                <td class="h-2 md:h-4 lg:h-6 xl:h-8 w-2 md:w-4 lg:w-6 xl:w-8 bg-gray-dark"></td>
                            @endif
                        @endforeach
                    </tr>
                    @endforeach



                </table>
            </div>
        </div>

    </div>
</div>

</section>





@endsection


@section('footer-assets')
    <script>
    $(document).ready(function () {


$(document).on('click', '#profile', function(event) { 
  console.log('test')
    event.preventDefault(); 
    $(".profile-open").trigger('click'); 
});
        var openmodal = document.querySelectorAll('.modal-open')
     let selectedModalTargetId = ''
     for (var i = 0; i < openmodal.length; i++) {
       openmodal[i].addEventListener('click', function(event){
         selectedModalTargetId = event.target.attributes.getNamedItem('data-target').value
         console.log(selectedModalTargetId)
         event.preventDefault()
         toggleModal()
       })
     }
  
    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)
  
    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
    }
  
    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
        isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
        isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
        toggleModal()
      }
    }
  
    function toggleModal () {
      if(!selectedModalTargetId) {
        return
      }
      const body = document.querySelector('body')
      const modal = document.getElementById(selectedModalTargetId)
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }



        $(function() {
   $(".auto_submit_item").change(function() {
     $("form").submit();
   });
 });
    });
    </script>


<script>
    
 </script>
@endsection