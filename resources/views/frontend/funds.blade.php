@extends('layouts.app')

@push('title',__(' Funds Transfer'))

@section('content')
<div class="w-full bg-[#E7EFFA] rounded-bl-[3.563rem] rounded-br-[3.563rem] py-12 lg:py-0 lg:h-96 h-auto mt-24 relative overflow-hidden flex items-center justify-center">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 px-6 lg:px-8 w-full mx-auto flex items-center justify-between flex-col lg:flex-row relative z-10">
        <div class="flex flex-col justify-start font-serif space-y-3 text-black lg:text-left text-left">
            <h1 class="text-xl lg:text-[2.5rem] font-heading font-bold">Funds Transfer</h1>
            <p class="lg:text-[1.125rem] font-serif text-[#1B1E31] font-medium">
                Transfer funds only from the bank account registered with Sanchit Financial & Management Services Ltd.
            </p>
            <ul class="flex font-serif space-x-2 items-center lg:text-[1.125rem]">
                <li>Home</li>
                <li class="-mt-2">.</li>
                <li class="font-bold text-[#1B1E31]"><a href="funds-transfer">Funds Transfer</a></li>
            </ul>
        </div>
        <img src="assets/img/fundsbg.png" alt="" class="w-1/2 lg:w-[35%]" />
    </div>

    <img src="assets/img/headside-img.png" alt="" class="h-full absolute lg:top-0 top-4 lg:right-0 z-0" />
    <img src="assets/img/headbg2.png" alt="" class="w-[90%] top-[35px] left-[150px] absolute z-0" />
    <img src="assets/img/headbg3.png" alt="" class="w-[60%] left-[6px] -bottom-[81px] absolute z-0" />
</div>

