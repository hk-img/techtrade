@extends('layouts.app')

@push('title',__(' Holiday Calender'))

@section('content')
<div class="w-full bg-[#E7EFFA] rounded-bl-[3.563rem] rounded-br-[3.563rem] py-12 lg:py-0 lg:h-96 h-auto mt-24 relative overflow-hidden flex items-center justify-center">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 px-6 lg:px-8 w-full mx-auto flex items-center justify-between flex-col lg:flex-row relative z-10">
        <div class="flex flex-col justify-start font-serif space-y-3 text-black lg:text-left text-left">
            <h1 class="text-xl lg:text-[2.5rem] font-heading font-bold">Holiday Calendar</h1>
            <p class="lg:text-[1.125rem] font-serif font-medium">
                Get to know about the exchange trading holidays, latest circulars and bulletins.
            </p>
            <ul class="flex font-serif space-x-2 items-center lg:text-[1.125rem]">
                <li>Home</li>
                <li class="-mt-2">.</li>
                <li class="font-bold text-[#1B1E31]"><a href="holiday-calendar">Holiday Calendar</a></li>
            </ul>
        </div>
        <img src="assets/img/holidaysbg.png" alt="" class="w-1/2 lg:w-[35%]" />
    </div>

    <img src="assets/img/headside-img.png" alt="" class="h-full absolute lg:top-0 top-4 lg:right-0 z-0" />
    <img src="assets/img/headbg2.png" alt="" class="w-[90%] top-[35px] left-[150px] absolute z-0" />
    <img src="assets/img/headbg3.png" alt="" class="w-[60%] left-[6px] -bottom-[81px] absolute z-0" />
</div>

@if(!empty($formattedGroupedHolidays))
@foreach($formattedGroupedHolidays as $key => $value)
    <section class="w-full bg-white py-14">
        <div class="2xl:px-24 3xl:px-36 lg:pb-3 py-3 px-6 lg:px-8 w-full mx-auto flex flex-col space-y-5 lg:space-y-12">
            <div class="flex flex-col justify-center items-center space-y-2">
                <span class="text-lg text-[#6E6E6E]">Calendar</span>
                <h1 class="text-2xl lg:text-4xl text-[#1B1E31] font-bold"><span class="text-[#C85103]">{{ $value['type'] }}</span> Holidays {{$value['year']}}</h1>
            </div>

            <div class="w-full border rounded-lg overflow-hidden">
                <div class="max-w-full overflow-x-auto">
                    <table class="w-full min-w-[600px] font-serif">
                        <thead class="bg-[#1B1E31] text-lg font-bold text-white">
                            <tr>
                                <th class="p-5 text-left w-[20%]">Weekday</th>
                                <th class="p-5 text-left w-[26%] lg:w-[20%]">Date</th>
                                <th class="p-5 text-left w-[20%]">Holiday</th>
                                <th class="p-5 text-left flex justify-end">
                                    <span class="w-28">Exchanges</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm font-medium">
                        @if(!empty($value['holidays']))
                            @foreach($value['holidays'] as $key => $val)
                                <tr class="bg-[#F6F6F6]">
                                    <td class="p-5">{{$val->weak_day}}</td>
                                    <td class="p-5">{{date('d M Y',strtotime($val->date))}}</td>
                                    <td class="p-5">{{ucfirst($val->holiday)}}</td>
                                    <td class="p-5 text-left flex justify-end">
                                        <span class="w-28">{{$val->exchanges}}</span>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endforeach
@endif

<!-- <section class="w-full bg-white pb-14">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 py-3 px-6 lg:px-8 w-full mx-auto flex flex-col space-y-5 lg:space-y-12">
        <div class="flex flex-col justify-center items-center space-y-2">
            <span class="text-lg text-[#6E6E6E]">Calendar</span>
            <h1 class="text-2xl lg:text-4xl text-[#1B1E31] font-bold"><span class="text-[#C85103]">Settlement</span> Holidays 2025</h1>
        </div>
        <div class="w-full border rounded-lg overflow-hidden">
            <div class="max-w-full overflow-x-auto">
                <table class="w-full min-w-[700px] font-serif">
                    <thead class="bg-[#1B1E31] text-lg font-bold text-white">
                        <tr>
                            <th class="p-5 text-left w-[20%]">Weekday</th>
                            <th class="p-5 text-left w-[26%] lg:w-[20%]">Date</th>
                            <th class="p-5 text-left w-[20%]">Holiday</th>
                            <th class="p-5 text-left flex justify-end">
                                <span class="w-28">Exchanges</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        <tr class="bg-[#F6F6F6]">
                            <td class="p-5">Tuesday</td>
                            <td class="p-5">01 April 2025</td>
                            <td class="p-5">16 August 2025</td>
                            <td class="p-5 text-left flex justify-end">
                                <span class="w-28">SETTLEMENT</span>
                            </td>
                        </tr>
                        <tr class="">
                            <td class="p-5">Saturday</td>
                            <td class="p-5">16 August 2025</td>
                            <td class="p-5">Parsi New Year</td>
                            <td class="p-5 text-left flex justify-end">
                                <span class="w-28">SETTLEMENT</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section> -->

@endsection