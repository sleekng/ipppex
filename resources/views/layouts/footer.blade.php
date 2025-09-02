<div class="pb-20">
    <div class=" mt-8 w-full grid md:grid-cols-2 grid-cols-1 bg-gray-100 md:p-10 py-10 px-4 rounded-xl">
        <h2 class=" text-2xl font-bold">Subscribe to our Newsletter</h2>
        <form action="{{ route('subscribe') }}" method="post">
            @csrf
            <div class=" flex md:flex-row flex-col items-center space-y-4 md:space-y-0 md:space-x-2">
                <input class="focus-visible:outline-none border w-full border-[#D9D2D2] rounded-[12px] h-[48px] bg-transparent" type="email" name="email" placeholder="Enter your email address">
            <x-button type="submit">Subscribe</x-button>
            </div>
            @error('email')
            <div class="text-[10px] text-red-500">{{ $message }}</div>
            @enderror
        </form>
        
    </div>
</div>


<div class="md:grid-cols-2 xl:grid-cols-4 grid-cols-1 grid  gap-x-10 md:gap-y-0 gap-y-10 ">
    <div   class="flex flex-col">
       <a href="/"> <img class="w-40" src="storage/img/logo.png" alt=""></a>
       <div class="font-bold mt-4">
           Contact Us Via
       </div>
       <div class="mt-2 font-bold">
           Phone:
       </div>
       <div class="flex flex-col space-y-2">
           <a href="tel:+2348035457443" class=" text-primarycolor">0803545 7443</a>
           <a href="tel:+234803583793" class=" text-primarycolor">08035837934</a>
           <a href="tel:+2348064885338" class=" text-primarycolor">09069508412</a>
       </div>
       <div class="mt-2 font-bold">
           Email:
       </div>
              <div class="flex flex-col space-y-2">
           <a href="mailto:info@ipppex.com.ng" class=" text-primarycolor">info@ipppex.com.ng</a>

       </div>
              <div class="mt-2 font-bold">
           Address
       </div>
              <div class="flex flex-col space-y-2">
          <span class="text-primarycolor">
              44 Abeokuta Street Anifowoshe-Ikeja Lagos
          </span>

       </div>
       
    </div>
    <div >
        <h3 class=" text-2xl font-bold pb-4 md:pb-10">Useful Links</h3>
        <ul class="flex flex-col space-y-4">
            <li><a   class="hover:text-primarycolor transition-all ease-in-out" href="{{ route('home') }}">Home</a></li>
            <li><a  class=" hover:text-primarycolor transition-all ease-in-out" href="{{ route('news') }}">News</a></li>
            <li><a  class="hover:text-primarycolor transition-all ease-in-out" href="{{ route('gallery') }}">Gallery</a></li>
        </ul>
    </div>
    <div>
        <h3 class=" text-2xl font-bold pb-4 md:pb-10">Legal</h3>
        <ul class="flex flex-col space-y-4">
            <li><a  class="hover:text-primarycolor transition-all ease-in-out" href="#">Privacy Policy</a></li>
            <li><a  class="hover:text-primarycolor transition-all ease-in-out" href="#">Terms & Condition</a></li>
        </ul>
    </div>
    <div class=" w-full">
        <h3 class=" text-2xl font-bold pb-4 md:pb-10">Socials</h3>
        <ul class="flex space-x-8 md:space-x-0 ">
            <li class=" hover:scale-125 transition-all ease-in-out">
                <a href="https://web.facebook.com/ipppexdcsexpo)">
                    <i class="fa-brands text-2xl text-primarycolor hover:text-secondarycolor transition-all fa-facebook-f"></i>
                </a>
            </li>
            <li class=" xl:pl-10 hover:scale-125 transition-all ease-in-out">
                <a href="https://twitter.com/ipppexpo">
                    <i class="fa-brands fa-twitter text-2xl text-primarycolor hover:text-secondarycolor transition-all "></i>
                </a>
            </li>
            <li class=" xl:pl-10 hover:scale-125 transition-all ease-in-out">
                <a href="https://www.instagram.com/ipppexdcs/">
                    <i class="fa-brands text-2xl text-primarycolor hover:text-secondarycolor transition-all fa-instagram"></i>
                </a>
            </li>
            <li class=" xl:pl-10 hover:scale-125 transition-all ease-in-out">
                <a href="http://tiktok.com/@ipppexdcs">
                    <i class="fa-brands text-2xl text-primarycolor hover:text-secondarycolor transition-all fa-tiktok"></i>
                </a>
            </li>
            <li class=" xl:pl-10 hover:scale-125 transition-all ease-in-out">
                <a href="https://www.linkedin.com/in/international-paper-publishing-packaging-printing-expo-787554286/">
                    <i class="fa-brands text-2xl text-primarycolor hover:text-secondarycolor transition-all fa-linkedin-in"></i>
                </a>
            </li>
            <li class=" xl:pl-10 hover:scale-125 transition-all ease-in-out">
                <a href="https://www.youtube.com/channel/UCKbV5lFtcRYf_l8wDZZFtRw">
                    <i class="fa-brands text-2xl text-primarycolor hover:text-secondarycolor transition-all fa-youtube"></i>
                </a>
            </li>
    
        </ul>

    </div>
  
</div>