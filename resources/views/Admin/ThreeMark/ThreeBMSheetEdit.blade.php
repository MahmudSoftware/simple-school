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
  <div class="heeee"><b> Student's Mark Sheet / Three Section B</b></div>
  
  <h3 style="text-align: center; color: #30BAF8;"><b>{{ Session::get('Message') }}</b></h3>
           
<form action="{{ url('/UpdateThreeBMarkSh') }}" method="POST">
     @csrf
<div class="row">
   <input type="hidden" name="id" value="{{ $Playamarksheet->id }}">

</div>

  <br>

<div class="row">

  <div class="col-sm-6">Student ID: &nbsp; &nbsp; &nbsp; &nbsp;
    <input type="text" class="bopo" value="{{ $Playamarksheet->StudentID }}"  name="StudentID" readonly="">
  </div>
 

 <div class="col-sm-6">Roll: &nbsp; &nbsp; 
    <input type="text" class="bopo" value="{{ $Playamarksheet->Roll }}" name="Roll" readonly="">
  </div>

</div> <br>
<div class="row">

   <div class="col-sm-6">Student's Name: &nbsp; &nbsp; &nbsp; &nbsp; 
    <input type="text" class="bopo" name="StudentsName" value="{{ $Playamarksheet->StudentsName }}" readonly="">
  </div>
  <div class="col-sm-6">Father's name : 

    <input type="text" class="bopo" value="{{ $Playamarksheet->Fathersname }}" name="Fathersname" readonly="">

  </div>

 

</div>


