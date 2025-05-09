@extends('layouts.app')

@push('title',__(' Careers'))

@section('content')
<div class="w-full bg-[#E7EFFA] rounded-bl-[3.563rem] rounded-br-[3.563rem] py-12 lg:py-0 lg:h-96 h-auto mt-24 relative overflow-hidden flex items-center justify-center">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 px-6 lg:px-8 w-full mx-auto flex items-center justify-between flex-col lg:flex-row relative z-10">
        <div class="flex flex-col justify-start font-serif space-y-3 text-black lg:text-left text-left">
            <h1 class="text-xl lg:text-[2.5rem] font-heading font-bold">Careers</h1>
            <p class="lg:text-[1.125rem] font-serif font-medium">
                Shape Financial markets with us - join our expert team !
            </p>
            <ul class="flex font-serif space-x-2 items-center lg:text-[1.125rem]">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="-mt-2">.</li>
                <li class="text-[#1B1E31] font-bold"><a href="careers">Careers</a></li>
            </ul>
        </div>
        <img src="assets/img/careerbg.png" alt="" class="w-1/2 lg:w-[35%]" />
    </div>

    <img src="assets/img/headside-img.png" alt="" class="h-full absolute top-0 right-0 z-0" />
    <img src="assets/img/headbg2.png" alt="" class="w-[90%] top-[50px] left-[150px] absolute z-0" />
    <img src="assets/img/headbg3.png" alt="" class="w-[60%] left-[6px] -bottom-[81px] absolute z-0" />
</div>

<section class="w-full py-10 relative bg-white">
    <div class="2xl:px-24 lg:3xl:px-36 lg:pb-3 lg:w-full mx-auto">
        <div class="flex flex-col space-y-3 justify-center items-center">
            <h1 class="lg:text-lg text-base font-heading text-gray-500">Career</h1>
            <h2 class="lg:text-4xl text-xl font-heading text-black font-bold text-center">
                <span class="lg:text-4xl text-xl font-heading font-bold text-[#C85103]">Job openings</span> and career <br />
                opportunities
            </h2>
            <h3 class="lg:text-4xl text-xl font-heading text-black font-bold"></h3>
        </div>
    </div>
</section>

