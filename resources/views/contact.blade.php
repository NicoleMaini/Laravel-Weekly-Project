@extends('template.template')
@section('title', 'LWP-Contact')
@section('content')
    <div class="flex justify-center items-center bg-white ">
        <!-- COMPONENT CODE -->
        <div class=" container mx-auto my-6 px-4 pt-4 lg:px-20">

            <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
                <div class="flex">
                    <h1 class="font-bold uppercase text-4xl">Send us a <br /> message</h1>
                </div>
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                    <input
                        class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-blue-300 focus:ring-blue-300"
                        type="text" placeholder="First Name*" />
                    <input
                        class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-blue-300 focus:ring-blue-300"
                        type="text" placeholder="Last Name*" />
                    <input
                        class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-blue-300 focus:ring-blue-300"
                        type="email" placeholder="Email*" />
                    <input
                        class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-blue-300 focus:ring-blue-300"
                        type="number" placeholder="Phone*" />
                </div>
                <div class="my-4">
                    <textarea placeholder="Message*"
                        class="w-full h-32 block shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-blue-300 focus:ring-blue-300"></textarea>
                </div>
                <div class="my-2
                        w-1/2 lg:w-1/4">
                    <button onclick="alert('hello')" type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-400 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Send Message
                    </button>
                </div>
            </div>

            <div class="w-full lg:-mt-96 lg:w-2/6 px-8 py-12 ml-auto bg-red-400 rounded-2xl">
                <div class="flex flex-col text-white">
                    <div class="flex my-4 w-2/3 lg:w-1/2">
                        <div class="flex flex-col">
                            <i class="fas fa-map-marker-alt pt-2 pr-2" />
                        </div>
                        <div class="flex flex-col">
                            <h2 class="text-2xl">Main Office</h2>
                            <p class="text-gray-400">5555 Tailwind RD, Pleasant Grove, UT 73533</p>
                        </div>
                    </div>

                    <div class="flex my-4 w-2/3 lg:w-1/2">
                        <div class="flex flex-col">
                            <i class="fas fa-phone-alt pt-2 pr-2" />
                        </div>
                        <div class="flex flex-col">
                            <h2 class="text-2xl">Call Us</h2>
                            <p class="text-gray-400">Tel: xxx-xxx-xxx</p>
                            <p class="text-gray-400">Fax: xxx-xxx-xxx</p>
                        </div>
                    </div>

                    <div class="flex my-4 w-2/3 lg:w-1/2">
                        <a href="https://www.facebook.com/ENLIGHTENEERING/" target="_blank" rel="noreferrer"
                            class="rounded-full bg-white h-8 w-8 inline-block mx-1 text-center pt-1">
                            <i class="fab fa-facebook-f text-blue-900" />
                        </a>
                        <a href="https://www.linkedin.com/company/enlighteneering-inc-" target="_blank" rel="noreferrer"
                            class="rounded-full bg-white h-8 w-8 inline-block mx-1 text-center pt-1">
                            <i class="fab fa-linkedin-in text-blue-900" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- COMPONENT CODE -->
    </div>
@endsection
