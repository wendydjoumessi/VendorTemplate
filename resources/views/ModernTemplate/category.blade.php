@extends('ModernTemplate.layout')

@section('content')
    <div class="p-4 container mx-auto">
         <div class="flex justify-between items-start md:items-center md:flex-row pb-6 flex-col">
            <h2 class="font-bold text-xl pb-6 home-h2">Categories</h2>
            <span class="text-base pb-0 font-bold justify-end">See All Products</span>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl-grid-cols-4">
            @foreach (range(0,11) as $index )
              <div class="pb-4 pr-4 w-auto h-full">
                <div class="border border-black-500 rounded-lg bg-white p-6">
                     <div class="bg-custom-gray1 min-w-[12rem] max-w-full max-h-full min-h-[15rem] overflow-auto rounded-lg mb-6"></div>
                    <div>
                        <p class="category-name">Category</p>
                        <p class="font-bold product-title">Product Title <br/>XAF 20,000 </p>
                    </div>
                </div>
                  <div class="pt-4 flex">
                    <button class="flex bg-custom-gray text-custom-dark p-3 rounded-md whitespace-nowrap pr-1 mr-1 w-40 h-auto justify-center">
                        <img src="ModernTemplate/images/Vector (7).png" class="mr-1 md:mr-2 max-w-full" />
                        <p class="lg:text-sm text-base whitespace-nowrap mx-3 md:mx-4">
                            Call to Buy
                        </p>
                    </button>
                    <button class="bg-custom-green text-white flex py-3 rounded-md whitespace-nowrap px-1 justify-center h-auto flex-grow w-auto">
                        <img src="ModernTemplate/images/Vector (8).png" class=" max-w-full md:mr-2 mr-1">
                        <strong class="lg:text-sm text-base mx-1">Buy Via Whatsapp</strong>
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection