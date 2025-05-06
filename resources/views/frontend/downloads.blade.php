@extends('layouts.app')

@push('title',__(' Downloads'))

@section('content')
<div class="w-full bg-[#E7EFFA] rounded-bl-[3.563rem] rounded-br-[3.563rem] py-12 lg:py-0 lg:h-96 h-auto mt-24 relative overflow-hidden flex items-center justify-center">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 px-6 lg:px-8 w-full mx-auto flex items-center justify-between flex-col lg:flex-row relative z-10">
        <div class="flex flex-col justify-start font-serif space-y-3 text-black lg:text-left text-left">
            <div class="text-xl lg:text-[2.25rem] font-heading font-bold">Downloads</div>
            <p class="lg:text-[1.25rem] text-lg font-serif font-medium">
                Listed here are some important forms, documents and software setups.
            </p>
            <ul class="flex font-serif space-x-2 items-center lg:text-[1.2rem]">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="-mt-2">.</li>
                <li class="text-[#1B1E31] font-bold"><a href="downloads">Downloads</a></li>
            </ul>
        </div>
        <img src="assets/img/downbg.png" alt="" class="w-1/2 lg:w-[35%]" />
    </div>
    <img src="assets/img/headside-img.png" alt="" class="h-full absolute top-0 right-0 z-0" />
    <img src="assets/img/headbg2.png" alt="" class="w-[93%] top-[50px] left-[150px] absolute z-0" />
    <img src="assets/img/headbg3.png" alt="" class="w-[67%] left-[6px] -bottom-[81px] absolute z-0" />
</div>
@if(!empty($downloads))
    <div class="pt-[72px]">
    @foreach($downloads as $key => $value)
        @if(!empty($value->children) && count($value->children) > 0)
            <section class="w-full relative bg-white ">
                <div class="2xl:px-24 3xl:px-36 lg:pb-3 px-6 lg:px-8 lg:w-full mx-auto flex flex-col space-y-5 bg-gray-100 py-4 mb-2">
                    <div class="flex justify-between items-center cursor-pointer" onclick="toggleAccordion({{$key}})">
                        <div class="font-heading text-2xl font-bold text-[#1B1E31]">{{ ucfirst($value->name) }}</div>
                        <svg id="icon-{{$key}}" class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="grid overflow-hidden transition-all duration-500 max-h-0" id="content-{{$key}}">
                        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
                            @foreach($value->children as $child)
                                <a href="{{$child['link']}}" target="_blank">
                                    <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                                        <div class="flex space-x-2">
                                            <div class="w-9 h-9 overflow-hidden">
                                                <img src="assets/img/pdf.png" alt="" class="w-full h-full" />
                                            </div>
                                            <div class="font-semibold text-sm font-serif">{{ ucfirst($child['name']) }}</div>
                                        </div>
                                        <div class="flex space-x-2">
                                            <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                                                <span class="text-white">
                                                    <!-- Download icon -->
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40"></path>
                                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="m176 272 80 80 80-80M256 48v288"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                                                <span class="text-[#004AAD]">
                                                    <!-- View icon -->
                                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                                                        <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                                                        <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                                                        <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <path d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach
    </div>
@endif

@endsection