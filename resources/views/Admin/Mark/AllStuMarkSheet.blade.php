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
<h3 style="text-align: center;">Student's Mark Sheet Create</h3> <br><br>
<div class="row">


<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/PlayAMarkSheetCreate') }}" class="btn btn-success" id="add">
  	<i class=""></i>Play - Provaty</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/PlayBMarkSheetCreate') }}" class="btn btn-success" id="add">
  	<i class=""></i>Play - Koroby</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/NuAMarkSheetCreate') }}" class="btn btn-success" id="add">
  	<i class=""></i>Nursary - Shovon</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/NuBMarkSheetCreate') }}" class="btn btn-success" id="add">
  	<i class=""></i>Nursary - Janani</a>
</div>
</div>


<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/OneAMarkSheetCreate') }}" class="btn btn-success" id="add">
    <i class=""></i>STD One Anamika</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/OneBMarkSheetCreate') }}" class="btn btn-success" id="add">
    <i class=""></i>STD One Golap</a>
</div>
</div>
<!--
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/KgAMarkSheetCreate') }}" class="btn btn-success" id="add">
  	<i class=""></i>KG /A</a>
</div>
</div>
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/KgBMarkSheetCreate') }}" class="btn btn-success" id="add">
    <i class=""></i>KG / B</a>
</div>
</div>

-->
</div>
<br> <br>
<div class="row">



<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/TwoAMarkSheetCreate') }}" class="btn btn-success" id="add">
    <i class=""></i>STD Two Bilash</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/TwoBMarkSheetCreate') }}" class="btn btn-success" id="add">
    <i class=""></i>STD Two Tagor</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/ThreeAMarkSheetCreate') }}" class="btn btn-success" id="add">
    <i class=""></i>STD Three Section A</a>
</div>
</div>

<div class="row">
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/FourAMarkSheetCreate') }}" class="btn btn-success" id="add">
    <i class=""></i>STD Four Section A</a>
</div>
</div>
<!--
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/FourBMarkSheetCreate') }}" class="btn btn-success" id="add">
    <i class=""></i>FOUR / B</a>
</div>
</div>  -->

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/FiveAMarkSheetCreate') }}" class="btn btn-success" id="add">
    <i class=""></i>STD Five Section A</a>
</div>
</div>
<!--
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/ThreeBMarkSheetCreate') }}" class="btn btn-success" id="add">
    <i class=""></i>THREE / B</a>
</div>
</div>
</div>
-->
<br>
<br>

<!--
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/FiveBMarkSheetCreate') }}" class="btn btn-success" id="add">
    <i class=""></i>FIVE / B</a>
</div>
</div>   -->




</div>
 <br><br>


 @endsection