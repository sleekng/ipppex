<nav class="py-4 navbar fixed w-full z-50">
    <div class="container mx-auto md:px-24">
        <div class=" md:flex md:justify-between md:items-center">
            <div class=" flex justify-between relative z-50 items-center px-4">
                <a href="{{ route('home') }}"><img class="logo" src="storage/img/logo-header-white.png" alt=""></a>
                <div id="navbarToggle" class="md:hidden cursor-pointer  .toggle-nav flex justify-center items-center">
                    <i id="toggleIcon" class="fa-sharp  toggleIcon text-white text-4xl fa-light fa-bars"></i>
             
                </div>
            </div>
            <div id="navMenu" class=" navigate-mobile space-x-4  md:flex md:justify-between md:items-center">
                <ul class=" md:w-2/5 md:flex md:space-x-8 md:justify-center">
                    <x-nav-link-primary class="toggleIconall links text-white " :active="request()->routeIs('home')" href="{{ route('home') }}">Home</x-nav-link-primary>
                   
                    <x-nav-link-primary class="toggleIconall links text-white " :active="request()->routeIs('news')"
                        href="{{ route('news') }}">News</x-nav-link-primary>
                    <x-nav-link-primary class="toggleIconall links text-white " :active="request()->routeIs('gallery')"
                        href="{{ route('gallery') }}">Gallery</x-nav-link-primary>
                    <x-nav-link-primary class="toggleIconall whitespace-nowrap links text-white " :active="request()->routeIs('conference.index')"
                        href="{{ route('conference.index') }}">Conference Brochure</x-nav-link-primary>
                        <x-nav-link-primary class="toggleIconall whitespace-nowrap links text-white " :active="request()->routeIs('exhibitor_list.index')"
                            href="{{ route('exhibitor_list.index') }}">Exhibitor List 2023</x-nav-link-primary>
                </ul>

               <div class="flex space-x-4">
                <div>
                    <a href="{{ route('register.exhibitor') }}">
                    <x-button class=" register-btn">
                        Exhibitors
                    </x-button></a>
                </div>
                <div>
                    <a href="https://www.showwave.co.za/online/ipppex">
                    <x-button class=" register-btn">
                        Visitors
                    </x-button></a>
                </div>
               </div>
            </div>
        </div>
    </div>
</nav>
