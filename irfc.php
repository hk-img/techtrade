<?php include_once('header.php'); ?>
<div class="w-full bg-[#E7EFFA] rounded-bl-[3.563rem] rounded-br-[3.563rem] py-12 lg:py-0 lg:h-96 h-auto mt-24 relative overflow-hidden flex   items-center justify-center">
  <div class="2xl:px-24 3xl:px-36 lg:pb-3  px-6 lg:px-8  w-full mx-auto flex items-center justify-between flex-col lg:flex-row relative z-10">
    <div class="flex flex-col justify-start  font-serif space-y-3 text-black lg:text-left text-left">
      <h1 class=" text-xl lg:text-[2.5rem] font-heading font-bold ">IRFC</h1>
      <p class="lg:text-[1.125rem] font-serif  text-[#1B1E31] font-medium">
        Indian Railway Finance Corporation (IRFC) is the dedicated financial arm of Indian Railways, playing a crucial role in funding railway infrastructure. </p>
      <ul class="flex font-serif space-x-2 items-center lg:text-[1.125rem]">
        <li>Home</li>
        <li class="-mt-2">.</li>
        <li class="font-bold text-[#1B1E31]"><a href="irfc">IRFC</a></li>
      </ul>
    </div>
    <img src="assets/img/invheadbg.png" alt="" class="w-1/2 lg:w-[35%]">
  </div>
  <img src="assets/img/headside-img.png" alt="" class=" h-full absolute lg:top-0 top-4 lg:right-0 z-0">
  <img src="assets/img/headbg2.png" alt="" class="w-[90%] top-[35px] left-[150px] absolute z-0">
  <img src="assets/img/headbg3.png" alt="" class=" w-[60%] left-[6px] -bottom-[81px]  absolute z-0">
</div>

<section class="w-full py-[80px] font-barlow relative bg-white">
  <div class="2xl:px-24 3xl:px-36 lg:pb-3 px-6 lg:px-8 w-full lg:w-full mx-auto flex flex-col space-y-[14px] ">
    <div>
      <ul class="flex space-x-1 lg:space-x-2 flex-row">
        <li class="flex space-x-1 lg:space-x-2 text-themeColor1 font-semibold text-sm lg:text-base font-barlow flex-row"><a href="/">Home</a><span class="text-black py-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path>
            </svg></span></li>
        <li class="flex space-x-1 lg:space-x-2 text-themecolor3 font-semibold text-sm lg:text-base flex-row"><a href="javascript;;">
         All Stocks </a><span class="text-black py-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path>
            </svg></span></li>
        <li class="text-themecolor3 text-sm lg:text-base font-semibold">
          <a href="javascript;;">Indian Railway Finance Corporation Ltd</a>
        </li>
      </ul>
    </div>
    <div>
      <h1 class="font-semibold text-3xl text-themecolor3">IRFC Share Price</h1>
    </div>
    <div class="flex space-x-3 flex-row">
      <h1 class="text-[#253040] font-normal text-lg ">IRFC</h1>
      <div class="flex flex-row rounded-lg border border-black">
        <button id="nseBtn" class="bg-slate-600 font-medium text-sm text-white px-5 py-2 font-barlow rounded-md transition-all duration-300"
          onclick="toggleActive('NSE')">NSE</button>
        <button id="bseBtn" class="bg-white font-medium text-sm px-5 py-2 text-[#425061] font-barlow rounded-md transition-all duration-300"
          onclick="toggleActive('BSE')">BSE</button>
      </div>
    </div>
    <div>
      <h1 class=" text-[#777D87] font-medium text-base font-barlow">Large Cap I Finance</h1>
    </div>
    <div class=" flex lg:max-w-xl  w-full justify-between flex-row">
      <div class=" flex flex-row">
        <h1 class="text-black  text-3xl font-barlow  font-semibold">₹ 110.94
          <span class="text-red-400 font-barlow font-normal text-xl">-1.48(1.32%)</span>
        </h1>
      </div>
      <div class=" flex space-x-5 flex-row">
        <button class="bg-themeColor1 lg:px-9 px-6 h-11 lg:h-14 text-white rounded-md text-sm lg:text-base font-barlow font-semibold">BUY</button>
        <button class="bg-themeColor2 lg:px-9 px-6 h-11 lg:h-14 text-white rounded-md text-base font-barlow font-semibold">SELL</button>
      </div>
    </div>
  </div>
</section>

<section class="w-full py-[30px] relative bg-white">
  <div class="2xl:px-24 3xl:px-36 lg:pb-3 px-6 lg:px-8 lg:w-full mx-auto flex flex-col space-y-[14px]">
    <div class="flex flex-row gap-12">
      <!-- Left Side (Scrollable) -->
      <div class="w-full lg:w-2/3 bg-white h-full space-y-5 overflow-auto">
        <div>
          <h1 class="text-3xl text-[#2a394e] font-barlow font-semibold">Live Indian Railway Finance Corporation Share Price Chart</h1>
          <div class="w-full h-auto lg:h-[25rem]">
            <div class="w-full h-full">
              <img src="assets/img/graphimg.webp" alt="" class="w-full h-full">
            </div>
          </div>
          <div class="flex justify-center py-5 items-center flex-row space-x-3">
            <div class="px-2 py-1 border text-blue-500  rounded-md transition-all duration-300">
              <h1>1D</h1>
            </div>
            <div class="px-2 py-1 rounded-md transition-all hover:text-blue-600 text-gray-500 duration-300 hover:border ">
              <h1>1W</h1>
            </div>
            <div class="px-2 py-1 rounded-md transition-all hover:text-blue-600 text-gray-500 duration-300 hover:border ">
              <h1>1M</h1>
            </div>
            <div class="px-2 py-1 rounded-md transition-all hover:text-blue-600 text-gray-500 duration-300 hover:border ">
              <h1>3M</h1>
            </div>
            <div class="px-2 py-1 rounded-md transition-all hover:text-blue-600 text-gray-500 duration-300 hover:border ">
              <h1>6M</h1>
            </div>
            <div class="px-2 py-1 rounded-md transition-all hover:text-blue-600 text-gray-500 duration-300 hover:border ">
              <h1>1Y</h1>
            </div>
            <div class="px-2 py-1 rounded-md transition-all hover:text-blue-600 text-gray-500 duration-300 hover:border ">
              <h1>5Y</h1>
            </div>
          </div>
        </div>
        <div>
          <h1 class="text-xl lg:text-3xl text-[#2a394e] font-barlow font-semibold">Indian Railway Finance Corporation Performance</h1>
          <div class="flex py-5 flex-col">
            <h1 class="text-xl font-semibold font-barlow text-[#777d87]">Days Range</h1>

            <div class="flex  justify-between flex-row">
              <h1 class="text-base lg:text-lg font-semibold font-barlow text-[#2a394e]">Low: ₹108.04</h1>

              <div class="flex flex-col">
                <div class="flex  ml-[5rem] lg:ml-[16rem]">
                  <div class="bg-white border-l-[0.438rem] border-l-transparent border-r-[0.438rem] border-r-transparent border-t-[0.438rem] border-t-red-600"></div>
                </div>
                <div class="w-full flex-row flex">
                  <span class="bg-red-600 h-3 w-[6rem] lg:w-[17rem] -mr-4 z-10 border border-white rounded-2xl"></span>
                  <span class="bg-red-600 h-3 w-[3rem] lg:w-[27rem] rounded-2xl"></span>

                </div>
              </div>
              <h1 class="text-base lg:text-lg font-semibold font-barlow text-[#2a394e]">Low: ₹108.04</h1>
            </div>

            <div class="grid grid-cols-1 lg:space-x-8  py-8 lg:grid-cols-2 ">
              <div class="flex flex-col">
                <div class="flex flex-row  border-b py-3 justify-between">
                  <h1 class="text-[#777d87] text-lg lg:text-2xl font-barlow font-semibold">Previous Close</h1>
                  <h1 class="text-[#2a394e] text-lg lg:text-2xl font-barlow font-semibold">₹112.24</h1>

                </div>
                <div class="flex flex-row  border-b py-3 justify-between">
                  <h1 class="text-[#777d87] text-lg lg:text-2xl font-barlow font-semibold">Open</h1>
                  <h1 class="text-[#2a394e] text-lg lg:text-2xl font-barlow font-semibold">₹112.99</h1>
                </div>
                <div class="flex flex-row  border-b py-3 justify-between">
                  <h1 class="text-[#777d87] text-lg lg:text-2xl font-barlow font-semibold">Volume</h1>
                  <h1 class="text-[#2a394e] text-lg lg:text-2xl font-barlow font-semibold">4,24,32,885
                  </h1>

                </div>
              </div>
              <div class="flex flex-col">
                <div class="flex flex-row  border-b py-3 justify-between">
                  <h1 class="text-[#777d87] text-lg lg:text-2xl font-barlow font-semibold">Day's Range</h1>
                  <h1 class="text-[#2a394e] text-lg lg:text-2xl font-barlow font-semibold">₹108.04 - ₹115.86</h1>

                </div>
                <div class="flex flex-row  border-b py-3 justify-between">
                  <h1 class="text-[#777d87] text-lg lg:text-2xl font-barlow font-semibold">
                    52W Range</h1>
                  <h1 class="text-[#2a394e] text-lg lg:text-2xl font-barlow font-semibold">₹108.04 - ₹229.00</h1>
                </div>
                <div class="flex flex-row  border-b py-3 justify-between">
                  <h1 class="text-[#777d87] text-lg lg:text-2xl font-barlow font-semibold">Market Cap</h1>
                  <h1 class="text-[#2a394e] text-lg lg:text-2xl font-barlow font-semibold">₹1,46,890.01 Cr
                  </h1>

                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="w-full overflow-x-auto h-auto">
          <h1 class="text-xl lg:text-3xl text-[#2a394e] font-barlow py-5 font-semibold">Indian Railway Finance Corporation Shareholding Pattern</h1>
          <table class="border w-full text-left">
            <thead>
              <th class="w-[8.125rem] h-[5rem] px-3 py-1 border text-[#2a394e] text-lg font-barlow font-semibold  ">Held by</th>
              <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#2a394e] text-lg font-barlow font-semibold  ">Dec 2023</th>
              <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#2a394e] text-lg font-barlow font-semibold  ">Mar 2024</th>
              <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#2a394e] text-lg font-barlow font-semibold  ">Jun 2024</th>
              <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#2a394e] text-lg font-barlow font-semibold  ">Sep 2024</th>
              <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#2a394e] text-lg font-barlow font-semibold  ">Dec 2024</th>
            </thead>
            <tbody>
              <tr class="border">
                <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold px-5 py-12 border">
                  Promoters
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  86.36%
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  86.36%
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  86.36%
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  86.36%
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  86.36%
                </td>
              </tr>
              <tr class="border bg-[#f9fbfe]">
                <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py-12 border">
                  Flls
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  1.15%
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  1.08%
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  1.11%
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  1.09%
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  1.01%
                </td>
              </tr>
              <tr>
                <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py-12 border">
                  Dlls
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  1.16%
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  0.89%
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  1.07%
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  1.08%
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  1.24%
                </td>
              </tr>
              <tr class="border bg-[#f9fbfe]">
                <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py- border">
                  Public
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  11.33%
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  11.67%
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  11.45%
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  11.46%
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  11.39%
                </td>
              </tr>
            </tbody>
          </table>
          <div class="flex flex-row py-4 justify-end">
            <h1 class="text-[#3f5bd9] flex flex-row cursor-pointer text-xl font-barlow font-semibold">VIEW ALL <span class="text-[#3f5bd9] -mt-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="2em" width="2em" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path>
                </svg></span></h1>
          </div>
        </div>
        <div class="w-full h-auto">
          <h1 class="lg:text-3xl text-xl text-[#2a394e] font-barlow py-5 font-semibold">Indian Railway Finance Corporation Fundamentals</h1>
          <div class="grid grid-cols-1 lg:space-x-5 lg:grid-cols-2">
            <div>
              <table class="border  w-full text-left">
                <thead>
                  <th class="w-[12.125rem] h-[5rem] px-3 py-1 border text-[#2a394e] text-lg font-barlow font-semibold  ">ROCE(TTM)</th>
                  <td class="w-[6.125rem] h-[5rem] px-5 py-1">
                    5.84
                  </td>
                </thead>
                <tbody>
                  <tr class="border bg-[#f9fbfe]">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold px-5 py-12 border">
                      P/E Ratio (TTM)
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                      22.48
                    </td>
                  </tr>
                  <tr class="border ">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py-12 border">
                      P/B Ratio
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                      2.82
                    </td>
                  </tr>
                  <tr class="bg-[#f9fbfe]">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py-12 border">
                      Industry P/E
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                      23.08
                    </td>
                  </tr>
                  <tr class="border ">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py- border">
                      Debt to Equity
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                      7.81
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div>
              <table class="border w-full text-left">
                <thead>
                  <th class="w-[12.125rem] h-[5rem] px-3 py-1 border text-[#2a394e] text-lg font-barlow font-semibold  ">ROE</th>
                  <td class="w-[6.125rem] h-[5rem] px-5 py-1">
                    12.56
                  </td>
                </thead>
                <tbody>
                  <tr class="border bg-[#f9fbfe]">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold px-5 py-12 border">
                      EPS (TTM)
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                      5
                    </td>
                  </tr>
                  <tr class="border ">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py-12 border">
                      Dividend Yield
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                      1.33
                    </td>
                  </tr>
                  <tr class="bg-[#f9fbfe]">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py-12 border">
                      Book Value
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                      1.16%
                    </td>
                  </tr>
                  <tr class="border">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py- border">
                      Face Value
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                      10
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      
        <div class="w-full h-auto">
          <h1 class="lg:text-3xl text-xl text-[#2a394e] font-barlow py-5 font-semibold">Indian Railway Finance Corporation Financials</h1>
          <div class="flex flex-col overflow-x-auto">
            <div class="flex space-x-8">
              <button class="relative text-blue-600 h-7 text-xl font-medium underline-effect active" data-tab="announcement">
                Announcement
                <span class="absolute left-0 -bottom-4 w-full h-[2px] bg-blue-600 transition-all duration-300"></span>
              </button>

              <button class="relative text-blue-600 text-xl font-medium underline-effect" data-tab="dividends">
                Dividends
                <span class="absolute left-0 -bottom-4 w-0 h-[2px] bg-blue-600 transition-all duration-300"></span>
              </button>

              <button class="relative text-blue-600 text-xl font-medium underline-effect" data-tab="bonus">
                Bonus
                <span class="absolute left-0 -bottom-4 w-0 h-[2px] bg-blue-600 transition-all duration-300"></span>
              </button>

              <button class="relative text-blue-600 text-xl font-medium underline-effect" data-tab="splits">
                Splits
                <span class="absolute left-0 -bottom-4 w-0 h-[2px] bg-blue-600 transition-all duration-300"></span>
              </button>

              <button class="relative text-blue-600 text-xl font-medium underline-effect" data-tab="rights">
                Rights
                <span class="absolute left-0 -bottom-4 w-0 h-[2px] bg-blue-600 transition-all duration-300"></span>
              </button>

              <button class="relative text-blue-600 text-xl font-medium underline-effect" data-tab="agm-egm">
                AGM/EGM
                <span class="absolute left-0 -bottom-4 w-0 h-[2px] bg-blue-600 transition-all duration-300"></span>
              </button>
            </div>
            <!-- Content -->
            <div class="mt-6 bg-white rounded-md">
              <div id="announcement" class="tab-content">
                <div class="border-b border-t space-y-7 flex flex-col py-4">
                  <h1 class="text-[#2a394e] font-medium font-barlow text-lg">3rd Mar, 2025</h1>
                  <h1 class="text-[#3f5bd9] font-semibold font-barlow text-3xl">Indian Railway Finance Corporation Limited - Updates</h1>
                  <h1 class="text-[#2a394e] font-normal font-barlow text-[1.313rem]">Indian Railway Finance Corporation Limited has informed the Exchange regarding 'Grant of Navratna status to IRFC Limited'.</h1>
                </div>
              </div>
              <div id="dividends" class="tab-content hidden">
                <div class="w-full rounded-md  h-auto">
                  <table class="border w-full text-left">
                    <thead>
                      <th class="w-[8.125rem] h-[5rem] px-3 py-1 border text-[#777d87] text-lg font-barlow font-normal  ">Announcement Date</th>
                      <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#777d87] text-lg font-barlow font-normal  ">Ex-Date</th>
                      <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#777d87] text-lg font-barlow font-normal  ">Dividend Type</th>
                      <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#777d87] text-lg font-barlow font-normal  ">Dividend (%)</th>
                      <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#777d87] text-lg font-barlow font-normal  ">Dividend (Rs)</th>
                    </thead>
                    <tbody>
                      <tr class="border">
                        <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold px-5 py-8 border">
                          20th May, 2024
                        </td>
                        <td class="w-[8.125rem] h-[5rem] px-5 py-8">
                          22nd Aug, 2024
                        </td>
                        <td class="w-[8.125rem] h-[5rem] px-5 py-8">
                          Final
                        </td>
                        <td class="w-[8.125rem] h-[5rem] px-5 py-8">
                          7
                        </td>
                        <td class="w-[8.125rem] h-[5rem] px-5 py-8">
                          0.7
                        </td>
                      </tr>
                      <tr class="border bg-[#f9fbfe]">
                        <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py-8 border">
                          4th Nov, 2024
                        </td>
                        <td class="w-[8.125rem] h-[5rem] px-5 py-8">
                          12th Nov, 2024
                        </td>
                        <td class="w-[8.125rem] h-[5rem] px-5 py-8">
                          Interm
                        </td>
                        <td class="w-[8.125rem] h-[5rem] px-5 py-8">
                          8
                        </td>
                        <td class="w-[8.125rem] h-[5rem] px-5 py-8">
                          0.8
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div id="bonus" class="tab-content hidden">
                <div class="w-full flex justify-center items-center shadow-lg h-[13rem]">
                  <h1>Data is not available currently. Please check back later. </h1>
                </div>
              </div>
              <div id="splits" class="tab-content hidden">
                <div class="w-full flex justify-center items-center shadow-lg h-[13rem]">
                  <h1>Data is not available currently. Please check back later. </h1>
                </div>
              </div>
              <div id="rights" class="tab-content hidden">
                <div class="w-full flex justify-center items-center shadow-lg h-[13rem]">
                  <h1>Data is not available currently. Please check back later. </h1>
                </div>
              </div>
              <div id="agm-egm" class="tab-content hidden">
                <div class="w-full flex justify-center items-center shadow-lg h-[13rem]">
                  <h1>Data is not available currently. Please check back later. </h1>
                </div>
              </div>
            </div>
          </div>

          <div class="flex flex-row py-8 justify-end">
            <h1 class="text-[#3f5bd9] flex flex-row cursor-pointer text-xl font-barlow font-semibold">VIEW ALL <span class="text-[#3f5bd9] -mt-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="2em" width="2em" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path>
                </svg></span></h1>
          </div>
        </div>
        <div class="w-full h-auto">
          <h1 class="text-3xl text-[#2a394e] font-barlow py-5 font-semibold">About Indian Railway Finance Corporation</h1>
          <div class="flex flex-col">
            <!-- Heading -->
            <h1 class="text-3xl text-[#2a394e] font-barlow py-3 font-bold">History</h1>
            <!-- Content Box -->
            <div id="content-box" class="relative overflow-hidden transition-all duration-500 max-h-[120px]">
              <p class="font-normal text-[#2a394e] font-barlow text-xl">
                Indian Railway Finance Corporation (IRFC) Ltd was incorporated on December 12, 1986. It has been classified as a systemically important non-deposit-taking NBFC, specifically an infrastructure finance company i.e. an NBFC-IFC by RBI since 2010. It is a Schedule A Public Sector Enterprise administered by the Ministry of Railways (MoR), Government of India. Since its inception in 1986, the company has been involved in mobilising funds from domestic and international markets for Indian Railways. It has a large contribution to the growth of Indian Railways and related entities such as Rail Vikas Nigam Limited (RVNL) and IRCON. Over the years, IRFC has employed various financial instruments in order to raise money. For example:
                <br><br>
              </p>
              <ul class=" space-y-4 px-4 font-normal text-[#2a394e] font-barlow text-xl">
                <li> • In 1996, it issued deep discount bonds to the public and also issued floating rate notes worth $70 million in offshore markets.</li>
                <li> • In 1998, it issued secured, redeemable, non-cumulative, taxable bonds to LIC for a 15-year tenure.</li>
                <li> • The following year, it issued secured, redeemable, non-cumulative, taxable bonds in Separately Transferable, Redeemable Principal Parts (STRPP).</li>
                <li> • In 2006, it issued floating-rate bonds in the Indian capital market.</li>
                <li> • In 2011, it raised a foreign currency term loan from the American Family Life Assurance Company of Columbus for a tenure of 15 years.</li>
                <li> • In 2020, IRFC issued bonds worth $1 billion via Regulation S of the USA.</li>
              </ul>

              <p class="font-normal py-2 text-[#2a394e] font-barlow text-xl">
                In January 2021, IRFC successfully raised ₹4,633 crore through its IPO. It was a fresh issue of 118 crore equity shares aggregating to ₹3,088 crore and an offer for sale of 59 crore equity shares aggregating to ₹1,544 crore by the Indian government.
              </p>
              <h1 class="text-3xl text-[#2a394e] font-barlow py-3 font-bold">Business Segments</h1>
              <h1 class="font-normal py-2 text-[#2a394e] leading-8 font-barlow text-xl">
                The following are the primary businesses of IRFC: <span class="font-bold">Raising Funds for Railway Projects</span> IRFC’s task is to minimise the cost of financing the acquisition of rolling stock assets, such as locomotives, coaches, wagons, trucks, flats, electric multiple units, containers, cranes, etc., as per the Standard Lease Agreements. IRFC does so by raising funds from taxable and tax-free bonds, term loans from banks and other financial institutions, commercial papers, external commercial borrowings (ECB), etc. As of FY 2022, the biggest sources of financing were rupee-term loans, followed by taxable Bonds and then external commercial borrowings (ECB). <span class="font-bold">Lending to Railway Companies</span> IRFC also lends funds to various railway sector companies like Rail Vikas Nigam Limited (RVNL), Rail Land Development Authority, Railtel Corporation of India, etc. <span class="font-bold">Leasing Railway Infrastructure Assets</span> IRFC also performs the leasing of railway infrastructure assets along with major projects of the Government of India and lends to other entities under the Ministry of Railways, Government of India (MoR). It employs a cost-plus-lease arrangement with the MoR ensuring a net interest margin for IRFC. The company employs a 30-year financial leasing model for financing the rolling stock assets. In the first 15 years, the principal amount is payable, along with the weighted average cost of borrowing plus a margin determined by the MoR. The weighted average cost of borrowing includes costs of hedging against foreign currency and interest rate fluctuations. For the second 15 years, the company charges the Indian Railways a nominal rate. At the end of the lease, assets are typically sold to the MoR for a nominal price. As of December 31, 2022, 48.86% of the total loans and advances in IRFC’s loan book were towards lease receivables from MoR, 49.81% of loans and advances were against the lease of railway infrastructure assets and for national projects, and the remaining 1.33% as loans provided to IRCON, RVNL, etc. Financing of rolling stock was the highest source of revenue at around 58% of total revenue as of FY 2022, with interest income coming second at around 33%. The company does not have any subsidiary as of March 2023.
              </h1>
              <h1 class="text-3xl text-[#2a394e] font-barlow py-3 font-bold">IRFC Corporate Action</h1>
              <h1 class="font-normal py-2 text-[#2a394e] leading-8 font-barlow text-xl">
                IRFC has not issued any rights shares, buybacks, bonus shares, or stock splits in recent times.
              </h1>
              <h1 class="text-3xl text-[#2a394e] font-barlow py-3 font-bold">Financial Highlights</h1>
              <ul class=" space-y-4 px-4 font-normal text-[#2a394e] font-barlow text-xl">
                <li> • The company has consistently increased its sales revenue every year, from ₹5,550 crore in FY 2013 to ₹23,892 crore in FY 2023, thus increasing by a rough CAGR of 38.77% in this period.</li>
                <li> • Simultaneously, the company has also increased its profitability. Its net profit as a percentage of sales has improved from 10.36% in FY 2013 to 26.52% in FY 2023.</li>
                <li> • As of September 2023, the company has a quick ratio of 15.7x, though it also has an interest coverage ratio of 1.34x.</li>

              </ul>
              <p class=" space-y-4  font-normal text-[#2a394e] font-barlow text-xl"> <span class="font-bold">Note:</span> All financial risks, such as interest rate risk and exchange rate risk, are passed onto the MoR. IRFC is exempted from the RBI’s asset classification norms, provisioning norms, and exposure norms with respect to its exposure to the MoR.</p>
            </div>
            <!-- Read More Button -->
            <div class="flex justify-end">
              <button id="toggle-btn" class="mt-4 mb-6 text-blue-600 font-semibold">Read More</button>
            </div>

          </div>

          <div class="shadow-md lg:space-x-6 border px-2 rounded-md grid grid-cols-1 py-7 lg:grid-cols-2 ">
            <div class="flex border-b text-center py-2 justify-between">
              <h1 class="text-[#777d87] text-xl  font-barlow font-semibold">Parent Organisation</h1>
              <h1 class="text-black text-xl font-barlow font-semibold">GoI - FIs</h1>
            </div>
            <div class="flex border-b text-center py-2  justify-between">
              <h1 class="text-[#777d87] text-xl font-barlow font-semibold">Managing Director</h1>
              <h1 class="text-black text-xl font-barlow font-semibold">Usha Venugopa</h1>
            </div>
            <div class="flex text-start py-2   justify-between">
              <h1 class="text-[#777d87] text-xl lg:-ml-5  font-barlow font-semibold">Founded</h1>
              <h1 class="text-black text-xl font-barlow font-semibold">1986</h1>
            </div>
            <div class="flex  text-center py-2  justify-between">
              <h1 class="text-[#777d87] text-xl font-barlow font-semibold">NSE Symbol</h1>
              <h1 class="text-black text-xl font-barlow font-semibold">IRFC</h1>
            </div>


          </div>



        </div>

        <div class="w-full h-auto overflow-x-auto">
          <h1 class=" text-xl lg:text-3xl text-[#2a394e] font-barlow py-5 font-semibold">Indian Railway Finance Corporation Financials</h1>



          <table class="border  w-full text-left">
            <thead>
              <th class="w-[16rem] h-[5rem] px-3 py-1 border text-[#2a394e] text-lg font-barlow font-semibold  ">Stocks</th>
              <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#2a394e] text-lg font-barlow font-semibold  ">LTP (₹)</th>
              <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#2a394e] text-lg font-barlow font-semibold  ">Market Cap (cr)</th>
              <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#2a394e] text-lg font-barlow font-semibold  "> 52 Week Low-High (₹)</th>
            </thead>
            <tbody>
              <tr class="border">
                <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold px-5 py-12 border">
                  Bajaj Finance Ltd
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  <h1 class="text-[#ef5854] flex"> 8,566.4<span class="text-[#ef5854] py-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.646 15.146 5.854 9.354a.5.5 0 0 1 .353-.854h11.586a.5.5 0 0 1 .353.854l-5.793 5.792a.5.5 0 0 1-.707 0Z"></path>
                      </svg></span></h1>
                  -61.45 (-0.71%)
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  ₹5,34,818.90
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">

                  6,187.8 - 8,739.0
                </td>


              </tr>
              <tr class="border bg-[#f9fbfe]">
                <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py-12 border">
                  Bajaj Finance Ltd
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  <h1 class="text-[#ef5854] flex"> 1,790.45<span class="text-[#ef5854] py-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.646 15.146 5.854 9.354a.5.5 0 0 1 .353-.854h11.586a.5.5 0 0 1 .353.854l-5.793 5.792a.5.5 0 0 1-.707 0Z"></path>
                      </svg></span></h1>
                  -61.45 (-0.71%)
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  ₹2,93,498.43
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  1,419.05 - 2,029.9
                </td>
              </tr>
              <tr>
                <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold px-5 py-12 border">
                  Jio Financial Services Ltd
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  <h1 class="text-green-600 flex"> 1,790.45<span class="text-green-600  py-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.646 15.146 5.854 9.354a.5.5 0 0 1 .353-.854h11.586a.5.5 0 0 1 .353.854l-5.793 5.792a.5.5 0 0 1-.707 0Z"></path>
                      </svg></span></h1>
                  -61.45 (-0.71%)
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  ₹1,27,669.25
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">

                  198.65 - 394.7
                </td>
              </tr>
              <tr class="border bg-[#f9fbfe]">
                <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py- border">
                  Bajaj Holdings & Investment Ltd
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  <h1 class="text-[#ef5854] flex">379.3<span class="text-[#ef5854] py-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.646 15.146 5.854 9.354a.5.5 0 0 1 .353-.854h11.586a.5.5 0 0 1 .353.854l-5.793 5.792a.5.5 0 0 1-.707 0Z"></path>
                      </svg></span></h1>
                  -61.45 (-0.71%)
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  ₹1,25,304.86
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">

                  351.7 - 580.0
                </td>
              </tr>
              <tr class="border ">
                <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py- border">
                  Cholamandalam Investment & Finance Company Ltd
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  <h1 class="text-green-600 flex"> 1,442.0<span class="text-green-600  py-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.646 15.146 5.854 9.354a.5.5 0 0 1 .353-.854h11.586a.5.5 0 0 1 .353.854l-5.793 5.792a.5.5 0 0 1-.707 0Z"></path>
                      </svg></span></h1>
                  -61.45 (-0.71%)
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">
                  ₹1,19,367.81
                </td>
                <td class="w-[8.125rem] h-[5rem] px-5 py-12">

                  1,011.2 - 1,652.0
                </td>
              </tr>
            </tbody>
          </table>
          <div class="flex flex-row py-4 justify-end">
            <h1 class="text-[#3f5bd9] flex flex-row cursor-pointer text-xl font-barlow font-semibold">VIEW ALL <span class="text-[#3f5bd9] -mt-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="2em" width="2em" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path>
                </svg></span></h1>
          </div>
        </div>
        <div class=" flex flex-col gap-4">
          <div>
            <h1 class="font-semibold text-[1.75rem] text-[#2a394e] py-4">Popular stocks</h1>
            <div class="relative flex-shrink-0 w-full">
              <div class="grid grid-cols-2 xl:grid-cols-5 lg:grid-cols-5 md:grid-cols-3 gap-5 justify-center py-2">
                <div class="rounded-md grid items-center duration-300 bg-white p-2 border border-[#C1B8B8] group md:hover:shadow-xl">
                  <div class="relative top-[0.625rem]">
                  <h4 class="text-lg font-semibold text-black text-center">IRFC</h4>
                  <div class="*:size-4 text-xs font-serif font-semibold flex justify-center text-green-500 py-1">−4.00
                    (2.73%)
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                      viewBox="0 0 20 20" aria-hidden="true" height="12.5rem"
                      width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd"
                        d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path></svg>
                  </div>
                  </div>
                  <div class="font-medium *:size-6 *:text-slate-600 flex justify-end *:duration-500 *:scale-0 md:*:group-hover:scale-100">
                    <svg stroke="currentColor" fill="none" stroke-width="2"
                      viewBox="0 0 24 24" stroke-linecap="round"
                      stroke-linejoin="round" height="12.5rem" width="12.5rem"
                      xmlns="http://www.w3.org/2000/svg"><path
                        d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
                  </div>
                </div>
                <div
                  class="rounded-md grid items-center duration-300 bg-white p-2 border border-[#C1B8B8] group md:hover:shadow-xl">
                  <div class="relative top-[0.625rem]">
                  <h4 class="text-lg font-semibold text-black text-center">NHPC Ltd</h4>
                  <div class="*:size-4 text-xs font-serif font-semibold flex justify-center text-green-500 py-1">−4.00
                    (2.73%)
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                      viewBox="0 0 20 20" aria-hidden="true" height="12.5rem"
                      width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path
                        fill-rule="evenodd"
                        d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path></svg>
                  </div>
                  </div>
                  <div class="font-medium *:size-6 *:text-slate-600 flex justify-end *:duration-500 *:scale-0 md:*:group-hover:scale-100">
                    <svg stroke="currentColor" fill="none" stroke-width="2"
                      viewBox="0 0 24 24" stroke-linecap="round"
                      stroke-linejoin="round" height="12.5rem" width="12.5rem"
                      xmlns="http://www.w3.org/2000/svg"><path
                        d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
                  </div>
                </div>
                <div class="rounded-md grid items-center bg-white duration-300 p-2 border border-[#C1B8B8] group md:hover:shadow-xl ">
                  <div class="relative top-[0.625rem]">
                  <h4 class="text-lg font-semibold text-black text-center">Rail Vikas</h4>
                  <div class="*:size-4 text-xs font-serif font-semibold flex justify-center text-green-500 py-1">−4.00
                    (2.73%)
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                      viewBox="0 0 20 20" aria-hidden="true" height="12.5rem"
                      width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path
                        fill-rule="evenodd"
                        d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path></svg>
                  </div>
                </div>
                  <div class="font-medium *:size-6 *:text-slate-600 flex bg-white justify-end *:duration-500 *:scale-0 md:*:group-hover:scale-100">
                    <svg stroke="currentColor" fill="none" stroke-width="2"
                      viewBox="0 0 24 24" stroke-linecap="round"
                      stroke-linejoin="round" height="12.5rem" width="12.5rem"
                      xmlns="http://www.w3.org/2000/svg"><path
                        d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
                  </div>
                </div>
                <div class="rounded-md grid items-center duration-300 bg-white p-2 border border-[#C1B8B8] group md:hover:shadow-xl">
                  <div class="relative top-[0.625rem]">
                  <h4 class="text-lg font-semibold text-black text-center">Vodafone Idea</h4>
                  <div class="*:size-4 text-xs font-serif font-semibold flex justify-center text-red-500 py-1">−4.00
                    (2.73%)
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="m112 268 144 144 144-144M256 392V100"></path></svg>
                  </div>
                  </div>
                  <div class="font-medium *:size-6 *:text-slate-600 flex justify-end *:duration-500 *:scale-0 md:*:group-hover:scale-100">
                    <svg stroke="currentColor" fill="none" stroke-width="2"
                      viewBox="0 0 24 24" stroke-linecap="round"
                      stroke-linejoin="round" height="12.5rem" width="12.5rem"
                      xmlns="http://www.w3.org/2000/svg"><path
                        d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
                  </div>
                </div>
                <div class="rounded-md grid items-center bg-white duration-300 p-2 border border-[#C1B8B8] group md:hover:shadow-xl ">
                  <div class="relative top-[0.625rem]">
                  <h4 class="text-lg font-semibold text-black text-center">Ircon
                    International</h4>
                  <div class="*:size-4 text-xs font-serif font-semibold flex justify-center text-red-500 py-1">−4.00
                    (2.73%)
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="m112 268 144 144 144-144M256 392V100"></path></svg>
                  </div>
                  </div>
                  <div class="font-medium *:size-6 *:text-slate-600 flex justify-end *:duration-500 *:scale-0 md:*:group-hover:scale-100">
                    <svg stroke="currentColor" fill="none" stroke-width="2"
                      viewBox="0 0 24 24" stroke-linecap="round"
                      stroke-linejoin="round" height="12.5rem" width="12.5rem"
                      xmlns="http://www.w3.org/2000/svg"><path
                        d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
                  </div>
                </div>
                <div class="rounded-md grid items-center bg-white duration-300 p-2 border border-[#C1B8B8] group md:hover:shadow-xl ">
                  <div class="relative top-[0.625rem]">
                  <h4 class="text-lg font-semibold text-black text-center">Rites</h4>
                  <div class="*:size-4 text-xs font-serif font-semibold flex justify-center text-green-500 py-1">−4.00
                    (2.73%)
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                      viewBox="0 0 20 20" aria-hidden="true" height="12.5rem"
                      width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path
                        fill-rule="evenodd"
                        d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path></svg>
                  </div>
                  </div>
                  <div class="font-medium *:size-6 *:text-slate-600 flex justify-end *:duration-500 *:scale-0 md:*:group-hover:scale-100">
                    <svg stroke="currentColor" fill="none" stroke-width="2"
                      viewBox="0 0 24 24" stroke-linecap="round"
                      stroke-linejoin="round" height="12.5rem" width="12.5rem"
                      xmlns="http://www.w3.org/2000/svg"><path
                        d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
                  </div>
                </div>
                <div class="rounded-md grid items-center bg-white duration-300 p-2 border border-[#C1B8B8] group md:hover:shadow-xl ">
                  <div class="relative top-[0.625rem]">
                  <h4 class="text-lg font-semibold text-black text-center">Titagarh Rail</h4>
                  <div
                    class="*:size-4 text-xs font-serif font-semibold flex justify-center text-red-500 py-1">−4.00
                    (2.73%)
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="m112 268 144 144 144-144M256 392V100"></path></svg>
                  </div>
                </div>
                  <div class="font-medium *:size-6 *:text-slate-600 flex justify-end *:duration-500 *:scale-0 md:*:group-hover:scale-100">
                    <svg stroke="currentColor" fill="none" stroke-width="2"
                      viewBox="0 0 24 24" stroke-linecap="round"
                      stroke-linejoin="round" height="12.5rem" width="12.5rem"
                      xmlns="http://www.w3.org/2000/svg"><path
                        d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
                  </div>
                </div>
                <div class="rounded-md grid items-center bg-white duration-300 p-2 border border-[#C1B8B8] group md:hover:shadow-xl ">
                  <div class="relative top-[0.625rem]">
                  <h4 class="text-lg font-semibold text-black text-center">Vodafone Idea</h4>
                  <div
                    class="*:size-4 text-xs font-serif font-semibold flex justify-center text-green-500 py-1">−4.00
                    (2.73%)
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                      viewBox="0 0 20 20" aria-hidden="true" height="12.5rem"
                      width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path
                        fill-rule="evenodd"
                        d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path></svg>
                  </div>
                </div>
                  <div class="font-medium *:size-6 *:text-slate-600 flex justify-end *:duration-500 *:scale-0 md:*:group-hover:scale-100">
                    <svg stroke="currentColor" fill="none" stroke-width="2"
                      viewBox="0 0 24 24" stroke-linecap="round"
                      stroke-linejoin="round" height="12.5rem" width="12.5rem"
                      xmlns="http://www.w3.org/2000/svg"><path
                        d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
                  </div>
                </div>
                <div class="rounded-md grid items-center bg-white duration-300 p-2 border border-[#C1B8B8] group md:hover:shadow-xl ">
                  <div class="relative top-[0.625rem]">
                  <h4 class="text-lg font-semibold text-black text-center">SBI</h4>
                  <div class="*:size-4 text-xs font-serif font-semibold flex justify-center text-green-500 py-1">−4.00
                    (2.73%)
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                      viewBox="0 0 20 20" aria-hidden="true" height="12.5rem"
                      width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path
                        fill-rule="evenodd"
                        d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path></svg>
                  </div>
                  </div>
                  <div class="font-medium *:size-6 *:text-slate-600 flex justify-end *:duration-500 *:scale-0 md:*:group-hover:scale-100">
                    <svg stroke="currentColor" fill="none" stroke-width="2"
                      viewBox="0 0 24 24" stroke-linecap="round"
                      stroke-linejoin="round" height="12.5rem" width="12.5rem"
                      xmlns="http://www.w3.org/2000/svg"><path
                        d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
                  </div>
                </div>
                <div class="rounded-md grid items-center bg-white duration-300 p-2 border border-[#C1B8B8] group md:hover:shadow-xl ">
                  <div class="relative top-[0.625rem]">
                  <h4 class="text-lg font-semibold text-black text-center">BSE</h4>
                  <div
                    class="*:size-4 text-xs font-serif font-semibold flex justify-center text-green-500 py-1">−4.00
                    (2.73%)
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                      viewBox="0 0 20 20" aria-hidden="true" height="12.5rem"
                      width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path
                        fill-rule="evenodd"
                        d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path></svg>
                  </div>
                  </div>
                  <div class="font-medium *:size-6 *:text-slate-600 flex justify-end *:duration-500 *:scale-0 md:*:group-hover:scale-100">
                    <svg stroke="currentColor" fill="none" stroke-width="2"
                      viewBox="0 0 24 24" stroke-linecap="round"
                      stroke-linejoin="round" height="12.5rem" width="12.5rem"
                      xmlns="http://www.w3.org/2000/svg"><path
                        d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
                  </div>
                </div>
                <div class="rounded-md grid items-center bg-white duration-300 p-2 border border-[#C1B8B8] group md:hover:shadow-xl ">
                  <div class="relative top-[0.625rem]">
                  <h4 class="text-lg font-semibold text-black text-center">Yes Bank</h4>
                  <div
                    class="*:size-4 text-xs font-serif font-semibold flex justify-center text-green-500 py-1">−4.00
                    (2.73%)
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                      viewBox="0 0 20 20" aria-hidden="true" height="12.5rem"
                      width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path
                        fill-rule="evenodd"
                        d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path></svg>
                  </div>
                  </div>
                  <div class="font-medium *:size-6 *:text-slate-600 flex justify-end *:duration-500 *:scale-0 md:*:group-hover:scale-100">
                    <svg stroke="currentColor" fill="none" stroke-width="2"
                      viewBox="0 0 24 24" stroke-linecap="round"
                      stroke-linejoin="round" height="12.5rem" width="12.5rem"
                      xmlns="http://www.w3.org/2000/svg"><path
                        d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
                  </div>
                </div>
                <div class="rounded-md grid items-center bg-white duration-300 p-2 border border-[#C1B8B8] group md:hover:shadow-xl ">
                  <div class="relative top-[0.625rem]">
                  <h4 class="text-lg font-semibold text-black text-center">Reliance</h4>
                  <div
                    class="*:size-4 text-xs font-serif font-semibold flex justify-center text-green-500 py-1">−4.00
                    (2.73%)
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                      viewBox="0 0 20 20" aria-hidden="true" height="12.5rem"
                      width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path
                        fill-rule="evenodd"
                        d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path></svg>
                  </div>
                  </div>
                  <div class="font-medium *:size-6 *:text-slate-600 flex justify-end *:duration-500 *:scale-0 md:*:group-hover:scale-100">
                    <svg stroke="currentColor" fill="none" stroke-width="2"
                      viewBox="0 0 24 24" stroke-linecap="round"
                      stroke-linejoin="round" height="12.5rem" width="12.5rem"
                      xmlns="http://www.w3.org/2000/svg"><path
                        d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
                  </div>
                </div>
                <div class="rounded-md grid items-center bg-white duration-300 p-2 border border-[#C1B8B8] group md:hover:shadow-xl ">
                  <div class="relative top-[0.625rem]">
                  <h4 class="text-lg font-semibold text-black text-center">S&P 500</h4>
                  <div
                    class="*:size-4 text-xs font-serif font-semibold flex justify-center text-red-500 py-1">−4.00
                    (2.73%)
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg">
                      <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="m112 268 144 144 144-144M256 392V100"></path>
                    </svg>
                  </div>
                  </div>
                  <div class="font-medium *:size-6 *:text-slate-600 flex justify-end *:duration-500 *:scale-0 md:*:group-hover:scale-100">
                    <svg stroke="currentColor" fill="none" stroke-width="2"
                      viewBox="0 0 24 24" stroke-linecap="round"
                      stroke-linejoin="round" height="12.5rem" width="12.5rem"
                      xmlns="http://www.w3.org/2000/svg"><path
                        d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
                  </div>
                </div>
                <div class="rounded-md grid items-center bg-white duration-300 p-2 border border-[#C1B8B8] group md:hover:shadow-xl ">
                  <div class="relative top-[0.625rem]">
                  <h4 class="text-lg font-semibold text-black text-center">IRFC</h4>
                  <div
                    class="*:size-4 text-xs font-serif font-semibold flex justify-center text-red-500 py-1">−4.00
                    (2.73%)
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="m112 268 144 144 144-144M256 392V100"></path></svg>
                  </div>
                </div>
                  <div class="font-medium *:size-6 *:text-slate-600 flex justify-end *:duration-500 *:scale-0 md:*:group-hover:scale-100">
                    <svg stroke="currentColor" fill="none" stroke-width="2"
                      viewBox="0 0 24 24" stroke-linecap="round"
                      stroke-linejoin="round" height="12.5rem" width="12.5rem"
                      xmlns="http://www.w3.org/2000/svg"><path
                        d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
                  </div>
                </div>
                <div class="rounded-md grid items-center bg-white duration-300 p-2 border border-[#C1B8B8] group md:hover:shadow-xl ">
                  <div class="relative top-[0.625rem]">
                  <h4 class="text-lg font-semibold text-black text-center">Greaves Cotton</h4>
                  <div
                    class="*:size-4 text-xs font-serif font-semibold flex justify-center text-red-500 py-1">−4.00
                    (2.73%)
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="m112 268 144 144 144-144M256 392V100"></path></svg>
                  </div>
                </div>
                  <div class="font-medium *:size-6 *:text-slate-600 flex justify-end *:duration-500 *:scale-0 md:*:group-hover:scale-100">
                    <svg stroke="currentColor" fill="none" stroke-width="2"
                      viewBox="0 0 24 24" stroke-linecap="round"
                      stroke-linejoin="round" height="12.5rem" width="12.5rem"
                      xmlns="http://www.w3.org/2000/svg"><path
                        d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div>
            <h1 class="font-semibold font-barlow text-[1.75rem] text-[#2a394e] py-4">What's trending</h1>
            <div>
              <div class="w-full lg:w-2/3 flex flex-wrap gap-2">
                <button class="px-3 py-2 bg-[#f9fbfe] text-[#2a394e] border border-[#e0e0ec] rounded-3xl text-lg font-semibold hover:text-[#3f5bd9] hover:border-[#3f5bd9] hover:bg-[#e9e9e9] duration-300">FINNifty</button>
                <button class="px-3 py-2 bg-[#f9fbfe] text-[#2a394e] border border-[#e0e0ec] rounded-3xl text-lg font-semibold hover:text-[#3f5bd9] hover:border-[#3f5bd9] hover:bg-[#e9e9e9] duration-300">BSE Small Cap</button>
                <button class="px-3 py-2 bg-[#f9fbfe] text-[#2a394e] border border-[#e0e0ec] rounded-3xl text-lg font-semibold hover:text-[#3f5bd9] hover:border-[#3f5bd9] hover:bg-[#e9e9e9] duration-300">52-week high</button>
                <button class="px-3 py-2 bg-[#f9fbfe] text-[#2a394e] border border-[#e0e0ec] rounded-3xl text-lg font-semibold hover:text-[#3f5bd9] hover:border-[#3f5bd9] hover:bg-[#e9e9e9] duration-300">52-week low</button>
                <button class="px-3 py-2 bg-[#f9fbfe] text-[#2a394e] border border-[#e0e0ec] rounded-3xl text-lg font-semibold hover:text-[#3f5bd9] hover:border-[#3f5bd9] hover:bg-[#e9e9e9] duration-300">BSE Sensex</button>
                <button class="px-3 py-2 bg-[#f9fbfe] text-[#2a394e] border border-[#e0e0ec] rounded-3xl text-lg font-semibold hover:text-[#3f5bd9] hover:border-[#3f5bd9] hover:bg-[#e9e9e9] duration-300">Nifty 50</button>
                <button class="px-3 py-2 bg-[#f9fbfe] text-[#2a394e] border border-[#e0e0ec] rounded-3xl text-lg font-semibold hover:text-[#3f5bd9] hover:border-[#3f5bd9] hover:bg-[#e9e9e9] duration-300">Nifty Bank</button>
                <button class="px-3 py-2 bg-[#f9fbfe] text-[#2a394e] border border-[#e0e0ec] rounded-3xl text-lg font-semibold hover:text-[#3f5bd9] hover:border-[#3f5bd9] hover:bg-[#e9e9e9] duration-300">Nifty Next 50</button>
                <button class="px-3 py-2 bg-[#f9fbfe] text-[#2a394e] border border-[#e0e0ec] rounded-3xl text-lg font-semibold hover:text-[#3f5bd9] hover:border-[#3f5bd9] hover:bg-[#e9e9e9] duration-300">Margin Calculator</button>
                <button class="px-3 py-2 bg-[#f9fbfe] text-[#2a394e] border border-[#e0e0ec] rounded-3xl text-lg font-semibold hover:text-[#3f5bd9] hover:border-[#3f5bd9] hover:bg-[#e9e9e9] duration-300">SIP Calculator</button>
                <button class="px-3 py-2 bg-[#f9fbfe] text-[#2a394e] border border-[#e0e0ec] rounded-3xl text-lg font-semibold hover:text-[#3f5bd9] hover:border-[#3f5bd9] hover:bg-[#e9e9e9] duration-300">Lumpsum Calculator</button>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>
<?php include_once('footer.php'); ?>