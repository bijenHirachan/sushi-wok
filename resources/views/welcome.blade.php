@extends('layouts.app')

@section('content')
    <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat p-12 text-center"
        style="background-image: url('/img/sushi.jpg'); height: 100svh">
        <x-navigation />

        <div class="h-full w-full flex justify-center items-end pb-32">
            <div class="text-white tracking-wide space-y-8">
                <div class="space-y-4">
                    <h4 class="text-2xl font-bold">Sushi & Wok</h4>
                    <p class="text-xl">
                        Enjoy different varieties of sushi, wok and many more
                    </p>
                </div>

                <button class="border border-white px-4 py-2 hover:border-orange-400 hover:text-orange-400">
                    Call Us Now!
                </button>
            </div>
        </div>
    </div>
@endsection
