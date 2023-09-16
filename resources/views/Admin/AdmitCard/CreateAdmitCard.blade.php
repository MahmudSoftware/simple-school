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
                            <br>
                            <br>
                            <div class="x_content" id="room_filter">

         <h2 style="color: greenyellow" align="center">{{ Session::get('Message') }}</h2>
             <form class="form-horizontal form-label-left" action="{{ url('/SaveAdmitCard') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                       
                                        <div class="x_panel tile">
                                            <div class="x_title">
                                                <h2>Admit Card</h2>
                                                
                                                <div class="col-md-3"></div>
                     
                                             

                                                
                                                <div class="actions" align="right">
                                                    <a href="{{ url('/AdmitCardList') }}" class="btn btn-success" id="add"><i class=""></i>Admit Card List</a>

                                                </div>

                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">

                                                <div class="row">
                                                   <div class="col-md-4">
                                                        <label for="StudentID">Student ID<span style="color: red;">*</span></label>
                                                        <input type="text" class="form-control" id="StudentID" name="StudentID" readonly="" value="{{ $AdmitCard->StudentId }}">
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="StudentName">Student Name<span style="color: red;">*</span></label>
                                                        <input type="text" class="form-control" id="StudentName" name="StudentName" value="{{ $AdmitCard->StudentName}}" readonly="" >
                                                    </div>

                                                  

                                                    <div class="col-md-4"> <label for="FathersName">Father's Name</label>
                                                        <input type="text" class="form-control" id="FathersName" name="FathersName" readonly="" value="{{ $AdmitCard->FathersName}}">
                                                    </div>
                                                    
                                                </div>
                                       <br>
                                                <div class="row">
                                                   
                                                    <div class="col-md-4">
                                                        <label for="MobileNumber">Mobile Number<span style="color: red;">*</span></label>
                                                        <input type="text" class="form-control" id="MobileNumber" name="MobileNumber" readonly="" value="{{ $AdmitCard->MobileNumber }}">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="Class">Class<span style="color: red;">*</span></label>
                                                        <input type="text" class="form-control" id="Class" name="Class" value="{{ $AdmitCard->Class }}" readonly=""> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="Roll">Roll</label>
                                                        <input type="text" class="form-control" id="Roll" name="Roll" value="{{ $AdmitCard->Roll }}" readonly="">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    
                                                    <div class="col-md-4">
                                                        <label for="Address">Address</label>
                                                        <textarea id="Address" class="form-control" name="Address" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="margin: 0px -0.5px 0px 0px; width: 300px; height: 54px;" readonly="">{{ $AdmitCard->Address }}</textarea>
                                                    </div>

                                                   
                                                       
                                                        <input type="hidden" class="form-control" id="Photo" name="Photo" readonly="" value="{{ $AdmitCard->Photo }}">
                                                    

                                                      <div class="col-md-4">
                                                        <label for="ExamType">Exam Type<span style="color: red;">*</span></label>
                                <select required="" name="ExamType" id="ExamType" class="form-control" onchange="myFunction(this.value);">
                                 <option value="">Please Select Exam Type</option>
                                        @foreach($Examtype as $Examtypes)                   
                             <option value="{{ $Examtypes->Examtype }}">{{ $Examtypes->Examtype }}</option>
                                       @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="ln_solid"></div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button type="submit" name="Submit" class="btn btn-success">Save</button>
                                                        <button type="button" class="btn btn-default"><a href="master.php">Cancel</a></button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
  @endsection