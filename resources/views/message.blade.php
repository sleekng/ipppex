<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <div id="dashboard-toggler" class=" cursor-pointer  ">
                <i id="dashboard-toggleIcon" class="fa-thin text-4xl fa-bars"></i>
            </div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Applicants') }}
            </h2>
        </div>
    </x-slot>

    <div>
        <div class="flex">

            <div class=" hidden px-4 md:flex justify-center flex-col items-center">
                <div class="px-3 w-full flex items-center border-b">
                    <input id="checkAll" class="text-xs text-primarycolor rounded-sm " type="checkbox" /> <span
                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 ">Selecte All</span>
                </div>
                <div>
                    <ul class=" h-[500px] overflow-y-auto overflow-x-hidden">
                        @foreach ($applicants as $applicant)
                            <li class="px-3 flex items-center border-b">
                                <input name="selectedItems[]" class="text-xs text-primarycolor rounded-sm "
                                    type="checkbox" /> <span
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 ">{{ $applicant->name }}</span>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class=" md:h-auto h-[80vh] px-4 md:px-12 border-l w-full flex items-center justify-center relative">
                <form action="{{ route('home') }}" class=" w-full">

                    <div class=" grid xl:grid-cols-2  gap-4 w-full grid-cols-1">

                        <div>
                            <input value="{{ old('subject') }}" type="text" name="subject"
                                placeholder="Subject or Title"
                                class="focus-within:outline-none p-2 border rounded-md w-full">
                            @error('subject')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>


                    <div class="w-full mt-4">
                        <div id="message_body" class=" w-full rounded-lg "></div>
                        <textarea value="" name="content" id="editor-content" style="display:none;"></textarea>
                    </div>

                    <div class=" flex justify-center mt-4">
                        <x-button class="p-2">Send messages to <span
                                class="bg-white h-3 w-3 rounded-full p-1">10</span></x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-app-layout>

<script>
    var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
        ['blockquote', 'code-block'],

        [{
            'header': 1
        }, {
            'header': 2
        }], // custom button values
        [{
            'list': 'ordered'
        }, {
            'list': 'bullet'
        }],
        [{
            'script': 'sub'
        }, {
            'script': 'super'
        }], // superscript/subscript
        [{
            'indent': '-1'
        }, {
            'indent': '+1'
        }], // outdent/indent
        [{
            'direction': 'rtl'
        }],
        ['link', 'image', 'video', 'formula'], // text direction

        [{
            'size': ['small', false, 'large', 'huge']
        }], // custom dropdown
        [{
            'header': [1, 2, 3, 4, 5, 6, false]
        }],

        [{
            'color': []
        }, {
            'background': []
        }], // dropdown with defaults from theme
        [{
            'font': []
        }],
        [{
            'align': []
        }],

        ['clean'] // remove formatting button
    ];



    var quill = new Quill('#message_body', {
        modules: {
            toolbar: toolbarOptions
        },
        theme: 'snow'
    });


    var editorContent = document.querySelector('#editor-content');
    editorContent.value = quill.root.innerHTML;

    quill.on('text-change', function() {
        var editorContent = document.querySelector('#editor-content');
        editorContent.value = quill.root.innerHTML;
    });
</script>
