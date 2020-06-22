@extends('layouts.app')

@section('content')
<div class="bg-gray-100 flex antialiased">
    <div class="px-8 py-12 max-w-md mx-auto sm:max-w-xl lg:max-w-full lg:w-1/2 lg:py-24 lg:px-12">
        <div class="xl:max-w-lg">
            <img class="h-10" src="/img/logo.svg" alt="Workcation">
            <img class="mt-6 rounded-lg shadow-xl sm:mt-8 sm:h-64 sm:w-full sm:object-cover sm:object-center lg:hidden"
                src="/img/beach-work.jpg" alt="Woman workcation">
            <h1 class="mt-6 text-2xl font-bold text-gray-900 leading-tight sm:text-4xl lg:text-3xl xl:text-4xl sm:mt-8">
                You can work from anywhere.
                <br class="hidden lg:inline">
                <span class="text-indigo-500">Take advantage of it.</span>
            </h1>
            <p class="mt-2 text-gray-600 sm:mt-4 sm:text-xl">
                Workcation helps you find work-friendly rentals in beautiful locations so you can enjoy some nice
                weather even when you're not on vacation.
            </p>
            <div class="mt-4 sm:mt-6 space-x-2">
                <a href="#" class="btn btn-indigo shadow-lg sm:text-base">Book your escape</a>
                <a href="#" class="btn btn-gray shadow-lg sm:text-base">Learn more</a>
            </div>
        </div>
    </div>
    <div class="hidden lg:block lg:w-1/2 lg:relative">
        <img class="absolute inset-0 w-full h-full object-cover object-center" src="/img/beach-work.jpg"
            alt="Woman workcation">
    </div>
</div>
<hey-stack></hey-stack>
<popular-destinations></popular-destinations>
<properties></properties>
@endsection