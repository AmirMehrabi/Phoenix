@extends('layouts.dashboard')


@section('content')

{{-- <header class="flex items-center mb-4 py-4">
    <div class="flex justify-between items-center w-full ">
        <p class="text-gray-600 text-sm">
            <a href="/projects">پروژه‌های من</a>
        </p>        
        
        <a href="/projects/create" class="button" @click.prevent="$modal.show('new-project')">پروژه‌ی جدید</a>
    </div>

</header> --}}

<main class="container">
    <div class=" bg-white rounded-lg shadow-lg">
        
    <div class="flex flex-row items-center">
        <div class="text-gray-700 flex-grow px-4 py-2 mr-2">
            <h1 class="text-2xl text-black">امیرصدرا صبوری، سلام!</h1>
            <p class="text-gray-600">۵ ساعت و ۳۰ دقیقه تا زمان خواب</p>
        </div>
        <div class="text-gray-700 flex-grow px-4 py-2 ml-2">
            <div class="flex items-center">
                <div class="flex-initial text-gray-700 text-center  py-2 m-2">
                    <h4 class="flex text-xl">سه‌شنبه، هجدهم شهریور</h4>
                </div>
                <div class="flex flex-wrap text-gray-700 text-center  py-2 m-2 mr-auto">
                    <a href="" class="rounded-full h-8 w-8 border flex items-center justify-center"><i
                            class="fa fa-arrow-right" aria-hidden="true"></i></a>

                    <a href="" class="rounded-full h-8 w-8 border flex items-center justify-center"><i
                            class="fa fa-arrow-left" aria-hidden="true"></i></a>

                </div>
            </div>
            <div class="px-2">
                <div class="shadow w-full bg-gray-200 rounded-full">
                    <div class="bg-blue-500 text-xs rounded-full leading-none text-center text-white"
                        style="width: 45%">&nbsp;</div>
                </div>
                <p class="text-sm my-2">۴۵٪ هدف روزانه محقق شده</p>
            </div>

        </div>
    </div>

    <hr class="border">




