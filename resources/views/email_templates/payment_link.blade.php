<!DOCTYPE html>
<html>
<head>
    <title>Payment Link</title>
</head>
<body>
    <p>Dear Customer,</p>
    <p>Thank you for choosing our services. Please click on the button below to complete your payment:</p>

    <!-- Pay Now Button as a link -->
    <a href="{{ env('PAYU_BASE_URL') . '/_payment' }}?key={{ env('PAYU_MERCHANT_KEY') }}&txnid={{ $data['transactionId'] }}&productinfo={{ $data['productInfo'] }}&amount={{ $data['amount'] }}&email={{ $data['email'] }}&firstname={{ $data['firstname'] }}&lastname={{ $data['lastname'] }}&surl={{ route('payment.success') }}&furl={{ route('payment.failure') }}&phone={{ $data['phone'] }}&hash={{ $data['hash'] }}" target="_blank">
        <button style="padding: 10px 20px; background-color: green; color: white; border: none; cursor: pointer;">
            Pay Now
        </button>
    </a>

    <!-- <a href="https://uatoneapi.payu.in/payment-links/_payment?key={{ env('PAYU_MERCHANT_KEY') }}&txnid={{ $data['transactionId'] }}&productinfo={{ urlencode($data['productInfo']) }}&amount={{ $data['amount'] }}&email={{ $data['email'] }}&firstname={{ $data['firstname'] }}&lastname={{ $data['lastname'] }}&surl={{ route('payment.success') }}&furl={{ route('payment.failure') }}&phone={{ $data['phone'] }}&hash={{ $data['hash'] }}" target="_blank">
        <button style="padding: 10px 20px; background-color: green; color: white; border: none; cursor: pointer;">
            Pay Now
        </button>
    </a> -->

    <p>Best Regards,<br>HealthFirstPharmacy</p>
</body>
</html>
