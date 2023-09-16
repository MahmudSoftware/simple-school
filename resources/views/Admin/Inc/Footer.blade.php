  <script src="{{url('public/Admin/js/')}}/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{url('public/Admin/js/')}}/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{url('public/Admin/js/')}}/fastclick.js"></script>
<!-- NProgress -->
<script src="{{url('public/Admin/js/')}}/nprogress.js"></script>
<!-- Chart.js -->
<script src="{{url('public/Admin/js/')}}/Chart.min.js"></script>
<!-- gauge.js -->
<script src="{{url('public/Admin/js/')}}/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="{{url('public/Admin/js/')}}/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="{{url('public/Admin/js/')}}/icheck.min.js"></script>
<!-- Skycons -->
<script src="{{url('public/Admin/js/')}}/skycons.js"></script>
<!-- Flot -->
<script src="{{url('public/Admin/js/')}}/jquery.flot.js"></script>
<script src="{{url('public/Admin/js/')}}/jquery.flot.pie.js"></script>
<script src="{{url('public/Admin/js/')}}/jquery.flot.time.js"></script>
<script src="{{url('public/Admin/js/')}}/jquery.flot.stack.js"></script>
<script src="{{url('public/Admin/js/')}}/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="{{url('public/Admin/js/')}}/jquery.flot.orderBars.js"></script>
<script src="{{url('public/Admin/js/')}}/jquery.flot.spline.min.js"></script>
<script src="{{url('public/Admin/js/')}}/curvedLines.js"></script>
<!-- DateJS -->
<script src="{{url('public/Admin/js/')}}/date.js"></script>
<!-- JQVMap -->
<script src="{{url('public/Admin/js/')}}/jquery.vmap.js"></script>
<script src="{{url('public/Admin/js/')}}{{url('public/Admin/js/')}}/jquery.vmap.world.js"></script>
<script src="{{url('public/Admin/js/')}}/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{url('public/Admin/js/')}}/moment.min.js"></script>
<script src="{{url('public/Admin/js/')}}/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="{{url('public/Admin/js/')}}/custom.min.js"></script>s

<!-- Custom Scripts -->
<script src="{{url('public/Admin/js/')}}/purchase.js"></script>
<script src="{{url('public/Admin/js/')}}/sales.js"></script>ss
<script src="{{url('public/Admin/js/')}}/barcode.js"></script>
<script type="text/javascript">
        $('.date-picker').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_4",
//        startDate: moment(),

locale: {
            format: 'DD-MMM-YYYY', // --------Here
    }
//        endDate: moment()
}, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
});
        $('.date-picker').val('');
</script>


    </body>
</html>