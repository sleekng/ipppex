<x-guest-layout>


    <div class=" overflow-hidden">
        {{-- Begin Landing Page --}}
        <section id="home" class="landing_page h-screen"
            style="  background-image:linear-gradient(to bottom, rgba(18, 16, 16, 0.734), rgba(18, 16, 16, 9)),url('storage/img/slide/bg.jpg'); background-position-y:center; background-repeat:no-repeat;background-size:cover">
            <div class="container mx-auto md:px-24 px-4 flex justify-center items-center h-full flex-col">
                <div class="xl:w-4/5  xl:text-center">
                    <h1 data-aos="zoom-in" data-aos-duration="2000" id="typewriter"
                        class="  font-extralight text-white pb-1">
                        Theme:
                    </h1>
                    <div class=" flex justify-center">
                        <h1 data-aos="fade-right" data-aos-duration="2000"
                            class=" font-extralight text-xl text-white pb-1 md:w-4/5 w-full"
                            style="line-height: 1.6rem !important">
                            <span class=" font-bold text-2xl text-white">
                                DRIVING SUSTAINABLE GROWTH IN PAPER, PRINTING & PUBLISHING SECTOR FOR NATIONAL DEVELOPMENT
                            </span>
                        </h1>
                    </div>

                    <div data-aos="fade-left" data-aos-duration="2000"
                        class="pt-3  pb-6 z-40 flex w-full justify-center  md:text-base text-white">
                        <div class="md:w-3/5 w-full text-white "> <span class=" text-orange-400">Join us</span> for
                            West Africa's leading industry trade show, bringing together key players in paper production, publishing, commercial printing, and packaging to explore cutting-edge innovations, industry trends, and business opportunities!</div>
                    </div>

                    <div class=" flex items-start md:items-center flex-col md:flex-row md:space-x-4 justify-center">
                        <a href="{{ route('register.exhibitor') }}">
                            <x-button data-aos="fade-up" data-aos-duration="4000" class=" mt-4 home-btn">
                                Register as an Exhibitor
                            </x-button>

                        </a>
                        <a href="https://www.showwave.co.za/online/ipppex">
                            <x-button data-aos="fade-up" data-aos-duration="4000" class=" mt-4 home-btn">
                                Register as a visitor
                            </x-button>

                        </a>
                    </div>
                </div>
            </div>
            @include('layouts.socialmedia')
        </section> {{-- End LandingPAge --}}

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
                    
                    <div class="bg-gray-100 px-8 py-4 rounded-lg text-center">
                        <div class="text-3xl font-bold text-gray-900">November 11th-13th, 2025</div>
                        <div class="text-lg text-gray-600">(Tuesday, Wednesday & Thursday)</div>
                    </div>
                    
                    <div class="text-center space-y-2 mb-6">
                        <div class="text-lg text-gray-800">Lagos Oriental Hotel, Victoria Island, Lagos, Nigeria</div>
                        <div class="text-2xl font-bold  text-gray-800">9AM - 5PM daily</div>
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
                        <a href="https://www.showwave.co.za/online/ipppex">
                            <x-button class="mt-4 bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-lg font-bold">
                                Register as a visitor
                            </x-button>
                        </a>
                    </div>

                </div>
            </div>

        </section>
        {{-- ENDING TEAM --}}

        {{-- Starting of ABOUT PAGE --}}
        <section data-aos="fade-in" id="about" class="min-h-[40vh] py-20 md:py-20 overflow-x-hidden ">
            <div class="container mx-auto md:px-24 px-4 max-w-[1140px]">
                <div class=" headers md:pb-10 pb-10">
                    <div class=" header_sub text-[14px] font-bold italic text-primarycolor">
                        ABOUT THE EVENT:
                    </div>
                    <div class="header_title text-4xl">
                        THE PREMIER EXHIBITION FOR AFRICA'S PAPER, PUBLISHING & PRINTING INDUSTRY
                    </div>
                </div>

                <div class="grid md:grid-cols-2 md:gap-10 grid-cols-1">
                    <div data-aos="zoom-in"
                        class="rounded-xl border-b-8 border-[#F0D6D7] overflow-hidden md:mt-20 md:h-[300px] h-[220px] mb-4 w-full object-fill relative">
                        <img src="storage/img/slide/slilde1.jpg" class="   absolute w-full" alt="" />
                    </div>

                    <div>
                        <div class="pb-4">
                            <h3 class=" font-bold text-2xl">IPPPEX 2025 is West Africa's leading industry trade show, bringing together key players in paper production, publishing, commercial printing, and packaging.</h3>
                        </div>
                        <div class="pb-4">
                            <p class=" text-justify">
                                With over 1,800 square meters of exhibition space and over 5,000 visitors expected, the event will serve as a hub for manufacturers, suppliers, distributors, publishers, and print professionals to connect, collaborate, and showcase their latest products and solutions. This year the event is collocated with Signage Expo from China, making it an even more comprehensive industry gathering.<br><br>

                                The event will showcase the latest innovations and trends in technology, consumables, and printing services, live demonstrations of products, networking, conferencing, and business upskilling for guests at the show.

                            </p>
                        </div>
                        <div class=" px-4 ">
                            <h3 class=" text-primarycolor font-bold mb-4 text-2xl inline-block border-black border-b">
                                Benefits for Exhibitors
                            </h3>

                            <ol class="list-decimal flex flex-col space-y-4">
                                <li data-aos="fade-left" data-aos-duration="2000" class=" bg-gray-100 p-4 rounded-sm">
                                    <strong>Expand Your Market Reach:</strong> Connect with decision-makers from across West Africa.</li>
                                <li data-aos="fade-left" data-aos-duration="3000" class=" bg-gray-100 p-4 rounded-sm">
                                    <strong>Showcase Your Products & Services:</strong> Gain visibility and attract new clients.</li>
                                <li data-aos="fade-left" data-aos-duration="2000" class=" bg-gray-100 p-4 rounded-sm">
                                    <strong>Generate High-Quality Leads:</strong> Meet serious buyers and industry stakeholders.</li>
                                <li data-aos="fade-left" data-aos-duration="1500" class=" bg-gray-100 p-4 rounded-sm">
                                    <strong>Stay Ahead of Industry Trends:</strong> Learn about the latest technologies and innovations.
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

                    <div data-aos="fade-right" data-aos-duration="3000"
                        class=" col-span-1 flex md:justify-center px-4 ">

                        <div>
                            <h3 class=" text-primarycolor text-2xl font-bold mb-4 inline-block ">
                                Who should exhibit?
                            </h3>
                            <ul class=" list-disc flex flex-col space-y-2">
                                <li>Paper Manufacturers & Distributors</li>
                                <li>Printing Press Owners & Commercial Printers</li>
                                <li>Publishing Houses & Media Companies</li>
                                <li>Graphic Designers & Print Buyers</li>
                                <li>Packaging & Labeling Companies</li>
                                <li>Government Agencies & Regulatory Bodies</li>
                                <li>Entrepreneurs & Startups in the Print Industry</li>
                                <li>Textile Printing Companies</li>
                                <li>Branding & Promotional Products Specialists</li>
                            </ul>
                        </div>
                    </div>
                    <div data-aos="fade-left" data-aos-duration="3000" class=" col-span-1 flex justify-end  px-4">

                        <div>
                            <h3 class=" text-primarycolor text-2xl font-bold mb-4 inline-block ">
                                Why you should participate:
                            </h3>
                            <ul class=" list-disc flex flex-col space-y-4">
                                <li>Over 5,000 quality visitors expected in the show</li>
                                <li>Opportunity to showcase your products and build goodwill for your services</li>
                                <li>Meet, demonstrate, and sell to prospective clients under one roof</li>
                                <li>Connect with decision-makers from across West Africa</li>
                                <li>Generate high-quality leads and stay ahead of industry trends</li>
                                <li>Affordable exhibitions for all categories of companies</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END of Who should Exhibit --}}



        {{-- Starting of WHY VISIT --}}
        <section class="min-h-[40vh] py-10 overflow-x-hidden ">
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
                                IPPPEX offers exciting exhibitions, product displays, stakeholder conferences, workshops, and live demonstrations that focus on the latest developments and trends in the paper, printing, publishing, packaging, and graphics industry. Visitors have the opportunity to discover the latest in paper manufacturing, printing technology, publishing tools, and packaging solutions.
                                <br><br>
                                <span class="font-bold"> IPPPEX is an excellent platform to network and build relationships with potential customers and partners, with exclusive product launches and business matchmaking opportunities. </span>
                            </p>
                        </div>
                        <div class=" px-4 ">
                            <h3 class=" text-primarycolor text-2xl font-bold mb-4 inline-block border-black border-b">
                                Benefits for Attendees
                            </h3>

                            <ol class="list-decimal flex flex-col space-y-2">
                                <li class=""><span class="font-bold">Exhibitions & Product Displays:</span> Discover the latest in paper manufacturing, printing technology, publishing tools, and packaging solutions
                                </li>
                                <li class=""> <span class=" font-bold">Stakeholders Conferences & Workshops:</span> Gain insights from global experts on market trends, sustainability, and digital transformation in the industry</li>

                                <li class=""><span class="font-bold">Live Demonstrations:</span> Witness cutting-edge equipment and software in action</li>

                                <li class=""> <span class="font-bold">Networking & Business Matchmaking:</span> Connect with industry leaders, suppliers, and potential business partners
                                </li>
                                <li class=""> <span class="font-bold">Exclusive Product Launches:</span> Be the first to explore innovative solutions reshaping the industry
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
                                <li>Converters, Corrugated Box Manufacturers</li>
                                <li>Production / Quality Control Managers from FMCG and Retail sectors</li>
                                <li>Government Agencies</li>
                                <li>Hotels</li>
                                <li>Corporate organizations</li>
                                <li>Manufacturers, Suppliers & Distributors</li>
                                <li>Print Professionals & Industry Stakeholders</li>
                            </ul>
                        </div>
                    </div>
                    <div class=" col-span-1 flex justify-end w-full">

                        <div data-aos="fade-left" data-aos-duration="3000">

                            <ul class=" list-disc flex flex-col space-y-4">
                                <li>Textile Machinery Manufacturers, Importers, and Exporters</li>
                                <li>Dyestuffs and Ink Manufacturers and Sellers</li>
                                <li>Textile Companies' Sourcing and Purchasing Authorities</li>
                                <li>Textile Associations</li>
                                <li>Research and Development Facilities</li>
                                <li>Universities</li>
                                <li>Industry Consultants & Advisors</li>
                                <li>Technology Solution Providers</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>{{-- END of Who should Exhibit --}}




        {{-- Start GALLRRY --}}
        <section id="gallary" class="min-h-[40vh] py-20 overflow-x-hidden bg-[rgba(240,214,215,0.25)]  ">
            <div data-aos="fade-in" data-aos-duration="3000" class="container mx-auto md:px-24 px-4 max-w-[1140px]">

                <div class=" md:pb-10 ">
                    <div class="  text-[14px] font-bold italic text-primarycolor">
                        GALLERY:
                    </div>
                    <div class=" text-4xl">
                        Memories of previous events
                    </div>
                </div>

            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="flex items-center">
                            <img class="rounded-xl" src="storage/img/gallery/1.jpg" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img class="rounded-xl" src="storage/img/gallery/2.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img class="rounded-xl" src="storage/img/gallery/3.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img class="rounded-xl" src="storage/img/gallery/4.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img class="rounded-xl" src="storage/img/gallery/5.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img class="rounded-xl" src="storage/img/gallery/6.jpg" />
                    </div>
                </div>
                <div class="flex justify-center mt-20 space-x-10">
                    <div class="swiper-button-prev">
                        <i class="fa-regular text-xl fa-chevron-left text"></i>
                    </div>
                    <div class="swiper-button-next">
                        <i class="fa-regular text-xl fa-chevron-right text"></i>
                    </div>

                </div>
            </div>


        </section>
        {{-- End GALLRRY --}}

        {{-- Starting TEAM --}}
        <section class="min-h-[40vh] team py-10 overflow-x-hidden ">
            <div class="container mx-auto md:px-24 px-4 max-w-[1140px]">
                <div class=" flex justify-center md:pb-10 pb-10">
                    <div class="text-4xl">
                        THE TEAM
                    </div>
                </div>

                <div class=" overflow-hidden flex space-y-4 md:space-y-10 flex-col items-center justify-center">


                    <div class=" w-full space-x-2 flex justify-center items-center  md:space-x-20">
                        <div data-aos="fade-up" data-aos-duration="1500"
                            class=" text-center flex justify-center items-center flex-col">
                            <div class=" relative border w-40 md:w-60 rounded-md overflow-hidden">
                                <img src="storage/img/team/md.jpg" alt="">
                            </div>
                            <div class="w-full flex justify-center flex-col items-center mt-4">
                                <div class="md:text-2xl text-xl font-bold ">Tunde Obokhai</div>
                                <div>President/MD</div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="3000"
                            class=" text-center flex justify-center items-center flex-col">
                            <div class=" relative border w-40 md:w-60 rounded-md overflow-hidden">
                                <img src="storage/img/team/vp.png" alt="">
                            </div>
                            <div class="w-full flex justify-center flex-col items-center mt-4">
                                <div class="text-2xl font-bold ">Matilda Obokhai</div>
                                <div>Vice President</div>
                            </div>
                        </div>
                    </div>
                    <div class=" flex justify-center items-center  md:space-x-20">

                        <div data-aos="fade-up" data-aos-duration="2000"
                            class=" text-center flex justify-center items-center flex-col">
                            <div class=" relative border w-40 md:w-60 rounded-md overflow-hidden">
                                <img src="storage/img/precious.jpg" alt="">
                            </div>
                            <div class="w-full flex justify-center flex-wrap flex-col text-center items-center mt-4">
                                <div class="md:text-2xl text-xl font-bold flex-wrap ">MBA PRECIOUS</div>
                                <div>MEDIA MANAGER</div>
                                <div class=" flex space-x-4 p-2">
                                    <a href="tel:+2348064885338" class=" flex justify-center items-center"> <i
                                            class="fa-light fa-phone"></i></a>
                                    <a href="mailto:norah@dcsintegratedmedia.com.ng"
                                        class=" flex justify-center items-center"> <i
                                            class="fa-light fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="3000"
                            class=" text-center flex justify-center items-center flex-col">
                            <div class=" relative border w-40 md:w-60 rounded-md overflow-hidden">
                                <img src="storage/img/team/nora.png" alt="">
                            </div>
                            <div class="w-full flex justify-center flex-col items-center mt-4">
                                <div class="md:text-2xl text-xl font-bold ">Norah Okpara</div>
                                <div>Business Manager</div>
                                <div class=" text-transparent md:hidden">.</div>
                                <div class=" flex space-x-4 p-2">
                                    <a href="tel:+2348064885338" class=" flex justify-center items-center"> <i
                                            class="fa-light fa-phone"></i></a>
                                    <a href="mailto:norah@dcsintegratedmedia.com.ng"
                                        class=" flex justify-center items-center"> <i
                                            class="fa-light fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" text-center flex justify-center items-center flex-col">
                        <div class=" relative border w-40 md:w-60 rounded-md overflow-hidden">
                            <img src="storage/img/chika.jpg" alt="">
                        </div>
                        <div data-aos="fade-up" data-aos-duration="3000"
                            class="w-full flex justify-center flex-col items-center mt-4">
                            <div class="md:text-2xl text-xl font-bold ">CHIKA OBI</div>
                            <div>PROJECT CORDINATOR</div>
                            <div class=" flex space-x-4 p-2">
                                <a href="tel:+2348064885338" class=" flex justify-center items-center"> <i
                                        class="fa-light fa-phone"></i></a>
                                <a href="mailto:norah@dcsintegratedmedia.com.ng"
                                    class=" flex justify-center items-center"> <i
                                        class="fa-light fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        {{-- ENDING TEAM --}}

        {{-- Start Media --}}
        <section class="min-h-[40vh] py-20 overflow-x-hidden bg-[rgba(240,214,215,0.25)] px-4 md:px-24">
            <div class="container mx-auto max-w-[1140px] ">

                <div data-aos="fade-right" data-aos-duration="3000" class=" md:pb-10 ">

                    <div class=" text-5xl md:text-6xl">
                        Media & News
                    </div>
                    <small class="text-sm">For Personal Images/Videos request; contact <a class="text-primarycolor"
                            href="tel:+234 816 976 7741">Olamilekan </a></small>
                </div>

            </div>
            <div class="swiper mySwiper mt-6">
                <div class="swiper-wrapper ">
                    <a href="{{ route('news') }}" class="swiper-slide border news shadow-md rounded-md">
                        <div class="md:px-8 px-4 text-left py-10">
                            <div class="text-white inline-block tag bg-secondarycolor text-xl py-10 p-4"
                                style="margin-bottom:40px !important">
                                News
                            </div>
                            <h2 class=" text-4xl " style="  ">Join us for cutting-edge technology demos...</h2>
                            <p class=" text-sm py-4 hidden">The Abuja IPPPEX will showcase the latest innovations and
                                trends in technology, consumables, and printing services, live demonstrations of
                                products, networking, conferencing and business upskilling for guests at the show </p>
                        </div>
                    </a>
                    <div class="swiper-slide relative overflow-hidden h-[400px]">
                        <div class="text-white inline-block tag absolute z-50 top-0 right-0  bg-secondarycolor text-xl py-10 p-4"
                            style="margin-bottom:40px !important">
                            Media
                        </div>
                        <div class=" relative">

                            <iframe width="100%" height="350"
                                style="display:block !important; position:relative !important"
                                src="https://www.youtube.com/embed/Y0JiFtrtSZY" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="swiper-slide relative overflow-hidden h-[400px]">
                        <div class="text-white inline-block tag absolute z-50 top-0 right-0  bg-secondarycolor text-xl py-10 p-4"
                            style="margin-bottom:40px !important">
                            Media
                        </div>
                        <div class=" relative">

                            <iframe width="100%" height="350"
                                style="display:block !important; position:relative !important"
                                src="https://www.youtube.com/embed/oy-P7Z-_3io" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="swiper-slide relative overflow-hidden h-[400px]">
                        <div class="text-white inline-block tag absolute z-50 top-0 right-0  bg-secondarycolor text-xl py-10 p-4"
                            style="margin-bottom:40px !important">
                            Media
                        </div>
                        <div class=" relative">

                            <iframe width="100%" height="350"
                                style="display:block !important; position:relative !important"
                                src="https://www.youtube.com/embed/T2zafsRXq0M" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="swiper-slide relative overflow-hidden h-[400px]">
                        <div class="text-white inline-block tag absolute z-50 top-0 right-0  bg-secondarycolor text-xl py-10 p-4"
                            style="margin-bottom:40px !important">
                            Media
                        </div>
                        <div class=" relative">

                            <iframe width="100%" height="350"
                                style="display:block !important; position:relative !important"
                                src="https://www.youtube.com/embed/a0aDRyTKIZk" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="swiper-slide relative overflow-hidden h-[400px]">
                        <div class="text-white inline-block tag absolute z-50 top-0 right-0  bg-secondarycolor text-xl py-10 p-4"
                            style="margin-bottom:40px !important">
                            Media
                        </div>
                        <div class=" relative">

                            <iframe width="100%" height="350"
                                style="display:block !important; position:relative !important"
                                src="https://www.youtube.com/embed/MupNydFULNU" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="swiper-slide relative overflow-hidden h-[400px]">
                        <div class="text-white inline-block tag absolute z-50 top-0 right-0  bg-secondarycolor text-xl py-10 p-4"
                            style="margin-bottom:40px !important">
                            Media
                        </div>
                        <div class=" relative">

                            <iframe width="100%" height="350"
                                style="display:block !important; position:relative !important"
                                src="https://www.youtube.com/embed/JpyvyXLWFgo" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="swiper-slide relative overflow-hidden h-[400px]">
                        <div class="text-white inline-block tag absolute z-50 top-0 right-0  bg-secondarycolor text-xl py-10 p-4"
                            style="margin-bottom:40px !important">
                            Media
                        </div>
                        <div class=" relative">

                            <iframe width="100%" height="350"
                                style="display:block !important; position:relative !important"
                                src="https://www.youtube.com/embed/tTb-LnMzBIg" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mt-20 space-x-10">
                    <div class="swiper-button-prev">
                        <i class="fa-regular text-xl fa-chevron-left text"></i>
                    </div>
                    <div class="swiper-button-next">
                        <i class="fa-regular text-xl fa-chevron-right text"></i>
                    </div>

                </div>
            </div>


        </section>
        {{-- End Media --}}

        {{-- Logos --}}
        <section class="min-h-[40vh] py-20 overflow-x-hidden ">
            <div class="container mx-auto md:px-24 px-4 max-w-[1140px]">
                <div data-aos="zoom-in" data-aos-duration="3000" class=" flex flex-col items-center justify-center">
                    <h3 class=" uppercase text-5xl    font-extralight text-primarycolor  inline-block ">
                        Organizer
                    </h3>
                    <div class=" w-40 mt-8 flex justify-center">
                        <img class=" w-20" src="/storage/img/logos/organizers.jpg" alt="">
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="3000" class=" mt-20 flex flex-col items-center justify-center">
                    <h3 class=" uppercase text-4xl md:text-5xl text-center   font-extralight  inline-block ">
                        PARTNERS
                    </h3>
                    <div class="  mt-4  flex-wrap space-x-8 flex justify-center">
                       <span class=" text-4xl font-bold">Printap</span>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="3000" class=" mt-20 flex flex-col items-center justify-center">
                    <h3 class=" uppercase text-4xl md:text-5xl text-center   font-extralight  inline-block ">
                        Past collocating events
                    </h3>
                    <div class="  mt-4  flex-wrap space-x-8 flex justify-center">
                        <div class=" border w-40">
                            <img class=" " src="/storage/img/logos/1.png" alt="">
                        </div>
                        <div class=" border w-40">
                            <img class=" " src="/storage/img/logos/2.jpg" alt="">
                        </div>
                        <div class=" border w-40 mt-4 md:mt-0">
                            <img class=" " src="/storage/img/logos/3.png" alt="">
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="3000" class=" mt-20 flex flex-col items-center justify-center">
                    <h3 class=" uppercase text-4xl md:text-5xl text-center   font-extralight  inline-block ">
                        Media Partners
                    </h3>
                    <div class="  mt-4  flex-wrap space-x-8 flex justify-center">
                        <div class=" border w-40">
                            <img class=" " src="/storage/img/logos/4.png" alt="">
                        </div>
                        <div class=" border w-40">
                            <img class=" " src="/storage/img/logos/5.jpg" alt="">
                        </div>
                        <div class=" border w-40 mt-4 md:mt-0">
                            <img class=" " src="/storage/img/logos/6.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="2000" class=" mt-20 flex flex-col items-center justify-center">
                    <h3 class=" uppercase text-4xl md:text-5xl text-center   font-extralight  inline-block ">
                        Official Printer
                    </h3>
                    <div class="  mt-4  flex-wrap space-x-8 flex justify-center">
                        <div class=" border w-40 p-4">
                            <img class=" " src="/storage/img/logos/7.jpg" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </section>{{-- ELogos --}}

        {{-- Start Footer --}}
        <section class=" border-t py-20 overflow-x-hidden px-4 md:px-24">
            <div class="container mx-auto max-w-[1140px] ">
                @include('layouts.footer')
            </div>
        </section>
        {{-- End Footer --}}


    </div>
</x-guest-layout>
