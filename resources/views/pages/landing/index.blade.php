@extends('layouts.front')

@section('title', ' Home')

@section('content')

    {{-- top --}}
    <div class="hero-bg">
        <!-- hero -->
        <div class="hero">
            <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                <!-- Left Column -->
                <div
                    class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                    <h1
                        class="text-black-1 lg:leading-normal sm:text-4xl lg:text-5xl text-3xl mb-5 font-semibold lg:mt-20">
                        Finish Your Project With <br class="lg:block hidden">
                        Ours Best Freelancers
                    </h1>
                    <p class="text-lg leading-relaxed text-serv-text font-light tracking-wide mb-10 lg:mb-18 ">
                        Find thousands of remote workers who have the best <br class="lg:block hidden">
                        skills and experience to help you accomplishing <br class="lg:block hidden">
                        your projects.
                    </p>
                    <div
                        class="md:flex contents items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 space-x-0">
                        <button class="bg-serv-button text-white text-lg font-semibold py-4 px-12 my-2 rounded-lg" onclick="toggleModal('registerModal')">
                            Get Started
                        </button>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="w-full lg:w-1/2 text-center lg:justify-start justify-center flex pr-0">
                    <img class="bottom-0 lg:block lg:right-24 md:right-16 sm:right-8 right-8 w-75"
                        src="{{ asset('/assets/hero-image.png') }}" alt="" />
                </div>
            </div>
            <div class="lg:mb-20 mb-10 flex sm:space-x-4 space-x-1">
                <div class="flex-1 flex items-center justify-center py-3 px-6">
                    <img src="{{ url('images/brand-logo/netflix.svg') }}" alt="">
                </div>
                <div class="flex-1 flex items-center justify-center py-3 px-6">
                    <img src="{{ url('images/brand-logo/amazon.svg') }}" alt="">
                </div>
                <div class="flex-1 flex items-center justify-center py-3 px-6">
                    <img src="{{ url('images/brand-logo/uber.svg') }}" alt="">
                </div>
                <div class="flex-1 flex items-center justify-center py-3 px-6">
                    <img src="{{ url('images/brand-logo/grab.svg') }}" alt="">
                </div>
                <div class="flex-1 flex items-center justify-center py-3 px-6">
                    <img src="{{ url('images/brand-logo/google.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection
