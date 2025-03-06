<?php include_once('header.php'); ?>
<div class="w-full bg-[#E7EFFA] rounded-bl-[3.563rem] rounded-br-[3.563rem] py-12 lg:py-0 lg:h-96 h-auto mt-24 relative overflow-hidden flex   items-center justify-center">
      <div class="2xl:px-24 3xl:px-36 lg:pb-3  px-6 lg:px-8  w-full mx-auto flex items-center justify-between flex-col lg:flex-row relative z-10">
        <div class="flex flex-col justify-start  font-serif space-y-3 text-black lg:text-left text-left">
          <h1 class=" text-xl lg:text-[2.5rem] font-heading font-bold ">IRFC</h1>
          <p class="lg:text-[1.125rem] font-serif  text-[#1B1E31] font-medium">
          Indian Railway Finance Corporation (IRFC) is the dedicated financial arm of Indian Railways, playing a crucial role in funding railway infrastructure.          </p>
          <ul class="flex font-serif space-x-2 items-center lg:text-[1.125rem]">
            <li>Home</li>  
            <li class="-mt-2">.</li>
            <li class="font-bold text-[#1B1E31]"><a href="irfc">IRFC</a></li> 
          </ul> 
        </div>
        <img src="assets/img/invheadbg.png" alt="" class="w-1/2 lg:w-[35%]" >
      </div>
    
      <img src="assets/img/headside-img.png" 
           alt="" 
           class=" h-full absolute lg:top-0 top-4 lg:right-0 z-0">
           <img src="assets/img/headbg2.png" alt=""  class="w-[90%] top-[35px] left-[150px] absolute    z-0" >
           <img src="assets/img/headbg3.png" alt=""  class=" w-[60%] left-[6px] -bottom-[81px]  absolute    z-0" >
    </div>


      <section class="w-full py-[80px] font-barlow relative bg-white" >
        <div class="2xl:px-24 3xl:px-36 lg:pb-3  px-6 lg:px-8 w-full    lg:w-full mx-auto  flex flex-col space-y-[14px] ">
        <div>
          <ul class="flex space-x-1 lg:space-x-2 flex-row">
            <li class="flex space-x-1 lg:space-x-2 text-[#3f5bd9] font-semibold text-sm lg:text-base font-barlow flex-row">Home <span class="text-black py-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg></span></li>
            <li class="flex space-x-1 lg:space-x-2 text-[#3f5bd9] font-semibold text-sm lg:text-base flex-row ">All Stocks <span  class="text-black py-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg></span></li>
           <li  class=" text-[#777d87] text-sm lg:text-base font-semibold">
            Indian Railway Finance Corporation Ltd</li>
          </ul>


        </div>
        <div>
          <h1 class="font-semibold text-3xl text-[#2A394E]">IRFC Share Price</h1>
        </div>
        <div class="flex space-x-3 flex-row">
         <h1 class="text-[#253040] font-normal text-lg ">IRFC</h1>
         <div class="flex flex-row rounded-lg border border-black">
          <button id="nseBtn" 
          class="bg-slate-600 font-medium text-sm text-white px-5 py-2 font-barlow rounded-md transition-all duration-300"
          onclick="toggleActive('NSE')">
          NSE
      </button>
      <button id="bseBtn" 
          class="bg-white font-medium text-sm px-5 py-2 text-[#425061] font-barlow rounded-md transition-all duration-300"
          onclick="toggleActive('BSE')">
          BSE
      </button>
         </div>
        </div>
        
        <div>
        <h1 class=" text-[#777D87] font-medium text-base font-barlow">Large Cap I Finance</h1>
      </div>

      <div class=" flex lg:max-w-xl  w-full justify-between flex-row">
        <div class=" flex flex-row" >
          <h1 class="text-black  text-3xl font-barlow  font-semibold">₹ 110.94

            <span class="text-red-400 font-barlow font-normal text-xl">-1.48(1.32%)</span></h1>  
        </div>
        <div class=" flex space-x-5 flex-row">
          <button class="bg-[#009b7d] lg:px-9 px-6 h-11 lg:h-14 text-white rounded-md text-sm lg:text-base font-barlow font-semibold">BUY</button>
          <button class="bg-[#e05858] lg:px-9 px-6 h-11 lg:h-14 text-white rounded-md text-base font-barlow font-semibold">SELL</button>
        </div>
      </div>

      <div class="flex flex-row w-full overflow-x-auto">
        <ul class="flex flex-row w-full gap-10">
          <li class="text-[#777d87] font-barlow font-normal text-xl relative 
                     before:absolute before:bottom-0 before:left-0 
                     before:w-0 before:h-[3px] before:top-8 before:bg-blue-500 
                     before:duration-300 hover:before:w-full 
                     flex-shrink-0 whitespace-nowrap">
            Fundamental
          </li>
          <li class="text-[#777d87] font-barlow font-normal text-xl relative 
                     before:absolute before:bottom-0 before:left-0 
                     before:w-0 before:h-[3px] before:top-8 before:bg-blue-500 
                     before:duration-300 hover:before:w-full 
                     flex-shrink-0 whitespace-nowrap">
            Financials
          </li>
          <li class="text-[#777d87] font-barlow font-normal text-xl relative 
                     before:absolute before:bottom-0 before:left-0 
                     before:w-0 before:h-[3px] before:top-8 before:bg-blue-500 
                     before:duration-300 hover:before:w-full 
                     flex-shrink-0 whitespace-nowrap">
            Corporate Actions
          </li>
          <li class="text-[#777d87] font-barlow font-normal text-xl relative 
                     before:absolute before:bottom-0 before:left-0 
                     before:w-0 before:h-[3px] before:top-8 before:bg-blue-500 
                     before:duration-300 hover:before:w-full 
                     flex-shrink-0 whitespace-nowrap">
            Share Holding Pattern
          </li>
          <li class="text-[#777d87] font-barlow font-normal text-xl relative 
                     before:absolute before:bottom-0 before:left-0 
                     before:w-0 before:h-[3px] before:top-8 before:bg-blue-500 
                     before:duration-300 hover:before:w-full 
                     flex-shrink-0 whitespace-nowrap">
            About Company
          </li>
          <li class="text-[#777d87] font-barlow font-normal text-xl relative 
                     before:absolute before:bottom-0 before:left-0 
                     before:w-0 before:h-[3px] before:top-8 before:bg-blue-500 
                     before:duration-300 hover:before:w-full 
                     flex-shrink-0 whitespace-nowrap">
            Peer Comparison
          </li>
        </ul>
      </div>
      
        </div>
       </section>


       <section class="w-full py-[30px] relative bg-white" >
        <div class="2xl:px-24 3xl:px-36 lg:pb-3  px-6 lg:px-8    lg:w-full mx-auto  flex flex-col space-y-[14px] ">
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
                  <div class="px-2 py-1 border text-blue-500  rounded-md transition-all duration-300"><h1>1D</h1></div>
                  <div class="px-2 py-1 rounded-md transition-all hover:text-blue-600 text-gray-500 duration-300 hover:border "><h1>1W</h1></div>
                  <div class="px-2 py-1 rounded-md transition-all hover:text-blue-600 text-gray-500 duration-300 hover:border "><h1>1M</h1></div>
                  <div class="px-2 py-1 rounded-md transition-all hover:text-blue-600 text-gray-500 duration-300 hover:border "><h1>3M</h1></div>
                  <div class="px-2 py-1 rounded-md transition-all hover:text-blue-600 text-gray-500 duration-300 hover:border "><h1>6M</h1></div>
                  <div class="px-2 py-1 rounded-md transition-all hover:text-blue-600 text-gray-500 duration-300 hover:border "><h1>1Y</h1></div>
                  <div class="px-2 py-1 rounded-md transition-all hover:text-blue-600 text-gray-500 duration-300 hover:border "><h1>5Y</h1></div>
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
                    <th class="w-[8.125rem] h-[5rem] px-3 py-1 border text-[#2a394e] text-lg font-barlow font-semibold  " >Held by</th>
                    <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#2a394e] text-lg font-barlow font-semibold  " >Dec 2023</th>
                    <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#2a394e] text-lg font-barlow font-semibold  " >Mar 2024</th>
                    <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#2a394e] text-lg font-barlow font-semibold  " >Jun 2024</th>
                    <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#2a394e] text-lg font-barlow font-semibold  " >Sep 2024</th>
                    <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#2a394e] text-lg font-barlow font-semibold  " >Dec 2024</th>
                  </thead>
                  <tbody>
                   <tr class="border">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold px-5 py-12 border" >
                      Promoters
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      	86.36%
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      	86.36%
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      	86.36%
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      	86.36%
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      	86.36%
                    </td>
                   </tr>
                   <tr class="border bg-[#f9fbfe]">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py-12 border" >
                      Flls
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                    	1.15%
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      1.08%
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                    	1.11%
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      1.09%
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      1.01%
                    </td>
                   </tr>
                   <tr>
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py-12 border" >
                      Dlls
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      1.16%
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      0.89%
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      1.07%
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      1.08%
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      1.24%
                    </td>
                   </tr>
                   <tr class="border bg-[#f9fbfe]">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py- border" >
                      Public
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      11.33%
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      11.67%
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                     11.45%
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      11.46%
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      11.39%
                    </td>
                   </tr>
                  </tbody>
                </table>
                
                
                <div class="flex flex-row py-4 justify-end">
                  <h1 class="text-[#3f5bd9] flex flex-row cursor-pointer text-xl font-barlow font-semibold">VIEW ALL <span class="text-[#3f5bd9] -mt-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="2em" width="2em" xmlns="http://www.w3.org/2000/svg"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg></span></h1>
                </div>

              </div>


              <div class="w-full h-auto">
                <h1 class="lg:text-3xl text-xl text-[#2a394e] font-barlow py-5 font-semibold">Indian Railway Finance Corporation Fundamentals</h1>  
                 
             

               <div class="grid grid-cols-1 lg:space-x-5 lg:grid-cols-2">


               <div>
                <table class="border  w-full text-left">
                  <thead>
                    <th class="w-[12.125rem] h-[5rem] px-3 py-1 border text-[#2a394e] text-lg font-barlow font-semibold  " >ROCE(TTM)</th>
                    <td class="w-[6.125rem] h-[5rem] px-5 py-1" >
                      5.84
                  </td>
                 
                  </thead>
                  <tbody>
                   <tr class="border bg-[#f9fbfe]">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold px-5 py-12 border" >
                      P/E Ratio (TTM)
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      22.48
                    </td>
                  
                   </tr>
                   <tr class="border ">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py-12 border" >
                      P/B Ratio
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      2.82
                    </td>
                   
                   </tr>
                   <tr class="bg-[#f9fbfe]">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py-12 border" >
                      Industry P/E
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      23.08
                    </td>
                   
                   </tr>
                   <tr class="border ">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py- border" >
                      Debt to Equity
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      7.81
                    </td>
                  
                   </tr>
                 
                  </tbody>
                </table>
               </div>
               <div>
                <table class="border w-full text-left">
                  <thead>
                    <th class="w-[12.125rem] h-[5rem] px-3 py-1 border text-[#2a394e] text-lg font-barlow font-semibold  " >ROE</th>
                     <td class="w-[6.125rem] h-[5rem] px-5 py-1" >
                      12.56
                  </td>
                  </thead>
                  <tbody>
                   <tr class="border bg-[#f9fbfe]">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold px-5 py-12 border" >
                      EPS (TTM)
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      	5
                    </td>
                  
                   </tr>
                   <tr class="border ">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py-12 border" >
                      Dividend Yield
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                    	1.33
                    </td>
                   
                   </tr>
                   <tr class="bg-[#f9fbfe]">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py-12 border" >
                      Book Value
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      1.16%
                    </td>
                   
                   </tr>
                   <tr class="border">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py- border" >
                      Face Value
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      10
                    </td>
                  
                   </tr>
                 
                  </tbody>
                </table>
               </div>

               </div>
                
                
                

              </div>

              <div class="w-full h-auto overflow-x-auto">
                <h1 class=" text-xl lg:text-3xl text-[#2a394e] font-barlow py-5 font-semibold">Indian Railway Finance Corporation Financials</h1>  
                 
             

                <table class="border  w-full text-left">
                  <thead>
                    <th class="w-[8.125rem] h-[5rem] px-3 py-1 border text-[#2a394e] text-lg font-barlow font-semibold  " ></th>
                    <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#2a394e] text-lg font-barlow font-semibold  " >Mar 2024</th>
                    <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#2a394e] text-lg font-barlow font-semibold  " >Jun 2024</th>
                    <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#2a394e] text-lg font-barlow font-semibold  " >Sep 2024</th>
                    <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#2a394e] text-lg font-barlow font-semibold  " >Dec 2024</th>
                  </thead>
                  <tbody>
                   <tr class="border">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold px-5 py-12 border" >
                      Expenses
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      4,760.67
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      5,189.20
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      5,287.55
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      5,135.73
                    </td>
                   
                   </tr>
                   <tr class="border bg-[#f9fbfe]">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py-12 border" >
                      Profit before tax
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                    	1,717.32
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      1,576.82
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      1,612.65
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      1,630.66
                    </td>
                   
                   </tr>
                   <tr>
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py-12 border" >
                      Operating Profit
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                    	1,717.32
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      1,576.82
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      1,612.65
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      1,630.66
                    </td>
                   </tr>
                   <tr class="border bg-[#f9fbfe]">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py- border" >
                      Net Profit
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                    	1,717.32
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      1,576.82
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      1,612.65
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      1,630.66
                    </td>
                   </tr>
                   <tr class="border ">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py- border" >
                      ESP in RS
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                    	1.32
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      1.21
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      1.23
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      1.25
                    </td>
                   </tr>
                  </tbody>
                </table>
                
                
                <div class="flex flex-row py-4 justify-end">
                  <h1 class="text-[#3f5bd9] flex flex-row cursor-pointer text-xl font-barlow font-semibold">VIEW ALL <span class="text-[#3f5bd9] -mt-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="2em" width="2em" xmlns="http://www.w3.org/2000/svg"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg></span></h1>
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
              <div class="mt-6   bg-white rounded-md">
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
                          <th class="w-[8.125rem] h-[5rem] px-3 py-1 border text-[#777d87] text-lg font-barlow font-normal  " >Announcement Date</th>
                          <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#777d87] text-lg font-barlow font-normal  " >Ex-Date</th>
                          <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#777d87] text-lg font-barlow font-normal  " >Dividend Type</th>
                          <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#777d87] text-lg font-barlow font-normal  " >Dividend (%)</th>
                          <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#777d87] text-lg font-barlow font-normal  " >Dividend (Rs)</th>
                        </thead>
                        <tbody>
                         <tr class="border">
                          <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold px-5 py-8 border" >
                            20th May, 2024
                          </td>
                          <td class="w-[8.125rem] h-[5rem] px-5 py-8" >
                            22nd Aug, 2024
                          </td>
                          <td class="w-[8.125rem] h-[5rem] px-5 py-8" >
                            Final
                          </td>
                          <td class="w-[8.125rem] h-[5rem] px-5 py-8" >
                            7
                          </td>
                          <td class="w-[8.125rem] h-[5rem] px-5 py-8" >
                            0.7
                          </td>
                         
                         </tr>
                         <tr class="border bg-[#f9fbfe]">
                          <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py-8 border" >
                            4th Nov, 2024
                          </td>
                          <td class="w-[8.125rem] h-[5rem] px-5 py-8" >
                            12th Nov, 2024
                          </td>
                          <td class="w-[8.125rem] h-[5rem] px-5 py-8" >
                          Interm
                          </td>
                          <td class="w-[8.125rem] h-[5rem] px-5 py-8" >
                            8
                          </td>
                          <td class="w-[8.125rem] h-[5rem] px-5 py-8" >
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
                  </div></div>
                  <div id="rights" class="tab-content hidden">
                     <div class="w-full flex justify-center items-center shadow-lg h-[13rem]">
                    <h1>Data is not available currently. Please check back later. </h1>
                  </div></div>
                  <div id="agm-egm" class="tab-content hidden">
                     <div class="w-full flex justify-center items-center shadow-lg h-[13rem]">
                    <h1>Data is not available currently. Please check back later. </h1>
                  </div></div>
              </div>
      
          </div>

          <div class="flex flex-row py-8 justify-end">
            <h1 class="text-[#3f5bd9] flex flex-row cursor-pointer text-xl font-barlow font-semibold">VIEW ALL <span class="text-[#3f5bd9] -mt-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="2em" width="2em" xmlns="http://www.w3.org/2000/svg"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg></span></h1>
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
            <li > •  In 1996, it issued deep discount bonds to the public and also issued floating rate notes worth $70 million in offshore markets.</li>
           <li > •  In 1998, it issued secured, redeemable, non-cumulative, taxable bonds to LIC for a 15-year tenure.</li>
           <li>  •  The following year, it issued secured, redeemable, non-cumulative, taxable bonds in Separately Transferable, Redeemable Principal Parts (STRPP).</li>
           <li>  •  In 2006, it issued floating-rate bonds in the Indian capital market.</li>
           <li>  •  In 2011, it raised a foreign currency term loan from the American Family Life Assurance Company of Columbus for a tenure of 15 years.</li>
           <li>   • In 2020, IRFC issued bonds worth $1 billion via Regulation S of the USA.</li>
          </ul>

          <p  class="font-normal py-2 text-[#2a394e] font-barlow text-xl">
            In January 2021, IRFC successfully raised ₹4,633 crore through its IPO. It was a fresh issue of 118 crore equity shares aggregating to ₹3,088 crore and an offer for sale of 59 crore equity shares aggregating to ₹1,544 crore by the Indian government.
          </p>

          <h1 class="text-3xl text-[#2a394e] font-barlow py-3 font-bold">Business Segments</h1>
          
          <h1  class="font-normal py-2 text-[#2a394e] leading-8 font-barlow text-xl">
            The following are the primary businesses of IRFC: <span class="font-bold">Raising Funds for Railway Projects</span> IRFC’s task is to minimise the cost of financing the acquisition of rolling stock assets, such as locomotives, coaches, wagons, trucks, flats, electric multiple units, containers, cranes, etc., as per the Standard Lease Agreements. IRFC does so by raising funds from taxable and tax-free bonds, term loans from banks and other financial institutions, commercial papers, external commercial borrowings (ECB), etc. As of FY 2022, the biggest sources of financing were rupee-term loans, followed by taxable Bonds and then external commercial borrowings (ECB). <span class="font-bold">Lending to Railway  Companies</span> IRFC also lends funds to various railway sector companies like Rail Vikas Nigam Limited (RVNL), Rail Land Development Authority, Railtel Corporation of India, etc.  <span class="font-bold">Leasing Railway Infrastructure Assets</span> IRFC also performs the leasing of railway infrastructure assets along with major projects of the Government of India and lends to other entities under the Ministry of Railways, Government of India (MoR). It employs a cost-plus-lease arrangement with the MoR ensuring a net interest margin for IRFC. The company employs a 30-year financial leasing model for financing the rolling stock assets. In the first 15 years, the principal amount is payable, along with the weighted average cost of borrowing plus a margin determined by the MoR. The weighted average cost of borrowing includes costs of hedging against foreign currency and interest rate fluctuations. For the second 15 years, the company charges the Indian Railways a nominal rate. At the end of the lease, assets are typically sold to the MoR for a nominal price. As of December 31, 2022, 48.86% of the total loans and advances in IRFC’s loan book were towards lease receivables from MoR, 49.81% of loans and advances were against the lease of railway infrastructure assets and for national projects, and the remaining 1.33% as loans provided to IRCON, RVNL, etc. Financing of rolling stock was the highest source of revenue at around 58% of total revenue as of FY 2022, with interest income coming second at around 33%. The company does not have any subsidiary as of March 2023. 
          </h1>

          <h1 class="text-3xl text-[#2a394e] font-barlow py-3 font-bold">IRFC Corporate Action</h1>
          <h1  class="font-normal py-2 text-[#2a394e] leading-8 font-barlow text-xl">
            IRFC has not issued any rights shares, buybacks, bonus shares, or stock splits in recent times. 
          </h1>
           
          <h1 class="text-3xl text-[#2a394e] font-barlow py-3 font-bold">Financial Highlights</h1>

          <ul class=" space-y-4 px-4 font-normal text-[#2a394e] font-barlow text-xl">
            <li > •  The company has consistently increased its sales revenue every year, from ₹5,550 crore in FY 2013 to ₹23,892 crore in FY 2023, thus increasing by a rough CAGR of 38.77% in this period.</li>
           <li > • Simultaneously, the company has also increased its profitability. Its net profit as a percentage of sales has improved from 10.36% in FY 2013 to 26.52% in FY 2023.</li>
           <li>  •  As of September 2023, the company has a quick ratio of 15.7x, though it also has an interest coverage ratio of 1.34x.</li>
          
          </ul>

          <p class=" space-y-4  font-normal text-[#2a394e] font-barlow text-xl" >  <span class="font-bold">Note:</span> All financial risks, such as interest rate risk and exchange rate risk, are passed onto the MoR. IRFC is exempted from the RBI’s asset classification norms, provisioning norms, and exposure norms with respect to its exposure to the MoR.</p>

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
                    <th class="w-[16rem] h-[5rem] px-3 py-1 border text-[#2a394e] text-lg font-barlow font-semibold  " >Stocks</th>
                    <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#2a394e] text-lg font-barlow font-semibold  " >LTP (₹)</th>
                    <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#2a394e] text-lg font-barlow font-semibold  " >Market Cap (cr)</th>
                    <th class="w-[8.125rem] h-[5rem] px-3 py-1 text-[#2a394e] text-lg font-barlow font-semibold  " > 52 Week Low-High (₹)</th>
                  </thead>
                  <tbody>
                   <tr class="border">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold px-5 py-12 border" >
                      Bajaj Finance Ltd
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      <h1 class="text-[#ef5854] flex"> 8,566.4<span  class="text-[#ef5854] py-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M11.646 15.146 5.854 9.354a.5.5 0 0 1 .353-.854h11.586a.5.5 0 0 1 .353.854l-5.793 5.792a.5.5 0 0 1-.707 0Z"></path></svg></span></h1>
                      -61.45 (-0.71%)
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      ₹5,34,818.90
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                     
6,187.8 - 8,739.0     
                    </td>
                    
                   
                   </tr>
                   <tr class="border bg-[#f9fbfe]">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py-12 border" >
                      Bajaj Finance Ltd
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      <h1 class="text-[#ef5854] flex"> 1,790.45<span  class="text-[#ef5854] py-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M11.646 15.146 5.854 9.354a.5.5 0 0 1 .353-.854h11.586a.5.5 0 0 1 .353.854l-5.793 5.792a.5.5 0 0 1-.707 0Z"></path></svg></span></h1>
                      -61.45 (-0.71%)
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      ₹2,93,498.43
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      
1,419.05 - 2,029.9
                    </td>
                   
                   
                   </tr>
                   <tr>
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py-12 border" >
                      Jio Financial Services Ltd
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      <h1 class="text-green-600 flex"> 1,790.45<span  class="text-green-600  py-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M11.646 15.146 5.854 9.354a.5.5 0 0 1 .353-.854h11.586a.5.5 0 0 1 .353.854l-5.793 5.792a.5.5 0 0 1-.707 0Z"></path></svg></span></h1>
                      -61.45 (-0.71%)
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      ₹1,27,669.25
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                     
198.65 - 394.7
                    </td>
                    
                   </tr>
                   <tr class="border bg-[#f9fbfe]">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py- border" >
                      Bajaj Holdings & Investment Ltd
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      <h1 class="text-[#ef5854] flex">379.3<span  class="text-[#ef5854] py-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M11.646 15.146 5.854 9.354a.5.5 0 0 1 .353-.854h11.586a.5.5 0 0 1 .353.854l-5.793 5.792a.5.5 0 0 1-.707 0Z"></path></svg></span></h1>
                      -61.45 (-0.71%)
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                    	₹1,25,304.86
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                     
351.7 - 580.0
                    </td>
                    
                   </tr>
                   <tr class="border ">
                    <td class="w-[8.125rem] h-[5rem] text-[#2a394e] text-xl font-barlow font-semibold  px-5 py- border" >
                      Cholamandalam Investment & Finance Company Ltd
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      <h1 class="text-green-600 flex"> 1,442.0<span  class="text-green-600  py-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M11.646 15.146 5.854 9.354a.5.5 0 0 1 .353-.854h11.586a.5.5 0 0 1 .353.854l-5.793 5.792a.5.5 0 0 1-.707 0Z"></path></svg></span></h1>
                      -61.45 (-0.71%)
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      ₹1,19,367.81
                    </td>
                    <td class="w-[8.125rem] h-[5rem] px-5 py-12" >
                      
