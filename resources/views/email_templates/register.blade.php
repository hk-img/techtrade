<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        * {
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Montserrat', sans-serif;
            background: #f1f1f1;
        }
    </style>
</head>

<body>
    <table align="center" style="width: 600px; background: #fff;border-collapse: collapse;">
        <tr>
            <td>
                <table style="text-align: center; background: #fff;padding: 0 25px 30px; width: 100%;">
                    <tr>
                        <td>
                            <a href="#" target="_blank">
                                <img style="padding: 15px 0;width: 100%; height: 80px; object-fit: contain;"
                                    src="{{ asset('images/logo.png') }}" alt="logo-image">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 style="margin:20px 0 8px 0;color: #000;font-size: 22px;font-weight: 700;">Welcome to {{ env('PAGE_TITLE') }} Business Private Limited Family</h4>
                            <h6 style="margin-top: 0;font-size: 12px;font-weight: 500;">
                                We are highly obliged to pronounce you as a Member of {{ env('PAGE_TITLE') }} Business Private Limited.

                            </h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                	
                                Hey {{$msg['name']}}, Thanks for Signing-Up<br>
                                UserID/UserName  : {{$msg['unique_id']}}<br>
                                Login Password     : {{$msg['password']}}<br>
                                Registered Mobile: {{$msg['mobile']}}<br>
                                Note : Please Save This UserID/UserName and Login Password for Future Login!<br><br>
                                Thanks so much,
                            </p>
                        </td>
                    </tr>
                    
                </table>
                
            </td>
        </tr>
    </table>
</body>
</html>