<div class="flex flex-wrap">
  <div class="habit-card w-full md:w-1/3 lg:w-1/4 xl:w-1/5 flex-none p-2 items-center content-between">
    <div class=" flex flex-wrap content-between bg-yellow-500 rounded-lg mh-20 text-white text-center p-2">
        <div class="flex flex-row w-full content-between justify-between items-center">
            <div class="text-right text-lg">کتاب‌خوانی</div>
            <div class="flex self-center text-center">
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>
        <div class="flex flex-row w-full content-between justify-between items-center mt-2">
            <div class="text-center "> <i class="fas fa-check"></i> تکمیل شده</div>
        <div class="text-center text-sm"><a href="" class="hover:text-yellow-500 rounded hover:bg-white">واچین</a></div>
        </div>
    </div>
  </div>


  <div class="habit-card w-full md:w-1/3 lg:w-1/4 xl:w-1/5 flex-none p-2 items-center content-between">
    <div class=" flex flex-wrap content-between bg-green-500 rounded-lg mh-20 text-white text-center p-2">
        <div class="flex flex-row w-full content-between justify-between items-center">
            <div class="text-right text-lg">مرتب‌کردن اتاق خواب </div>
            <div class="flex self-center text-center">
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>
        <div class="flex flex-row w-full content-between justify-between items-center mt-2">
            <div class="text-center "> <i class="fas fa-check"></i> تکمیل شده</div>
        <div class="text-center text-sm"><a href="" class="hover:text-green-500 rounded hover:bg-white">واچین</a></div>
        </div>
    </div>
  </div>


  <div class="habit-card w-full md:w-1/3 lg:w-1/4 xl:w-1/5 flex-none p-2 items-center content-between">
    <div class=" flex flex-wrap content-between bg-purple-600 rounded-lg mh-20 text-white text-center p-2">
        <div class="flex flex-row w-full content-between justify-between items-center">
            <div class="text-right text-lg">آب دادن به گلدان‌ها </div>
            <div class="flex self-center text-center">
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>
        <div class="flex flex-row w-full content-between justify-between items-center mt-2">
            <div class="text-center "> <i class="fas fa-check"></i> تکمیل شده</div>
        <div class="text-center text-sm"><a href="" class="hover:text-blue-500 rounded hover:bg-white">واچین</a></div>
        </div>
    </div>
  </div>


  {{-- Unfinished task --}}

  <div class="habit-card w-full md:w-1/3 lg:w-1/4 xl:w-1/5 flex-none p-2 items-center content-between">
    <div class=" flex flex-wrap content-between bg-gray-200 rounded-lg mh-20 text-black border-r-4 border-red-500 text-center p-2">
        <div class="flex flex-row w-full content-between justify-between items-center">
            <div class="text-right text-lg">مرتب‌کردن اتاق خواب </div>
            <div class="flex self-center text-center">
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>
        <div class="flex flex-row w-full content-between justify-between items-center mt-2">
            <a href="" class="px-2 border rounded text-blue-500 border-blue-500 hover:bg-blue-400 hover:border-blue-400 hover:text-white w-full">تکمیل کردن</a>
        </div>
    </div>
  </div>


  <div class="habit-card w-full md:w-1/3 lg:w-1/4 xl:w-1/5 flex-none p-2 items-center content-between">
    <div class=" flex flex-wrap content-between bg-gray-200 rounded-lg mh-20 text-black border-r-4 border-orange-500 text-center p-2">
        <div class="flex flex-row w-full content-between justify-between items-center">
            <div class="text-right text-lg">تمرین خوش‌نویسی </div>
            <div class="flex self-center text-center">
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>
        <div class="flex flex-row w-full content-between justify-between items-center mt-2">
            <a href="" class="px-2 border rounded text-blue-500 border-blue-500 hover:bg-blue-400 hover:border-blue-400 hover:text-white w-full">تکمیل کردن</a>
        </div>
    </div>
  </div>

  <div class="habit-card w-full md:w-1/3 lg:w-1/4 xl:w-1/5 flex-none p-2 items-center content-between">
    <div class=" flex flex-wrap content-between bg-gray-200 rounded-lg mh-20 text-black border-r-4 border-orange-500 text-center p-2">
        <div class="flex flex-row w-full content-between justify-between items-center">
            <div class="text-right text-lg">تماس با دوستان </div>
            <div class="flex self-center text-center">
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>
        <div class="flex flex-row w-full content-between justify-between items-center mt-2">
            <a href="" class="px-2 border rounded text-blue-500 border-blue-500 hover:bg-blue-400 hover:border-blue-400 hover:text-white w-full">تکمیل کردن</a>
        </div>
    </div>
  </div>


  <div class="habit-card w-full md:w-1/3 lg:w-1/4 xl:w-1/5 flex-none p-2 items-center content-between">
    <div class=" flex flex-wrap content-between bg-gray-200 rounded-lg mh-20 text-black border-r-4 border-orange-500 text-center p-2">
        <div class="flex flex-row w-full content-between justify-between items-center">
            <div class="text-right text-lg">پیاده روی </div>
            <div class="flex self-center text-center">
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>
        <div class="flex flex-row w-full content-between justify-between items-center mt-2">
            <a href="" class="px-2 border rounded text-blue-500 border-blue-500 hover:bg-blue-400 hover:border-blue-400 hover:text-white w-full">تکمیل کردن</a>
        </div>
    </div>
  </div>


  <div class="habit-card w-full md:w-1/3 lg:w-1/4 xl:w-1/5 flex-none p-2 items-center content-between">
    <div class=" flex flex-wrap content-between bg-gray-200 rounded-lg mh-20 text-black border-r-4 border-orange-500 text-center p-2">
        <div class="flex flex-row w-full content-between justify-between items-center">
            <div class="text-right text-lg">ترجمه‌ی داستان کوتاه </div>
            <div class="flex self-center text-center">
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>
        <div class="flex flex-row w-full content-between justify-between items-center mt-2">
            <a href="" class="px-2 border rounded text-blue-500 border-blue-500 hover:bg-blue-400 hover:border-blue-400 hover:text-white w-full">تکمیل کردن</a>
        </div>
    </div>
  </div>


</div>

    </div>
{{-- Day view ends here --}}

</main>


<section class="container  bg-white rounded-lg shadow-lg mt-5">

<div class="flex-center position-ref p-5">

    <div class="content w-full">

        <div class="w-full px-3 pb-6">
            <div class="">
                <table class="table w-full flex justify-between">
                    <thead id="calendar-body">
                        {{-- <h1 class="table-heading-top flex inline-flex px-2 mb-1">نوشیدن ۳ لیوان آب</h1> --}}
                        {{-- <h3 class="card-header" id="monthAndYear"></h3> --}}
            <div class="">

<div class="flex flex-col mb-10">
  <div class="text-gray-700 text-right text-xl">شهریور ۱۳۹۸</div>
  <div class="text-gray-700 text-center mt-2">
                <div class="shadow w-full  rounded-full">
                    <div class="bg-blue-500 text-xs rounded-full leading-none text-center text-white"
                        style="width: 25%">&nbsp;</div>
                </div>
  </div>
  <div class="text-gray-700 text-center">
