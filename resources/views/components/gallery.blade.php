<div id="gallery">
    <div class='max-w-2xl mx-auto mt-20 lg:max-w-7xl sm:py-4 lg:px-8 md:pt-24'>
        <div class="text-center">
            <h2 class='mb-3 text-lg font-normal tracking-widest uppercase text-pink ls-51'>Our Specials</h2>

            <h3 class="text-3xl font-semibold text-black lg:text-5xl">
                Best pick of the week
            </h3>
        </div>

        <div class='grid grid-cols-1 px-6 my-16 space-y-6 md:grid-cols-12 sm:space-x-6 md:space-y-0'>

            <div class='flex justify-center col-span-6 overflow-hidden rounded-3xl'>
                <img src="{{ asset('storage/'. (new \App\Settings\GallerySetting)?->huge_image)}}" alt="pizza-one" class="object-cover w-full h-full" />
            </div>

            <div class='flex justify-center col-span-6'>
                <div class="grid grid-flow-row grid-rows-1 gap-4">
                    <div class="row-span-1 overflow-hidden rounded-3xl">
                        <img src="{{ asset('storage/'. (new \App\Settings\GallerySetting)?->big_image)}}" class="object-cover w-full h-full" />
                    </div>
                    <div class='grid grid-cols-2 gap-2'>
                        <div class='overflow-hidden rounded-3xl'>
                            <img src="{{ asset('storage/'. (new \App\Settings\GallerySetting)?->first_small_image)}}" class="object-cover w-full h-full" />
                        </div>
                        <div class='overflow-hidden rounded-3xl'>
                            <img src="{{ asset('storage/'. (new \App\Settings\GallerySetting)?->second_small_image)}}" class="object-cover w-full h-full"/>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
