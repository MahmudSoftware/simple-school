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
      <h2 style="text-align: center; color: #46BEF0">STD One Anamika Marksheed List</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <div class="actions">
                                            <a class="btn btn-success hidden-print" onclick="javascript:window.print()">Print</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="clearfix"><h3 class="text-center text-success"></h3></div>
                            </div>
  <h3 style="text-align: center; color: #30BAF8;"><b>{{ Session::get('Message') }}</b></h3>
               
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
                                                        <th>Student Name</th>
                                                        <th>Roll</th>
                                                        <th>Fast Trum </th>
                                                        <th>Second Trum</th>
                                                        <th>Thard Trum</th>
                                                        <th>Final</th>
                                                        <th>Average</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                      @foreach($Playamarksheet as $Playamarksheets)   
                                                   <tr>
                              <td>{{ $Playamarksheets->StudentsName }}</td>
                              <td>{{ $Playamarksheets->Roll }}</td>
                              <td>{{ $Playamarksheets->onExmAverage }}</td>
                              <td>{{ $Playamarksheets->twExmAverage }}</td>
                              <td>{{ $Playamarksheets->ThreExmAverage }}</td>
                              <td>{{ $Playamarksheets->FiExmAverage }}</td>
                              <td>{{ $Playamarksheets->GrandAverage }}</td>
                                                                                                            
                                                       <td>
             <a href="{{ url('OneAMSheetEdit/'.$Playamarksheets->id) }}" data-toggle="modal" id="editsect" data-section_id="1"><i class="fa fa-edit"></i></a>
                                                        &nbsp; 
          <a href="{{ url('OneAMSheetDelete/'.$Playamarksheets->id) }}" data-toggle="modal" id="editsect" data-section_id="1"><i class="fa fa-trash"></i></a>

                                                        &nbsp; 
                  <a href="{{ url('OneAMSheetPrint/'.$Playamarksheets->id) }}" data-toggle="modal" id="editsect" data-section_id="1"><i class="fa fa-print"></i></a>


                                                       </td>
                                                   </tr>
                                                 @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
  @endsection