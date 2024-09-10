@extends('ModernTemplate.layout')

@section('content')
    <div class="p-4 container mx-auto">
        <div class="flex flex-col md:flex-row">
        <!-- Sidebar -->
        <div class="h-auto w-full sidebar-width p-4 mt-6 lg:mt-0">
            <p class="text-base font-bold lg:pb-6 pb-2">Latest Products</p>
            <div class="grid grid-cols-1">
                @foreach (range(0,2) as $index)
                    <div class="flex max-w-full max-h-full mb-4">
                        <div class="bg-gray-300 min-w-[6rem] min-h-[6rem] rounded-lg"></div>
                          <div class="ml-4 py-3">
                            <p class="text-custom-gray1 text-sm pb-2">Category</p>
                            <p class="font-bold text-base">Product Title</p>XAF 15.000
                        </div>
                    </div>
                @endforeach
                <hr class="my-8">
                <p class="text-base font-bold pb-6 pt-4">Top Selling Products</p>
                @foreach (range(0,2) as $index)
                    <div class="flex max-w-full max-h-full mb-4">
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

        <!-- Main Content -->
        <div class="w-full h-auto">
            <div class="relative">
              <img src="ModernTemplate/images/bg.jpg" class="w-auto mb-6 lg:mb-12 h-[157px]"/>
                <div class="absolute items-center left-0 bottom-0 flex flex-col justify-center text-white pl-6 pb-10">
                    <p class="title font-bold pb-2">About</p>
                    <p>Home / about</p>
                </div>
            </div>
            <p class="lg:text-center lg:mx-5 text-left">
                Maecenas arcu risus semper sit arcu. Hac orci curabitur id at in adipiscing imperdiet. Vitae pulvinar amet quam venenatis at eu consectetur in proin. Sem odio at auctor morbi dui sodales sollicitudin pretium suspendisse. Nullam massa et lectus enim amet elementum. Sagittis sed turpis sapien risus aenean. Consectetur arcu lacus id nisl vel vestibulum mauris risus libero. Eget lectus commodo diam et gravida mi maecenas. Ac purus pellentesque eget malesuada ipsum.
                Purus nunc integer ac sapien augue ipsum sit quis felis. Feugiat sagittis blandit urna convallis donec vel vulputate proin vestibulum. Erat id massa dui feugiat. Molestie velit mauris tortor fringilla lectus dictumst eget. Dui laoreet volutpat elementum id suspendisse suscipit. Dolor habitant senectus vestibulum aliquam sed. A urna mattis semper risus vulputate. Eget nulla orci amet egestas tristique adipiscing ac mi. Nibh orci vel nunc lorem malesuada pretium amet aliquam natoque. Pretium luctus quam quis elementum faucibus dolor nibh id fringilla.
              </p>
            <img src="ModernTemplate/images/Rectangle 2 (19).png" class="w-[592px] h-auto mb-6 lg:mb-12 mx-auto pt-10 justify-center" />
        </div>
    </div>
  </div>
@endsection