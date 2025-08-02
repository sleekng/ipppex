<div class="sidebar w-full shadow-lg border  px-4 md:px-8  h-screen   md:py-20 mx-auto flex-col flex justify-start items-center">

    <div  class=" md:hidden absolute top-4 right-4 cursor-pointer  ">
        <i id="dashboard-toggleIconside" class="fa-thin text-4xl fa-times"></i>
    </div>
    <div class="flex items-center relative space-x-4 mt-20 w-full">
        <div class=" flex items-center justify-center w-20 bg-[#D2D2D2] h-20 rounded-full">
            <span class="font-bold">Admin</span>
        </div>
        <div class="flex flex-col  justify-center">
            <span class="font-bold">{{{ Auth::user()->name }}}</span>
            <span class=" text-gray-400">Administrator</span>
        </div>

    </div>
    

    
    <div class=" mt-10 flex flex-col space-y-4 w-full">
        <a href="{{ route('dashboard') }}" class=" flex space-x-8 items-center {{ request()->routeIs('dashboard') ? 'bg-[#F0D6D7] font-bold' : '' }}  px-8 py-2 rounded-full">
            <i class="fa-light fa-browser"></i><span class=" ">Visitors</span>
        </a>
        <a href="{{ route('exhibitors') }}" class=" {{ request()->routeIs('exhibitors') ? 'bg-[#F0D6D7] font-bold' : '' }} flex space-x-8 items-center px-8 py-2 rounded-full">
            <i class="fa-sharp fa-light fa-rectangle-list"></i><span>Exhibitors</span>
         </a>
        <a href="{{ route('admin') }}" class=" {{ request()->routeIs('admin') ? 'bg-[#F0D6D7] font-bold' : '' }} flex space-x-8 items-center px-8 py-2 rounded-full">
            <i class="fa-light fa-gear"></i> <span>Add Admin</span>
        </a>
        <a href="{{ route('newslettersubscribers.index') }}" class=" {{ request()->routeIs('newslettersubscribers.index') ? 'bg-[#F0D6D7] font-bold' : '' }} flex space-x-8 items-center px-8 py-2 rounded-full">
            <i class="fa-light fa-gear"></i> <span>Newsletters</span>
        </a>
        <a href="{{ route('brochure') }}" class=" {{ request()->routeIs('brochure') ? 'bg-[#F0D6D7] font-bold' : '' }} flex space-x-8 items-center px-8 py-2 rounded-full">
            <i class="fa-light fa-gear"></i> <span>Brochure</span>
        </a>
        <a href="{{ route('exhibitorslogo') }}" class=" {{ request()->routeIs('exhibitorslogo') ? 'bg-[#F0D6D7] font-bold' : '' }} flex space-x-8 items-center px-8 py-2 rounded-full">
            <i class="fa-light fa-gear"></i> <span>Exhibitors Logo</span>
        </a>
        <a href="{{ route('message') }}" class=" {{ request()->routeIs('message') ? 'bg-[#F0D6D7] font-bold' : '' }} space-x-8 items-center px-8 py-2 rounded-full hidden">
            <i class="fa-light fa-message"></i> <span>Message</span>
        </a>

       

        <a  class=" uflex space-x-8 items-center px-8 py-2 rounded-full">
     
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <i class="fa-light fa-arrow-right-from-bracket"></i>
                <button>Logout</button>
            </form>
        </a>
    </div>

</div>