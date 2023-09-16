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
<br><br>
        <div class="container">
               <h4><b>Search by Student Id For Create Id Card</b></h4><br>           
     
               <form action="{{ url('/IdCardSearch') }}" method="GET">
               
                   <div class="row">
                        
                      <div class="col-sm-3">
                  <div class="form-group">
              <label for="registration_number"><b>Student ID</b></label>
         <h2 style="color: greenyellow" align="center">{{ Session::get('Message') }}</h2>
            
         <input type="text" class="form-control" id="registration_number" name="IdCardResult" placeholder="Student ID">

                </div>

                 </div>

                   </div>

               <div class="form-button">
                    <button type="submit" class="btn btn-info">Search</button>
               </div>
         </form>
     </div>

 @endsection