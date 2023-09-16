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

                <h2 style="color: greenyellow" align="center">{{ Session::get('Message') }}</h2>
             <form class="form-horizontal form-label-left" action="{{ url('/SaveStudent') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                         <?php 
              $StudentId = DB::table('students')->count();
           
              $StudentId = date('Ymd').$StudentId+1;
              ?>
                                        <div class="x_panel tile">
                                            <div class="x_title">
                                                <h2>Student Entry</h2>
                                                
                                                <div class="col-md-3"></div>
                     
                                              <td>Student Id : <input type="text" name="StudentId" value="<?php echo 'STUDENT'.$StudentId;?>" readonly></td>

                                                
                                                <div class="actions" align="right">
                                                    <a href="{{ url('/StudentList') }}" class="btn btn-success" id="add"><i class=""></i>Student List</a>

                                                </div>

                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">

                                                <div class="row">
                                                   
                                                    <div class="col-md-4">
                                                        <label for="StudentName">Student Name<span style="color: red;">*</span></label>
                                                        <input type="text" class="form-control" id="StudentName" name="StudentName" placeholder="Student Name" required="">
                                                    </div>

                                                  

                                                    <div class="col-md-4"> <label for="FathersName">Father's Name</label>
                                                        <input type="text" class="form-control" id="FathersName" name="FathersName" placeholder="Father's Name">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="MothersName">Mother's Name</label>
                                                        <input type="text" class="form-control" id="MothersName" name="MothersName" placeholder="Mother's Name" >
                                                    </div>
                                                </div>
                                       <br>
                                                <div class="row">
                                                   
                                                    <div class="col-md-4">
                                                        <label for="MobileNumber">Mobile Number<span style="color: red;">*</span></label>
                                                        <input type="text" class="form-control" id="MobileNumber" name="MobileNumber" placeholder="Mobile Number" required="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="Class">Class<span style="color: red;">*</span></label>
                                                        <select name="Class" id="Class" class="form-control" required="" onchange="myFunction(this.value);">
                                                           
                          <option value="">Please Select Class</option>
                          <option value="Play-Karoby">Play - Karoby</option>
                         <option value="Play-Provati">Play - Provati</option>

                        <option value="Nursary-Section-Shovon">Nursary - Shovon</option>
                        <option value="Nursary-Section-Janani">Nursary - Janani</option>

                      <option value="STD-One-Anamika">STD One Anamika</option>
                             <option value="STD-On-Golap">STD One Golap</option>

                              <option value="Two-Section-Bilash">Two Section Bilash</option>
                              <option value="Two-Section-Tagor">Two Section Tagor</option>
                             <!--
                             <option value="One-Section-A">STD Two Bilash</option>
                             <option value="One-Section-B">STD Two Tagor</option>
                             
                             <option value="Four-Section-B">Four Section B</option>
                            <option value="Five-Section-B">Five Section B</option>
                            <option value="Three-Section-B">Three Section B</option>

                               -->
                              <option value="STD-Three-Section-A">STD Three Section A</option>


                               <option value="STD-Four-Section-A">STD Four Section A</option>

                               

                               <option value="STD-Five-Section-A">STD Five Section A</option>

                                              
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="Roll">Roll</label>
                                                        <input type="text" class="form-control" id="Roll" name="Roll" placeholder="Roll" required="">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    
                                                    <div class="col-md-4">
                                                        <label for="Address">Address</label>
                                                        <textarea id="Address" class="form-control" name="Address" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="margin: 0px -0.5px 0px 0px; width: 300px; height: 54px;"></textarea>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="Photo">Photo</label>
                                                        <input type="file" id="Photo" name="Photo" required="">
                                                    </div>

                                                      <div class="col-md-4">
                                                        <label for="JoiningDate">Addmition Date<span style="color: red;">*</span></label>
                  <input type="date" class="form-control" id="JoiningDate" name="JoiningDate" value="<?php echo date('d,m,y'); ?>" placeholder="Joining Date" required="">
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