<section class="w-full h-auto relative bg-white">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 px-6 h-full lg:px-8 w-full">
        <div class="flex py-7">
            <h1 class="lg:text-[32px] text-xl font-semibold font-heading"><span class="lg:text-[32px] text-xl font-heading font-semibold text-[#C85103]">Current</span> Openings</h1>
        </div>

        <div class="flex flex-col h-full rounded-lg shadow shadow-[#9C9292]">
            <div class="py-4 px-2 lg:px-10 border-b flex justify-between items-center cursor-pointer" onclick="toggleContent()">
                <h1 class="font-serif lg:text-xl flex flex-row text-lg font-semibold">
                    <span class="px-2 py-1">
                        <svg
                            id="toggleIcon"
                            class="transition-transform duration-300 ease-in-out"
                            stroke="currentColor"
                            fill="currentColor"
                            stroke-width="0"
                            viewBox="0 0 448 512"
                            height="20px"
                            width="20px"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path id="iconPath" d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                        </svg>
                    </span>
                    Job Title: Sales – Executive/Officer/Assistant Manager/Deputy Manager
                </h1>
            </div>

            <div id="jobContent" class="flex flex-col py-7 px-2 lg:px-10 h-auto overflow-hidden transition-all duration-300 ease-in-out">
                <h1 class="font-serif lg:text-xl text-lg font-semibold">Location: <span class="text-[#1B1E31] font-serif text-lg font-semibold">Jaipur (Head Office)</span></h1>

                <div class="flex py-7 h-full w-full space-y-5 flex-col">
                    <h1 class="lg:text-xl text-lg font-serif font-semibold">Job Description:</h1>
                    <ul class="lg:text-lg text-base leading-9 text-[#1B1E31] list-disc px-5 font-serif font-semibold">
                        <li>New Client Acquisition & Business generation</li>
                        <li>Opening D-Mat & Trading Account and Cross Sell of Mutual Funds</li>
                        <li>Managing relationship with clients, retaining & enhancing advisory relationship</li>
                        <li>Would be responsible to achieve the sales target assigned</li>
                        <li>To keep one self-updated on the financial markets and in advisory products /services in particular.</li>
                    </ul>
                </div>

                <div class="flex h-full flex-col py-5">
                    <h1 class="font-serif lg:text-xl text-lg py-5 font-semibold">Desired Candidate Profile:</h1>
                    <span class="font-serif lg:text-lg text-base font-semibold text-[#1B1E31]">Qualification: – Graduate/PG/MBA</span>
                </div>

                <div class="flex h-full flex-col">
                    <h1 class="font-serif py-5 font-semibold lg:text-xl text-lg">Skills Required:</h1>
                    <ul class="font-serif lg:text-lg text-base font-semibold text-[#1B1E31] list-disc px-4">
                        <li>Good Client Servicing Skills</li>
                        <li>Communication Skill</li>
                    </ul>
                </div>

                <div class="flex h-full flex-col py-7">
                    <h1 class="font-serif lg:text-xl text-lg py-5 font-semibold">Perks and Benefits:</h1>
                    <span class="font-serif lg:text-lg text-base font-semibold text-[#1B1E31]"> Performance Based Attractive Incentives</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w-full py-7 relative bg-white">
    <div class="2xl:px-24 3xl:px-36 lg:pb-3 lg:py-5 px-6 lg:px-8 w-full">
        <form action="" id="career-form" enctype="multipart/form-data">
            <div class="flex flex-col py-7 px-2 lg:px-10 rounded-lg shadow shadow-[#9C9292]">
                <h1 class="lg:text-2xl text-xl text-black font-bold">
                    <span class="lg:text-2xl text-xl font-heading font-bold text-[#C85103]"> Submit </span>
                    Your Resume
                </h1>
                <div class="flex flex-col lg:flex-row w-full gap-8 lg:px-3 py-10 justify-between">
                    <div class="flex space-y-7 w-full flex-col">
                        <div class="border py-4 rounded-lg px-4">
                            <div class="bg-white w-36 text-center font-serif -mt-6">
                                <h1 class="font-serif text-base font-normal">Your Name</h1>
                            </div>
                            <input type="text" required name="fullName" id="fullNameCareer" class="border-none py-1 outline-none placeholder:text-sm font-normal font-serif w-full" placeholder="Enter your Name" />
                        </div>
                        <div>
                            <span class="err-fullnameCareer text-red-500 text-sm"> </span>
                        </div>
                        <div class="border py-4 rounded-lg px-4">
                            <div class="bg-white w-28 text-center font-serif -mt-6">
                                <h1 class="font-serif text-base font-normal">Your Email</h1>
                            </div>
                            <input type="email" name="email" required id="emailidCareer" class="border-none py-1 outline-none placeholder:text-sm font-normal font-serif w-full" placeholder="Enter your Email." />
                        </div>
                        <div>
                            <span class="err-emailidCareer text-red-500 text-sm"> </span>
                        </div>
                        <div class="border py-4 rounded-lg px-4">
                            <div class="bg-white w-36 font-serif text-center -mt-6">
                                <h1 class="font-serif text-base font-normal">Your Qualification</h1>
                            </div>
                            <input type="text" name="qualification" required id="qualificationCareer" class="border-none py-1 outline-none placeholder:text-sm font-normal font-serif w-full" placeholder="Your Qualification" />
                        </div>
                        <div>
                            <span class="err-qualificationCareer text-red-500 text-sm"> </span>
                        </div>

                        <div class="flex space-y-3 flex-col">
                            <h1 class="font-serif font-normal text-sm">Upload Your Resume / Cv</h1>

                            <input type="file" name="resumeCareer" id="resumeCareer" />
                        </div>
                        <div>
                            <span class="err-resumeCareer text-red-500 text-sm"> </span>
                        </div>
                    </div>
                    <div class="flex space-y-7 w-full flex-col">
                        <div class="border py-4 rounded-lg px-4">
                            <div class="bg-white w-24 text-center font-serif -mt-6">
                                <h1 class="font-serif text-base font-normal">Contact No.</h1>
                            </div>
                            <input
                                type="text"
                                name="mobile"
                                required
                                id="mobilenumberCareer"
                                maxlength="10"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)"
                                class="border-none py-1 outline-none placeholder:text-sm font-normal font-serif w-full"
                                placeholder="Enter your No."
                            />
                        </div>
                        <div>
                            <span class="err-mobilenumberCareer text-red-500 text-sm"> </span>
                        </div>
                        <div class="border py-4 rounded-lg px-4">
                            <div class="bg-white w-28 text-center font-serif -mt-6">
                                <h1 class="font-serif text-base font-normal">Your City</h1>
                            </div>
                            <input type="text" name="message" required id="messageCareer" class="border-none py-1 outline-none placeholder:text-sm font-normal font-serif w-full" placeholder="Enter Your City " />
                        </div>
                        <div>
                            <span class="err-messageCareer text-red-500 text-sm"> </span>
                        </div>
                        <div class="border py-4 rounded-lg px-4">
                            <div class="bg-white w-40 font-serif text-center -mt-6">
                                <h1 class="font-serif text-base font-normal">Years of Experience</h1>
                            </div>
                            <input type="text" name="experience" required id="experienceCareer" class="border-none py-1 outline-none placeholder:text-sm font-normal font-serif w-full" placeholder="Work Experience" />
                        </div>
                        <div>
                            <span class="err-experienceCareer text-red-500 text-sm"> </span>
                        </div>
                    </div>
                </div>
                <div class="mx-auto">
                    <button id="formsubmitCareer" class="bg-[#C85103] text-lg text-white font-semibold font-serif w-48 h-14 rounded-md border-none outline-none">Submit</button>
                </div>
                <div>
                    <span class="err-recapchaCareer text-red-500 text-sm"> </span>
                </div>
                <span id="success-messageCareer" class="text-green-500 text-sm"> </span>
            </div>
        </form>
    </div>