<br>
<div class="form-group">
    <table class="table-bordered">
                                            <tr class="rrrrr">
                                                    <td>SL</td>
                                                   
                                                    <td class="text-center">Subject</td>
                                                    <td class="text-center">1St Exm</td>
                                                    <td class="text-center">2Nd Exm</td>
                                                    <td class="text-center">3rd Exm</td>
                                                    <td class="text-center">Final Exm</td>
                                                    
                                                    <td class="text-center">Total</td>
                                                    <td class="text-center">Average</td>
                                                    
                                                        
                                            </tr>

                                            <tr >
    <td style=""><input type="text" class="rrrrr" value="1" style="width: 30px;"></td>

 <td><input type="text" onkeyup="PlayMarksix()" value="{{ $Playamarksheet->Subjectone }}" class="rrrrr" style="width: 200px;"  name="Subjectone"></td>
    <td><input type="text" onkeyup="PlayMarksix()" value="{{ $Playamarksheet->onExmon }}" class="rrrrr" style="width: 100px;" name="onExmon" id="onExmon"></td>
  <td><input type="text" onkeyup="PlayMarksix()" value="{{ $Playamarksheet->twExmon }}" class="rrrrr" style="width: 100px;" name="twExmon" id="twExmon"></td>

  <td><input type="text" onkeyup="PlayMarksix()" value="{{ $Playamarksheet->ThreExmon }}" class="rrrrr" style="width: 100px;" name="ThreExmon" id="ThreExmon"></td>

    <td><input type="text" class="rrrrr" value="{{ $Playamarksheet->FiExmon }}" onkeyup="PlayMarksix()" name="FiExmon" style="width: 100px;" id="FiExmon"></td>
  

    <td><input type="text" class="rrrrr" value="{{ $Playamarksheet->TotalOn }}" name="TotalOn" readonly="" id="TotalOn"></td>
    <td><input type="text" class="rrrrr" value="{{ $Playamarksheet->AvgOn }}" name="AvgOn" readonly="" id="AvgOn"></td>
                                           
                                            </tr>

                                             <tr >
    <td style=""><input type="text" class="rrrrr" value="2" style="width: 30px;"></td>

 <td><input type="text" onkeyup="PlayMarksix()" value="{{ $Playamarksheet->SubjectTwo }}" class="rrrrr" style="width: 200px;"  name="SubjectTwo"></td>

    <td><input type="text" onkeyup="PlayMarksix()" class="rrrrr" style="width: 100px;" value="{{ $Playamarksheet->onExTwo }}" name="onExTwo" id="onExTwo"></td>

  <td><input type="text" onkeyup="PlayMarksix()" class="rrrrr" style="width: 100px;" name="twExmTwo" value="{{ $Playamarksheet->twExmTwo }}" id="twExmTwo"></td>

  <td><input type="text" value="{{ $Playamarksheet->ThreExTwo }}" onkeyup="PlayMarksix()" class="rrrrr" style="width: 100px;" name="ThreExTwo" id="ThreExTwo"></td>

    <td><input type="text" class="rrrrr" onkeyup="PlayMarksix()" value="{{ $Playamarksheet->FiExTwo }}" name="FiExTwo" style="width: 100px;" id="FiExTwo"></td>
  

    <td><input type="text" value="{{ $Playamarksheet->TotalTwo }}" class="rrrrr" name="TotalTwo" readonly="" id="TotalTwo"></td>
    <td><input type="text" value="{{ $Playamarksheet->AvgTwo }}" class="rrrrr" name="AvgTwo"  readonly="" id="AvgTwo"></td>
                                           
                                            </tr>

                                             <tr >
    <td style=""><input type="text"  class="rrrrr" value="3" style="width: 30px;"></td>

 <td><input type="text" value="{{ $Playamarksheet->SubjectThree }}" onkeyup="PlayMarksix()" class="rrrrr" style="width: 200px;"  name="SubjectThree"></td>
    <td><input type="text" value="{{ $Playamarksheet->onExThree }}" onkeyup="PlayMarksix()" class="rrrrr" style="width: 100px;" name="onExThree" id="onExThree"></td>
  <td><input type="text" onkeyup="PlayMarksix()" class="rrrrr" value="{{ $Playamarksheet->twExmThree }}" style="width: 100px;" name="twExmThree" id="twExmThree"></td>

  <td><input type="text" value="{{ $Playamarksheet->ThreExmThree }}" onkeyup="PlayMarksix()" class="rrrrr" style="width: 100px;" name="ThreExmThree" id="ThreExmThree"></td>

    <td><input type="text" value="{{ $Playamarksheet->FiExmThree }}" class="rrrrr" onkeyup="PlayMarksix()" name="FiExmThree" style="width: 100px;" id="FiExmThree"></td>
  

    <td><input type="text" value="{{ $Playamarksheet->TotalThree }}" class="rrrrr" name="TotalThree" readonly="" id="TotalThree"></td>
    <td><input type="text" value="{{ $Playamarksheet->AvgTotalThree }}" class="rrrrr" name="AvgTotalThree" readonly="" id="AvgTotalThree"></td>
                                           
                                            </tr>

                                             <tr >
    <td style=""><input type="text" class="rrrrr" value="4" style="width: 30px;"></td>

 <td><input type="text" onkeyup="PlayMarksix()" value="{{ $Playamarksheet->SubjectFour }}" class="rrrrr" style="width: 200px;"  name="SubjectFour"></td>
    <td><input type="text" onkeyup="PlayMarksix()" value="{{ $Playamarksheet->onExmFour }}" class="rrrrr" style="width: 100px;" name="onExmFour" id="onExmFour"></td>
  <td><input type="text" onkeyup="PlayMarksix()" value="{{ $Playamarksheet->twExmFour }}" class="rrrrr" style="width: 100px;" name="twExmFour" id="twExmFour"></td>

  <td><input type="text" onkeyup="PlayMarksix()" value="{{ $Playamarksheet->ThreeExmFour }}" class="rrrrr" style="width: 100px;" name="ThreeExmFour" id="ThreeExmFour"></td>

    <td><input type="text" class="rrrrr" value="{{ $Playamarksheet->FiExmFour }}" onkeyup="PlayMarksix()" name="FiExmFour" style="width: 100px;" id="FiExmFour"></td>
  

    <td><input type="text" value="{{ $Playamarksheet->TotalFour }}" class="rrrrr" name="TotalFour" readonly="" id="TotalFour"></td>
    <td><input type="text" value="{{ $Playamarksheet->AvgFour }}" class="rrrrr" name="AvgFour" readonly="" id="AvgFour"></td>
                                           
                                            </tr>
                          <!-- Total mark -->
                                             <tr >
    <td style=""><input type="text" class="rrrrr" value="5" style="width: 30px;"></td>

 <td><input type="text" value="{{ $Playamarksheet->SubjectFive }}" onkeyup="PlayMarksix()" class="rrrrr" style="width: 200px;"  name="SubjectFive"></td>
    <td><input type="text" value="{{ $Playamarksheet->onExmFive }}" onkeyup="PlayMarksix()" class="rrrrr" style="width: 100px;" name="onExmFive" id="onExmFive"></td>
    
  <td><input type="text" value="{{ $Playamarksheet->twExmFive }}" onkeyup="PlayMarksix()" class="rrrrr" style="width: 100px;" name="twExmFive" id="twExmFive"></td>

  <td><input type="text" value="{{ $Playamarksheet->ThreExmFive }}" onkeyup="PlayMarksix()" class="rrrrr" style="width: 100px;" name="ThreExmFive" id="ThreExmFive"></td>

    <td><input type="text" value="{{ $Playamarksheet->FiExmFive }}" class="rrrrr" onkeyup="PlayMarksix()" name="FiExmFive" style="width: 100px;" id="FiExmFive"></td>
  

    <td><input type="text" value="{{ $Playamarksheet->TotalFive }}" class="rrrrr" name="TotalFive" readonly="" id="TotalFive"></td>
    <td><input type="text" value="{{ $Playamarksheet->AvgFive }}" class="rrrrr" name="AvgFive" readonly="" id="AvgFive"></td>
                                           
                                            </tr>
                                 


                                  <tr >
    <td style=""><input type="text" class="rrrrr" value="6" style="width: 30px;"></td>

 <td><input type="text" onkeyup="PlayMarksix()" value="{{ $Playamarksheet->SubjectSix }}" class="rrrrr" style="width: 200px;"  name="SubjectSix"></td>

    <td><input type="text" onkeyup="PlayMarksix()" value="{{ $Playamarksheet->onExmSix }}" class="rrrrr" style="width: 100px;" name="onExmSix" id="onExmSix"></td>

  <td><input type="text" onkeyup="PlayMarksix()" value="{{ $Playamarksheet->twExmSix }}" class="rrrrr" style="width: 100px;" name="twExmSix" id="twExmSix"></td>

  <td><input type="text" onkeyup="PlayMarksix()" value="{{ $Playamarksheet->ThreExmSix }}" class="rrrrr" style="width: 100px;" name="ThreExmSix" id="ThreExmSix"></td>

    <td><input type="text" class="rrrrr" value="{{ $Playamarksheet->FiExmSix }}" onkeyup="PlayMarksix()" name="FiExmSix" style="width: 100px;" id="FiExmSix"></td>
  

    <td><input type="text" onkeyup="PlayMarksix()" class="rrrrr" value="{{ $Playamarksheet->TotalSix }}" name="TotalSix" readonly="" id="TotalSix"></td>

    <td><input type="text" onkeyup="PlayMarksix()" class="rrrrr" value="{{ $Playamarksheet->AvgSix }}" name="AvgSix" readonly="" id="AvgSix"></td>
                                           
                                            </tr>

                                      
                                       <tr >
    <td style=""><input type="text" class="rrrrr" value="7" style="width: 30px;"></td>

 <td><input type="text" onkeyup="PlayMarksix()" value="{{ $Playamarksheet->SubjectSv }}" class="rrrrr" style="width: 200px;"  name="SubjectSv"></td>

    <td><input type="text" onkeyup="PlayMarksix()" value="{{ $Playamarksheet->onExmSv }}" class="rrrrr" style="width: 100px;" name="onExmSv" id="onExmSv"></td>

  <td><input type="text" onkeyup="PlayMarksix()" value="{{ $Playamarksheet->twExmSv }}" class="rrrrr" style="width: 100px;" name="twExmSv" id="twExmSv"></td>

  <td><input type="text" onkeyup="PlayMarksix()" value="{{ $Playamarksheet->ThreExmSv }}" class="rrrrr" style="width: 100px;" name="ThreExmSv" id="ThreExmSv"></td>

    <td><input type="text" class="rrrrr" value="{{ $Playamarksheet->FiExmSv }}" onkeyup="PlayMarksix()" name="FiExmSv" style="width: 100px;" id="FiExmSv"></td>
  

    <td><input type="text" onkeyup="PlayMarksix()" class="rrrrr" value="{{ $Playamarksheet->TotalSv }}" name="TotalSv" readonly="" id="TotalSv"></td>

    <td><input type="text" onkeyup="PlayMarksix()" class="rrrrr" value="{{ $Playamarksheet->AvgSv }}" name="AvgSv" readonly="" id="AvgSv"></td>
                                           
                                            </tr>



                                             <tr >
    <td style=""><input type="text"  class="rrrrr" value="" style="width: 30px;"></td>

 <td><input type="text" value="Total Mark = " onkeyup="PlayMarksix()" class="rrrrr" style="width: 200px;"></td>

    <td><input type="text" value="{{ $Playamarksheet->onExmTotal }}" onkeyup="PlayMarksix()" class="rrrrr" style="width: 100px;" name="onExmTotal" id="onExmTotal"></td>

  <td><input type="text" value="{{ $Playamarksheet->twExmTotal }}" onkeyup="PlayMarksix()" class="rrrrr" style="width: 100px;" name="twExmTotal" id="twExmTotal"></td>

  <td><input type="text" value="{{ $Playamarksheet->ThreExmTotal }}" onkeyup="PlayMarksix()" class="rrrrr" style="width: 100px;" name="ThreExmTotal" id="ThreExmTotal"></td>

    <td><input type="text" value="{{ $Playamarksheet->FiExmTotal }}" class="rrrrr" onkeyup="PlayMarksix()" name="FiExmTotal" style="width: 100px;" id="FiExmTotal"></td>
  

    <td><input type="text" onkeyup="PlayMarksix()" class="rrrrr"  readonly="" id="GrandTotal"></td>
    <td><input type="text" class="rrrrr" onkeyup="PlayMarksix()" readonly="" id="GrandAvg"></td>
                                           
                                            </tr>


           <!-- Average Mark -->

                                            <tr >
    <td style=""><input type="text" class="rrrrr" value="" style="width: 30px;"></td>

 <td><input type="text" value="Average Mark = " onkeyup="PlayMarksix()" class="rrrrr" style="width: 200px;"></td>

    <td><input type="text" value="{{ $Playamarksheet->onExmAverage }}" onkeyup="PlayMarksix()" class="rrrrr" style="width: 100px;" name="onExmAverage" id="onExmAverage"></td>

  <td><input type="text" value="{{ $Playamarksheet->twExmAverage }}" onkeyup="PlayMarksix()" class="rrrrr" style="width: 100px;" name="twExmAverage" id="twExmAverage"></td>

  <td><input type="text" value="{{ $Playamarksheet->ThreExmAverage }}" onkeyup="PlayMarksix()" class="rrrrr" style="width: 100px;" name="ThreExmAverage" id="ThreExmAverage"></td>

    <td><input type="text" value="{{ $Playamarksheet->FiExmAverage }}" class="rrrrr" onkeyup="PlayMarksix()" name="FiExmAverage" style="width: 100px;" id="FiExmAverage"></td>
  

    <td><input type="text" class="rrrrr" onkeyup="PlayMarksix()" value="{{ $Playamarksheet->GrandAverage }}" name="GrandAverage" readonly="" id="GrandAverage"></td>

    <td><input type="text" onkeyup="PlayMarksix()" class="rrrrr"  readonly="" id="GrandTotalAverage"></td>
                                           
                                            </tr>



                                            

                                            
                                            </table>

                                            

     </div>
