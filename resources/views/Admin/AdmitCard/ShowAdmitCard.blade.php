 @extends('Admin.Master')
 @section('MainContent')
<br> <br><br>
<div class="container">
	<div class="row">
    <h4 class="heeee">ADARSHA PRE-CADET SCHOOL </h4>
<P class="heeee"> Hospital Mor, Gobindaganj, Gaibandha</P>
<P class="heeee">Phone: 01911539893, 01792984747 &nbsp;  </P> <br>>

</div>
<div class="row" style="text-align: center;">
	<div class="col-md-6">
		Student ID:
	</div>
	<div class="col-md-6">
		<img src="{{ $AdmitCard->Photo }}" alt="" style="width: 40px; height: 40px;">
	</div>
</div>
<br>
<div class="row" style="text-align: center;">
	<div class="col-md-6">
		Student Name:
	</div>
	<div class="col-md-6">
		Roll: 
	</div>
</div>
<br>
<div class="row" style="text-align: center;">
	<div class="col-md-6">
		Mother's Name:
	</div>
	<div class="col-md-6">
		Father's Name: 
	</div>
</div>
<br>
<div class="row" style="text-align: center;">
	<div class="col-md-6">
		Class:
	</div>
	<div class="col-md-6">
		Exam Type: 
	</div>
</div>

</div>

<br><br>
 @endsection