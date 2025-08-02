<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
    
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome/css/sharp-light.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome/css/sharp-regular.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome/css/sharp-solid.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;600;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
        <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        


            
        <!-- Scripts -->
        <script src="{{ asset('js/jquery-3.7.0.min.js') }}" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>

                     <!-- Include the Quill library -->
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
        <script src="{{ asset('js/dashboard.js') }}" defer></script>

        

    
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    
    {{--     <style>
            
            .swiper {
          width: 100%;
          padding-top: 50px;
          padding-bottom: 50px;
        }
    
        .swiper-slide {
          background-position: center;
          background-size: cover;
          width: 300px;
          height: 300px;
        }
    
        .swiper-slide img {
          display: block;
          width: 100%;
        }
      </style> --}}
    
    
      <style>
    
       .swiper {
          width: 100%;
          height: 100%;
        }
    
        .swiper-slide {
          text-align: center;
          font-size: 18px;
          background: transparent;
          display: flex;
          justify-content: center;
          align-items: center;
        }
    
        .swiper-slide img {
          display: block;
          width: 100%;
          height: 100%;
          object-fit: cover;
          border-radius: 20px;
        }
      </style>
    </head>
    <body class="font-sans antialiased">
        <div class=" overflow-hidden ">
          
            <div id="dashboard-sidebar" class="fixed  w-[320px]  z-50 bg-white ">
                @include('layouts.sidebar')
            </div>
          

           <div id="dashboard-body" class=" inline-block float-right relative w-full    px-4">
             <!-- Page Heading -->
             <header>
                <div class=" mx-auto sm:px-6 lg:px-8 py-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}

            </main>
           </div>

        </div>







        <script src="https://cdn.jsdelivr.net/npm/toastify-js">

        </script>
       
       <script src="{{ asset('/js/modal.js') }}"></script>
        <script>
      
          @if(session()->has('alert-success'))
              Toastify({ text: "{{ session('alert-success') }}", duration: 10000,
                  style: { background: "linear-gradient(to right, #00b09b, #96c93d)", width: "400px" }
              }).showToast();
      
          @elseif (Session::has('alert-warning'))
              Toastify({ text: "{{ Session::get('alert-warning') }}", duration: 10000,
                      style: { background: "linear-gradient(to right, #ffc250, #ffa500)" }
              }).showToast();
      
          @elseif (Session::has('alert-danger'))
              Toastify({ text: "{{ Session::get('alert-danger') }}", duration: 10000,
                      style: { background: "linear-gradient(to right, ,#fa6464, #ff0000)" }
              }).showToast();
      
          @endif
          </script>

    </body>
</html>
