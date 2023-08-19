<div>
    {{--    Profile    --}}
    <div class="profile-menu text-white w-[30vh] transform transition min-h-screen  -translate-x-full duration-200 ease-in-out mt-[11vh] bg-stone-900 lg:bg-stone-900 absolute md:block md:w-auto">
        <div>
            <img src="{{asset('image/profile.jpg')}}" class="rounded-full ml-[6vh] mt-[3vh] transition-transform hover:scale-125" width="140">
            <h4 class="font-mono mt-1 p-3 pl-12">Ruel Flor Perez</h4>
            <div class="flex mt-3">
                <a href="https://www.facebook.com/ruel.perez.5473894" target="_blank"><img src="{{asset('image/fb-icon.jpg')}}" class="rounded-full ml-[8vh] md:right-0 cursor-pointer transition-transform hover:scale-125" width="40"></a>
                <a href="https://github.com/ruelperez" target="_blank"><img src="{{asset('image/github-icon.jpg')}}" class="rounded-full ml-[4vh] cursor-pointer transition-transform hover:scale-125" width="40"></a>
            </div>
            <div class="bg-stone-900 w-[30vh] text-center pb-4 mt-7">
                <i class="fa-solid fa-phone text-blue-500 text-2xl pt-4"></i>
                <h1 class="text-1xl mt-2">09955415702</h1>
            </div>
            <div class="w-[28vh] text-center mt-5 ml-2 p-3">
                <i class="fa-solid fa-envelope text-blue-500 text-2xl"></i>
                <h5 class="text-sm">karuelflorperezz@gmail.com</h5>
            </div>
        </div>
    </div>
    <div class="relative md:hidden">
        <div class="mobile-menu text-white w-[40vh] transform transition -translate-y-full duration-200 ease-in-out mt-[11vh] ml-8 bg-stone-900 lg:bg-stone-900 absolute">
            <ul class="font-medium flex-col p-4">
                <li class="cursor-pointer p-1 text-white @if($base == 0) bg-stone-500 @endif" wire:click="nav_click(0)">
                    About
                </li>
                <li class="cursor-pointer p-1 text-white @if($base == 2) bg-stone-500 @endif" wire:click="nav_click(2)">
                    Skills
                </li>
                <li class="cursor-pointer p-1 text-white @if($base == 3) bg-stone-500 @endif" wire:click="nav_click(3)">
                    Project
                </li>
                <li class="cursor-pointer p-1 text-white @if($base == 4) bg-stone-500 @endif" wire:click="nav_click(4)">
                    Contact
                </li>
            </ul>
        </div>
    </div>
    <nav class="bg-stone-900 border-gray-200 relative dark:bg-gray-900">
        <div class="max-w-screen-xl flex justify-between md:justify-between items-center p-2">
            <div class="ml-3 md:hidden">
                <i class="fa-solid fa-bars text-white text-xl" onclick="profile()"></i>
            </div>
            <div class="ml-[5.5vh] md:ml-[7vh] xl:ml-[12vh]">
                <div class="logo flex">
                    <h3 class="text-white p-1 ml-10  text-3xl">Ruel</h3><h3 class="text-blue-500 pt-1 text-3xl">Dev</h3>
                </div>
                <div class="flex ml-4">
                    <div class="text-white font-mono mr-4">R U E L</div>
                    <div class="text-white font-mono mr-3">P E R E Z</div>
                </div>
            </div>

            <div>
                <button onclick="clickBar()" type="button" class= "p-1 w-10 h-10 text-sm text-gray-500 rounded-lg md:hidden ml-[5vh]  focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <i class="fa-solid fa-ellipsis-vertical text-white text-xl"></i>
                </button>
            </div>

            <div class="md:text-white md:w-[40vh] md:ml-[50vh] md:right-[13vh] absolute xl:mr-20  invisible md:visible">
                <ul class="md:font-medium md:bg-stone-900 md:flex md:p-4  md:mt-0 ">
                    <li class="md:cursor-pointer md:px-4 md:p-2 md:text-white @if($base == 0) md:bg-stone-500 @endif" wire:click="nav_click(0)">
                        About
                    </li>
                    <li class="md:cursor-pointer md:px-4 md:p-2 md:text-white @if($base == 2) md:bg-stone-500 @endif" wire:click="nav_click(2)">
                        Skills
                    </li>
                    <li class="md:cursor-pointer md:px-4 md:p-2 md:text-white @if($base == 3) md:bg-stone-500 @endif" wire:click="nav_click(3)">
                        Project
                    </li>
                    <li class="md:cursor-pointer md:px-4 md:p-2 md:text-white @if($base == 4) md:bg-stone-500 @endif" wire:click="nav_click(4)">
                        Contact
                    </li>
                </ul>
            </div>

        </div>

    </nav>

