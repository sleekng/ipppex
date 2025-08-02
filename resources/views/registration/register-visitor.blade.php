<x-reg-layout>

    <x-header>
        Visitor's Registration
    </x-header>

    {{-- Starting of WHY VISIT --}}
    <section class="min-h-[40vh] py-10 mt-4 overflow-x-hidden ">
        <div class="container mx-auto md:px-24 px-4 max-w-[1140px]">
            <div class=" headers md:pb-10 pb-10 overflow-hidden">
                <div data-aos="fade-up" data-aos-duration="3000" class="header_title text-4xl">
                    WHY VISIT
                </div>
            </div>

            <div class="grid md:grid-cols-2 md:gap-10 gap-4 grid-cols-1">
                <div data-aos="fade-right" data-aos-duration="3000"
                    class="rounded-xl md:hidden block border-b-8 border-[#F0D6D7] overflow-hidden md:mt-20 md:h-[300px] h-[220px] mb-4 w-full object-fill relative">
                    <img src="storage/img/slide/slilde1.jpg" class="   absolute w-full" alt="" />
                </div>

                <div class="">

                    <div class="pb-4">
                        <p class=" text-justify">
                            IPPPEX offers exciting seminars, conferences, and workshops that focus on the latest
                            developments and trends in the paper, printing, publishing, light packaging, textile
                            printing and graphics industry. Visitors have the opportunity to learn from experts,
                            gain insights into new technologies and best practices, and find out about the latest
                            products and services.
                            <br><br>
                            <span class="font-bold"> IPPPEX Is an excellent platform to network and build
                                relationship with potential customers and partners. </span>
                        </p>
                    </div>
                    <div class=" px-4 ">
                        <h3 class=" text-primarycolor text-2xl font-bold mb-4 inline-block border-black border-b">
                            Benefits for Attendees
                        </h3>

                        <ol class="list-decimal flex flex-col space-y-2">
                            <li class=""><span class="font-bold">Industry Insights</span>: Gain expert
                                knowledge, market trends, and future prospects from thought leaders
                            </li>
                            <li class=""> <span class=" font-bold"> Networking Powerhouse:</span> Connect
                                with
                                influential peers, establish collaborations, and unlock new opportunities.</li>

                            <li class=""><span class="font-bold">Educational Empowerment:</span> Engage in
                                enlightening workshops, panel discussions, and interactive sessions.</li>

                            <li class=""> <span class="font-bold">Value-Maximizing:</span> Access exclusive
                                deals, discounts, and promotions from exhibitors, tailored for attendees.
                            </li>
                        </ol>
                    </div>
                </div>

                <div
                    class="rounded-xl hidden md:block border-b-8 border-[#F0D6D7] overflow-hidden md:mt-20 md:h-[300px] h-[220px] mb-4 w-full object-fill relative">
                    <img src="storage/img/slide/slilde1.jpg" class="   absolute w-full" alt="" />
                </div>
            </div>
        </div>
    </section>
    {{-- Begin WHY VISIT --}}

    {{-- Start Who should Exhibit --}}
    <section class="min-h-[40vh] pb-10 overflow-x-hidden ">
        <div class="container mx-auto md:px-24 px-4 max-w-[1140px]">
            <h3 class=" text-2xl text-primarycolor font-bold mb-4 inline-block ">
                Expected Visitors to the Event
            </h3>
            <div class="grid md:grid-cols-2 grid-cols-1 line-system gap-3 md:gap-40 px-4">

                <div class=" col-span-1 flex justify-center ">

                    <div data-aos="fade-right" data-aos-duration="3000">
                        <ul class=" list-disc flex flex-col space-y-2">
                            <li>Printers & Print Buyers</li>
                            <li>Publishers including owners of Commercial Newspapers</li>
                            <li>Print Associations</li>
                            <li>Converters, Corrugated Box Manufacturers
                            </li>
                            <li class="">Production / Quality Control Managers from FMCG and Retail sectors
                            </li>
                            <li class="">Government Agencies
                            </li>
                            <li class="">Hotels</li>
                            <li class="">Corporate organizations</li>
                        </ul>
                    </div>
                </div>
                <div class=" col-span-1 flex justify-end w-full">

                    <div data-aos="fade-left" data-aos-duration="3000">

                        <ul class=" list-disc flex flex-col space-y-4">
                            <li>Textile Machinery Manufacturers, Importers, and Exporters</li>
                            <li>Dyestuffs and Ink Manufacturers and Sellers</li>
                            <li>Textile Companies' Sourcing and Purchasing Authorities</li>
                            <li>
                                Textile Associations
                            </li>
                            <li class="">Research and Development Facilities</li>
                            <li class="">Universities, etc.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>{{-- END of Who should Exhibit --}}

    <div class="py-12">

        <section class=" w-screen relative flex justify-center items-center px-4 pb-40 py-10">
            <div class=" w-[1140px] border py-20 shadow-lg rounded-lg px-4 md:px-10 ">
                <div class=" flex justify-center">
                    <a href="{{ route('home') }}"> <x-application-logo></x-application-logo></a>
                </div>
                <div class=" mt-4 text-center text-2xl ">
                    REGISTRATION
                </div>
                <!-- Validation Errors -->
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->

                <form method="POST" action="{{ route('register') }}" class=" w-full gap-x-10 md:grid grid-cols-2">
                    @csrf

                    <div class="mt-4 w-full">
                        <x-input name="name" class="bg-transparent w-full" for="name" :value="old('name')"
                            placeholder="Enter your full name" label="Full Name">
                            <x-slot name="icon">
                                <i class="fa-thin fa-user"></i>
                            </x-slot>
                        </x-input>

                        @error('name')
                            <div class="text-[10px] text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-4 w-full">
                        <x-input class=" w-full bg-transparent" name="email" for="email" :value="old('email')"
                            placeholder="Enter your email address" label="Email Address">
                            <x-slot name="icon">
                                <i class="fa-sharp fa-light fa-at"></i>
                            </x-slot>
                        </x-input>
                        @error('email')
                            <div class="text-[10px] text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-4 w-full">
                        <x-input class=" w-full bg-transparent" name="phone_number" for="phone_number" :value="old('phone_number')"
                            placeholder="Enter your Phone Number" label="Phone Number">
                            <x-slot name="icon">
                                <i class="fa-sharp fa-light fa-phone"></i>
                            </x-slot>
                        </x-input>
                        @error('phone_number')
                            <div class="text-[10px] text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-4 w-full">
                        <x-input :value="old('organization_company')" class=" w-full bg-transparent" name="organization_company"
                            for="organization_company" placeholder="Enter your Organisation / Company"
                            label="Organisation ">
                            <x-slot name="icon">
                                <i class="fa-thin fa-buildings"></i>
                            </x-slot>
                        </x-input>
                        @error('organization_company')
                            <div class="text-[10px] text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class=" w-full">
                        <x-input :value="old('role')" class=" w-full bg-transparent" name="role" for="Designation"
                            placeholder="Enter your designation" label="Designation">
                            <x-slot name="icon">
                                <i class="fa-light fa-sitemap"></i>
                            </x-slot>
                        </x-input>
                        @error('role')
                            <div class="text-[10px] text-red-500">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mt-4 w-full">

                        <label for="country">How did you hear about us?</label>
                        <div class=" overflow-hidden relative">
                            <span
                                class=" absolute w-[20px] flex justify-center px-8 items-center text-[#202020] text-xl h-full">
                                <i class="fa-thin fa-tower-broadcast"></i></span>

                            <select
                                class="bg-transparent focus-visible:outline-none mt-2 border w-full border-[#D9D2D2] rounded-[12px] pl-14 h-[56px]"
                                name="ref" id="ref" :value="old('ref')">

                                <option disabled selected>Select</option>

                                <option>Social Media</option>
                                <option>Road shows</option>
                                <option>Newspaper</option>
                                <option>Radio</option>
                                <option>Billboard</option>
                                <option>Flyer</option>
                                <option>Email</option>
                                <option>Word of mouth</option>

                            </select>
                        </div>
                        @error('ref')
                            <div class="text-[10px] text-red-500">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class=" w-full mt-4">
                        <x-label class="mb-2">
                            Is this your first time at NIPEX/IPPPEX?
                        </x-label>
                        @error('first_time')
                            <div class="text-[10px] text-red-500">{{ $message }}</div>
                        @enderror
                        <x-radio :value="old('first_time')" onchange="showStand()" name="first_time" value="yes"
                            id="firstYes" label="Yes" /><br><br>
                        <x-radio :value="old('first_time')" onchange="showStand()" name="first_time" value="no"
                            label="No" id="firstNo" /><br><br>
                    </div>


              <div id="attendYear" class="mt-4 w-full " style="display: none;">

                        <label for="attend_year" class="font-bold mt-2">Select year attended</label>
                        <div class=" overflow-hidden relative">
                          
                            <input class="text-primarycolor" type="checkbox" name="attend_year[]" value="2000 -2005"> 2000 -2005 <br>
                            <input class="text-primarycolor" type="checkbox" name="attend_year[]" value="2005 - 2010"> 2005 - 2010 <br>
                            <input class="text-primarycolor" type="checkbox" name="attend_year[]" value="2010 - 2015"> 2010 - 2015 <br>
                            <input class="text-primarycolor" type="checkbox" name="attend_year[]" value="2015 - 2020"> 2015 - 2020 <br>
                            <input class="text-primarycolor" type="checkbox" name="attend_year[]" value="2020 - 2025"> 2020 - 2025 <br>
                            <input class="text-primarycolor" type="checkbox" name="attend_year[]" value="2025 - 2030"> 2025 - 2030 <br>
                            <!-- Add more checkboxes as needed -->
                        </div>
                        @error('attend_year')
                            <div class="text-[10px] text-red-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <script>
                        const firstNo = document.getElementById('firstNo');
                        const attendYear = document.getElementById('attendYear');

                        function showStand() {
                            if (document.getElementById("firstNo").checked) {
                                attendYear.style.display = 'block';
                            }
                            if (document.getElementById("firstYes").checked) {
                                attendYear.value = null
                                attendYear.style.display = "none";
                            }
                        }
                    </script>

                    <div class="mt-4 w-full col-span-2 flex justify-start">
                        <x-checkbox type="checkbox" name="exhibitor" value="I want to visit IPPPEX"
                            label="I want to visit IPPPEX">
                        </x-checkbox>
                        @error('exhibitor')
                            <div class="text-[10px] text-red-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <div id="registration-1" class=" mt-10 w-full  col-span-2 justify-center flex">
                        <x-button id="registration-1-btn" style=" padding:10px 80px !important">
                            {{ __('Submit') }}
                        </x-button>
                    </div>
                    <div id="loading" class=" mt-10 hidden w-full  col-span-2 justify-center">
                        <span>Sending Request... Please wait</span>
                    </div>

                </form>

                <script>
                    const submitButton = document.getElementById("registration-1-btn"); // Replace with your form ID
                    const container = document.getElementById("registration-1"); // Replace with your form ID
                    const loading = document.getElementById("loading"); // Replace with your form ID

                    console.log(submitButton);
                    submitButton.addEventListener("click", function() {
                        loading.classList.remove('hidden')
                        loading.classList.add('flex')
                        container.classList.add('hidden')
                    });
                </script>

            </div>
        </section>


        {{-- Start Footer --}}
        <section class=" border-t py-20 overflow-x-hidden px-4 md:px-24">
            <div class="container mx-auto max-w-[1140px] ">
                @include('layouts.footer')
            </div>
        </section>
        {{-- End Footer --}}
    </div>

</x-reg-layout>
