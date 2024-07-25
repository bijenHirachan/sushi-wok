<div x-data="{ show: false }" class="p-3 mx-auto max-w-7xl md:p-6 lg:px-8">
    <div class="relative flex items-center h-12 sm:h-20">
        <div class="flex items-center flex-1 sm:justify-between">

            <div class="flex items-center flex-shrink-0 sm:hidden border-right">
                <img src="/img/hero.png" alt="logo" width="36" height="36" />
                <a href="/" class='ml-4 text-2xl font-semibold text-black'>
                    Sushigurung
                </a>
            </div>
            <div class="items-center flex-shrink-0 hidden sm:flex border-right">
                <img src="/img/hero.png" alt="logo" width="56" height="56" />
                <a href="/" class='ml-4 text-2xl font-semibold text-black'>
                    Sushigurung
                </a>
            </div>


            <div class="items-center hidden lg:flex border-right ">
                <div class="flex justify-end space-x-4">
                    <a href="#menu"
                        class="px-3 py-4 text-lg font-normal rounded-md opacity-50 cursor-pointer hover:opacity-100 hover:text-black space-links">
                        Menu
                    </a>
                    <a href="#expert"
                        class="px-3 py-4 text-lg font-normal rounded-md opacity-50 cursor-pointer hover:opacity-100 hover:text-black space-links">
                        Expert
                    </a>
                    <a href="#gallery"
                        class="px-3 py-4 text-lg font-normal rounded-md opacity-50 cursor-pointer hover:opacity-100 hover:text-black space-links">
                        Gallery
                    </a>
                </div>

            </div>

        </div>

        <div class='block lg:hidden'>
            <svg x-show="!show" @click="show = true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block w-6 h-6 cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>

            <svg x-show="show" @click="show = false" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block w-6 h-6 cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>

        </div>


    </div>


    <div x-show="show" class="w-full max-w-sm mx-auto rounded-md lg:hidden">
        <div class="flex-1 py-1 space-y-4">
            <div class="sm:block">
                <div class="px-5 pt-2 pb-3 space-y-1">
                    <a @click="show = false" href="#menu"
                        class="block p-2 text-base font-medium text-black rounded-md hover:bg-pink-100 hover:text-purple">
                        Menu
                    </a>

                    <a @click="show = false" href="#expert"
                        class="block p-2 text-base font-medium text-black rounded-md hover:bg-pink-100 hover:text-purple">
                        Experts
                    </a>

                    <a @click="show = false" href="#gallery"
                        class="block p-2 text-base font-medium text-black rounded-md hover:bg-pink-100 hover:text-purple">
                        Gallery
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
