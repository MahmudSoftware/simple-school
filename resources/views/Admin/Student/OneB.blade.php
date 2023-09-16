 @extends('Admin.Master')
 @section('MainContent')
<style>
     .heeee{
        text-align: center;
     }
 </style>
    <h4 class="heeee">ADARSHA PRE-CADET SCHOOL </h4>
<P class="heeee"> Hospital Mor, Gobindaganj, Gaibandha</P>
<P class="heeee">Phone: 01911539893, 01792984747 &nbsp;  </P> <br>

 <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_panel">
                            <div class="x_title" style="margin-top: 20px;">
                                <br>
                          <h2 style="text-align: center; color: #DD4E41">STD One Section Golap</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <div class="actions">
                                            <a class="btn btn-success hidden-print" onclick="javascript:window.print()">Print</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="clearfix"><h3 class="text-center text-success"></h3></div>
                            </div>

                            <div class="x_content" id="room_filter">
                                <div id="datatable-responsive_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_length" id="datatable-responsive_length"></div></div>
                                        <div class="col-sm-6"><div id="datatable-responsive_filter" class="dataTables_filter"></div>
                                        </div></div><div class="row"><div class="col-sm-12">
                                            <table  id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="datatable-responsive_info" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Student Id</th>
                                                        <th>Student Name</th>
                                                        <th>Father's Name</th>
                                                        <th>Mobile Number</th>
                                                        <th>Class</th>
                                                        <th>Roll</th>
                                                        <th>Photo</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                            @php($sum=0)
                                                    @foreach($Student as $Students)
                                                   <tr>
                                                       <td>{{ $Students->StudentId }}</td>
                                                       <td>{{ $Students->StudentName }}</td>
                                                       <td>{{ $Students->FathersName }}</td>
                                                       <td>{{ $Students->MobileNumber }}</td>

                                                     <td style="display: none;">  {{ $total=1 }}  </td>
                                                     
                                                       <td>{{ $Students->Class }}</td>
                                                       <td>{{ $Students->Roll }}</td>
                                                       <td><img src="{{ $Students->Photo }}" style="height: 70px; width: 70px;" alt=""></td>
                                                      
                                                       <td>
                                                           <a href="" data-toggle="modal" id="editsect" data-section_id="1"><i class="fa fa-edit"></i></a>
                                                              &nbsp;  &nbsp; 
                                                           <a href="{{ url('/DeleteStudent/'.$Students->id) }}" data-toggle="modal" id="editsect" data-section_id="1"><i class="fa fa-times"></i></a>
                                                       </td>
                                                   </tr>
                                                   @php($sum= $sum+$total)
                                                   @endforeach
                                                </tbody>
                                            </table>
                                            Total Student: {{ $sum }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
  @endsection