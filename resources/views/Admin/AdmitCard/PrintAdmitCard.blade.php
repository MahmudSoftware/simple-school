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
<br> <br><br>

<ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <div class="actions">
                                            <a class="btn btn-success hidden-print" onclick="javascript:window.print()">Print</a>
                                        </div>
                                    </li>
                                </ul>
<div class="container">
	<div class="row">
    <h4 class="heeee">ADARSHA PRE-CADET SCHOOL </h4>
<P class="heeee"> Hospital Mor, Gobindaganj, Gaibandha</P>
<P class="heeee">Phone: 01911539893, 01792984747 &nbsp;  </P> <br>
 <h3 style="text-align: center;">Admit Card</h3> <br><br>
</div>
<div class="row" style="text-align: center;">
	<div class="col-md-6">
		Student ID: {{ $Admit->StudentID }}
	</div>
	<div class="col-md-6">
		<img src="{{ asset($Admit->Photo) }}" alt="{{ asset($Admit->Photo) }}" style="width: 40px; height: 40px;">
	</div>
</div>
<br>
<div class="row" style="text-align: center;">
	<div class="col-md-6">
		Student Name: {{ $Admit->StudentName }}
	</div>
	<div class="col-md-6">
		Roll: {{ $Admit->Roll }}
	</div>
</div>
<br>
<div class="row" style="text-align: center;">
	<div class="col-md-6">
		Phone Number:  {{ $Admit->MobileNumber }}
	</div>
	<div class="col-md-6">
		Father's Name:  {{ $Admit->FathersName }}
	</div>
</div>
<br>
<div class="row" style="text-align: center;"> 
	<div class="col-md-6">
		Class:  {{ $Admit->Class }}
	</div>
	<div class="col-md-6">  
		Exam Type: {{ $Admit->ExamType }}
	</div>
</div>
<br><br><br><br>            <div class="row">
              <div class="col-md-6">
      Student's Signature
    </div>
    <div class="col-md-6">
      School's Head Signature
    </div>
            </div>
          </div>


<br><br>
 @endsection