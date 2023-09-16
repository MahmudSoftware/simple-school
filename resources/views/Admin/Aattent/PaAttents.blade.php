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


                                <form class="form-horizontal form-label-left" action="{{ url('/PlayAtentsSave') }}" method="post">
                                    @csrf

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="x_panel tile">
                                            <div class="x_title">
                                <h2>Add Student Attents / &nbsp; Play Section Provaty</h2>
                                                
                                                <div class="col-md-3"></div>
                     <h2 style="color: greenyellow" align="center">{{ Session::get('Message') }}</h2>

                                                
                                                <div class="actions" align="right">
                                                    <a href="{{ url('/StuAttentsListPA') }}" class="btn btn-success" id="add"><i class=""></i>Attents List</a>

                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">

                                                <div class="row">

                                                 <div class="col-sm-2">
                <div class="form-group">
                  <label for="attdate">Date</label>
                  <input type="text" name="Date" class="form-control" value="<?php echo date('Y-m-d');?>" readonly>
                  </div>
                        </div>
                                                   <div class="col-md-3">
                                                        <label for="StudentName">Student Name<span style="color: red;">*</span></label>
                                                        <select name="StudentName" id="StudentName" class="form-control" required="" onchange="myFunction(this.value);">
                                         @foreach($Student as $Students)                  
                  <option value="{{$Students ->StudentName}}">{{$Students ->StudentName}}</option>
                                         @endforeach
                                              
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="Status">Status<span style="color: red;">*</span></label>
                                                        <select name="Status" id="Status" class="form-control" onchange="myFunction(this.value);">
                                                           
                                 <option value="Present">Present</option>
                                 <option value="Absent">Absent</option>
                        
                                              
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="col-md-3">
                                                        <label for="Remurk">Remurk<span style="color: red;">*</span></label>
                                                        <input type="text" class="form-control" id="Remurk" name="Remurk" placeholder="Remurk">
                                                    </div>
                                                   
                                                </div>
                                                 <br> <br><br>
                                                
                                                <div class="row">
                                                    <div class="col-md-12" style="text-align: center;">
                                                        <button type="submit" name="Submit" class="btn btn-block btn-success">Save</button>
                                                       

                                                    </div>
                                                </div>
                                                
                                               
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                             fgdfgdf
                        </div>
                    </div>
  @endsection