<section class="w-full pt-[60px] relative bg-white">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 px-6 lg:px-8 lg:w-full mx-auto flex flex-col space-y-[22px]">
        <div class="pt-5">
            <h1 class="font-heading text-xl lg:text-4xl font-bold text-black">
                <span class="text-[#C85103]">Funds Transfer</span>
                Via NEFT/IMPS/ <br />
                RTGS
            </h1>
        </div>

        <div class="w-full">
            <h1 class="text-sm lg:text-base font-serif text-[#666666] font-normal">
                You can add funds using NEFT/IMPS/RTGS using your Internet Banking by remitting the funds to SANCHIT’s bank account. You can add SANCHIT as Beneficiary (Payee) in your internet banking portal and transfer funds. Below are
                our beneficiary details:
            </h1>
        </div>

        <div class="w-full overflow-x-auto">
            <div class="flex w-full min-w-[900px] py-6 space-x-4 lg:flex-row">
                <!-- Left div -->
                <div class="w-full lg:w-1/3 flex flex-col space-y-2">
                    <div class="flex h-auto w-full space-x-2 px-4 py-3 rounded-md border border-gray-300 flex-row">
                        <span class="bg-gray-200 w-12 h-12 flex items-center justify-center rounded-full">01</span>
                        <h1 class="text-base lg:text-lg text-gray-800 py-2 font-semibold">For Segments</h1>
                    </div>
                    <div class="flex h-auto w-full space-x-2 px-4 py-3 rounded-md border border-gray-300 flex-row">
                        <span class="bg-gray-200 w-12 h-12 flex items-center justify-center rounded-full">02</span>
                        <h1 class="text-base lg:text-lg text-gray-800 py-2 font-semibold">Bank Name</h1>
                    </div>
                    <div class="flex h-auto w-full space-x-2 px-4 py-3 rounded-md border border-gray-300 flex-row">
                        <span class="bg-gray-200 w-12 h-12 flex items-center justify-center rounded-full">03</span>
                        <h1 class="text-base lg:text-lg text-gray-800 py-2 font-semibold">Account Title</h1>
                    </div>
                    <div class="flex h-auto w-full space-x-2 px-4 py-3 rounded-md border border-gray-300 flex-row">
                        <span class="bg-gray-200 w-12 h-12 flex items-center justify-center rounded-full">04</span>
                        <h1 class="text-base lg:text-lg text-gray-800 py-2 font-semibold">Account Number*</h1>
                    </div>
                    <div class="flex h-auto w-full space-x-2 px-4 py-3 rounded-md border border-gray-300 flex-row">
                        <span class="bg-gray-200 w-12 h-12 flex items-center justify-center rounded-full">05</span>
                        <h1 class="text-base lg:text-lg text-gray-800 py-2 font-semibold">Account Type</h1>
                    </div>
                    <div class="flex h-auto w-full space-x-2 px-4 py-3 rounded-md border border-gray-300 flex-row">
                        <span class="bg-gray-200 w-12 h-12 flex items-center justify-center rounded-full">06</span>
                        <h1 class="text-base lg:text-lg text-gray-800 py-2 font-semibold">Bank Branch</h1>
                    </div>
                    <div class="flex h-auto w-full space-x-2 px-4 py-3 rounded-md border border-gray-300 flex-row">
                        <span class="bg-gray-200 w-12 h-12 flex items-center justify-center rounded-full">07</span>
                        <h1 class="text-base lg:text-lg text-gray-800 py-2 font-semibold">IFSC Code</h1>
                    </div>
                </div>

                <!-- Right div -->
                <div class="w-full sm:w-full md:w-full lg:w-2/3 flex flex-col space-y-3">
                    <div class="w-full h-auto px-4 py-5 justify-start flex items-start rounded-md border border-gray-300">
                        <h1 class="font-medium text-sm lg:text-base text-gray-800">NSE (Equity, F&O)</h1>
                    </div>
                    <div class="w-full h-auto px-4 py-5 rounded-md border border-gray-300">
                        <h1 class="font-medium text-sm lg:text-base text-gray-800">HDFC Bank Ltd</h1>
                    </div>
                    <div class="w-full h-auto px-4 py-5 rounded-md border border-gray-300">
                        <h1 class="font-medium text-sm lg:text-base text-gray-800">SANCHIT FIN AND MGT S L USCNB AC</h1>
                    </div>
                    <div class="w-full h-auto px-4 py-1 lg:py-5 rounded-md border border-gray-300">
                        <h1 class="font-medium text-xs lg:text-base leading-7 text-gray-800">
                            Virtual Bank Account No. – SANFN7( YOUR CLIENT CODE) Virtual A/c no will be combination of Prefix (SANFN7) & Suffix (Client Code). For example, your client code is CJRM1 than bank account number written
                            as SANFN7CJRM1
                        </h1>
                    </div>
                    <div class="w-full h-auto px-4 py-5 rounded-md border border-gray-300">
                        <h1 class="font-medium text-sm lg:text-base text-gray-800">Current Account</h1>
                    </div>
                    <div class="w-full h-auto px-4 py-5 rounded-md border border-gray-300">
                        <h1 class="font-medium text-sm lg:text-base text-gray-800">ASHOK MARG C SCHEME – JAIPUR, RAJASTHAN</h1>
                    </div>
                    <div class="w-full h-auto px-4 py-5 rounded-md border border-gray-300">
                        <h1 class="font-medium text-sm lg:text-base text-gray-800">HDFC0000054</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w-full py-[50px] mb-1 lg:h-auto overflow-hidden relative bg-white" style="background-image: url('assets/img/fundslbg.png');">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 px-6 lg:px-8 lg:w-full mx-auto flex flex-col space-y-[22px]">
        <div class="justify-center flex mx-auto py-[20px]">
            <h1 class="font-heading text-xl lg:text-4xl font-bold text-black">
                <span class="text-[#C85103]"> Client</span>
                Accounts
            </h1>
        </div>

        <div class="lg:space-y-0 space-y-3 space-x-0 lg:space-x-6 grid grid-cols-1 lg:grid-cols-2">
            <div class="flex flex-col px-5 h-auto border border-[#D9D9D9] rounded-[10px] drop-shadow shadow-[#EAECEE1A]">
                <div class="flex flex-row justify-between">
                    <h1 class="font-heading font-bold py-2 text-lg text-black">Client Account</h1>
                    <span class="w-[70px] rounded-full text-[#C85103] mt-2 flex justify-center items-center bg-[#F5F5F5] h-[70px]">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="3rem" width="3rem" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6z"></path>
                            <path d="M6.201 18.744a4 4 0 0 1 3.799 -2.744h4a4 4 0 0 1 3.798 2.741"></path>
                            <path
                                d="M19.875 6.27c.7 .398 1.13 1.143 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z"
                            ></path>
                        </svg>
                    </span>
                </div>

                <div class="flex flex-col py-4 space-y-2">
                    <div class="flex flex-row gap-3">
                        <span class="w-[16px] py-1 h-[15px] text-[#3F3D56]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.47 250.9C88.82 328.1 158 397.6 224.5 485.5c72.3-143.8 146.3-288.1 268.4-444.37L460 26.06C356.9 135.4 276.8 238.9 207.2 361.9c-48.4-43.6-126.62-105.3-174.38-137z"></path>
                            </svg>
                        </span>
                        <h1 class="font-serif lg:text-base text-sm font-medium text-[#666666]">ICICI</h1>
                    </div>
                    <div class="flex flex-row gap-3">
                        <span class="w-[16px] py-1 h-[15px] text-[#3F3D56]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.47 250.9C88.82 328.1 158 397.6 224.5 485.5c72.3-143.8 146.3-288.1 268.4-444.37L460 26.06C356.9 135.4 276.8 238.9 207.2 361.9c-48.4-43.6-126.62-105.3-174.38-137z"></path>
                            </svg>
                        </span>
                        <h1 class="font-serif lg:text-base text-sm font-medium text-[#666666]">000705037385</h1>
                    </div>
                    <div class="flex flex-row gap-3">
                        <span class="w-[16px] py-1 h-[15px] text-[#3F3D56]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.47 250.9C88.82 328.1 158 397.6 224.5 485.5c72.3-143.8 146.3-288.1 268.4-444.37L460 26.06C356.9 135.4 276.8 238.9 207.2 361.9c-48.4-43.6-126.62-105.3-174.38-137z"></path>
                            </svg>
                        </span>
                        <h1 class="font-serif lg:text-base text-sm font-medium text-[#666666]">ICIC0000007</h1>
                    </div>
                    <div class="flex flex-row gap-3">
                        <span class="w-[16px] py-1 h-[15px] text-[#3F3D56]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.47 250.9C88.82 328.1 158 397.6 224.5 485.5c72.3-143.8 146.3-288.1 268.4-444.37L460 26.06C356.9 135.4 276.8 238.9 207.2 361.9c-48.4-43.6-126.62-105.3-174.38-137z"></path>
                            </svg>
                        </span>
                        <h1 class="font-serif lg:text-base text-sm font-medium text-[#666666]">M/S SANCHIT FIN. & MGT. SERVICES LTD.</h1>
                    </div>
                </div>
            </div>
            <div class="flex flex-col px-5 h-auto border border-[#D9D9D9] rounded-[10px] drop-shadow shadow shadow-[#EAECEE1A]">
                <div class="flex flex-row justify-between">
                    <h1 class="font-heading font-bold py-2 text-lg text-black">Client Account</h1>
                    <span class="w-[70px] rounded-full text-[#C85103] mt-2 flex justify-center items-center bg-[#F5F5F5] h-[70px]">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="3rem" width="3rem" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6z"></path>
                            <path d="M6.201 18.744a4 4 0 0 1 3.799 -2.744h4a4 4 0 0 1 3.798 2.741"></path>
                            <path
                                d="M19.875 6.27c.7 .398 1.13 1.143 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z"
                            ></path>
                        </svg>
                    </span>
                </div>
                <div class="flex flex-col py-4 space-y-2">
                    <div class="flex flex-row gap-3">
                        <span class="w-[16px] py-1 h-[15px] text-[#3F3D56]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.47 250.9C88.82 328.1 158 397.6 224.5 485.5c72.3-143.8 146.3-288.1 268.4-444.37L460 26.06C356.9 135.4 276.8 238.9 207.2 361.9c-48.4-43.6-126.62-105.3-174.38-137z"></path>
                            </svg>
                        </span>
                        <h1 class="font-serif lg:text-base text-sm font-medium text-[#666666]">HDFC</h1>
                    </div>
                    <div class="flex flex-row gap-3">
                        <span class="w-[16px] py-1 h-[15px] text-[#3F3D56]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.47 250.9C88.82 328.1 158 397.6 224.5 485.5c72.3-143.8 146.3-288.1 268.4-444.37L460 26.06C356.9 135.4 276.8 238.9 207.2 361.9c-48.4-43.6-126.62-105.3-174.38-137z"></path>
                            </svg>
                        </span>
                        <h1 class="font-serif lg:text-base text-sm font-medium text-[#666666]">57500001492020</h1>
                    </div>
                    <div class="flex flex-row gap-3">
                        <span class="w-[16px] py-1 h-[15px] text-[#3F3D56]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.47 250.9C88.82 328.1 158 397.6 224.5 485.5c72.3-143.8 146.3-288.1 268.4-444.37L460 26.06C356.9 135.4 276.8 238.9 207.2 361.9c-48.4-43.6-126.62-105.3-174.38-137z"></path>
                            </svg>
                        </span>
                        <h1 class="font-serif lg:text-base text-sm font-medium text-[#666666]">HDFC0000054</h1>
                    </div>
                    <div class="flex flex-row gap-3">
                        <span class="w-[16px] py-1 h-[15px] text-[#3F3D56]">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.47 250.9C88.82 328.1 158 397.6 224.5 485.5c72.3-143.8 146.3-288.1 268.4-444.37L460 26.06C356.9 135.4 276.8 238.9 207.2 361.9c-48.4-43.6-126.62-105.3-174.38-137z"></path>
                            </svg>
                        </span>
                        <h1 class="font-serif lg:text-base text-sm font-medium text-[#666666]">M/S SANCHIT FIN. & MGT. SERVICES LTD.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection