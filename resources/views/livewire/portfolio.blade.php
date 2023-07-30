<div>
    <header class="w-full h-[13vh] px-10 flex border-black bg-stone-900">
        <div>
            <div class="logo flex">
                <h3 class="text-white pt-1 ml-20  text-3xl">Ruel</h3><h3 class="text-blue-500 pt-1 text-3xl">Dev</h3>
            </div>
            <div class="flex ml-12">
                <div class="text-white font-mono mr-4">R U E L</div>
                <div class="text-white font-mono">P E R E Z</div>
            </div>
        </div>

        <div class="py-6 ml-auto mr-20 text-white">
            <nav>
                <ul class="flex gap-8 text-[2.7vh]">
                    <li class="cursor-pointer hover:text-blue-400 @if($base == 0) text-blue-500 @endif" wire:click="nav_click(0)">
                        About
                    </li>
                    <li class="cursor-pointer hover:text-blue-400 @if($base == 1) text-blue-500 @endif" wire:click="nav_click(1)">
                        Service
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

            </div>

            <div class="w-2/5">
                <img src="{{asset('image/profile.jpg')}}" class="rounded-full ml-[18vh] mt-[10vh]" width="250">
                <h5 class="text-lg pl-[25vh] font-mono mt-3">Ruel Flor Perez</h5>
                <h5 class="text-lg pl-[15vh] mt-3">Aspiring Full-Stack Web Developer</h5>
                <div class="flex ml-[9vh]">
                    <a href="https://www.facebook.com/ruel.perez.5473894" target="_blank"><img src="{{asset('image/fb-icon.jpg')}}" class="rounded-full ml-[18vh] mt-[5vh] cursor-pointer" width="40"></a>
                    <a href="https://github.com/ruelperez" target="_blank"><img src="{{asset('image/github-icon.jpg')}}" class="rounded-full ml-[4vh] mt-[5vh] cursor-pointer" width="40"></a>
                </div>

            </div>

        </div>
    @endif
    @if($base == 1)
        <div class="flex text-white">
            <div class="w-60 ">

            </div>

            <div class="w-40">

            </div>

        </div>
    @endif
    @if($base == 2)
        <div class="flex">
            <div>
3
            </div>

            <div>

            </div>

        </div>
    @endif
    @if($base == 3)
        <div class="flex text-white">
            <div>
4
            </div>

            <div>

            </div>

        </div>
    @endif
    @if($base == 4)
        <div class="flex">
            <div>

            </div>
5
            <div>

            </div>

        </div>
    @endif
</div>
