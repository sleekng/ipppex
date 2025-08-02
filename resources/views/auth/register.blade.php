<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <div id="dashboard-toggler" class=" cursor-pointer  ">
                <i id="dashboard-toggleIcon" class="fa-thin text-4xl fa-bars"></i>
            </div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Register an admin') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-4 grid md:grid-cols-2 grid-cols-1">
        <div class="md:p-12 flex flex-col space-y-4 w-full">
            @foreach ($users as $user )
                
            <div class="flex justify-between items-center border-b p-4" >
                <div class=" flex flex-col  ">
                    <div  class=" w-6/2">{{ $user->name }}</div>
                    <div class=" w-6/12">{{ $user->email }}</div>
                    <div class=" text-[10px] text-orange-500 uppercase">{{ $user->role }}</div>
            </div>
            <div>
                <div
                class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex items-center space-x-4">

                        <form   action="{{ route('admin.destroy', $user->id) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                          
                            <button type="submit" class=" text-red-700" onclick="return confirm('Are you sure you want to delete this PDF file?')"><i class="fa-light text-red-600 fa-trash"></i></button>
                        </form>
            </div>
            </div>
            </div>
            @endforeach
        
        </div>
        <div class=" mx-auto  w-full lg:px-8">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
            <form method="POST" action="{{ route('admin') }}">
                @csrf
    
                <div class="mt-4">
    
                    <x-input name="name" label="Full Name" placeholder="Enter your Name" value="" required>
                        <x-slot name="icon">
                            <i class="fa-light fa-user"></i>
                        </x-slot>
                    </x-input>
                </div>
                <div class="mt-4 relative overflow-hidden">
                    <span class=" absolute w-[20px] flex justify-center px-8 items-center text-[#202020] text-xl h-full"><i class="fa-thin fa-ranking-star"></i></span>
                  <select name="role" id="" class=" focus-visible:outline-none border w-full border-[#D9D2D2] rounded-[12px] pl-14 h-[56px] ">
                    {{-- <option selected disabled>-- Select Role --</option> --}}
                    
                    <option  disabled selected >Select Role</option>
                    <option value="admin" >Admin</option>
                    <option value="user" >User</option>

                  </select>
                </div>
    
                <div class="mt-4">
                    <x-input name="email" label="Email" placeholder="Enter your email" value="" required>
                        <x-slot name="icon">
                            <i class="fa-light fa-envelope"></i>
                        </x-slot>
                    </x-input>
                </div>
                <div class="mt-4">
                    <x-input name="password" type="password" label="Password" placeholder="Enter your Password"
                        value="" required>
                        <x-slot name="icon">
                            <i class="fa-solid fa-lock"></i>
                        </x-slot>
                    </x-input>
                </div>
                <div class="mt-4">
                    <x-input name="password_confirmation" label="Confirm Password" placeholder="" type="password"
                        value="" required>
                        <x-slot name="icon">
                            <i class="fa-solid fa-lock"></i>
                        </x-slot>
                    </x-input>
                </div>
    
                <div class="flex items-center justify-end mt-4">
    
                    <x-button class="ml-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

