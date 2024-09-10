@extends('ModernTemplate.layout')

@section('content')
    <div class="p-4 container mx-auto md:px-0">
        <div class="flex justify-between items-start md:items-center md:flex-row pb-6 flex-col">
            <h2 class="font-bold text-xl pb-6 home-h2">Latest Products</h2>
            <span class="text-base pb-0 font-bold justify-end">See All Products</span>
        </div>

        <div class="grid md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4">
            @foreach (range(0,7) as $index )
              <div class="pb-9 md:pb-4 max-w-full max-h-full sm:justify-center sm:items-center">
                <div class="border border-black-500 rounded-lg bg-white p-6 max-w-full">
                    <div>
                        <img src="ModernTemplate/images/Rectangle {{$index}}.png" class="w-full" />
                    </div>
                    <div class="pt-6">
                        <p class="category-name pb-2">Category</p>
                        <p class="font-bold product-title pb-2">Product Title</p> 
                        <span class="font-bold product-title">XAF 20,000</span>

                    </div>
                </div>
                  <div class="pt-4 flex">
                    <button class="flex bg-custom-gray text-custom-dark p-3 rounded-md whitespace-nowrap pr-1 mr-1 w-40 justify-center lg:justify-start">
                        <img src="ModernTemplate/images/Vector (7).png" class="mr-2 max-w-full" />
                        <p class="lg:text-base text-sm whitespace-nowrap mx-3 md:mx-4">
                            Call to Buy
                        </p>
                    </button>
                    <button class=" bg-custom-green text-white flex py-3 rounded-md whitespace-nowrap px-1 flex-grow w-auto justify-center lg:justify-start">
                        <img src="ModernTemplate/images/Vector (8).png" class="mr-2 max-w-full ml-2">
                        <strong class="lg:text-base text-sm">Buy Via Whatsapp</strong>
                    </button>
                </div>
            </div>
            @endforeach
        </div>

            <div class="flex justify-between items-start md:items-center md:flex-row pb-12 flex-col Popular-section">
                <h2 class="font-bold text-xl pb-6 home-h2">Popular Products</h2>
                <span class="text-base pb-0 font-bold justify-end">See All Products</span>
           </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach (range(8,11) as $index )
                 <div class="pb-9 md:pb-4  max-w-full max-h-full">
                    <div class="border border-black-500 rounded-lg bg-white p-6 max-w-full">
                        <div>
                            <img src="ModernTemplate/images/Rectangle {{$index}}.png" class="w-full" />
                        </div>
                        <div>
                            <p class="category-name">Category</p>
                            <p class="font-bold product-title">Product Title <br/>XAF 20,000 </p>
                        </div>
                    </div>
                    <div class="pt-4 flex">
                        <button class="flex bg-custom-gray text-custom-dark p-3 rounded-md whitespace-nowrap pr-1 md:pr-0 lg:w-[140px] w-40 justify-center lg:justify-start mr-1">
                            <img src="ModernTemplate/images/Vector (7).png" class="mr-2 md:mr-0 max-w-full" />
                            <p class="text whitespace-nowrap mx-4 md:pr-1">
                                Call to Buy
                            </p>
                        </button>
                        <button class=" bg-custom-green text-white flex py-3 rounded-md whitespace-nowrap px-1 md:px-0 w-auto flex-grow justify-center lg:justify-start">
                            <img src="ModernTemplate/images/Vector (8).png" class="mr-1 md:mr-1 md:ml-1 max-w-full">
                            <strong class="text">Buy Via Whatsapp</strong>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
@endsection