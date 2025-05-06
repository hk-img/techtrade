@extends('layouts.app')

@push('title',__(' Contact Us'))

@section('content')
<div class="w-full bg-[#E7EFFA] rounded-bl-[3.563rem] rounded-br-[3.563rem] py-12 lg:py-0 lg:h-96 h-auto mt-24 relative overflow-hidden flex items-center justify-center">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 px-6 lg:px-8 w-full mx-auto flex items-center justify-between flex-col lg:flex-row relative z-10">
        <div class="flex flex-col justify-start font-serif space-y-3 text-black lg:text-left text-left">
            <h1 class="text-xl lg:text-[2.5rem] font-heading font-bold">Contact Us</h1>
            <p class="lg:text-[1.125rem] text-[#1B1E31] font-serif font-medium">
                Get in touch with us for any queries, complaints, feedbacks or suggestions.
            </p>
            <ul class="flex font-serif space-x-2 items-center lg:text-[1.125rem]">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="-mt-2">.</li>
                <li class="font-bold text-[#1B1E31]"><a href="contact">Contact Us</a></li>
            </ul>
        </div>
        <img src="assets/img/contactbg.png" alt="" class="w-1/2 lg:w-[35%]" />
    </div>

    <img src="assets/img/headside-img.png" alt="" class="h-full absolute top-0 right-0 z-0" />
    <img src="assets/img/headbg2.png" alt="" class="w-[93%] top-[50px] left-[150px] absolute z-0" />
    <img src="assets/img/headbg3.png" alt="" class="w-[67%] left-[6px] -bottom-[81px] absolute z-0" />
</div>

<section class="w-full py-12 relative bg-white">
    <div class="2xl:px-24 lg:3xl:px-36 lg:pb-3 lg:w-full mx-auto">
        <div class="flex flex-col space-y-3 justify-center items-center">
            <h1 class="lg:text-lg text-base font-heading text-gray-500">Contact Us</h1>

            <h2 class="lg:text-4xl text-xl font-heading text-black font-bold text-center">
                <span class="lg:text-4xl text-xl font-bold text-[#C85103]">We're</span> Here To Help - Get In Touch <br />
                Us Today
            </h2>
        </div>
    </div>
</section>