<button type="submit" class="btn btn-success btn-block">Update</button>

</form>

<br>


        </div>
    </div>
</div>
</div>
 </div>       
 
<script>
    
  


function PlayMarksix()
{
    var onExmon = Number(document.getElementById('onExmon').value);
    var twExmon = Number(document.getElementById('twExmon').value);
    var ThreExmon = Number(document.getElementById('ThreExmon').value);
    var FiExmon = Number(document.getElementById('FiExmon').value);

    var Totalmarkon = onExmon+twExmon+ThreExmon+FiExmon;
    var AvOfTotalmarkon = Totalmarkon/4;
    document.getElementById('TotalOn').value=Totalmarkon;
    document.getElementById('AvgOn').value=AvOfTotalmarkon;
    


    var onExTwo = Number(document.getElementById('onExTwo').value);
    var twExmTwo = Number(document.getElementById('twExmTwo').value);
    var ThreExTwo = Number(document.getElementById('ThreExTwo').value);
    var FiExTwo = Number(document.getElementById('FiExTwo').value);

    var TotalmarkTwo = onExTwo+twExmTwo+ThreExTwo+FiExTwo;

    var AvOfTotalmarkTwo = TotalmarkTwo/4;
    document.getElementById('TotalTwo').value=TotalmarkTwo;
    document.getElementById('AvgTwo').value=AvOfTotalmarkTwo;





    var onExThree = Number(document.getElementById('onExThree').value);
    var twExmThree = Number(document.getElementById('twExmThree').value);
    var ThreExmThree = Number(document.getElementById('ThreExmThree').value);
    var FiExmThree = Number(document.getElementById('FiExmThree').value);

    var TotalmarkThree = onExThree+twExmThree+ThreExmThree+FiExmThree;
    
    var AvOfTotalmarkThree = TotalmarkThree/4;
    document.getElementById('TotalThree').value=TotalmarkThree;
    document.getElementById('AvgTotalThree').value=AvOfTotalmarkThree;




     var onExmFour = Number(document.getElementById('onExmFour').value);
    var twExmFour = Number(document.getElementById('twExmFour').value);
    var ThreeExmFour = Number(document.getElementById('ThreeExmFour').value);
    var FiExmFour = Number(document.getElementById('FiExmFour').value);

    var TotalmarkFour = onExmFour+twExmFour+ThreeExmFour+FiExmFour;
    
    var AvOfTotalmarkFour = TotalmarkFour/4;
    document.getElementById('TotalFour').value=TotalmarkFour;
    document.getElementById('AvgFour').value=AvOfTotalmarkFour;



    var onExmFive = Number(document.getElementById('onExmFive').value);
    var twExmFive = Number(document.getElementById('twExmFive').value);
    var ThreExmFive = Number(document.getElementById('ThreExmFive').value);
    var FiExmFive = Number(document.getElementById('FiExmFive').value);

    var TotalmarkFive = onExmFive+twExmFive+ThreExmFive+FiExmFive;
    
    var AvOfTotalmarkFive = TotalmarkFive/4;
    document.getElementById('TotalFive').value=TotalmarkFive;
    document.getElementById('AvgFive').value=AvOfTotalmarkFive;
   
   var onExmSix = Number(document.getElementById('onExmSix').value);
    var twExmSix = Number(document.getElementById('twExmSix').value);
    var ThreExmSix = Number(document.getElementById('ThreExmSix').value);
    var FiExmSix = Number(document.getElementById('FiExmSix').value);

  var TotalmarkSix = onExmSix+twExmSix+ThreExmSix+FiExmSix;
  var AvOfTotalmarkSix = TotalmarkSix/4;

    document.getElementById('TotalSix').value=TotalmarkSix;
    document.getElementById('AvgSix').value=AvOfTotalmarkSix;


    var onExmSv = Number(document.getElementById('onExmSv').value);
    var twExmSv = Number(document.getElementById('twExmSv').value);
    var ThreExmSv = Number(document.getElementById('ThreExmSv').value);
    var FiExmSv = Number(document.getElementById('FiExmSv').value);

  var TotalmarkSv = onExmSv+twExmSv+ThreExmSv+FiExmSv;
  var AvOfTotalmarkSv = TotalmarkSv/4;

    document.getElementById('TotalSv').value=TotalmarkSv;
    document.getElementById('AvgSv').value=AvOfTotalmarkSv;




   
   var FirstAverage = onExmon+onExTwo+onExThree+onExmFour+onExmFive+onExmSix+onExmSv;

   var FirstAverageAgricate = FirstAverage/7;
    document.getElementById('onExmTotal').value=FirstAverage;
    document.getElementById('onExmAverage').value=FirstAverageAgricate;

   var SecondAverage =twExmon+twExmTwo+twExmThree+twExmFour+twExmFive+twExmSix+twExmSv;
   var SwcondAverageAgricate = SecondAverage/7;
    document.getElementById('twExmTotal').value=SecondAverage;
    document.getElementById('twExmAverage').value=SwcondAverageAgricate;


    
var ThreeAverage =ThreExmon+ThreExTwo+ThreExmThree+ThreeExmFour+ThreExmFive+ThreExmSix+ThreExmSv;

   var ThreeAverageAgricate = ThreeAverage/7;
    document.getElementById('ThreExmTotal').value=ThreeAverage;
    document.getElementById('ThreExmAverage').value=ThreeAverageAgricate;



    var FinalAverage =FiExmon+FiExTwo+FiExmThree+FiExmFour+FiExmFive+FiExmSix+FiExmSv;
   var FinalAverageAgricate = FinalAverage/7;
    document.getElementById('FiExmTotal').value=FinalAverage;
    document.getElementById('FiExmAverage').value=FinalAverageAgricate;


   var onExmAverage = Number(document.getElementById('onExmAverage').value);
   var twExmAverage = Number(document.getElementById('twExmAverage').value);
   var ThreExmAverage = Number(document.getElementById('ThreExmAverage').value);
   var FiExmAverage = Number(document.getElementById('FiExmAverage').value);
       
     

  var GrandAv = onExmAverage+twExmAverage+ThreExmAverage+FiExmAverage;
  var GrandAverage = GrandAv/4;
  
    document.getElementById('GrandAverage').value=GrandAverage;



    var TotalOn = Number(document.getElementById('TotalOn').value);
    var TotalTwo = Number(document.getElementById('TotalTwo').value);
    var TotalThree = Number(document.getElementById('TotalThree').value);
    var TotalFour = Number(document.getElementById('TotalFour').value);
    var TotalFive = Number(document.getElementById('TotalFive').value);




   var AllTotal = TotalOn+TotalTwo+TotalThree+TotalFour+TotalFive;
   

    document.getElementById('GrandTotal').value=AllTotal;
    
      

}     








</script>

  @endsection
