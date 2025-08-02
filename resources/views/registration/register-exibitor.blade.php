   <x-reg-layout>
       <x-header>
           Exhibitor's Registration
       </x-header>

       {{-- Starting of ABOUT PAGE --}}
       <section data-aos="fade-in" id="about" class="min-h-[40vh] py-20 md:py-20 overflow-x-hidden ">
           <div class="container mx-auto md:px-24 px-4 max-w-[1140px]">
               <div class=" headers md:pb-10 pb-10">
                   <div class=" header_sub text-[14px] font-bold italic text-primarycolor">
                       ABOUT THIS EVENT:
                   </div>
                   <div class="header_title text-4xl">
                       WHY EXHIBIT
                   </div>
               </div>

               <div class="grid md:grid-cols-2 md:gap-10 grid-cols-1">
                   <div data-aos="zoom-in"
                       class="rounded-xl border-b-8 border-[#F0D6D7] overflow-hidden md:mt-20 md:h-[300px] h-[220px] mb-4 w-full object-fill relative">
                       <img src="storage/img/slide/slilde1.jpg" class="   absolute w-full" alt="" />
                   </div>

                   <div>
                       <div class="pb-4">
                           <h3 class=" font-bold text-2xl">Absolutely! Exhibiting at IPPPEX will be a game-changer for
                               your product and service.</h3>
                       </div>
                       <div class="pb-4">
                           <p class=" text-justify">
                               IPPPEX 2023 is not just another industry event. It is a unique opportunity to connect
                               with industry leaders, showcase your products and services, and expand your business in
                               Nigeria and beyond. Act now to take advantage of this unique opportunity to connect with
                               industry leaders, showcase your products and services, and expand your business in
                               Nigeria and beyond. In April this year, the Lagos maiden edition of IPPPEX was flagged
                               off at the Landmark Centre, Victoria Island, with about 48 exhibitors that showcased
                               their brands in the show, with two different conferences running concurrently with the
                               show. <br><br>

                               The Abuja IPPPEX will showcase the latest innovations and trends in technology,
                               consumables, and printing services, live demonstrations of products, networking,
                               conferencing, and business upskilling for guests at the show.

                           </p>
                       </div>
                       <div class=" px-4 ">
                           <h3 class=" text-primarycolor font-bold mb-4 text-2xl inline-block border-black border-b">
                               Benefits for Exhibitors
                           </h3>

                           <ol class="list-decimal flex flex-col space-y-4">
                               <li data-aos="fade-left" data-aos-duration="2000" class=" bg-gray-100 p-4 rounded-sm">
                                   Elevated Brand Visibility: Amplify your presence in the industry and expand your
                                   reach.</li>
                               <li data-aos="fade-left" data-aos-duration="3000" class=" bg-gray-100 p-4 rounded-sm">
                                   Strategic Connections: Forge new partnerships, secure clients, and access potential
                                   suppliers.</li>
                               <li data-aos="fade-left" data-aos-duration="2000" class=" bg-gray-100 p-4 rounded-sm">
                                   Product Spotlight: Showcase your groundbreaking solutions to a targeted and
                                   enthusiastic audience.</li>
                               <li data-aos="fade-left" data-aos-duration="1500" class=" bg-gray-100 p-4 rounded-sm">
                                   Amplified Promotion: Benefit from additional exposure through event marketing and
                                   media coverage.
                               </li>
                           </ol>
                       </div>
                   </div>


               </div>
           </div>
       </section>
       {{-- Begin About Page --}}

       {{-- Start Who should Exhibit --}}
       <section class="min-h-[40vh] py-20 overflow-x-hidden bg-[#D2D2D240] ">
           <div class="container mx-auto md:px-24 px-4 max-w-[1140px]">
               <div class="grid md:grid-cols-2 grid-cols-1 gap-10 md:gap-40 line-system">

                   <div data-aos="fade-right" data-aos-duration="3000" class=" col-span-1 flex md:justify-center px-4 ">

                       <div>
                           <h3 class=" text-primarycolor text-2xl font-bold mb-4 inline-block ">
                               Who should exhibit?
                           </h3>
                           <ul class=" list-disc flex flex-col space-y-2">
                               <li>Print and packaging equipment dealers</li>
                               <li>Print Consumables dealers</li>
                               <li>Large Format printers</li>
                               <li>
                                   Commercial Printers
                               </li>
                               <li class=""> Promotional Products Sellers</li>
                               <li class=""> Publishing Companies.</li>
                               <li class=""> Textile Companies</li>
                               <li class=""> Light packaging printers</li>
                               <li class=""> Paper manufacturers/ dealers, etc</li>
                           </ul>
                       </div>
                   </div>
                   <div data-aos="fade-left" data-aos-duration="3000" class=" col-span-1 flex justify-end  px-4">

                       <div>
                           <h3 class=" text-primarycolor text-2xl font-bold mb-4 inline-block ">
                               Why you should participate:
                           </h3>
                           <ul class=" list-disc flex flex-col space-y-4">
                               <li>Over 1,000 quality visitors expected in the show</li>
                               <li>Opportunity to showcase your products and build goodwill for your services</li>
                               <li>Meet, demonstrate, and sell to prospective clients under one roof.</li>
                               <li>
                                   Increased patronage.
                               </li>
                               <li class="">Affordable exhibitions for all categories of companies</li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       {{-- END of Who should Exhibit --}}

       {{-- Starting of Question --}}
       <section id="contact" class="min-h-[40vh] py-20 md:py-20 overflow-x-hidde] ">
           <div class="container mx-auto md:px-24 px-4 max-w-[1140px]">
               <div class=" overflow-hidden">
                   <div data-aos="fade-up" data-aos-duration="3000"
                       class=" md:pb-10 pb-10 flex flex-col text-center items-center justify-center">
                       <div class=" text-4xl font-bold">
                           Exhibitor
                       </div>

                       <div>
                           I have questions about <span class=" font-bold">Online Registration , stand construction,
                               Hotels booking, Banner advertising, etc</span>
                       </div>
                   </div>
               </div>

               <div class=" grid md:grid-cols-2 grid-cols-1 gap-4">
                   <div class="md:hidden block">
                       <img src="storage/img/plan.jpeg" alt="">
                   </div>
                   <div class=" flex justify-center w-full">
                       <form action="{{ route('contact') }}" method="POST" class="md:w-5/6 w-full">
                           @csrf
                           <div>

                               <x-input name="company_name" class="bg-transparent" for="company_name"
                                   placeholder="Enter your company name" :value="old('company_name')" label="Company Name">
                                   <x-slot name="icon">
                                       <i class="fa-light fa-building-columns"></i>
                                   </x-slot>
                               </x-input>
                               @error('company_name')
                                   <div class="text-[10px] text-red-500">{{ $message }}</div>
                               @enderror
                           </div>
                           <div class="mt-4 w-full">

                               <label for="country">Select Country:</label>
                               <div class=" overflow-hidden relative">
                                   <span
                                       class=" absolute w-[20px] flex justify-center px-8 items-center text-[#202020] text-xl h-full">
                                       <i class="fa-thin fa-location-dot"></i></span>

                                   <select
                                       class="bg-transparent focus-visible:outline-none border w-full border-[#D9D2D2] rounded-[12px] pl-14 h-[56px]"
                                       name="country_region" id="country">

                                       <option disabled selected>Select Country</option>
                                       @foreach ($countries as $country)
                                           <option>{{ $country->name->common }}</option>
                                       @endforeach
                                   </select>
                               </div>
                               @error('country_region')
                                   <div class="text-[10px] text-red-500">{{ $message }}</div>
                               @enderror
                           </div>
                           <div class="mt-4 w-full">

                               <x-input class=" w-full bg-transparent" name="state" for="state"
                                   placeholder="Enter your State" :value="old('state')" label="State">
                                   <x-slot name="icon">
                                       <i class="fa-regular fa-location-crosshairs"></i>
                                   </x-slot>
                               </x-input>
                               @error('state')
                                   <div class="text-[10px] text-red-500">{{ $message }}</div>
                               @enderror
                           </div>
                           <div class=" w-full mt-4">

                               <x-label class="mb-2">
                                   Have you booked a stand?
                               </x-label>

                               <x-radio :value="old('booking')" onchange="showStand()" name="booking" value="yes"
                                   id="bookingYes" label="Yes" /><br><br>
                               <x-radio :value="old('booking')" onchange="showStand()" name="booking" value="no"
                                   label="No" id="bookingNo" />
                               @error('booking')
                                   <div class="text-[10px] text-red-500">{{ $message }}</div>
                               @enderror
                               <br><br>
                           </div>
                           <div class=" w-full" id="standField" style="display: none;">

                               <x-input class=" w-full bg-transparent" name="stand" for="stand"
                                   placeholder="Enter stand number (A1)" :value="old('stand')"
                                   label="Reserve stand number...for my company ">
                                   <x-slot name="icon">
                                       <i class="fa-thin fa-map"></i>
                                   </x-slot>
                               </x-input>
                               @error('stand')
                                   <div class="text-[10px] text-red-500">{{ $message }}</div>
                               @enderror
                           </div>

                           <script>
                               const bookingYes = document.getElementById('bookingYes');
                               const standField = document.getElementById('standField');

                               function showStand() {
                                   if (document.getElementById("bookingYes").checked) {
                                       standField.style.display = 'none';
                                   }
                                   if (document.getElementById("bookingNo").checked) {
                                       standField.style.display = "block";
                                   }
                               }
                           </script>

                           <div class="mt-4 w-full">

                               <label for="q_about">I have questions about</label>
                               <div class=" overflow-hidden relative">
                                   <span
                                       class=" absolute w-[20px] flex justify-center px-8 items-center text-[#202020] text-xl h-full">
                                       <i class="fa-thin fa-message-question"></i></span>

                                   <select
                                       class="bg-transparent focus-visible:outline-none mt-2 border w-full border-[#D9D2D2] rounded-[12px] pl-14 h-[56px]"
                                       name="q_about" id="q_about" :value="old('q_about')">

                                       <option disabled selected>Select</option>

                                       <option>Online Registration</option>
                                       <option>stand construction</option>
                                       <option>Hotels booking</option>
                                       <option>Banner advertising</option>
                                   </select>
                               </div>
                               @error('q_about')
                                   <div class="text-[10px] text-red-500">{{ $message }}</div>
                               @enderror
                           </div>

                           <div class="mt-4">
                               <x-text-area-input class="bg-transparent" name="question" :value="old('question')"
                                   placeholder="Enter your Question" label="My Question">
                                   <x-slot name="icon">
                                       <i class="fa-thin fa-envelope-open-text"></i>
                                   </x-slot>
                               </x-text-area-input>
                               @error('question')
                                   <div class="text-[10px] text-red-500">{{ $message }}</div>
                               @enderror
                           </div>
                           <div class="mt-4 w-full">

                               <x-input type="email" min="1" class=" w-full bg-transparent" name="email"
                                   for="email" placeholder="Enter your email address" :value="old('email')"
                                   label="Email Address">
                                   <x-slot name="icon">
                                       <i class="fa-sharp fa-light fa-at"></i>
                                   </x-slot>
                               </x-input>
                               @error('email')
                                   <div class="text-[10px] text-red-500">{{ $message }}</div>
                               @enderror
                           </div>
                           <div class="mt-4 w-full">

                               <x-input class=" w-full bg-transparent" name="phone_number" for="phone_number"
                                   placeholder="Enter your phone number" :value="old('phone_number')" label="Phone Number">
                                   <x-slot name="icon">
                                       <i class="fa-sharp fa-light fa-phone"></i>
                                   </x-slot>
                               </x-input>
                               @error('phone_number')
                                   <div class="text-[10px] text-red-500">{{ $message }}</div>
                               @enderror
                           </div>
                           <div class="mt-4 text-center justify-center w-full">
                               <div id="registration-1" class=" flex justify-center">
                                   <button id="registration-1-btn" type="submit" class="custom-btn btn-1"
                                       style=" padding:0 80px !important">
                                       Submit
                                   </button>
                               </div>
                               <div id="loading" class=" mt-10 hidden w-full  col-span-2 justify-center">
                                   <span>Sending Request... Please wait</span>
                               </div>

                               <script>
                                   const submitButton = document.getElementById("registration-1-btn"); // Replace with your form ID
                                   const container = document.getElementById("registration-1"); // Replace with your form ID
                                   const loading = document.getElementById("loading"); // Replace with your form ID


                                   submitButton.addEventListener("click", function() {
                                       loading.classList.remove('hidden')
                                       loading.classList.add('flex')
                                       container.classList.add('hidden')
                                   });
                               </script>
                           </div>
                       </form>
                   </div>
                   <div class="hidden md:block overflow-hidden">
                       <img class="  transition-all " src="storage/img/plan.jpeg" alt="">
                   </div>
               </div>

           </div>
       </section>
       {{-- Begin Question --}}

       {{-- Start Footer --}}
       <section class=" border-t py-20 overflow-x-hidden px-4 md:px-24">
           <div class="container mx-auto max-w-[1140px] ">
               @include('layouts.footer')
           </div>
       </section>
       {{-- End Footer --}}

   </x-reg-layout>