<section class="w-full pb-8 relative bg-white">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 lg:py-5 px-6 lg:px-8 w-full">
        <div class="flex flex-col px-2 lg:px-10 rounded-lg shadow shadow-[#9C9292]">
            <form action="" id="contact-formn">
                <div class="flex flex-col lg:flex-row w-full gap-8 lg:px-3 py-10 justify-between">
                    <div class="flex space-y-7 w-full flex-col">
                        <h1 class="lg:text-2xl text-xl text-black font-bold">
                            <span class="lg:text-2xl text-xl font-heading text-[#C85103]"> Sent</span>
                            An Message
                        </h1>
                        <div class="border py-4 rounded-lg px-4">
                            <div class="bg-white w-24 text-center font-serif -mt-6">
                                <h1 class="font-serif text-base font-normal">Your Name</h1>
                            </div>
                            <input type="text" name="name" required id="fullNamen" class="border-none py-1 outline-none placeholder:text-sm font-normal font-serif w-full" placeholder="Enter your Name" />
                        </div>
                        <div>
                            <span class="err-fullnamen text-red-500 text-sm"> </span>
                        </div>
                        <div class="border py-4 rounded-lg px-4">
                            <div class="bg-white w-[8rem] text-center font-serif -mt-6">
                                <h1 class="font-serif text-base font-normal">Your Phone No.</h1>
                            </div>
                            <input
                                type="text"
                                id="mobilenumbern"
                                name="mobile"
                                maxlength="10"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)"
                                required
                                class="border-none py-1 outline-none placeholder:text-sm font-normal font-serif w-full"
                                placeholder="Enter your No."
                            />                        
                        </div>
                        <div>
                            <span class="err-mobilenumbern text-red-500 text-sm"> </span>
                        </div>
                        <div class="border py-4 rounded-lg px-4">
                            <div class="bg-white w-24 font-serif text-center -mt-6">
                                <h1 class="font-serif text-base font-normal">Your Email</h1>
                            </div>
                            <input name="email" type="email" id="emailidn" required class="border-none py-1 outline-none placeholder:text-sm font-normal font-serif w-full" placeholder="Enter your Mail" />
                        </div>
                        <div>
                            <span class="err-emailidn text-red-500 text-sm"> </span>
                        </div>
                        <div class="border py-4 rounded-lg px-4">
                            <div class="bg-white w-24 text-center -mt-6">
                                <h1 class="font-serif text-base font-normal">Subject</h1>
                            </div>
                            <input type="text" name="subject" required id="subjectn" class="border-none py-1 outline-none placeholder:text-sm font-normal font-serif w-full" placeholder="Write Your Subject" />
                        </div>
                        <div>
                            <span class="err-subjectn text-red-500 text-sm"> </span>
                        </div>
                        <div class="border py-5 h-32 rounded-lg px-4">
                            <div class="bg-white w-24 text-center -mt-6">
                                <h1 class="font-serif text-base font-normal">Message</h1>
                            </div>
                            <input type="text" name="message" required id="messagen" class="border-none py-1 outline-none placeholder:text-sm font-normal font-serif w-full" placeholder="Write Your Message" />
                        </div>

                        <div>
                            <span class="err-messagen text-red-500 text-sm"> </span>
                        </div>
                        <button id="formsubmitn" class="bg-[#C85103] px-7 h-14 py-3 w-56 lg:w-64 text-white text-lg font-semibold rounded-lg">Send Message</button>
                        <span id="success-messagen" class="text-green-500 text-sm"> </span>
                        <div>
                            <span class="err-recapchan text-red-500 text-sm"> </span>
                        </div>
                    </div>
                    <div class="w-full py-12 flex space-y-2 flex-col">
                        <div class="flex rounded-lg shadow space-x-3 shadow-[#9C9292] px-4 py-5 h-32 flex-row">

                        <div class="rounded-full  justify-center mt-7 lg:mt-4 items-center flex lg:w-12 w-14 h-10 lg:h-12 bg-[#FFE1CD]">
                            <span class="text-[#C85103] "><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1.5em" width="1.5em" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-width="2" d="M12,22 C12,22 4,16 4,10 C4,5 8,2 12,2 C16,2 20,5 20,10 C20,16 12,22 12,22 Z M12,13 C13.657,13 15,11.657 15,10 C15,8.343 13.657,7 12,7 C10.343,7 9,8.343 9,10 C9,11.657 10.343,13 12,13 L12,13 Z"></path></svg></span>
                        </div>
                        <div class="flex w-80  flex-col">
                            <h1 class="text-lg font-heading font-bold" >Corporate Office</h1>
                            <h2 class="text-base font-serif text-[#525566] font-medium">@if(!empty($info) && $info->corporate_office){!! $info->corporate_office !!}@endif</h2>
                        </div>

                        </div>
                        <div class="flex rounded-lg shadow space-x-3 shadow-[#9C9292] px-4 py-5 h-32 flex-row">

                        <div class="rounded-full  justify-center mt-7 lg:mt-4  items-center flex lg:w-12 w-14 h-10 lg:h-12 bg-[#FFE1CD]">
                            <span class="text-[#C85103] "><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1.5em" width="1.5em" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-width="2" d="M12,22 C12,22 4,16 4,10 C4,5 8,2 12,2 C16,2 20,5 20,10 C20,16 12,22 12,22 Z M12,13 C13.657,13 15,11.657 15,10 C15,8.343 13.657,7 12,7 C10.343,7 9,8.343 9,10 C9,11.657 10.343,13 12,13 L12,13 Z"></path></svg></span>
                        </div>
                        <div class="flex w-80  flex-col">
                            <h1 class="text-lg font-heading font-bold" >Registered Office</h1>
                            <h2 class="text-base font-serif text-[#525566] font-medium">@if(!empty($info) && $info->registered_office){!! $info->registered_office !!}@endif</h2>
                        </div>
                        </div>
                        <div class="flex rounded-lg shadow space-x-3 shadow-[#9C9292] px-4  py-5 h-32 flex-row items-center">
                        <div class="rounded-full  justify-center mt-7 lg:mt-4  items-center flex lg:w-12 w-14 h-10 lg:h-12 bg-[#FFE1CD]">
                            <span class="text-[#C85103] "><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path><path d="M14.05 2a9 9 0 0 1 8 7.94"></path><path d="M14.05 6A5 5 0 0 1 18 10"></path></svg></span>
                        </div>
                        <div class="flex w-80  flex-col">
                            <h1 class="text-lg font-heading font-bold" >Contact No.</h1>
                            <h2 class="text-base font-serif text-[#525566] font-medium">+91-@if(!empty($info) && $info->contact_no){{$info->contact_no}}@endif</h2>
                        </div>

                        </div>
                        <div class="flex rounded-lg shadow space-x-3 shadow-[#9C9292] px-4 py-5 h-32 flex-row items-center">

                        <div class="rounded-full  justify-center mt-3 lg:mt-0 items-center flex lg:w-12 w-14 h-10 lg:h-12 bg-[#FFE1CD]">
                            <span class="text-[#C85103] "><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"></path></svg></span>
                        </div>
                        <div class="flex w-80 text-   flex-col">
                            <h1 class="text-lg font-heading font-bold" >Email</h1>
                            <h2 class="text-base font-serif text-[#525566] font-medium">@if(!empty($info) && $info->email){{$info->email}}@endif</h2>
                        </div>
                        </div> 
                    </div> 
                </div>
            </form>


            <div class="h-96 w-full overflow-hidden border-dashed border-gray-400 px-2 mb-10 py-3 border-[2px]">
                <iframe
                    src="@if(!empty($info) && $info->link){{$info->link}}@endif"
                    class="w-full h-full"
                    style="border: 0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
        </div>
    </div>
