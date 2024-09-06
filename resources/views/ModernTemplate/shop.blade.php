@extends('ModernTemplate.layout')

@section('content')
    <div class="p-4 container mx-auto">
      <div class="flex min-h-screen max-w-full md:flex-row flex-col">
        <!-- side bar -->
         <div class="h-auto w-full sidebar-width mt-10 md:mt-0">
            <div class="flex justify-between items-center pb-9">
                <h5 class="font-bold text-2xl">Filter</h5>
                <p class="underline text-base cursor-pointer">Clear all</p>
            </div>
            <p class="text-base font-bold pb-6">Filter by price</p>
            <div class="relative range">
                 <input type="range" id="minRange" min="0" max="100" value="0" class="absolute w-full h-1 z-10 range-input"/>
                 <input type="range" id="maxRange" min="0" max="100" value="80" class="absolute w-full h-1 z-20 range-input">
            </div>
             <div class="w-full grid grid-cols-4 mt-3 pb-10">
                <div class="mt-4">
                   <p class="font-bold" >Min</p>
                    <div class="border border-black-500 rounded-lg min-w-[7rem] min-h-[2rem] flex items-center  pr-5 pl-4">
                        0
                    </div>
                </div>
                <div>
                  <img src="ModernTemplate/images/minus.svg" class="w-5 absolute mt-12 ml-12"/>
                </div>
                <div class="mt-4">
                <span class="font-bold">Max</span>
                    <div class="border border-black-500 rounded-lg min-w-[7rem] min-h-[2rem] flex items-center pl-4">
                        250000
                    </div>
                </div>
                <div class="border border-black-500 rounded-xl ml-10 mt-10 bg-custom-gray flex items-center justify-center">
                    <img src="ModernTemplate/images/Vector (1).svg" class="cursor-pointer" />
                </div>
            </div>
            <hr/>
            <p class="text-base font-bold pt-10 pb-8">Filter by categories</p>
              <div class="justify-between md:items-center text-left flex w-full py-3">
                <div class="border-2 check-box border-gray-800 border-solid cursor-pointer" onclick="checkBox(this)">
                    <img src="ModernTemplate/images/Vector (2).svg" class="cursor-pointer hidden check-image" />
                </div>
                <p class="flex-1 text-center md:text-left pl-3 py-1">Electronics</p>
                <div class="border border-custom-gray1 rounded-xl w-8 h-7 text-center flex items-center justify-center">12</div>
            </div>
            <div class="justify-between items-center flex w-full py-3">
                <div class="border-2 check-box border-gray-800 border-solid cursor-pointer" onclick="checkBox(this)">
                    <img src="ModernTemplate/images/Vector (2).svg" class="cursor-pointer hidden check-image" />
                </div>
                <p class="flex-1 text-center md:text-left pl-3 py-1">Generator and Portable Power</p>
                <div class="border border-custom-gray1 rounded-xl w-8 h-7 text-center flex items-center justify-center">3</div>
            </div>
            <div class="justify-between items-center flex w-full py-3">
                <div class="border-2 check-box border-gray-800 border-solid cursor-pointer" onclick="checkBox(this)" >
                    <img src="ModernTemplate/images/Vector (2).svg" class="cursor-pointer hidden check-image" />
                </div>
                <p class="flex-1 text-center md:text-left pl-3 py-1">Phone and Tablets</p>
                <div class="border border-custom-gray1 rounded-xl w-8 h-7 text-center flex items-center justify-center">12</div>
            </div>
            <div class="justify-between items-center flex w-full py-3">
                <div class="border-2 check-box border-gray-800 border-solid cursor-pointer" onclick="checkBox(this)">
                    <img src="ModernTemplate/images/Vector (2).svg" class="cursor-pointer hidden check-image"/>
                </div>
                <p class="flex-1 text-center md:text-left pl-3 py-1">Televisions and Videos</p>
                <div class="border border-custom-gray1 rounded-xl w-8 h-7 text-center flex items-center justify-center">12</div>
            </div>
            <p class="text-gray-500 pb-10 pt-5">See More Categories</p>
            <hr/>
             
            <p class="text-base font-bold pb-6 pt-9">Top Selling Products</p>
            <div class="grid grid-cols-1">
            @foreach (range(0,2) as $index )
                <div class="flex w-full h-auto mb-4">
                    <div class="bg-gray-300 min-w-[6rem] min-h-[6rem] rounded-lg"></div>
                      <div class="ml-4 py-3">
                        <p class="text-custom-gray1 text-sm pb-2">Category</p>
                        <p class="font-bold text-base">Product Title</p>XAF 15.000
                     </div>
                </div>
             @endforeach
             <hr class="my-8">
            </div>
         </div>

        <!-- end of  sidebar -->

        <!-- main content -->
        <div class="hero  md:w-3/4 h-auto w-full mt-10 md:mt-10">
           <div class="relative hidden md:block">
           <img src="ModernTemplate/images/F4.png" class="w-full ml-6 mb-10" />
               <div class="flex absolute bottom-8 right-40 mb-4 mr-4">
                    <a href="{{ url('/shop') }}" class="justify-center items-center flex">
                      <img src="ModernTemplate/images/Vector (14).png" class="w-full mr-5" />
                     </a>
                    <a href="{{ url('/shop-grid') }}" class="justify-center items-center flex active">
                       <img src="ModernTemplate/images/Vector (15).png"/>
                   </a>
                </div>
            </div>
         <div class="grid lg:grid-cols-1 xl:grid-cols-2  w-full mx-auto">
            @foreach (range(0,8) as $index )
              <div class="md:ml-6 mb-10 md:mb-5">
                <div class="border border-black-500 rounded-lg bg-white p-4 w-full h-auto">
                    <a href="{{ url('/product-detail') }}">
                        <div class="bg-custom-gray1 min-w-[11rem] max-w-full max-h-full min-h-[15rem] overflow-auto mx-auto rounded-lg mb-5"></div>
                     </a>
                    <div>
                        <p class="category-name">Category</p>
                        <p class="font-bold product-title">Product Title <br/>XAF 20,000 </p>
                    </div>
                </div>
                <div class="pt-4 flex">
                    <button class="flex bg-custom-gray text-custom-dark p-3 rounded-md whitespace-nowrap md:pr-0 w-full justify-center lg:justify-start md:mr-3">
                        <img src="ModernTemplate/images/Vector (7).png" class="mr-2 max-w-full" />
                        <p class="lg:text1 text whitespace-nowrap mx-3">
                            Call to Buy
                        </p>
                    </button>
                    <button class=" bg-custom-green text-white flex py-3 rounded-md whitespace-nowrap px-1 md:px-0 w-full justify-center lg:justify-start">
                        <img src="ModernTemplate/images/Vector (8).png" class="ml-2 max-w-full">
                        <strong class="lg:text1 text ml-2">Buy Via Whatsapp</strong>
                    </button>
                </div>
            </div>
            @endforeach
           </div>
        </div>
        <!-- end of main section -->
      </div>
    </div>
@endsection


@section('scripts')

<script>
    function checkBox(element) {
        var checkImage = element.querySelector('.check-image');
        
        if (checkImage.classList.contains('hidden')) {
            checkImage.classList.remove('hidden');
        } else {
            checkImage.classList.add('hidden');
        }
    }

     function checkBox(element) {
        var checkImage = element.querySelector('.check-image');
        
        if (checkImage.classList.contains('hidden')) {
            checkImage.classList.remove('hidden');
        } else {
            checkImage.classList.add('hidden');
        }
    }

</script>
@endsection