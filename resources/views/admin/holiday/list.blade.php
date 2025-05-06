@extends('layouts.master')

@section('title',__('Holiday List'))

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
                            <a class="btn-primary" href="{{url('admin/resources/holiday/add')}}">
                                <i class="fa fa-plus"></i> Add Holiday
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
                        <h2><i class="fa fa-th"></i> Holiday List</h2>
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
                                                        aria-label="#: activate to sort column descending">S.No.</th>
                                                    <th class="center sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 126.333px;"
                                                        aria-label=" Name : activate to sort column ascending"> Date & Time
                                                    </th>    
                                                    <th class="center sorting sorting_asc" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 48.4167px;" aria-sort="ascending"
                                                        aria-label="#: activate to sort column descending">Holiday Type</th>
                                                    <th class="center sorting sorting_asc" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 48.4167px;" aria-sort="ascending"
                                                        aria-label="#: activate to sort column descending">Year</th>
                                                    <th class="center sorting sorting_asc" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 48.4167px;" aria-sort="ascending"
                                                        aria-label="#: activate to sort column descending">Holiday</th>
                                                    <th class="center sorting sorting_asc" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 48.4167px;" aria-sort="ascending"
                                                        aria-label="#: activate to sort column descending">Exchanges</th>
                                                    <th class="center sorting sorting_asc" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 48.4167px;" aria-sort="ascending"
                                                        aria-label="#: activate to sort column descending">Date</th>
                                                    <th class="center sorting sorting_asc" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 48.4167px;" aria-sort="ascending"
                                                        aria-label="#: activate to sort column descending">Weekday</th>
                                                    <th class="center sorting exclude-export" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 193.017px;"
                                                        aria-label=" Email : activate to sort column ascending"> Status
                                                    </th>
                                                    <th class="center sorting exclude-export" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 85px;"
                                                        aria-label=" Action : activate to sort column ascending"> Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="row_position">
												@if(!empty($result))
													@foreach($result as $key=>$value)
														<tr class="gradeX odd"  id="{{ $value['id'] }}">
															<td class="center">{{ $key+1}}</td>
                                                            <td class="center">{{ date('d-M-Y h:i A', strtotime($value['created_at']))}}</td>
                                                            <td class="center">{{ ucfirst($value['holiday_type']) }}</td>															
                                                            <td class="center">{{ $value['year']}}</td>															
                                                            <td class="center">{{ $value['holiday']}}</td>															
                                                            <td class="center">{{ $value['exchanges']}}</td>															
                                                            <td class="center">{{ $value['date']}}</td>															
                                                            <td class="center">{{ $value['weak_day']}}</td>	
                                                            <td class="center">														
                                                                <div class="switch mt-3">
                                                                    <label>
                                                                        <input type="checkbox" class="-change" data-id="{{ $value['id'] }}"@if($value['status']=='1'){{ 'checked' }} @endif>
                                                                        <span class="lever switch-col-red layout-switch"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td class="center ">
                                                                <a href="{{ url('admin/resources/holiday/holiday-update/'.$value['id'] )}}" title="Edit holiday" class="btn btn-tbl-edit">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a>
                                                                <a title="Delete holiday" onclick="return confirm('Are you sure? You want to delete this holiday.')" href="{{ url('admin/resources/holiday/holiday-delete/'.$value['id'] )}}" class="btn btn-tbl-delete">
                                                                    <i class="fas fa-trash"></i>
                                                                </a>
                                                            </td>
														</tr>
													@endforeach
												@endif
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th class="center" rowspan="1" colspan="1">S.No.</th>
                                                    <th class="center" rowspan="1" colspan="1"> Date & Time</th>
                                                    <th class="center" rowspan="1" colspan="1"> Holiday Type </th>
                                                    <th class="center" rowspan="1" colspan="1"> Year </th>
                                                    <th class="center" rowspan="1" colspan="1"> Holiday </th>
                                                    <th class="center" rowspan="1" colspan="1"> Exchanges </th>
                                                    <th class="center" rowspan="1" colspan="1"> Date </th>
                                                    <th class="center" rowspan="1" colspan="1"> weekday </th>
                                                    <th class="center exclude-export" rowspan="1" colspan="1"> Status </th>
                                                    <th class="center exclude-export" rowspan="1" colspan="1"> Action </th>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.js" data-turbolinks-track="true"></script>
<script>

$(document).ready(function () {

    $(document).on('change','.-change',function() {

        var status = $(this).prop('checked') == true ? '1' : '0';
        var id = $(this).data('id');

        $.ajax({
            type: "POST",
            dataType: "json",
            url: "{{ url('admin/resources/holiday/change-status') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'status': status, 
                'id': id
            },
            beforeSend:function(){
                $('#preloader').css('display','block');
            },
            error:function(xhr,textStatus){
                
                if(xhr && xhr.responseJSON.message){
                    sweetAlertMsg('error', xhr.status + ': ' + xhr.responseJSON.message);
                }else{
                    sweetAlertMsg('error', xhr.status + ': ' + xhr.statusText);
                }
                $('#preloader').css('display','none');
            },
            success: function(data){
                $('#preloader').css('display','none');
                sweetAlertMsg('success',data.message);
            }
        });
    });

});
</script>
@endpush