</section>

@endsection
@push('scripts')
<script>
    document.getElementById("career-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission

    let form = document.getElementById("career-form");
    let formData = new FormData(form); // Automatically captures all form fields including files

    // Validate inputs
    let fullName = document.getElementById("fullNameCareer").value.trim();
    let email = document.getElementById("emailidCareer").value.trim();
    let mobile = document.getElementById("mobilenumberCareer").value.trim();
    let message = document.getElementById("messageCareer").value.trim();
    let qualification = document.getElementById("qualificationCareer").value.trim();
    let experience = document.getElementById("experienceCareer").value.trim();
    let fileInput = document.getElementById("resumeCareer"); // File input field
    let file = fileInput.files[0]; // Get the selected file

    // Validate required fields
    let isValid = true;
    document.querySelector(".err-fullnameCareer").textContent = fullName ? "" : "Full Name is required.";
    document.querySelector(".err-emailidCareer").textContent = email ? "" : "Email is required.";
    document.querySelector(".err-mobilenumberCareer").textContent = mobile ? "" : "Mobile is required.";
    document.querySelector(".err-messageCareer").textContent = message ? "" : "City is required.";
    document.querySelector(".err-qualificationCareer").textContent = qualification ? "" : "Qualification is required.";
    document.querySelector(".err-experienceCareer").textContent = experience ? "" : "Experience is required.";
    document.querySelector(".err-recapchaCareer").textContent = "";
    document.querySelector(".err-resumeCareer").textContent = "";

    if (!fullName || !email || !mobile || !message || !qualification || !experience) {
        isValid = false;
        document.querySelector(".err-recapchaCareer").textContent = "Your submission failed because of an error.";
    }

    // Validate mobile number (10 digits)
    let mobilePattern = /^[0-9]{10}$/;
    if (!mobilePattern.test(mobile)) {
        document.querySelector(".err-mobilenumberCareer").textContent = "Please enter a valid 10-digit Mobile No.";
        document.querySelector(".err-recapchaCareer").textContent = "Your submission failed because of an error.";
        isValid = false;
    }

    // Validate email format
    let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailPattern.test(email)) {
        document.querySelector(".err-emailidCareer").textContent = "Please enter a valid Email.";
        document.querySelector(".err-recapchaCareer").textContent = "Your submission failed because of an error.";
        isValid = false;
    }

    // Validate file size (Max 5MB)
    // if (file && file.size > 5 * 1024 * 1024) {
    //     document.querySelector(".err-resumeCareer").textContent = "File size should be less than 5MB.";
    //     isValid = false;
    // }

    // Check file extention
    if (file) {
        let fileName = file.name.toLowerCase(); // Convert filename to lowercase for case-insensitive check
        if (!(fileName.endsWith(".pdf") || fileName.endsWith(".doc") || fileName.endsWith(".docx"))) {
            document.querySelector(".err-resumeCareer").textContent = "This file type is not allowed.";
            document.querySelector(".err-recapchaCareer").textContent = "Your submission failed because of an error.";
            isValid = false;
        }
    }

    if (!isValid) return;

    $.ajax({
        url: '{{url("careers")}}', 
        type: 'POST',
        data: formData,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        processData: false, // Prevent jQuery from converting the data into a string
        contentType: false, // Let the browser set the content type
        beforeSend: function () {
            $("#formsubmitCareer").prop("disabled", true).text("Sending...");
        },
        success: function(response) {
            var resp = response;
            if(resp.success){
                document.getElementById("career-form").reset();
                $("#success-messageCareer").text("Your submission was successful.").fadeIn();
                setTimeout(function(){
                    $("#success-messageCareer").fadeOut();
                }, 10000);
            } else {
                alert('Something went wrong.');
            }
            $("#formsubmitCareer").prop("disabled", false).text("Submit");
        },
        error: function() {
            alert('Something went wrong.');
            $("#formsubmitCareer").prop("disabled", false).text("Submit");
        }
    });
});

</script>
@endpush