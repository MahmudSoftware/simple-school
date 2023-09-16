 @extends('Admin.Master')
 @section('MainContent')
 <br>
 <style>
     .heeee{
        text-align: center;
     }
 </style>
    <h4 class="heeee">ADARSHA PRE-CADET SCHOOL </h4>
<P class="heeee"> Hospital Mor, Gobindaganj, Gaibandha</P>
<P class="heeee">Phone: 01911539893, 01792984747 &nbsp;  </P> <br>

 <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <div class="actions">
                                            <a class="btn btn-success hidden-print" onclick="javascript:window.print()">Print</a>
                                        </div>
                                    </li>
                                </ul> <br>
  <h2 style="text-align: center;">Student Marksheet</h2> <br>
  <h4 style="text-align: center;">Nursary Section Shovon</h4> <br>
  
 <div class="container">
    <div class="row">
      <div class="col-md-6">
        Student ID: {{ $Playamarksheet->StudentID }}
      </div>
      <div class="col-md-6">
        Roll:  {{ $Playamarksheet->Roll }}
      </div>
    </div>
  </div>
<br>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        Student Name: {{ $Playamarksheet->StudentsName }}
      </div>
      <div class="col-md-6">
        Father's Name :  {{ $Playamarksheet->Fathersname }}
      </div>
    </div>
  </div>
        <br><br>
<table class="table table-bordered">
      <thead>
        <tr>
          <th>Sl NO</th>
          <th>Subject</th>
          <th>1St Exm</th>
          <th>2Nd Exm</th>
          <th>3rd Exm</th>
          <th>Final Exm</th>
          <th>Total</th>
          <th>Avarage</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>{{ $Playamarksheet->Subjectone }}</td>
          <td>{{ $Playamarksheet->onExmon }}</td>
          <td>{{ $Playamarksheet->twExmon }}</td>
          <td>{{ $Playamarksheet->ThreExmon }}</td>
          <td>{{ $Playamarksheet->FiExmon }}</td>
          <td>{{ $Playamarksheet->TotalOn }}</td>
          <td>{{ $Playamarksheet->AvgOn }}</td>
        </tr>

         <tr>
          <th scope="row">2</th>
          <td>{{ $Playamarksheet->SubjectTwo }}</td>
          <td>{{ $Playamarksheet->onExTwo }}</td>
          <td>{{ $Playamarksheet->twExmTwo }}</td>
          <td>{{ $Playamarksheet->ThreExTwo }}</td>
          <td>{{ $Playamarksheet->FiExTwo }}</td>
          <td>{{ $Playamarksheet->TotalTwo }}</td>
          <td>{{ $Playamarksheet->AvgTwo }}</td>
        </tr>
            











         <tr>
          <th scope="row">3</th>
          <td>{{ $Playamarksheet->SubjectThree }}</td>
          <td>{{ $Playamarksheet->onExThree }}</td>
          <td>{{ $Playamarksheet->twExmThree }}</td>
          <td>{{ $Playamarksheet->ThreExmThree }}</td>
          <td>{{ $Playamarksheet->FiExmThree }}</td>
          <td>{{ $Playamarksheet->TotalThree }}</td>
          <td>{{ $Playamarksheet->AvgTotalThree }}</td>
        </tr>

        <tr>
          <th scope="row">4</th>
          <td>{{ $Playamarksheet->SubjectFour }}</td>
          <td>{{ $Playamarksheet->onExmFour }}</td>
          <td>{{ $Playamarksheet->twExmFour }}</td>
          <td>{{ $Playamarksheet->ThreeExmFour }}</td>
          <td>{{ $Playamarksheet->FiExmFour }}</td>
          <td>{{ $Playamarksheet->TotalFour }}</td>
          <td>{{ $Playamarksheet->AvgFour }}</td>
        </tr>
               

        <tr>
          <th scope="row">5</th>
          <td>{{ $Playamarksheet->SubjectFive }}</td>
          <td>{{ $Playamarksheet->onExmFive }}</td>
          <td>{{ $Playamarksheet->twExmFive }}</td>
          <td>{{ $Playamarksheet->ThreExmFive }}</td>
          <td>{{ $Playamarksheet->FiExmFive }}</td>
          <td>{{ $Playamarksheet->TotalFive }}</td>
          <td>{{ $Playamarksheet->AvgFive }}</td>
        </tr>

           <tr>
          <th scope="row">6</th>
          <td>{{ $Playamarksheet->SubjectSix }}</td>
          <td>{{ $Playamarksheet->onExmSix }}</td>
          <td>{{ $Playamarksheet->twExmSix }}</td>
          <td>{{ $Playamarksheet->ThreExmSix }}</td>
          <td>{{ $Playamarksheet->FiExmSix }}</td>
          <td>{{ $Playamarksheet->TotalSix }}</td>
          <td>{{ $Playamarksheet->AvgSix }}</td>
        </tr>


        <tr>
          <th scope="row"></th>
          <td>Total Mark</td>
          <td>{{ $Playamarksheet->onExmTotal }}</td>
          <td>{{ $Playamarksheet->twExmTotal }}</td>
          <td>{{ $Playamarksheet->ThreExmTotal }}</td>
          <td>{{ $Playamarksheet->FiExmTotal }}</td>
          <td>{{ $Playamarksheet->GrandTotal }}</td>
          <td>{{ $Playamarksheet->GrandAvg }}</td>
        </tr>

        <tr>
          <th scope="row"></th>
          <td>Average Mark = </td>
          <td>{{ $Playamarksheet->onExmAverage }}</td>
          <td>{{ $Playamarksheet->twExmAverage }}</td>
          <td>{{ $Playamarksheet->ThreExmAverage }}</td>
          <td>{{ $Playamarksheet->FiExmAverage }}</td>
          <td>{{ $Playamarksheet->GrandAverage }}</td>
          <td>{{ $Playamarksheet->GrandTotalAverage }}</td>
        </tr>








        
      </tbody>
    </table>

 @endsection