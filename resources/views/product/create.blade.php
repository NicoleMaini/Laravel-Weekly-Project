@extends('template.template')
@section('title', 'LWP - Create Post')
@section('content')
    <div class="grid sm:grid-cols-6 ">
        <div class="col-span-1 w-full">
            @include('partials.sidebar')
        </div>
        <div class="sm:col-span-5 md:col-span-3 lg:col-span-4 xl:col-span-5 w-full pe-14 pt-5">
            <h2 class="text-center text-lg">Create Post</h2>
            <form method="POST" action="{{ route('products.store') }}" class="px-20 flex flex-col ">
                @csrf
                <div class="mb-4">
                    <label for="img"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Image</label>
                    <input type="text" name="img" value=""
                        class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-blue-300 focus:ring-blue-300"
                        placeholder="https//www.image.com">
                </div>
                <div class="mb-4">
                    <label for="title"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Title</label>
                    <input type="text" name="title" value=""
                        class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-blue-300 focus:ring-blue-300"
                        placeholder="Title of post">
                </div>
                <div class="mb-4">
                    <label for="description"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Description</label>
                    <textarea placeholder="Content description of article..." name="description" value=""
                        class="w-full h-32 block shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-blue-300 focus:ring-blue-300"></textarea>
                </div>
                <div class="mb-4">
                    <label for="article"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Article</label>
                    <textarea placeholder="Content of post..." name="article" value=""
                        class="w-full h-52 block shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-blue-300 focus:ring-blue-300"></textarea>
                </div>
                <div class="mb-4">
                    <label for="author"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Author</label>
                    <input type="text" id="author" name="author" value=""
                        class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-blue-300 focus:ring-blue-300"
                        placeholder="Post's author name">
                </div>

                <button type="submit"
                    class="text-xl hover:text-gray-700 mx-auto my-10 border rounded-md border-gray-300 py-2 px-4 shadow-sm ">
                    <span class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                        </svg> <span class="ms-2">Create</span></span>
                </button>
        </div>
        </form>
    </div>
    </div>

@endsection
