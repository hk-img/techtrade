    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <title>@yield('title') | {{ env('PAGE_TITLE') }}</title>
        <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}" />
        <link rel="icon" href="{{ asset('admin-assets/images/favicon.ico') }}" type="image/x-icon">
        <link href="{{ asset('admin-assets/css/app.min.css') }}" rel="stylesheet">
        <link href="{{ asset('admin-assets/css/style.css') }}" rel="stylesheet" />
        <link href="{{ asset('admin-assets/css/fSelect.css') }}" rel="stylesheet" />
        <link href="{{ asset('admin-assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
        
        <!-- FontAwesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        @stack('custom_css')
        <style>
            /* width */
            #notificationDropdown{
                -ms-overflow-style: none;
                max-height: 174px;
                overflow-y:scroll;
            } 
            #notificationDropdown::-webkit-scrollbar {
                display: none;
            }
            .buttons-excel{
                width:10rem;
            }
             .dataTables_length{
                width: auto !important;
            }
            .dt-buttons{
                margin-left: 20px;
            }
            .note-modal-footer{
                height: 51px !important;
            }
            .switch label .lever:before, .switch label .lever:after {
                left: -1px;
                top: -4px;
            }
        </style>

    </head>

    <body class="light">
        <!-- Page Loader -->
        <div class="page-loader-wrapper" style="display:none">
            <div class="loader">
                <div class="m-t-30">
                    <img class="loading-img-spin" src="{{ asset('admin-assets/images/header-logo.png') }}"
                        alt="admin">
                </div>
                <p>Please wait...</p>
            </div>
        </div>

        <div id="preloader" style="display: none;">
            <div class="loader_spinner_inside"></div>
            <span class="loader_spinner_text">Please Wait...</span>
        </div>

        <!-- #END# Page Loader -->
        <div class="overlay"></div>
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="navbar-toggle collapsed" data-bs-toggle="collapse" data-target="#navbar-collapse"
                        aria-expanded="false"></a>
                    <a href="#" onClick="return false;" class="bars"></a>
                    <a class="navbar-brand" href="{{ url('admin/dashboard') }}">
                        <!-- <img style="width:190px;height:45px;"src="{{ asset('images/techtrade.png') }}" alt="" /> -->
                         <h2 style="color: white;">TECHTRADE</h2>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="pull-left">
                        <li>
                            <a href="#" onClick="return false;" class="sidemenu-collapse">
                                <i data-feather="menu"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown notification mt-2" style="margin-right:30px;">
                            <div class="dropdown-toggle" data-bs-toggle="dropdown">
                                <a href="#" class="dropdown-toggle" id="notificationDropdownToggle">
                                    {{-- <span><i class="fa fa-fw fa-bell position-relative"></i></span> --}}
                                    {{-- <span class="badge rounded-circle badge-notification bg-danger position-absolute d-flex align-items-center justify-content-center" style="left: 23px;top: 0; height:18px; width:18px; line-height:18px; font-size:11px;"><div id="">{{$notification_count}}</div></span> --}}
                                    {{-- <span class="badge rounded-circle badge-notification bg-danger position-absolute d-flex align-items-center justify-content-center" style="left: 23px;top: 0; height:18px; width:18px; line-height:18px; font-size:11px;"><div id="printnotification"></div></span> --}}
                                    
                                  
                                </a>
                            </div>
                            {{-- <div class="dropdown-menu">
                                <ul class="p-4 rounded d-flex flex-column gap-3"
                                    aria-labelledby="notificationDropdownToggle">
                                    <div class="notification-ui_dd-header">
                                        <h3 class="text-center">Notification</h3>
                                    </div>
                                    <div id="notificationDropdown">
                                        @foreach ($notifications as $notification)
                                        @php
                                           $oldTime = \Carbon\Carbon::parse($notification->oldtime);
                                        @endphp
                                            <li style="border-bottom: 1px solid #d6d6d6;" class="pb-2 mb-2">
                                                <div class=" pb-1 row">
                                                    <div class="col">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <div class="username font-weight-normal " style="font-size: 15px; line-height:20px"> <span style="font-weight:700;" class="pe-1">{{empty($notification->name) ? 'New User' : $notification->name}} : </span>{{$notification->message}}</div>
                                                                <div class="username font-weight-normal " style="font-size: 14px; line-height:20px"> <span style="font-weight:500;" class="">{{$oldTime->diffForHumans()}}</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </div>
                                </ul>
                                <div class="text-end button">
                                    <a href="{{ route('admin.notification.oldnotification') }} ">
                                        <span class ="p-2 text-bold text-white rounded-3 font-bold"
                                            style="background: #02304b;">All Notification</span></a>
                                </div>
                            </div> --}}
                        </li>

                        <!-- <li class="new-users">
                            <a class="nav-link"><span><i class="fa fa-fw fa-user"></i>Username:
                                    {{ \Auth::user()->username }}</span></a>
                        </li> -->
                        <li class="dropdown user_profile" style="margin-right: 30px;">
                            <div class="dropdown-toggle" data-bs-toggle="dropdown">
                                <img src="@if (\Auth::user()->profileimage != '' && file_exists(public_path() . '/uploads/user/' . \Auth::user()->profileimage)) {{ asset('uploads/user/' . \Auth::user()->profileimage) }} @else {{ asset('admin-assets/images/emptys.png') }} @endif"
                                    alt="" style="width:40px">
                            </div>
                            <ul class="dropdown-menu pullDown">
                                <li class="body">
                                    <ul class="user_dw_menu">

                                        <li>
                                            <a href="{{ url('change-password') }}">
                                                <i class="fa fa-key"></i>
                                                Change Password
                                            </a>

                                            <a href="javascript:void(0);" onclick="confirmLogout()">
                                                <i class="fas fa-power-off"></i> Logout
                                            </a>


                                            {{-- <a href="#" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                <i class="fas fa-power-off"></i> Logout
                                                </a> --}}
                                            <form id="logout-form" action="{{ route('logouts') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- #END# Tasks -->
                    </ul>
                </div>
            </div>
        </nav>

        <!-- #Top Bar -->
        <div>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- Menu -->
                <div class="menu drop-menu">
                    <div class="user-details d-flex justify-content-center">
                        <div class="media align-items-center user-pointer collapsed" data-toggle="collapse"
                            data-target="#user-dropdown" aria-expanded="false">
                            <div class="avatar-img">
                                <img id="ctl00_imgMemberProfile" class="mr-3 side-user-img img-fluid"
                                    alt="user avatar"
                                    src="@if (\Auth::user()->profileimage != '' && file_exists(public_path() . '/uploads/user/' . \Auth::user()->profileimage)) {{ asset('uploads/user/' . \Auth::user()->profileimage) }} @else {{ asset('admin-assets/images/emptys.png') }} @endif"
                                    style="border-width:0px;">
                            </div>
                            <div class="media-body">
                                <h6 class="side-user-name">
                                    <span id="ctl00_lblMemberName1">
                                    {{ ucfirst(\Auth::user()->name) }}
                                    </span><br>
                                    <span id="ctl00_lblMemberID">{{ \Auth::user()->unique_id }}</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    @php echo \App\Helpers\commonHelper::getSidebarMenu(); @endphp
                </div>
                <!-- #Menu -->
            </aside>
            <!-- #END# Left Sidebar -->
        </div>

        @yield('content')

        <script src="{{ asset('admin-assets/js/app.min.js') }}"></script>
        <script src="{{ asset('admin-assets/js/table.min.js') }}"></script>
        <script src="{{ asset('admin-assets/js/jquery-datatable.js') }}"></script>
        <script src="{{ asset('admin-assets/js/index.js') }}"></script>
        <script src="{{ asset('admin-assets/js/sweetalert.min.js') }}"></script>
        <script src="{{ asset('admin-assets/js/fSelect.js') }}"></script>
        <script src="{{ asset('admin-assets/js/common.js') }}"></script>
        <script src="{{ asset('admin-assets/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('admin-assets/datatables/responsive.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('admin-assets/js/select2.js') }}"></script>

        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
        
        <!-- JSZip (Required for Excel Export) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script>
            $(document).ready(function() {
                @if (Session::has('5fernsadminerror'))
                    sweetAlertMsg('error', "{{ Session::get('5fernsadminerror') }}");
                @elseif (Session::has('5fernsadminsuccess'))
                    sweetAlertMsg('success', "{{ Session::get('5fernsadminsuccess') }}");
                @endif

                var table = $('#DataTables_Table_0').DataTable();
                table.destroy();
                $('#DataTables_Table_0').DataTable({
                    stateSave: true,
                    // responsive: true,
                });
            });

            var baseUrl = "{{ url('/') }}";
        </script>
        <script>
            {{-- $(document).ready(function() {
                $.ajax({
                    url: "{{ route('admin.notification.notificationdata') }}",
                    type: "GET",
                    success: function(response) {
                        var countofnotification = response.count;
                        if(countofnotification >= 1){
                            $('#printnotification').text(countofnotification);
                        }
                        else{
                            $('#printnotification').text('0');
                        }
                        var notifications = response.getinotificationdata;
                        var dropdownMenu = $('#notificationDropdown');
                        dropdownMenu.empty();
                        $.each(notifications, function(index, notification) {
                            const str = notification.name;
                            const uprksnm = str.length > 0 ? str[0].toUpperCase() + str.slice(1) : 'New User';
                            var oldtime = notification.oldtime;
                            const start = new Date().getTime();
                            const end = new Date(oldtime).getTime();
                            const diff = start - end;
                            const hours = Math.floor(diff / (1000 * 60 * 60));
                            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                            if (hours >= 24) {
                                const days = Math.floor(hours / 24);
                                var totalMinutes = `${days} days ago`;
                            } else if (hours >= 1) {
                                var totalMinutes = `${hours} hours ago `;
                            } else {
                                var totalMinutes = `${minutes} minutes ago`;
                            }
                            dropdownMenu.append(
                                `<li style="border-bottom: 1px solid #d6d6d6;" class="pb-2 mb-2">
                                    <div class=" pb-1 row">
                                        <div class="col">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="username font-weight-normal " style="font-size: 15px; line-height:20px"> <span style="font-weight:700;" class="pe-1">${uprksnm} : </span>${notification.message}</div>
                                                    <div class="username font-weight-normal " style="font-size: 14px; line-height:20px"> <span style="font-weight:500;" class="">${totalMinutes}</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>`
                            );
                        });
                    }
                })
            }) --}}

            function confirmLogout() {
                if (confirm("Are you sure you want to logout?")) {
                    window.location.href = "{{ route('logouts') }}";
                }
            }
        </script>


        @stack('custom_js')
    </body>

    </html>
