@extends('template.template')
@section('title', 'LWP-Products Dashboard')
@section('content')
    <div class="grid sm:grid-cols-6 ">
        <div class="col-span-1 w-full">
            @include('partials.sidebar')
        </div>
        <div class="sm:col-span-5 md:col-span-3 lg:col-span-4 xl:col-span-5 w-full pe-14 py-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
