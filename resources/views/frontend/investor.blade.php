@extends('layouts.app')

@push('title',__(' Investor Charter'))

@section('content')
<div class="w-full bg-[#E7EFFA] rounded-bl-[3.563rem] rounded-br-[3.563rem] py-12 lg:py-0 lg:h-96 h-auto mt-24 relative overflow-hidden flex items-center justify-center">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 px-6 lg:px-8 w-full mx-auto flex items-center justify-between flex-col lg:flex-row relative z-10">
        <div class="flex flex-col justify-start font-serif space-y-3 text-black lg:text-left text-left">
            <h1 class="text-xl lg:text-[2.5rem] font-heading font-bold">Investor Charter</h1>
            <p class="lg:text-[1.125rem] font-serif text-[#1B1E31] font-medium">
                Investor Charter outlines investor rights, responsibilities, and protections to ensure <br />
                transparency and fair practices in financial markets.
            </p>
            <ul class="flex font-serif space-x-2 items-center lg:text-[1.125rem]">
                <li>Home</li>
                <li class="-mt-2">.</li>
                <li class="font-bold text-[#1B1E31]">Investor Charter</li>
            </ul>
        </div>
        <img src="assets/img/invheadbg.png" alt="" class="w-1/2 lg:w-[35%]" />
    </div>

    <img src="assets/img/headside-img.png" alt="" class="h-full absolute lg:top-0 top-4 lg:right-0 z-0" />
    <img src="assets/img/headbg2.png" alt="" class="w-[90%] top-[35px] left-[150px] absolute z-0" />
    <img src="assets/img/headbg3.png" alt="" class="w-[60%] left-[6px] -bottom-[81px] absolute z-0" />
</div>

<section class="w-full py-[80px] relative bg-white">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 px-6 lg:px-8 lg:w-full mx-auto flex flex-col space-y-[14px]">
        <div>
            <h1 class="font-heading text-2xl font-bold text-[#1B1E31]"><a href="investor-charter">Investor Charter</a></h1>
        </div>

        <div class="grid grid-cols-1 gap-2 lg:grid-cols-3">
            <div class="flex space-y-3 flex-col">
                <a href="https://drive.google.com/open?id=19rI38Gs7_TNEFrhHMy7JEJrHaYXCXpeF&usp=drive_copy" target="_blank">
                    <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                        <div class="flex space-x-2">
                            <div class="w-9 h-9 overflow-hidden">
                                <img src="assets/img/pdf.png" alt="" class="w-full h-full" />
                            </div>
                            <h1 class="font-semibold text-sm font-serif w-full">Investor Charter – Stock Broker</h1>
                        </div>
                        <div class="flex space-x-2">
                            <div class="bg-[#004AAD] min-w-[31px] min-h-[30px] w-8 h-8 flex justify-center items-center rounded-lg">
                                <span class="text-white">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40"></path>
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="m176 272 80 80 80-80M256 48v288"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="bg-[#C5D8F3] min-w-[31px] min-h-[30px] w-8 h-8 rounded-lg flex justify-center items-center">
                                <span class="text-[#004AAD]">
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

                <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                    <div class="flex space-x-2">
                        <div class="w-9 h-9 overflow-hidden">
                            <img src="assets/img/pdf.png" alt="" class="w-full h-full" />
                        </div>
                        <h1 class="font-semibold text-sm font-serif w-full">Complaints Data of DP</h1>
                    </div>
                    <div class="flex space-x-2">
                        <div class="bg-[#004AAD] min-w-[31px] min-h-[30px] w-8 h-8 flex justify-center items-center rounded-lg">
                            <span class="text-white">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40"></path>
                                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="m176 272 80 80 80-80M256 48v288"></path>
                                </svg>
                            </span>
                        </div>
                        <div class="bg-[#C5D8F3] min-w-[31px] min-h-[30px] w-8 h-8 rounded-lg flex justify-center items-center">
                            <span class="text-[#004AAD]">
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
            </div>

            <div class="flex space-y-3 flex-col">
                <a href="https://drive.google.com/open?id=19rI38Gs7_TNEFrhHMy7JEJrHaYXCXpeF&usp=drive_copy" target="_blank">
                    <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                        <div class="flex space-x-2">
                            <div class="w-9 h-9 overflow-hidden">
                                <img src="assets/img/pdf.png" alt="" class="w-full h-full" />
                            </div>
                            <h1 class="font-semibold text-sm font-serif w-full">Investor Charter - DP</h1>
                        </div>
                        <div class="flex space-x-2">
                            <div class="bg-[#004AAD] min-w-[31px] min-h-[30px] w-8 h-8 flex justify-center items-center rounded-lg">
                                <span class="text-white">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40"></path>
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="m176 272 80 80 80-80M256 48v288"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="bg-[#C5D8F3] min-w-[31px] min-h-[30px] w-8 h-8 rounded-lg flex justify-center items-center">
                                <span class="text-[#004AAD]">
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
            </div>

            <div class="flex space-y-3 flex-col">
                <a href="" target="_blank">
                    <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                        <div class="flex space-x-2">
                            <div class="w-9 h-9 overflow-hidden">
                                <img src="assets/img/pdf.png" alt="" class="w-full h-full" />
                            </div>
                            <h1 class="font-semibold text-sm font-serif w-full">Complaints Data of Stock Broker</h1>
                        </div>
                        <div class="flex space-x-2">
                            <div class="bg-[#004AAD] min-w-[31px] min-h-[30px] w-8 h-8 flex justify-center items-center rounded-lg">
                                <span class="text-white">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40"></path>
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="m176 272 80 80 80-80M256 48v288"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="bg-[#C5D8F3] min-w-[31px] min-h-[30px] w-8 h-8 rounded-lg flex justify-center items-center">
                                <span class="text-[#004AAD]">
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
            </div>
        </div>
    </div>
</section>

@endsection