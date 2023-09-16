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

<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                      Student's   Salary Sheet / KG Section A
  <h6 style="text-align: center; color: #30BAF8;"><b>{{ Session::get('Message') }}</b></h6>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            
                                            <th>Date</th>
                                            <th>Student Name</th>
                                            <th>Roll</th>
                                            <th>Description</th>
                                            <th>Total Salary</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                 @foreach($Nuasalary as $Salarys)
                                  <tr>
                                    <td>{{ $Salarys->Date }}</td>
                                    <td>{{ $Salarys->StudentsName }}</td>
                                    <td>{{ $Salarys->Roll }}</td>
                                    <td>{{ $Salarys->Descriptionon }}</td>
                                    <td>{{ $Salarys->TotalCPrices }}</td>
            <td> <a href="{{ url('/KgaSalaryDelete/'.$Salarys->id) }}"><i class="fa fa-trash"></i></a>
            <a href="{{ url('/KgASalaryPrint/'.$Salarys->id) }}" target="blank"><i class="fa fa-print"></i></a>
                                              
                                            </td>
                                        </tr>
                               @endforeach
                                </tbody>
                                    <tbody>
                                      
                                        <tr><td></td>
                                        <td></td>
                                        <td>Total=</td>
                                        <td id="customersum"></td>
                                        <td id="gtottal"></td>
                                    </tr></tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
            </div>

            @endsection