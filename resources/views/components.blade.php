<div >
    <x-guest-layout>
        <div class="container flex justify-center">
            <div>


                
                
                <x-application-logo class="w-20" /><br><br>
                <button class="custom-btn btn-14">Read More</button>
                <x-button>
                    Register For Expo
                </x-button><br><br>

                <x-input name="name" for="name" placeholder="Enter your full name" value="" label="Full Name">
                    <x-slot name="icon">
                        <i class="fa-thin fa-user"></i>
                    </x-slot>
                </x-input><br><br>

                <x-input name="email" label="Email" placeholder="Enter your email" value="">
                    <x-slot name="icon">
                        <i class="fa-light fa-envelope"></i>
                    </x-slot>
                </x-input>

                <x-checkbox name="exhibitor" value="" label="I would like to be an exhibitor"/> <br><br>

                <x-button>
                    Wify
                </x-button>


                <x-radio name="gender" value="male" label="Male" /><br><br>
                <x-radio name="gender" value="female" label="Female" /><br><br>
                <x-radio name="gender" value="other" label="Other" /><br><br>

                <div class="text-white">
                </div>
                <x-label>
                    Label Text
                </x-label><br><br>
                <x-nav-link-primary class=" " :active="request()->routeIs('components')" href="google.com">Nav Link Text</x-nav-link-primary><br><br>
    
               <div class="my-40">
                <x-text-area-input name="message" value='' placeholder="Enter your message" label="Message (please be as descriptive as possible)">
                    <x-slot name="icon">
                        <i class="fa-thin fa-envelope-open-text"></i>
                    </x-slot>
                </x-text-area-input>
    
               </div>
            
    
    
    
    
    
          {{--       <x-select name="" id="">
                    Select Option 1
                    Select Option 2
                    </x-select><br><br>
                    <x-textarea></x-textarea><br><br>
                    <x-checkbox label=""></x-checkbox><br><br>
                    <x-radio label=""></x-radio><br><br>
                    <x-switch label=""></x-switch><br><br>
                    <x-slider label=""></x-slider><br><br>
                    <x-progress value=50 max=75></x-progress><br><
                    br>
                    <x-table :headers="$headers"></x-table><br><br>
                    <x-modal title="Modal Title"><p>Content of the modal.</p></x
                        -modal><br><br>
                        <x-alert type="success">Success Alert</x-alert><br><br>
                        <x-alert type="error">Error Alert</x-alert><br><br>
                        <x-alert type="warning">Warning Alert</x-alert><br><br>
                        <x-alert type="info">Info Alert</x-alert><br><br>
                        <x-badge color="red">Badge Red</x-badge><br><br>
                        <x-badge color="green">Badge Green</x-badge><br><br>
                        <x-badge color="blue">Badge Blue</x-badge><br><br>
                        <x-badge color="yellow">Badge Yellow</x-badge><br><br>
                        <x-badge color="indigo">Badge Indigo</x-badge><br><br
                        ><a
                        target="_blank"
                        rel="noopener noreferrer"
                        >https://github.com/michaeldyrynda/laravel-blade-components
                        </a
                        ><br /> --}}
                 
            </div>
        </div>
    </x-guest-layout>
</div>