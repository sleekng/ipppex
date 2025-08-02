<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <div id="dashboard-toggler" class=" cursor-pointer  ">
                <i id="dashboard-toggleIcon" class="fa-thin text-4xl fa-bars"></i>
            </div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Visitors') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-4">
        <div class=" mx-auto  lg:px-8">
            <div
                class=" w-full flex flex-col md:flex-row md:items-center justify-center md:justify-between space-y-4 md:space-y-0 md:space-x-8">
                <div class=" flex space-x-2 items-center">
                    <span class=" font-bold md:text-xl whitespace-nowrap">Total Visitors</span>
                    <span
                        class="  md:py-2 w-10 h-10  flex justify-center items-center  rounded-full px-2 py-1 bg-[#CCDAFF]">
                        <span class="text-[#477BFF] text-[11px] ">{{ $length }}</span>
                    </span>
                </div>
                <form action="{{ route('search-expousers') }}" method="POST"
                    class="w-full space-x-4 flex items-center justify-end">
                    @csrf
                    <x-input-search class=" w-full md:w-[400px] rounded-full " name="query" for="search"
                        placeholder="Search for Visitors" value="">
                        <x-slot name="icon">
                            <i class="fa-light text-xl fa-magnifying-glass"></i>
                        </x-slot>
                    </x-input-search>
                    <button>Search</button>
                </form>

            </div>
            <div class="mt-10 {{ $length == 0 ? 'hidden' : 'block' }}">
                <form action="{{ route('deleteselected') }}" method="POST" class="flex flex-col">
                    
                    <div class="my-4 flex justify-between md:justify-end md:space-x-8 items-center">
                        <a href="{{ route('visitors.excel') }}" class=" flex items-center space-x-2 text-orange-500 font-bold border py-2 px-8 rounded-lg">
                            <i class="fa-sharp text-4xl fa-solid fa-file-excel"></i>

                        
                        </a>
                        <x-button id="send-messageModel">
                            Delete selected
                        </x-button>
                    </div>
                    @csrf
                    @method('DELETE')
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle border-b">
                            <div class="overflow-hidden">
                                <table class="min-w-full divide-y divide-gray-200 ">
                                    <thead class="bg-[#D2D2D240]">

                                        <tr>
                                            <th scope="col" class="px-3 py-3  flex items-center">
                                                <input type="checkbox" id="checkAll"
                                                    class="text-xs text-primarycolor rounded-sm" />
                                                <span
                                                    class=" whitespace-nowrap px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Visitors
                                                    Name</span>
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                Email</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                Phone Number</th>
                                            <th scope="col"
                                                class="px-6 whitespace-nowrap py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                Date Applied</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y  divide-gray-200 ">
                                        @foreach ($applicants as $applicant)
                                            <!-- Display your post content here -->
                                            <tr>

                                                <td class="px-3 flex items-center  py-4">
                                                    <input name="selectedItems[]" value="{{ $applicant->id }}"
                                                        class="text-xs text-primarycolor rounded-sm " type="checkbox" />
                                                    <span
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 ">
                                                        {{ $applicant->name }}</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">
                                                    {{ $applicant->email }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">
                                                    {{ $applicant->phone_number }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    {{ $applicant->created_at }}</td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex items-center space-x-4">


                                                    <a data-modal="#modal{{ $applicant->id }}"
                                                        class="modal__trigger  ">
                                                        <i
                                                            class="fa-light fa-eye text-blue-500 hover:text-blue-700"></i>
                                                    </a>

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>

                    <div class=" my-10">
                        {{ $applicants->links() }}
                    </div>
                
                </form>
            </div>
            <div class="{{ $length >= 1 ? 'hidden' : 'block' }} flex justify-center mt-4 border-t py-10 ">
                <span class=" text-gray-300">No registered user</span>
            </div>
        </div>
    </div>


    <div class=" articleHover-modal fixed w-full  hidden p-4 h-full top-0 left-0  z-50"
        style="backdrop-filter: blur(3px);  background-color: rgba(10, 5, 63, 0.5);">

    </div>

    <!---MODAL--->
    @foreach ($applicants as $applicant)
        <div id="modal{{ $applicant->id }}" class="modal modal__bg " role="dialog" aria-hidden="true">

            <div class="modal__dialog   lg:min-w-[748px] lg:p-5  p-4">

                <div class="modal__content relative   overflow-y-auto max-h-[90vh] lg:max-h-[80vh] rounded-lg">

                    <div class="md:px-8  ">

                        <div class="md:min-h-[60vh]   p-4 w-full white">
                            <div>
                                <h1>IPPEX/<span class="font-bold">{{ $applicant->tagnumber }}</span></h1>
                            </div>
                            <form action="{{ route('register.destroy', $applicant->id) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')

                                <div class="mt-4">
                                    <x-input name="name" class="bg-transparent bg-gray-200" disabled for="name"
                                        value="{{ $applicant->name }}" placeholder="Enter your full name"
                                        label="Full Name">
                                        <x-slot name="icon">
                                            <i class="fa-thin fa-user"></i>
                                        </x-slot>
                                    </x-input>

                                    @error('name')
                                        <div class="text-[10px] text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-4 w-full">
                                    <x-input class=" w-full bg-transparent bg-gray-200" disabled name="email"
                                        for="email" value="{{ $applicant->email }}"
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
                                    <x-input class=" w-full bg-transparent bg-gray-200" disabled name="phone_number"
                                        for="phone_number" value="{{ $applicant->phone_number }}"
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
                                    <x-input value="{{ $applicant->organization_company }}"
                                        class=" w-full bg-transparent bg-gray-200" disabled
                                        name="organization_company" for="organization_company"
                                        placeholder="Enter your Organisation / Company (if any)"
                                        label="Organisation (if any)">
                                        <x-slot name="icon">
                                            <i class="fa-thin fa-buildings"></i>
                                        </x-slot>
                                    </x-input>
                                    @error('organization_company')
                                        <div class="text-[10px] text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-4 w-full">
                                    <x-input value="{{ $applicant->role }}"
                                        class=" w-full bg-transparent bg-gray-200" disabled name="role"
                                        for="Role" placeholder="Enter your company role or position"
                                        label="Role">
                                        <x-slot name="icon">
                                            <i class="fa-light fa-sitemap"></i>
                                        </x-slot>
                                    </x-input>
                                    @error('role')
                                        <div class="text-[10px] text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-4 w-full">
                                    <x-label>
                                        {{ $applicant->exhibitor }}
                                    </x-label>

                                </div>

                                <div class=" w-full mt-4">

                                    <x-label class="mb-2">
                                        How did you hear about us? : {{ $applicant->ref }}
                                    </x-label>

                                </div>

                                <div class=" w-full mt-4">
                                    <x-label class="mb-2">
                                        Is this your first time at NIPEX/IPPPEX? : {{ $applicant->first_time }}
                                    </x-label>
                                   
                                    
                                </div>
            
            
                                @if ($applicant->attend_year)
                                
                              
                                <div id="attendYear" class="mt-4 w-full " >
                                 
                                    <label for="attend_year" class=" font-bold">Year attended</label>
                                    <div class="bg-transparent mt-2  focus-visible:outline-none  w-full border-[#D9D2D2] rounded-[12px] ">
                                        @foreach (json_decode($applicant->attend_year) as $value)
                                            {{ $value }}<br>
                                        @endforeach
                                    </div>
                                   
                                </div>
                                    
                                @endif
            

                                <div class=" mt-4" >
                                    <div type="submit" class="my-4 flex justify-end">
                                        <x-button id="send-messageModel">
                                            Delete 
                                        </x-button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>


                    <!-- modal close button -->
                    <span href="" class="modal__close demo-close">
                        <svg class="" viewBox="0 0 24 24">
                            <path
                                d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z" />
                            <path d="M0 0h24v24h-24z" fill="none" />
                        </svg>
                    </span>



                </div>
            </div>
        </div>
    @endforeach

    <div id="model"
        class=" z-50 fixed px-4 md:px-12  hidden items-center justify-center top-0 left-0 right-0 bottom-0 bg-[#04040440]">
        <div class=" rounded-xl w-[865px] h-['523px'] bg-white "
            style="box-shadow: 4px 4px 20px 0px #00000026;
       ">

            <div class="flex">

                <div class=" hidden px-4 md:flex justify-center flex-col items-center">
                    <div class="my-4">
                        10 Selected Applicants
                    </div>
                    <div>
                        <ul class=" h-[500px] overflow-y-auto overflow-x-hidden">
                            <li class="px-3 flex items-center border-b">
                                <input class="text-xs text-primarycolor rounded-sm " type="checkbox" /> <span
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 ">Matthew
                                    Emmanuel</span>
                            </li>
                            <li class="px-3 flex items-center border-b">
                                <input class="text-xs text-primarycolor rounded-sm " type="checkbox" /> <span
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 ">Matthew
                                    Emmanuel</span>
                            </li>

                        </ul>
                    </div>
                </div>
                <div
                    class=" md:h-auto h-[80vh] px-4 md:px-12 border-l w-full flex items-center justify-center relative">
                    <div id="closeModel" class=" absolute top-4 right-4 cursor-pointer">
                        <i class="fa-thin text-4xl fa-xmark"></i>
                    </div>
                    <div>
                        <div>
                            <x-text-area-input class="w-[400px] h-[200px]" name="message" value=''
                                placeholder="Enter your message" label="Message">
                                <x-slot name="icon">
                                    <i class="fa-thin fa-envelope-open-text"></i>
                                </x-slot>
                            </x-text-area-input>
                        </div>
                        <div class=" flex justify-center mt-4">
                            <x-button class="p-2">Send messages to <span
                                    class="bg-white h-3 w-3 rounded-full p-1">10</span></x-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
