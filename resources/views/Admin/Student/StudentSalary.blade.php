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

<h3 style="text-align: center;">Student's Fee</h3> <br>
<div class="row">


<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/PlayASalary') }}" class="btn btn-success" id="add">
    <i class=""></i>Play - Provaty</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/PlayBSalary') }}" class="btn btn-success" id="add">
    <i class=""></i>Play - Koroby</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/NuASalary') }}" class="btn btn-success" id="add">
    <i class=""></i>Nursary - Shovon</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/NuBSalary') }}" class="btn btn-success" id="add">
    <i class=""></i>Nursary - Janani</a>
</div>
</div>



<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/OneASalary') }}" class="btn btn-success" id="add">
    <i class=""></i>STD One Anamika</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/OneBSalary') }}" class="btn btn-success" id="add">
    <i class=""></i>STD One Golap</a>
</div>
</div>

<!--  
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/KgASalary') }}" class="btn btn-success" id="add">
    <i class=""></i>KG /A</a>
</div>
</div>


<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/KgBSalary') }}" class="btn btn-success" id="add">
    <i class=""></i>KG / B</a>
</div>
</div>
-->

</div>
<br> <br>
<div class="row">



<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/TwoASalary') }}" class="btn btn-success" id="add">
    <i class=""></i>STD Two Bilash</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/TwoBSalary') }}" class="btn btn-success" id="add">
    <i class=""></i>STD Two Tagor</a>
</div>
</div>

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/ThreeASalary') }}" class="btn btn-success" id="add">
    <i class=""></i>STD Three Section A</a>
</div>
</div>

<div class="row">
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/FourASalary') }}" class="btn btn-success" id="add">
    <i class=""></i>STD Four Section A</a>
</div>
</div>
<!-- 
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/FourBSalary') }}" class="btn btn-success" id="add">
    <i class=""></i>FOUR / B</a>
</div>
</div>
 -->

<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/FiveASalary') }}" class="btn btn-success" id="add">
    <i class=""></i>STD Five Section A</a>
</div>
</div>
<!-- 
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/ThreeBSalary') }}" class="btn btn-success" id="add">
    <i class=""></i>THREE / B</a>
</div>
</div>
 -->

</div>
<br>
<br>

<!-- 
<div class="col-sm-2">
<div class="actions">
  <a href="{{ url('/FiveBSalary') }}" class="btn btn-success" id="add">
    <i class=""></i>FIVE / B</a>
</div>
</div>

 -->


</div>
 <br><br>


 @endsection