{{--About--}}
    @if($base == 0)
        <div class="text-white md:flex">
            <div class="w-[44vh] md:w-3/5">
                <div class="flex ml-[5vh] mt-10 md:ml-[11vh] xl:ml-[15vh]">
                    <div class="w-1 h-8 bg-blue-500">
                    </div>
                    <h2 class="text-2xl ml-1">About</h2>
                </div>
                <div class="ml-[5vh] md:ml-[15vh] xl:ml-[20vh] mt-5 md:3-3/5 text-justify">
                    Hello world! I'm Ruel Perez, aspiring to become a Software Engineer. I'm a fresh graduate from <a href="https://www.facebook.com/ACLCCollegeIRIGA" class="text-blue-500" target="_blank">ACLC College of Iriga,</a> class of 2023. I hold a Bachelor's degree in Computer Science. I have experience in various programming languages, I currently learning Vue and React but my specialized programming language is <a href="https://laravel.com/" class="text-blue-500" target="_blank">Laravel PHP framework</a> and its special feature, <a href="https://laravel-livewire.com/" class="text-blue-500" target="_blank">Laravel Livewire.</a>
                </div>
                <div class="flex md:flex md:ml-[15vh] xl:ml-[20vh] ml-[25vh] mt-[20vh] hidden md:block">
                    <div class="bg-stone-900 w-[38vh] text-center pb-4">
                        <i class="fa-solid fa-phone text-blue-500 text-2xl pt-4"></i>
                        <h1 class="text-1xl mt-2">09955415702</h1>
                    </div>
                    <div class="bg-stone-900 w-[38vh] md:ml-5 text-center ml-10 pb-4">
                        <i class="fa-solid fa-envelope text-blue-500 text-2xl pt-4"></i>
                        <h1>karuelflorperezz@gmail.com</h1>
                    </div>
                </div>
            </div>
            <div class="w-screen md:w-2/5 md:mt-7 hidden md:block">
                <img src="{{asset('image/profile.jpg')}}" class="rounded-full md:ml-auto md:mr-auto ml-[24vh] mt-[3vh] ml-25 transition-transform hover:scale-125 md:" width="180">
                <h4 class="font-mono mt-1 ml-1 text-center">Ruel Flor Perez</h4>
                <h5 class="text-md text-center mt-1 md:mt-3">Aspiring to become Software Engineer</h5>
                <div class="flex mt-3 md:mt-8 md:w-6/12 md:ml-auto md:mr-auto">
                    <a href="https://www.facebook.com/ruel.perez.5473894" target="_blank"><img src="{{asset('image/fb-icon.jpg')}}" class="rounded-full ml-[17vh] md:ml-8 lg:ml-12 xl:ml-20 cursor-pointer transition-transform hover:scale-125" width="40"></a>
                    <a href="https://github.com/ruelperez" target="_blank"><img src="{{asset('image/github-icon.jpg')}}" class="rounded-full ml-[4vh] cursor-pointer transition-transform hover:scale-125" width="40"></a>
                </div>
            </div>

        </div>
    @endif
    {{--  Skills  --}}
    @if($base == 2)
        <div class="md:hidden">
            <div class="flex ml-[5vh] mt-10 md:ml-[11vh] text-white">
                <div class="w-1 h-8 bg-blue-500">
                </div>
                <h2 class="text-2xl ml-2">Skills</h2>
            </div>
            <div class="flex w-2/4 ml-auto mr-auto mt-12">
                <div class="mr-auto">
                    <a href="https://laravel.com/" target="_blank"><i class="fa-brands fa-laravel text-red-500 ml-auto text-7xl"></i></a>
                </div>
                <div class="ml-auto">
                    <a href="https://vuejs.org/guide/introduction.html" target="_blank"><i class="fa-brands fa-vuejs text-green-600 text-7xl"></i></a>
                </div>
            </div>
            <div class="flex w-2/4 ml-auto mr-auto mt-10">
                <div class="mr-auto">
                    <a href="https://vuejs.org/guide/introduction.html"><i class="fa-brands fa-react text-blue-500 text-7xl"></i></a>
                </div>
                <div class="ml-auto">
                    <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank"><i class="fa-brands fa-square-js text-yellow-300 text-7xl"></i></a>
                </div>
            </div>
            <div class="flex w-2/4 ml-auto mr-auto mt-10">
                <div class="mr-auto">
                    <a  href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank"><i class="fa-brands fa-html5 text-orange-500 text-7xl"></i></a>
                </div>
                <div class="ml-auto">
                    <a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank"><i class="fa-brands fa-css3-alt text-blue-500 text-7xl"></i></a>
                </div>
            </div>
            <div class="flex w-2/4 ml-auto mr-auto mt-10">
                <div class="mr-auto">
                    <a href="https://tailwindcss.com/docs/guides/laravel" target="_blank"><img src="https://api.iconify.design/devicon:tailwindcss.svg" width="80"/></a>
                </div>
                <div class="ml-auto">
                    <a href="https://getbootstrap.com/" target="_blank"><i class="fa-brands fa-bootstrap text-violet-600 text-6xl"></i></a>
                </div>
            </div>
        </div>
        <div class="md:block hidden">
            <div class="flex ml-[5vh] mt-10 md:ml-[11vh] text-white">
                <div class="w-1 h-8 bg-blue-500">
                </div>
                <h2 class="text-2xl ml-2">Skills</h2>
            </div>
            <div class="justify-between flex w-[60vh] ml-auto mr-auto mt-12">
                <div>
                    <a href="https://laravel.com/" target="_blank"><i class="fa-brands fa-laravel text-red-500 ml-auto text-8xl"></i></a>
                </div>
                <div>
                    <a href="https://vuejs.org/guide/introduction.html" target="_blank"><i class="fa-brands fa-vuejs text-green-600 text-8xl"></i></a>
                </div>
                <div>
                    <a href="https://vuejs.org/guide/introduction.html"><i class="fa-brands fa-react text-blue-500 text-8xl"></i></a>
                </div>
            </div>
            <div class="justify-between flex w-[60vh] ml-auto mr-auto mt-8">
                <div>
                    <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank"><i class="fa-brands fa-square-js text-yellow-300 text-8xl"></i></a>
                </div>
                <div >
                    <a  href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank"><i class="fa-brands fa-html5 text-orange-500 text-8xl"></i></a>
                </div
                    <a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank"><i class="fa-brands fa-css3-alt text-blue-500 text-8xl"></i></a>
                </div>
            </div>
            <div class="justify-between flex w-[60vh] ml-auto hidden mr-auto mt-8">
                <div>
                    <a href="https://tailwindcss.com/docs/guides/laravel" target="_blank"><img src="https://api.iconify.design/devicon:tailwindcss.svg" width="100"/></a>
                </div>
                <div>
                    <a href="https://getbootstrap.com/" target="_blank"><i class="fa-brands fa-bootstrap text-violet-600 mr-20 text-7xl"></i></a>
                </div>
                <div>
                </div>
            </div>
        </div>
        @endif
        {{-- Project--}}
        @if($base == 3)
{{--Project (md,lg.xl) --}}
            <div class="md:block hidden">
                <div class="flex ml-[5vh] mt-10 md:ml-[11vh] xl:ml-[15vh] text-white">
                    <div class="w-1 h-8 bg-blue-500">
                    </div>
                    <h2 class="text-2xl ml-2">Project</h2>
                </div>
                <div class="ml-auto mr-auto w-3/4 mt-12 grid grid-cols-3 gap-5">
                    <div class="relative">
                        <img wire:mouseover="hoverIn(1)" wire:mouseout="hoverOut" src="{{asset('image/tabulation.jpg')}}" class="w-80 h-[30vh] @if($hover == 1) opacity-50 @endif xl:h-[45vh] object-cover rounded-lg cursor-pointer lg:h-[35vh]">
                        @if($hover == 1)
                             <div wire:mouseover="hoverIn(1)" wire:mouseout="hoverOut" class="bg-stone-600 w-[22vh] text-center px-3 py-3 text-white ml-4 absolute bottom-[7vh] rounded-lg h-[15vh] lg:ml-12 lg:bottom-[10vh] xl:ml-[13vh] xl:bottom-[14vh]">
                                    <a href="https://github.com/ruelperez/event-tabulation" target="_blank"><img src="{{asset('image/github-icon.jpg')}}" class="rounded-full w-10 ml-10 cursor-pointer">Visit Repository</a>
                             </div>
                        @endif
                    </div>
                    <div class="relative">
                        <img wire:mouseover="hoverIn(2)" wire:mouseout="hoverOut" src="{{asset('image/kiosk.jpg')}}" class="w-80 h-[30vh] @if($hover == 2) opacity-50 @endif xl:h-[45vh] object-cover rounded-lg cursor-pointer lg:h-[35vh]">
                        @if($hover == 2)
                             <div wire:mouseover="hoverIn(2)" wire:mouseout="hoverOut" class="bg-stone-600 w-[22vh] text-center px-3 py-3 text-white ml-4 absolute bottom-[7vh] rounded-lg h-[15vh] lg:ml-12 lg:bottom-[10vh] xl:ml-[13vh] xl:bottom-[14vh]">
                                <a href="https://github.com/ruelperez/pre-enrollment" target="_blank"><img src="{{asset('image/github-icon.jpg')}}" class="rounded-full ml-[6.5vh] cursor-pointer" width="40">Visit Repository</a>
                            </div>
                        @endif
                    </div>
                    <div class="relative">
                        <img wire:mouseover="hoverIn(3)" wire:mouseout="hoverOut" src="{{asset('image/custodian.jpg')}}" class=" @if($hover == 3) opacity-50 @endif w-80 h-[30vh] xl:h-[45vh] object-cover rounded-lg cursor-pointer lg:h-[35vh]">
                        @if($hover == 3)
                            <div wire:mouseover="hoverIn(3)" wire:mouseout="hoverOut" class="bg-stone-600 w-[22vh] text-center px-3 py-3 text-white ml-4 absolute bottom-[7vh] rounded-lg h-[15vh] lg:ml-12 lg:bottom-[10vh] xl:ml-[13vh] xl:bottom-[14vh]">
                                    <a href="https://github.com/ruelperez/custodian" target="_blank"><img src="{{asset('image/github-icon.jpg')}}" class="rounded-full ml-[6.5vh] cursor-pointer" width="40">Visit Repository</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
{{--Project (Mobile View) --}}
            <div class="md:hidden">
                <div class="flex ml-[5vh] mt-10 md:ml-[11vh] xl:ml-[15vh] text-white">
                    <div class="w-1 h-8 bg-blue-500">
                    </div>
                    <h2 class="text-2xl ml-2">Project</h2>
                </div>
                <div class="ml-auto mr-auto w-3/4 mt-8">
                    <div class="relative mb-5">
                        <img wire:mouseover="hoverIn(1)" wire:mouseout="hoverOut" src="{{asset('image/tabulation.jpg')}}" class="h-[20vh] @if($hover == 1) opacity-50 @endif object-cover rounded-lg cursor-pointer">
                        @if($hover == 1)
                            <div wire:mouseover="hoverIn(1)" wire:mouseout="hoverOut" class="bg-stone-600 w-[21vh] text-center px-3 py-3 text-white ml-14 absolute bottom-[3vh] rounded-lg h-[13vh]">
                                <a href="https://github.com/ruelperez/event-tabulation" target="_blank"><img src="{{asset('image/github-icon.jpg')}}" class="rounded-full w-10 ml-12 cursor-pointer">Visit Repository</a>
                            </div>
                        @endif
                    </div>
                    <div class="relative mb-5">
                        <img wire:mouseover="hoverIn(2)" wire:mouseout="hoverOut" src="{{asset('image/kiosk.jpg')}}" class="h-[20vh] @if($hover == 2) opacity-50 @endif object-cover rounded-lg cursor-pointer">
                        @if($hover == 2)
                            <div wire:mouseover="hoverIn(2)" wire:mouseout="hoverOut" class="bg-stone-600 w-[21vh] text-center px-3 py-3 text-white ml-14 absolute bottom-[3vh] rounded-lg h-[13vh]">
                                <a href="https://github.com/ruelperez/pre-enrollment" target="_blank"><img src="{{asset('image/github-icon.jpg')}}" class="rounded-full ml-[6.5vh] cursor-pointer" width="40">Visit Repository</a>
                            </div>
                        @endif
                    </div>
                    <div class="relative">
                        <img wire:mouseover="hoverIn(3)" wire:mouseout="hoverOut" src="{{asset('image/custodian.jpg')}}" class="h-[20vh] @if($hover == 3) opacity-50 @endif object-cover rounded-lg cursor-pointer">
                        @if($hover == 3)
                            <div wire:mouseover="hoverIn(3)" wire:mouseout="hoverOut" class="bg-stone-600 w-[21vh] text-center px-3 py-3 text-white ml-14 absolute bottom-[3vh] rounded-lg h-[13vh]">
                                <a href="https://github.com/ruelperez/custodian" target="_blank"><img src="{{asset('image/github-icon.jpg')}}" class="rounded-full ml-[6.5vh] cursor-pointer" width="40">Visit Repository</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        @endif
        {{--  Contact  --}}
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
</div>

<script>
    function clickBar(){
        var menu = document.querySelector('.mobile-menu');
        menu.classList.toggle('-translate-y-full');
    }

    function profile(){
        var pro = document.querySelector('.profile-menu');
        pro.classList.toggle('-translate-x-full');
    }

</script>
