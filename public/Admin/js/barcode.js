$(document).ready(function () {
	// var cart = function () {
	// 	var req = $.ajax({
	// 		method: "GET",
	// 		url: "table.php",
	//	 	data: {purpose: "viewBarcodeCart"},
	// 	});
	// 	req.done(function (msg) {
	// 		$("#salesID").html(msg);
	// 	});
	// }
	// cart();
	$(document).on('change','#brand',function(){
		var brand=$(this).val();
		$.ajax({
			method: "GET",
			url: "barcode-worker.php",
			data: {brand: brand, purpose: "addCategory"},
			success:function(categories){
				$('#category').empty();
				$('#category').html(categories);

				$('#model').empty();
				$('#productDescription').val('');
				$('#salePrice').val('');
				$('#stockQty').val('');
				$('#qty').val('');
			}
		});
	});
	$(document).on('change','#category',function(){
		var brand=$('#brand').val();
		var category=$(this).val();
		$.ajax({
			method: "GET",
			url: "barcode-worker.php",
			data: {brand: brand, category: category, purpose: "addModel"},
			success:function(models){
				$('#model').empty();
				$('#model').html(models);

				$('#productDescription').val('');
				$('#salePrice').val('');
				$('#stockQty').val('');
				$('#qty').val('');
			}
		});
	});
	$(document).on('change','#model',function(){
		var brand=$('#brand').val();
		var category=$('#category').val();
		var model=$(this).val();
		$.ajax({
			method: "GET",
			url: "barcode-worker.php",
			data: {brand: brand, category: category,model: model, purpose: "addInfo"},
			success:function(data){
				info=JSON.parse(data);
				$('#productDescription').val(info.product_description);
				$('#salePrice').val(info.sales_price);
				$('#stockQty').val(info.quantity);

				$('#qty').val('');
			}
		});
	});
	$(document).on('click','.addBarcode',function(){

		var model = $('#model').val();
		var productDescription = $('[name="productDescription"]').val();
		var salePrice = $('[name="salePrice"]').val();
		var qty = $('[name="qty"]').val();
		var company = $('#company').is(':checked');
		var page = $('input[name=optionsRadios]:checked').val();

		var dataString = 'productDescription='+productDescription+'&salePrice='+salePrice+'&model='+model+'&qty='+qty+'&company='+company+'&page='+page;
		$.ajax({
			type:'post',
			url:'save_barcode_info.php',
			data:dataString,
			success:function(res){
				$('#barcodeInformation').html(res);
			}
		});
	});
	$(document).on('click','.resetBtn',function(){
		$('#category').empty();
		$('#model').empty();
	});
});