</section>
<section class="w-full bg-white py-10">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 py-3 px-6 lg:px-8 w-full mx-auto flex flex-col space-y-8">
        <div class="">
            <h1 class="text-2xl font-heading font-bold"><span class="text-orange-500">Investor</span> Complaint Escalation Matrix</h1>
        </div>

        <div class="w-full border rounded-lg overflow-hidden">
            <div class="max-w-full overflow-x-auto">
                <table class="w-full min-w-[1100px]">
                    <thead class="bg-[#1B1E31] font-serif text-lg font-bold text-white">
                        <tr>
                            <th class="p-5 text-left">Details of</th>
                            <th class="p-5 text-left">Contact Person</th>
                            <th class="p-5 text-left">Address</th>
                            <th class="p-5 text-left">Contact No.</th>
                            <th class="p-5 text-left">Email Id</th>
                            <th class="p-5 text-left">Working Hours</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm font-serif">
                        <tr class="bg-[#F6F6F6]">
                            <td class="p-5">Customer care</td>
                            <td class="p-5">Mr. Boby Jha</td>
                            <td class="p-5">
                                F-116, City Plaza, Space <br />
                                Cinema, Bani Park, Jaipur, <br />
                                Rajasthan – 302016
                            </td>
                            <td class="p-5">0141-3561934</td>
                            <td class="p-5">boby.jha@techtrade.in</td>
                            <td class="p-5">09:00 AM TO 05:00 PM</td>
                        </tr>
                    </tbody>
                    <tbody class="text-sm font-serif">
                        <tr class="bg-white">
                            <td class="p-5">Head of Client Servicing</td>
                            <td class="p-5">Mr. Ajay Kumar Yogi</td>
                            <td class="p-5">F-116, City Plaza, Space Cinema, Bani Park, Jaipur, Rajasthan – 302016</td>
                            <td class="p-5">0141-4051456</td>
                            <td class="p-5">ajay.kumar@techtrade.in</td>
                            <td class="p-5">09:00 AM TO 05:00 PM</td>
                        </tr>
                    </tbody>
                    <tbody class="text-sm font-serif">
                        <tr class="bg-[#F6F6F6]">
                            <td class="p-5">Compliance Officer</td>
                            <td class="p-5">Miss Sapna Chouhan</td>
                            <td class="p-5">
                                F-116, City Plaza, Space <br />
                                Cinema, Bani Park, Jaipur, <br />
                                Rajasthan – 302016
                            </td>
                            <td class="p-5">0141-3561934/7792022561</td>
                            <td class="p-5">sapna.chauhan@techtrade.in</td>
                            <td class="p-5">09:00 AM TO 05:00 PM</td>
                        </tr>
                    </tbody>
                    <tbody class="text-sm font-serif">
                        <tr class="bg-white">
                            <td class="p-5">CEO</td>
                            <td class="p-5">Praveen Kumar Agarwal</td>
                            <td class="p-5">
                                F-116, City Plaza, Space <br />
                                Cinema, Bani Park, Jaipur, <br />
                                Rajasthan – 302016
                            </td>
                            <td class="p-5">7300006530</td>
                            <td class="p-5">Praveen@techtrade.in</td>
                            <td class="p-5">09:00 AM TO 05:00 PM</td>
                        </tr>
                    </tbody>
                    <tbody class="text-sm">
                        <tr class="bg-[#F6F6F6] h-24">
                            <td class="p-5"></td>
                            <td class="p-5"></td>
                            <td class="p-5"></td>
                            <td class="p-5"></td>
                            <td class="p-5"></td>
                            <td class="p-5"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<section class="w-full bg-white py-8">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 py-3 px-6 lg:px-8 w-full mx-auto flex flex-col space-y-8">
        <div class="">
            <h1 class="text-2xl font-heading font-bold"><span class="text-orange-500">Stock </span> Broker Details</h1>
        </div>

        <div class="w-full border rounded-lg overflow-hidden">
            <div class="max-w-full overflow-x-auto">
                <table class="w-full min-w-[900px]">
                    <thead class="bg-[#1B1E31] text-lg font-serif font-bold text-white">
                        <tr>
                            <th class="p-4 text-left whitespace-nowrap">Stock Broker Name</th>
                            <th class="p-4 text-left whitespace-nowrap">Registration Number</th>
                            <th class="p-4 text-left whitespace-nowrap">Registered Address</th>
                            <th class="p-4 text-left whitespace-nowrap">Branch Address</th>
                            <th class="p-4 text-left whitespace-nowrap">Contact Number</th>
                            <th class="p-4 text-left whitespace-nowrap">Email ID</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        <tr class="bg-[#F6F6F6] font-serif">
                            <td class="p-5">
                                Sanchit Financial & <br />
                                Management Services Ltd.
                            </td>
                            <td class="p-5">INZ000295835</td>
                            <td class="p-5">
                                U-6 Krishna Apartment, <br />
                                Hathi Babu Marg, Bani Park,<br />
                                Jaipur, Rajasthan- 302016, <br />
                                India
                            </td>
                            <td class="p-5">Registered Office</td>
                            <td class="p-5">7792022561</td>
                            <td class="p-5">info@techtrade.in</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="w-full bg-white py-8">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 py-3 px-6 lg:px-8 w-full mx-auto flex flex-col space-y-8">
        <div class="">
            <h1 class="text-2xl font-heading font-bold"><span class="text-orange-500">Details </span> of Key People</h1>
        </div>

        <div class="w-full border rounded-lg overflow-hidden">
            <div class="max-w-full overflow-x-auto">
                <table class="w-full min-w-[900px]">
                    <thead class="bg-[#1B1E31] text-lg font-serif font-bold text-white">
                        <tr>
                            <th class="p-4 text-left whitespace-nowrap">Contact Person</th>
                            <th class="p-4 text-left whitespace-nowrap">Designation</th>
                            <th class="p-4 text-left whitespace-nowrap">Mobile Number</th>
                            <th class="p-4 text-left whitespace-nowrap">Email</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        <tr class="bg-[#F6F6F6] font-serif">
                            <td class="p-5">Praveen Kumar Agarwal</td>
                            <td class="p-5">CEO</td>
                            <td class="p-5">7300006530</td>
                            <td class="p-5">Praveen@techtrade.in</td>
                        </tr>
                    </tbody>
                    <tbody class="text-sm">
                        <tr class="bg-white font-serif">
                            <td class="p-5">Sharmila Agarwal</td>
                            <td class="p-5">Director</td>
                            <td class="p-5">7792022561</td>
                            <td class="p-5">info@techtrade.in</td>
                        </tr>
                    </tbody>
                    <tbody class="text-sm">
                        <tr class="bg-[#F6F6F6] font-serif">
                            <td class="p-5">Sapna Chouhan</td>
                            <td class="p-5">Compliance Officer</td>
                            <td class="p-5">7792022561</td>
                            <td class="p-5">sapna.chauhan@techtrade.in</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
    <script>
        document.getElementById("contact-formn").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent form submission
            //alert('test');
            // Get form values
            let fullName = document.getElementById("fullNamen").value.trim();
            let email = document.getElementById("emailidn").value.trim();
            let mobile = document.getElementById("mobilenumbern").value.trim();
            let message = document.getElementById("messagen").value.trim();
            let subject = document.getElementById("subjectn").value.trim();
            
            // Clear previous error messages
            document.querySelector(".err-fullnamen").textContent = "";
            document.querySelector(".err-emailidn").textContent = "";
            document.querySelector(".err-mobilenumbern").textContent = "";
            document.querySelector(".err-messagen").textContent = "";
            document.querySelector(".err-subjectn").textContent = "";
            document.querySelector(".err-recapchan").textContent = "";

            let isValid = true;

            // Validate Full Name
            if (fullName === "") {
                //alert('Full Name is required.');
                document.querySelector(".err-fullnamen").textContent = "Full Name is required.";
                isValid = false;
            }

            // Validate Mobile No (assume 10-digit format)
            let mobilePattern = /^[0-9]{10}$/;
            if (mobile === "") {
                //alert('Mobile No is required.');
                document.querySelector(".err-recapchan").textContent = "Your submission failed because of an error.";
                document.querySelector(".err-mobilenumbern").textContent = "Mobile No is required.";
                isValid = false;
            } else if (!mobilePattern.test(mobile)) {
                //alert('Please enter a valid 10-digit Mobile No.');
                document.querySelector(".err-recapchan").textContent = "Your submission failed because of an error.";
                document.querySelector(".err-mobilenumbern").textContent = "Please enter a valid 10-digit Mobile No.";
                isValid = false;
            }

            // Validate E-mail (if provided)
            if (email === "") {
                //alert('Email address is required.');
                document.querySelector(".err-recapchan").textContent = "Your submission failed because of an error.";
                document.querySelector(".err-emailidn").textContent = "Email address is required.";
                isValid = false;
            } else {
                let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                if (!emailPattern.test(email)) {
                    //alert('Please enter a valid E-mail address.');
                    document.querySelector(".err-recapchan").textContent = "Your submission failed because of an error.";
                    document.querySelector(".err-emailidn").textContent = "Please enter a valid E-mail address.";
                    isValid = false;
                }
            }

            // Validate Message
            if (message === "") {
                //alert('City is required.');
                document.querySelector(".err-messagen").textContent = "Message is required.";
                isValid = false;
            }

            // If validation failed, do not submit
            if (!isValid) {
                return;
            } else {
                //$('.loader').addClass("loading");
                $.ajax({
                    url: '{{url("contact-us")}}', // Path to your email.php file
                    type: 'POST', // Send data using POST method
                    data: {
                        name: fullName,
                        email: email,
                        mobile: mobile,
                        message: message,
                        subject:subject
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function () {
                        // Disable the button to prevent multiple clicks
                        $("#formsubmitn").prop("disabled", true).text("Sending...");
                    },
                    success: function(response) {
                        var resp = response;
                        if(resp.success){
                            //alert('From has been submitted we will get back to you.');
                            //Swal.fire(  'Success!','From has been submitted we will get back to you.','success');
                            document.getElementById("contact-formn").reset();
                            $("#success-messagen").text("Your submission was successful.").fadeIn();

                            setTimeout(function(){
                                $("#success-messagen").fadeOut();
                            }, 10000); // Hide message after 10 seconds
                        }else{
                            alert('Something went wrong.');
                            //Swal.fire(  'Error!','Something went wrong.',
                            //                    'error'
                            //                );
                        }
                        //$('.loader').removeClass("loading");
                        $("#formsubmitn").prop("disabled", false).text("Send Message");
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error("Form submission failed:", error);
                        alert('Something went wrong.');
                        $("#formsubmitn").prop("disabled", false).text("Send Message");
                        // Swal.fire(  'Error!','Something went wrong.',
                        //                     'error'
                        //                 );
                    }
                });
                
                // this.submit(); // Proceed with form submission
            }
        });
    </script>
@endpush