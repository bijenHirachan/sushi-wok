<div class="py-10 sm:py-20 bg-pink-100/20" id="expert">

    <div class='max-w-2xl mx-auto lg:max-w-7xl sm:py-4 lg:px-8'>
        <div class="text-center">
            <h2 class='mb-3 text-lg font-normal tracking-widest uppercase text-pink ls-51'>EXPERT CHEFS</h2>

            <h3 class="text-3xl font-semibold text-black lg:text-5xl">
                Let&apos;s meet the expert.
            </h3>
        </div>

        <div class="flex flex-col mt-8 sm:flex-row">
            @foreach (App\Models\Staff::all() as $staff)
                <div class='m-3 my-10 text-center'>
                    <div class="w-64 h-64">
                        <img src={{ asset('storage/' . $staff->image) }}
                            class="object-cover w-full h-full rounded-full" />
                    </div>
                    <h3 class='mt-4 text-2xl font-semibold text-lightblack'>{{ $staff->name }}</h3>
                    <h4 class='pt-2 pb-2 text-lg font-normal uppercase opacity-50 text-lightblack'>{{ $staff->role }}
                    </h4>
                </div>
            @endforeach
        </div>

    </div>
</div>