1,011.2 - 1,652.0
                    </td>
                   
                   </tr>
                  </tbody>
                </table>
                
                
                <div class="flex flex-row py-4 justify-end">
                  <h1 class="text-[#3f5bd9] flex flex-row cursor-pointer text-xl font-barlow font-semibold">VIEW ALL <span class="text-[#3f5bd9] -mt-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="2em" width="2em" xmlns="http://www.w3.org/2000/svg"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg></span></h1>
                </div>

              </div>
              <div class="w-full h-auto ">
                <h1 class=" text-xl lg:text-3xl text-[#2a394e] font-barlow py-5 font-semibold">Community Discussion</h1>  
                   

                <div class="w-full flex flex-col justify-center  items-center h-[24rem] border">
                     <div>
                      <img src="assets/img/Screenshot 2025-03-04 170822.png" alt="">
                     </div> 
                      
                     <h1 class="text-black font-barlow font-medium text-base">No comments found 
                      </h1>
                      <h1   class="text-black font-barlow font-normal text-base">Be the first one to start a discussion</h1>
                </div>
             

              
                
                
                <div class="flex flex-row py-4 justify-end">
                  <h1 class="text-[#3f5bd9] flex flex-row cursor-pointer text-xl font-barlow font-semibold">START DISCUSSION <span class="text-[#3f5bd9] -mt-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="2em" width="2em" xmlns="http://www.w3.org/2000/svg"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg></span></h1>
                </div>

              </div>


             

               <div class=" flex flex-col gap-4">
                <div>
                  <h1 class="font-semibold text-[1.75rem] text-[#2a394e] py-4">Popular stocks</h1>
               
                    <div
                      class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 text-[#3f5bd9] text-lg  font-semibold  border-gray-400 rounded-sm h-auto ">
                      <div
                        class="flex justify-center items-center h-[6.25rem] px-2 text-center border border-[#e0e0ec] hover:border-[#3f5bd9] duration-300 cursor-pointer ">
                        <p>IRFC share price</p>
                      </div>
                      <div
                        class="flex justify-center items-center h-[6.25rem] px-2 text-center border border-[#e0e0ec] hover:border-[#3f5bd9] duration-300 cursor-pointer ">
                        <p>Suzlon share price</p>
                      </div>
                      <div
                        class="flex justify-center items-center h-[6.25rem] px-2 text-center border border-[#e0e0ec] hover:border-[#3f5bd9] duration-300 cursor-pointer ">
                        <p>IREDA share price</p>
                      </div>
                      <div
                        class="flex justify-center items-center h-[6.25rem] px-2 text-center border border-[#e0e0ec] hover:border-[#3f5bd9] duration-300 cursor-pointer ">
                        <p>Tata Motors share price</p>
                      </div>
                      <div
                        class="flex justify-center items-center h-[6.25rem] px-2 text-center border border-[#e0e0ec] hover:border-[#3f5bd9] duration-300 cursor-pointer ">
                        <p>Yes Bank share price</p>
                      </div>
                      <div
                        class="flex justify-center items-center h-[6.25rem] px-2 text-center  border border-[#e0e0ec] hover:border-[#3f5bd9] duration-300 cursor-pointer ">
                        <p>HDFC Bank share price</p>
                      </div>
                      <div
                        class="flex justify-center items-center h-[6.25rem] px-2 text-center border border-[#e0e0ec] hover:border-[#3f5bd9] duration-300 cursor-pointer ">
                        <p>NHPC share price</p>
                      </div>
                      <div
                        class="flex justify-center items-center h-[6.25rem] px-2 text-center border border-[#e0e0ec] hover:border-[#3f5bd9] duration-300 cursor-pointer ">
                        <p>RVNL share price</p>
                      </div>
                      <div
                        class="flex justify-center items-center h-[6.25rem] px-2 text-center border border-[#e0e0ec] hover:border-[#3f5bd9] duration-300 cursor-pointer ">
                        <p>SBI share price</p>
                      </div>
                      <div
                        class="flex justify-center items-center h-[6.25rem] px-2 text-center border border-[#e0e0ec] hover:border-[#3f5bd9] duration-300 cursor-pointer ">
                        <p>Tata Power share price</p>
                      </div>
                      <div
                        class="flex justify-center items-center h-[6.25rem] px-2 text-center border border-[#e0e0ec] hover:border-[#3f5bd9] duration-300 cursor-pointer ">
                        <p>Tata Steel share price</p>
                      </div>
                      <div
                        class="flex justify-center items-center h-[6.25rem] px-2 text-center border border-[#e0e0ec] hover:border-[#3f5bd9] duration-300 cursor-pointer ">
                        <p>Adani Power share price</p>
                      </div>
                      <div
                        class="flex justify-center items-center h-[6.25rem] px-2 text-center border border-[#e0e0ec] hover:border-[#3f5bd9] duration-300 cursor-pointer ">
                        <p>PNB share price</p>
                      </div>
                      <div
                        class="flex justify-center items-center h-[6.25rem] px-2 text-center border border-[#e0e0ec] hover:border-[#3f5bd9] duration-300 cursor-pointer ">
                        <p>Zomato share price</p>
                      </div>
                      <div
                        class="flex justify-center items-center h-[6.25rem] px-2 text-center border border-[#e0e0ec] hover:border-[#3f5bd9] duration-300 cursor-pointer ">
                        <p>BEL share price</p>
                      </div>
                      <div
                        class="flex justify-center items-center h-[6.25rem] px-2 text-center border border-[#e0e0ec] hover:border-[#3f5bd9] duration-300 cursor-pointer ">
                        <p>Reliance Share Price</p>
                      </div>
                      <div
                        class="flex justify-center items-center h-[6.25rem] px-2 text-center border border-[#e0e0ec] hover:border-[#3f5bd9] duration-300 cursor-pointer ">
                        <p>Infosys share price</p>
                      </div>
                      <div
                        class="flex justify-center items-center h-[6.25rem] px-2 text-center border border-[#e0e0ec] hover:border-[#3f5bd9] duration-300 cursor-pointer ">
                        <p>ITC share price</p>
                      </div>
                      <div
                        class="flex justify-center items-center h-[6.25rem] px-2 text-center border border-[#e0e0ec] hover:border-[#3f5bd9] duration-300 cursor-pointer ">
                        <p>Jio Finance share price</p>
                      </div>
                      <div
                        class="flex justify-center items-center h-[6.25rem] px-2 text-center border border-[#e0e0ec] hover:border-[#3f5bd9] duration-300 cursor-pointer ">
                        <p>LIC share price</p>
                      </div>
      
      
                    </div>
       
                </div>
                
      
                <div>
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
                </div>
              </div>

               <section class="w-full relative bg-white rounded-t-[3.563rem] -mt-14 py-6 md:py-20">
                <div class="w-full mx-auto">
                  <div
                    class="overflow-hidden relative w-full aspect-square mx-auto rounded-[44px] lg:h-[26.25rem] h-[16.875rem] bg-cover bg-center bg-no-repeat bg-[url('../img/cta-bg.png')] ">
                    <div class="flex flex-wrap lg:flex-nowrap items-center">
                      <div class="lg:grow hidden lg:block">
                        <div class="w-full">
                          <img class="w-full" src="assets\img\bull-img.png">
                        </div>
                      </div>
                      <div class="lg:w-3/5 w-full flex items-center justify-center px-4 lg:py-10 py-6">
                        <div>
                        <div class="heading text-center lg:text-left ">
                          <h2 class="max-md:text-2xl max-xl:text-3xl text-4xl/tight font-bold text-white  ">
                           Begin your investing journey with TECH TRADE
                          </h2>
                          <div
                            class="lg:mt-6 mt-3 sm:text-base text-slate-100 font-medium text-sm leading-6">Sanchit
                            Financial & Management Services Ltd. is a leading financial
                            services company headquartered in Punjab.</div>
                          <div   id="" class=" lg:mt-6 mt-3 flex gap-4 justify-center lg:justify-start">
                            <a class="group/btn rounded-lg overflow-hidden max-w-full w-fit origin-bottom py-4 ps-6 pe-8 text-[#004AAD] flex font-semibold relative z-10 hover:md:scale-95 duration-300 before:absolute before:inset-1 before:ring-[0.188rem] before:ring-inset before:ring-[#C5D8F3] before:rounded-lg before:-z-[2] after:absolute after:size-80 after:right-0 after:-top-[4.125rem] after:-rotate-[41deg] after:bg-[#C5D8F3] after:rounded-lg after:-z-[1] after:hover:md:-top-[8.813rem] after:hover:md:right-[0.625rem] after:duration-300">
                              <span class="before:absolute before:left-1 before:top-1 before:w-1.5 before:h-[calc(100%-1.125rem)] before:duration-300 group-hover/btn:before:h-1.5 before:rounded-full before:bg-[#fff] after:absolute after:left-1 after:bottom-1 after:w-1.5 after:h-1.5 after:duration-300 group-hover/btn:after:h-[calc(100%-1.125rem)] after:rounded-full after:bg-[#fff]">Open a Demat A/C</span>
                            </a>
                          </div>
          
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

              </div>

            
           
          
         
            <div class="w-full lg:flex lg:flex-col hidden  lg:w-1/3 py-1 h-full sticky top-[140px] overflow-auto ">
           <div class="border border-[#e4e4ee] rounded-lg mb-6">
            <div class="text-center pt-7 pb-2">
              <h1 class="text-2xl font-medium">Open Free Demat Account!</h1>
              <p class="text-base">Join our 3 Cr+ happy customers</p>
            </div>
            <div class="w-full">
              <svg width="332" height="130" viewBox="0 0 332 130" fill="none" xmlns="https://www.w3.org/2000/svg"><rect width="332" height="130" fill="#E8EBFA"></rect><path d="M46.0289 71L35.3347 53.0614V49.0367H38.957C40.1069 49.0367 41.1418 48.8642 42.0617 48.5192C42.9817 48.1359 43.7483 47.6184 44.3616 46.9668C45.0132 46.2769 45.4348 45.4528 45.6265 44.4945H35.3347V39.4924H45.7415C45.5498 38.6108 45.1857 37.825 44.649 37.1351C44.1124 36.4451 43.4225 35.9085 42.5792 35.5252C41.7359 35.1419 40.7585 34.9502 39.6469 34.9502H35.3347V29.9481H62.0127V34.9502H53.2734C53.7717 35.6018 54.1933 36.311 54.5383 37.0776C54.8833 37.8058 55.1324 38.6108 55.2857 39.4924H62.0127V44.4945H55.2857C54.8641 46.986 53.8292 49.0175 52.181 50.589C50.5711 52.1223 48.5013 53.1955 45.9714 53.8088L57.3556 71H46.0289ZM94.1792 104.054C87.1519 104.054 81.594 102.106 77.5054 98.2087C73.4168 94.2479 71.3725 88.8816 71.3725 82.1099V56.8118C71.3725 50.1679 73.4168 44.8975 77.5054 41.0005C81.594 37.1036 87.1519 35.1551 94.1792 35.1551C101.206 35.1551 106.764 37.1036 110.853 41.0005C115.005 44.8975 117.082 50.1679 117.082 56.8118V82.1099C117.082 88.8816 115.005 94.2479 110.853 98.2087C106.764 102.106 101.206 104.054 94.1792 104.054ZM94.1792 92.4591C97.0539 92.4591 99.3218 91.5967 100.983 89.8718C102.708 88.0831 103.57 85.7194 103.57 82.7807V56.4285C103.57 53.4899 102.708 51.1581 100.983 49.4332C99.3218 47.6445 97.0539 46.7501 94.1792 46.7501C91.3683 46.7501 89.1004 47.6445 87.3755 49.4332C85.7145 51.1581 84.884 53.4899 84.884 56.4285V82.7807C84.884 85.7194 85.7145 88.0831 87.3755 89.8718C89.1004 91.5967 91.3683 92.4591 94.1792 92.4591Z" fill="#3F5BD9"></path><mask id="path-3-outside-1_84_47" maskUnits="userSpaceOnUse" x="38" y="28" width="85" height="78" fill="black"><rect fill="white" x="38" y="28" width="85" height="78"></rect><path d="M50.0289 71L39.3347 53.0614V49.0367H42.957C44.1069 49.0367 45.1418 48.8642 46.0617 48.5192C46.9817 48.1359 47.7483 47.6184 48.3616 46.9668C49.0132 46.2769 49.4348 45.4528 49.6265 44.4945H39.3347V39.4924H49.7415C49.5498 38.6108 49.1857 37.825 48.649 37.1351C48.1124 36.4451 47.4225 35.9085 46.5792 35.5252C45.7359 35.1419 44.7585 34.9502 43.6469 34.9502H39.3347V29.9481H66.0127V34.9502H57.2734C57.7717 35.6018 58.1933 36.311 58.5383 37.0776C58.8833 37.8058 59.1324 38.6108 59.2857 39.4924H66.0127V44.4945H59.2857C58.8641 46.986 57.8292 49.0175 56.181 50.589C54.5711 52.1223 52.5013 53.1955 49.9714 53.8088L61.3556 71H50.0289ZM98.1792 104.054C91.1519 104.054 85.594 102.106 81.5054 98.2087C77.4168 94.2479 75.3725 88.8816 75.3725 82.1099V56.8118C75.3725 50.1679 77.4168 44.8975 81.5054 41.0005C85.594 37.1036 91.1519 35.1551 98.1792 35.1551C105.206 35.1551 110.764 37.1036 114.853 41.0005C119.005 44.8975 121.082 50.1679 121.082 56.8118V82.1099C121.082 88.8816 119.005 94.2479 114.853 98.2087C110.764 102.106 105.206 104.054 98.1792 104.054ZM98.1792 92.4591C101.054 92.4591 103.322 91.5967 104.983 89.8718C106.708 88.0831 107.57 85.7194 107.57 82.7807V56.4285C107.57 53.4899 106.708 51.1581 104.983 49.4332C103.322 47.6445 101.054 46.7501 98.1792 46.7501C95.3683 46.7501 93.1004 47.6445 91.3755 49.4332C89.7145 51.1581 88.884 53.4899 88.884 56.4285V82.7807C88.884 85.7194 89.7145 88.0831 91.3755 89.8718C93.1004 91.5967 95.3683 92.4591 98.1792 92.4591Z"></path></mask><path d="M50.0289 71L49.17 71.5121L49.4609 72H50.0289V71ZM39.3347 53.0614H38.3347V53.3368L38.4758 53.5734L39.3347 53.0614ZM39.3347 49.0367V48.0367H38.3347V49.0367H39.3347ZM46.0617 48.5192L46.4129 49.4555L46.4297 49.4492L46.4464 49.4423L46.0617 48.5192ZM48.3616 46.9668L47.6346 46.2802L47.6334 46.2815L48.3616 46.9668ZM49.6265 44.4945L50.6071 44.6906L50.8463 43.4945H49.6265V44.4945ZM39.3347 44.4945H38.3347V45.4945H39.3347V44.4945ZM39.3347 39.4924V38.4924H38.3347V39.4924H39.3347ZM49.7415 39.4924V40.4924H50.9822L50.7186 39.28L49.7415 39.4924ZM46.5792 35.5252L46.993 34.6148L46.993 34.6148L46.5792 35.5252ZM39.3347 34.9502H38.3347V35.9502H39.3347V34.9502ZM39.3347 29.9481V28.9481H38.3347V29.9481H39.3347ZM66.0127 29.9481H67.0127V28.9481H66.0127V29.9481ZM66.0127 34.9502V35.9502H67.0127V34.9502H66.0127ZM57.2734 34.9502V33.9502H55.2498L56.479 35.5577L57.2734 34.9502ZM58.5383 37.0776L57.6264 37.4879L57.6304 37.4968L57.6346 37.5057L58.5383 37.0776ZM59.2857 39.4924L58.3005 39.6637L58.4446 40.4924H59.2857V39.4924ZM66.0127 39.4924H67.0127V38.4924H66.0127V39.4924ZM66.0127 44.4945V45.4945H67.0127V44.4945H66.0127ZM59.2857 44.4945V43.4945H58.4408L58.2998 44.3276L59.2857 44.4945ZM56.181 50.589L56.8706 51.3132L56.871 51.3128L56.181 50.589ZM49.9714 53.8088L49.7358 52.8369L48.3508 53.1727L49.1377 54.3609L49.9714 53.8088ZM61.3556 71V72H63.2172L62.1893 70.4479L61.3556 71ZM50.8879 70.4879L40.1937 52.5493L38.4758 53.5734L49.17 71.5121L50.8879 70.4879ZM40.3347 53.0614V49.0367H38.3347V53.0614H40.3347ZM39.3347 50.0367H42.957V48.0367H39.3347V50.0367ZM42.957 50.0367C44.2068 50.0367 45.3633 49.8491 46.4129 49.4555L45.7106 47.5829C44.9203 47.8792 44.007 48.0367 42.957 48.0367V50.0367ZM46.4464 49.4423C47.4814 49.011 48.3695 48.4174 49.0898 47.6522L47.6334 46.2815C47.127 46.8194 46.4819 47.2608 45.6771 47.5961L46.4464 49.4423ZM49.0886 47.6534C49.8731 46.8228 50.3797 45.8272 50.6071 44.6906L48.6459 44.2984C48.4899 45.0784 48.1533 45.7309 47.6346 46.2802L49.0886 47.6534ZM49.6265 43.4945H39.3347V45.4945H49.6265V43.4945ZM40.3347 44.4945V39.4924H38.3347V44.4945H40.3347ZM39.3347 40.4924H49.7415V38.4924H39.3347V40.4924ZM50.7186 39.28C50.4963 38.257 50.0699 37.333 49.4384 36.5211L47.8597 37.749C48.3015 38.317 48.6034 38.9646 48.7643 39.7048L50.7186 39.28ZM49.4384 36.5211C48.7965 35.6958 47.9745 35.061 46.993 34.6148L46.1654 36.4355C46.8704 36.756 47.4284 37.1944 47.8597 37.749L49.4384 36.5211ZM46.993 34.6148C45.9964 34.1618 44.8732 33.9502 43.6469 33.9502V35.9502C44.6438 35.9502 45.4754 36.1219 46.1654 36.4355L46.993 34.6148ZM43.6469 33.9502H39.3347V35.9502H43.6469V33.9502ZM40.3347 34.9502V29.9481H38.3347V34.9502H40.3347ZM39.3347 30.9481H66.0127V28.9481H39.3347V30.9481ZM65.0127 29.9481V34.9502H67.0127V29.9481H65.0127ZM66.0127 33.9502H57.2734V35.9502H66.0127V33.9502ZM56.479 35.5577C56.9296 36.1468 57.3121 36.7896 57.6264 37.4879L59.4502 36.6672C59.0745 35.8323 58.6138 35.0569 58.0677 34.3428L56.479 35.5577ZM57.6346 37.5057C57.9369 38.144 58.161 38.8613 58.3005 39.6637L60.271 39.321C60.1039 38.3602 59.8296 37.4677 59.442 36.6495L57.6346 37.5057ZM59.2857 40.4924H66.0127V38.4924H59.2857V40.4924ZM65.0127 39.4924V44.4945H67.0127V39.4924H65.0127ZM66.0127 43.4945H59.2857V45.4945H66.0127V43.4945ZM58.2998 44.3276C57.91 46.631 56.9659 48.4589 55.4909 49.8653L56.871 51.3128C58.6925 49.5761 59.8182 47.341 60.2717 44.6614L58.2998 44.3276ZM55.4913 49.8649C54.0287 51.2579 52.1246 52.2579 49.7358 52.8369L50.207 54.7806C52.8779 54.1332 55.1135 52.9866 56.8706 51.3132L55.4913 49.8649ZM49.1377 54.3609L60.5218 71.5521L62.1893 70.4479L50.8052 53.2567L49.1377 54.3609ZM61.3556 70H50.0289V72H61.3556V70ZM81.5054 98.2087L80.8096 98.927L80.8155 98.9326L81.5054 98.2087ZM114.853 41.0005L114.163 41.7244L114.169 41.7297L114.853 41.0005ZM114.853 98.2087L115.543 98.9326L115.543 98.9323L114.853 98.2087ZM104.983 89.8718L104.263 89.1777L104.262 89.1782L104.983 89.8718ZM104.983 49.4332L104.25 50.1137L104.263 50.1272L104.276 50.1403L104.983 49.4332ZM91.3755 49.4332L90.6557 48.7391L90.6552 48.7396L91.3755 49.4332ZM91.3755 89.8718L90.6427 90.5523L90.6553 90.5658L90.6684 90.5789L91.3755 89.8718ZM98.1792 103.054C91.3429 103.054 86.0552 101.164 82.1953 97.4848L80.8155 98.9326C85.1328 103.048 90.9609 105.054 98.1792 105.054V103.054ZM82.2012 97.4905C78.3435 93.7533 76.3725 88.6663 76.3725 82.1099H74.3725C74.3725 89.097 76.4901 94.7424 80.8096 98.9269L82.2012 97.4905ZM76.3725 82.1099V56.8118H74.3725V82.1099H76.3725ZM76.3725 56.8118C76.3725 50.3891 78.3397 45.3993 82.1953 41.7244L80.8155 40.2767C76.494 44.3956 74.3725 49.9467 74.3725 56.8118H76.3725ZM82.1953 41.7244C86.0552 38.0455 91.3429 36.1551 98.1792 36.1551V34.1551C90.9609 34.1551 85.1328 36.1617 80.8155 40.2767L82.1953 41.7244ZM98.1792 36.1551C105.015 36.1551 110.303 38.0455 114.163 41.7244L115.543 40.2767C111.226 36.1617 105.397 34.1551 98.1792 34.1551V36.1551ZM114.169 41.7297C118.086 45.4058 120.082 50.3939 120.082 56.8118H122.082C122.082 49.9419 119.925 44.3891 115.537 40.2713L114.169 41.7297ZM120.082 56.8118V82.1099H122.082V56.8118H120.082ZM120.082 82.1099C120.082 88.6616 118.082 93.7469 114.163 97.4851L115.543 98.9323C119.929 94.7489 122.082 89.1017 122.082 82.1099H120.082ZM114.163 97.4848C110.303 101.164 105.015 103.054 98.1792 103.054V105.054C105.397 105.054 111.226 103.048 115.543 98.9326L114.163 97.4848ZM98.1792 93.4591C101.267 93.4591 103.816 92.5247 105.703 90.5655L104.262 89.1782C102.827 90.6687 100.841 91.4591 98.1792 91.4591V93.4591ZM105.703 90.566C107.64 88.5574 108.57 85.9277 108.57 82.7807H106.57C106.57 85.511 105.776 87.6088 104.263 89.1777L105.703 90.566ZM108.57 82.7807V56.4285H106.57V82.7807H108.57ZM108.57 56.4285C108.57 53.2827 107.64 50.6759 105.69 48.7261L104.276 50.1403C105.776 51.6403 106.57 53.697 106.57 56.4285H108.57ZM105.716 48.7528C103.832 46.7239 101.278 45.7501 98.1792 45.7501V47.7501C100.83 47.7501 102.812 48.565 104.25 50.1137L105.716 48.7528ZM98.1792 45.7501C95.1358 45.7501 92.5945 46.7285 90.6557 48.7391L92.0953 50.1274C93.6063 48.5605 95.6007 47.7501 98.1792 47.7501V45.7501ZM90.6552 48.7396C88.7759 50.6912 87.884 53.2933 87.884 56.4285H89.884C89.884 53.6864 90.6532 51.625 92.0958 50.1269L90.6552 48.7396ZM87.884 56.4285V82.7807H89.884V56.4285H87.884ZM87.884 82.7807C87.884 85.9174 88.7762 88.5422 90.6427 90.5523L92.1083 89.1914C90.6528 87.6239 89.884 85.5214 89.884 82.7807H87.884ZM90.6684 90.5789C92.6096 92.5202 95.1468 93.4591 98.1792 93.4591V91.4591C95.5897 91.4591 93.5911 90.6732 92.0826 89.1647L90.6684 90.5789Z" fill="#D1D8F6" mask="url(#path-3-outside-1_84_47)"></path><path d="M150.584 58.82C150.456 58.884 150.445 58.948 150.552 59.012C152.152 59.8867 152.952 61.2947 152.952 63.236C152.952 63.428 152.931 63.7587 152.888 64.228C152.632 66.2973 151.747 67.8653 150.232 68.932C148.739 69.9773 146.893 70.5 144.696 70.5H136.632C136.525 70.5 136.44 70.468 136.376 70.404C136.312 70.3187 136.291 70.2227 136.312 70.116L138.968 48.484C138.989 48.3773 139.032 48.292 139.096 48.228C139.181 48.1427 139.277 48.1 139.384 48.1H147.192C151.629 48.1 153.848 49.7747 153.848 53.124C153.848 53.6147 153.827 53.988 153.784 54.244C153.549 56.356 152.483 57.8813 150.584 58.82ZM143.064 51.972C143.021 51.972 142.979 51.9933 142.936 52.036C142.915 52.0573 142.904 52.0893 142.904 52.132L142.296 57.124C142.253 57.2307 142.296 57.284 142.424 57.284H146.072C147.032 57.284 147.811 57.06 148.408 56.612C149.005 56.1427 149.357 55.492 149.464 54.66L149.496 54.276C149.496 53.5507 149.251 52.9853 148.76 52.58C148.291 52.1747 147.608 51.972 146.712 51.972H143.064ZM145.176 66.596C146.221 66.596 147.043 66.308 147.64 65.732C148.259 65.1347 148.568 64.324 148.568 63.3C148.568 62.5533 148.323 61.9773 147.832 61.572C147.363 61.1667 146.691 60.964 145.816 60.964H141.976C141.869 60.964 141.816 61.0173 141.816 61.124L141.144 66.436C141.144 66.5427 141.187 66.596 141.272 66.596H145.176ZM165.195 53.828C165.941 53.828 166.517 53.9773 166.923 54.276C167.093 54.3613 167.136 54.5213 167.051 54.756L165.963 58.404C165.899 58.66 165.739 58.7347 165.483 58.628C165.205 58.5213 164.843 58.468 164.395 58.468C164.245 58.468 164.021 58.4893 163.723 58.532C162.976 58.596 162.304 58.884 161.707 59.396C161.131 59.908 160.8 60.5693 160.715 61.38L159.627 70.116C159.605 70.2227 159.552 70.3187 159.467 70.404C159.403 70.468 159.317 70.5 159.211 70.5H155.595C155.488 70.5 155.403 70.468 155.339 70.404C155.275 70.3187 155.253 70.2227 155.275 70.116L157.195 54.436C157.216 54.3293 157.259 54.244 157.323 54.18C157.408 54.0947 157.504 54.052 157.611 54.052H161.227C161.333 54.052 161.419 54.0947 161.483 54.18C161.547 54.244 161.568 54.3293 161.547 54.436L161.419 55.652C161.397 55.716 161.408 55.7587 161.451 55.78C161.493 55.8013 161.536 55.7907 161.579 55.748C162.539 54.468 163.744 53.828 165.195 53.828ZM173.719 70.756C171.991 70.756 170.561 70.2867 169.431 69.348C168.3 68.4093 167.607 67.1293 167.351 65.508C167.265 65.06 167.223 64.5053 167.223 63.844C167.223 63.3107 167.255 62.7773 167.319 62.244C167.489 60.9 167.777 59.7693 168.183 58.852C168.865 57.2733 169.879 56.036 171.223 55.14C172.567 54.244 174.103 53.796 175.831 53.796C177.537 53.796 178.935 54.244 180.023 55.14C181.111 56.0147 181.804 57.2413 182.103 58.82C182.231 59.4173 182.295 60.0787 182.295 60.804C182.295 61.2733 182.263 61.732 182.199 62.18C182.071 63.2467 181.793 64.324 181.367 65.412C180.705 67.076 179.703 68.388 178.359 69.348C177.015 70.2867 175.468 70.756 173.719 70.756ZM174.199 66.884C174.881 66.884 175.479 66.6707 175.991 66.244C176.524 65.8173 176.951 65.2307 177.271 64.484C177.527 63.78 177.697 63.0333 177.783 62.244C177.847 61.732 177.879 61.252 177.879 60.804C177.879 59.8227 177.655 59.0547 177.207 58.5C176.759 57.9453 176.119 57.668 175.287 57.668C174.604 57.668 173.996 57.8707 173.463 58.276C172.951 58.6813 172.545 59.2467 172.247 59.972C172.012 60.484 171.841 61.2413 171.735 62.244C171.671 62.7773 171.639 63.3 171.639 63.812C171.639 64.7507 171.863 65.4973 172.311 66.052C172.759 66.6067 173.388 66.884 174.199 66.884ZM184.376 70.5C184.269 70.5 184.184 70.468 184.12 70.404C184.056 70.3187 184.035 70.2227 184.056 70.116L186.712 48.484C186.712 48.3773 186.755 48.292 186.84 48.228C186.925 48.1427 187.021 48.1 187.128 48.1H190.744C190.851 48.1 190.936 48.1427 191 48.228C191.064 48.292 191.085 48.3773 191.064 48.484L189.752 59.268C189.731 59.332 189.741 59.3747 189.784 59.396C189.827 59.396 189.869 59.3747 189.912 59.332L194.776 54.276C194.925 54.1267 195.085 54.052 195.256 54.052H199.384C199.576 54.052 199.672 54.116 199.672 54.244C199.672 54.3507 199.629 54.4467 199.544 54.532L194.968 59.684C194.925 59.7693 194.904 59.844 194.904 59.908L198.296 70.052C198.317 70.0947 198.328 70.148 198.328 70.212C198.328 70.404 198.211 70.5 197.976 70.5H194.136C193.944 70.5 193.816 70.404 193.752 70.212L191.576 62.724C191.576 62.6813 191.544 62.66 191.48 62.66C191.437 62.6387 191.405 62.6493 191.384 62.692L189.08 65.252C189.059 65.2733 189.037 65.3053 189.016 65.348C188.995 65.3693 188.984 65.4013 188.984 65.444L188.408 70.116C188.387 70.2227 188.333 70.3187 188.248 70.404C188.184 70.468 188.099 70.5 187.992 70.5H184.376ZM214.383 60.58C214.404 61.2413 214.34 62.148 214.191 63.3C214.127 63.556 213.977 63.684 213.743 63.684H204.143C204.036 63.684 203.983 63.7373 203.983 63.844C204.004 64.3133 204.068 64.74 204.175 65.124C204.601 66.3187 205.625 66.916 207.247 66.916C208.548 66.8947 209.668 66.34 210.607 65.252C210.777 65.0173 210.937 64.996 211.087 65.188L213.071 67.46C213.135 67.5453 213.167 67.6307 213.167 67.716C213.167 67.8227 213.124 67.9187 213.039 68.004C212.249 68.8787 211.279 69.5613 210.127 70.052C208.996 70.5213 207.791 70.756 206.51 70.756C204.74 70.756 203.289 70.34 202.159 69.508C201.028 68.676 200.281 67.5133 199.919 66.02C199.748 65.4227 199.663 64.6653 199.663 63.748C199.663 63.236 199.695 62.692 199.759 62.116C199.844 60.9213 200.132 59.7907 200.623 58.724C201.284 57.2093 202.265 56.004 203.567 55.108C204.889 54.212 206.361 53.764 207.983 53.764C210.052 53.764 211.631 54.3827 212.719 55.62C213.807 56.8573 214.361 58.5107 214.383 60.58ZM207.535 57.668C206.212 57.668 205.273 58.2973 204.719 59.556C204.548 59.9827 204.431 60.324 204.367 60.58C204.367 60.6867 204.409 60.74 204.495 60.74H209.871C209.977 60.74 210.031 60.6867 210.031 60.58C210.031 60.324 210.009 60.0253 209.967 59.684C209.86 59.044 209.593 58.5533 209.167 58.212C208.761 57.8493 208.217 57.668 207.535 57.668ZM226.007 53.828C226.754 53.828 227.33 53.9773 227.735 54.276C227.906 54.3613 227.949 54.5213 227.863 54.756L226.775 58.404C226.711 58.66 226.551 58.7347 226.295 58.628C226.018 58.5213 225.655 58.468 225.207 58.468C225.058 58.468 224.834 58.4893 224.535 58.532C223.789 58.596 223.117 58.884 222.519 59.396C221.943 59.908 221.613 60.5693 221.527 61.38L220.439 70.116C220.418 70.2227 220.365 70.3187 220.279 70.404C220.215 70.468 220.13 70.5 220.023 70.5H216.407C216.301 70.5 216.215 70.468 216.151 70.404C216.087 70.3187 216.066 70.2227 216.087 70.116L218.007 54.436C218.029 54.3293 218.071 54.244 218.135 54.18C218.221 54.0947 218.317 54.052 218.423 54.052H222.039C222.146 54.052 222.231 54.0947 222.295 54.18C222.359 54.244 222.381 54.3293 222.359 54.436L222.231 55.652C222.21 55.716 222.221 55.7587 222.263 55.78C222.306 55.8013 222.349 55.7907 222.391 55.748C223.351 54.468 224.557 53.828 226.007 53.828ZM239.052 54.436C239.073 54.3293 239.116 54.244 239.18 54.18C239.265 54.0947 239.361 54.052 239.468 54.052H243.116C243.222 54.052 243.308 54.0947 243.372 54.18C243.436 54.244 243.457 54.3293 243.436 54.436L241.516 70.116C241.494 70.2227 241.441 70.3187 241.356 70.404C241.292 70.468 241.206 70.5 241.1 70.5H237.452C237.345 70.5 237.26 70.468 237.196 70.404C237.132 70.3187 237.11 70.2227 237.132 70.116L237.292 68.74C237.313 68.6547 237.302 68.612 237.26 68.612C237.217 68.5907 237.174 68.612 237.132 68.676C236.108 70.0627 234.721 70.756 232.972 70.756C231.606 70.756 230.444 70.3293 229.484 69.476C228.524 68.6013 227.937 67.428 227.724 65.956C227.66 65.508 227.628 65.0493 227.628 64.58C227.628 63.94 227.681 63.1613 227.788 62.244C228.001 60.58 228.342 59.2147 228.812 58.148C229.388 56.868 230.241 55.8227 231.372 55.012C232.524 54.2013 233.814 53.796 235.244 53.796C236.95 53.796 238.113 54.4147 238.732 55.652C238.774 55.716 238.806 55.748 238.828 55.748C238.87 55.748 238.902 55.7053 238.924 55.62L239.052 54.436ZM237.388 64.996C237.558 64.676 237.697 64.324 237.804 63.94C237.91 63.556 238.006 63.012 238.092 62.308C238.177 61.732 238.22 61.2307 238.22 60.804C238.22 60.4413 238.156 60.004 238.028 59.492C237.921 58.9373 237.676 58.5 237.292 58.18C236.908 57.8387 236.417 57.668 235.82 57.668C235.201 57.668 234.646 57.8387 234.156 58.18C233.686 58.5213 233.324 58.9693 233.068 59.524C232.726 60.164 232.492 61.0813 232.364 62.276C232.278 62.8733 232.236 63.396 232.236 63.844C232.236 64.2493 232.289 64.6333 232.396 64.996C232.502 65.572 232.758 66.0307 233.164 66.372C233.569 66.7133 234.081 66.884 234.7 66.884C235.318 66.884 235.852 66.7133 236.3 66.372C236.769 66.0307 237.132 65.572 237.388 64.996ZM256.392 54.436C256.413 54.3293 256.456 54.244 256.52 54.18C256.605 54.0947 256.701 54.052 256.808 54.052H260.456C260.562 54.052 260.648 54.0947 260.712 54.18C260.776 54.244 260.797 54.3293 260.776 54.436L258.984 69.028C258.621 71.8227 257.586 73.8173 255.88 75.012C254.173 76.2067 252.104 76.804 249.672 76.804C248.946 76.804 248.136 76.7507 247.24 76.644C247.026 76.6013 246.941 76.4627 246.984 76.228L247.528 72.932C247.549 72.6547 247.698 72.5373 247.976 72.58C248.722 72.708 249.405 72.772 250.024 72.772C251.368 72.772 252.424 72.4733 253.192 71.876C253.981 71.2787 254.45 70.3187 254.6 68.996C254.621 68.932 254.61 68.9 254.568 68.9C254.525 68.8787 254.482 68.8893 254.44 68.932C253.522 69.8067 252.317 70.244 250.824 70.244C249.48 70.244 248.285 69.9133 247.24 69.252C246.194 68.5693 245.522 67.4813 245.224 65.988C245.138 65.54 245.096 64.996 245.096 64.356C245.096 63.8013 245.138 63.076 245.224 62.18C245.458 60.4733 245.81 59.1187 246.28 58.116C246.877 56.8147 247.741 55.7693 248.872 54.98C250.002 54.1907 251.25 53.796 252.616 53.796C254.237 53.796 255.4 54.2867 256.104 55.268C256.146 55.3107 256.189 55.332 256.232 55.332C256.274 55.3107 256.296 55.268 256.296 55.204L256.392 54.436ZM254.888 64.772C255.122 64.1533 255.314 63.2787 255.464 62.148C255.549 61.5293 255.592 61.0067 255.592 60.58C255.592 60.196 255.56 59.8653 255.496 59.588C255.389 59.012 255.133 58.5533 254.728 58.212C254.344 57.8493 253.832 57.668 253.192 57.668C252.573 57.668 252.018 57.8493 251.528 58.212C251.058 58.5533 250.685 59.012 250.408 59.588C250.045 60.2067 249.789 61.0707 249.64 62.18C249.576 62.7133 249.544 63.1827 249.544 63.588C249.544 64.036 249.597 64.42 249.704 64.74C249.81 65.316 250.077 65.7853 250.504 66.148C250.93 66.4893 251.464 66.66 252.104 66.66C252.765 66.66 253.33 66.4893 253.8 66.148C254.29 65.7853 254.653 65.3267 254.888 64.772ZM277.258 60.58C277.279 61.2413 277.215 62.148 277.066 63.3C277.002 63.556 276.852 63.684 276.618 63.684H267.018C266.911 63.684 266.858 63.7373 266.858 63.844C266.879 64.3133 266.943 64.74 267.05 65.124C267.476 66.3187 268.5 66.916 270.122 66.916C271.423 66.8947 272.543 66.34 273.482 65.252C273.652 65.0173 273.812 64.996 273.962 65.188L275.946 67.46C276.01 67.5453 276.042 67.6307 276.042 67.716C276.042 67.8227 275.999 67.9187 275.914 68.004C275.124 68.8787 274.154 69.5613 273.002 70.052C271.871 70.5213 270.666 70.756 269.385 70.756C267.615 70.756 266.164 70.34 265.034 69.508C263.903 68.676 263.156 67.5133 262.794 66.02C262.623 65.4227 262.538 64.6653 262.538 63.748C262.538 63.236 262.57 62.692 262.634 62.116C262.719 60.9213 263.007 59.7907 263.498 58.724C264.159 57.2093 265.14 56.004 266.442 55.108C267.764 54.212 269.236 53.764 270.858 53.764C272.927 53.764 274.506 54.3827 275.594 55.62C276.682 56.8573 277.236 58.5107 277.258 60.58ZM270.41 57.668C269.087 57.668 268.148 58.2973 267.594 59.556C267.423 59.9827 267.306 60.324 267.242 60.58C267.242 60.6867 267.284 60.74 267.37 60.74H272.746C272.852 60.74 272.906 60.6867 272.906 60.58C272.906 60.324 272.884 60.0253 272.842 59.684C272.735 59.044 272.468 58.5533 272.042 58.212C271.636 57.8493 271.092 57.668 270.41 57.668Z" fill="url(#paint0_linear_84_47)"></path><path d="M141.996 81.408C141.988 81.448 141.968 81.484 141.936 81.516C141.912 81.54 141.88 81.552 141.84 81.552H138.024C138.008 81.552 137.992 81.56 137.976 81.576C137.968 81.584 137.964 81.596 137.964 81.612L137.736 83.472C137.736 83.512 137.752 83.532 137.784 83.532H140.292C140.332 83.532 140.364 83.548 140.388 83.58C140.412 83.604 140.42 83.636 140.412 83.676L140.268 84.84C140.26 84.88 140.24 84.916 140.208 84.948C140.184 84.972 140.152 84.984 140.112 84.984H137.604C137.564 84.984 137.544 85.004 137.544 85.044L137.136 88.356C137.128 88.396 137.108 88.432 137.076 88.464C137.052 88.488 137.02 88.5 136.98 88.5H135.612C135.572 88.5 135.54 88.488 135.516 88.464C135.492 88.432 135.484 88.396 135.492 88.356L136.488 80.244C136.496 80.204 136.512 80.172 136.536 80.148C136.568 80.116 136.604 80.1 136.644 80.1H142.02C142.06 80.1 142.092 80.116 142.116 80.148C142.14 80.172 142.148 80.204 142.14 80.244L141.996 81.408ZM143.824 88.596C143.176 88.596 142.64 88.42 142.216 88.068C141.792 87.716 141.532 87.236 141.436 86.628C141.404 86.46 141.388 86.252 141.388 86.004C141.388 85.804 141.4 85.604 141.424 85.404C141.488 84.9 141.596 84.476 141.748 84.132C142.004 83.54 142.384 83.076 142.888 82.74C143.392 82.404 143.968 82.236 144.616 82.236C145.256 82.236 145.78 82.404 146.188 82.74C146.596 83.068 146.856 83.528 146.968 84.12C147.016 84.344 147.04 84.592 147.04 84.864C147.04 85.04 147.028 85.212 147.004 85.38C146.956 85.78 146.852 86.184 146.692 86.592C146.444 87.216 146.068 87.708 145.564 88.068C145.06 88.42 144.48 88.596 143.824 88.596ZM144.004 87.144C144.26 87.144 144.484 87.064 144.676 86.904C144.876 86.744 145.036 86.524 145.156 86.244C145.252 85.98 145.316 85.7 145.348 85.404C145.372 85.212 145.384 85.032 145.384 84.864C145.384 84.496 145.3 84.208 145.132 84C144.964 83.792 144.724 83.688 144.412 83.688C144.156 83.688 143.928 83.764 143.728 83.916C143.536 84.068 143.384 84.28 143.272 84.552C143.184 84.744 143.12 85.028 143.08 85.404C143.056 85.604 143.044 85.8 143.044 85.992C143.044 86.344 143.128 86.624 143.296 86.832C143.464 87.04 143.7 87.144 144.004 87.144ZM151.421 82.248C151.701 82.248 151.917 82.304 152.069 82.416C152.133 82.448 152.149 82.508 152.117 82.596L151.709 83.964C151.685 84.06 151.625 84.088 151.529 84.048C151.425 84.008 151.289 83.988 151.121 83.988C151.065 83.988 150.981 83.996 150.869 84.012C150.589 84.036 150.337 84.144 150.113 84.336C149.897 84.528 149.773 84.776 149.741 85.08L149.333 88.356C149.325 88.396 149.305 88.432 149.273 88.464C149.249 88.488 149.217 88.5 149.177 88.5H147.821C147.781 88.5 147.749 88.488 147.725 88.464C147.701 88.432 147.693 88.396 147.701 88.356L148.421 82.476C148.429 82.436 148.445 82.404 148.469 82.38C148.501 82.348 148.537 82.332 148.577 82.332H149.933C149.973 82.332 150.005 82.348 150.029 82.38C150.053 82.404 150.061 82.436 150.053 82.476L150.005 82.932C149.997 82.956 150.001 82.972 150.017 82.98C150.033 82.988 150.049 82.984 150.065 82.968C150.425 82.488 150.877 82.248 151.421 82.248ZM158.638 82.32C158.678 82.32 158.71 82.336 158.734 82.368C158.766 82.392 158.778 82.424 158.77 82.464L158.626 83.604C158.618 83.644 158.598 83.68 158.566 83.712C158.542 83.736 158.51 83.748 158.47 83.748H157.342C157.31 83.748 157.286 83.768 157.27 83.808L156.718 88.356C156.71 88.396 156.69 88.432 156.658 88.464C156.634 88.488 156.602 88.5 156.562 88.5H155.194C155.154 88.5 155.122 88.488 155.098 88.464C155.074 88.432 155.066 88.396 155.074 88.356L155.638 83.808C155.638 83.768 155.618 83.748 155.578 83.748H154.894C154.854 83.748 154.822 83.736 154.798 83.712C154.774 83.68 154.766 83.644 154.774 83.604L154.918 82.464C154.918 82.424 154.934 82.392 154.966 82.368C154.998 82.336 155.034 82.32 155.074 82.32H155.758C155.798 82.32 155.818 82.3 155.818 82.26L155.854 81.996C155.918 81.5 156.038 81.116 156.214 80.844C156.398 80.564 156.662 80.368 157.006 80.256C157.35 80.136 157.814 80.084 158.398 80.1H158.83C158.918 80.1 158.962 80.148 158.962 80.244L158.842 81.216C158.834 81.256 158.814 81.292 158.782 81.324C158.758 81.348 158.726 81.36 158.686 81.36H158.302C158.022 81.368 157.822 81.428 157.702 81.54C157.59 81.644 157.518 81.84 157.486 82.128L157.462 82.26C157.462 82.3 157.478 82.32 157.51 82.32H158.638ZM160.702 81.636C160.462 81.636 160.266 81.56 160.114 81.408C159.962 81.256 159.886 81.06 159.886 80.82C159.886 80.508 159.986 80.252 160.186 80.052C160.394 79.844 160.642 79.74 160.93 79.74C161.178 79.74 161.374 79.812 161.518 79.956C161.67 80.1 161.746 80.296 161.746 80.544C161.746 80.848 161.642 81.108 161.434 81.324C161.234 81.532 160.99 81.636 160.702 81.636ZM159.166 88.5C159.078 88.5 159.034 88.452 159.034 88.356L159.766 82.464C159.774 82.424 159.79 82.392 159.814 82.368C159.846 82.336 159.882 82.32 159.922 82.32H161.278C161.318 82.32 161.35 82.336 161.374 82.368C161.398 82.392 161.406 82.424 161.398 82.464L160.678 88.356C160.67 88.396 160.65 88.432 160.618 88.464C160.594 88.488 160.562 88.5 160.522 88.5H159.166ZM165.682 82.248C165.962 82.248 166.178 82.304 166.33 82.416C166.394 82.448 166.41 82.508 166.378 82.596L165.97 83.964C165.946 84.06 165.886 84.088 165.79 84.048C165.686 84.008 165.55 83.988 165.382 83.988C165.326 83.988 165.242 83.996 165.13 84.012C164.85 84.036 164.598 84.144 164.374 84.336C164.158 84.528 164.034 84.776 164.002 85.08L163.594 88.356C163.586 88.396 163.566 88.432 163.534 88.464C163.51 88.488 163.478 88.5 163.438 88.5H162.082C162.042 88.5 162.01 88.488 161.986 88.464C161.962 88.432 161.954 88.396 161.962 88.356L162.682 82.476C162.69 82.436 162.706 82.404 162.73 82.38C162.762 82.348 162.798 82.332 162.838 82.332H164.194C164.234 82.332 164.266 82.348 164.29 82.38C164.314 82.404 164.322 82.436 164.314 82.476L164.266 82.932C164.258 82.956 164.262 82.972 164.278 82.98C164.294 82.988 164.31 82.984 164.326 82.968C164.686 82.488 165.138 82.248 165.682 82.248ZM168.686 88.584C167.95 88.584 167.37 88.44 166.946 88.152C166.522 87.856 166.31 87.468 166.31 86.988C166.31 86.908 166.314 86.844 166.322 86.796L166.333 86.676C166.342 86.636 166.358 86.604 166.382 86.58C166.414 86.548 166.45 86.532 166.49 86.532H167.786C167.826 86.532 167.858 86.548 167.882 86.58C167.906 86.604 167.914 86.636 167.906 86.676V86.688C167.882 86.864 167.958 87.016 168.134 87.144C168.31 87.264 168.542 87.324 168.83 87.324C169.102 87.324 169.326 87.268 169.502 87.156C169.686 87.036 169.778 86.888 169.778 86.712C169.778 86.584 169.71 86.488 169.574 86.424C169.438 86.352 169.23 86.28 168.95 86.208C168.598 86.104 168.322 86.012 168.122 85.932C167.69 85.772 167.346 85.58 167.09 85.356C166.834 85.132 166.706 84.816 166.706 84.408C166.706 83.976 166.822 83.596 167.054 83.268C167.286 82.94 167.606 82.688 168.014 82.512C168.422 82.336 168.882 82.248 169.394 82.248C170.09 82.248 170.638 82.408 171.038 82.728C171.446 83.04 171.65 83.452 171.65 83.964C171.65 84.068 171.646 84.144 171.638 84.192C171.63 84.232 171.61 84.268 171.578 84.3C171.554 84.324 171.522 84.336 171.482 84.336H170.234C170.194 84.336 170.162 84.324 170.138 84.3C170.114 84.268 170.106 84.232 170.114 84.192C170.13 84.016 170.058 83.868 169.898 83.748C169.746 83.628 169.526 83.568 169.238 83.568C168.966 83.568 168.738 83.62 168.554 83.724C168.378 83.828 168.29 83.972 168.29 84.156C168.29 84.3 168.366 84.412 168.518 84.492C168.67 84.564 168.918 84.644 169.262 84.732C169.55 84.804 169.754 84.86 169.874 84.9C170.362 85.052 170.746 85.248 171.026 85.488C171.306 85.72 171.446 86.048 171.446 86.472C171.446 86.568 171.442 86.644 171.434 86.7C171.354 87.292 171.066 87.756 170.57 88.092C170.074 88.42 169.446 88.584 168.686 88.584ZM176.189 83.544C176.181 83.584 176.161 83.62 176.129 83.652C176.105 83.676 176.073 83.688 176.033 83.688H174.917C174.885 83.688 174.861 83.708 174.845 83.748L174.533 86.292C174.525 86.34 174.521 86.404 174.521 86.484C174.521 86.876 174.713 87.072 175.097 87.072H175.481C175.521 87.072 175.553 87.088 175.577 87.12C175.609 87.144 175.621 87.176 175.613 87.216L175.469 88.356C175.453 88.452 175.401 88.504 175.313 88.512C174.993 88.528 174.757 88.536 174.605 88.536C174.013 88.536 173.569 88.448 173.273 88.272C172.985 88.088 172.841 87.756 172.841 87.276C172.841 87.212 172.849 87.108 172.865 86.964L173.261 83.748C173.277 83.708 173.261 83.688 173.213 83.688H172.553C172.513 83.688 172.481 83.676 172.457 83.652C172.433 83.62 172.425 83.584 172.433 83.544L172.565 82.476C172.565 82.436 172.581 82.404 172.613 82.38C172.645 82.348 172.681 82.332 172.721 82.332H173.381C173.421 82.332 173.441 82.312 173.441 82.272L173.621 80.844C173.629 80.804 173.645 80.772 173.669 80.748C173.701 80.716 173.737 80.7 173.777 80.7H175.085C175.125 80.7 175.157 80.716 175.181 80.748C175.205 80.772 175.213 80.804 175.205 80.844L175.025 82.272C175.025 82.312 175.045 82.332 175.085 82.332H176.201C176.241 82.332 176.273 82.348 176.297 82.38C176.321 82.404 176.329 82.436 176.321 82.476L176.189 83.544ZM184.343 84.492C184.415 84.732 184.451 85.004 184.451 85.308C184.451 85.508 184.443 85.66 184.427 85.764C184.371 86.188 184.251 86.588 184.067 86.964C183.811 87.476 183.447 87.876 182.975 88.164C182.511 88.452 181.979 88.596 181.379 88.596C180.787 88.596 180.287 88.444 179.879 88.14C179.471 87.836 179.199 87.424 179.063 86.904C179.015 86.672 178.991 86.436 178.991 86.196C178.991 86.06 178.995 85.96 179.003 85.896C179.011 85.848 179.027 85.812 179.051 85.788C179.083 85.764 179.119 85.752 179.159 85.752H180.539C180.635 85.752 180.675 85.8 180.659 85.896C180.659 86.144 180.679 86.34 180.719 86.484C180.759 86.692 180.851 86.856 180.995 86.976C181.139 87.088 181.323 87.144 181.547 87.144C181.979 87.144 182.299 86.948 182.507 86.556C182.643 86.316 182.731 86.036 182.771 85.716C182.787 85.54 182.795 85.412 182.795 85.332C182.795 85.116 182.767 84.936 182.711 84.792C182.575 84.416 182.299 84.228 181.883 84.228C181.755 84.228 181.543 84.328 181.247 84.528C181.215 84.552 181.183 84.564 181.151 84.564C181.111 84.564 181.079 84.54 181.055 84.492L180.491 83.496C180.475 83.464 180.467 83.44 180.467 83.424C180.467 83.368 180.491 83.324 180.539 83.292L182.591 81.624C182.607 81.608 182.615 81.592 182.615 81.576C182.615 81.56 182.603 81.552 182.579 81.552H179.843C179.803 81.552 179.771 81.54 179.747 81.516C179.723 81.484 179.715 81.448 179.723 81.408L179.867 80.244C179.875 80.204 179.891 80.172 179.915 80.148C179.947 80.116 179.983 80.1 180.023 80.1H184.871C184.911 80.1 184.943 80.116 184.967 80.148C184.991 80.172 184.999 80.204 184.991 80.244L184.835 81.564C184.827 81.636 184.791 81.696 184.727 81.744L183.023 83.184C183.007 83.2 182.999 83.216 182.999 83.232C183.007 83.248 183.023 83.256 183.047 83.256C183.703 83.392 184.135 83.804 184.343 84.492ZM187.876 88.632C187.1 88.632 186.496 88.428 186.064 88.02C185.632 87.612 185.416 87.048 185.416 86.328C185.416 86.136 185.424 85.988 185.44 85.884L185.824 82.716C185.928 81.884 186.256 81.224 186.808 80.736C187.368 80.248 188.076 80.004 188.932 80.004C189.708 80.004 190.312 80.208 190.744 80.616C191.184 81.016 191.404 81.568 191.404 82.272C191.404 82.464 191.396 82.612 191.38 82.716L190.996 85.884C190.892 86.732 190.56 87.404 190 87.9C189.44 88.388 188.732 88.632 187.876 88.632ZM188.056 87.18C188.4 87.18 188.688 87.072 188.92 86.856C189.152 86.64 189.292 86.344 189.34 85.968L189.748 82.668C189.756 82.62 189.76 82.556 189.76 82.476C189.76 82.156 189.672 81.908 189.496 81.732C189.32 81.548 189.072 81.456 188.752 81.456C188.408 81.456 188.12 81.568 187.888 81.792C187.656 82.008 187.52 82.3 187.48 82.668L187.072 85.968C187.064 86.016 187.06 86.088 187.06 86.184C187.06 86.496 187.148 86.74 187.324 86.916C187.5 87.092 187.744 87.18 188.056 87.18ZM198.881 80.244C198.889 80.204 198.905 80.172 198.929 80.148C198.961 80.116 198.997 80.1 199.037 80.1H200.405C200.445 80.1 200.477 80.116 200.501 80.148C200.525 80.172 200.533 80.204 200.525 80.244L199.529 88.356C199.521 88.396 199.501 88.432 199.469 88.464C199.445 88.488 199.413 88.5 199.373 88.5H198.005C197.965 88.5 197.933 88.488 197.909 88.464C197.885 88.432 197.877 88.396 197.885 88.356L197.933 87.96C197.933 87.904 197.909 87.896 197.861 87.936C197.485 88.376 197.013 88.596 196.445 88.596C195.901 88.596 195.453 88.44 195.101 88.128C194.749 87.816 194.521 87.388 194.417 86.844C194.369 86.604 194.345 86.352 194.345 86.088C194.345 85.944 194.361 85.712 194.393 85.392C194.473 84.816 194.605 84.32 194.789 83.904C195.029 83.392 195.361 82.988 195.785 82.692C196.209 82.388 196.701 82.236 197.261 82.236C197.813 82.236 198.225 82.436 198.497 82.836C198.505 82.86 198.517 82.868 198.533 82.86C198.549 82.852 198.561 82.836 198.569 82.812L198.881 80.244ZM197.849 86.628C198.041 86.34 198.169 85.936 198.233 85.416C198.257 85.232 198.269 85.064 198.269 84.912C198.269 84.624 198.225 84.372 198.137 84.156C197.985 83.844 197.741 83.688 197.405 83.688C197.037 83.688 196.745 83.844 196.529 84.156C196.297 84.46 196.145 84.884 196.073 85.428C196.057 85.604 196.049 85.736 196.049 85.824C196.049 86.136 196.093 86.404 196.181 86.628C196.333 86.972 196.597 87.144 196.973 87.144C197.317 87.144 197.609 86.972 197.849 86.628ZM205.191 82.476C205.199 82.436 205.215 82.404 205.239 82.38C205.271 82.348 205.307 82.332 205.347 82.332H206.715C206.755 82.332 206.787 82.348 206.811 82.38C206.835 82.404 206.843 82.436 206.835 82.476L206.115 88.356C206.107 88.396 206.087 88.432 206.055 88.464C206.031 88.488 205.999 88.5 205.959 88.5H204.591C204.551 88.5 204.519 88.488 204.495 88.464C204.471 88.432 204.463 88.396 204.471 88.356L204.531 87.84C204.539 87.808 204.535 87.792 204.519 87.792C204.503 87.784 204.487 87.792 204.471 87.816C204.087 88.336 203.567 88.596 202.911 88.596C202.399 88.596 201.963 88.436 201.603 88.116C201.243 87.788 201.023 87.348 200.943 86.796C200.919 86.628 200.907 86.456 200.907 86.28C200.907 86.04 200.927 85.748 200.967 85.404C201.047 84.78 201.175 84.268 201.351 83.868C201.567 83.388 201.887 82.996 202.311 82.692C202.743 82.388 203.227 82.236 203.763 82.236C204.403 82.236 204.839 82.468 205.071 82.932C205.087 82.956 205.099 82.968 205.107 82.968C205.123 82.968 205.135 82.952 205.143 82.92L205.191 82.476ZM204.567 86.436C204.631 86.316 204.683 86.184 204.723 86.04C204.763 85.896 204.799 85.692 204.831 85.428C204.863 85.212 204.879 85.024 204.879 84.864C204.879 84.728 204.855 84.564 204.807 84.372C204.767 84.164 204.675 84 204.531 83.88C204.387 83.752 204.203 83.688 203.979 83.688C203.747 83.688 203.539 83.752 203.355 83.88C203.179 84.008 203.043 84.176 202.947 84.384C202.819 84.624 202.731 84.968 202.683 85.416C202.651 85.64 202.635 85.836 202.635 86.004C202.635 86.156 202.655 86.3 202.695 86.436C202.735 86.652 202.831 86.824 202.983 86.952C203.135 87.08 203.327 87.144 203.559 87.144C203.791 87.144 203.991 87.08 204.159 86.952C204.335 86.824 204.471 86.652 204.567 86.436ZM206.978 90.888C206.93 90.888 206.906 90.84 206.906 90.744L207.05 89.64C207.058 89.6 207.074 89.564 207.098 89.532C207.13 89.508 207.166 89.496 207.206 89.496C207.686 89.488 208.038 89.42 208.262 89.292C208.494 89.172 208.678 88.92 208.814 88.536C208.822 88.52 208.826 88.496 208.826 88.464L207.65 82.488V82.44C207.65 82.36 207.694 82.32 207.782 82.32H209.234C209.33 82.32 209.382 82.36 209.39 82.44L209.882 86.328C209.89 86.352 209.902 86.364 209.918 86.364C209.934 86.364 209.946 86.352 209.954 86.328L211.406 82.44C211.438 82.36 211.498 82.32 211.586 82.32H213.014C213.062 82.32 213.094 82.336 213.11 82.368C213.126 82.4 213.122 82.44 213.098 82.488L210.314 88.728C210.05 89.312 209.798 89.748 209.558 90.036C209.318 90.332 209.006 90.548 208.622 90.684C208.246 90.82 207.722 90.888 207.05 90.888H206.978ZM215.115 88.584C214.379 88.584 213.799 88.44 213.375 88.152C212.951 87.856 212.739 87.468 212.739 86.988C212.739 86.908 212.743 86.844 212.751 86.796L212.763 86.676C212.771 86.636 212.787 86.604 212.811 86.58C212.843 86.548 212.879 86.532 212.919 86.532H214.215C214.255 86.532 214.287 86.548 214.311 86.58C214.335 86.604 214.343 86.636 214.335 86.676V86.688C214.311 86.864 214.387 87.016 214.563 87.144C214.739 87.264 214.971 87.324 215.259 87.324C215.531 87.324 215.755 87.268 215.931 87.156C216.115 87.036 216.207 86.888 216.207 86.712C216.207 86.584 216.139 86.488 216.003 86.424C215.867 86.352 215.659 86.28 215.379 86.208C215.027 86.104 214.751 86.012 214.551 85.932C214.119 85.772 213.775 85.58 213.519 85.356C213.263 85.132 213.135 84.816 213.135 84.408C213.135 83.976 213.251 83.596 213.483 83.268C213.715 82.94 214.035 82.688 214.443 82.512C214.851 82.336 215.311 82.248 215.823 82.248C216.519 82.248 217.067 82.408 217.467 82.728C217.875 83.04 218.079 83.452 218.079 83.964C218.079 84.068 218.075 84.144 218.067 84.192C218.059 84.232 218.039 84.268 218.007 84.3C217.983 84.324 217.951 84.336 217.911 84.336H216.663C216.623 84.336 216.591 84.324 216.567 84.3C216.543 84.268 216.535 84.232 216.543 84.192C216.559 84.016 216.487 83.868 216.327 83.748C216.175 83.628 215.955 83.568 215.667 83.568C215.395 83.568 215.167 83.62 214.983 83.724C214.807 83.828 214.719 83.972 214.719 84.156C214.719 84.3 214.795 84.412 214.947 84.492C215.099 84.564 215.347 84.644 215.691 84.732C215.979 84.804 216.183 84.86 216.303 84.9C216.791 85.052 217.175 85.248 217.455 85.488C217.735 85.72 217.875 86.048 217.875 86.472C217.875 86.568 217.871 86.644 217.863 86.7C217.783 87.292 217.495 87.756 216.999 88.092C216.503 88.42 215.875 88.584 215.115 88.584ZM220.555 83.784C220.515 83.784 220.483 83.772 220.459 83.748C220.435 83.716 220.427 83.68 220.435 83.64L220.579 82.56C220.579 82.536 220.571 82.52 220.555 82.512C220.539 82.504 220.523 82.508 220.507 82.524L219.463 83.112C219.431 83.128 219.403 83.136 219.379 83.136C219.331 83.136 219.295 83.108 219.271 83.052L219.019 82.428C219.011 82.412 219.007 82.392 219.007 82.368C219.007 82.296 219.039 82.248 219.103 82.224L220.147 81.684C220.179 81.66 220.183 81.636 220.159 81.612L219.235 81.096C219.195 81.072 219.175 81.04 219.175 81C219.175 80.96 219.187 80.924 219.211 80.892L219.607 80.268C219.639 80.228 219.671 80.204 219.703 80.196C219.743 80.18 219.779 80.184 219.811 80.208L220.723 80.784C220.739 80.792 220.755 80.792 220.771 80.784C220.787 80.776 220.795 80.76 220.795 80.736L220.915 79.68C220.923 79.64 220.939 79.608 220.963 79.584C220.995 79.552 221.031 79.536 221.071 79.536H221.731C221.771 79.536 221.803 79.552 221.827 79.584C221.859 79.608 221.871 79.64 221.863 79.68L221.719 80.736C221.711 80.76 221.715 80.78 221.731 80.796C221.747 80.804 221.763 80.8 221.779 80.784L222.835 80.208C222.867 80.192 222.891 80.184 222.907 80.184C222.955 80.184 222.991 80.212 223.015 80.268L223.267 80.892C223.275 80.908 223.279 80.932 223.279 80.964C223.279 81.02 223.247 81.06 223.183 81.084L222.139 81.612C222.091 81.636 222.087 81.66 222.127 81.684L223.051 82.224C223.091 82.24 223.111 82.276 223.111 82.332C223.111 82.372 223.103 82.404 223.087 82.428L222.679 83.052C222.647 83.092 222.611 83.12 222.571 83.136C222.539 83.144 222.507 83.136 222.475 83.112L221.563 82.524C221.547 82.508 221.531 82.504 221.515 82.512C221.507 82.52 221.499 82.536 221.491 82.56L221.371 83.64C221.363 83.68 221.343 83.716 221.311 83.748C221.287 83.772 221.255 83.784 221.215 83.784H220.555Z" fill="url(#paint1_linear_84_47)"></path><defs><linearGradient id="paint0_linear_84_47" x1="135.002" y1="57.5" x2="300" y2="57.5" gradientUnits="userSpaceOnUse"><stop stop-color="#1737AA"></stop><stop offset="1" stop-color="#2E51FF"></stop></linearGradient><linearGradient id="paint1_linear_84_47" x1="135.001" y1="83.5" x2="249" y2="83.5" gradientUnits="userSpaceOnUse"><stop stop-color="#1737AA"></stop><stop offset="1" stop-color="#2E51FF"></stop></linearGradient></defs></svg>
</div>
<form action="" class="px-8 py-8 flex flex-col space-y-6">
  <div class="relative">
    <span class="px-2 py-4 bg-[#f9fbfe] text-[#6a7582] top-1 left-1 absolute z-10">+91</span>
    <input
    
    name="mobile"
    placeholder="Enter Mobile Number"
    maxlength="10"
    
    class="w-full px-12  py-5 bg-white border border-[#e0e0ec] rounded-lg font-medium text-[14px] text-[#2a394e] outline-none relative box-border shadow-inner transition-all duration-500 focus:shadow-[0_0_8px_#b0b0b0] overflow-hidden"
  />   
  </div>

  <button class="w-full bg-[#3f5bd9] rounded-lg py-5 text-white text-lg">
    Get Free Demat Account
  </button>
 <p class="text-base font-semibold text-[#3f5bd9] text-center">
  Want to open an NRI account?
 </p>

</form>
           </div>
           <div class="border border-[#e4e4ee] rounded-lg px-6 py-4">
            <div class=" py-2">
              <h1 class="text-3xl font-medium">Top Stocks</h1>
              
            </div>
<ul>
  <li class="relative border-b border-[rgba(0, 0, 0, 0.12)] py-4 before:content-[''] before:absolute before:left-1/2 before:bottom-0 before:h-[2px] before:bg-[#3f5bd9]  before:w-0 before:transition-all before:duration-500 before:-translate-x-1/2 hover:before:w-full">
    <div class=" flex flex-col space-y-1">
      <div class="flex justify-between items-center text-base font-semibold text-[#2a394e]">
        <h1>INFY</h1>
        <span class="flex items-center text-red-600" >₹1703.95 <span><svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M5.8 9.7l6.2 6.3 6.2-6.3c.2-.2.3-.5.3-.7s-.1-.5-.3-.7c-.2-.2-.4-.3-.7-.3h-11c-.3 0-.5.1-.7.3-.2.2-.3.4-.3.7s.1.5.3.7z"></path></svg></span></span>
      </div>
      <div class="flex justify-between items-center text-sm text-[#2a394e]">
        <h1>Infosys </h1>
        <span>
          -2.85 (-0.17%)
        </span>
      </div>
      <div>
      </div>
              
      
    </div>
  </li>
  <li class="relative border-b border-[rgba(0, 0, 0, 0.12)] py-4 before:content-[''] before:absolute before:left-1/2 before:bottom-0 before:h-[2px] before:bg-[#3f5bd9]  before:w-0 before:transition-all before:duration-500 before:-translate-x-1/2 hover:before:w-full">
    <div class=" flex flex-col space-y-1">
      <div class="flex justify-between items-center text-base font-semibold text-[#2a394e]">
        <h1>INFY</h1>
        <span class="flex items-center text-red-600" >₹1703.95 <span><svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M5.8 9.7l6.2 6.3 6.2-6.3c.2-.2.3-.5.3-.7s-.1-.5-.3-.7c-.2-.2-.4-.3-.7-.3h-11c-.3 0-.5.1-.7.3-.2.2-.3.4-.3.7s.1.5.3.7z"></path></svg></span></span>
      </div>
      <div class="flex justify-between items-center text-sm text-[#2a394e]">
        <h1>Infosys </h1>
        <span>
          -2.85 (-0.17%)
        </span>
      </div>
      <div>
      </div>
              
      
    </div>
  </li>
  <li class="relative border-b border-[rgba(0, 0, 0, 0.12)] py-4 before:content-[''] before:absolute before:left-1/2 before:bottom-0 before:h-[2px] before:bg-[#3f5bd9]  before:w-0 before:transition-all before:duration-500 before:-translate-x-1/2 hover:before:w-full">
    <div class=" flex flex-col space-y-1">
      <div class="flex justify-between items-center text-base font-semibold text-[#2a394e]">
        <h1>INFY</h1>
        <span class="flex items-center text-red-600" >₹1703.95 <span><svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M5.8 9.7l6.2 6.3 6.2-6.3c.2-.2.3-.5.3-.7s-.1-.5-.3-.7c-.2-.2-.4-.3-.7-.3h-11c-.3 0-.5.1-.7.3-.2.2-.3.4-.3.7s.1.5.3.7z"></path></svg></span></span>
      </div>
      <div class="flex justify-between items-center text-sm text-[#2a394e]">
        <h1>Infosys </h1>
        <span>
          -2.85 (-0.17%)
        </span>
      </div>
      <div>
      </div>
              
      
    </div>
  </li>
  <li class="relative border-b border-[rgba(0, 0, 0, 0.12)] py-4 before:content-[''] before:absolute before:left-1/2 before:bottom-0 before:h-[2px] before:bg-[#3f5bd9]  before:w-0 before:transition-all before:duration-500 before:-translate-x-1/2 hover:before:w-full">
    <div class=" flex flex-col space-y-1">
      <div class="flex justify-between items-center text-base font-semibold text-[#2a394e]">
        <h1>INFY</h1>
        <span class="flex items-center text-red-600" >₹1703.95 <span><svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M5.8 9.7l6.2 6.3 6.2-6.3c.2-.2.3-.5.3-.7s-.1-.5-.3-.7c-.2-.2-.4-.3-.7-.3h-11c-.3 0-.5.1-.7.3-.2.2-.3.4-.3.7s.1.5.3.7z"></path></svg></span></span>
      </div>
      <div class="flex justify-between items-center text-sm text-[#2a394e]">
        <h1>Infosys </h1>
        <span>
          -2.85 (-0.17%)
        </span>
      </div>
      <div>
      </div>
              
      
    </div>
  </li>
 
</ul>

   
          

           </div>
           
           <div class="border border-[#e4e4ee] rounded-lg px-6 py-4">
            <div class=" py-2">
              <h1 class="text-3xl font-medium">Group Stocks</h1>
              
            </div>
<ul class="font-bold">
  <li class="relative border-b border-[rgba(0, 0, 0, 0.12)] py-4 before:content-[''] before:absolute before:left-1/2 before:bottom-0 before:h-[2px] before:bg-[#3f5bd9]  before:w-0 before:transition-all before:duration-500 before:-translate-x-1/2 hover:before:w-full cursor-pointer">
   <h1>Adani Group Stocks</h1>
  </li>
  <li class="relative border-b border-[rgba(0, 0, 0, 0.12)] py-4 before:content-[''] before:absolute before:left-1/2 before:bottom-0 before:h-[2px] before:bg-[#3f5bd9]  before:w-0 before:transition-all before:duration-500 before:-translate-x-1/2 hover:before:w-full cursor-pointer">
    <h1>Anil Ambani Group Stocks</h1>
  </li>
  <li class="relative border-b border-[rgba(0, 0, 0, 0.12)] py-4 before:content-[''] before:absolute before:left-1/2 before:bottom-0 before:h-[2px] before:bg-[#3f5bd9]  before:w-0 before:transition-all before:duration-500 before:-translate-x-1/2 hover:before:w-full cursor-pointer">
  <h1>Bajaj Group Stocks</h1>
  </li>
  <li class="relative border-b border-[rgba(0, 0, 0, 0.12)] py-4 before:content-[''] before:absolute before:left-1/2 before:bottom-0 before:h-[2px] before:bg-[#3f5bd9]  before:w-0 before:transition-all before:duration-500 before:-translate-x-1/2 hover:before:w-full cursor-pointer">
 <h1>Godrej Group Stocks</h1>
  </li>
  <li class="relative border-b border-[rgba(0, 0, 0, 0.12)] py-4 before:content-[''] before:absolute before:left-1/2 before:bottom-0 before:h-[2px] before:bg-[#3f5bd9]  before:w-0 before:transition-all before:duration-500 before:-translate-x-1/2 hover:before:w-full cursor-pointer">
 <h1>Mahindra Group Stocks</h1>
  </li>
  <li class="relative border-b border-[rgba(0, 0, 0, 0.12)] py-4 before:content-[''] before:absolute before:left-1/2 before:bottom-0 before:h-[2px] before:bg-[#3f5bd9]  before:w-0 before:transition-all before:duration-500 before:-translate-x-1/2 hover:before:w-full cursor-pointer">
 <h1>Mukesh Ambani Group Stocks</h1>
  </li>
  <li class="relative border-b border-[rgba(0, 0, 0, 0.12)] py-4 before:content-[''] before:absolute before:left-1/2 before:bottom-0 before:h-[2px] before:bg-[#3f5bd9]  before:w-0 before:transition-all before:duration-500 before:-translate-x-1/2 hover:before:w-full cursor-pointer">
 <h1>Tata Group Stocks</h1>
  </li>
  <li class="relative  py-4 before:content-[''] before:absolute before:left-1/2 before:bottom-0 before:h-[2px] before:bg-[#3f5bd9]  before:w-0 before:transition-all before:duration-500 before:-translate-x-1/2 hover:before:w-full cursor-pointer">
 <h1>TVS Group Stocks</h1>
  </li>
 
 
</ul>

   



          

           </div>


            </div>
          </div>
         
         
        </div>
       </section>
       <?php include_once('footer.php'); ?>