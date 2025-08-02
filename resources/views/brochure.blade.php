<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <div id="dashboard-toggler" class=" cursor-pointer  ">
                <i id="dashboard-toggleIcon" class="fa-thin text-4xl fa-bars"></i>
            </div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Update brochure') }}
            </h2>
        </div>
    </x-slot>
    <div class="py-4 grid gap-10 md:grid-cols-2 grid-cols-1">
        <div class=" border  p-10 md:py-20 rounded-md">
            <form action="{{ route('conference.upload') }}" method="post" enctype="multipart/form-data">
                @csrf
    
                <div class="mt-4">
                    <label for="filename">Brochure name</label>
                    <input type="text" class="mt-2 focus-visible:outline-none border w-full border-[#D9D2D2] rounded-[12px] h-[48px] bg-transparent" name="filename" placeholder="Enter brochure name">
                </div>
    
                <div class="mt-4">
                    <input type="file" name="pdf_file">
                </div>
                
                <div class="mt-4 flex justify-end">
                    <x-button type="submit">Upload PDF</x-button>
                </div>
            </form>
        </div>
        <div  class=" border  p-10 md:py-20 rounded-md">
            <h2 class=" font-bold text-2xl">Conference Brochure</h2>
            @if(count($pdfFiles) > 0)
                <ul>
                    @foreach($pdfFiles as $pdfFile)
                    <div class=" flex items-center space-x-8 py-4">
                        <li><a href="storage/pdfs/{{$pdfFile->path}}">{{ $pdfFile->filename }}</a></li>
                        <form action="{{ route('brochure.destroy', $pdfFile->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class=" text-red-700" onclick="return confirm('Are you sure you want to delete this PDF file?')"><i class="fa-light text-red-600 fa-trash"></i></button>
                        </form>
                    </div>
                    @endforeach
                </ul>
            @else
                <p>No Conference Brochure uploaded yet.</p>
            @endif
        </div>
            

      
    </div>



</x-app-layout>

