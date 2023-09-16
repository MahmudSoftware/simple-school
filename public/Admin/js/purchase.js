$(document).ready(function () {
	var cart = function () {
		var req = $.ajax({
			method: "GET",
			url: "cart_purchase.php"
		});
		req.done(function (msg) {
			$("#ID").html(msg);
		});
	}
	cart();

	$(document).on('keyup change',"#brand,#category,#model,#color,#size",function(){
		var bra = $("#brand").val();
		var cat = " "+ $("#category").val();
		var mod = " "+$("#model").val();
		var col = " "+ $("#color").val();
		var siz = " "+ $("#size").val();
		var res = bra.concat(cat,mod,col,siz);
		$(".productDescription").val(res);
	});

	$(document).on('click','#addBtn',function(e){
		e.preventDefault();
		var formData=new FormData($(".purchaseForm")[0]);
		var req = $.ajax({
			method: "POST",
			url: "add_cart_purchase.php",
			data: formData,
        	processData: false, // tell jQuery not to set contentType
			contentType: false, // tell jQuery not to process the data
			success:function(data){
				$('#msg').text(data);
				$('.repetedField').find("input[type=text]").val("");
			}
		});
		req.done(function (msg) {
			cart();
		});
	});
	$(document).on('click','#deleteBtn',function(){
		var id= $(this).val();
		$.ajax({
			method: "POST",
			url: "delete_cart_purchase.php",
			data: {id:id},
			success:function(data){
				console.log(data);
				cart();
			}
		});
	});
	
});
