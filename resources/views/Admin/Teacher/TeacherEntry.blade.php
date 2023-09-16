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
                            <br>
                            <br>
                            <div class="x_content" id="room_filter">


     <form class="form-horizontal form-label-left" action="{{ url('/SaveTeacher') }}" enctype="multipart/form-data" method="post">
                                    @csrf

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="x_panel tile">
                                            <div class="x_title">
                                                <h2>Teacher Entry</h2>
                                                
                                                <div class="col-md-3"></div>
                     <h2 style="color: greenyellow" align="center">{{ Session::get('Message') }}</h2>

                                                
                                                <div class="actions" align="right">
                                                    <a href="{{ url('/TeacherList') }}" class="btn btn-success" id="add"><i class=""></i>Teacher's List</a>

                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">

                                                <div class="row">
                                                   
                                                    

                                                    <div class="col-md-4">
                                                        <label for="TeachersName">Teacher's Name<span style="color: red;">*</span></label>
                                                        <input type="text" class="form-control" id="TeachersName" name="TeachersName" placeholder="Teacher's Name" required="">
                                                    </div>



                                                     <div class="col-md-4">
                                                        <label for="Address">Address</label>
                                                        <textarea id="Address" class="form-control" name="Address" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="margin: 0px -0.5px 0px 0px; width: 300px; height: 54px;"></textarea>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="Phone">Phone</label>
                                                        <input type="text" class="form-control" required="" id="Phone" name="Phone" placeholder="Phone Number" >
                                                    </div>
                                                </div>
                                       <br>
                                                <div class="row">
                                                   
                                                    <div class="col-md-2">
                                                        <label for="EduQuly">Edu Qualy<span style="color: red;">*</span></label>
                                                        <input type="text" class="form-control" id="EduQuly" name="EduQuly" placeholder="Educational Qualyfication">
                                                    </div>
                                                   <div class="col-md-4">
                                                        <label for="SofClass">Subject<span style="color: red;">*</span></label>
                                                        <select name="SofClass" id="SofClass" class="form-control" onchange="myFunction(this.value);" required="">
                           <option value=""> Select Subject </option>
                                              @foreach($Subject as $Subjects)             
                          <option value="{{ $Subjects->Subject }}">{{ $Subjects->Subject }}</option>
                                        @endforeach
                                              
                                                        </select>
                                                    </div>


                                                    <div class="col-md-4">
                                                        <label for="Photo">Photo</label>
                                                        <input type="file"  id="Photo" name="Photo" required="">
                                                    </div>

                                                    <div class="col-md-2">
                                                        <label for="JoiningDate">Joining Date<span style="color: red;">*</span></label>
  <input type="Date" class="form-control" value="<?php echo date('d-m-y') ?>" id="JoiningDate" name="JoiningDate">
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="row">
                                                    
                                                   

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