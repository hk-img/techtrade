<?php include_once('header.php'); ?>
  <div
    class="w-full bg-[#E7EFFA] rounded-bl-[3.563rem] rounded-br-[3.563rem] py-12 lg:py-0 lg:h-96 h-auto mt-24 relative overflow-hidden flex   items-center justify-center">
    <div
      class="2xl:px-24 3xl:px-36 lg:pb-3  px-6 lg:px-8  w-full mx-auto flex items-center justify-between flex-col lg:flex-row relative z-10">
      <div class="flex flex-col justify-start font-serif space-y-3 text-black lg:text-left text-left">
        <div class="text-xl lg:text-[2.25rem]  font-heading font-bold">Downloads</div>
        <p class="lg:text-[1.25rem] text-lg font-serif font-medium ">
          Listed here are some important forms, documents and software setups.
        </p>
        <ul class="flex font-serif space-x-2 items-center lg:text-[1.2rem]">
          <li>Home</li>
          <li class="-mt-2">.</li>
          <li class="text-[#1B1E31] font-bold"><a href="downloads">Downloads</a></li>
        </ul>
      </div>
      <img src="assets/img/downbg.png" alt="" class="w-1/2 lg:w-[35%]">
    </div>
    <img src="assets/img/headside-img.png" alt="" class=" h-full absolute top-0 right-0  z-0">
    <img src="assets/img/headbg2.png" alt="" class="w-[93%] top-[50px] left-[150px] absolute    z-0">
    <img src="assets/img/headbg3.png" alt="" class=" w-[67%] left-[6px] -bottom-[81px]  absolute    z-0">
  </div>

  <section class="w-full  relative bg-white pt-[72px]">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 px-6 lg:px-8 lg:w-full mx-auto flex flex-col space-y-5 bg-gray-100 py-4  mb-2">
      <div class="flex justify-between items-center cursor-pointer" onclick="toggleAccordion(1)">
        <div class="font-heading text-2xl font-bold text-[#1B1E31]">Forms</div>
        <svg  id="icon-1" class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
          <path d="M19 9l-7 7-7-7"></path>
        </svg>
      </div>
      <div class="grid grid-cols-1 gap-2 lg:grid-cols-3 max-h-0 overflow-hidden transition-all duration-500 " id="content-1" style="max-height: auto;">
        <div class="flex space-y-3 flex-col">
          <a href="https://drive.google.com/file/d/1JpKiDawLnQin_OPutJwojU9zUmsdH5XN/view" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold text-sm  font-serif ">Account Opening Form</div>
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
          </a>
          <a href="https://drive.google.com/file/d/1Wt_VJLEQWuV3HQ0YohUdqWiCp8vRGSHh/view" target="_blank">
            <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold text-sm  font-serif">Email/Mobile No. Change Form</div>
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
          </a>
          <a href="https://drive.google.com/file/d/1Ozr-rMAxXDjcPL-s5xV3SU1aUapSAHOo/view" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold text-sm  font-serif ">NDML – Individual Autorisation Form</div>
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
          </a>
          <a href="https://drive.google.com/file/d/1YmVCw8Vf8EZGQ877rQR2N9B9G72tvnJj/view" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold text-sm font-serif">Reactivation of Trading Account</div>
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
          </a>
          <a href="https://drive.google.com/file/d/17nW5S-tBO7SJXniY-1fTHy5AsGJ9i6PM/view" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold text-sm font-serif">Due Diligence</div>
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
          </a>
        </div>       
        <div class="flex space-y-3 flex-col">
            <a href="https://drive.google.com/file/d/1mpNgDt4S2UF_tRVvNk0G3BARy5xWpXtW/view" target="_blank">
              <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                <div class="flex space-x-2">
                  <div class="w-9 h-9 overflow-hidden">
                    <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                  </div>
                  <div class="font-semibold text-sm  font-serif ">Bank Change Form</div>
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
            </a>
            <a href="https://drive.google.com/file/d/1dt9ZMCmY0xPxKgwkBP0CmB8YUy2c6SwE/view" target="_blank">
              <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
                <div class="flex space-x-2">
                  <div class="w-9 h-9 overflow-hidden">
                    <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                  </div>
                  <div class="font-semibold text-sm  font-serif">Electronic Authorisation Form</div>
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
            </a>
            <a href="https://docs.google.com/document/d/1YDIPieqxOO52BWr15OePM_PlBtccnfdK/edit?tab=t.0#heading=h.gjdgxs" target="_blank">
              <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                <div class="flex space-x-2">
                  <div class="w-9 h-9 overflow-hidden">
                    <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                  </div>
                  <div class="font-semibold text-sm  font-serif ">Nomination Form</div>
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
            </a>
            <a href="https://drive.google.com/file/d/1EDwf0NXnVak570mQ8OEhEIDOjw0Yn5c5/view" target="_blank">
              <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                <div class="flex space-x-2">
                  <div class="w-9 h-9 overflow-hidden">
                    <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                  </div>
                  <div class="font-semibold text-sm  font-serif">Reissuance of DIS Letter (In case of Lost/Misplaced DIS)
                  </div>
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
            </a>
            <a href="https://drive.google.com/file/d/1cb8dsDfXzavCu5BlsJOEfyzh4bafHPKF/view" target="_blank">
              <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
                <div class="flex space-x-2">
                  <div class="w-9 h-9 overflow-hidden">
                    <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                  </div>
                  <div class="font-semibold text-sm  font-serif">Notifier Intimation</div>
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
            </a>
        </div>
        <div class="flex space-y-3 flex-col">
            <a href="https://drive.google.com/file/d/1YKHuICeD8HkQLmkXm1X9G6qXajewjl4D/view" target="_blank">
              <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                <div class="flex space-x-2">
                  <div class="w-9 h-9 overflow-hidden">
                    <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                  </div>
                  <div class="font-semibold text-sm  font-serif ">CDSL/NSDL Account Closure Form</div>
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
            </a>
            <a href="https://drive.google.com/file/d/1dt9ZMCmY0xPxKgwkBP0CmB8YUy2c6SwE/view" target="_blank">
                <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                    <div class="w-9 h-9 overflow-hidden">
                      <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                    </div>
                    <div class="font-semibold text-sm  font-serif">Combined Modification Form</div>
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
            </a>
            <a href="https://drive.google.com/file/d/1mCEGg4I3CnUt4anh_idTOwQ1hlAy-RWl/view" target="_blank">
                <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                    <div class="w-9 h-9 overflow-hidden">
                      <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                    </div>
                    <div class="font-semibold text-sm  font-serif ">NSDL Change in Signature Form</div>
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
            </a>
            <a href="https://drive.google.com/file/d/1ou-UZrHCT8k9pcoQhG0ONqWICiGswVSS/view" target="_blank">
              <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                <div class="flex space-x-2">
                  <div class="w-9 h-9 overflow-hidden">
                    <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                  </div>
                  <div class="font-semibold text-sm font-serif">Running Account Authorisation</div>
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
            </a>            
            <a href="https://drive.google.com/file/d/1MEkmHB2WWL-SyZXmp8J369xplNVVsYYH/view" target="_blank">
              <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                <div class="flex space-x-2">
                  <div class="w-9 h-9 overflow-hidden">
                    <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                  </div>
                  <div class="font-semibold text-sm font-serif">NSDL - Transmission</div>
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
            </a>
        </div>
        <div class="flex space-y-3 flex-col">
          <a href="https://techtrade.in/wp-content/uploads/Off-Market-Addition-of-beneficiary-details-1.pdf" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold text-sm font-serif">Beneficiary Details</div>
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
          </a>
        </div>       
      </div>
    </div>
  </section>

  <section class="w-full relative bg-white">
   <div class="2xl:px-24 3xl:px-36 lg:pb-3 px-6 lg:px-8 lg:w-full mx-auto flex flex-col space-y-[14px] bg-gray-100 py-4  mb-2">
      <div class="flex justify-between items-center cursor-pointer" onclick="toggleAccordion(2)">
         <div class="font-heading text-2xl font-bold text-[#1B1E31]">Policies</div>
         <svg  id="icon-2" class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M19 9l-7 7-7-7"></path>
         </svg>
      </div>
      <div class="grid grid-cols-1 gap-2 lg:grid-cols-3 max-h-0 overflow-hidden transition-all duration-500" id="content-2">
         <div class="flex space-y-3 flex-col">
            <a href="https://drive.google.com/file/d/1dCFtC4KGN8dLx74VOxn8Ji-6R6x4CL3l/view?usp=drive_link" target="_blank">
               <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                     <div class="w-9 h-9 overflow-hidden">
                        <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                     </div>
                     <div class="font-semibold text-sm font-serif">Authorised Person Policy</div>
                  </div>
                  <div class="flex space-x-2">
                     <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                        <span class="text-white ">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                              viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                              </path>
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="m176 272 80 80 80-80M256 48v288"></path>
                           </svg>
                        </span>
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
            </a>
            <a href="https://drive.google.com/file/d/1TXZmTeyB2HJXdHOsMDP60B1tpeoiGy4I/view" target="_blank">
               <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                     <div class="w-9 h-9 overflow-hidden">
                        <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                     </div>
                     <div class="font-semibold text-sm  font-serif">Code of Conduct Policy</div>
                  </div>
                  <div class="flex space-x-2">
                     <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                        <span class="text-white ">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                              viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                              </path>
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="m176 272 80 80 80-80M256 48v288"></path>
                           </svg>
                        </span>
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
            </a>
            <a href="https://drive.google.com/file/d/1HWIlmK-jHaS7g_kwp5eyefn904YHoPn0/view?usp=drive_link" target="_blank">
               <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                     <div class="w-9 h-9 overflow-hidden">
                        <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                     </div>
                     <div class="font-semibold text-sm  font-serif ">Cyber Security Policy</div>
                  </div>
                  <div class="flex space-x-2">
                     <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                        <span class="text-white ">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                              viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                              </path>
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="m176 272 80 80 80-80M256 48v288"></path>
                           </svg>
                        </span>
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
            </a>
            <a href="https://drive.google.com/file/d/1s84pYE_19Doj6OuZRA1NmYgUtaD0J5aK/view" target="_blank">
               <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                     <div class="w-9 h-9 overflow-hidden">
                        <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                     </div>
                     <div class="font-semibold text-sm  font-serif ">Dormant Account Policy</div>
                  </div>
                  <div class="flex space-x-2">
                     <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                        <span class="text-white ">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                              viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                              </path>
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="m176 272 80 80 80-80M256 48v288"></path>
                           </svg>
                        </span>
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
            </a>
            <a href="https://docs.google.com/document/d/1go2T1v1MlQA3aoEo3KDE6f4Q46ouIini/edit?tab=t.0" target="_blank">
               <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                     <div class="w-9 h-9 overflow-hidden">
                        <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                     </div>
                     <div class="font-semibold text-sm font-serif">Internet Access Policy
                     </div>
                  </div>
                  <div class="flex space-x-2">
                     <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                        <span class="text-white ">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                              viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                              </path>
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="m176 272 80 80 80-80M256 48v288"></path>
                           </svg>
                        </span>
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
            </a>
            <a href="https://drive.google.com/file/d/1OA01QNws9Mg_7KnYgGfQ2tK1bTg-jNJP/view?usp=drive_link" target="_blank">
               <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                     <div class="w-9 h-9 overflow-hidden">
                        <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                     </div>
                     <div class="font-semibold text-sm  font-serif ">PMLA Policy</div>
                  </div>
                  <div class="flex space-x-2">
                     <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                        <span class="text-white ">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                              viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                              </path>
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="m176 272 80 80 80-80M256 48v288"></path>
                           </svg>
                        </span>
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
            </a>
            <a href="https://drive.google.com/file/d/1b7psQ35hZwkrOSYSxUigJx1AnrrQ694R/view?usp=drive_link" target="_blank">
               <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                     <div class="w-9 h-9 overflow-hidden">
                        <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                     </div>
                     <div class="font-semibold text-sm  font-serif ">
                        Risk Management System Policy
                     </div>
                  </div>
                  <div class="flex space-x-2">
                     <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                        <span class="text-white ">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                              viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                              </path>
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="m176 272 80 80 80-80M256 48v288"></path>
                           </svg>
                        </span>
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
            </a>
            <a href="https://drive.google.com/file/d/1LKeFyCCheOgBvRX5hd0lE27HL12BLpy2/view?usp=drive_link" target="_blank">
               <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                     <div class="w-9 h-9 overflow-hidden">
                        <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                     </div>
                     <div class="font-semibold text-sm  font-serif ">
                        Surveillance Policy
                     </div>
                  </div>
                  <div class="flex space-x-2">
                     <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                        <span class="text-white ">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                              viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                              </path>
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="m176 272 80 80 80-80M256 48v288"></path>
                           </svg>
                        </span>
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
            </a>
            <a href="https://drive.google.com/file/d/1qJKKRSli5Ol6YquMBg4HGc8M0X9kkgvm/view?usp=drive_link" target="_blank">
               <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                     <div class="w-9 h-9 overflow-hidden">
                        <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                     </div>
                     <div class="font-semibold text-sm  font-serif ">
                        Patch Management Policy
                     </div>
                  </div>
                  <div class="flex space-x-2">
                     <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                        <span class="text-white ">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                              viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                              </path>
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="m176 272 80 80 80-80M256 48v288"></path>
                           </svg>
                        </span>
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
            </a>
            <a href="https://drive.google.com/file/d/1wNLUMKso584V836PMpZzMt1MVeaUluoq/view?usp=drive_link" target="_blank">
               <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                     <div class="w-9 h-9 overflow-hidden">
                        <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                     </div>
                     <div class="font-semibold text-sm  font-serif ">
                        Technical Glitch Policy
                     </div>
                  </div>
                  <div class="flex space-x-2">
                     <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                        <span class="text-white ">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                              viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                              </path>
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="m176 272 80 80 80-80M256 48v288"></path>
                           </svg>
                        </span>
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
            </a>
         </div>
         <div class="flex space-y-3 flex-col">
            <a href="https://drive.google.com/file/d/1SEEZwwLUHpF0VtqIoGBGUmApooiMAKgL/view?usp=drive_link" target="_blank">
               <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                     <div class="w-9 h-9 overflow-hidden">
                        <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                     </div>
                     <div class="font-semibold text-sm  font-serif ">Client Code Modification and Error Code Policy</div>
                  </div>
                  <div class="flex space-x-2">
                     <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                        <span class="text-white ">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                              viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                              </path>
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="m176 272 80 80 80-80M256 48v288"></path>
                           </svg>
                        </span>
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
            </a>
            <a href="https://drive.google.com/file/d/1RmCEQ1ldajmjIcYFYKoM92_OwFd4CGLW/view?usp=drive_link" target="_blank">
               <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                     <div class="w-9 h-9 overflow-hidden">
                        <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                     </div>
                     <div class="font-semibold text-sm  font-serif">CSR Policy</div>
                  </div>
                  <div class="flex space-x-2">
                     <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                        <span class="text-white ">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                              viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                              </path>
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="m176 272 80 80 80-80M256 48v288"></path>
                           </svg>
                        </span>
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
            </a>
            <a href="https://drive.google.com/file/d/1b_wcPeQ_Xv0RTou7_9AtNMYpcABCTsks/view?usp=drive_link" target="_blank">
               <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                     <div class="w-9 h-9 overflow-hidden">
                        <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                     </div>
                     <div class="font-semibold text-sm  font-serif ">Data Disposal and Data Retention Policy</div>
                  </div>
                  <div class="flex space-x-2">
                     <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                        <span class="text-white ">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                              viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                              </path>
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="m176 272 80 80 80-80M256 48v288"></path>
                           </svg>
                        </span>
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
            </a>
            <a href="https://drive.google.com/file/d/1LMAFXaGOaEln-b9TZmnCNoFUDDWvfsLj/view?usp=drive_link" target="_blank">
               <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                     <div class="w-9 h-9 overflow-hidden">
                        <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                     </div>
                     <div class="font-semibold text-sm  font-serif ">Disaster Management and Retention Policy</div>
                  </div>
                  <div class="flex space-x-2">
                     <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                        <span class="text-white ">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                              viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                              </path>
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="m176 272 80 80 80-80M256 48v288"></path>
                           </svg>
                        </span>
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
            </a>
            <a href="https://drive.google.com/file/d/1v1pVgARaMVCp2AXR7ZuKC9fd1--JFd_w/view?usp=drive_link" target="_blank">
               <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                     <div class="w-9 h-9 overflow-hidden">
                        <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                     </div>
                     <div class="font-semibold text-sm  font-serif ">Investor Grievance Redressal Policy
                     </div>
                  </div>
                  <div class="flex space-x-2">
                     <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                        <span class="text-white ">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                              viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                              </path>
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="m176 272 80 80 80-80M256 48v288"></path>
                           </svg>
                        </span>
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
            </a>
            <a href="https://drive.google.com/file/d/1II8Orm2vYR3iEuChOFjXct_zQsCCDiLH/view?usp=drive_link" target="_blank">
               <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                     <div class="w-9 h-9 overflow-hidden">
                        <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                     </div>
                     <div class="font-semibold text-sm  font-serif ">Policy for Pre-Funded Instruments</div>
                  </div>
                  <div class="flex space-x-2">
                     <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                        <span class="text-white ">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                              viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                              </path>
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="m176 272 80 80 80-80M256 48v288"></path>
                           </svg>
                        </span>
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
            </a>
            <a href="https://drive.google.com/file/d/19xbx8wWJz3Y9fOx-RITvCZMn2CeRbc_h/view?usp=drive_link" target="_blank">
               <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center ">
                  <div class="flex space-x-2">
                     <div class="w-9 h-9 overflow-hidden">
                        <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                     </div>
                     <div class="font-semibold text-sm   font-serif ">
                        Shortages In Obligation Arising Out of Internal Netting of Trades
                     </div>
                  </div>
                  <div class="flex space-x-2">
                     <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                        <span class="text-white ">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                              viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                              </path>
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="m176 272 80 80 80-80M256 48v288"></path>
                           </svg>
                        </span>
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
            </a>
            <a href="https://drive.google.com/file/d/1oD1EGxD5C9xNhFNpmnwh11kNpm3lRTr9/view?usp=drive_link" target="_blank">
               <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                     <div class="w-9 h-9 overflow-hidden">
                        <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                     </div>
                     <div class="font-semibold text-sm  font-serif ">
                        Tools and Recovery Plan of Cyber Attack
                     </div>
                  </div>
                  <div class="flex space-x-2">
                     <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                        <span class="text-white ">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                              viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                              </path>
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="m176 272 80 80 80-80M256 48v288"></path>
                           </svg>
                        </span>
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
            </a>
            <a href="https://drive.google.com/file/d/1CiF2b8PXd4JnXJmb_ZAunvehhVUzdQNW/view?usp=drive_link" target="_blank">
               <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                     <div class="w-9 h-9 overflow-hidden">
                        <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                     </div>
                     <div class="font-semibold text-sm  font-serif ">
                        Password Policy & Procedure
                     </div>
                  </div>
                  <div class="flex space-x-2">
                     <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                        <span class="text-white ">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                              viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                              </path>
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="m176 272 80 80 80-80M256 48v288"></path>
                           </svg>
                        </span>
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
            </a>
            <a href="https://docs.google.com/document/d/1dhZkKMOkGC6WNYUy6iWkmiwxaC7pW8sr/edit?tab=t.0" target="_blank">
               <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                  <div class="flex space-x-2">
                     <div class="w-9 h-9 overflow-hidden">
                        <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                     </div>
                     <div class="font-semibold text-sm  font-serif ">
                        Internal Shortage Policy
                     </div>
                  </div>
                  <div class="flex space-x-2">
                     <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                        <span class="text-white ">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                              viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                              </path>
                              <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                 d="m176 272 80 80 80-80M256 48v288"></path>
                           </svg>
                        </span>
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
            </a>
         </div>
         <div class="flex space-y-3 flex-col">
          <a href="https://drive.google.com/file/d/1YKHuICeD8HkQLmkXm1X9G6qXajewjl4D/view" target="_blank">
              <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                <div class="flex space-x-2">
                    <div class="w-9 h-9 overflow-hidden">
                      <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                    </div>
                    <div class="font-semibold text-sm  font-serif ">CDSL/NSDL Account Closure Form</div>
                </div>
                <div class="flex space-x-2">
                    <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                      <span class="text-white ">
                          <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                            </path>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="m176 272 80 80 80-80M256 48v288"></path>
                          </svg>
                      </span>
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
          </a>
          <a href="https://drive.google.com/file/d/1ZHw7QeSKc6jvj9DpxQ7SYpTyAdGpsfs8/view?usp=drive_link" target="_blank">
              <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
                <div class="flex space-x-2">
                    <div class="w-9 h-9 overflow-hidden">
                      <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                    </div>
                    <div class="font-semibold text-sm  font-serif">Customer Acceptance Policy</div>
                </div>
                <div class="flex space-x-2">
                    <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                      <span class="text-white ">
                          <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                            </path>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="m176 272 80 80 80-80M256 48v288"></path>
                          </svg>
                      </span>
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
          </a>
          <a href="https://drive.google.com/file/d/1_eaYyWr830e2C0GNkXiMkEuTDMaaZqUf/view?usp=drive_link" target="_blank">
              <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                <div class="flex space-x-2">
                    <div class="w-9 h-9 overflow-hidden">
                      <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                    </div>
                    <div class="font-semibold text-sm  font-serif ">Data Protection and Data Encryption Policy</div>
                </div>
                <div class="flex space-x-2">
                    <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                      <span class="text-white ">
                          <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                            </path>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="m176 272 80 80 80-80M256 48v288"></path>
                          </svg>
                      </span>
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
          </a>
          <a href="https://drive.google.com/file/d/1wVkcbL1tZum-53y2OzrmHwq-0s9uaos_/view?usp=drive_link" target="_blank">
              <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                <div class="flex space-x-2">
                    <div class="w-9 h-9 overflow-hidden">
                      <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                    </div>
                    <div class="font-semibold text-sm  font-serif ">Internal Control Policy</div>
                </div>
                <div class="flex space-x-2">
                    <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                      <span class="text-white ">
                          <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                            </path>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="m176 272 80 80 80-80M256 48v288"></path>
                          </svg>
                      </span>
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
          </a>
          <a href="https://drive.google.com/file/d/1v-zGv--dOo-cju_aPmhVIuiRDl5L6Q8d/view?usp=drive_link" target="_blank">
              <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                <div class="flex space-x-2">
                    <div class="w-9 h-9 overflow-hidden">
                      <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                    </div>
                    <div class="font-semibold text-sm  font-serif ">Policy on Management of Conflict of Interests
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                      <span class="text-white ">
                          <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                            </path>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="m176 272 80 80 80-80M256 48v288"></path>
                          </svg>
                      </span>
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
          </a>
          <a href="https://drive.google.com/file/d/1v-zGv--dOo-cju_aPmhVIuiRDl5L6Q8d/view?usp=drive_link" target="_blank">
              <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                <div class="flex space-x-2">
                    <div class="w-9 h-9 overflow-hidden">
                      <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                    </div>
                    <div class="font-semibold text-sm  font-serif ">Policy Regarding Treatment Of Inactive Dormant Accounts
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                      <span class="text-white ">
                          <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                            </path>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="m176 272 80 80 80-80M256 48v288"></path>
                          </svg>
                      </span>
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
          </a>
          <a href="https://drive.google.com/file/d/1tnctZ42EtlJl7x08oIdHG7baRap89cTR/view?usp=drive_link" target="_blank">
              <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                <div class="flex space-x-2">
                    <div class="w-9 h-9 overflow-hidden">
                      <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                    </div>
                    <div class="font-semibold text-sm  font-serif ">
                      Surveillance Policy of Depository Participant
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                      <span class="text-white ">
                          <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                            </path>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="m176 272 80 80 80-80M256 48v288"></path>
                          </svg>
                      </span>
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
          </a>
          <a href="https://docs.google.com/document/d/1DCKzOnxFyMlUXIvfZLFbmGQyuy8mwe51/edit?tab=t.0" target="_blank">
              <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                <div class="flex space-x-2">
                    <div class="w-9 h-9 overflow-hidden">
                      <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                    </div>
                    <div class="font-semibold text-sm  font-serif ">
                      Policy on Conflict Of Interest
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                      <span class="text-white ">
                          <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                            </path>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="m176 272 80 80 80-80M256 48v288"></path>
                          </svg>
                      </span>
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
          </a>
          <a href="https://drive.google.com/file/d/1Ye8EN2SdItWslW8AnzVcTs2z5hzJoqdW/view?usp=drive_link" target="_blank">
              <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                <div class="flex space-x-2">
                    <div class="w-9 h-9 overflow-hidden">
                      <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                    </div>
                    <div class="font-semibold text-sm  font-serif ">
                      Policy For Unauthorized News Circulation & Code Of Conduct
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                      <span class="text-white ">
                          <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                            </path>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="m176 272 80 80 80-80M256 48v288"></path>
                          </svg>
                      </span>
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
          </a>
          <a href="https://drive.google.com/file/d/1FWadhR_nXPvNEhFAfSD48g-FOPmSLlI4/view?usp=drive_link" target="_blank">
              <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
                <div class="flex space-x-2">
                    <div class="w-9 h-9 overflow-hidden">
                      <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                    </div>
                    <div class="font-semibold text-sm font-serif">
                      Internet Access Policy
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="bg-[#004AAD] p-2 flex justify-center items-center rounded-lg">
                      <span class="text-white ">
                          <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 512 512" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40">
                            </path>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="m176 272 80 80 80-80M256 48v288"></path>
                          </svg>
                      </span>
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
          </a>
         </div>
      </div>      
   </div>