function multiply()
{
    var onExmon = Number(document.getElementById('onExmon').value);
    var twExmon = Number(document.getElementById('twExmon').value);
    var FiExmon = Number(document.getElementById('FiExmon').value);

    var Totalmarkon = onExmon+twExmon+FiExmon;
    var AvOfTotalmarkon = Totalmarkon/3;
    document.getElementById('TotalOn').value=Totalmarkon;
    document.getElementById('AvgOn').value=AvOfTotalmarkon;
    



    var onExmtwo = Number(document.getElementById('onExmtwo').value);
    var twExmtwo = Number(document.getElementById('twExmtwo').value);
    var FiExmtwo = Number(document.getElementById('FiExmtwo').value);

    var Totalmarktwo = onExmtwo+twExmtwo+FiExmtwo;
    var AvOfTotalmarktwo = Totalmarktwo/3;
    document.getElementById('Totaltwo').value=Totalmarktwo;
    document.getElementById('AvgOntwo').value=AvOfTotalmarktwo;





    var onExmThr = Number(document.getElementById('onExmThr').value);
    var twExmThr = Number(document.getElementById('twExmThr').value);
    var FiExmThr = Number(document.getElementById('FiExmThr').value);

    var TotalmarkTh = onExmThr+twExmThr+FiExmThr;
    var AvOfTotalmarkTh = TotalmarkTh/3;

    document.getElementById('TotalThr').value=TotalmarkTh;
    document.getElementById('AvgThr').value=AvOfTotalmarkTh;



    var onExmFou = Number(document.getElementById('onExmFou').value);
    var twExmFou = Number(document.getElementById('twExmFou').value);
    var FiExmFou = Number(document.getElementById('FiExmFou').value);

    var Totalmarkfou = onExmFou+twExmFou+FiExmFou;
    var AvOfTotalmarkFo = Totalmarkfou/3;
    document.getElementById('TotalFou').value=Totalmarkfou;
    document.getElementById('AvgFou').value=AvOfTotalmarkFo;




    var onExmFive = Number(document.getElementById('onExmFive').value);
    var twExmFive = Number(document.getElementById('twExmFive').value);
    var FiExmfive = Number(document.getElementById('FiExmfive').value);

    var TotalmarkFive = onExmFive+twExmFive+FiExmfive;
    var AvOfTotalmarkFive = TotalmarkFive/3;
    document.getElementById('TotalFive').value=TotalmarkFive;
    document.getElementById('AvgFive').value=AvOfTotalmarkFive;




    var onExmSix = Number(document.getElementById('onExmSix').value);
    var twExmSix = Number(document.getElementById('twExmSix').value);
    var FiExmSix = Number(document.getElementById('FiExmSix').value);

    var TotalmarkSix = onExmSix+twExmSix+FiExmSix;

    var AvOfTotalmarkSix = TotalmarkSix/3;
    document.getElementById('TotalSix').value=TotalmarkSix;
    document.getElementById('AvgSix').value=AvOfTotalmarkSix;









    var onExmSev = Number(document.getElementById('onExmSev').value);
    var twExmSev = Number(document.getElementById('twExmSev').value);
    var FiExmSev = Number(document.getElementById('FiExmSev').value);

    var TotalmarkSev = onExmSev+twExmSev+FiExmSev;
    var AvOfTotalmarkSev = TotalmarkSev/3;
    document.getElementById('TotalSev').value=TotalmarkSev;
    document.getElementById('AvgSev').value=AvOfTotalmarkSev;



    var onExmEig = Number(document.getElementById('onExmEig').value);
    var twExmEig = Number(document.getElementById('twExmEig').value);
    var FiExmEig = Number(document.getElementById('FiExmEig').value);

    var TotalmarkEig = onExmEig+twExmEig+FiExmEig;
    var AvOfTotalmarkEig = TotalmarkEig/3;
    document.getElementById('TotalEig').value=TotalmarkEig;
    document.getElementById('AvgEig').value=AvOfTotalmarkEig;






    var onExmNin = Number(document.getElementById('onExmNin').value);
    var twExmNin = Number(document.getElementById('twExmNin').value);
    var FiExmNin = Number(document.getElementById('FiExmNin').value);

    var TotalmarkNine = onExmNin+twExmNin+FiExmNin;
    var AvOfTotalmarkNine = TotalmarkNine/3;
    document.getElementById('TotalNin').value=TotalmarkNine;
    document.getElementById('AvgNin').value=AvOfTotalmarkNine;




    var onExmTen = Number(document.getElementById('onExmTen').value);
    var twExmTen = Number(document.getElementById('twExmTen').value);
    var FiExmTen = Number(document.getElementById('FiExmTen').value);

    var TotalmarkTen = onExmTen+twExmTen+FiExmTen;
    var AvOfTotalmarkTen = TotalmarkTen/3;
    document.getElementById('TotalTen').value=TotalmarkTen;
    document.getElementById('AvgTen').value=AvOfTotalmarkTen;





var TotalFirst = onExmon + onExmtwo + onExmThr + onExmFou + onExmFive + onExmSix + onExmSev +onExmEig + onExmNin + onExmTen;
   
    document.getElementById('FSTotalMon').value=TotalFirst;
    



var TotalSecond = twExmon+twExmtwo+twExmThr+twExmFou+twExmFive+twExmSix+twExmSev+twExmEig+twExmNin+twExmTen

    document.getElementById('SSTotalMon').value=TotalSecond;
    
    var TotalFinal = FiExmon+FiExmtwo+FiExmThr+FiExmFou+FiExmfive+FiExmSix+FiExmSev+FiExmEig+FiExmNin+FiExmTen;

    document.getElementById('FITotalMon').value=TotalFinal;
      

}     



function multiplySalary()
{
    var a = Number(document.getElementById('Uniton').value);
    var b = Number(document.getElementById('Priceon').value);
    var d = a*b;
    document.getElementById('TotalPriceon').value=d;


    var aa = Number(document.getElementById('Unittw').value);
    var bb = Number(document.getElementById('Pricetw').value);
    var dd = aa*bb;
    document.getElementById('TotalPricetw').value=dd;

     var aaa = Number(document.getElementById('UnitPriceth').value);
    var bbb = Number(document.getElementById('Quantityth').value);
    var ddd = aaa*bbb;
    document.getElementById('Totalth').value=ddd;



     var aaaa = Number(document.getElementById('UnitPricefo').value);
    var bbbb = Number(document.getElementById('Quantityfo').value);
    var dddd = aaaa*bbbb;
    document.getElementById('Totalfo').value=dddd;

     var aaaaa = Number(document.getElementById('UnitPricefi').value);
    var bbbbb = Number(document.getElementById('Quantityfi').value);
    var ddddd = aaaaa*bbbbb;
    document.getElementById('TotalFive').value=ddddd;

    var totalprr = d+dd+ddd+dddd+ddddd;
     document.getElementById('TotalCPrices').value=totalprr;
} 
   
