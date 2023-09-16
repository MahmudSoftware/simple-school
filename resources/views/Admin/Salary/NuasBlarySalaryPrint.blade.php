 @extends('Admin.Master')
 @section('MainContent')
<style type="text/css">
    .rrrrr{
        height: 30px;
        
    }
    .heeee{
        text-align: center;
    }

    .bopo{
      border: none;

    }
    .smm{
      width: 30px;
    }
</style>


 <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_panel">
                              <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <div class="actions">
                                            <a class="btn btn-success hidden-print" onclick="javascript:window.print()">Print</a>
                                        </div>
                                    </li>
                                </ul>
                            <div class="x_title" style="margin-top: 20px;">
                                <br>

                                <div class="container">

    <h4 class="heeee">ADARSHA PRE-CADET SCHOOL </h4>
<P class="heeee"> Hospital Mor, Gobindaganj, Gaibandha</P>
<P class="heeee">Phone: 01911539893, 01792984747 &nbsp;  </P> <br>
  <div class="heeee"><b> Student's Fee / Nusary Section Janani</b></div>
  
  <h3 style="text-align: center; color: #30BAF8;"><b>{{ Session::get('Message') }}</b></h3>
           

<div class="row">
   
    

</div>

  <br>

<div class="row">

  
  <div class="col-sm-6">Student's Name: &nbsp; &nbsp; &nbsp; &nbsp;
    <input type="text" class="bopo" value="{{ $Nuasalary->StudentsName }}" name="StudentsName" readonly="">
  </div>

 <div class="col-sm-6">Roll: &nbsp; &nbsp;
    <input type="text" class="bopo" value="{{ $Nuasalary->Roll }}" name="Roll" readonly="">
  </div>

</div> <br>
<div class="row">

  <div class="col-sm-6">Student ID: &nbsp; &nbsp; &nbsp; &nbsp;
    <input type="text" class="bopo" value="{{ $Nuasalary->StudentID }}" name="StudentID" readonly="">
  </div>
  <div class="col-sm-6">Date : 

    <input type="text" class="bopo" value="{{ $Nuasalary->Date }}" name="Date" readonly="">

  </div>

 

</div>




<br>


        </div>

                                <div class="clearfix"><h3 class="text-center text-success"></h3></div>
                            </div>

                            <div class="x_content" id="room_filter">
                                <div id="datatable-responsive_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_length" id="datatable-responsive_length"></div></div>
                                        <div class="col-sm-6"><div id="datatable-responsive_filter" class="dataTables_filter"></div>
                                        </div></div><div class="row"><div class="col-sm-12">
                                            <table  id="datatable-responsive" class="table table-striped dt-responsive nowrap dataTable no-footer dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="datatable-responsive_info" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>SL No</th>
                                                        <th>Description</th>
                                                        <th>Unit</th>
                                                        <th>TK</th>
                                                        <th>Total</th>
                                                      
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                   <tr>
                                                       <td class="smm">1</td>
                                                       <td>{{ $Nuasalary->Descriptionon }}</td>
                                                       <td>{{ $Nuasalary->UnitPriceon }}</td>
                                                       <td>{{ $Nuasalary->Quantityon }}</td>
                                                       <td>{{ $Nuasalary->TotalPriceon }}</td>
                                                   </tr>

                                                   <tr>
                                                       <td class="smm">2</td>
                                                       <td>{{ $Nuasalary->Descriptiontw }}</td>
                                                       <td>{{ $Nuasalary->Unittw }}</td>
                                                       <td>{{ $Nuasalary->Pricetw }}</td>
                                                       <td>{{ $Nuasalary->TotalPricetw }}</td>
                                                   </tr>

                                                   <tr>
                                                       <td class="smm">3</td>
                                                       <td>{{ $Nuasalary->Descriptionth }}</td>
                                                       <td>{{ $Nuasalary->UnitPriceth }}</td>
                                                       <td>{{ $Nuasalary->Quantityth }}</td>
                                                       <td>{{ $Nuasalary->Totalth }}</td>
                                                   </tr>

                                                   <tr>
                                                       <td class="smm">4</td>
                                                       <td>{{ $Nuasalary->Descriptionfo }}</td>
                                                       <td>{{ $Nuasalary->UnitPricefo }}</td>
                                                       <td>{{ $Nuasalary->Quantityfo }}</td>
                                                       <td>{{ $Nuasalary->Totalfo }}</td>
                                                   </tr>

                                                   <tr>
                                                       <td class="smm">5</td>
                                                       <td>{{ $Nuasalary->Descriptionfi }}</td>
                                                       <td>{{ $Nuasalary->UnitPricefi }}</td>
                                                       <td>{{ $Nuasalary->Quantityfi }}</td>
                                                       <td>{{ $Nuasalary->TotalFive }}</td>
                                                   </tr>

                                                   <tr>
                                                       <td class="smm"></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td>Grand Total</td>
                                                       <td>{{ $Nuasalary->TotalCPrices }}</td>
                                                   </tr>

                                                 
                                                </tbody>
                                            </table>
                                      <br><br><br>
                                            <table class="table table-striped dt-responsive nowrap dataTable no-footer dtr-inline">
                                              <thead>
                      
                                              </thead>
                                              <tbody>
                                                

                                                 <tr>
                                                       <td>Student's Sign</td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td>School Head Sign</td>
                                                   </tr>
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