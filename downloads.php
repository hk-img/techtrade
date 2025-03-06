<?php include_once('header.php'); ?>
  <div
    class="w-full bg-[#E7EFFA] rounded-bl-[3.563rem] rounded-br-[3.563rem] py-12 lg:py-0 lg:h-96 h-auto mt-24 relative overflow-hidden flex   items-center justify-center">
    <div
      class="2xl:px-24 3xl:px-36 lg:pb-3  px-6 lg:px-8  w-full mx-auto flex items-center justify-between flex-col lg:flex-row relative z-10">
      <div class="flex flex-col justify-start font-serif space-y-3 text-black lg:text-left text-left">
        <h1 class="text-xl lg:text-[2.25rem]  font-heading font-bold">Downloads</h1>
        <p class="lg:text-[1.25rem] text-lg font-serif font-medium ">
          Listed here are some important forms, documents and software setups.
        </p>
        
        <ul class="flex font-serif space-x-2 items-center lg:text-[1.2rem]">
          <li>Home</li>
          <li class="-mt-2">.</li>
          <li class="text-[#1B1E31] font-bold"> Downloads</li>
        </ul>
      </div>
      <img src="assets/img/downbg.png" alt="" class="w-[84%] lg:w-[35%]">
    </div>

    <img src="assets/img/headside-img.png" alt="" class=" h-full absolute top-0 right-0  z-0">
    <img src="assets/img/headbg2.png" alt="" class="w-[93%] top-[50px] left-[150px] absolute    z-0">
    <img src="assets/img/headbg3.png" alt="" class=" w-[67%] left-[6px] -bottom-[81px]  absolute    z-0">
  </div>

  <section class="w-full  relative bg-white pt-[72px]">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3  px-6 lg:px-8    lg:w-full mx-auto flex flex-col space-y-5">
      <div class="flex justify-between items-center cursor-pointer" onclick="toggleAccordion(1)">
        <h1 class="font-heading text-2xl font-bold text-[#1B1E31]">Forms</h1>
        <svg  id="icon-1" class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
          <path d="M19 9l-7 7-7-7"></path>
      </svg>
      </div>

      <div class="grid grid-cols-1  gap-2  lg:grid-cols-3  max-h-0 overflow-hidden transition-all duration-500" id="content-1" style="max-height: auto;">
        <div class="flex space-y-3 flex-col">
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Account Opening Form</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif">Email/Mobile No. Change Form</h1>
            </div>
            <div class="flex space-x-2 px">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">NDML – Individual Autorisation Form</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Reactivation of Trading Account</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="flex space-y-3  flex-col">
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Bank Change Form</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif">Electronic Authorisation Form</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Nomination Form</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Reissuance of DIS Letter (In case of Lost/Misplaced DIS)
              </h1>
            </div>
            <div class="flex space-x-2 pl-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="flex space-y-3  flex-col">
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">CDSL/NSDL Account Closure Form</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif">Combined Modification Form</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">NSDL Change in Signature Form</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Running Account Authorisation</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>












        </div>

      </div>

    </div>
  </section>

  <section class="w-full py-6 relative bg-white">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3  px-6 lg:px-8    lg:w-full mx-auto flex flex-col space-y-[14px]">
      <div class="flex justify-between items-center cursor-pointer " onclick="toggleAccordion(2)">
        <h1 class="font-heading text-2xl font-bold text-[#1B1E31]">Policies</h1>
        <svg  id="icon-2" class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
          <path d="M19 9l-7 7-7-7"></path>
      </svg>
      </div>

      <div class="grid grid-cols-1  gap-2  lg:grid-cols-3 max-h-0 overflow-hidden transition-all duration-500" id="content-2">

        <div class="flex space-y-3  flex-col">
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Authorised Person Policy</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif">Code of Conduct Policy</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Cyber Security Policy</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Dormant Account Policy</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Internet Access Policy
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">PMLA Policy</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">
                Risk Management System Policy</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">
                Surveillance Policy
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">
                Patch Management Policy
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">

                Technical Glitch Policy
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>











        </div>
        <div class="flex space-y-3  flex-col">
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Client Code Modification and Error Code Policy</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif">CSR Policy</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Data Disposal and Data Retention Policy</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Disaster Management and Retention Policy</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Investor Grievance Redressal Policy
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Policy for Pre-Funded Instruments</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center ">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm   font-serif ">
                Shortages In Obligation Arising Out of Internal Netting of Trades</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">
                Tools and Recovery Plan of Cyber Attack
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">
                Password Policy & Procedure
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">

                Internal Shortage Policy
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>











        </div>
        <div class="flex space-y-3  flex-col">
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">CDSL/NSDL Account Closure Form</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif">Customer Acceptance Policy/h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Data Protection and Data Encryption Policy</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Internal Control Policy</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Policy on Management of Conflict of Interests
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Policy Regarding Treatment Of Inactive Dormant Accounts
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">
                Surveillance Policy of Depository Participant</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">
                Policy on Conflict Of Interest
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">
                Policy For Unauthorized News Circulation & Code Of Conduct
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">

                Internet Access Policy
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>











        </div>



      </div>

    </div>
  </section>


  <section class="w-full py-3 relative bg-white">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3  px-6 lg:px-8    lg:w-full mx-auto flex flex-col space-y-[14px]">
      <div class="flex justify-between items-center cursor-pointer " onclick="toggleAccordion(3)">
        <h1 class="font-heading text-2xl font-bold text-[#1B1E31]">Cyber Policy</h1>
        <svg  id="icon-3" class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
          <path d="M19 9l-7 7-7-7"></path>
      </svg>
      </div>

      <div class="grid lg:grid-cols-3 grid-cols-1    max-h-0 overflow-hidden transition-all duration-500" id="content-3">

        <div class="flex space-y-3  flex-col">
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Cyber Policy</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>



        </div>
        <div class="flex space-y-3  flex-col">

        </div>
        <div class="flex space-y-3  flex-col">

        </div>




      </div>

    </div>
  </section>


  <section class="w-full py-[10px] relative bg-white">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3  px-6 lg:px-8    lg:w-full mx-auto  flex flex-col space-y-[14px] ">
      <div class=" flex justify-between items-center cursor-pointer " onclick="toggleAccordion(4)">
        <h1 class="font-heading text-2xl font-bold text-[#1B1E31]">Account Related Form</h1>
        <svg  id="icon-4" class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
          <path d="M19 9l-7 7-7-7"></path>
      </svg>
      </div>

      <div class="grid grid-cols-1  gap-2  lg:grid-cols-3 max-h-0 overflow-hidden transition-all duration-500" id="content-4">

        <div class="flex space-y-3  flex-col">
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Client Copy Pdf</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif">Document List (Huf) pdf 3</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>



        </div>

        <div class="flex space-y-3  flex-col">
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Document (Non individual) pdf 2</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>




        </div>
        <div class="flex space-y-3  flex-col">
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif ">Document Checklist pdf 1</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>






        </div>

      </div>

    </div>
  </section>

  <section class="w-full py-4  relative bg-white">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3  px-6 lg:px-8 flex flex-col space-y-[14px]   lg:w-full mx-auto">
      <div class="flex justify-between items-center cursor-pointer  " onclick="toggleAccordion(5)">
        <h1 class="font-heading text-2xl font-bold text-[#1B1E31]">Vernacular Language</h1>
        <svg  id="icon-5" class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
          <path d="M19 9l-7 7-7-7"></path>
      </svg>
      </div>

      <div class="grid grid-cols-1  lg:px-0 gap-2  lg:grid-cols-3 max-h-0 overflow-hidden transition-all duration-500" id="content-5" >

        <div class="flex space-y-3  flex-col">
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">Assame Annexure 1</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif">Bengali Annexure 1</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">Gujarati Annexure 1</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">Hindi Annexure 1</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">Kannada Annexure 1
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">Kashmari Annexure 1</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">
                Konkani Annexure 1</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">
                Malyalam Annexure 1
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">
                Marathi Annexure 1
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">

                Oriya Annexure 1
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">

                Punjabi Annexure 1
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">

                Sindhi Annexure 1
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">

                Tamil Annexure 1
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">

                Telgu Annexure 1
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">

                Urdu Annexure 1
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

        </div>

        <div class="flex space-y-3  flex-col">
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">Assame Annexure 2</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif">Bengali Annexure 2</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">Gujarati Annexure 2</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">Hindi Annexure 2</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">Kannada Annexure 2
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">Kashmari Annexure 2</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">
                Konkani Annexure 2</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">
                Malyalam Annexure 2
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">
                Marathi Annexure 2
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">

                Oriya Annexure 2
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">

                Punjabi Annexure 2
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">

                Sindhi Annexure 2
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">

                Tamil Annexure 2
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">

                Telgu Annexure 2
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">

                Urdu Annexure 2
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

        </div>

        <div class="flex space-y-3  flex-col">
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">Assame Annexure 3</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold text-sm  font-serif">Bengali Annexure 3</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">Gujarati Annexure 3</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">Hindi Annexure 3</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">Kannada Annexure 3
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">Kashmari Annexure 3</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">
                Konkani Annexure 3</h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">
                Malyalam Annexure 3
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">
                Marathi Annexure 3
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">

                Oriya Annexure 3
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">

                Punjabi Annexure 3
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">

                Sindhi Annexure 3
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">

                Tamil Annexure 3
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">

                Telgu Annexure 3
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <h1 class="font-semibold lg:text-sm text-xs font-serif lg:">

                Urdu Annexure 3
              </h1>
            </div>
            <div class="flex space-x-2">
              <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                <span class="text-white "><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                    </path>
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="m176 272 80 80 80-80M256 48v288"></path>
                  </svg></span>
              </div>
              <div class="bg-[#C5D8F3] p-2 rounded-lg flex justify-center items-center">
                <span class="text-[#004AAD]">
                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                    <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                    <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                    <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <path
                      d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0">
                    </path>
                  </svg>
                </span>
              </div>
            </div>
          </div>

        </div>



      </div>

    </div>
  </section>
<?php include_once('footer.php'); ?>