@extends('template.template')
@section('title', "LWP - $product->title - info")
@section('content')
    <div class="relative flex flex-col justify-center overflow-hidden bg-gray-50 py-10 sm:py-12">
        <div class="w-full items-center mx-auto max-w-screen-lg">
            <div class="group grid w-full grid-cols-2">
                <div>
                    <div class="pr-12 flex flex-col h-full">
                        <p class="peer mt-14 text-gray-400">
                            {{ $product->description }}
                        </p>
                        <p class="peer mt-6 text-gray-400">
                            {{ $product->article }}
                        </p>

                        <h3 class="mb-4 font-semibold text-xl text-gray-400 mt-auto">{{ $product->author }}</h3>
                    </div>
                </div>
                <div
                    class="pr-16 relative flex flex-col before:block before:absolute before:h-1/6 before:w-4 before:bg-blue-500 before:bottom-0 before:right-0 before:rounded-lg  before:transition-all group-hover:before:bg-orange-300 overflow-hidden">
                    <div
                        class="absolute top-0 right-0 bg-blue-500 w-4/6 px-12 py-14 flex flex-col justify-center rounded-xl group-hover:bg-sky-600 transition-all ">
                        <span class="block mb-10 font-bold group-hover:text-orange-300 uppercase">
                            {{ $product->title }}</span>
                        <h2 class="text-white font-bold text-3xl">
                            {{ substr($product->description, 0, 80) . '...' }}
                        </h2>
                    </div>
                    <a class="font-bold text-sm flex mt-2 mb-8 items-center gap-2" href="{{ route('products.index') }}">
                        <span>VIEWS ALL</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                    <div class="rounded-xl overflow-hidden">
                        <img src="{{ $product->img }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
