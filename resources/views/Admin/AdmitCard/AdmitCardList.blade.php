 @extends('Admin.Master')
 @section('MainContent')
<style>
     .heeee{
        text-align: center;
     }
 </style>
    <h4 class="heeee">ADARSHA PRE-CADET SCHOOL </h4>
    <p class="heeee">Situated - 2003</p>
<P class="heeee"> Hospital Mor, Gobindaganj, Gaibandha.</P>
<P class="heeee">Phone: 01911539893, 01792984747 &nbsp;  </P> <br>
 <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_panel">
                            <div class="x_title" style="margin-top: 20px;">
                                <br>
                          <h2 style="text-align: center; color: #DD4E41">Admit Card List</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <div class="actions">
                                            <a class="btn btn-success hidden-print" onclick="javascript:window.print()">Print</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="clearfix"><h3 class="text-center text-success"></h3></div>
                            </div>
                                <h2 style="color: greenyellow" align="center">{{ Session::get('Message') }}</h2>
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
                                                        <th>Class</th>
                                                        <th>Roll</th>
                                                        <th>Exm Type</th>
                                                        <th>Photo</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($Admit as $Admits)
                                                   <tr>
                                                       <td>{{ $Admits->StudentName }}</td>
                                                       <td>{{ $Admits->Class }}</td>
                                                       <td>{{ $Admits->Roll }}</td>
                                                       <td>{{ $Admits->ExamType }}</td>
                                                       <td><img src="{{ $Admits->Photo }}" style="height: 70px; width: 70px;" alt=""></td>
                                                      
                                                       <td>
                                                          
                                        <a href="{{ url('/AdmitCardPrint/'.$Admits->id) }}" data-toggle="modal" id="editsect" target="blank" data-section_id="1"><i class="fa fa-print"></i></a> &nbsp;
                                                   <a href="{{ url('/DeleteAdmit/'.$Admits->id) }}" data-toggle="modal" id="editsect" data-section_id="1"><i class="fa fa-times"></i></a>
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