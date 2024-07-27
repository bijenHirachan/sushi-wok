<div>
    <div class="flex justify-center gap-2 mt-4">
        <span wire:click="clearSelectedCategories"
            class="inline-flex cursor-pointer items-center px-2 py-1 text-xs font-medium text-gray-600 rounded-md {{ count($selectedCategories) ? 'bg-gray-50' : 'bg-pink-100 ' }} ring-1 ring-inset ring-gray-500/10">
            All
        </span>
        @foreach ($categories as $category)
            <span wire:click="selectCategory({{ $category->id }})"
                class="inline-flex cursor-pointer items-center px-2 py-1 text-xs font-medium text-gray-600 rounded-md {{ in_array($category->id, $selectedCategories) ? 'bg-pink-100 ' : 'bg-gray-50' }} ring-1 ring-inset ring-gray-500/10">
                {{ $category->name }}
            </span>
        @endforeach


    </div>
    <div class='grid mt-16 sm:grid-cols-2 lg:grid-cols-4 gap-y-8 gap-x-5'>
        @foreach ($items as $item)
            <div class='relative shadow-lg h-[356px] bg-pink-100/20 rounded-3xl'>
                <img src="{{ asset('storage/' . $item->image) }}" class="object-cover w-full h-full rounded-3xl" />

                <div
                    class="absolute bottom-0 flex flex-col items-center justify-center w-full p-4 tracking-wide text-white bg-slate-900/50 rounded-b-3xl">
                    <h3 class="text-xl font-semibold">{{ $item->name }}</h3>
                    <p class="text-sm">{{ $item->description }}</p>
                    <h3 class="mt-2 text-2xl">€ {{ $item->price }}</h3>
                </div>
            </div>
        @endforeach
    </div>
</div>
