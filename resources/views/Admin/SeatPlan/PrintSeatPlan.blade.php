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
                                </ul>
  <h2 style="text-align: center;">Seat Plan For &nbsp; &nbsp; {{$Seatplan->ExmType }}</h2><br>

<table class="table table-bordered">
      <thead>
        <tr>
          <th>Room Name/No</th>
          <th>Class</th>
          <th>Section</th>
          <th>Roll</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          
          <td>{{$Seatplan->RoomName }}</td>
          <td>{{$Seatplan->Class }}</td>
          <td>{{$Seatplan->Section }}</td>
          <td>{{$Seatplan->Roll }}</td>
          
        </tr>




        
      </tbody>
    </table>

 @endsection