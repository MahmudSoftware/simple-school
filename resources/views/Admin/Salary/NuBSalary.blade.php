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
</style>
 <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_panel">
                            <div class="x_title" style="margin-top: 20px;">
                            	<div class="container">

    <h4 class="heeee">ADARSHA PRE-CADET SCHOOL </h4>
<P class="heeee"> Hospital Mor, Gobindaganj, Gaibandha</P>
<P class="heeee">Phone: 01911539893, 01792984747 &nbsp;  </P> <br>
  <div class="heeee"><b> Student's Fee / Nusary Section Janani</b></div>
  
  <h3 style="text-align: center; color: #30BAF8;"><b>{{ Session::get('Message') }}</b></h3>
           
<form action="{{ url('/SaveNusaryBSalary') }}" method="POST">
     @csrf
<div class="row">
   
    <div class="col-sm-5">
    	<img src="{{ asset($Student->Photo) }}" name="StdImage" alt="" style="height: 50px; width: 50px; display: block;">
    </div>

</div>

  <br>

<div class="row">

  
  <div class="col-sm-6">Student's Name: &nbsp; &nbsp; &nbsp; &nbsp;
  	<input type="text" class="bopo" value="{{ $Student->StudentName }}" name="StudentsName" readonly="">
  </div>

 <div class="col-sm-6">Roll: &nbsp; &nbsp;
  	<input type="text" class="bopo" value="{{ $Student->Roll }}" name="Roll" readonly="">
  </div>

</div> <br>
<div class="row">

  <div class="col-sm-6">Student ID: &nbsp; &nbsp; &nbsp; &nbsp;
  	<input type="text" class="bopo" value="{{ $Student->StudentId }}" name="StudentID" readonly="">
  </div>
  <div class="col-sm-6">Date : 

  	<input type="text" class="bopo" value="<?php echo Date('d-m-y') ?>" name="Date" readonly="">

  </div>

 

</div>


<br>
<div class="form-group">
    <table class="table-bordered">
                                            <tr class="rrrrr">
                                                    <td>SL</td>
                                                   
                                                    <td class="text-center">Description</td>
                                                    <td class="text-center">Unit</td>
                                                    <td class="text-center">TK</td>
                                                    
                                                    <td class="text-center">Total</td>
                                                    
                                                        
                                            </tr>
                                            <tr >
                <td style=""><input type="text" class="rrrrr" name="" style="width: 30px;"></td>

 <td><input type="text" required="" onkeyup="multiplySalary()" class="rrrrr" style="width: 500px;"  name="Descriptionon"></td>
    <td><input type="text" required="" onkeyup="multiplySalary()" class="rrrrr" name="UnitPriceon" id="Uniton"></td>
    <td><input type="text" required="" onkeyup="multiplySalary()" class="rrrrr" name="Quantityon" id="Priceon"></td>
    
    <td><input type="text" class="rrrrr" name="TotalPriceon" readonly="" id="TotalPriceon"></td>
                                                   
                                                    
                                                    


                                            </tr>
                                            <tr class="rrrrr">
    <td style=""><input type="text" class="rrrrr" name="" style="width: 30px;"></td>
 <td><input type="text" class="rrrrr" style="width: 500px;" name="Descriptiontw"></td>
 <td><input type="text" class="rrrrr" onkeyup="multiplySalary()" name="Unittw" id="Unittw"></td>

 <td><input type="text" class="rrrrr" name="Pricetw" onkeyup="multiplySalary()" id="Pricetw"></td>
 
<td><input type="text" class="rrrrr" name="TotalPricetw" readonly="" id="TotalPricetw"></td>
                                                    



                                            </tr>

                 <tr class="rrrrr">
   <td style=""><input type="text" class="rrrrr" name="" style="width: 30px;"></td>
   <td><input type="text" class="rrrrr" style="width: 500px;" name="Descriptionth"></td>
   <td><input type="text" class="rrrrr" onkeyup="multiplySalary()" name="UnitPriceth" id="UnitPriceth"></td>
   <td><input type="text" class="rrrrr" onkeyup="multiplySalary()" name="Quantityth" id="Quantityth"></td>
   <td><input type="text" class="rrrrr" onkeyup="multiplySalary()" name="Totalth" id="Totalth"></td>
                 </tr>

                <tr class="rrrrr">
   <td style=""><input type="text" class="rrrrr" name="" style="width: 30px;"></td>
   <td><input type="text" class="rrrrr" style="width: 500px;" name="Descriptionfo"></td>
   <td><input type="text" class="rrrrr" onkeyup="multiplySalary()" name="UnitPricefo" id="UnitPricefo"></td>
   <td><input type="text" class="rrrrr" onkeyup="multiplySalary()" name="Quantityfo" id="Quantityfo"></td>
   <td><input type="text" class="rrrrr" onkeyup="multiplySalary()" name="Totalfo" id="Totalfo"></td>
                </tr>

                <tr class="rrrrr">
   <td style=""><input type="text" class="rrrrr" name="" style="width: 30px;"></td>
   <td><input type="text" class="rrrrr" style="width: 500px;" name="Descriptionfi"></td>
   <td><input type="text" class="rrrrr" onkeyup="multiplySalary()" name="UnitPricefi" id="UnitPricefi"></td>
   <td><input type="text" class="rrrrr" onkeyup="multiplySalary()" name="Quantityfi" id="Quantityfi"></td>
   <td><input type="text" class="rrrrr" onkeyup="multiplySalary()" name="TotalFive" id="TotalFive"></td>
                </tr>

                 

                                            <tr class="rrrrr">
                                                    <td></td>
                                                    <td></td>
                                                    
                                                    <td></td>
                                                    <td class="text-center">Grand Total</td>
                                                    <td><input type="text" class="rrrrr" name="TotalCPrices" id="TotalCPrices"></td>
                                                   
                                            </tr>

                                            
                                            </table>

                                            

     </div>
<button type="submit" class="btn btn-success btn-block">Save</button>

</form>

<br>

<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Salary Sheet
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            
                                            <th>Student Name</th>
                                            <th>Roll</th>
                                            <th>Description</th>
                                            <th>Total Salary</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($Nuasalary as $Nuasalarys)
                                        <tr>
                                           
                                            <td>{{ $Nuasalarys->StudentsName }}</td>
                                            <td>{{ $Nuasalarys->Roll }}</td>
                                            <td>{{ $Nuasalarys->Descriptionon }}</td>
                                            <td>{{ $Nuasalarys->TotalCPrices }}</td>
            <td> <a href="{{ url('/PlayAPaySalaryDelete/'.$Nuasalarys->id) }}"><i class="fa fa-trash"></i></a>
                                             
                                             
                                               
     <a href="{{ url('/PlayAPaySalaryPrint/'.$Nuasalarys->id) }}" target="blank"><i class="fa fa-print"></i></a>
                                              
                                            </td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                    <tbody>
                                      
                                        <td></td>
                                        <td></td>
                                        <td>Total=</td>
                                        <td id="customersum"></td>
                                        <td id="gtottal"></td>
                                    </tbody>
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
        </div>
    </div>
</div>
</div>
 </div>         
  @endsection
