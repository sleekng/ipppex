@props([''])

<div class="h-[600px] flex justify-center items-center p-4"  style="  background-image:linear-gradient(to bottom, rgba(18, 16, 16, 0.734), rgba(18, 16, 16, 9)),url('storage/img/slide/slilde3.jpg'); background-position-y:center; background-repeat:no-repeat;background-size:cover">
    <div class=" flex space-y-2 flex-col justify-center items-center">
       
        <div data-aos="fade-right" data-aos-duration="2000" class=" text-6xl md:text-8xl font-extralight text-white">
            {{ $slot }}
        </div>
        <div class=" text-white">
           <a href="{{ route('conference.index') }}"> Download Expo Conference Brochure <span><i class="  text-orange-400 fa-solid fa-arrow-right"></i></span></a>
        </div>
    </div>
</div>