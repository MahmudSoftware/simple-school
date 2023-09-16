 @extends('Admin.Master')
 @section('MainContent')
  <style>
  	.ntcenter{
  		text-align: center;
  	}
  	.nmtop{
  		margin-top: 100px;
  	}
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


   <div class="container nmtop">
   	<div class="row">

   		<div class="col-md-12  ntcenter">
        <p class="">Date : {{ $Notice->Date }}</p>
   			<h2>{{ $Notice->NiticeTitle }} </h2>
   		</div>
     </div>
 </div>
   		 <br>
   		 <div class="container">
   		<div class="col-md-12 ntcenter">
   			<p>{{ $Notice->Description }} </p>
   		</div
   	</div>
   </div>
   </div>

  @endsection
