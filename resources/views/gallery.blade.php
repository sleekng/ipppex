<x-reg-layout>

    <x-header>
        GALLERY
    </x-header>

            {{-- Start GALLRRY --}}
            <section id="gallary" class="min-h-[40vh] py-20 overflow-x-hidden bg-[rgba(240,214,215,0.25)]  ">
                <div data-aos="fade-in" data-aos-duration="3000" class="container mx-auto md:px-24 px-4">
    
                    <div class=" md:pb-10 ">
                        <div class="  text-[14px] font-bold italic text-primarycolor">
                            GALLERY:
                        </div>
                        <div class=" text-4xl">
                            Memories of previous events
                        </div>
                    </div>
    
                    <div class="grid md:grid-cols-3 grid-cols-1 gap-4 mt-8">
                        <div class="">
                            <div class="flex items-center">
                                <img class="rounded-xl" src="storage/img/gallery/1.jpg" />
                            </div>
                        </div>
                        <div class="">
                            <img class="rounded-xl" src="storage/img/gallery/2.jpg" />
                        </div>
                        <div class="">
                            <img class="rounded-xl" src="storage/img/gallery/3.jpg" />
                        </div>
                        <div class="">
                            <img class="rounded-xl" src="storage/img/gallery/4.jpg" />
                        </div>
                        <div class="">
                            <img class="rounded-xl" src="storage/img/gallery/5.jpg" />
                        </div>
                        <div class="">
                            <img class="rounded-xl" src="storage/img/gallery/6.jpg" />
                        </div>
                    </div>
             
                </div>
              
               
    
    
            </section>
            {{-- End GALLRRY --}}
  
    
              {{-- Start Footer --}}
              <section class=" border-t py-20 overflow-x-hidden px-4 md:px-24">
                <div class="container mx-auto max-w-[1140px] ">
                    @include('layouts.footer')
                </div>
            </section>
            {{-- End Footer --}}

</x-reg-layout>
