@extends('template.template')
@section('title', 'LWP-About')
@section('content')

    <section class="relative p-16 bg-blueGray-50">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center">
                <div class="w-10/12 md:w-6/12 lg:w-4/12 px-12 md:px-4 mr-auto ml-auto -mt-78">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-emerald-400 overflow-hidden">
                        <img alt="..."
                            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=700&amp;q=80"
                            class="w-full align-middle rounded-t-lg">
                        <blockquote class="p-8 bg-emerald-400 ">
                            <h4 class="text-xl font-bold text-white">
                                Great for your awesome project
                            </h4>
                            <p class="text-md font-light mt-2 text-white">
                                Putting together a page has never been easier than matching
                                together pre-made components. From landing pages presentation
                                to login areas, you can easily customise and built your pages.
                            </p>
                        </blockquote>
                    </div>
                </div>

                <div class="w-full md:w-6/12 px-4">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-6/12 px-4">
                            <div class="relative flex flex-col mt-4">
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                        <i class="fas fa-sitemap"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">CSS Components</h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Notus JS comes with a huge number of Fully Coded CSS
                                        components.
                                    </p>
                                </div>
                            </div>
                            <div class="relative flex flex-col min-w-0">
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                        <i class="fas fa-drafting-compass"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">
                                        JavaScript Components
                                    </h6>
                                    <p class="mb-4 text-blueGray-500">
                                        We also feature many dynamic components for React, NextJS,
                                        Vue and Angular.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-6/12 px-4">
                            <div class="relative flex flex-col min-w-0 mt-4">
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                        <i class="fas fa-newspaper"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">Pages</h6>
                                    <p class="mb-4 text-blueGray-500">
                                        This extension also comes with 3 sample pages. They are
                                        fully coded so you can start working instantly.
                                    </p>
                                </div>
                            </div>
                            <div class="relative flex flex-col min-w-0">
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">Documentation</h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Built by developers for developers. You will love how easy
                                        is to to work with Notus JS.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
