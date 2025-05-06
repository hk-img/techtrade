@extends('layouts.app')

@push('title',__(' About Us'))

@section('content')
<div class="w-full bg-[#E7EFFA] rounded-bl-[3.563rem] rounded-br-[3.563rem] py-12 lg:py-0 lg:h-96 h-auto mt-24 relative overflow-hidden flex items-center justify-center">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 px-6 lg:px-8 w-full mx-auto flex items-center justify-between flex-col lg:flex-row relative z-10">
        <div class="flex flex-col justify-start font-serif space-y-3 text-black lg:text-left text-left">
            <div class="text-xl lg:text-[2.5rem] font-serif font-bold">About Us</div>
            <!-- <p class="lg:text-[1.125rem] font-serif font-medium">
        </p> -->
            <ul class="flex font-serif space-x-2 items-center lg:text-[1.125rem]">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="-mt-2">.</li>
                <li class="font-bold text-[#1B1E31]"><a href="about">About Us</a></li>
            </ul>
        </div>
        <img src="assets/img/headbg.png" alt="" class="w-1/2 lg:w-[35%]" />
    </div>

    <img src="assets/img/headside-img.png" alt="" class="h-full absolute lg:top-0 top-4 lg:right-0 z-0" />
    <img src="assets/img/headbg2.png" alt="" class="w-[90%] top-[35px] left-[150px] absolute z-0" />
    <img src="assets/img/headbg3.png" alt="" class="w-[60%] left-[6px] -bottom-[81px] absolute z-0" />
</div>

<section class="w-full pt-[60px] relative bg-white">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 px-6 lg:px-8 lg:w-full justify-center items-center flex flex-col space-y-[22px]">
        <div class="heading text-center">
            <div class="subtitle text-themecolor3 font-semibold">About Us</div>
            <h2 class="max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight text-black font-bold">
                Welcome to Sanchit Financial
                <span class="text-themeColor2"> & Management Services Ltd.</span>
            </h2>
        </div>
        <div class="lg:w-[860px] w-full">
            <img src="assets/img/aboutimg.png" alt="" class="w-full h-full rounded-sm" />
        </div>

        <div class="lg:w-full">
            <div class="lg:text-base text-sm font-medium font-serif text-[#666666] py-2">
                Established in <strong>1995</strong>, our organization has evolved from a small enterprise into a prominent name in market trade.Under the leadership of Mr. Praveen Agrawal, we are driven by a team of dedicated and skilled
                professionals who bring a blend of experience and fresh perspectives. Our commitment to continuous learning, innovation, and cutting-edge technology ensures a seamless and professional client experience.
            </div>
            <div class="lg:text-base text-sm font-medium font-serif text-[#666666] py-2">
                As a corporate member of NSE through the Cash and Derivatives segments and a registered Depository Participant with NSDL, we uphold the highest standards of reliability and security in trading. We offer comprehensive trading
                solutions, including online trading for shares and commodities, along with internet and telephone-based trading options for maximum convenience.
                <br />
                With an extensive network of branches across Rajasthan, Punjab, and Chandigarh, Haryana we have established ourselves as leaders in retail broking. Our core values of transparency, integrity, and excellence guide us in
                delivering outstanding customer service and leveraging the latest technology to meet the evolving needs of our clients.
            </div>
        </div>
    </div>
</section>

