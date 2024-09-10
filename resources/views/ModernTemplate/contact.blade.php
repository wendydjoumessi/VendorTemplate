@extends('ModernTemplate.layout')

@section('content')
    <div class="p-4 container mx-auto">
      <div class="relative">
         <img src="ModernTemplate/images/bg.jpg" class="w-full mt-12 lg:mt-0 h-[157px]" />
         <div class="absolute items-center left-0 bottom-0 flex flex-col justify-center text-white contact">
            <p class="title font-bold pb-2">Contact</p>
            <p class="text-base">Home / contact</p>
         </div>
      </div>
       <div class="flex justify-center items-center contact-main">
          <div class="grid lg:grid-cols-2 grid-cols-1 mt-12">
            <div class="contact-info">
                <p class="font-bold contact-p pb-9 pt-5 md:pt-0">Please fill out this form and we will get in touch with you shortly</p>
                <div>
                    <div class="flex px-5 pt-5 pb-7 mb-6 justify-center items-center">
                        <div class="circle bg-gray-300">
                           <img src="ModernTemplate/images/phone.svg" class="w-5 h-auto" />
                        </div>
                        <p class=" whitespace-nowrap">
                        <strong class="ml-4 mr-11 text-gray-700">Phone</strong> +237 6 988 777 889
                        </p>
                    </div>
                    <hr/>

                    <div class="flex px-5 pt-5 pb-7 mb-6 justify-center items-center">
                        <div class="circle bg-gray-300">
                           <img src="ModernTemplate/images/Email.svg" class="w-5 h-auto" />
                        </div>
                        <p class=" whitespace-nowrap">
                        <strong class="ml-4 mr-11 text-gray-700">Email</strong> +237 6 988 777 889
                        </p>
                    </div>
                    <hr/>

                    <div class="flex px-5 pt-5 pb-7 mb-6 justify-center items-center">
                        <div class="circle bg-gray-300">
                           <img src="ModernTemplate/images/loc.svg" class="w-5 h-auto" />
                        </div>
                        <p class="whitespace-nowrap">
                        <strong class="ml-4 mr-5 text-gray-700">Address</strong> +237 6 988 777 889
                        </p>
                    </div>
                    <hr/>
                </div>
            </div>
            <div class="bg-gray-100 rounded-lg p-12 mb-8 md:mb-0">
               <form class="">
                 <div class="max-w-full mb-4">
                    <label class="block text-base mb-2 text-gray-700">Name</label>
                    <input type="text" class="w-full h-auto px-4 py-2 border border-gray-300 rounded-md focus:outline-none" />
                 </div>
                 <div class="max-w-full mb-4">
                    <label class="block text-base mb-2 text-gray-700">Email</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none" />
                 </div>
                 <div class="max-w-full mb-4">
                    <label class="block text-base mb-2 text-gray-700">Phone Number</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none" />
                 </div>
                 <div class="max-w-full">
                        <label class="block text-base mb-2 text-gray-700">Your Message</label>
                        <textarea class="w-full py-2 border min-h-[224px] border-gray-300 rounded-md focus:outline-none max-h-max"></textarea>
                    </div>
               </form>
            </div>
          </div>
       </div>
    </div>
@endsection