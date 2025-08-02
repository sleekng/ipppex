   <x-reg-layout>
       <x-header>
           Expo Event Brochure
       </x-header>

       {{-- Starting of ABOUT PAGE --}}
       <section data-aos="fade-in" id="about" class="min-h-[40vh] py-20 md:py-20 overflow-x-hidden ">
           <div class="container mx-auto md:px-24 px-4 max-w-[1140px]">
               <div class=" headers md:pb-10 pb-10">
     
                   <div class="header_title text-4xl">
                       Conference brochure
                   </div>
               </div>

               <div>
                   @if (count($pdfFiles) > 0)
                       <div>
                           @foreach ($pdfFiles as $pdfFile)
                               <a target="_blank" class="flex flex-col space-y-2 md:flex-row justify-between md:items-center w-full mt-4 rounded-lg hover:bg-gray-200 transition-all ease-out p-4 bg-gray-100" href="storage/pdfs/{{$pdfFile->path}}">
                                <span>  {{ $pdfFile->filename }}</span>
                                 <span class=" text-red-700">Download</span>
                            </a>
                           @endforeach
                       </div>
                   @else
                       <p>No Conference Brochure uploaded yet.</p>
                   @endif
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
