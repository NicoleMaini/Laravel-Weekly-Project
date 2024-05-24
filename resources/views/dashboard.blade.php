@extends('template.template')
@section('title', 'LWP-Products Dashboard')
@section('content')
    <div class="grid sm:grid-cols-6 relative">
        <div class="col-span-1 w-full">
            @include('partials.sidebar')
        </div>
        <div class="sm:col-span-5 md:col-span-3 lg:col-span-4 xl:col-span-5 w-full pe-14 pt-5">

            @session('operation_success')
                <x-operetion-confirmed op='success'>
                    The post {{ session('operation_success')->title }} was successfully deleted
                </x-operetion-confirmed>
            @endsession

            @session('update_success')
                <x-operetion-confirmed op='success'>
                    Updated "{{ session('update_success')->title }}" resource <a
                        href="{{ route('products.show', ['id' => session('update_success')->id]) }}">Go</a>
                </x-operetion-confirmed>
            @endsession


            @if ($products)
                <h2 class="m-4">Tablella dei post</h2>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    N°
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Title
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Description
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Author
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Edit
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr
                                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $product->id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $product->title }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $product->description }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $product->author }}
                                    </td>
                                    @if (Auth::user()->id === $product->user_id)
                                        <td class="px-6 py-4">
                                            <a class="hover:text-gray-700"
                                                href="{{ route('products.edit', ['id' => $product]) }}">
                                                <span class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                                    </svg> <span class="ms-1">Edit</span></span>
                                            </a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <form action="{{ route('products.destroy', ['id' => $product]) }}"
                                                method="POST" class="ms-3">
                                                @method('DELETE')
                                                @csrf
                                                <button class="hover:text-gray-700"> <span class="flex items-center"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-trash-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                                        </svg><span>Elimina</span></button>
                                            </form>
                                        </td>
                                    @else
                                        <td class="px-6 py-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-ban" viewBox="0 0 16 16">
                                                <path
                                                    d="M15 8a6.97 6.97 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0" />
                                            </svg>
                                        </td>
                                        <td class="px-6 py-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-ban" viewBox="0 0 16 16">
                                                <path
                                                    d="M15 8a6.97 6.97 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0" />
                                            </svg>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-10 mb-10">{{ $products->links() }}</div>
            @else
                <h2>Non ci sono post</h2>
            @endif
        </div>
    </div>

@endsection
