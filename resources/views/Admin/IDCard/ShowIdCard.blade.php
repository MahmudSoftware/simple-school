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
<ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <div class="actions">
                                            <a class="btn btn-success hidden-print" onclick="javascript:window.print()">Print</a>
                                        </div>
                                    </li>
                                </ul>
 <div class="col-sm-6">
                        <div class="x_panel">
                            <div class="x_panel">
                            <div class="x_title" style="margin-top: 20px;">
                            	<div class="container">
<h5 class="heeee">ADARSHA PRE-CADET SCHOOL </h5>
<P class="heeee"> Hospital Mor Gobindaganj, Gaibandha</P>
<P class="heeee">Phone: 01911539893, 01792984747 &nbsp; </P><br>
  <div class="heeee"><b> Student's Id Card</b>
              </div> <br>
              
              <div class="container">
              	<div class="row">
              		<div class="col-md-6">
        <img src="{{ asset($IdCardSearch->Photo) }}" style="width: 30px; height: 35px" alt="">
              		</div>
              		<div class="col-md-6">
              		ID: {{ $IdCardSearch->StudentId }}
              		</div>
              	</div>
              </div>

              	<br>
              	<div class="container">
              	<div class="row">
              		<div class="col-md6">
              			Student'Name: {{ $IdCardSearch->StudentName }}
              		</div> <br>
              		<div class="col-md6">
              			Father's Name: {{ $IdCardSearch->FathersName }}
              		</div>
              	</div>
          </div>
          </div>
   <br>
          <div class="container">
              	<div class="row">
              		<div class="col-md6">
              			Mother's Name:  {{ $IdCardSearch->MothersName }}
              		</div> <br>
              		<div class="col-md6">
              			Phone:  {{ $IdCardSearch->MobileNumber }}  
              		</div>
              	</div>
          </div>
          <br>
          <div class="container">
                <div class="row">
                  <div class="col-md6">
                    Class:  {{ $IdCardSearch->Class }}
                  </div> <br>
                  <div class="col-md6">
                    Roll:  {{ $IdCardSearch->Roll }}  
                  </div>
                </div>
          </div><br><br>
          <div class="container">
            <div class="row">
              <div class="col-md-6">
      
    </div>
    <div class="col-md-6">
      
    </div>
            </div>
          </div>
          </div>
      </div>
  </div>
</div>

    
  

 @endsection