<section class="w-full py-[120px] relative">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 px-6 lg:px-8 flex flex-col space-y-5">
        <div class="flex flex-col lg:flex-row">
            <div class="w-full space-y-5 flex flex-col lg:px-14 mb-[6.8rem] sm:mb-28 lg:mb-0 lg:py-12 lg:w-1/3 h-full lg:h-auto">
                <div class="lg:text-4xl text-2xl font-bold font-serif leading-[45px] text-white">
                    Our Mission and <br />
                    Vision
                </div>
                <div class="lg:text-sm text-xs font-normal font-serif leading-[21px] text-white">
                    We strive to deliver innovative and reliable trading solutions, utilizing cutting-edge technology to optimize decision-making. Our goal is to empower clients with expert insights, advanced tools, and a seamless trading
                    experience.
                </div>
            </div>
            <div class="lg:w-[169px] left-0 2xl:bottom-40 hidden lg:h-[38px] absolute bg-[#C85103E5] z-10 lg:bottom-[110px]"></div>

            <div class="w-full lg:w-2/3 flex justify-center space-x-0 sm:space-x-2 sm:space-y-0 space-y-5 md:space-y-0 lg:mt-[-35px] mt-10 lg:space-y-0 lg:space-x-14 flex-col sm:flex-row md:flex-row lg:flex-row xl:flex-row">
                <div class="w-auto space-y-2 h-auto border border-[#004AAD] flex-col flex justify-center items-center p-4">
                    <span class="w-[86px] *:size-8 text-white items-center flex justify-center rounded-full h-[81px] bg-[#004AAD]">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1.5em" width="1.5em" xmlns="http://www.w3.org/2000/svg">
                            <path d="m8 3 4 8 5-5 5 15H2L8 3z"></path>
                            <path d="M4.14 15.08c2.62-1.57 5.24-1.43 7.86.42 2.74 1.94 5.49 2 8.23.19"></path>
                        </svg>
                    </span>
                    <div class="flex flex-col w-auto h-auto justify-center items-center text-center">
                        <div class="font-poppins font-semibold text-xl text-[#004AAD] py-2">Our Mission</div>
                        <div class="font-serif text-sm text-[#666666] font-normal">
                            Our mission is to empower businesses and investors with innovative solutions that drive informed decision-making, improve efficiency, and support sustainable success in the dynamic world of financial markets.
                        </div>
                    </div>
                </div>
                <div class="w-auto h-auto h-autospace-y-2 border border-[#004AAD] flex-col flex justify-center items-center p-5">
                    <span class="w-[86px] *:size-8 text-white items-center flex justify-center rounded-full h-[81px] bg-[#004AAD]">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                            <path
                                fill="none"
                                stroke-width="2"
                                d="M10.3248685,14.7630919 C7.82620532,14.038202 6,11.7325889 6,9 L6,1 L18,1 L18,10 M6,3 L1,3 L1,7 C1,9.509 2.791,11 5,11 L6,11 M20.0335555,10.884915 C21.7416567,10.4908882 23,9.10306372 23,7 L23,3 L18,3 M10,19 L5,19 L5,23 L16.5,23 M16.5,10 C12.9101429,10 10,12.9101429 10,16.5 C10,20.0898571 12.9101429,23 16.5,23 C20.0898571,23 23,20.0898571 23,16.5 C23,12.9101429 20.0898571,10 16.5,10 L16.5,10 Z M20,14 L15.5,18.5 L13,16 M10.2056405,15.4240751 C8.89754812,16.0817472 8,17.4360568 8,19"
                            ></path>
                        </svg>
                    </span>
                    <div class="flex flex-col w-full h-auto justify-center items-center text-center">
                        <div class="font-poppins font-semibold text-xl text-[#004AAD] py-2">Our Vision</div>
                        <div class="font-serif text-sm text-[#666666] font-normals">
                            Our vision is to be a globally recognized leader in advanced, technology-driven trading solutions. We strive to provide businesses and investors with seamless, efficient, and transparent trading experiences,
                            setting new standards in the financial industry.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative w-full h-full px-4 lg:px-10 border-l border-r overflow-hidden">
            <img src="assets/img/intro-img.jpg" alt="About Image" class="w-full h-full object-cover aspect-sqaure" />
        </div>
        <div class="w-[109px] h-[96px] bg-[#C85103E5] z-10 absolute hidden sm:right-[30px] sm:top-[200px] md:right-[0px] md:top-[388px] lg:right-[13px] lg:top-[388px] xl:right-[30px] right-[20px] top-[150px]"></div>
    </div>

    <div class="w-full h-full flex flex-row absolute top-0 -z-10 py-[80px]">
        <div class="w-full lg:w-1/3 h-[300px] lg:h-full rounded-bl-[57px] md:mb-5 sm:mb-6 rounded-tl-[57px] bg-blue-700"></div>
        <div class="lg:w-2/3"></div>
    </div>
</section>

