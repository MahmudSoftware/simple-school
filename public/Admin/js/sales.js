$(document).ready(function () {
	function total(){
		var total_price = 0;
		$('table tbody .subTotal').each(function(){
			total_price += parseFloat($(this).html());
		});
		total_price = Math.round(total_price);
		$("#totSubTotal").val(total_price);

		var dscType=$('input[name=dsc_type]:checked').val();
		var dsc=parseInt($('.discountCal').val());
		if(dscType=='amount'){
			var totPayable = total_price - dsc;
		}else{
			var totPayable = total_price - parseInt((total_price*dsc) / 100);
		}
		totPayable = !isNaN(totPayable) ? totPayable : total_price;
		$("#totPayable").val(Math.round(totPayable));

		var paid=parseInt($('.paidAmount').val());
		var due = parseInt(totPayable - paid);
		due = !isNaN(due) ? due : total_price;
		$("#due").val(Math.round(due));
	}
	total();
	
	var cart = function () {
		var req = $.ajax({
			method: "GET",
			url: "table.php"
		});
		req.done(function (msg) {
			$("#salesID").html(msg);
			total();
		});
	}
	cart();

	$("#hiddenItems").hide();

	function countInstallment(){
		if($('#hiddenItems').is(":visible")){			
			var installmentNo= $("#installmentNo").val();
			var dueAmount=$("#due").val();
			var result= dueAmount/installmentNo;
			$("#installmentAmount").val(result.toFixed(2));
		}
	}

	$(document).on('change','input[type=radio]',function(){
		total();
		countInstallment();
	});

	$("#uu").on("click", function () {
		var Search = $("#search").val();
		var req = $.ajax({
			method: "GET",
			url: "search.php",
			data: {name: Search, hh: "tert"}
		});
		req.done(function (msg) {
			$("#iiii").text(msg);
			cart();
			total();
			countInstallment();
		})
	});
	$(document).on('click','#deleteSaleBtn',function(){
		var id= $(this).val();
		$.ajax({
			method: "POST",
			url: "delete_cart.php",
			data: {id:id},
			success:function(data){
				cart();
				total();
				countInstallment();
			}
		});
	});

	$(document).on('keyup change','.discountCal',function(){
		var dsc_am = $(this).val();
		var dscType = $('input[name=dsc_type]:checked').val();
		var total_price = $('input[name=totSubTotal]').val();
		var duePr = $('input[name=duePr]').val();

		if(dscType == 'parcent')
		{
			var dsc_amount = parseFloat((dsc_am/100)*total_price);
			var totPayables = parseFloat(total_price - dsc_amount);
			if(totPayables > total_price)
			{
				$('#totPayable').val(Math.round(total_price));
				$('#due').val(Math.round(duePr));
				$('.discountCal').val(0);
			}
			else
			{
				$('#totPayable').val(Math.round(totPayables));
				$('#due').val(Math.round(totPayables));
			}
		}
		else
		{
			var dsc_amn = parseFloat(total_price - dsc_am);
			if(totPayables > total_price)
			{
				$('#totPayable').val(Math.round(dsc_amn));
				$('#due').val(Math.round(dsc_amn));
				$('.discountCal').val(0);
			}
			else
			{
				$('#totPayable').val(Math.round(dsc_amn));
				$('#due').val(Math.round(dsc_amn));
			}
		}
		countInstallment();
	});

	$(document).on('keyup change','.paidAmount',function(){
		var paid_amount = $(this).val();
		paid_amount = (paid_amount) ? parseFloat(paid_amount) : 0;
		var payable = $('#totPayable').val();
		payable=parseFloat(payable);
		if( payable >= paid_amount ){
			var result=payable - paid_amount;
			var tot = parseFloat(result);
			$('#return').val(0);
			$('#due').val(tot);
		} else {		
			var result= payable - paid_amount;
			var tot_ret = Math.round(parseFloat(result));
			$('#return').val(Math.abs(tot_ret));
			$('#due').val(0);
		}

		countInstallment();

	});


	$(document).on('click','.Report',function(){
		var link = 'invoice_print.php';
		var mywindow = window.open(link,'_blank');
		mywindow.print();
	});


	$(document).on('change','select[name=saleType]',function(){
		var saleType= $(this).val();
		if(saleType=="installment"){
			$("#hiddenItems").show();
			var dueAmount=$("#due").val();
			$("#installmentNo").val(1);
			$("#installmentAmount").val(dueAmount);
		}else{
			$("#hiddenItems").hide();
			$("#installmentNo").val('');
			$("#installmentAmount").val('');
			$("#installmentDate").val('');
		}

	});
	
	$(document).on('change','#installmentNo',function(){
		countInstallment();
	});

//                $("#gg").on("click", function () {
//                    var Submit = $("#submit").val();
//                    var req = $.ajax({
//                        method: "GET",
//                        url: "search.php",
//                        data: {name: Submit, gg: "tert"}
//                    });
//                    req.done(function (msg) {
//                        //$("#iiii").text(msg);
//                    })
//                });
});