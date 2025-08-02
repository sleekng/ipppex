<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <div id="dashboard-toggler" class=" cursor-pointer  ">
                <i id="dashboard-toggleIcon" class="fa-thin text-4xl fa-bars"></i>
            </div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Newsletter Subscribers') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-4">
        <div class=" mx-auto  lg:px-8">
            <div
            class=" w-full flex flex-col md:flex-row md:items-center justify-center md:justify-between space-y-4 md:space-y-0 md:space-x-8">
            <div class=" flex space-x-2 items-center">
                <span class=" font-bold md:text-xl whitespace-nowrap">Total Newsletter Subscribers</span>
                <span
                    class="  md:py-2 w-10 h-10  flex justify-center items-center  rounded-full px-2 py-1 bg-[#CCDAFF]">
                    <span class="text-[#477BFF] text-[11px] ">{{ $length }}</span>
                </span>
            </div>

        </div>
            <div class="mt-10 {{ $length == 0 ? 'hidden' : 'block' }}">
                <form action="{{ route('newsletter-subscribers') }}" method="POST" class="flex flex-col">
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
                                            <th scope="col" class="px-3 py-3  space-x-4 flex items-center">
                                                <input type="checkbox" id="checkAll"
                                                    class="text-xs text-primarycolor rounded-sm" />
                                               
                                               <span> Email</span>
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                Date</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y  divide-gray-200 ">
                                        @foreach ($newsletters as $newsletter)
                                            <!-- Display your post content here -->
                                            <tr>

                                                <td class="px-3 flex items-center  py-4">
                                                    <input name="selectedItems[]" value="{{ $newsletter->id }}"
                                                        class="text-xs text-primarycolor rounded-sm " type="checkbox" />
                                                    <span
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 ">
                                                        {{ $newsletter->email }}</span>
                                                </td>
                                             
                                          
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    {{ $newsletter->created_at }}</td>

                                                    <td
                                                    class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex items-center space-x-4">


                                                    <a data-modal="#modal{{ $newsletter->id }}" class="modal__trigger  ">
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
@foreach ($newsletters as $newsletter)
    <div id="modal{{ $newsletter->id }}" class="modal modal__bg " role="dialog" aria-hidden="true">

        <div class="modal__dialog   lg:min-w-[748px] lg:p-5  p-4 w-full">

            <div class="modal__content relative w-full   overflow-y-auto max-h-[90vh] lg:max-h-[80vh] rounded-lg">

                <div class="md:px-8  ">

                    <div class="md:min-h-[60vh]   p-4 w-full white">
                        <div>
                            <h1>Details</h1>
                        </div>
                        <form action="{{ route('newslettersubscribers.destroy', $newsletter->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <div class="mt-4">
                                <x-input name="name" class="bg-transparent bg-gray-200" disabled for="name"
                                    value="{{ $newsletter->email }}" placeholder="Enter your full name"
                                    label="Email">
                                    <x-slot name="icon">
                                        <i class="fa-thin fa-user"></i>
                                    </x-slot>
                                </x-input>

                            </div>
                   
                            <div class="mt-4">
                                <x-input name="Date" class="bg-transparent bg-gray-200" disabled for="name"
                                    value="{{ $newsletter->created_at }}" placeholder="Enter your full name"
                                    label="Date">
                                    <x-slot name="icon">
                                        <i class="fa-thin fa-details"></i>
                                    </x-slot>
                                </x-input>

                            </div>
                   
                            <div class=" mt-4">
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

</x-app-layout>
