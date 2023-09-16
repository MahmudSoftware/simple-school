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
                            
                            <div class="x_content" id="room_filter">
                           <h2 class="heeee">Seat Plan</h2> <br>
                <h2 style="color: greenyellow" align="center">{{ Session::get('Message') }}</h2>
             <form class="form-horizontal form-label-left" action="{{ url('/UpdateSeatPlan') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                            
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    
                     <input type="hidden" name="id" value="{{ $Seatplan->id }}">
                                        <div class="x_panel tile">
                                            <div class="x_title">
                                                
                                                
                                                <div class="col-md-9">
                                                        <select name="ExmType" id="ExmType" class="form-control" required="" onchange="myFunction(this.value);">
                                                           
                        
                           @foreach($Examtype as $Examtypes)
                <option value="{{ $Examtypes->Examtype }}">{{ $Examtypes->Examtype }}</option> 

                          @endforeach                     
                                                        </select>

                                                </div>
                           
                                                
                                                <div class="actions" align="right">
                                                    <a href="{{ url('/StudentList') }}" class="btn btn-success" id="add"><i class=""></i>Seat Plan List</a>

                                                </div>

                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">

                                                <div class="row">
                                                   
                                                    <div class="col-md-4">
                                                        <label for="RoomName">Room Name/No<span style="color: red;">*</span></label>
                                                        <select name="RoomName" id="RoomName" class="form-control" required="" onchange="myFunction(this.value);">
                                                           
                         
                         
                          @foreach($Room as $Rooms)
                          <option value="{{ $Rooms->RoomNameNo }}">{{ $Rooms->RoomNameNo }}</option>                     @endforeach
                                                        </select>
                                                    </div>

                                                  

                                                    <div class="col-md-4">
                                                        <label for="Class">Class<span style="color: red;">*</span></label>
                                                        <select name="Class" id="Class" class="form-control" required="" onchange="myFunction(this.value);">
                                                           
                                          
                          @foreach($Classcreate as $Classcreates)

                        <option value="{{ $Classcreates->ClassName }}">{{ $Classcreates->ClassName }}</option>                      @endforeach
                                                        </select>
                                                    </div>



                                                    <div class="col-md-4">
                                                        <label for="Section">Section<span style="color: red;">*</span></label>
                                                        <select name="Section" id="Section" class="form-control" required="" onchange="myFunction(this.value);">
                                                           
                                            

                                               @foreach($Section as $Sections)

            <option value="{{ $Sections->SectionName }}">{{ $Sections->SectionName }}</option>              
                 @endforeach  
                                                        </select>
                                                    </div>


                                                </div>
                                       <br>
                                                <div class="row">
                                                   
                                                    <div class="col-md-12">
                                                        <label for="Roll">Roll</label>
                                                        <textarea id="Roll" class="form-control" name="Roll" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="margin: 0px -0.5px 0px 0px; width: 100%; height: 150px;" required="">
                                                         {{$Seatplan->Roll}}
                                                        </textarea>
                                                    </div>


                                                    
                                                  
                                                </div>
                                                <br>
                                                
                                                
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" name="Submit" class="btn btn-block btn-success">Update</button>
                                                        
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