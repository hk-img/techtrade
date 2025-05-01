@extends('layouts/master')
 
@section('title', __('Dashboard'))

@section('content')
    <section class="content">
        <div class="container-fluid dashboard-wrap">
            <div class="row ">
                {{-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-3">
                    <form action="{{url('admin/dashboard')}}" method="get">
                        <div class="row justify-content-end">
                            <div class="col-md-3 d-flex align-items-center">
                                <div class="form-group">
                                    <label for="">Select Start Date:</label>
                                    <input type="text" value="{{isset($_GET['start_date']) ? $_GET['start_date'] : Carbon\Carbon::now()->format('d/m/Y')}}" class="form-control" name="start_date" required>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex align-items-center">
                                <div class="form-group">
                                    <label for="">Select End Date :</label>
                                    <input type="text"  value="{{isset($_GET['end_date']) ? $_GET['end_date'] : Carbon\Carbon::now()->format('d/m/Y')}}" class="form-control" name="end_date" required>
                                </div>
                            </div>

                            <div class="col-md-3 d-flex justify-content-end gap-4 p-0 flex-wrap">
                                <div class="">
                                    <button type="submit" id="submitform"  class="btn btn-success pull-left" style="margin-top:25px">Search</button>
                                </div>

                                <div class="">
                                    <a href="{{url('admin/dashboard')}}" class="btn btn-danger pull-left" style="margin-top:25px;padding: 8px 14px;">Clear Filter</a>
                                </div>
                            </div>                             
                        </div>
                    </form>
                </div> --}}
                <div class="row">
                    <div class="col-xl col-lg col-md-4 col-sm-12">
                        <a href="{{url('admin/resources/download/category/list')}}">
                            <div class="card-board-1" style="background: #1caf9a;">
                                <div class="dash-txt">
                                    <div class="text-white dash-txt-1">{{$category ?? 0}}</div>
                                    <div class="dash-txt-2 text-white">Catgeory</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl col-lg col-md-4 col-sm-12">
                        <a href="{{url('admin/important-links')}}">
                            <div class="card-board-1" style="background: #e7901a;">
                                <div class="dash-txt">
                                    <div class="text-white dash-txt-1">{{$link ?? 0}}</div>
                                    <div class="dash-txt-2 text-white">Links</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl col-lg col-md-4 col-sm-12">
                        <a href="{{url('admin/resources/holiday/list')}}">
                            <div class="card-board-1" style="background: #056c4a;">
                                <div class="dash-txt">
                                    <div class="text-white dash-txt-1">{{$holiday ?? 0}}</div>
                                    <div class="dash-txt-2 text-white">Holidays</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><i class="fa fa-th"></i> Demat Account Enquiry</h2>
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
                                                                aria-label="#: activate to sort column descending"> Name</th>
                                                            <th class="center sorting exclude-export" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                                style="width: 193.017px;"
                                                                aria-label=" Email : activate to sort column ascending"> Email
                                                            </th>
                                                            <th class="center sorting exclude-export" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                                style="width: 85px;"
                                                                aria-label=" Action : activate to sort column ascending"> Mobile
                                                            </th>
                                                            <th class="center sorting exclude-export" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                                style="width: 85px;"
                                                                aria-label=" Action : activate to sort column ascending"> City
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="row_position">
                                                        @if(!empty($result))
                                                            @foreach($result as $key=>$value)
                                                                <tr class="gradeX odd"  id="{{ $value['id'] }}">
                                                                    <td class="center">{{ $key+1}}</td>
                                                                    <td class="center">{{ date('d-M-Y h:i A', strtotime($value['created_at']))}}</td>
                                                                    <td class="center">{{ ucfirst($value['name']) }}</td>														
                                                                    <td class="center">{{ $value['email'] }}</td>														
                                                                    <td class="center">{{ $value['mobile'] }}</td>														
                                                                    <td class="center">{{ $value['city'] }}</td>														
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th class="center" rowspan="1" colspan="1">S.No.</th>
                                                            <th class="center" rowspan="1" colspan="1"> Date & Time</th>
                                                            <th class="center" rowspan="1" colspan="1"> Name </th>
                                                            <th class="center" rowspan="1" colspan="1"> Email </th>
                                                            <th class="center" rowspan="1" colspan="1"> Mobile </th>
                                                            <th class="center" rowspan="1" colspan="1"> City </th>
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
        </div>
    </section> 
@endsection
@push('custom_js')
@endpush
