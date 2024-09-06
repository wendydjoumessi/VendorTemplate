@extends('ModernTemplate.layout')

@section('content')

<div class="p-4 container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 md:space-x-5 my-12 ">
        <div class="flex">
            <div class="flex-col relative">
                @foreach (range(3,5) as $index )
                     <img src="ModernTemplate/images/Rectangle {{$index}} (2).png" class="w-32 lg:w-56 h-auto mb-3">
                @endforeach
                 <div class="hidden md:block">
                  <div class="flex justify-center absolute bottom-0 left-4">
                    <div class="mr-6 circle hidden  bg-white">
                      <img src="ModernTemplate/images/Vector (4).svg"/>
                    </div>
                    <div class="circle hidden bg-white">
                       <img src="ModernTemplate/images/Vector (5).svg"/>
                    </div>
                  </div>
                 </div>
            </div>
            <div class="flex-grow-1 relative">
                <img src="ModernTemplate/images/Rectangle 2 (18).png" class="mb-4 w-full h-auto  pl-4"> 
                <div class="circle bg-white absolute bottom-10 right-10">
                    <img src="ModernTemplate/images/Vector (6).svg"/>
                </div>
            </div>
             </div>
             <div class="flex-wrap mt-8 md:mt-0">
                <div class="pb-9">
                    <p class="text-gray-600 pb-2 text-sm">Home / Shop / Product Title </p>
                    <h1 class="productT font-bold pb-2 whitespace-nowrap">Product Title</h1>
                    <p class="text-xl text-gray-600">XAF 150.000</p>
                </div>
                <div class="flex justify-start mb-7 flex-col md:flex-row">
                        <button class="flex items-center bg-custom-gray text-custom-dark rounded-md whitespace-nowrap min-w-[12rem] min-h-[2rem] justify-center py-3">
                            <img src="ModernTemplate/images/Vector (7).png" class="mr-1" />
                            <p class="text-sm pl-4">Call to Buy</p>
                        </button>

                        <button class="flex items-center bg-custom-green text-white  rounded-md whitespace-nowrap min-w-[11rem] min-h-[2rem] justify-center ml-4 py-3">
                            <img src="ModernTemplate/images/Vector (8).png" class="mr-2" />
                            <strong class=" text-sm">Buy Via Whatsapp</strong>
                        </button>
                </div>
                    <hr/>
                <div class="mt-6">
                    <p>Category: Electronics, CameraS</p>
                    <div class="flex pt-3 pb-7">
                        <p class="pr-4">Share product:</p>
                         @foreach (range(1,6) as $index )
                           <img src="ModernTemplate/images/vector{{$index}} (3).png" class=" mr-5 md:w-5 h-auto w-3"/>
                         @endforeach
                    </div>
                    <div class="bg-gray-300 rounded-sm flex justify-between max-h-full min-h-[4rem] w-full  items-center px-4 mb-4">
                        <p class="text-base font-bold">Description</p>
                        <img src="ModernTemplate/images/Vector (3).svg" onclick="toggleAccordion(this)" class="cursor-pointer"/>
                    </div>
                    <p class="pl-4 hidden pb-4 w-full">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. At, nemo amet consequuntur dignissimos voluptatem eligendi quam inventore fuga? Exercitationem voluptatum dolorem qui laborum expedita a earum asperiores delectus itaque culpa.
                    </p>
                </div>
                <hr class=" mb-4"/> 
                <div class="bg-gray-100 rounded-sm flex justify-between max-h-full min-h-[4rem] w-full items-center px-4 mb-4">
                        <p class="text-base font-bold">Reviews (0)</p>
                        <img src="ModernTemplate/images/Vector (3).svg" class="cursor-pointer"/>
                    </div>
                </div>
            </div>

        <!-- section after the grid-->
        <div class="flex justify-between items-center md:flex-row pb-6 flex-col">
            <h3 class="font-bold pb-6 home-h2">You might also like</h3>
            <span class="text-base pb-0 font-bold justify-end">See All Products</span>
       </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mb-12">
            @foreach (range(14,17) as $index )
            <div class="border border-black-500 rounded-lg bg-white p-6">
                <div>
                    <img src="ModernTemplate/images/Rectangle{{$index}}.png" />
                </div>
                <div>
                    <p class="category-name">Category</p>
                    <p class="font-bold product-title">Product Title <br/>XAF 20,000 </p>
                </div>
            </div>
            @endforeach
        </div>
</div>
@endsection


@section('scripts')

<script>
      function toggleAccordion(element) {
            // Get the next sibling element, which should be the accordion content
            var accordionContent = element.parentElement.nextElementSibling;

            // Toggle the 'hidden' class
            if (accordionContent.classList.contains('hidden')) {
                accordionContent.classList.remove('hidden');
            } else {
                accordionContent.classList.add('hidden');
            }
        }
</script>
@endsection