<div class="flex flex-row  justify-between">
  <div class="text-gray-700 text-center  mt-2">۲۵٪ هدف ماهانه محقق شده</div>
  <div class="text-gray-700 text-center  mt-2">۸۵٪ پیشرفت نسبت به ماه قبل <i class="fas fa-angle-up text-green-500"></i></div>
</div>
  </div>
</div>
            </div>
                    </thead>
                    <tr class="">
                        <th class="text-right ">کتاب‌خوانی:</th>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="fas fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="fas fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="fas fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>
                        <td><i class="far fa-circle text-yellow-500"></i></td>



                    </tr>
                    <tr>
                        <th class="text-right">تمرین خوش نویسی:</th>
                        <td><i class="far fa-circle text-green-500"></i></td>
                        <td><i class="fas fa-circle text-green-500"></i></td>
                        <td><i class="far fa-circle text-green-500"></i></td>
                        <td><i class="fas fa-circle text-green-500"></i></td>
                        <td><i class="far fa-circle text-green-500"></i></td>
                        <td><i class="fas fa-circle text-green-500"></i></td>
                        <td><i class="fas fa-circle text-green-500"></i></td>
                        <td><i class="fas fa-circle text-green-500"></i></td>
                        <td><i class="fas fa-circle text-green-500"></i></td>
                        <td><i class="fas fa-circle text-green-500"></i></td>
                        <td><i class="far fa-circle text-green-500"></i></td>
                        <td><i class="far fa-circle text-green-500"></i></td>
                        <td><i class="far fa-circle text-green-500"></i></td>
                        <td><i class="fas fa-circle text-green-500"></i></td>
                        <td><i class="far fa-circle text-green-500"></i></td>
                        <td><i class="fas fa-circle text-green-500"></i></td>
                        <td><i class="fas fa-circle text-green-500"></i></td>
                        <td><i class="fas fa-circle text-green-500"></i></td>
                        <td><i class="fas fa-circle text-green-500"></i></td>
                        <td><i class="far fa-circle text-green-500"></i></td>
                        <td><i class="far fa-circle text-green-500"></i></td>
                        <td><i class="fas fa-circle text-green-500"></i></td>
                        <td><i class="fas fa-circle text-green-500"></i></td>
                        <td><i class="far fa-circle text-green-500"></i></td>
                        <td><i class="fas fa-circle text-green-500"></i></td>
                        <td><i class="fas fa-circle text-green-500"></i></td>
                        <td><i class="fas fa-circle text-green-500"></i></td>
                        <td><i class="fas fa-circle text-green-500"></i></td>
                        <td><i class="fas fa-circle text-green-500"></i></td>
                        <td><i class="far fa-circle text-green-500"></i></td>
                        <td><i class="fas fa-circle  text-green-500"></i></td>


                    </tr>
                    <tr>
                        <th class="text-right">آب دادن به گل‌ها:</th>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="fas fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="fas fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="fas fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>
                        <td><i class="far fa-circle text-purple-600"></i></td>


                    </tr>


                </table>
            </div>
        </div>

    </div>
</div>

</section>


<section class="container  bg-white rounded-lg shadow-lg mt-5  p-5">
<div class="flex flex-col">
  <div class="text-gray-700 text-center mb-5">
<div class="flex justify-between items-center">
  <div class=" text-center">
      <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-600" placeholder="جستجو در عادت‌ها">
  </div>
  <div class="flex text-center items-center">
            <div class="bg-gray-200 mx-1 border-r-4 border-green-600 p-1 rounded-lg h-16 w-16 flex items-center justify-center">تمام عادت‌ها</div> 

      <div class="bg-indigo-800 mx-1 text-white p-1 rounded-lg h-16 w-16 flex items-center justify-center text-sm">اداری</div> 
      <div class="bg-green-500 mx-1 text-white p-1 rounded-lg h-16 w-16 flex items-center justify-center text-sm">روزمره</div> 
      <div class="bg-indigo-500 mx-1 text-white p-1 rounded-lg h-16 w-16 flex items-center justify-center text-sm">سلامتی</div> 
      <div class="bg-orange-500 mx-1 text-white p-1 rounded-lg h-16 w-16 flex items-center justify-center text-sm">کسب و کار </div> 
            <div class="bg-yellow-500 mx-1 text-white p-1 rounded-lg h-16 w-16 flex items-center justify-center text-sm">متفرقه </div> 

  </div>
