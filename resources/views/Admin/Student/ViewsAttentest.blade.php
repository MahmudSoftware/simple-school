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

<h3 style="text-align: center;">Student List</h3> <br>
<div class="row">


<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/PlayA') }}" class="btn btn-success" id="add">
    <i class=""></i>Play / A</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/PlayB') }}" class="btn btn-success" id="add">
    <i class=""></i>Play / B</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/NuA') }}" class="btn btn-success" id="add">
    <i class=""></i>NU / A</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/NuB') }}" class="btn btn-success" id="add">
    <i class=""></i>NU / B</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/KgA') }}" class="btn btn-success" id="add">
    <i class=""></i>KG / A</a>
</div>
</div>
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/KgB') }}" class="btn btn-success" id="add">
    <i class=""></i>KG / B</a>
</div>
</div>
</div>
<br> <br>
<div class="row">


<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/OneA') }}" class="btn btn-success" id="add">
    <i class=""></i>ONE / A</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/OneB') }}" class="btn btn-success" id="add">
    <i class=""></i>ONE / B</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/TwoA') }}" class="btn btn-success" id="add">
    <i class=""></i>TWO / A</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/TwoB') }}" class="btn btn-success" id="add">
    <i class=""></i>TWO / B</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/ThreeA') }}" class="btn btn-success" id="add">
    <i class=""></i>THREE /  A</a>
</div>
</div>
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/ThreeB') }}" class="btn btn-success" id="add">
    <i class=""></i>THREE / B</a>
</div>
</div>
</div>
<br>
<br>
<div class="row">
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/FourA') }}" class="btn btn-success" id="add">
    <i class=""></i>FOUR / A</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/FourB') }}" class="btn btn-success" id="add">
    <i class=""></i>FOUR / B</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/FiveA') }}" class="btn btn-success" id="add">
    <i class=""></i>FIVE / A</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/FiveB') }}" class="btn btn-success" id="add">
    <i class=""></i>FIVE / B</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/AllStudentList') }}" class="btn btn-success" id="add">
    <i class=""></i>ALL STUDENT</a>
</div>
</div>


</div>
 <br><br>


 @endsection