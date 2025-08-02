<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <div id="dashboard-toggler" class=" cursor-pointer  ">
                <i id="dashboard-toggleIcon" class="fa-thin text-4xl fa-bars"></i>
            </div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Update Exhibitors Logo') }}
            </h2>
        </div>
    </x-slot>
    <div class="py-4 grid gap-10 md:grid-cols-2 grid-cols-1">
        <div class=" border  p-10 md:py-20 rounded-md">
            <form action="{{ route('exhibitorslogo.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mt-4">
                    <label for="name">Exhibitor name</label>
                    <input type="text"
                        class="mt-2 focus-visible:outline-none border w-full border-[#D9D2D2] rounded-[12px] h-[48px] bg-transparent"
                        name="name" placeholder="Enter Exhibitors name">
                    @error('name')
                        <div class="text-[10px] text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mt-4">
                    <input type="file" name="logo">
                    @error('logo')
                        <div class="text-[10px] text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mt-4 flex justify-end">
                    <x-button type="submit">Upload Logo</x-button>

                </div>
            </form>
        </div>
        <div class=" border  p-10 md:py-20 rounded-md">
            <h2 class=" font-bold text-2xl">Exhibitors Logo</h2>
            @if (count($exhibitorsList) > 0)
                <ul class=" max-h-screen overflow-y-auto">
                    @foreach ($exhibitorsList as $item)
                        <div class=" shadow flex items-center justify-between space-x-8 py-4 border px-10 ">
                            <li>
                                <a href="storage/exhibitorsLogo/{{ $item->logo }}">
                                    <div style=" background:url('storage/exhibitorsLogo/'{{ $item->logo }}')">
                                        <img class=" w-16" src="storage/exhibitorsLogo/{{ $item->logo }}"
                                            alt=" work">
                                    </div>
                                </a>
                            </li>
                            <span> {{ $item->name }} </span>
                            <form action="{{ route('exhibitorslogo.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class=" text-red-700"
                                    onclick="return confirm('Are you sure you want to delete this PDF file?')"><i
                                        class="fa-light text-red-600 fa-trash"></i></button>
                            </form>
                        </div>
                        
                    @endforeach
                </ul>
            @else
                <p>No Exhibitors logo uploaded yet.</p>
            @endif
        </div>



    </div>



</x-app-layout>
