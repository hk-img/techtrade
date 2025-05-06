@extends('layouts/master')

@section('title',__('Admin List'))

@section('content')

<section class="content">
    <div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="header">
						<h2><i class="fa fa-th"></i>  Go To</h2>
					</div>
					<div class="body">
						<div class="btn-group top-head-btn">
                            <a class="btn-primary" href="{{ url('admin/admin/add') }}">
                                <i class="fa fa-plus"></i> Add Admin 
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
						<h2><i class="fa fa-th"></i> Admin List</h2>
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
                                                        aria-label="#: activate to sort column descending"># ID</th>
                                                        <th class="center sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 126.333px;"
                                                        aria-label=" Name : activate to sort column ascending">
                                                        Name & Login ID
                                                    </th> 
                                                    <th class="center sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 126.333px;"
                                                        aria-label=" Name : activate to sort column ascending"> Email
                                                    </th> 
                                                    <th class="center sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 193.017px;"
                                                        aria-label=" Email : activate to sort column ascending"> Mob.
                                                    </th>
                                                    <th class="center sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 193.017px;"
                                                        aria-label=" Email : activate to sort column ascending"> Status
                                                    </th>
                                                    {{-- <th class="center sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 85px;"
                                                        aria-label=" Action : activate to sort column ascending"> Action
                                                    </th>  --}}
                                                </tr>
                                            </thead>
                                            <tbody class="row_position">
												@if(!empty($result))
													@foreach($result as $key=>$value)
														<tr class="gradeX odd"  id="{{ $value['id'] }}">
															<td class="center">{{ $key+1}}</td>
                                                            <td class="center">{{ ucfirst($value['name']) . ' (' . $value['unique_id'] .')' }}</td>
                                                            <td class="center">{{ ucfirst($value['email']) }}</td>
                                                            <td class="center">{{ ucfirst($value['mobile']) }}</td>
															<td class="center">
                                                                <div class="switch mt-3">
                                                                    <label>
                                                                        <input type="checkbox" class="-change" data-id="{{ $value['id'] }}"@if($value['status']=='Active'){{ 'checked' }} @endif>
                                                                        <span class="lever switch-col-red layout-switch"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            {{-- <td class="center"> --}}
                                                            
                                                                {{-- <a href="{{ url('admin/admin/admin-update/'.$value['id'] )}}" title="Invite" class="btn btn-tbl-edit">
                                                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                                                </a> --}}
                                                                {{-- <a href="{{ url('admin/admin/admin-update/'.$value['id'] )}}" title="Edit Brand" class="btn btn-tbl-edit">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a>
                                                                <a title="Delete Brand" onclick="return confirm('Are you sure? You want to delete this Brand.')" href="{{ url('admin/catalog/brand/brand-delete/'.$value['id'] )}}" class="btn btn-tbl-delete">
                                                                    <i class="fas fa-trash"></i>
                                                                </a> --}}
                                                            {{-- </td> --}}
														</tr>
													@endforeach
												@endif
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th class="center" rowspan="1" colspan="1">#</th>
                                                    <th class="center" rowspan="1" colspan="1"> Name & Login ID  </th>	
                                                    <th class="center" rowspan="1" colspan="1"> Email </th>	
													<th class="center" rowspan="1" colspan="1"> Mob. </th>
													<th class="center" rowspan="1" colspan="1"> Status </th>
                                                    {{-- <th class="center" rowspan="1" colspan="1"> Action </th> --}}
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
    <!-- <script type="text/javascript">
        $(function () {
            $('#DataTables_Table_0').dataTable().fnDestroy();
            var table = $('#DataTables_Table_0').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,
                ajax: "{{ url('admin/catalog/brand/list') }}",
                "columnDefs": [
                    { "className": "center", "targets": [0] },
                    { "className": "center text-capitalize", "targets": [1] }
                ],
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'brand_name',  name: 'brand_name'},
                    {data: 'image', name: 'image', orderable: false, searchable: false},
                    {data: 'type',  name: 'type'},
                    {data: 'status', name: 'status', orderable: false, searchable: false},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script> -->

    <script>
	
        $(document).on('change','.-change',function() {

            var status = $(this).prop('checked') == true ? 'Active' : 'Blocked';
            var id = $(this).data('id');

            $.ajax({
                type: "POST",
                dataType: "json",
                url: "{{ route('admin.admin.changestatus') }}",
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
		
    </script>  
  
@endpush