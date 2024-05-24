@extends('template.template')
@section('title', 'LWP-Products')
@section('content')
    <h1 class="text-xl text-center font-semibold hover:text-gray-500 mt-10">Ours Posts</h1>
    <div class="container mx-auto p-10">
        @session('no_permission')
            <x-operetion-confirmed op='danger'>
                You do not have permission to edit the {{ session('no_permission')->title }} post
            </x-operetion-confirmed>
        @endsession
        <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-10">
            @if ($products)
                @foreach ($products as $product)
                    <div class="relative flex w-80 flex-col justify-center overflow-hidden bg-gray-50 mx-auto">
                        @auth
                            @if (Auth::user()->id === $product->user_id)
                                <x-edit-delet-btns :prod="$product"></x-edit-delet-btns>
                            @endif
                        @endauth
                        <div class="w-full items-center mx-auto max-w-screen-lg p-4">
                            <div class="group w-full">
                                <div
                                    class="pl-16 relative flex items-end flex-col before:block before:absolute before:h-1/6 before:w-4 before:bg-blue-500 before:bottom-0 before:left-0 before:rounded-lg  before:transition-all group-hover:before:bg-red-400 overflow-hidden">
                                    <div
                                        class="absolute top-0 left-0 bg-blue-500 w-4/6 px-6 py-6 flex flex-col justify-center rounded-xl group-hover:bg-sky-600 transition-all ">
                                        <span
                                            class="block mb-3 font-bold group-hover:text-red-400 uppercase truncate">{{ $product->title }}</span>
                                        <h2 class="text-white font-bold text-ellipsis overflow-hidden">
                                            {{ substr($product->description, 0, 60) . '...' }}
                                        </h2>
                                    </div>
                                    <a class="font-bold text-sm text-end flex mt-2 me-1 mb-8 items-center underline decoration-1 hover:text-red-400"
                                        href="{{ route('products.show', ['id' => $product]) }}">
                                        <span>SHOW MORE </span>
                                    </a>
                                    <div class="rounded-xl overflow-hidden">
                                        <img src="{{ $product->img }}" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
        <div class="mt-10">{{ $products->links() }}</div>
    @else
        <h2 class="text-center">Non ci sono prodotti</h2>
        @endif
    </div>
    @auth
        <x-add-btn></x-add-btn>
    @endauth
@endsection