</div>
  </div>
  <div class="text-gray-700 text-center flex mt-3">
    <div class="bg-indigo-800 mx-1 text-white p-1 rounded-lg h-16 min-w-0 flex items-center justify-center">
        <div class="flex flex-row w-full content-between justify-between items-center">
            <div class="text-right mr-1">آب دادن به گلدان‌ها </div>
            <div class="flex self-center text-center ml-1 mr-4">
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>    
    </div> 
    <div class="bg-indigo-800 mx-1 text-white p-1 rounded-lg h-16 min-w-0 flex items-center justify-center">
        <div class="flex flex-row w-full content-between justify-between items-center">
            <div class="text-right mr-1">پرداخت قبوض </div>
            <div class="flex self-center text-center ml-1 mr-4">
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>    
    </div> 

    <div class="bg-indigo-500 mx-1 text-white p-1 rounded-lg h-16 min-w-0 flex items-center justify-center">
        <div class="flex flex-row w-full content-between justify-between items-center">
            <div class="text-right mr-1">مسفاک زدن </div>
            <div class="flex self-center text-center ml-1 mr-4">
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>    
    </div> 


    <div class="bg-orange-500 mx-1 text-white p-1 rounded-lg h-16 min-w-0 flex items-center justify-center">
        <div class="flex flex-row w-full content-between justify-between items-center">
            <div class="text-right mr-1">جلسات Scrum </div>
            <div class="flex self-center text-center ml-1 mr-4">
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>    
    </div> 


    <div class="bg-green-500 mx-1 text-white p-1 rounded-lg h-16 min-w-0 flex items-center justify-center">
        <div class="flex flex-row w-full content-between justify-between items-center">
            <div class="text-right mr-1">مرتب کردن اتاق خواب </div>
            <div class="flex self-center text-center ml-1 mr-4">
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>    
    </div> 


    <div class="bg-yellow-500 mx-1 text-white p-1 rounded-lg h-16 min-w-0 flex items-center justify-center">
        <div class="flex flex-row w-full content-between justify-between items-center">
            <div class="text-right mr-1">کتاب‌خوانی </div>
            <div class="flex self-center text-center ml-1 mr-4">
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>    
    </div> 

        <a href="" class="bg-gray-200 hover:bg-white border-2  hover:border-blue-400 mx-1 p-1 rounded-full h-16 w-16 flex items-center justify-center mr-auto">
        <i class="fas fa-plus text-2xl  "></i>   
    </a> 
  </div>
  {{-- <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">3</div> --}}
</div>
</section>




@endsection




@section('footer-assets')

<script>
    today = new Date();
    currentMonth = today.getMonth() - 1;
    currentYear = today.getFullYear();
    selectYear = today.getFullYear();
    selectMonth = today.getMonth();

    months = ["ژانویه", "Feb", "Mar", "Apr", "May", "Jun", "جولای", "آبان", "سپتامبر", "اکتبر", "نوامبر", "Dec"];

    monthAndYear = document.getElementById("monthAndYear");
    showCalendar(currentMonth, currentYear);


    function showCalendar(month, year) {

        let firstDay = (new Date(year, month)).getDay();

        tbl = document.getElementById("calendar-body"); // body of the calendar

        // clearing all previous cells
        tbl.innerHTML = "";
        tbl.classList.add("mb-5");

        // filing data about month and in the page via DOM.
        monthAndYear.innerHTML = months[month] + " " + year;
        selectYear.value = year;
        selectMonth.value = month;

        // creating all cells
        let date = 1;
        for (let i = 0; i < 6; i++) {
            // creates a table row
            let row = document.createElement("tr");
            console.log(month);
            //creating individual cells, filing them up with data.
            for (let j = 0; j < 32; j++) {
                if (i === 0 && j < 1) {
                    cell = document.createElement("td");
                    cellText = document.createTextNode("");
                    cell.appendChild(cellText);
                    row.appendChild(cell);
                } else if (date > daysInMonth(month, year)) {
                    break;
                } else {
                    cell = document.createElement("th");
                    cell.classList.add("font-light");
                    cellText = document.createTextNode(date);;
                    if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
                        cell.classList.add("current-day");
                    } // color today's date
                    cell.appendChild(cellText);
                    row.appendChild(cell);
                    date++;
                }


            }

            tbl.appendChild(row); // appending each row into calendar body.
        }

    }


    // check how many days in a month code from https://dzone.com/articles/determining-number-days-month
    function daysInMonth(iMonth, iYear) {
        return 32 - new Date(iYear, iMonth, 32).getDate();
    }

    function toPersianNum($number) {
        $number = str_replace("1", "۱", $number);
        $number = str_replace("2", "۲", $number);
        $number = str_replace("3", "۳", $number);
        $number = str_replace("4", "۴", $number);
        $number = str_replace("5", "۵", $number);
        $number = str_replace("6", "۶", $number);
        $number = str_replace("7", "۷", $number);
        $number = str_replace("8", "۸", $number);
        $number = str_replace("9", "۹", $number);
        $number = str_replace("0", "۰", $number);
        return $number;
    }

</script>

@endsection