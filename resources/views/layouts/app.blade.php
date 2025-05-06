<!DOCTYPE html>
<html lang="en" class="min-[7680px]:text-[80px] min-[5760px]:text-[60px] min-[3840px]:text-[40px] min-[2880px]:text-[28px] min-[2560px]:text-[26px] min-[2400px]:text-[24px] min-[2133px]:text-[22px] min-[1920px]:text-[20px] min-[1745px]:text-[18px] 2xl:text-[16px] xl:text-[14px] lg:text-[12px]">
<head>
    <link rel="stylesheet" href="{{asset('assets/css/output.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Raleway:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="shortcut icon" href="{{asset('assets/img/favicon1.png')}}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>TECHTRADE | @stack('title')</title>
    @stack('meta')
</head>
<body class="font-heading">

    @include('layouts.header',compact('links'))
    @yield('content')
    @include('layouts.footer',compact('links','information'))
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        document.getElementById("contact-form").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent form submission
            //alert('test');
            // Get form values
            let fullName = document.getElementById("fullName").value.trim();
            let email = document.getElementById("emailid").value.trim();
            let mobile = document.getElementById("mobilenumber").value.trim();
            let message = document.getElementById("message").value.trim();
            
            // Clear previous error messages
            document.querySelector(".err-fullname").textContent = "";
            document.querySelector(".err-emailid").textContent = "";
            document.querySelector(".err-mobilenumber").textContent = "";
            document.querySelector(".err-message").textContent = "";
            document.querySelector(".err-recapcha").textContent = "";

            let isValid = true;

            // Validate Full Name
            if (fullName === "") {
                //alert('Full Name is required.');
                document.querySelector(".err-fullname").textContent = "Full Name is required.";
                isValid = false;
            }

            // Validate Mobile No (assume 10-digit format)
            let mobilePattern = /^[0-9]{10}$/;
            if (mobile === "") {
                //alert('Mobile No is required.');
                document.querySelector(".err-recapcha").textContent = "reCAPTCHA V3 validation failed, suspected as abusive usageYour submission failed because of an error.";
                document.querySelector(".err-mobilenumber").textContent = "Mobile No is required.";
                isValid = false;
            } else if (!mobilePattern.test(mobile)) {
                //alert('Please enter a valid 10-digit Mobile No.');
                document.querySelector(".err-recapcha").textContent = "reCAPTCHA V3 validation failed, suspected as abusive usageYour submission failed because of an error.";
                document.querySelector(".err-mobilenumber").textContent = "Please enter a valid 10-digit Mobile No.";
                isValid = false;
            }

            // Validate E-mail (if provided)
            if (email === "") {
                //alert('Email address is required.');
                document.querySelector(".err-recapcha").textContent = "reCAPTCHA V3 validation failed, suspected as abusive usageYour submission failed because of an error.";
                document.querySelector(".err-emailid").textContent = "Email address is required.";
                isValid = false;
            } else {
                let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                if (!emailPattern.test(email)) {
                    //alert('Please enter a valid E-mail address.');
                    document.querySelector(".err-recapcha").textContent = "reCAPTCHA V3 validation failed, suspected as abusive usageYour submission failed because of an error.";
                    document.querySelector(".err-emailid").textContent = "Please enter a valid E-mail address.";
                    isValid = false;
                }
            }

            // Validate Message
            if (message === "") {
                //alert('City is required.');
                document.querySelector(".err-message").textContent = "City is required.";
                isValid = false;
            }

            // If validation failed, do not submit
            if (!isValid) {
                return;
            } else {
                //$('.loader').addClass("loading");
                $.ajax({
                    url: '{{url("open-demat-account")}}', // Path to your email.php file
                    type: 'POST', // Send data using POST method
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        name: fullName,
                        email: email,
                        mobile: mobile,
                        city: message
                    },
                    beforeSend: function () {
                        // Disable the button to prevent multiple clicks
                        $("#formsubmit").prop("disabled", true).text("Sending...");
                    },
                    success: function(response) {
                        var resp = response
                        if(resp.success){
                            //alert('From has been submitted we will get back to you.');
                            //Swal.fire(  'Success!','From has been submitted we will get back to you.','success');
                            document.getElementById("contact-form").reset();
                            $("#success-message").text("Your submission was successful.").fadeIn();

                            setTimeout(function(){
                                $("#success-message").fadeOut();
                            }, 10000); // Hide message after 10 seconds
                        }else{
                            alert('Something went wrong.');
                            //Swal.fire(  'Error!','Something went wrong.',
                            //                    'error'
                            //                );
                        }
                        //$('.loader').removeClass("loading");
                        $("#formsubmit").prop("disabled", false).text("Get Started");
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error("Form submission failed:", error);
                        alert('Something went wrong.');
                        $("#formsubmit").prop("disabled", false).text("Get Started");
                        // Swal.fire(  'Error!','Something went wrong.',
                        //                     'error'
                        //                 );
                    }
                });
                
                // this.submit(); // Proceed with form submission
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const popup = document.getElementById("disclosurePopup");
            const lastShown = localStorage.getItem("lastPopupTime");
            const now = new Date().getTime();
            const oneDay = 24 * 60 * 60 * 1000; // 24 hours in milliseconds

            if (!lastShown || now - lastShown > oneDay) {
                popup.checked = true; // Show the popup
                localStorage.setItem("lastPopupTime", now); // Update last shown time
            }
        });

        function closePopup() {
            document.getElementById("disclosurePopup").checked = false;
        }
    </script>
    @stack('scripts')
</body>
</html>
    
    