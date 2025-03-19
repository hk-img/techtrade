<!DOCTYPE html>
<html lang="en" class="min-[7680px]:text-[80px] min-[5760px]:text-[60px] min-[3840px]:text-[40px] min-[2880px]:text-[28px] min-[2560px]:text-[26px] min-[2400px]:text-[24px] min-[2133px]:text-[22px] min-[1920px]:text-[20px] min-[1745px]:text-[18px] 2xl:text-[16px] xl:text-[14px] lg:text-[12px]">
  <head>
    <link rel="stylesheet" href="assets/css/output.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Raleway:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="shortcut icon" href="assets/img/favicon1.png" type="image/x-icon">
  </head>
  <body class="font-heading">

    <header class="fixed top-0 w-full bg-white border-b border-slate-200 shadow-lg z-50">
      <nav class="2xl:px-24 3xl:px-36 lg:pb-3 py-3 px-6 lg:px-8 w-full mx-auto flex items-center justify-between">
          <div class="flex items-start">
          <?php 
            $base_url = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on' ? 'https' : 'http';
            $base_url .= '://' . $_SERVER['HTTP_HOST'];
            $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
            $base_url = preg_replace('/install.*/', '', $base_url);
          ?>  
          <a href="<?php echo $base_url; ?>" class="logo">
              <img class="md:h-20 md:w-auto h-20 w-auto" width="174" height="48"
              src="assets/img/logo.png" data-src="assets/img/logo.png" alt="" title="">
          </a>
          </div>
          <div class="flex items-end">
              <ul class="lg:flex gap-2 lg:max-xl:gap-0 hidden items-center">
                  <li class="relative group">
                      <a href="about" class="flex items-center px-2 lg:px-1 text-black font-semibold opacity-100 text-[0.813rem] duration-300 hover:md:text-themeColor1 uppercase lg:max-xl:text-[0.75rem]  gap-1 after:absolute after:!w-full after:!-top-10 after:!h-10  after:left-0 ">
                         About
                         
                      </a>
                     
                  </li>
                  <li class="relative group">
                    <a href="javascript:;" class="flex items-center px-2 lg:px-1 text-black font-semibold opacity-100 text-[0.813rem] duration-300 group-hover:md:text-themeColor1 uppercase lg:max-xl:text-[0.75rem]  gap-1">
                     Resources
                    <span class="*:size-[0.8rem]">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M6 6v2h8.59L5 17.59 6.41 19 16 9.41V18h2V6z"></path></svg>
                    </span>
                    </a>
                   <div class="absolute top-[4.688rem] rounded-xl -left-20 transition-all max-w-[28.125rem] shadow-lg z-10 border-[0.031rem] border-secondary bg-white/90 backdrop-blur-lg opacity-0 invisible group-hover:md:opacity-100 group-hover:md:visible duration-300 group-hover:-translate-y-3 after:absolute after:!w-full after:!-top-10 after:!h-10 after:left-0">
                    <div class="grid grid-cols-2 lg:flex lg:flex-nowrap w-full gap-4 xl:p-2 items-stretch text-[0.813rem] leading-7">
                        <div class="w-full flex flex-col p-3">
                        <div class="relative group/hvr">
                                <div class="flex-auto">
                                      <a href="javascript:;" class="text-[0.813rem] text-black font-medium flex items-center duration-300 leading-tight whitespace-nowrap px-2 py-3 rounded-md group-hover/hvr:md:bg-[#f0f6ff]">
                                        <div class="flex items-center gap-2">
                                            <span class="*:size-5 *:text-themeColor1 mr-2">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5"></path><path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96q.04-.245.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 1 1 12z"></path></svg>                                            </span>
                                            <div>
                                              <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:md:text-themeColor1">Authorised Person Details</span>
                                            </div>
                                        </div>
                                      </a>
                                </div>
                            </div>                        
                            <div class="relative group/hvr">
                                <div class="flex-auto ">
                                      <a href="account-opening-process" class="text-[0.813rem] text-black font-medium flex items-center duration-300 leading-tight whitespace-nowrap px-2 py-3 rounded-md group-hover/hvr:md:bg-[#f0f6ff]">
                                        <div class="flex items-center gap-2">
                                            <span class="*:size-5 *:text-themeColor1 mr-2">
                                              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M2 20H22V22H2V20ZM4 12H6V19H4V12ZM9 12H11V19H9V12ZM13 12H15V19H13V12ZM18 12H20V19H18V12ZM2 7L12 2L22 7V11H2V7ZM4 8.23607V9H20V8.23607L12 4.23607L4 8.23607ZM12 8C11.4477 8 11 7.55228 11 7C11 6.44772 11.4477 6 12 6C12.5523 6 13 6.44772 13 7C13 7.55228 12.5523 8 12 8Z"></path></svg>
                                            </span>
                                            <div>
                                                <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:md:text-themeColor1">Account Opening Process</span>
                                            </div>
                                        </div>
                                      </a>
                                </div>
                            </div>
                            <div class="relative group/hvr">
                              <div class="flex-auto ">
                                  <a href="downloads" class="text-[0.813rem] text-black font-medium flex items-center duration-300 leading-tight whitespace-nowrap px-2 py-3 rounded-md group-hover/hvr:md:bg-[#f0f6ff] ">
                                      <div class="flex items-center gap-2">
                                          <span class="*:size-5 *:text-themeColor1 mr-2">
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M12 18v-6"></path><path d="m9 15 3 3 3-3"></path></svg>
                                          </span>
                                          <div>
                                              <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:md:text-themeColor1">Downloads</span>
                                          </div>
                                      </div>
                                  </a>
                              </div>
                            </div> 
                            <div class="relative group/hvr">
                              <div class="flex-auto ">
                                  <a href="investor-charter" class="text-[0.813rem] text-black font-medium flex items-center duration-300 leading-tight whitespace-nowrap px-2 py-3 rounded-md group-hover/hvr:md:bg-[#f0f6ff] ">
                                      <div class="flex items-center gap-2">
                                          <span class="*:size-5 *:text-themeColor1 mr-2">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M6 9.99h2v7H6zm8 3h2v4h-2zm-4-6h2v10h-2zM20 7V4h-2v3h-3v2h3v3h2V9h3V7zm-2 12H4V5h12V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-5h-2v5z"></path></svg>
                                          </span>
                                          <div>
                                              <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:md:text-themeColor1">Investor Charter</span>
                                          </div>
                                      </div>
                                  </a>
                              </div>
                            </div>
                            <div class="relative group/hvr">
                              <div class="flex-auto ">
                                  <a href="holiday-calendar" class="text-[0.813rem] text-black font-medium flex items-center duration-300 leading-tight whitespace-nowrap px-2 py-3 rounded-md group-hover/hvr:md:bg-[#f0f6ff] ">
                                      <div class="flex items-center gap-2">
                                          <span class="*:size-5 *:text-themeColor1 mr-2">
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path><path d="M8 14h.01"></path><path d="M12 14h.01"></path><path d="M16 14h.01"></path><path d="M8 18h.01"></path><path d="M12 18h.01"></path><path d="M16 18h.01"></path></svg>
                                          </span>
                                          <div>
                                              <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:md:text-themeColor1">Holiday Calendar</span>
                                          </div>
                                      </div>
                                  </a>
                              </div>
                            </div>
                            <div class="relative group/hvr">
                              <div class="flex-auto ">
                                  <a href="fit-and-proper-declaration" class="text-[0.813rem] text-black font-medium flex items-center duration-300 leading-tight whitespace-nowrap px-2 py-3 rounded-md group-hover/hvr:md:bg-[#f0f6ff]">
                                      <div class="flex items-center gap-2">
                                          <span class="*:size-5 *:text-themeColor1 mr-2">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-width="2" d="M6,16 L16,16 L6,16 L6,16 Z M6,12 L18,12 L6,12 L6,12 Z M6,8 L11,8 L6,8 L6,8 Z M14,1 L14,8 L21,8 M3,23 L3,1 L15,1 L21,7 L21,23 L3,23 Z"></path></svg>
                                          </span>
                                          <div>
                                              <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:md:text-themeColor1">Fit and Proper Declaration</span>
                                          </div>
                                      </div>
                                  </a>
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  </li>
                  <li class="relative group">
                      <a href="javascript:;" class="flex items-center px-2 lg:px-1 text-black font-semibold opacity-100 text-[0.813rem] duration-300 group-hover:md:text-themeColor1 uppercase lg:max-xl:text-[0.75rem]  gap-1">
                        Important Links
                        <span class="*:size-[0.8rem]"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M6 6v2h8.59L5 17.59 6.41 19 16 9.41V18h2V6z"></path></svg></span>
                      </a>
                      <div class="absolute top-[4.688rem] rounded-xl -left-[6.875rem] w-[28.75rem] shadow-lg z-10 border-[0.031rem] border-secondary bg-white/90 duration-300 backdrop-blur-lg invisible opacity-0 group-hover:md:opacity-100 group-hover:md:visible group-hover:-translate-y-3 after:absolute after:!w-full after:!-top-10 after:!h-10 after:left-0 hover:md:text-themeColor1">
                          <div class="grid grid-cols-2 w-full gap-4 xl:p-2 items-stretch text-[0.813rem] leading-7">
                              <div class="w-full grid p-2">
                                <div class="relative group/hvr">
                                  <div class="flex-auto px-2 py-2 rounded-md group-hover/hvr:md:bg-[#f0f6ff] ">
                                        <a href="https://www.nseindia.com/" target="_blank" class="text-[0.813rem] text-black font-medium flex items-center leading-tight whitespace-nowrap lg:text-left ">
                                            <div class="flex items-center gap-3">
                                                <div class=" *:size-3 *:text-black/90 duration-300 *:group-hover/hvr:md:text-themeColor1 ">
                                                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path></svg></div>
                                                <div>
                                                  <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:text-themeColor1 "
                                                    >NSE</span>
                                                </div>
                                            </div>
                                        </a>
                                  </div>
                                </div>
                                <div class="relative group/hvr">
                                  <div class="flex-auto px-2 py-2 rounded-md group-hover/hvr:md:bg-[#f0f6ff] ">
                                      <a href="https://www.bseindia.com/" target="_blank" class="text-[0.813rem] text-black font-medium flex items-center leading-tight whitespace-nowrap lg:text-left ">
                                          <div class="flex items-center gap-3">
                                            <div class=" *:size-3 *:text-black/90 duration-300 *:group-hover/hvr:md:text-themeColor1 ">
                                              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path></svg></div>
                                              <div>
                                                  <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:text-themeColor1 "
                                                  >BSE</span>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                </div>
                                <div class="relative group/hvr">
                                  <div class="flex-auto  px-2 py-2 rounded-md duration-300 group-hover/hvr:md:bg-[#f0f6ff] ">
                                      <a href="https://www.sebi.gov.in/" target="_blank" class="text-[0.813rem] text-black font-medium flex items-center leading-tight whitespace-nowrap lg:text-left ">
                                          <div class="flex items-center gap-3">
                                            <div class=" *:size-3 *:text-black/90 duration-300 *:group-hover/hvr:md:text-themeColor1 ">
                                              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path></svg></div>
                                              <div>
                                                  <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:text-themeColor1 "
                                                  >SEBI</span>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                </div>
                                <div class="relative group/hvr">
                                  <div class="flex-auto  px-2 py-2 rounded-md duration-300 group-hover/hvr:md:bg-[#f0f6ff] ">
                                      <a href="https://www.mcxindia.com/" target="_blank" class="text-[0.813rem] text-black font-medium flex items-center leading-tight whitespace-nowrap lg:text-left ">
                                          <div class="flex items-center gap-3">
                                            <div class=" *:size-3 *:text-black/90 duration-300 *:group-hover/hvr:md:text-themeColor1 ">
                                              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path></svg></div>
                                              <div>
                                                  <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:text-themeColor1 "
                                                  >MCX</span>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                </div>
                                <div class="relative group/hvr">
                                  <div class="flex-auto  px-2 py-2 rounded-md duration-300 group-hover/hvr:md:bg-[#f0f6ff] ">
                                      <a href="https://www.ncdex.com/" target="_blank" class="text-[0.813rem] text-black font-medium flex items-center leading-tight whitespace-nowrap lg:text-left ">
                                          <div class="flex items-center gap-3">
                                            <div class=" *:size-3 *:text-black/90 duration-300 *:group-hover/hvr:md:text-themeColor1 ">
                                              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path></svg></div>
                                              <div>
                                                  <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:text-themeColor1 "
                                                  >NCDEX</span>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                </div>
                                <div class="relative group/hvr">
                                  <div class="flex-auto px-2 py-2 rounded-md group-hover/hvr:md:bg-[#f0f6ff] ">
                                      <a href="https://www.msei.in/" taregt="blank" class="text-[0.813rem] text-black font-medium flex items-center leading-tight whitespace-nowrap lg:text-left ">
                                          <div class="flex items-center gap-3">
                                            <div class=" *:size-3 *:text-black/90 duration-300 *:group-hover/hvr:md:text-themeColor1 ">
                                              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path></svg></div>
                                              <div>
                                                  <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:text-themeColor1 "
                                                  >MSEI</span>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                </div>
                                <div class="relative group/hvr">
                                  <div class="flex-auto  px-2 py-2 rounded-md duration-300 group-hover/hvr:md:bg-[#f0f6ff] ">
                                      <a href="https://www.rbi.org.in/" target="_blank" class="text-[0.813rem] text-black font-medium flex items-center leading-tight whitespace-nowrap lg:text-left ">
                                          <div class="flex items-center gap-3">
                                            <div class=" *:size-3 *:text-black/90 duration-300 *:group-hover/hvr:md:text-themeColor1 ">
                                              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path></svg></div>
                                              <div>
                                                  <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:text-themeColor1 "
                                                  >RBI</span>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                </div>
                              </div>
                              <div class="w-full grid p-2">
                                
                                <div class="relative group/hvr">
                                  <div class="flex-auto  px-2 py-2 rounded-md duration-300 group-hover/hvr:md:bg-[#f0f6ff] ">
                                      <a href="https://www.cdslindia.com/index.html" target="_blank" class="text-[0.813rem] text-black font-medium flex items-center leading-tight whitespace-nowrap lg:text-left ">
                                          <div class="flex items-center gap-3">
                                            <div class=" *:size-3 *:text-black/90 duration-300 *:group-hover/hvr:md:text-themeColor1 ">
                                              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path></svg></div>
                                              <div>
                                                  <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:text-themeColor1 "
                                                  >CDSL</span>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                </div>
                                <div class="relative group/hvr">
                                  <div class="flex-auto  px-2 py-2 rounded-md duration-300 group-hover/hvr:md:bg-[#f0f6ff] ">
                                      <a href="https://nsdl.co.in/" target="_blank" class="text-[0.813rem] text-black font-medium flex items-center leading-tight whitespace-nowrap lg:text-left ">
                                          <div class="flex items-center gap-3">
                                            <div class=" *:size-3 *:text-black/90 duration-300 *:group-hover/hvr:md:text-themeColor1 ">
                                              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path></svg></div>
                                              <div>
                                                  <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:text-themeColor1 "
                                                  >NDSL</span>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                </div>
                                <div class="relative group/hvr">
                                  <div class="flex-auto  px-2 py-2 rounded-md duration-300 group-hover/hvr:md:bg-[#f0f6ff] ">
                                      <a href="https://smartodr.in/login" target="_blank" class="text-[0.813rem] text-black font-medium flex items-center leading-tight whitespace-nowrap lg:text-left ">
                                          <div class="flex items-center gap-3">
                                            <div class=" *:size-3 *:text-black/90 duration-300 *:group-hover/hvr:md:text-themeColor1 ">
                                              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path></svg></div>
                                              <div>
                                                  <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:text-themeColor1 "
                                                  >Smart ODR</span>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                </div>
                                <div class="relative group/hvr">
                                  <div class="flex-auto  px-2 py-2 rounded-md duration-300 group-hover/hvr:md:bg-[#f0f6ff] ">
                                      <a href="kmp" target="_blank" class="text-[0.813rem] text-black font-medium flex items-center leading-tight whitespace-nowrap lg:text-left ">
                                          <div class="flex items-center gap-3">
                                            <div class=" *:size-3 *:text-black/90 duration-300 *:group-hover/hvr:md:text-themeColor1 ">
                                              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path></svg></div>
                                              <div>
                                                  <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:text-themeColor1 ">KMP</span>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                </div>
                                <div class="relative group/hvr">
                                  <div class="flex-auto  px-2 py-2 rounded-md duration-300 group-hover/hvr:md:bg-[#f0f6ff] ">
                                      <a href="https://www.scores.gov.in/scores/Welcome.html" target="_blank"  class="text-[0.813rem] text-black font-medium flex items-center leading-tight whitespace-nowrap lg:text-left ">
                                          <div class="flex items-center gap-3">
                                            <div class=" *:size-3 *:text-black/90 duration-300 *:group-hover/hvr:md:text-themeColor1 ">
                                              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path></svg></div>
                                              <div>
                                                  <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:text-themeColor1 "
                                                  >Scores</span>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                </div>
                                <div class="relative group/hvr">
                                  <div class="flex-auto  px-2 py-2 rounded-md duration-300 group-hover/hvr:md:bg-[#f0f6ff] ">
                                      <a href="https://www.nseindia.com/invest/investors-home" target="_blank" class="text-[0.813rem] text-black font-medium flex items-center leading-tight whitespace-nowrap lg:text-left ">
                                          <div class="flex items-center gap-3 ">
                                            <div class=" *:size-3 *:text-black/90 duration-300 *:group-hover/hvr:md:text-themeColor1 ">
                                              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path></svg></div>
                                              <div>
                                                  <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:text-themeColor1 "
                                                  >Investor Guide NSE</span>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                </div>
                                <div class="relative group/hvr">
                                  <div class="flex-auto  px-2 py-2 rounded-md duration-300 group-hover/hvr:md:bg-[#f0f6ff] ">
                                      <a href="https://www.evoting.nsdl.com/" target="_blank" class="text-[0.813rem] text-black font-medium flex items-center leading-tight whitespace-nowrap lg:text-left ">
                                          <div class="flex items-center gap-3 ">
                                            <div class=" *:size-3 *:text-black/90 duration-300 *:group-hover/hvr:md:text-themeColor1 ">
                                              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path></svg></div>
                                              <div>
                                                  <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:text-themeColor1 "
                                                  >NSDL E-Voting
                                                  </span>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                </div>
                                <div class="relative group/hvr">
                                  <div class="flex-auto  px-2 py-2 rounded-md duration-300 group-hover/hvr:md:bg-[#f0f6ff] ">
                                      <a href="https://investorhelpline.nseclearing.in/ClientCollateral/welcomeCLUser" target="_blank" class="text-[0.813rem] text-black font-medium flex items-center leading-tight whitespace-nowrap lg:text-left ">
                                          <div class="flex items-center gap-3 ">
                                            <div class=" *:size-3 *:text-black/90 duration-300 *:group-hover/hvr:md:text-themeColor1 ">
                                              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path></svg></div>
                                              <div>
                                                  <span class="font-bold text-sm font-serif duration-300 group-hover/hvr:text-themeColor1 "
                                                  >Client Collateral Details</span>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                  </li>
                  <li class="relative group">
                      <a href="product" class="flex items-center px-2 lg:px-1 text-black font-semibold opacity-100 text-[0.813rem] duration-300 group-hover:md:text-themeColor1 uppercase lg:max-xl:text-[0.75rem]  gap-1">
                        Products</a>
                  </li>
                  <li class="relative group">
                      <a href="javascript:;" class="flex items-center px-2  text-black font-semibold opacity-100 text-[0.813rem] duration-300 group-hover:md:text-themeColor1 uppercase lg:max-xl:text-[0.75rem]  gap-1">
                        Back Office
                        <span class="*:size-[0.8rem]">
                          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M6 6v2h8.59L5 17.59 6.41 19 16 9.41V18h2V6z"></path></svg></span>
                      </a>
                      <div class="absolute top-[4.688rem] rounded-xl -left-20 transition-all max-w-[28.125rem] shadow-lg z-10 border-[0.031rem] border-secondary bg-white/90 backdrop-blur-lg opacity-0 invisible group-hover:md:opacity-100 group-hover:md:visible duration-300 group-hover:-translate-y-3 after:absolute after:!w-full after:!-top-10 after:!h-10  after:left-0">
                        <div class="grid grid-cols-2 lg:flex lg:flex-nowrap w-full gap-4 xl:p-2 items-stretch text-[0.813rem] leading-7">
                            <div class="w-full flex flex-col p-3">
                                <div class="relative group/hvr">
                                    <div class="flex-auto">
                                        <a href="https://backoffice.techtrade.in:8085/capexweb/capexweb/" class="text-[0.813rem] text-black font-medium flex items-center rounded-md leading-tight whitespace-nowrap px-2 py-3 group-hover/hvr:md:bg-[#f0f6ff]">
                                            <div class="flex items-center gap-2">
                                                <span class="*:size-5 *:text-themeColor1 mr-2">
                                                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M406.5 399.6C387.4 352.9 341.5 320 288 320l-64 0c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3l64 0c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z"></path></svg>
                                                </span>
                                                <div>
                                                    <span class="font-bold text-sm font-serif group-hover/hvr:md:text-themeColor1">Client Login</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="relative group/hvr">
                                  <div class="flex-auto ">
                                      <a href="funds-transfer" class="text-[0.813rem] text-black font-medium flex items-center leading-tight rounded-md whitespace-nowrap px-2 py-3 group-hover/hvr:md:bg-[#f0f6ff]">
                                          <div class="flex items-center gap-2">
                                              <span class="*:size-5 *:text-themeColor1 mr-2">
                                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M12 18v-6"></path><path d="m9 15 3 3 3-3"></path></svg>
                                              </span>
                                              <div>
                                                  <span class="font-bold text-sm font-serif group-hover/hvr:md:text-themeColor1">Funds Transfer</span>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                </div> 
                                <div class="relative group/hvr">
                                  <div class="flex-auto ">
                                      <a href="freeze-unfreeze-trading-account" class="text-[0.813rem] text-black font-medium flex items-center  leading-tight rounded-md whitespace-nowrap px-2 py-3 group-hover/hvr:md:bg-[#f0f6ff] group-hover/hvr:md:border-[#f0f6ff] ">
                                          <div class="flex items-center gap-2">
                                              <span class="*:size-5 *:text-themeColor1 mr-2">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M6 9.99h2v7H6zm8 3h2v4h-2zm-4-6h2v10h-2zM20 7V4h-2v3h-3v2h3v3h2V9h3V7zm-2 12H4V5h12V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-5h-2v5z"></path></svg>
                                              </span>
                                              <div>
                                                  <span class="font-bold text-sm font-serif group-hover/hvr:md:text-themeColor1">Freeze/Unfreeze Trading Account</span>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                </div>
                            </div>
                        </div>
                      </div> 
                  </li>
                   <li class="relative group">
                      <a href="contact" class="flex items-center px-2 lg:px-1 text-black font-semibold opacity-100 text-[0.813rem] duration-300 hover:md:text-themeColor1 uppercase lg:max-xl:text-[0.75rem]  gap-1 after:absolute after:!w-full after:!-top-10 after:!h-10  after:left-0 ">
                         Contact Us
                         <span class="*:size-[0.8rem]">
                          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M6 6v2h8.59L5 17.59 6.41 19 16 9.41V18h2V6z"></path></svg>
                        </span>
                      </a>
                      <div class="absolute top-[4.688rem] rounded-xl -left-20 max-w-[28.125rem] shadow-lg z-10 border-[0.031rem] border-secondary bg-white/90 backdrop-blur-lg opacity-0 invisible group-hover:md:opacity-100 group-hover:md:visible duration-300 group-hover:-translate-y-3 after:absolute after:!w-full after:!-top-10 after:!h-10 after:left-0">
                        <div class="grid grid-cols-2 lg:flex lg:flex-nowrap w-full gap-4 xl:p-2 items-stretch text-[0.813rem] leading-7">
                            <div class="w-full flex flex-col p-2">
                                <div class="mb-4 relative group/hvr">
                                    <div class="flex-auto bg-[#EDEDED]/80 py-3 px-3 duration-300 rounded-md group-hover/hvr:bg-[#f0f6ff] group-hover/hvr:md:shadow-lg">
                                        <a href="investor-grievance" class="flex items-center leading-tight whitespace-nowrap lg:text-left">
                                            <div class="flex items-center gap-3">
                                                <span class="*:size-6 duration-300 *:group-hover/hvr:text-themeColor1">
                                                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M610.5 341.3c2.6-14.1 2.6-28.5 0-42.6l25.8-14.9c3-1.7 4.3-5.2 3.3-8.5-6.7-21.6-18.2-41.2-33.2-57.4-2.3-2.5-6-3.1-9-1.4l-25.8 14.9c-10.9-9.3-23.4-16.5-36.9-21.3v-29.8c0-3.4-2.4-6.4-5.7-7.1-22.3-5-45-4.8-66.2 0-3.3.7-5.7 3.7-5.7 7.1v29.8c-13.5 4.8-26 12-36.9 21.3l-25.8-14.9c-2.9-1.7-6.7-1.1-9 1.4-15 16.2-26.5 35.8-33.2 57.4-1 3.3.4 6.8 3.3 8.5l25.8 14.9c-2.6 14.1-2.6 28.5 0 42.6l-25.8 14.9c-3 1.7-4.3 5.2-3.3 8.5 6.7 21.6 18.2 41.1 33.2 57.4 2.3 2.5 6 3.1 9 1.4l25.8-14.9c10.9 9.3 23.4 16.5 36.9 21.3v29.8c0 3.4 2.4 6.4 5.7 7.1 22.3 5 45 4.8 66.2 0 3.3-.7 5.7-3.7 5.7-7.1v-29.8c13.5-4.8 26-12 36.9-21.3l25.8 14.9c2.9 1.7 6.7 1.1 9-1.4 15-16.2 26.5-35.8 33.2-57.4 1-3.3-.4-6.8-3.3-8.5l-25.8-14.9zM496 368.5c-26.8 0-48.5-21.8-48.5-48.5s21.8-48.5 48.5-48.5 48.5 21.8 48.5 48.5-21.7 48.5-48.5 48.5zM96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm224 32c1.9 0 3.7-.5 5.6-.6 8.3-21.7 20.5-42.1 36.3-59.2 7.4-8 17.9-12.6 28.9-12.6 6.9 0 13.7 1.8 19.6 5.3l7.9 4.6c.8-.5 1.6-.9 2.4-1.4 7-14.6 11.2-30.8 11.2-48 0-61.9-50.1-112-112-112S208 82.1 208 144c0 61.9 50.1 112 112 112zm105.2 194.5c-2.3-1.2-4.6-2.6-6.8-3.9-8.2 4.8-15.3 9.8-27.5 9.8-10.9 0-21.4-4.6-28.9-12.6-18.3-19.8-32.3-43.9-40.2-69.6-10.7-34.5 24.9-49.7 25.8-50.3-.1-2.6-.1-5.2 0-7.8l-7.9-4.6c-3.8-2.2-7-5-9.8-8.1-3.3.2-6.5.6-9.8.6-24.6 0-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h255.4c-3.7-6-6.2-12.8-6.2-20.3v-9.2zM173.1 274.6C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path></svg>
                                                </span>
                                                <div>
                                                    <span class="font-bold text-sm font-serif duration-300 text-black group-hover/hvr:text-themeColor1">Investor Grievance</span>
                                                    <div class="font-medium mt-2 text-sm text-slate-600 font-serif" >When challenges arise, we’re here to protect<br> your rights  and advocate for your interests.</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="mb-4 relative group/hvr">
                                  <div class="flex-auto bg-[#EDEDED]/80 py-3 px-3 duration-300 rounded-lg group-hover/hvr:md:bg-[#f0f6ff] group-hover/hvr:md:shadow-lg">
                                    <a href="branch-locator" class="flex items-center leading-tight whitespace-nowrap lg:text-left">
                                        <div class="flex items-center gap-3">
                                            <span class="*:size-6 duration-300 *:group-hover/hvr:text-themeColor1">
                                              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M13.02 19.93v2.02c2.01-.2 3.84-1 5.32-2.21l-1.42-1.43a7.941 7.941 0 0 1-3.9 1.62zM4.03 12c0-4.05 3.03-7.41 6.95-7.93V2.05C5.95 2.58 2.03 6.84 2.03 12c0 5.16 3.92 9.42 8.95 9.95v-2.02c-3.92-.52-6.95-3.88-6.95-7.93zM19.95 11h2.02c-.2-2.01-1-3.84-2.21-5.32l-1.43 1.43c.86 1.1 1.44 2.43 1.62 3.89zM18.34 4.26a9.981 9.981 0 0 0-5.32-2.21v2.02c1.46.18 2.79.76 3.9 1.62l1.42-1.43zM18.33 16.9l1.43 1.42A9.949 9.949 0 0 0 21.97 13h-2.02a7.941 7.941 0 0 1-1.62 3.9z"></path><path d="M16 11.1C16 8.61 14.1 7 12 7s-4 1.61-4 4.1c0 1.66 1.33 3.63 4 5.9 2.67-2.27 4-4.24 4-5.9zm-4 .9a1.071 1.071 0 0 1 0-2.14A1.071 1.071 0 0 1 12 12z"></path></svg>
                                            </span>
                                            <div>
                                                <span class="font-bold font-serif text-black duration-300 group-hover/hvr:text-themeColor1">Branch Locator</span>
                                                <div class="font-medium mt-2 text-sm text-slate-600 font-serif" >When challenges arise, we’re here to protect<br> your rights and advocate for your interests.</div>
                                            </div>
                                        </div>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-4 relative w-full">
                                  <div class="flex items-center gap-3 w-full *:w-1/2">
                                    <a href="careers" class="group/btn text-[0.813rem] text-black font-medium px-2 py-4 border border-[#dddddd] flex items-center justify-center rounded-md leading-tight whitespace-nowrap text-center duration-300 hover:md:shadow-lg hover:md:bg-[#f0f6ff]">
                                      <span class="font-bold text-sm font-serif text-center duration-300 group-hover/btn:text-themeColor1 ">Careers</span>
                                    </a>
                                    <a href="contact" class="group/btn text-[0.813rem] text-black font-medium px-2 py-4 border border-[#dddddd] flex items-center justify-center rounded-md leading-tight whitespace-nowrap text-center duration-300 hover:md:shadow-lg hover:md:bg-[#f0f6ff]">
                                      <span class="font-bold text-sm font-serif text-center duration-300 group-hover/btn:text-themeColor1">Contact</span>
                                    </a>
                                  </div>
                                </div>
                            </div>
                        </div>
                      </div>
                  </li>
                  <li class="request-btn flex items-center gap-2">
                     <a href="https://ekyc.techtrade.in/register" class="group/btn rounded-lg overflow-hidden max-w-full w-fit origin-bottom py-3 text-sm lg:text-base lg:py-4 ps-6 pe-8  text-white flex font-semibold relative z-10 hover:md:scale-95 duration-300 before:absolute before:inset-1 before:ring-[0.188rem] before:ring-inset before:ring-[#C5D8F3] before:bg-[#C5D8F3] before:rounded-lg before:-z-[2] after:absolute after:size-80 after:right-0 after:-top-[4.125rem] after:-rotate-[41deg] after:bg-[#004AAD] after:rounded-lg after:-z-[1] after:hover:md:-top-[8.813rem] after:hover:md:right-[0.625rem] after:duration-300">
                      <span class="before:absolute before:left-1 before:top-1 before:w-1.5 before:h-[calc(100%-1.125rem)] before:duration-300 group-hover/btn:before:h-1.5 before:rounded-full before:bg-[#C5D8F3] after:absolute after:left-1 after:bottom-1 after:w-1.5 after:h-1.5 after:duration-300 group-hover/btn:after:h-[calc(100%-1.125rem)] after:rounded-full after:bg-[#C5D8F3] text-sm lg:max-xl:text-[0.75rem]">Open a Demat A/C</span>
                    </a>
                    <a href="https://trading.techtrade.in/login" class="group/btn rounded-lg overflow-hidden max-w-full w-fit origin-bottom py-4 ps-6 pe-8  text-[#004AAD] flex font-semibold relative z-10 hover:md:scale-95 duration-300 before:absolute before:inset-1 before:ring-[0.188rem] before:ring-inset before:ring-[#C5D8F3] before:rounded-lg before:-z-[2] after:absolute after:size-80 after:right-0 after:-top-[4.125rem] after:-rotate-[41deg] after:bg-[#C5D8F3] after:rounded-lg after:-z-[1] after:hover:md:-top-[8.813rem] after:hover:md:right-[0.625rem] after:duration-300">
                      <span class="before:absolute before:left-1 before:top-1 before:w-1.5 before:h-[calc(100%-1.125rem)] before:duration-300 group-hover/btn:before:h-1.5 before:rounded-full before:bg-[#fff] after:absolute after:left-1 after:bottom-1 after:w-1.5 after:h-1.5 after:duration-300 group-hover/btn:after:h-[calc(100%-1.125rem)] after:rounded-full after:bg-[#fff] lg:max-xl:text-[0.75rem] ">Start Trading</span>
                    </a>
                  </li>
              </ul>
          </div>
          <div class="flex items-end gap-4 lg:hidden">
            <div class="flex">
                <label for="sideToggle" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-black group-[]/nav:text-black">
                    <span class="sr-only">Open menu</span>
                    <svg class="size-7" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5">
                        </path>
                    </svg>
                </label>
            </div>
        </div>
      </nav>
    </header>
    <input type="checkbox" class="peer/sideToggle hidden " name="sideToggle" id="sideToggle">
    <label for="sideToggle" class="fixed inset-0 -z-[1011] pointer-events-none backdrop-blur-xl bg-theme1 peer-checked/sideToggle:z-[1010] peer-checked/sideToggle:opacity-100 opacity-0 duration-100"></label>
    <div class="fixed flex flex-col h-full inset-y-0 right-0 z-[1011] w-full overflow-y-auto bg-black select-none text-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-theme1/10 peer-checked/sideToggle:translate-x-0 peer-checked/sideToggle:opacity-100 translate-x-full opacity-0 duration-300">
      <div class="flex items-center justify-between">
        <a href="javascript:;" class="-ml-1.5">
            <span class="sr-only">Tech Trade</span>
            <img class="h-12 w-auto" width="174" height="48" src="assets/img/logo.png" alt=" Logo">
        </a>
        <label for="sideToggle" type="button" class="-m-2.5 rounded-md p-2.5 *:text-white">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </label>
      </div>
      <div class="mt-6 flow-root flex-fill -mr-4 pr-4">
          <div class="-my-6 divide-y divide-white">
              <div class="space-y-2 py-6">
                  <div class="flex flex-col gap-5 items-center">
                      <div class="flex flex-col w-full gap-y-5">
                        <div class="relative flex flex-col gap-y-3">
                        <input class="peer/mm hidden" type="checkbox" name="mmMenu" id="mmAbout">
                        <label for="mmAbout" class="flex items-center gap-x-[0.125rem] text-sm font-bold text-white">
                          <a href ="about">About Us</a>
                          <svg class="h-5 w-5 ml-auto flex-none text-white" stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M5.8 9.7l6.2 6.3 6.2-6.3c.2-.2.3-.5.3-.7s-.1-.5-.3-.7c-.2-.2-.4-.3-.7-.3h-11c-.3 0-.5.1-.7.3-.2.2-.3.4-.3.7s.1.5.3.7z"></path></svg>
                        </label>
               
                        </div>
                        <div class="relative flex flex-col gap-y-3">
                          <input class="peer/mm hidden" type="checkbox" name="mmMenu" id="mmResources">
                          <label for="mmResources" class="flex items-center gap-x-[0.125rem] text-sm font-bold text-white">
                           Resources
                            <svg class="h-5 w-5 ml-auto flex-none text-white" stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M5.8 9.7l6.2 6.3 6.2-6.3c.2-.2.3-.5.3-.7s-.1-.5-.3-.7c-.2-.2-.4-.3-.7-.3h-11c-.3 0-.5.1-.7.3-.2.2-.3.4-.3.7s.1.5.3.7z"></path></svg>
                          </label>
                          <div class="w-full peer-checked/mm:block hidden">
                            <div class="grid grid-cols-1 flex-wrap w-full gap-4">
                              <div class="w-full text-xs xl:text-sm *:flex *:items-center *:gap-x-3 *:py-1 *:relative">
                                <div class="mb-2 p-2 ">
                                  <div class="flex-auto">
                                    <a href="account-opening-process" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                      Account Opening Process
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-2 p-2 ">
                                  <div class="flex-auto">
                                    <a href="javascript:;" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                      Authorised Person Details
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-2 p-2">
                                  <div class="flex-auto">
                                    <a href="downloads" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                      Downloads
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-2 p-2 ">
                                  <div class="flex-auto">
                                    <a href="investor-charter" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                      Investor Charter                          
                                    <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-2 p-2 ">
                                  <div class="flex-auto">
                                    <a href="holiday-calendar" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                      Holiday Calendar
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-2 p-2 ">
                                  <div class="flex-auto">
                                    <a href="fit-and-proper-declaration" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                      Fit and Proper Declaration
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="relative flex flex-col gap-y-3">
                          <input class="peer/mm hidden" type="checkbox" name="mmMenu" id="mmImp_links">
                          <label for="mmImp_links" class="flex items-center gap-x-[0.125rem] text-sm font-bold text-white">
                          Important Links
                            <svg class="h-5 w-5 ml-auto flex-none text-white" stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M5.8 9.7l6.2 6.3 6.2-6.3c.2-.2.3-.5.3-.7s-.1-.5-.3-.7c-.2-.2-.4-.3-.7-.3h-11c-.3 0-.5.1-.7.3-.2.2-.3.4-.3.7s.1.5.3.7z"></path></svg>
                          </label>
                          <div class="w-full peer-checked/mm:block hidden">
                            <div class="grid grid-cols-1 flex-wrap w-full gap-4">
                              <div class="w-full text-xs xl:text-sm *:flex *:items-center *:gap-x-3 *:py-1 *:relative">
                                <div class="mb-2 p-2 ">
                                  <div class="flex-auto">
                                    <a href="https://www.nseindia.com/" target="_blank" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                      NSE
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-2 p-2 ">
                                  <div class="flex-auto">
                                    <a href="https://www.bseindia.com/" target="_blank" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                    BSE
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-2 p-2 ">
                                  <div class="flex-auto">
                                    <a href="https://www.sebi.gov.in/" target="_blank" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                    SEBI                           
                                    <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-2 p-2 ">
                                  <div class="flex-auto">
                                    <a href="https://www.mcxindia.com/" target="_blank" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                      MCX
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-2 p-2 ">
                                  <div class="flex-auto">
                                    <a href="https://www.ncdex.com/"  class="block text-white font-semibold text-[0.813rem] opacity-80">
                                      NCDEX
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-2 p-2 ">
                                  <div class="flex-auto">
                                    <a href="https://www.msei.in/" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                      MSEI
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-2 p-2 ">
                                  <div class="flex-auto">
                                    <a href="https://www.rbi.org.in/" target="_blank" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                      RBI
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-2 p-2">
                                  <div class="flex-auto">
                                    <a href="https://www.cdslindia.com/index.html" target="_blank"class="block text-white font-semibold text-[0.813rem] opacity-80">
                                      CDSL
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>

                                <div class="mb-2 p-2">
                                  <div class="flex-auto">
                                    <a href="https://www.evoting.nsdl.com/" target="_blank" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                      NDSL
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-2 p-2">
                                  <div class="flex-auto">
                                    <a href="https://smartodr.in/login" target="_blank" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                      Smart ODR
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-2 p-2">
                                  <div class="flex-auto">
                                    <a href="kmp" target="_blank" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                      KMP
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-2 p-2 ">
                                  <div class="flex-auto">
                                    <a href="https://www.scores.gov.in/scores/Welcome.html" target="_blank" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                      Scores
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-2 p-2 ">
                                  <div class="flex-auto">
                                    <a href="https://www.nseindia.com/invest/investors-home" target="_blank" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                     Investor Guide NSE
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-2 p-2 ">
                                  <div class="flex-auto">
                                    <a href="https://www.evoting.nsdl.com/" target="_blank" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                    NSDL E-Voting
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-2 p-2 ">
                                  <div class="flex-auto">
                                    <a href="https://investorhelpline.nseclearing.in/ClientCollateral/welcomeCLUser" target="_blank" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                    Client Collateral Details
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>  
                        <div class="relative flex flex-col gap-y-3">
                          <input class="peer/mm hidden" type="checkbox" name="mmMenu" id="mmProducts">
                          <label for="mmProducts" class="flex items-center gap-x-[0.125rem] text-sm font-bold text-white">
                            Products 
                          </label>
                        </div>   
                        
                        <div class="relative flex flex-col gap-y-3">
                          <input class="peer/mm hidden" type="checkbox" name="mmMenu" id="mmBackoffice">
                          <label for="mmBackoffice" class="flex items-center gap-x-[0.125rem] text-sm font-bold text-white">
                           Back Office
                            <svg class="h-5 w-5 ml-auto flex-none text-white" stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M5.8 9.7l6.2 6.3 6.2-6.3c.2-.2.3-.5.3-.7s-.1-.5-.3-.7c-.2-.2-.4-.3-.7-.3h-11c-.3 0-.5.1-.7.3-.2.2-.3.4-.3.7s.1.5.3.7z"></path></svg>
                          </label>
                          <div class="w-full peer-checked/mm:block hidden">
                            <div class="grid grid-cols-1 flex-wrap w-full gap-4">
                              <div class="w-full text-xs xl:text-sm *:flex *:items-center *:gap-x-3 *:py-1 *:relative">
                                <div class="mb-2 p-2 ">
                                  <div class="flex-auto">
                                    <a href="https://backoffice.techtrade.in:8085/capexweb/capexweb/" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                      Client login
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-2 p-2 ">
                                  <div class="flex-auto ">
                                    <a href="funds-transfer" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                    Fund Transfer
                                      <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div class="mb-2 p-2 ">
                                  <div class="flex-auto">
                                    <a href="freeze-unfreeze-trading-account" class="block text-white font-semibold text-[0.813rem] opacity-80">
                                    Freeze/Unfreeze trading Account                            
                                    <span class="absolute inset-0 z-[1]"></span>
                                    </a>
                                  </div>
                                </div>
                                <div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="relative flex flex-col gap-y-3">
                          <input class="peer/mm hidden" type="checkbox" name="mmMenu" id="mmAbout">
                          <label for="mmAbout" class="flex items-center gap-x-[0.125rem] text-sm font-bold text-white">
                            <a href ="contact">Contact Us</a>
                            <svg class="h-5 w-5 ml-auto flex-none text-white" stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" height="12.5rem" width="12.5rem" xmlns="http://www.w3.org/2000/svg"><path d="M5.8 9.7l6.2 6.3 6.2-6.3c.2-.2.3-.5.3-.7s-.1-.5-.3-.7c-.2-.2-.4-.3-.7-.3h-11c-.3 0-.5.1-.7.3-.2.2-.3.4-.3.7s.1.5.3.7z"></path></svg>
                          </label>
                  <div class="w-full peer-checked/mm:block hidden">
                    <div class="grid grid-cols-1 flex-wrap w-full gap-4">
                      <div class="w-full text-xs xl:text-sm *:flex *:items-center *:gap-x-3 *:py-1 *:relative">
                        <div class="mb-2 p-2 ">
                          <div class="flex-auto">
                            <a href="investor-grievance" class="block text-white font-semibold text-[0.813rem] opacity-80">
                              Investor Grievance
                              <span class="absolute inset-0 z-[1]"></span>
                            </a>
                          </div>
                        </div>
                        <div class="mb-2 p-2 ">
                          <div class="flex-auto">
                            <a href="branch-locator" class="block text-white font-semibold text-[0.813rem] opacity-80">
                            Branch Locator
                              <span class="absolute inset-0 z-[1]"></span>
                            </a>
                          </div>
                        </div>
                        <div class="mb-2 p-2 ">
                          <div class="flex-auto">
                            <a href="careers" class="block text-white font-semibold text-[0.813rem] opacity-80">
                            Career                            
                            <span class="absolute inset-0 z-[1]"></span>
                            </a>
                          </div>
                        </div>
                        <div class="mb-2 p-2 ">
                          <div class="flex-auto">
                            <a href="contact" class="block text-white font-semibold text-[0.813rem] opacity-80">
                              Contact
                              <span class="absolute inset-0 z-[1]"></span>
                            </a>
                          </div>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                          </div>
                        <div class="relative flex flex-col gap-y-3">
                          <a href="" class="flex items-center gap-x-[0.125rem] text-sm font-bold text-white">
                           Open A Demat A/C
                          </a>
                        </div>
                        <div class="relative flex flex-col gap-y-3">
                          <a href="https://trading.techtrade.in/login" class="flex items-center gap-x-[0.125rem] text-sm font-bold text-white">
                           Start Trading
                          </a>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>