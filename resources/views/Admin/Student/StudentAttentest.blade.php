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

<h3 style="text-align: center;">Student Attentest</h3> <br>
<div class="row">


<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/PlayAtents') }}" class="btn btn-success" id="add">
    <i class=""></i>Play - Provaty</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/PlayBAtents') }}" class="btn btn-success" id="add">
    <i class=""></i>Play/ B</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/NuAAtents') }}" class="btn btn-success" id="add">
    <i class=""></i>NU / A</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/NuBAtents') }}" class="btn btn-success" id="add">
    <i class=""></i>NU / B</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/KgAAtents') }}" class="btn btn-success" id="add">
    <i class=""></i>KG /A</a>
</div>
</div>
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/KgBAtents') }}" class="btn btn-success" id="add">
    <i class=""></i>KG / B</a>
</div>
</div>
</div>
<br> <br>
<div class="row">


<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/OneA') }}" class="btn btn-success" id="add">
    <i class=""></i>ONE/ AAtents</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/OneBAtents') }}" class="btn btn-success" id="add">
    <i class=""></i>ONE/ B</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/TwoAAtents') }}" class="btn btn-success" id="add">
    <i class=""></i>TWO / A</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/TwoBAtents') }}" class="btn btn-success" id="add">
    <i class=""></i>TWO / B</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/ThreeAAtents') }}" class="btn btn-success" id="add">
    <i class=""></i>THREE /  A</a>
</div>
</div>
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/ThreeBAtents') }}" class="btn btn-success" id="add">
    <i class=""></i>THREE / B</a>
</div>
</div>
</div>
<br>
<br>
<div class="row">
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/FourAAtents') }}" class="btn btn-success" id="add">
    <i class=""></i>FOUR / A</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/FourBAtents') }}" class="btn btn-success" id="add">
    <i class=""></i>FOUR / B</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/FiveAAtents') }}" class="btn btn-success" id="add">
    <i class=""></i>FIVE / A</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/FiveBAtents') }}" class="btn btn-success" id="add">
    <i class=""></i>FIVE / B</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/AllStudentListAtents') }}" class="btn btn-success" id="add">
    <i class=""></i>ALL STUDENT</a>
</div>
</div>


</div>
 <br><br>


 @endsection