<section class="w-full lg:mb-10 mb-0">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 py-3 flex flex-col px-6 lg:px-8 w-full justify-center items-center">
        <div class="heading text-center">
            <div class="subtitle text-themecolor3 font-semibold">Our Founders</div>
            <h2 class="max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight text-black font-bold">
                The Experts
                <span class="text-themeColor2"> Who Make It Happen</span>
            </h2>
        </div>

        <div class="flex lg:flex-row flex-col space-x-0 space-y-4 lg:space-y-0 lg:space-x-[100px] py-[60px] justify-between items-stretch">
            <div class="flex flex-col shadow py-4 lg:px-4 px-4 items-center rounded-[25px] shadow-[#0000001A] lg:w-full lg:h-auto">
                <div class="lg:w-80 w-1/2 overflow-hidden rounded-[20px] border border-[#DDDDDD]">
                    <img src="assets/img/founder-img1.jpg" alt="" class="w-full object-cover object-top" />
                </div>
                <div class="flex flex-col py-6 text-center justify-center">
                    <div class="font-bold font-heading text-[22px] text-[#1B1E31]">Praveen Kumar Agarwal</div>
                    <div class="font-medium font-serif text-lg text-[#C85103]">Founder</div>
                </div>
                <div class="lg:text-base text-sm font-medium font-serif text-[#666666] py-2">
                    Driven by a deep understanding of financial markets and a strong enthusiasm for trading, Praveen Agrawal has been actively involved in jobbing and arbitrage since 2004, utilizing leading trading platforms such as
                    <b>NCDEX,</b> <b>MCX,</b> <b>NSE,</b> and <b>BSE.</b> His journey in trading began with a sharp focus on <b>commodity markets,</b> seizing opportunities within speculative trades through electronic exchanges. Over the
                    past <b>18+ years,</b> he has navigated the ever-evolving financial landscape, gaining deep market insights and hands-on experience in risk management and strategy.<br />
                    However, his vision extended beyond trading alone. He aspired to <b>create employment opportunities</b> for individuals passionate about the financial sector, equipping them with the knowledge and skills to succeed. His
                    commitment to <b>mentorship and entrepreneurship</b> development has helped many professionals build careers in <b>equity and commodity markets.</b><br />
                    Under his leadership, the company continues to <b>set new industry benchmarks,</b> embracing innovation and technology to provide seamless, efficient, and growth-driven trading solutions.
                </div>
            </div>
            <div class="flex flex-col shadow py-4 lg:px-4 px-4 items-center rounded-[25px] shadow-[#0000001A] lg:w-full lg:h-auto">
                <div class="lg:w-80 w-1/2 overflow-hidden rounded-[20px] border border-[#DDDDDD]">
                    <img src="assets/img/founder-img2.jpg" alt="" class="w-full object-cover object-top" />
                </div>
                <div class="flex flex-col py-6 text-center justify-center">
                    <div class="font-bold font-heading text-[22px] text-[#1B1E31]">Sharmila Agarwal</div>
                    <div class="font-medium font-serif text-lg text-[#C85103]">Director</div>
                </div>
                <div class="lg:text-base text-sm font-medium font-serif text-[#666666] py-2">
                    As the Director of Sanchit Financial, Mrs. Sharmila Agrawal has been a driving force behind the company’s vision and growth. Her leadership and dedication have played a crucial role in shaping the firm’s values and
                    commitment to excellence. With her strategic guidance, Sanchit Financial has strengthened its position as a trusted and respected name in the financial industry.
                    <br />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w-full relative bg-white rounded-t-[3.563rem] -mt-14 py-6 md:py-20">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 py-3 px-6 lg:px-8 w-full mx-auto">
        <div class="overflow-hidden relative w-full aspect-square mx-auto rounded-[44px] lg:h-[26.25rem] h-[16.875rem] bg-cover bg-center bg-no-repeat bg-[url('../img/cta-bg.png')]">
            <div class="flex flex-wrap lg:flex-nowrap items-center">
                <div class="lg:grow hidden lg:block">
                    <div class="w-full">
                        <img class="w-full" src="assets\img\bull-img.png" />
                    </div>
                </div>
                <div class="lg:w-3/5 w-full flex items-center justify-center px-4 lg:py-10 py-6">
                    <div>
                        <div class="heading text-center lg:text-left lg:pt-0 pt-8">
                            <h2 class="max-md:text-2xl max-xl:text-3xl text-4xl/tight font-bold text-white">
                                Begin your investing journey with TECH TRADE
                            </h2>
                            <div class="lg:mt-6 mt-3 sm:text-base text-slate-100 font-medium text-sm leading-6">Sanchit Financial & Management Services Ltd. is a leading financial services company headquartered in Punjab.</div>
                            <div class="lg:mt-6 mt-3 flex gap-4 justify-center lg:justify-start">
                                <label
                                    for="leadPopup"
                                    class="group/btn cursor-pointer rounded-lg overflow-hidden max-w-full w-fit origin-bottom py-4 ps-6 pe-8 text-[#004AAD] flex font-semibold relative z-10 hover:md:scale-95 duration-300 before:absolute before:inset-1 before:ring-[0.188rem] before:ring-inset before:ring-[#C5D8F3] before:rounded-lg before:-z-[2] after:absolute after:size-80 after:right-0 after:-top-[4.125rem] after:-rotate-[41deg] after:bg-[#C5D8F3] after:rounded-lg after:-z-[1] after:hover:md:-top-[8.813rem] after:hover:md:right-[0.625rem] after:duration-300"
                                >
                                    <span
                                        class="before:absolute before:left-1 before:top-1 before:w-1.5 before:h-[calc(100%-1.125rem)] before:duration-300 group-hover/btn:before:h-1.5 before:rounded-full before:bg-[#fff] after:absolute after:left-1 after:bottom-1 after:w-1.5 after:h-1.5 after:duration-300 group-hover/btn:after:h-[calc(100%-1.125rem)] after:rounded-full after:bg-[#fff]"
                                    >
                                        Register for Free
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w-full mb-28">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 flex flex-col px-6 lg:px-8 w-full justify-center items-center">
        <div class="heading text-center">
            <div class="subtitle text-themecolor3 font-semibold">Client’ s feedback</div>
            <h2 class="max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight text-black font-bold mx-auto lg:w-3/5 w-full">
                Client Reviews for Sanchit Financial and 
                <span class="text-themeColor2">Management Services Limited</span>
            </h2>
        </div>
        <div class="w-full">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-white p-7 flex items-center justify-center">
                        <div class="flex rounded-[10px] border border-[#DBDBDB] py-6 h-auto px-9 shadow-[#0000001A] shadow flex-col">
                            <div class="flex items-center space-x-2 lg:h-auto flex-row">
                                {{-- <div class="w-[65px] h-[65px] rounded-full overflow-hidden">
                                    <img src="assets/img/aboutgirl2.jpg" alt="" class="h-full w-full" />
                                </div> --}}
                                <div class="flex flex-col gap-y-2">
                                    <div class="text-[22px] font-semibold font-heading text-[#1B1E31]">Manju Gupta</div>
                                    <div class="inline-flex items-center gap-1 *:size-5 *:text-[#FBB204] *:last-[#d9d9d9]">
                                        <svg stroke="currentColor" fill="#FBB204" stroke-width="0" viewBox="0 0 576 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                        <svg stroke="currentColor" fill="#FBB204" stroke-width="0" viewBox="0 0 576 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                        <svg stroke="currentColor" fill="#FBB204" stroke-width="0" viewBox="0 0 576 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                        <svg stroke="currentColor" fill="#FBB204" stroke-width="0" viewBox="0 0 576 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                        <svg stroke="currentColor" fill="#d9d9d9" stroke-width="0" viewBox="0 0 576 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                    </div>
                                </div>
                            </div>

                            <div class="w-auto py-3 h-auto">
                                <div class="lg:text-base text-sm font-normal font-serif leading-[30px] text-[#666666]">
                                    "I am truly impressed by the dedication and professionalism of Sanchit Financial and Management Services Limited. Their team is knowledgeable, responsive, and always ready to guide me with the best financial advice. A trustworthy brokerage firm I would highly recommend!"
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white p-7 flex items-center justify-center">
                        <div class="flex rounded-[10px] border border-[#DBDBDB] py-6 lg:h-auto px-9 shadow-[#0000001A] shadow flex-col">
                            <div class="flex lg:w-auto items-center space-x-2 h-full flex-row">
                                {{-- <div class="w-[65px h-[65px] rounded-full overflow-hidden">
                                    <img src="assets/img/aboutmen2.jpg" alt="" class="h-full w-full" />
                                </div> --}}

                                <div class="flex flex-col gap-y-2">
                                    <div class="text-[22px] font-semibold font-heading text-[#1B1E31]">Arpit</div>
                                    <div class="inline-flex items-center gap-1 *:size-5 *:text-[#FBB204] *:last-[#d9d9d9]">
                                        <svg stroke="currentColor" fill="#FBB204" stroke-width="0" viewBox="0 0 576 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                        <svg stroke="currentColor" fill="#FBB204" stroke-width="0" viewBox="0 0 576 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                        <svg stroke="currentColor" fill="#FBB204" stroke-width="0" viewBox="0 0 576 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                        <svg stroke="currentColor" fill="#FBB204" stroke-width="0" viewBox="0 0 576 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                        <svg stroke="currentColor" fill="#d9d9d9" stroke-width="0" viewBox="0 0 576 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                    </div>                                
                                </div>
                            </div>

                            <div class="w-auto py-3 h-auto">
                                <div class="text-base font-normal font-serif leading-[30px] text-[#666666]">
                                    "Sanchit Financial has completely changed my perspective on investing. Their personalized approach and transparent communication have made me feel confident and secure with my financial decisions. Excellent service!"
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white p-7 flex items-center justify-center">
                        <div class="flex rounded-[10px] border border-[#DBDBDB] py-6 h-auto px-9 shadow-[#0000001A] shadow flex-col">
                            <div class="flex lg:w-[250px] items-center space-x-2 lg:h-auto flex-row">
                                {{-- <div class="w-[65px] h-[65px] rounded-full overflow-hidden">
                                    <img src="assets/img/aboutgirl2.jpg" alt="" class="h-full w-full" />
                                </div> --}}

                                <div class="flex flex-col gap-y-2">
                                    <div class="text-[22px] font-semibold font-heading text-[#1B1E31]">Ankit</div>
                                    <div class="inline-flex items-center gap-1 *:size-5 *:text-[#FBB204] *:last-[#d9d9d9]">
                                        <svg stroke="currentColor" fill="#FBB204" stroke-width="0" viewBox="0 0 576 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                        <svg stroke="currentColor" fill="#FBB204" stroke-width="0" viewBox="0 0 576 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                        <svg stroke="currentColor" fill="#FBB204" stroke-width="0" viewBox="0 0 576 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                        <svg stroke="currentColor" fill="#FBB204" stroke-width="0" viewBox="0 0 576 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                        <svg stroke="currentColor" fill="#d9d9d9" stroke-width="0" viewBox="0 0 576 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M288 376.4l.1-.1 26.4 14.1 85.2 45.5-16.5-97.6-4.8-28.7 20.7-20.5 70.1-69.3-96.1-14.2-29.3-4.3-12.9-26.6L288.1 86.9l-.1 .3 0 289.2zm175.1 98.3c2 12-3 24.2-12.9 31.3s-23 8-33.8 2.3L288.1 439.8 159.8 508.3C149 514 135.9 513.1 126 506s-14.9-19.3-12.9-31.3L137.8 329 33.6 225.9c-8.6-8.5-11.7-21.2-7.9-32.7s13.7-19.9 25.7-21.7L195 150.3 259.4 18c5.4-11 16.5-18 28.8-18s23.4 7 28.8 18l64.3 132.3 143.6 21.2c12 1.8 22 10.2 25.7 21.7s.7 24.2-7.9 32.7L438.5 329l24.6 145.7z"></path></svg>                                    </div>                                
                                </div>
                            </div>

                            <div class="w-auto py-3 h-auto">
                                <div class="lg:text-base text-sm font-normal font-serif leading-[30px] text-[#666666]">
                                    "What sets Sanchit Financial apart is their commitment to client satisfaction. They take the time to understand your goals and offer tailored solutions that actually deliver results. A great experience overall!"
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white p-7 flex items-center justify-center">
                        <div class="flex rounded-[10px] border border-[#DBDBDB] py-6 lg:h-auto px-9 shadow-[#0000001A] shadow flex-col">
                            <div class="flex lg:w-auto items-center space-x-2 lg:h-auto flex-row">
                                {{-- <div class="w-[65px h-[65px] rounded-full overflow-hidden">
                                    <img src="assets/img/aboutmen2.jpg" alt="" class="h-full w-full" />
                                </div> --}}

                                <div class="flex flex-col gap-y-2">
                                    <div class="text-[22px] font-semibold font-heading text-[#1B1E31]">Monu Kumar Jangid
                                    </div>
                                    <div class="inline-flex items-center gap-1 *:size-5 *:text-[#FBB204] *:last-[#d9d9d9]">
                                        <svg stroke="currentColor" fill="#FBB204" stroke-width="0" viewBox="0 0 576 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                        <svg stroke="currentColor" fill="#FBB204" stroke-width="0" viewBox="0 0 576 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                        <svg stroke="currentColor" fill="#FBB204" stroke-width="0" viewBox="0 0 576 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                        <svg stroke="currentColor" fill="#FBB204" stroke-width="0" viewBox="0 0 576 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                        <svg stroke="currentColor" fill="#d9d9d9" stroke-width="0" viewBox="0 0 576 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                    </div>                                
                                </div>
                            </div>

                            <div class="w-auto py-3 h-auto">
                                <div class="lg:text-base text-sm font-normal font-serif leading-[30px] text-[#666666]">
                                    "From the very first interaction, I felt I was in good hands. Sanchit Financial and Management Services Limited has proven to be a reliable partner in my financial journey. Highly professional, honest, and efficient!"
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination mb-[-0.75rem]"></div>
            </div>
        </div>
    </div>
</section>

@endsection