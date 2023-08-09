<div>
    <header class="w-full h-[11vh] px-10 flex border-black bg-stone-900">
        <div>
            <div class="logo flex pt-1">
                <h3 class="text-white pt-1 ml-20  text-3xl">Ruel</h3><h3 class="text-blue-500 pt-1 text-3xl">Dev</h3>
            </div>
            <div class="flex ml-12">
                <div class="text-white font-mono mr-4">R U E L</div>
                <div class="text-white font-mono">P E R E Z</div>
            </div>
        </div>

        <div class="py-6 ml-auto mr-[20vh] text-white">
            <nav>
                <ul class="flex gap-8 text-[2.7vh]">
                    <li class="cursor-pointer hover:text-blue-400 @if($base == 0) text-blue-500 @endif" wire:click="nav_click(0)">
                        About
                    </li>
                    <li class="cursor-pointer hover:text-blue-400 @if($base == 2) text-blue-500 @endif" wire:click="nav_click(2)">
                        Skills
                    </li>
                    <li class="cursor-pointer hover:text-blue-400 @if($base == 3) text-blue-500 @endif" wire:click="nav_click(3)">
                        Project
                    </li>
                    <li class="cursor-pointer hover:text-blue-400 @if($base == 4) text-blue-500 @endif" wire:click="nav_click(4)">
                        Contact
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    @if($base == 0)
        <div class="flex text-white ">
            <div class="w-3/5">
                <div class="flex ml-[25vh] mt-20">
                    <div class="w-1.5 h-10 bg-blue-500">
                    </div>
                    <h2 class="text-3xl ml-2">About</h2>
                </div>
                <div class="ml-[25vh] mt-10 pr-20">
                    Hello world! I'm Ruel Perez, aspiring to become a Software Engineer. I'm a fresh graduate from <a href="https://www.facebook.com/ACLCCollegeIRIGA" class="text-blue-500" target="_blank">ACLC College of Iriga,</a> class of 2023. I hold a Bachelor's degree in Computer Science. I have experience in various programming languages, but my specialized programming language is <a href="https://laravel.com/" class="text-blue-500" target="_blank">Laravel PHP framework</a> and its special feature, <a href="https://laravel-livewire.com/" class="text-blue-500" target="_blank">Laravel Livewire.</a>
                </div>
                <div class="flex ml-[25vh] mt-[20vh]">
                    <div class="bg-stone-900 w-[38vh] text-center pb-4">
                        <i class="fa-solid fa-phone text-blue-500 text-2xl pt-4"></i>
                        <h1 class="text-1xl mt-2">09955415702</h1>
                    </div>
                    <div class="bg-stone-900 w-[38vh] text-center ml-10 pb-4">
                        <i class="fa-solid fa-envelope text-blue-500 text-2xl pt-4"></i>
                        <h1>karuelflorperezz@gmail.com</h1>
                    </div>
                </div>

            </div>

            <div class="w-2/5">
                <img src="{{asset('image/profile.jpg')}}" class="rounded-full ml-[18vh] mt-[10vh] transition-transform hover:scale-125" width="250">
                <h5 class="text-lg pl-[25vh] font-mono mt-3">Ruel Flor Perez</h5>
                <h5 class="text-lg pl-[15vh] mt-3">Aspiring to become Software Engineer</h5>
                <div class="flex ml-[9vh]">
                    <a href="https://www.facebook.com/ruel.perez.5473894" target="_blank"><img src="{{asset('image/fb-icon.jpg')}}" class="rounded-full ml-[18vh] mt-[5vh] cursor-pointer transition-transform hover:scale-125" width="40"></a>
                    <a href="https://github.com/ruelperez" target="_blank"><img src="{{asset('image/github-icon.jpg')}}" class="rounded-full ml-[4vh] mt-[5vh] cursor-pointer transition-transform hover:scale-125" width="40"></a>
                </div>

            </div>

        </div>
    @endif
    @if($base == 2)
        <div class="flex ml-[25vh] mt-20 text-white">
            <div class="w-1.5 h-10 bg-blue-500">
            </div>
            <h2 class="text-3xl ml-2">Skills</h2>
        </div>
        <div class="flex ml-[75vh]">
            <a href="https://laravel.com/" target="_blank"><i class="fa-brands fa-laravel text-red-500 text-8xl mt-10"></i></a>
            <a href="https://tailwindcss.com/docs/guides/laravel" target="_blank"><img src="{{asset('image/tailwind-logo.jpg')}}" width="200"></a>
            <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank"><i class="fa-brands fa-square-js text-yellow-300 text-8xl mt-12 ml-5"></i></a>
        </div>
        <div class="flex ml-[75vh]">
            <a href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank"><i class="fa-brands fa-html5 text-orange-500 text-8xl"></i></a>
            <a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank"><i class="fa-brands fa-css3-alt text-blue-500 text-8xl ml-20"></i></a>
            <a href="https://getbootstrap.com/" target="_blank"><i class="fa-brands fa-bootstrap text-violet-600 text-8xl ml-20"></i></a>
        </div>
        <div class="flex ml-[75vh] mt-12">
            <a href="https://vuejs.org/guide/introduction.html"><i class="fa-brands fa-vuejs text-green-600 text-8xl"></i></a>
        </div>
    @endif
    @if($base == 3)
        <div class="flex ml-[25vh] mt-20 text-white">
            <div class="w-1.5 h-10 bg-blue-500">
            </div>
            <h2 class="text-3xl ml-2">Project</h2>
        </div>
        <div class="flex ml-[35vh] mt-10 ">
            <div class="inline-block relative">
                <img wire:mouseover="hoverIn(1)" wire:mouseout="hoverOut" src="{{asset('image/tabulation.jpg')}}" width="350" class="w-80 h-80 object-cover rounded-lg cursor-pointer">
                @if($hover == 1)
                <div wire:mouseover="hoverIn(1)" wire:mouseout="hoverOut" class="text-white absolute bottom-[0vh] rounded-lg w-80 h-80 bg-opacity-60 bg-stone-400">
                    <div class="bg-stone-600 w-40 text-center ml-20 mt-[15vh] px-3 py-3 rounded-2xl">
                        <a href="https://github.com/ruelperez/event-tabulation" target="_blank"><img src="{{asset('image/github-icon.jpg')}}" class="rounded-full ml-[6.5vh] cursor-pointer" width="40">Visit Repository</a>
                    </div>
                </div>
                @endif
            </div>
            <div class="inline-block relative ml-10">
                    <img wire:mouseover="hoverIn(2)" wire:mouseout="hoverOut" src="{{asset('image/kiosk.jpg')}}" width="350" class="w-80 h-80 object-cover rounded-lg cursor-pointer">
                @if($hover == 2)
                    <div wire:mouseover="hoverIn(2)" wire:mouseout="hoverOut" class="text-white absolute bottom-[0vh] rounded-lg w-80 h-80 bg-opacity-60 bg-stone-400">
                        <div class="bg-stone-600 w-40 text-center ml-20 mt-[15vh] px-3 py-3 rounded-2xl">
                            <a href="https://github.com/ruelperez/pre-enrollment" target="_blank"><img src="{{asset('image/github-icon.jpg')}}" class="rounded-full ml-[6.5vh] cursor-pointer" width="40">Visit Repository</a>
                        </div>
                    </div>
                @endif
            </div>
            <div class="inline-block relative ml-10">
                <img wire:mouseover="hoverIn(3)" wire:mouseout="hoverOut" src="{{asset('image/custodian.jpg')}}" width="350" class="w-80 h-80 object-cover rounded-lg cursor-pointer">
                @if($hover == 3)
                    <div wire:mouseover="hoverIn(3)" wire:mouseout="hoverOut" class="text-white absolute bottom-[0vh] rounded-lg w-80 h-80 bg-opacity-60 bg-stone-400">
                        <div class="bg-stone-600 w-40 text-center ml-20 mt-[15vh] px-3 py-3 rounded-2xl">
                            <a href="https://github.com/ruelperez/custodian" target="_blank"><img src="{{asset('image/github-icon.jpg')}}" class="rounded-full ml-[6.5vh] cursor-pointer" width="40">Visit Repository</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @endif
    @if($base == 4)
        <div class="flex ml-[25vh] mt-20 text-white">
            <div class="w-1.5 h-10 bg-blue-500">
            </div>
            <h2 class="text-3xl ml-2">Contact</h2>
        </div>
        <div class="flex ml-[65vh] mt-[10vh] text-white">
            <div class="bg-stone-900 w-[38vh] text-center pb-4 ">
                <i class="fa-solid fa-phone text-blue-500 text-4xl pt-4 transition-transform hover:scale-125"></i>
                <h1 class="text-1xl mt-2 transition-transform hover:scale-125">09955415702</h1>
            </div>
            <div class="bg-stone-900 w-[38vh] text-center ml-10 pb-4">
                <i class="fa-solid fa-envelope text-blue-500 text-4xl pt-4 transition-transform hover:scale-125"></i>
                <h1 class="transition-transform hover:scale-125">karuelflorperezz@gmail.com</h1>
            </div>
        </div>
        <div class="w-[81.5vh] mt-10 ml-[65vh] bg-stone-900 text-white pt-4 pb-4">
            <h1 class="text-2xl text-center">Connect Us</h1>
            <div class="flex ml-[23vh] pt-3 pb-3">
                <a href="https://www.facebook.com/ruel.perez.5473894" target="_blank"><i class="fa-brands fa-facebook text-blue-600 text-4xl pt-4 transition-transform hover:scale-125 cursor-pointer"></i></a>
                <a href="https://github.com/ruelperez" target="_blank"><i class="fa-brands fa-github text-4xl pt-4 transition-transform hover:scale-125 ml-10 cursor-pointer"></i></a>
                <a href="https://www.instagram.com/ruelperez_matt/" target="_blank"><i class="fa-brands fa-instagram text-4xl pt-4 transition-transform hover:scale-125 ml-10 text-pink-600 cursor-pointer"></i></a>
                <a href="https://www.tiktok.com/@ruueel?_t=8eS3fEWRAqQ&_r=1" target="_blank"><i class="fa-brands fa-tiktok text-4xl pt-4 transition-transform hover:scale-125 ml-10 cursor-pointer"></i></a>
            </div>
        </div>
    @endif
</div>
