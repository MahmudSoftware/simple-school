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
             <form class="form-horizontal form-label-left" action="{{ url('/SaveSchoolExpence') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                         
                                        <div class="x_panel tile">
                                            <div class="x_title">
                                                <h2>School's Expence</h2>
                                                
                                                <div class="col-md-3"></div>
                     
                                              

                                                
                                                <div class="actions" align="right">
                                                    <a href="{{ url('/SchoolExpenceList') }}" class="btn btn-success" id="add"><i class=""></i> School's Expence List</a>

                                                </div>

                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">

                                                <div class="row">
                                                   
                                                  

                                                    
                                                    <div class="col-md-12">
                                                        <label for="Date">Date</label>
        <input type="Date" class="form-control" required="" id="Date"  name="Date" value="<?php  echo date(('d,m,y')) ?>">
                                                    </div>
                                                </div>
                                       <br>

                                       <div class="row">
                                                   
                                                  

                                                    
                                                    <div class="col-md-12">
                                                        <label for="Subject">Subject</label>
                                                        <input type="text" class="form-control" id="Subject" name="Subject" placeholder="Subject" required="" >
                                                    </div>
                                                </div>
                                       <br>
                                                
                                                <div class="row">
                                                    
                                                    <div class="col-md-12">
                                                        <label for="Description">Description</label>
                                                        <textarea id="Description" class="form-control" name="Description" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="margin: 0px -0.5px 0px 0px; height: 54px;"></textarea>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                   
                                                  

                                                    
                                                    <div class="col-md-12">
                                                        <label for="Cost">Cost</label>
                                                        <input type="Number" class="form-control" id="Cost" name="Cost" placeholder="Cost" required="" >
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