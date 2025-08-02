   <x-reg-layout>
       <x-header>
           Confirmed Exhibitors
       </x-header>

       {{-- Starting of ABOUT PAGE --}}
       <section data-aos="fade-in" id="about" class="min-h-[40vh] py-20 md:py-20 overflow-x-hidden ">
           <div class="container mx-auto md:px-24 px-4 max-w-[1140px]">
               <div class=" headers md:pb-10 pb-10">

                   <div class="header_title text-4xl">
                       Confirmed Exhibitors
                   </div>
               </div>

               <div class=" overflow-hidden grid grid-cols-2 md:grid-cols-4 gap-4 gap-y-10  md:gap-10">
                   @foreach ($exhibitorsList as $item)
                       <div data-aos="fade-up" data-aos-duration="2000" class="md:p-4 hover:scale-110 transition-all ease-in-out text-center  border">
                           <div class=" h-[100px] md:h-[200px]  "
                               style=" background-image:url('storage/exhibitorsLogo/{{ $item->logo }}');
                      background-size: contain;
                     background-repeat: no-repeat;
                     background-position: center;
                 
                 ">

                           </div>
                           <div class=" py-4 font-bold leading-4">{{ $item->name }}</div>
                       </div>
                   @endforeach
               </div>





           </div>
       </section>
       {{-- Begin About Page --}}

       {{-- Starting Counter --}}
       <section class="min-h-[40vh] border-t team py-40 overflow-x-hidden bg-white">
           <div class="container mx-auto md:px-24 px-4 max-w-[1140px]">
               <div class="flex justify-center md:pb-10 pb-10">
                   <div class="text-center">
                       <div class="text-3xl font-bold text-red-600 mb-4">UP COMING</div>
                       <div class="text-xl text-center font-bold text-gray-800 mb-8">
                           Showcase your company's cutting-edge printing products and technologies to a targeted audience at the International Paper, Publishing and Printing Expo (IPPPEX) – West Africa's leading industry trade show.
                       </div>
                   </div>
               </div>

               <div class="flex space-y-6 md:space-y-8 flex-col items-center justify-center">
                   <div class="text-center">
                       <div class="text-2xl font-bold text-gray-800 mb-2">Theme</div>
                       <div class="text-3xl font-bold text-gray-900 mb-2">DRIVING SUSTAINABLE GROWTH IN PAPER, PRINTING & PUBLISHING SECTOR FOR NATIONAL DEVELOPMENT</div>
                       <div class="text-xl text-gray-700 mb-4">Navigating the Changing Landscape of the Nigerian Printing Industry</div>
                   </div>
                   
                   <div class="bg-gray-100 px-8 py-4 rounded-lg">
                       <div class="text-3xl font-bold text-gray-900">November 11th-13th, 2025</div>
                       <div class="text-lg text-gray-600">(Tuesday, Wednesday & Thursday)</div>
                   </div>
                   
                   <div class="text-center space-y-2 mb-6">
                       <div class="text-lg text-gray-800">Lagos Oriental Hotel, Victoria Island, Lagos, Nigeria</div>
                       <div class="text-lg text-gray-800">9AM - 5PM daily</div>
                       <div class="text-lg text-gray-800">Exhibition Space: 1,800 sqm</div>
                   </div>

                   <div id="countdown"></div>
                   <div class="flex space-x-4 justify-center items-center">
                       <div class="flex flex-col justify-center items-center">
                           <div class=" text-xl font-bold py-4">Days</div>

                           <div class=" p-4 bg-secondarycolor">
                               <span id="days" class=" font-bold text-2xl md:text-8xl text-white">--</span>
                           </div>
                       </div>
                       <div class="flex flex-col justify-center items-center">
                           <div class=" text-xl font-bold py-4">Hour</div>
                           <div class=" p-4 bg-secondarycolor">
                               <span id="hours" class=" font-bold text-2xl md:text-8xl text-white">--</span>
                           </div>
                       </div>
                       <div class="flex flex-col justify-center items-center">
                           <div class="text-xl font-bold py-4">Minute</div>
                           <div class="  p-4 bg-secondarycolor">
                               <span id="minutes" class=" font-bold text-2xl md:text-8xl text-white">--</span>
                           </div>
                       </div>
                       <div class="flex flex-col justify-center items-center">
                           <div class="text-xl font-bold py-4">Seconds</div>
                           <div class="  p-4 bg-secondarycolor">
                               <span id="seconds" class="  font-boldtext-2xl md:text-8xl text-white">--</span>
                           </div>
                       </div>
                   </div>
                   <div class="flex justify-center items-center flex-col md:flex-row md:space-x-4 mt-8">
                       <a href="{{ route('register.exhibitor') }}">
                           <x-button class="mt-4 bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-lg font-bold">
                               Register as an exhibitor
                           </x-button>
                       </a>
                       <a href="{{ route('register.visitor') }}">
                           <x-button class="mt-4 bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-lg font-bold">
                               Register as a visitor
                           </x-button>
                       </a>
                   </div>

               </div>
           </div>

       </section>
       {{-- ENDING TEAM --}}


       {{-- Start Footer --}}
       <section class=" border-t py-20 overflow-x-hidden px-4 md:px-24">
           <div class="container mx-auto max-w-[1140px] ">
               @include('layouts.footer')
           </div>
       </section>
       {{-- End Footer --}}

   </x-reg-layout>
