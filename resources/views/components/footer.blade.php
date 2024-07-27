<div class="max-w-2xl px-4 pt-24 mx-auto bg-pink-100/20 sm:px-6 lg:max-w-7xl lg:px-8">
    <div class="flex flex-col items-center sm:justify-between sm:flex-row">


        <div class=''>
            <div class="flex items-center flex-shrink-0 border-right">
                <img src="/img/hero.png" alt="logo" class="object-contain w-16 h-16" />
                <a href="/" class='ml-4 text-2xl font-semibold text-black'>
                    Sushigurung
                </a>
            </div>


        </div>



        <div class="flex flex-col items-center">
            <div class='flex gap-2 my-4'>

                <a target="_blank" href="{{ (new \App\Settings\SocialSetting)?->facebook}}">
                    <i class="transition-all delay-150 hover:scale-125 fa-brands fa-facebook"></i>
                </a>
                <a target="_blank" href="{{ (new \App\Settings\SocialSetting)?->youtube}}">
                    <i class="transition-all delay-150 hover:scale-125 fa-brands fa-youtube"></i>
                </a>
                <a target="_blank" href="{{ (new \App\Settings\SocialSetting)?->tiktok}}">
                    <i class="transition-all delay-150 hover:scale-125 fa-brands fa-tiktok"></i>
                </a>
                <a target="_blank" href="{{ (new \App\Settings\SocialSetting)?->instagram}}">
                    <i class="transition-all delay-150 hover:scale-125 fa-brands fa-instagram"></i>
                </a>

            </div>
        </div>

    </div>


    <div class='items-center justify-between py-10 border-t md:flex border-t-bordertop'>
        <h4 class='text-sm font-normal text-center text-darkgrey md:text-start'>@2024 - sushigurung.be
        </h4>
    </div>
</div>
