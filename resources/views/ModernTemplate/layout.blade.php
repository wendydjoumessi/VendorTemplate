<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title') | vendor-name | Buyam </title>
    <link rel="icon" type="image/png" href="vendor logo">
    <meta name="description" content="About vendor">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     @vite('resources/css/app.css')
     <link rel="stylesheet" href="ModernTemplate/css/template.css">
     <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
   


        <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700%7CUbuntu:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- start of nav bar -->
</head>
    <body>
       <header>
           <div class="bg-black">
                <div class="container mx-auto text-white flex flex-col md:flex-row md:flex-wrap justify-center md:justify-between py-3 items-center">
                    <!-- Call Us Section -->
                    <div class="flex items-center mb-4 md:mb-0 w-full md:w-auto justify-center">
                        <img src="ModernTemplate/images/icons8_phone 1.png" class="mr-2 max-w-full" />
                        <p class="text-base whitespace-nowrap">
                            <strong>call us</strong>: 6 75 66 77 88
                        </p>
                    </div>
                    
                    <!-- Download App Section -->
                    <div class="flex items-center w-full md:w-auto justify-center">
                        <p class="text-base px-2 md:px-4">Download App on</p>
                        <img src="ModernTemplate/images/Frame 7.png" class="w-12 h-auto  mr-3 md:mr-6" />
                        <img src="ModernTemplate/images/Frame 8.png" class="w-12 h-auto" />
                    </div>
                </div>
            </div>

       
         <!-- Navigation Bar -->
                <nav class="container mx-auto pl-3 md:py-3 md:px-0 flex md:justify-between items-center relative mb-5 md:mb-0">
                    <!-- Logo -->
                        <div class="">
                            <img src="ModernTemplate/images/Logo.png" class="absolute top-4 md:relative md:top-0 md:w-60 h-auto w-40  pr-4 md:pr-4" />
                        </div>

                        <!-- Hamburger Menu Icon for Small Screens -->
                        <div class="md:hidden absolute right-12 top-3">
                            <button id="menu-toggle" class="text-black focus:outline-none">
                                <img src="ModernTemplate/images/square.png" class="w-10 h-10 max-w-full cursor-pointer"/>
                            </button>
                        </div>
                    
                    <!-- Navigation Links -->
                    <ul id="menu" class="hidden md:flex pt-6 md:pt-0 md:bg-white md:text-black w-1/2 md:w-auto  h-screen lg:h-20  fixed md:relative top-0 bg-black text-white left-0 mx-auto md:mx-0 px-5 md:px-0
                    pb-12 md:pb-0">
                        <div class="md:hidden mb-4 md:mb-4">
                            <img src="ModernTemplate/images/Logo.png" class="w-60 h-auto" />
                        </div>
                        <li class="md:pr-10 flex items-center hover:text-custom-blue pt-2 md:pt-0">
                            <a href="{{ url('/home') }}" class="flex items-center {{ Request::is('home') ? 'activeli' : '' }}">Home</a>
                        </li>
                        <li class="md:pr-10 flex flex-col lg:flex-row lg:items-center pt-2 md:pt-0">
                            <div class="flex lg:items-center">
                                <a href="#" class="hover:text-custom-blue lg:items-center {{ Request::is('categories') ? 'activeli' : '' }}" >Categories</a>
                                <img src="ModernTemplate/images/Vector.svg" class="filter grayscale invert pl-3" id="dropdown-icon" onclick="toggleDropdown('categories-dropdown', 'dropdown-icon')"/>
                            </div>

                             <!-- categories-dropdown -->

                            <ul id="categories-dropdown" class="hidden lg:absolute top-10 md:bg-white shadow-md rounded mt-2 lg:px-4 py-4 min-w-[10rem] max-w-full lg:overflow-auto bg-black md:text-black text-white">
                                <li class="py-2 px-4 hover:text-custom-blue text-base "><a href="{{ url('/categories') }}">Electronics</a></li>
                                <li class="py-2 px-4 hover:text-custom-blue  text-base "><a href="#">Home Audio</a></li>
                                <li class="py-2 px-4 hover:text-custom-blue  text-base "><a href="#">Camera and Photo</a></li>
                                <li class="py-2 px-4 hover:text-custom-blue  text-base "><a href="#">Generator and Portable Power</a></li>
                                <li class="py-2 px-4 hover:text-custom-blue  text-base "><a href="#">Televisions and Videos</a></li>
                            </ul>
                        </li>
                        <li class="md:pr-10 flex items-center  hover:text-custom-blue pt-2 md:pt-0">
                            <a href="{{ url('/shop-grid') }}" class="flex items-center {{ Request::is('shop-grid') ? 'activeli' : '' }}">Shop</a>
                        </li>
                        <li class="md:pr-10 flex items-center  hover:text-custom-blue pt-2 md:pt-0">
                            <a href="{{ url('/about') }}" class="flex items-center {{ Request::is('about') ? 'activeli' : '' }}">About</a>
                        </li>
                        <li class="md:pr-10 flex items-center  hover:text-custom-blue pt-2 md:pt-0">
                            <a href="{{ url('/contact') }}" class="flex items-center {{ Request::is('contact') ? 'activeli' : '' }}">Contact</a>
                        </li>
                        <li class=" whitespace-nowrap flex items-center mt-4 md:mt-0">
                            <a href="#" class="flex text-custom-blue font-bold border-2 border-custom-blue border-solid p-3 rounded text-base whitespace-nowrap">
                                <img src="ModernTemplate/images/Vector.png" class="mr-2 flex w-5 h-auto">
                                Chat With Us
                            </a>
                        </li>
                    </ul>
                </nav>
        </header>

       <!-- end of nav bar -->
        
       <!-- content from child template -->
      
           @yield('content')
       

       <!-- start of footer -->
      <footer class="bg-gray-200 md:text-left md:px-0">
        <div class="container mx-auto px-4 ">
            <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-4 content mx-auto md:mx-0">
                <div class="about-section md:text-left">
                    <h6 class="font-bold text-xl pb-6">About Us</h6>
                    <p class="text-sm footer-about text-left">
                        Lorem ipsum dolor sit amet consectetur adipisicing 
                        elit. Recusandae, totam sapiente. Eligendi harum officiis
                        eveniet, adipisci est explicabo laudantium quidem quia sed
                        amet eaque aspernatur maiores, similique expedita nemo labore.
                    </p>
                </div>
              <div class="grid md:grid-cols-1 lg:grid-cols-3 gap-4 content">
                <div>
                    <h6 class="font-bold text-xl pb-3 md:pb-6 pt-6 md:pt-0 text-left">Top Categories</h6>
                        <p class="flex text-sm">
                            <img src="ModernTemplate/images/Vector (1).svg" class="pr-4 cursor-pointer" onclick="toggleAccordion(this)"/>
                            Electronics
                        </p>
                        <div class="categoriesAccordion hidden text-sm pl-6">
                            <p>Item 1</p>
                            <p>Item 2</p>
                        </div>
                        
                        <p class="flex whitespace-nowrap pt-4 text-sm">
                            <img src="ModernTemplate/images/Vector (1).svg" class="pr-4 cursor-pointer" onclick="toggleAccordion(this)"/>
                            Generator and Portable Power
                        </p>
                        <div class="categoriesAccordion hidden text-sm pl-6">
                            <p>Item 1</p>
                            <p>Item 2</p>
                        </div>
                        
                        <p class="flex text-sm pt-4">
                            <img src="ModernTemplate/images/Vector (1).svg" class="pr-4 cursor-pointer" onclick="toggleAccordion(this)"/>
                            Phone and Tablets
                        </p>
                        <div class="categoriesAccordion hidden text-sm pl-6">
                            <p>Item 1</p>
                            <p>Item 2</p>
                        </div>
                        
                        
                        <p class="flex text-sm pt-4">
                            <img src="ModernTemplate/images/Vector (1).svg" class="pr-4 cursor-pointer" onclick="toggleAccordion(this)"/>
                            Televisions and Videos
                        </p>
                        <div class="categoriesAccordion hidden text-sm pl-6">
                            <p>Item 1</p>
                            <p>Item 2</p>
                        </div>
                    </div>

                <div class="lg:ml-7 xl:ml-9">
                   <p class="font-bold text-xl md:pb-6 pb-3 pt-6 md:pt-0 text-left">Follow Us</p>
                    <div class="flex pb-3 text-sm">
                        <img src="ModernTemplate/images/Vector (3).png" class="mr-3 max-w-full"/>
                        <p>Facebook</p>
                    </div>
                    <div class="flex pb-4 text-sm">
                        <img src="ModernTemplate/images/Vector (4).png" class=" mr-3 max-w-full"/>
                        <p>Twiiter</p>
                    </div>
                    <div class="flex pb-4 text-sm">
                        <img src="ModernTemplate/images/Vector (5).png" class="mr-3 max-w-full"/>
                        <p>LinkedIn</p>
                    </div>
                    <div class="flex text-sm">
                        <img src="ModernTemplate/images/Vector (6).png" class=" mr-3 max-w-full"/>
                        <p>YouTube</p>
                    </div>
                </div>
                <div>
                    <p class="font-bold text-xl pb-6 text-left pt-6 md:pt-0">Download App</p>
                    <img src="ModernTemplate/images/Google_Play (1).png" class="md:pt-8 pb-4 max-w-full"/>
                    <img src="ModernTemplate/images/Google_Play (3).png" class="max-w-full"/>
                </div>
              </div>
            </div>
          </div>
      </footer>

     
 
       <!-- end of footer -->

       @yield('scripts')

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


        function toggleDropdown(id, buttonId) {
            var dropdown = document.getElementById(id);
            var button = document.getElementById(buttonId);

            // Toggle the dropdown
            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');

                // Add an event listener to the document to close the dropdown if clicked outside
                setTimeout(function() {
                    document.addEventListener('click', function(event) {
                        var isClickInsideDropdown = dropdown.contains(event.target);
                        var isClickOnButton = button.contains(event.target);

                        // If the click is outside both the dropdown and the button, hide the dropdown
                        if (!isClickInsideDropdown && !isClickOnButton) {
                            dropdown.classList.add('hidden');
                        }
                    }, { once: true }); // Ensure the event listener is removed after it's triggered once
                }, 0);

            } else {
                dropdown.classList.add('hidden');
            }
        }


            document.addEventListener('click', function(event) {
                const isClickInside = dropdown.contains(event.target) || toggleButton.contains(event.target);
                
                // If the click is outside the dropdown and button, close the dropdown
                if (!isClickInside) {
                    dropdown.classList.add('hidden'); // Hide dropdown
                }
            });
     
            const menuToggle = document.getElementById('menu-toggle');
            const menu = document.getElementById('menu');

            menuToggle.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });

       </script>
       
    </body>
</html>