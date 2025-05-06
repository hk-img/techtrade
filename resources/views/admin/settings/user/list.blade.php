@extends('layouts.master')
@section('title', __('Offer List'))
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><i class="fa fa-th"></i> Go To</h2>
                        </div>
                        <div class="body">
                            <div class="btn-group top-head-btn">
                                <a class="btn-primary" href="{{ url('admin/settings/user/add') }}">
                                    <i class="fa fa-plus"></i> Add User
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><i class="fa fa-th"></i> User List</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-hover js-basic-example contact_list dataTable"
                                                id="DataTables_Table_0" role="grid"
                                                aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="center sorting sorting_asc" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            style="width: 48.4167px;" aria-sort="ascending"
                                                            aria-label="#: activate to sort column descending">S. No.</th>
                                                        <th class="center sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            style="width: 126.333px;"
                                                            aria-label=" Name : activate to sort column ascending"> Username
                                                        </th>
                                                        <th class="center sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            style="width: 126.333px;"
                                                            aria-label=" Name : activate to sort column ascending"> Mobile
                                                        </th>
                                                        <th class="center sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            style="width: 126.333px;"
                                                            aria-label=" Name : activate to sort column ascending"> Role
                                                        </th>

                                                        <th class="center sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            style="width: 126.333px;"
                                                            aria-label=" Name : activate to sort column ascending"> Email
                                                        </th>

                                                        <th class="center sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            style="width: 126.333px;"
                                                            aria-label=" Name : activate to sort column ascending"> Address
                                                        </th>
                                                        <th class="center sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            style="width: 193.017px;"
                                                            aria-label=" Email : activate to sort column ascending"> Status
                                                        </th>


                                                        <th class="center sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                            style="width: 85px;"
                                                            aria-label=" Action : activate to sort column ascending"> Action
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if (!empty($result))
                                                        @foreach ($result as $key => $value)
                                                            <tr class="gradeX odd">
                                                                <td class="center">{{ $key + 1 }}</td>
                                                                <td class="center fw-bold" style="letter-spacing: 1px">{{ $value['username']}}</td>
                                                                <td class="center">{{ $value['mobile'] ?? 'N/A'}}</td>
                                                                <td class="center">{{ $value['designation_id'] ?? 'N/A'}}</td>
                                                                <td class="center">{{ $value['email']  ?? 'N/A'}}</td>
                                                                <td class="center">{{ $value['address'] ?? 'N/A'}}</td>
                                                                <td class="center">
                                                                <div class="switch mt-3">
                                                                    <label>
                                                                        <input type="checkbox" class="-change"
                                                                            data-id="{{ $value['id'] }}"
                                                                            @if ($value['status'] == 'Active') {{ 'checked' }} @endif>
                                                                        <span
                                                                            class="lever switch-col-red layout-switch"></span>
                                                                    </label>
                                                                </div>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="{{ url('admin/settings/user/update/' . $value['id']) }}"
                                                                        title="Edit category" class="btn btn-tbl-edit">
                                                                        <i class="fas fa-pencil-alt"></i>
                                                                    </a> 
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th class="center" rowspan="1" colspan="1"> S.No.</th>
                                                        <th class="center" rowspan="1" colspan="1"> Username </th>
                                                        <th class="center" rowspan="1" colspan="1"> Mobile </th>
                                                        <th class="center" rowspan="1" colspan="1"> Role </th>
                                                        <th class="center" rowspan="1" colspan="1"> Email </th>
                                                        <th class="center" rowspan="1" colspan="1"> Address </th>
                                                        <th class="center" rowspan="1" colspan="1"> Status </th>
                                                        <th class="center" rowspan="1" colspan="1"> Action </th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('custom_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.js"
        data-turbolinks-track="true"></script>
    <script>
        $(document).ready(function() {
            //ajax to activate/deactivate user
            $('.-change').on('change', function(e) {

                var status = $(this).prop('checked') == true ? 'Active' : 'Blocked';
                var id = $(this).data('id');

                if (status == false) {

                    var confirmed = confirm("Are you Sure?");
                    if (confirmed == true) {

                        changeActivationStatus(status, id);

                    } else {

                        $(this).prop("checked", false);
                    }

                } else {
                    var confirmed = true;

                    if (confirmed == true) {

                        changeActivationStatus(status, id);

                    } else {
                        $(this).prop("checked", true);
                    }
                }
            });

            function changeActivationStatus(status, id) {

                $.ajax({

                    type: "POST",
                    dataType: "json",
                    url: "{{ route('admin.settings.user.changestatus') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        'status': status,
                        'id': id
                    },
                    beforeSend: function() {
                        $('#preloader').css('display', 'block');
                    },
                    error: function(xhr, textStatus) {

                        if (xhr && xhr.responseJSON.message) {
                            sweetAlertMsg('error', xhr.status + ': ' + xhr.responseJSON.message);
                        } else {
                            sweetAlertMsg('error', xhr.status + ': ' + xhr.statusText);
                        }
                        $('#preloader').css('display', 'none');
                    },
                    success: function(data) {
                        $('#preloader').css('display', 'none');
                        sweetAlertMsg('success', data.message);
                    }
                });
            };
        });

    </script>
@endpush