</section>

  <section class="w-full relative bg-white">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 px-6 lg:px-8 lg:w-full mx-auto flex flex-col space-y-[14px] bg-gray-100 py-4  mb-2 ">
      <div class="flex justify-between items-center cursor-pointer " onclick="toggleAccordion(3)">
        <div class="font-heading text-2xl font-bold text-[#1B1E31]">Cyber Policy</div>
        <svg  id="icon-3" class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
          <path d="M19 9l-7 7-7-7"></path>
      </svg>
      </div>

      <div class="grid lg:grid-cols-3 grid-cols-1 max-h-0 overflow-hidden transition-all duration-500 " id="content-3">
        <div class="flex space-y-3 flex-col">
          <a href="https://drive.google.com/file/d/1mZ26heHxAyNZqrkXP_RX_P9tzghPKyej/view?usp=drive_link" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold text-sm  font-serif ">Cyber Policy</div>
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
          </a>
        </div>
      </div>

    </div>
  </section>

  <section class="w-full relative bg-white">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 px-6 lg:px-8 lg:w-full mx-auto  flex flex-col space-y-[14px] bg-gray-100 py-4  mb-2">
      <div class=" flex justify-between items-center cursor-pointer " onclick="toggleAccordion(4)">
        <div class="font-heading text-2xl font-bold text-[#1B1E31]">Account Related Form</div>
        <svg  id="icon-4" class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
          <path d="M19 9l-7 7-7-7"></path>
      </svg>
      </div>
      <div class="grid grid-cols-1  gap-2  lg:grid-cols-3 max-h-0 overflow-hidden transition-all duration-500 " id="content-4">
      <div class="flex space-y-3 flex-col">
        <a href="https://drive.google.com/file/d/1GOh_5lF1OYDbnHnPpCk3YK6Fb4P7ihUg/view?usp=drive_link" target="_blank"> 
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <div class="font-semibold text-sm  font-serif ">Client Copy Pdf</div>
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
        </a> 
        <a href="https://drive.google.com/file/d/1_Ko3SKXfM8M_IzuVkktUgqCiDpy-w9WY/view?usp=drive_link" target="_blank">
          <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <div class="font-semibold text-sm  font-serif">Document List (Huf) pdf 3</div>
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
        </a>
      </div>
        <div class="flex space-y-3 flex-col">
          <a href="https://drive.google.com/file/d/1SwAXw_eDI87p5hpz7srfFhobXyYona7Z/view?usp=drive_link" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold text-sm  font-serif ">Document (Non individual) pdf 2</div>
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
          </a>
        </div>
        <div class="flex space-y-3 flex-col">
          <a href="https://drive.google.com/file/d/1I3XiA-3xKeHEKOBWjrhNXgnfzSvwhCIi/view?usp=drive_link" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold text-sm  font-serif ">Document Checklist pdf 1</div>
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
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="w-full relative bg-white">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3  px-6 lg:px-8 flex flex-col space-y-[14px] lg:w-full mx-auto bg-gray-100 py-4  mb-2">
      <div class="flex justify-between items-center cursor-pointer " onclick="toggleAccordion(5)">
        <div class="font-heading text-2xl font-bold text-[#1B1E31]">Vernacular Language</div>
        <svg  id="icon-5" class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
          <path d="M19 9l-7 7-7-7"></path>
      </svg>
      </div>

      <div class="grid grid-cols-1 lg:px-0 gap-2 lg:grid-cols-3 max-h-0 overflow-hidden transition-all duration-500 " id="content-5" >
        <div class="flex space-y-3 flex-col">
          <a href="https://drive.google.com/file/d/1pKOPQ_gCZQlo72NEph4XzBkiZv8NmR9b/view?usp=drive_link" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">Assame Annexure 1</div>
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
          </a>
          <a href="https://drive.google.com/open?id=1_OhEHY2S808kjsXHNqFvhAhxZoSegf4D&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold text-sm  font-serif">Bengali Annexure 1</div>
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
          </a>
          <a href="https://drive.google.com/open?id=1IxWOmz6lIqOtD3SJ13wngw2miorjYn-9&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">Gujarati Annexure 1</div>
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
          </a>
          <a href="" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">Hindi Annexure 1</div>
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
          </a>
          <a href="https://drive.google.com/open?id=16srrRr6GnecCZYriv3mqGddufyXVLbVZ&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">Kannada Annexure 1
                </div>
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
          </a>
          <a href="https://drive.google.com/open?id=1BQnk6DYL6KQyHlsVGaSaLaD8O9HF9vbC&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">Kashmari Annexure 1</div>
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
          </a>
          <a href="https://drive.google.com/open?id=1VkvcjMwxpyrGgi_vJYm2yBvc_hjrCzLe&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Konkani Annexure 1</div>
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
          </a>
          <a href="https://drive.google.com/open?id=1Y80n3fDGBP1TTuGaumeSd9l7B-dAGzKF&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Malyalam Annexure 1
                </div>
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
          </a>
          <a href="https://drive.google.com/open?id=1UiyEgDKZvt73coe3Hv9VQ9NW3LmlsRnl&usp=drive_copy" target="_blank"s>
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <div class="font-semibold lg:text-sm text-xs font-serif ">
                Marathi Annexure 1
              </div>
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
          </a>
          <a href="https://drive.google.com/open?id=1AWymb2seZZ1cPsBy9FofMSXLy3IHb5l0&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">

                  Oriya Annexure 1
                </div>
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
          </a>
          <a href="https://drive.google.com/open?id=1wGmtbqitCnaSwVd4BZB6A_Z_7zZxjZ-K&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Punjabi Annexure 1
                </div>
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
          </a>
          <a href="https://drive.google.com/open?id=17wGX1m1kqyQn1NHSBe8LdS_kFsB0UPeQ&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Sindhi Annexure 1
                </div>
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
          </a>
          <a href="https://drive.google.com/open?id=17HiSdEq1BKL8OZzGp5YSwcvWCOjjusA9&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Tamil Annexure 1
                </div>
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
          </a>
          <a href="https://drive.google.com/open?id=1oZsSA8NiGZTiwQH_kgoWoRHEEczcCvXw&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Telgu Annexure 1
                </div>
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
          </a>
         <a href="https://drive.google.com/open?id=1x3yWphktfkJJK7EYfcCd-h3B5OcBk_EQ&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Urdu Annexure 1
                </div>
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
          </a>
        </div>
        <div class="flex space-y-3 flex-col">
          <a href="https://drive.google.com/file/d/1lytcSPtxEnIewsY7AG31fxX0oIGXKulW/view?usp=drive_link" target="_blank">  
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">Assame Annexure 2</div>
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
          </a>
          <a href="https://drive.google.com/open?id=1idFYYqp20EZJlXzacWmGR3p-kokUslzn&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold text-sm  font-serif">Bengali Annexure 2</div>
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
          </a>
          <a href="https://drive.google.com/open?id=1-w_Bsv7VTFMLXrYhqZSW-lRqNBGvc3z0&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">Gujarati Annexure 2</div>
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
          </a>
          <a href="https://drive.google.com/open?id=1FmIzHpNJbnO6Dcw2m1D43jmqB09DFqg0&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">Hindi Annexure 2</div>
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
          </a>
          <a href="https://drive.google.com/open?id=15l5GEfJiD_op2OIU8PS9dCbQWbQGFWb_&usp=drive_copy" target="_blank"> 
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">Kannada Annexure 2
                </div>
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
          </a>
          <a href="https://drive.google.com/open?id=1w9KrC_q0jyK0KJLNaVfrXnfZkP622OEv&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">Kashmari Annexure 2</div>
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
          </a>
          <a href="https://drive.google.com/open?id=1dhvc78idiZbzfzZ31wP1aqpqht147KOo&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Konkani Annexure 2</div>
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
          </a>
          <a href="https://drive.google.com/open?id=1J7AHuGtPJ3jEm9pWSn5Q3rvKakGnZc6d&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Malyalam Annexure 2
                </div>
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
          </a>
          <a href="https://drive.google.com/open?id=1g9sFZT2fp6_h5JHVbsJ7UHkUTwdwxraN&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Marathi Annexure 2
                </div>
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
          </a>
          <a href="https://drive.google.com/open?id=1a7F-k38Izr2IoHM9n7LgKORor-nVjZWE&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Oriya Annexure 2
                </div>
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
          </a>
          <a href="https://drive.google.com/open?id=19X43VeYTBP2eHPdZA13Ldb--znVfORSY&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">

                  Punjabi Annexure 2
                </div>
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
          </a>
          <a href="https://drive.google.com/open?id=16KHsaSVXn-3o4ueBbtQ8gItusUGNcllp&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Sindhi Annexure 2
                </div>
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
          </a>
          <a href="https://drive.google.com/open?id=17q2j7LyLitC4tC5WuLHmMxsieJOgEejq&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Tamil Annexure 2
                </div>
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
          </a>
          <a href="https://drive.google.com/open?id=1piQHuEVOUepCAWuvRVOiqo6kgDGnI-VK&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Telgu Annexure 2
                </div>
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
          </a>
          <a href="https://drive.google.com/open?id=1vWxJ3hIPxIW4Bbf2X41_3w1LvkC-6csu&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Urdu Annexure 2
                </div>
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
          </a>
        </div>
        <div class="flex space-y-3 flex-col">
          <a href="https://drive.google.com/file/d/1CD5JzJ8UwIN-WERSfocZJmpakq29POFW/view?usp=drive_link" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">Assame Annexure 3</div>
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
          </a>
          <a href="https://drive.google.com/open?id=1vWmB_L9xLb6pmfLjgttwlRT2AvFlESaK&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full py-4 px-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold text-sm  font-serif">Bengali Annexure 3</div>
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
          </a>
          <a href="https://drive.google.com/open?id=1diGNkGA5JK0jbPTIaCGkylj1ijehIdXC&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">Gujarati Annexure 3</div>
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
          </a>
          <a href="https://drive.google.com/open?id=13LccPQeT02kCICukrrozWuMfdlx-iDn3&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">Hindi Annexure 3</div>
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
          </a>
          <a href="https://drive.google.com/open?id=14K38_Uz6guqddWrdwrohhqePTrbEembQ&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">Kannada Annexure 3
                </div>
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
          </a>
          <a href="https://drive.google.com/open?id=1Z72yidBAiNiPq2kT1uW0-LHaSHG1dtOd&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">Kashmari Annexure 3</div>
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
          </a>
          <a href="https://drive.google.com/open?id=1t9VyhNJOE60FRZG714aZH4A6dMoS0Xf0&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Konkani Annexure 3</div>
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
          </a>
          <a href="https://drive.google.com/open?id=1fKMJxWsB63wu1NkHVNC0qaRtNbPzhrxG&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Malyalam Annexure 3
                </div>
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
          </a>
          <a href="https://drive.google.com/open?id=1cKlBO22IZtghyHcPyorPLdHXHNeBKsVh&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Marathi Annexure 3
                </div>
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
          </a>
          <a href="https://drive.google.com/open?id=1KE-7nOaVL022jk2JVgqeuRzqiKa2Oq9m&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif">
                  Oriya Annexure 3
                </div>
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
          </a>
          <a href="https://drive.google.com/open?id=1_PdrwJSJ_hK1Wv3kFyuShGxMXJgxzSQT&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Punjabi Annexure 3
                </div>
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
          </a>
          <a href="https://drive.google.com/open?id=1I1HizPCLUlKXmKu3UR3xXmp_YqhM6czl&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Sindhi Annexure 3
                </div>
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
          </a>
          <a href="https://drive.google.com/open?id=1O8J4dH8vtXzLkAA6VISlahBzMKyFdqUH&usp=drive_copy" target="_blank">
            <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
              <div class="flex space-x-2">
                <div class="w-9 h-9 overflow-hidden">
                  <img src="assets/img/pdf.png" alt="" class="w-full h-full">
                </div>
                <div class="font-semibold lg:text-sm text-xs font-serif ">
                  Tamil Annexure 3
                </div>
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
        </a>
        <a href="https://drive.google.com/open?id=1zghbTa1uADYliYPbdXa-NIVW489MWfqN&usp=drive_copy" target="_blank">
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <div class="font-semibold lg:text-sm text-xs font-serif ">

                Telgu Annexure 3
              </div>
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
        </a>
        <a href="https://drive.google.com/open?id=1_-P2uGR6RIpYlmbmwkzArRTJgz7fwwo2&usp=drive_copy" target="_blank">
          <div class="flex rounded-md border w-full px-4 py-4 border-[#E6E6E6] justify-between items-center">
            <div class="flex space-x-2">
              <div class="w-9 h-9 overflow-hidden">
                <img src="assets/img/pdf.png" alt="" class="w-full h-full">
              </div>
              <div class="font-semibold lg:text-sm text-xs font-serif">
                Urdu Annexure 3
              </div>
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
        </a>
        </div>
      </div>
    </div>
  </section>
<?php include_once('footer.php'); ?>