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

<h3 style="text-align: center;">Student's Mark Sheet View</h3> <br><br>
<div class="row">


<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/PlayAMarkSheetView') }}" class="btn btn-success" id="add">
    <i class=""></i>Play - Provaty</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/PlayBMarkSheetView') }}" class="btn btn-success" id="add">
    <i class=""></i>Play - Koroby</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/NuAMarkSheetView') }}" class="btn btn-success" id="add">
    <i class=""></i>Nursary - Shovon</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/NuBMarkSheetView') }}" class="btn btn-success" id="add">
    <i class=""></i>Nursary - Janani</a>
</div>
</div>



<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/OneAMarkSheetView') }}" class="btn btn-success" id="add">
    <i class=""></i>STD One Anamika</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/OneBMarkSheetView') }}" class="btn btn-success" id="add">
    <i class=""></i>STD One Golap</a>
</div>
</div>

<!--  
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/KgAMarkSheetView') }}" class="btn btn-success" id="add">
    <i class=""></i>KG /A</a>
</div>
</div>
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/KgBMarkSheetView') }}" class="btn btn-success" id="add">
    <i class=""></i>KG / B</a>
</div>
</div>
-->

</div>
<br> <br>
<div class="row">


<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/TwoAMarkSheetView') }}" class="btn btn-success" id="add">
    <i class=""></i>STD Two Bilash</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/TwoBMarkSheetView') }}" class="btn btn-success" id="add">
    <i class=""></i>STD Two Tagor</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/ThrAMarkSheetView') }}" class="btn btn-success" id="add">
    <i class=""></i>STD Three Section A</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/FourAMarkSheetView') }}" class="btn btn-success" id="add">
    <i class=""></i>STD Four Section A</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/FiveAMarkSheetView') }}" class="btn btn-success" id="add">
    <i class=""></i>STD Five Section A</a>
</div>
</div>
<!--
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/ThrBMarkSheetView') }}" class="btn btn-success" id="add">
    <i class=""></i>THREE / B</a>
</div>
</div>
  -->
</div>
<br>
<br>
<div class="row">

<!-- 
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/FourBMarkSheetView') }}" class="btn btn-success" id="add">
    <i class=""></i>FOUR / B</a>
</div>
</div>


<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/FiveBMarkSheetView') }}" class="btn btn-success" id="add">
    <i class=""></i>FIVE / B</a>
</div>
</div>


 -->

</div>
 <br><br>


 @endsection