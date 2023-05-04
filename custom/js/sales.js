var manageOrderTable;

$(document).ready(function() {

	var divRequest = $(".div-request").text();

	// top nav bar 
	$("#navOrder").addClass('active');

	if(divRequest == 'add')  {
		// add order	
		// top nav child bar 
		$('#topNavAddOrder').addClass('active');	

		// order date picker
		$("#orderDate").datepicker({dateFormat: 'dd/mm/yy'});

		// create order form function
		$("#createOrderForm").unbind('submit').bind('submit', function() {
			var form = $(this);

			$('.form-group').removeClass('has-error').removeClass('has-success');
			$('.text-danger').remove();
				
			var orderDate = $("#orderDate").val();
			var due = $("#due").val();
			var paid = $("#paid").val();
			var discount = $("#discount").val();
			var paymentType = $("#paymentType").val();
			var paymentStatus = $("#paymentStatus").val();		

			// form validation 
			if(orderDate == "") {
				$("#orderDate").after('<p class="text-danger"> The Order Date field is required </p>');
				$('#orderDate').closest('.form-group').addClass('has-error');
			} else {
				$('#orderDate').closest('.form-group').addClass('has-success');
			} // /else

		if(word == "") {
				$("#word").after('<p class="text-danger"> The Order Date field is required </p>');
				$('#word').closest('.form-group').addClass('has-error');
			} else {
				$('#word').closest('.form-group').addClass('has-success');
			} // /else

		

			if(due == "") {
				$("#due").after('<p class="text-danger"> The Contact field is required </p>');
				$('#due').closest('.form-group').addClass('has-error');
			} else {
				$('#clientContact').closest('.form-group').addClass('has-success');
			} // /else

			if(paid == "") {
				$("#paid").after('<p class="text-danger"> The Paid field is required </p>');
				$('#paid').closest('.form-group').addClass('has-error');
			} else {
				$('#paid').closest('.form-group').addClass('has-success');
			} // /else

			if(nn == "") {
				$("#nn").after('<p class="text-danger"> The Paid field is required </p>');
				$('#nn').closest('.form-group').addClass('has-error');
			} else {
				$('#nn').closest('.form-group').addClass('has-success');
			} // /else
				
			
			if(paymentType == "") {
				$("#paymentType").after('<p class="text-danger"> The Payment Type field is required </p>');
				$('#paymentType').closest('.form-group').addClass('has-error');
			} else {
				$('#paymentType').closest('.form-group').addClass('has-success');
			} // /else

			if(paymentStatus == "") {
				$("#paymentStatus").after('<p class="text-danger"> The Payment Status field is required </p>');
				$('#paymentStatus').closest('.form-group').addClass('has-error');
			} else {
				$('#paymentStatus').closest('.form-group').addClass('has-success');
			} // /else


			// array validation
			var productName = document.getElementsByName('productName[]');				
			var validateProduct;
			for (var x = 0; x < productName.length; x++) {       			
				var productNameId = productName[x].id;	    	
		    if(productName[x].value == ''){	    		    	
		    	$("#"+productNameId+"").after('<p class="text-danger"> Product Name Field is required!! </p>');
		    	$("#"+productNameId+"").closest('.form-group').addClass('has-error');	    		    	    	
	      } else {      	
		    	$("#"+productNameId+"").closest('.form-group').addClass('has-success');	    		    		    	
	      }          
	   	} // for

		
		
		
	   	for (var x = 0; x < productName.length; x++) {       						
		    if(productName[x].value){	    		    		    	
		    	validateProduct = true;
	      } else {      	
		    	validateProduct = false;
	      }          
	   	} // for       		   	
	   	
		
			var product1Name = document.getElementsByName('product1Name[]');				
			var validateProduct2;
			for (var x = 0; x < product1Name.length; x++) {
				var product1NameId = product1Name[x].id;
		    if(product1Name[x].value == ''){
		    	$("#"+product1NameId+"").after('<p class="text-danger"> Product Name Field is required!! </p>');
		    	$("#"+product1NameId+"").closest('.form-group').addClass('has-error');
	      } else {
		    	$("#"+product1NameId+"").closest('.form-group').addClass('has-success');
	      }
	   	} // for

	   	for (var x = 0; x < product1Name.length; x++) {
		    if(product1Name[x].value){
		    	validateProduct2 = true;
	      } else {
		    	validateProduct2 = false;
	      }
	   	} // for



	var product2Name = document.getElementsByName('product2Name[]');				
			var validateProduct3;
			for (var x = 0; x < product2Name.length; x++) {
				var product2NameId = product2Name[x].id;
		    if(product2Name[x].value == ''){
		    	$("#"+product2NameId+"").after('<p class="text-danger"> Product Name Field is required!! </p>');
		    	$("#"+product2NameId+"").closest('.form-group').addClass('has-error');
	      } else {
		    	$("#"+product2NameId+"").closest('.form-group').addClass('has-success');
	      }
	   	} // for

	   	for (var x = 0; x < product2Name.length; x++) {
		    if(product2Name[x].value){
		    	validateProduct3 = true;
	      } else {
		    	validateProduct3 = false;
	      }
	   	} // for



		
		
		
	   	var quantity = document.getElementsByName('quantity[]');		   	
	   	var validateQuantity;
	   	for (var x = 0; x < quantity.length; x++) {       
	 			var quantityId = quantity[x].id;
		    if(quantity[x].value == ''){	    	
		    	$("#"+quantityId+"").after('<p class="text-danger"> Product Name Field is required!! </p>');
		    	$("#"+quantityId+"").closest('.form-group').addClass('has-error');	    		    		    	
	      } else {      	
		    	$("#"+quantityId+"").closest('.form-group').addClass('has-success');	    		    		    		    	
	      } 
	   	}  // for

	   	for (var x = 0; x < quantity.length; x++) {       						
		    if(quantity[x].value){	    		    		    	
		    	validateQuantity = true;
	      } else {      	
		    	validateQuantity = false;
	      }          
	   	} // for       	
	   	

			if(orderDate  && paid && word && nn && discount && paymentType && paymentStatus) {
				if(validateProduct2 == true &&  validateProduct3 == true &&  validateProduct == true && validateQuantity == true) {
					// create order button
					// $("#createOrderBtn").button('loading');

					$.ajax({
						url : form.attr('action'),
						type: form.attr('method'),
						data: form.serialize(),					
						dataType: 'json',
						success:function(response) {
							console.log(response);
							// reset button
							$("#createOrderBtn").button('reset');
							
							$(".text-danger").remove();
							$('.form-group').removeClass('has-error').removeClass('has-success');

							if(response.success == true) {
								
								// create order button
								$(".success-messages").html('<div class="alert alert-success">'+
	            	'<button type="button" class="close" data-dismiss="alert">&times;</button>'+
	            	'<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
	            	' <br /> <br /> <a type="button" onclick="printOrder('+response.order_id+')" class="btn btn-primary"> <i class="glyphicon glyphicon-print"></i> Print </a>'+
	            	'<a href="orders.php?o=add" class="btn btn-default" style="margin-left:10px;"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Order </a>'+
	            	
	   		       '</div>');
								
							$("html, body, div.panel, div.pane-body").animate({scrollTop: '0px'}, 100);

							// disabled te modal footer button
							$(".submitButtonFooter").addClass('div-hide');
							// remove the product row
							$(".removeProductRowBtn").addClass('div-hide');
								
							} else {
								alert(response.messages);								
							}
						} // /response
					}); // /ajax
				} // if array validate is true
			} // /if field validate is true
			

			return false;
		}); // /create order form function	
	
	} else if(divRequest == 'manord') {
		// top nav child bar 
		$('#topNavManageOrder').addClass('active');

		manageOrderTable = $("#manageOrderTable").DataTable({
			'ajax': 'php_action/fetchOrder2.php',
			'order': []
		});		
					
	} else if(divRequest == 'editOrd') {
		$("#orderDate").datepicker();

		// edit order form function
		$("#editOrderForm").unbind('submit').bind('submit', function() {
			// alert('ok');
			var form = $(this);

			$('.form-group').removeClass('has-error').removeClass('has-success');
			$('.text-danger').remove();
				
			var orderDate = $("#orderDate").val();
			var clientName = $("#clientName").val();
			var paid = $("#paid").val();
			var discount = $("#discount").val();
			var paymentType = $("#paymentType").val();
			var paymentStatus = $("#paymentStatus").val();		

			// form validation 
			if(orderDate == "") {
				$("#orderDate").after('<p class="text-danger"> The Order Date field is required </p>');
				$('#orderDate').closest('.form-group').addClass('has-error');
			} else {
				$('#orderDate').closest('.form-group').addClass('has-success');
			} // /else

			if(clientName == "") {
				$("#clientName").after('<p class="text-danger"> The Client Name field is required </p>');
				$('#clientName').closest('.form-group').addClass('has-error');
			} else {
				$('#clientName').closest('.form-group').addClass('has-success');
			} // /else


			if(paid == "") {
				$("#paid").after('<p class="text-danger"> The Paid field is required </p>');
				$('#paid').closest('.form-group').addClass('has-error');
			} else {
				$('#paid').closest('.form-group').addClass('has-success');
			} // /else

			if(discount == "") {
				$("#discount").after('<p class="text-danger"> The Discount field is required </p>');
				$('#discount').closest('.form-group').addClass('has-error');
			} else {
				$('#discount').closest('.form-group').addClass('has-success');
			} // /else

			if(paymentType == "") {
				$("#paymentType").after('<p class="text-danger"> The Payment Type field is required </p>');
				$('#paymentType').closest('.form-group').addClass('has-error');
			} else {
				$('#paymentType').closest('.form-group').addClass('has-success');
			} // /else

			if(paymentStatus == "") {
				$("#paymentStatus").after('<p class="text-danger"> The Payment Status field is required </p>');
				$('#paymentStatus').closest('.form-group').addClass('has-error');
			} else {
				$('#paymentStatus').closest('.form-group').addClass('has-success');
			} // /else


			// array validation
			var productName = document.getElementsByName('productName[]');
			var validateProduct;
			for (var x = 0; x < productName.length; x++) {
				var productNameId = productName[x].id;
		    if(productName[x].value == ''){
		    	$("#"+productNameId+"").after('<p class="text-danger"> Product Name Field is required!! </p>');
		    	$("#"+productNameId+"").closest('.form-group').addClass('has-error');
	      } else {
		    	$("#"+productNameId+"").closest('.form-group').addClass('has-success');
	      }
	   	} // for

        	var product1Name = document.getElementsByName('product1Name[]');
			var validateProduct;
			for (var x = 0; x < product1Name.length; x++) {
				var product1NameId = product1Name[x].id;
		    if(product1Name[x].value == ''){
		    	$("#"+product1NameId+"").after('<p class="text-danger"> Product Name Field is required!! </p>');
		    	$("#"+product1NameId+"").closest('.form-group').addClass('has-error');
	      } else {
		    	$("#"+product1NameId+"").closest('.form-group').addClass('has-success');
	      }
	   	} // for

	   	for (var x = 0; x < product1Name.length; x++) {
		    if(product1Name[x].value){
		    	validateProduct2 = true;
	      } else {
		    	validateProduct2 = false;
	      }
	   	} // for




	   	for (var x = 0; x < productName.length; x++) {
		    if(productName[x].value){
		    	validateProduct = true;
	      } else {
		    	validateProduct = false;
	      }
	   	} // for

	   	var quantity = document.getElementsByName('quantity[]');		   	
	   	var validateQuantity;
	   	for (var x = 0; x < quantity.length; x++) {       
	 			var quantityId = quantity[x].id;
		    if(quantity[x].value == ''){	    	
		    	$("#"+quantityId+"").after('<p class="text-danger"> Product Name Field is required!! </p>');
		    	$("#"+quantityId+"").closest('.form-group').addClass('has-error');	    		    		    	
	      } else {      	
		    	$("#"+quantityId+"").closest('.form-group').addClass('has-success');	    		    		    		    	
	      } 
	   	}  // for

	   	for (var x = 0; x < quantity.length; x++) {       						
		    if(quantity[x].value){	    		    		    	
		    	validateQuantity = true;
	      } else {      	
		    	validateQuantity = false;
	      }          
	   	} // for       	
	   	

			if(orderDate && clientName && paid && discount && paymentType && paymentStatus) {
				if(validateProduct2 == validateProduct == true && validateQuantity == true) {
					// create order button
					// $("#createOrderBtn").button('loading');

					$.ajax({
						url : form.attr('action'),
						type: form.attr('method'),
						data: form.serialize(),					
						dataType: 'json',
						success:function(response) {
							console.log(response);
							// reset button
							$("#editOrderBtn").button('reset');
							
							$(".text-danger").remove();
							$('.form-group').removeClass('has-error').removeClass('has-success');

							if(response.success == true) {
								
								// create order button
								$(".success-messages").html('<div class="alert alert-success">'+
	            	'<button type="button" class="close" data-dismiss="alert">&times;</button>'+
	            	'<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +	            		            		            	
	   		       '</div>');
								
							$("html, body, div.panel, div.pane-body").animate({scrollTop: '0px'}, 100);

							// disabled te modal footer button
							$(".editButtonFooter").addClass('div-hide');
							// remove the product row
							$(".removeProductRowBtn").addClass('div-hide');
								
							} else {
								alert(response.messages);								
							}
						} // /response
					}); // /ajax
				} // if array validate is true
			} // /if field validate is true
			

			return false;
		}); // /edit order form function	
	} 	

}); // /documernt

function getProduct(row = null) {
	if(row) {
		var productId = $("#ff"+row).val();		
		
		if(productId == "") {
			$("#dd"+row).val("");
			$("#clientName"+row).val("");
			$("#gg"+row).val("");
			$("#ee"+row).val("");


			// remove check if product name is selected
			// var tableProductLength = $("#productTable tbody tr").length;			
			// for(x = 0; x < tableProductLength; x++) {
			// 	var tr = $("#productTable tbody tr")[x];
			// 	var count = $(tr).attr('id');
			// 	count = count.substring(3);

			// 	var productValue = $("#productName"+row).val()

			// 	if($("#productName"+count).val() == "") {					
			// 		$("#productName"+count).find("#changeProduct"+productId).removeClass('div-hide');	
			// 		console.log("#changeProduct"+count);
			// 	}											
			// } // /for

		} else {
			$.ajax({
				url: 'php_action/fetchSelectedProduct4.php',
				type: 'post',
				data: {productId : productId},
				dataType: 'json',
				success:function(response) {
					// setting the rate value into the rate input field
					
					$("#dd"+row).val(response.note);
					$("#xx"+row).val(response.gst);
$("#gg"+row).val(response.suplier_address);
					$("#ee"+row).val(response.suplier_contact);
									$("#clientName"+row).val(response.suplier_name);

					
					// check if product name is selected
					// var tableProductLength = $("#productTable tbody tr").length;					
					// for(x = 0; x < tableProductLength; x++) {
					// 	var tr = $("#productTable tbody tr")[x];
					// 	var count = $(tr).attr('id');
					// 	count = count.substring(3);

					// 	var productValue = $("#productName"+row).val()

					// 	if($("#productName"+count).val() != productValue) {
					// 		// $("#productName"+count+" #changeProduct"+count).addClass('div-hide');	
					// 		$("#productName"+count).find("#changeProduct"+productId).addClass('div-hide');								
					// 		console.log("#changeProduct"+count);
					// 	}											
					// } // /for
			
				} // /success
			}); // /ajax function to fetch the product data	
		}
				
	} else {
		alert('no row! please refresh the page');
	}
} // /select on product data














// print order function
function printOrder(orderId = null) {
	if(orderId) {		
			
		$.ajax({
			url: 'php_action/printOrder.php',
			type: 'post',
			data: {orderId: orderId},
			dataType: 'text',
			success:function(response) {
				
				var mywindow = window.open('', 'Stock Management System', 'height=400,width=600');
        mywindow.document.write('<html><head><title>Order Invoice</title>');        
        mywindow.document.write('</head><body>');
        mywindow.document.write(response);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();
				
			}// /success function
		}); // /ajax function to fetch the printable order
	} // /if orderId
} // /print order function







window.addEventListener("keydown", addRow, false);

window.addEventListener("keydown", addRow2, false);

window.addEventListener("keydown", gettax, false);
window.addEventListener("keydown", addRow3, false);



function addRow2(key) {
	
	 if (key.keyCode == "65") {
	$('.chosen-select').chosen({width: "100%"});

	$("#addRowBtn").button("loading");

	var tableLength = $("#productTable2 tbody tr").length;

	var tableRow;
	var arrayNumber;
	var count;

	if(tableLength > 0) {		
		tableRow = $("#productTable2 tbody tr:last").attr('id');
		arrayNumber = $("#productTable2 tbody tr:last").attr('class');
		count = tableRow.substring(3);	
		count = Number(count) + 1;
		arrayNumber = Number(arrayNumber) + 1;					
	} else {
		// no table row
		count = 1;
		arrayNumber = 0;
	}

	$.ajax({
		url: 'php_action/fetchProductData4.php',
		type: 'post',
		dataType: 'json',
		success:function(response) {
			$("#addRowBtn").button("reset");			

			var tr = '<tr id="row'+count+'" class="'+arrayNumber+'">'+			  				
				'<td>'+
					'<div class="form-group">'+

					'<select class="chosen-select" name="productName[]" id="productName'+count+'" onchange="getProductData('+count+')" >'+
						'<option value="">~~SELECT~~</option>';
						// console.log(response);
						$.each(response, function(index, value) {
							tr += '<option value="'+value[0]+'">'+value[1]+'</option>';							
						});
													
					tr += '</select>'+
					'</div>'+
				'</td>'+
				'<td style="padding-left:20px;"">'+
					'<input type="text" name="hsn[]" id="hsn'+count+'" autocomplete="off" disabled="true" class="form-control" />'+
					'<input type="hidden" name="hsnValue[]" id="hsnValue'+count+'" autocomplete="off" class="form-control" />'+
				'</td style="padding-left:20px;">'+
				
				'<td style="padding-left:20px;">'+
					'<div class="form-group">'+
					'<input type="number" name="quantity[]" id="quantity'+count+'" onkeyup="getTotal2('+count+')" autocomplete="off" class="form-control" min="1" />'+
					'</div>'+
				'</td>'+
				'<td style="padding-left:20px;"">'+
					'<input type="text" name="rate[]" id="rate'+count+'" autocomplete="off"  class="form-control" />'+
					'<input type="hidden" name="rateValue[]" id="rateValue'+count+'" autocomplete="off" class="form-control" />'+
				'</td style="padding-left:20px;">'+
				'<td style="padding-left:20px;">'+
					'<input type="text" name="yyy[]" id="yyy'+count+'" autocomplete="off" class="form-control"  />'+
					'<input type="hidden" name="yyyValue[]" id="yyyValue'+count+'" autocomplete="off" class="form-control" />'+
				'</td>'+
				'<td>'+
					'<button class="btn btn-default removeProductRowBtn3" type="button" onclick="deleteRow2(this)"><i class="glyphicon glyphicon-trash"></i></button>'+
				'</td>'+
			'</tr>';
			if(tableLength > 0) {							
				$("#productTable2 tbody tr:last").after(tr);
			} else {				
				$("#productTable2 tbody").append(tr);
			}		

		} // /success
	});	// get the product data

} // /add row


}

function deleteRow2(row)
{
    var i=row.parentNode.parentNode.rowIndex;
    document.getElementById('productTable2').deleteRow(i);
}





function addRow(key) {
		 if (key.keyCode == "83") {
	$('.chosen-select').chosen({width: "100%"});

	$("#addRowBtn2").button("loading");

	var tableLength = $("#productTable tbody tr").length;

	var tableRow;
	var nana;
	var count;

	if(tableLength > 0) {		
		tableRow = $("#productTable tbody tr:last").attr('id');
		nana = $("#productTable tbody tr:last").attr('class');
		count = tableRow.substring(3);	
		count = Number(count) + 1;
		nana = Number(nana) + 1;					
	} else {
		// no table row
		count = 1;
		nana = 0;
	}

	$.ajax({
		url: 'php_action/fetchProductData5.php',
		type: 'post',
		dataType: 'json',
		success:function(response) {
			$("#addRowBtn2").button("reset");			

			var tr = '<tr id="row'+count+'">'+			  				
				'<td>'+
					'<div class="form-group">'+

					'<select class="chosen-select" name="product1Name[]" id="product1Name'+count+'" onchange="getProductData3('+count+')" >'+
						'<option value="">~~SELECT~~</option>';
						// console.log(response);
						$.each(response, function(index, value) {
							tr += '<option value="'+value[0]+'">'+value[1]+'</option>';							
						});
													
					tr += '</select>'+
					'</div>'+
				'</td>'+
				'<td style="padding-left:20px;"">'+
					'<input type="text" name="hsn1[]" id="hsn1'+count+'" autocomplete="off"  class="form-control" />'+
					'<input type="hidden" name="hsnValue1[]" id="hsnValue1'+count+'" autocomplete="off" class="form-control" />'+
				'</td style="padding-left:20px;">'+
				'<td style="padding-left:20px;">'+
					'<input type="number" name="xxx[]" id="xxx'+count+'"  autocomplete="off" class="form-control" min="1" />'+
									'</td style="padding-left:20px;">'+
									
										'<td style="padding-left:20px;">'+
					'<div class="form-group">'+
					'<input type="number" name="ssd[]" id="ssd'+count+'" onkeyup="xxtal('+count+')" autocomplete="off" class="form-control" min="1" />'+
					'</div>'+
				'</td>'+
		'<td style="padding-left:20px;"">'+
					'<input type="text" name="rrd[]" id="rrd'+count+'" autocomplete="off" class="form-control" />'+
					'<input type="hidden" name="rrdValue[]" id="rrdValue'+count+'" autocomplete="off" class="form-control" />'+
				'</td style="padding-left:20px;">'+
									
									
								
									
									
							'<td style="padding-left:20px;">'+
					'<input type="text" name="vvd[]" id="vvd'+count+'" autocomplete="off"  disabled="true"  class="form-control"  />'+
					'<input type="hidden" name="vvdValue[]" id="vvdValue'+count+'" autocomplete="off" class="form-control" />'+
				'</td>'+
				'<td>'+
					'<button class="btn btn-default removeProductRowBtn1" type="button" onclick="deleteRow(this)"><i class="glyphicon glyphicon-trash"></i></button>'+
				'</td>'+
			'</tr>';
			if(tableLength > 0) {							
				$("#productTable tbody tr:last").after(tr);
			} else {				
				$("#productTable tbody").append(tr);
			}		

		} // /success
	});	// get the product data

} // /add row



}
function deleteRow(row)
{
    var i=row.parentNode.parentNode.rowIndex;
    document.getElementById('productTable').deleteRow(i);
}




function addRow3(key) {
	
	 if (key.keyCode == "68") {
	$('.chosen-select').chosen({width: "100%"});

	$("#addRowBtn3").button("loading");

	var tableLength = $("#productTable3 tbody tr").length;

	var tableRow;
	var vana;
	var count;

	if(tableLength > 0) {		
		tableRow = $("#productTable3 tbody tr:last").attr('id');
		vana = $("#productTable3 tbody tr:last").attr('class');
		count = tableRow.substring(3);	
		count = Number(count) + 1;
		vana = Number(vana) + 1;					
	} else {
		// no table row
		count = 1;
		vana = 0;
	}

	$.ajax({
		url: 'php_action/fetchProductData6.php',
		type: 'post',
		dataType: 'json',
		success:function(response) {
			$("#addRowBtn").button("reset");			

			var tr = '<tr id="row'+count+'" class="'+vana+'">'+			  				
				'<td>'+
					'<div class="form-group">'+

					'<select class="chosen-select" name="product2Name[]" id="product2Name'+count+'" onchange="getProductData10('+count+')" >'+
						'<option value="">~~SELECT~~</option>';
						// console.log(response);
						$.each(response, function(index, value) {
							tr += '<option value="'+value[0]+'">'+value[1]+'</option>';							
						});
													
					tr += '</select>'+
					'</div>'+
				'</td>'+
				'<td style="padding-left:20px;">'+
					'<input type="text" name="hsn5[]" id="hsn5'+count+'" autocomplete="off" class="form-control" />'+
					'<input type="hidden" name="hsnValue5[]" id="hsnValue5'+count+'" autocomplete="off" class="form-control" />'+
				'</td style="padding-left:20px;">'+
					'<td style="padding-left:20px;">'+
					'<input type="text" name="size[]" id="size'+count+'" autocomplete="off"  class="form-control" />'+
					'<input type="hidden" name="sizeValue[]" id="sizeValue'+count+'" autocomplete="off" class="form-control" />'+
				'</td style="padding-left:20px;">'+
					'<td style="padding-left:20px;"">'+
					
					'<p>x</p>'+
				'</td style="padding-left:20px;">'+
				
				
					'<td style="padding-left:20px;">'+
					'<input type="text" name="size2[]" id="size2'+count+'" autocomplete="off"  class="form-control" />'+
					'<input type="hidden" name="sizeValue2[]" id="sizeValue2'+count+'" autocomplete="off" class="form-control" />'+
				'</td style="padding-left:20px;">'+
				
				
			
			
					
				
					'<td style="padding-left:20px;">'+
					'<input type="text" name="rate6[]" id="rate6'+count+'" autocomplete="off" class="form-control" />'+
					'<input type="hidden" name="rateValue6[]" id="rateValue6'+count+'" autocomplete="off" class="form-control" />'+
				'</td style="padding-left:20px;">'+
				
					'<td style="padding-left:20px;">'+
					'<input type="text" name="rate5[]" id="rate5'+count+'" autocomplete="off" class="form-control" />'+
					'<input type="hidden" name="rateValue5[]" id="rateValue5'+count+'" autocomplete="off" class="form-control" />'+
				'</td style="padding-left:20px;">'+
				
				
				'<td style="padding-left:20px;">'+
					'<div class="form-group">'+
					'<input type="number" name="acpquantity[]" id="acpquantity'+count+'" onkeyup="getTotal3('+count+')" autocomplete="off" class="form-control" min="1" />'+
					'</div>'+
				'</td>'+
				'<td style="padding-left:20px;">'+
					'<input type="text" name="zzz2[]" id="zzz2'+count+'" autocomplete="off" class="form-control" disabled="true" />'+
					'<input type="hidden" name="zzzValue2[]" id="zzzValue2'+count+'" autocomplete="off" class="form-control" />'+
				'</td>'+
				'<td style="padding-left:20px;">'+
					'<input type="text" name="zzz[]" id="zzz'+count+'" autocomplete="off" class="form-control"  />'+
					'<input type="hidden" name="zzzValue[]" id="zzzValue'+count+'" autocomplete="off" class="form-control" />'+
				'</td>'+
				'<td>'+
					'<button class="btn btn-default removeProductRowBtn" type="button" onclick="deleteRow3(this)"><i class="glyphicon glyphicon-trash"></i></button>'+
				'</td>'+
			'</tr>';
			if(tableLength > 0) {							
				$("#productTable3 tbody tr:last").after(tr);
			} else {				
				$("#productTable3 tbody").append(tr);
			}		

		} // /success
	});	// get the product data

} // /add row


}

function deleteRow3(row)
{
    var i=row.parentNode.parentNode.rowIndex;
    document.getElementById('productTable3').deleteRow(i);
}




















// select on product data
function getProductData(row = null) {
	if(row) {
		var productId = $("#productName"+row).val();		
		
		if(productId == "") {
						$("#hsn"+row).val("");

			$("#rate"+row).val("");

			$("#quantity"+row).val("");						
			$("#yyy"+row).val("");

			// remove check if product name is selected
			// var tableProductLength = $("#productTable tbody tr").length;			
			// for(x = 0; x < tableProductLength; x++) {
			// 	var tr = $("#productTable tbody tr")[x];
			// 	var count = $(tr).attr('id');
			// 	count = count.substring(3);

			// 	var productValue = $("#productName"+row).val()

			// 	if($("#productName"+count).val() == "") {					
			// 		$("#productName"+count).find("#changeProduct"+productId).removeClass('div-hide');	
			// 		console.log("#changeProduct"+count);
			// 	}											
			// } // /for

		} else {
			$.ajax({
				url: 'php_action/fetchSelectedProduct.php',
				type: 'post',
				data: {productId : productId},
				dataType: 'json',
				success:function(response) {
					// setting the rate value into the rate input field
					
							$("#hsn"+row).val(response.hns);
					$("#hsnValue"+row).val(response.hns);
					$("#rate"+row).val(response.selling_price);
					$("#rateValue"+row).val(response.selling_price);
					$("#quantity"+row).val(1);

					
				
					
					var total = Number(response.selling_price) * 1;
					total = total.toFixed(2);
					$("#yyy"+row).val(total);
					$("#yyyValue"+row).val(total);
					
					// check if product name is selected
					// var tableProductLength = $("#productTable tbody tr").length;					
					// for(x = 0; x < tableProductLength; x++) {
					// 	var tr = $("#productTable tbody tr")[x];
					// 	var count = $(tr).attr('id');
					// 	count = count.substring(3);

					// 	var productValue = $("#productName"+row).val()

					// 	if($("#productName"+count).val() != productValue) {
					// 		// $("#productName"+count+" #changeProduct"+count).addClass('div-hide');	
					// 		$("#productName"+count).find("#changeProduct"+productId).addClass('div-hide');								
					// 		console.log("#changeProduct"+count);
					// 	}											
					// } // /for
			
					subAmount();
															subAmount2();
		gettax();

				} // /success
			}); // /ajax function to fetch the product data	
		}
				
	} else {
		alert('no row! please refresh the page');
	}
} // /select on product data









function getProductData2(row = null) {
	if(row) {
		var productId = $("#clientName"+row).val();		
		
		if(productId == "") {
			$("#clientcontact"+row).val("");

			
			// remove check if product name is selected
			// var tableProductLength = $("#productTable tbody tr").length;			
			// for(x = 0; x < tableProductLength; x++) {
			// 	var tr = $("#productTable tbody tr")[x];
			// 	var count = $(tr).attr('id');
			// 	count = count.substring(3);

			// 	var productValue = $("#productName"+row).val()

			// 	if($("#productName"+count).val() == "") {					
			// 		$("#productName"+count).find("#changeProduct"+productId).removeClass('div-hide');	
			// 		console.log("#changeProduct"+count);
			// 	}											
			// } // /for

		} else {
			$.ajax({
				url: 'php_action/fetchSelectedProduct3.php',
				type: 'post',
				data: {productId : productId},
				dataType: 'json',
				success:function(response) {
					// setting the rate value into the rate input field
					
					$("#clientContact"+row).val(response.due);
					

				
					
					// check if product name is selected
					// var tableProductLength = $("#productTable tbody tr").length;					
					// for(x = 0; x < tableProductLength; x++) {
					// 	var tr = $("#productTable tbody tr")[x];
					// 	var count = $(tr).attr('id');
					// 	count = count.substring(3);

					// 	var productValue = $("#productName"+row).val()

					// 	if($("#productName"+count).val() != productValue) {
					// 		// $("#productName"+count+" #changeProduct"+count).addClass('div-hide');	
					// 		$("#productName"+count).find("#changeProduct"+productId).addClass('div-hide');								
					// 		console.log("#changeProduct"+count);
					// 	}											
					// } // /for
			
					subAmount();
															subAmount2();
		gettax();

				} // /success
			}); // /ajax function to fetch the product data	
		}
				
	} else {
		alert('no row! please refresh the page');
	}
} // /select on product data





function getProductData10(row = null) {
	if(row) {
		var productId = $("#product2Name"+row).val();		
		
		if(productId == "") {
						$("#hsn5"+row).val("");


			$("#acpquantity"+row).val("");						
			$("#rate5"+row).val("");

			// remove check if product name is selected
			// var tableProductLength = $("#productTable tbody tr").length;			
			// for(x = 0; x < tableProductLength; x++) {
			// 	var tr = $("#productTable tbody tr")[x];
			// 	var count = $(tr).attr('id');
			// 	count = count.substring(3);

			// 	var productValue = $("#productName"+row).val()

			// 	if($("#productName"+count).val() == "") {					
			// 		$("#productName"+count).find("#changeProduct"+productId).removeClass('div-hide');	
			// 		console.log("#changeProduct"+count);
			// 	}											
			// } // /for

		} else {
			$.ajax({
				url: 'php_action/fetchSelectedProduct9.php',
				type: 'post',
				data: {productId : productId},
				dataType: 'json',
				success:function(response) {
					// setting the rate value into the rate input field
					
							$("#hsn5"+row).val(response.hns);
					$("#hsn5Value"+row).val(response.hns);
					$("#rate5"+row).val(response.selling_price);
					$("#rateValue5"+row).val(response.selling_price);
					$("#acpquantity"+row).val(1);

					
				
					
					var total = Number(response.selling_price) * 1;
					total = total.toFixed(2);
					$("#zzz2"+row).val(total);
					$("#zzzValue2"+row).val(total);
					
					// check if product name is selected
					// var tableProductLength = $("#productTable tbody tr").length;					
					// for(x = 0; x < tableProductLength; x++) {
					// 	var tr = $("#productTable tbody tr")[x];
					// 	var count = $(tr).attr('id');
					// 	count = count.substring(3);

					// 	var productValue = $("#productName"+row).val()

					// 	if($("#productName"+count).val() != productValue) {
					// 		// $("#productName"+count+" #changeProduct"+count).addClass('div-hide');	
					// 		$("#productName"+count).find("#changeProduct"+productId).addClass('div-hide');								
					// 		console.log("#changeProduct"+count);
					// 	}											
					// } // /for
			
					subAmount();
															subAmount2();
		gettax();

				} // /success
			}); // /ajax function to fetch the product data	
		}
				
	} else {
		alert('no row! please refresh the page');
	}
} // /select on product data












function getProductData3(row = null) {
	if(row) {
		var productId = $("#product1Name"+row).val();		
		
		if(productId == "") {

		
			$("#hsn1"+row).val("");
			$("#hsnValue1"+row).val("");
						$("#rrd"+row).val("");

				$("#rrdValue"+row).val("");



			// remove check if product name is selected
			// var tableProductLength = $("#productTable tbody tr").length;			
			// for(x = 0; x < tableProductLength; x++) {
			// 	var tr = $("#productTable tbody tr")[x];
			// 	var count = $(tr).attr('id');
			// 	count = count.substring(3);

			// 	var productValue = $("#productName"+row).val()

			// 	if($("#productName"+count).val() == "") {					
			// 		$("#productName"+count).find("#changeProduct"+productId).removeClass('div-hide');	
			// 		console.log("#changeProduct"+count);
			// 	}											
			// } // /for

		} else {
			$.ajax({
				url: 'php_action/fetchSelectedProduct1.php',
				type: 'post',
				data: {productId : productId},
				dataType: 'json',
				success:function(response) {
					// setting the rate value into the rate input field
					

					
					$("#hsn1"+row).val(response.hns);
					$("#hsnValue1"+row).val(response.hns);

$("#rrd"+row).val(response.Rate);
					$("#rrdValue"+row).val(response.Rate);
					
var total34 = Number(response.Rate) * 1;
					vvd = total34.toFixed(2);
					$("#vvd"+row).val(vvd);
					$("#vvdValue"+row).val(vvd);
					
					// check if product name is selected
					// var tableProductLength = $("#productTable tbody tr").length;					
					// for(x = 0; x < tableProductLength; x++) {
					// 	var tr = $("#productTable tbody tr")[x];
					// 	var count = $(tr).attr('id');
					// 	count = count.substring(3);

					// 	var productValue = $("#productName"+row).val()

					// 	if($("#productName"+count).val() != productValue) {
					// 		// $("#productName"+count+" #changeProduct"+count).addClass('div-hide');	
					// 		$("#productName"+count).find("#changeProduct"+productId).addClass('div-hide');								
					// 		console.log("#changeProduct"+count);
					// 	}											
					// } // /for
subAmount3();
							gettax();

				} // /success
			}); // /ajax function to fetch the product data	
		}
				
	} else {
		alert('no row! please refresh the page');
	}
} // /select on product data




function xxtal(row = null) {
	if(row) {
		var total34 = Number($("#ssd"+row).val()) * Number($("#rrd"+row).val());
		vvd = total34.toFixed(2);
		$("#vvd"+row).val(vvd);
		$("#vvdValue"+row).val(vvd);
		gettax();

subAmount3();
	} else {
		alert('no row !! please refresh the page');
	}
}



function getTotal3(row = null) {
	if(row) {    
		var acp = Number($("#size"+row).val()) * Number($("#size2"+row).val());

		$("#acpquantity"+row).val(acp);
		
		var total34 = Number($("#acpquantity"+row).val()) * Number($("#rate6"+row).val());
$("#zzz2"+row).val(total34);
		$("#zzzValue2"+row).val(total34);
		
		var total = Number($("#rate5"+row).val()) * Number($("#zzzValue2"+row).val());
		total = total.toFixed(2);
		$("#zzz"+row).val(total);
		$("#zzzValue"+row).val(total);
		
		subAmount2();
gettax();

	} else {
		alert('no row !! please refresh the page');
	}
}



// table total

function getTotal2(row = null) {
	if(row) {    

	
		
		var total = Number($("#rate"+row).val()) * Number($("#quantity"+row).val());
		total = total.toFixed(2);
		$("#yyy"+row).val(total);
		$("#yyyValue"+row).val(total);
		
		subAmount();
gettax();
	} else {
		alert('no row !! please refresh the page');
	}
}


function gettax() {
			     var subamount3 = parseInt(document.getElementById('Totalcp').value);

    var subamount2 = parseInt(document.getElementById('subTotal2').value);

    var subamount = parseInt(document.getElementById('subTotal').value);
    var tax = Number(document.getElementById('tax').value);
    var tax2 = Number(document.getElementById('tax2').value);
    var tax3 = Number(document.getElementById('tax3').value);
    var fright = Number(document.getElementById('fright').value);
    var expense = Number(document.getElementById('expense').value);

	
		var totalAmount = Number($("#subTotal").val())+ Number($("#subTotal2").val())+ Number($("#Totalcp").val());
	totalAmount = totalAmount.toFixed(2);
	$("#fiAmount").val(totalAmount);
	$("#fiAmountValue").val(totalAmount);
	
	
	var discount = $("#discount").val();
	if(discount) {
		var grandTotal = Number($("#fiAmount").val()) - Number(discount);
		grandTotal = grandTotal.toFixed(2);
		$("#totalAmount").val(grandTotal);
		$("#totalAmountValue").val(grandTotal);
	} else {
		$("#totalAmount").val(totalAmount);
		$("#totalAmountValue").val(totalAmount);
	} // /else discount	

	
	var vat = (Number($("#totalAmount").val())/100) * tax;
			vat1 = vat.toFixed(2);

	$("#vat").val(vat1);
	$("#vatValue").val(vat1);
	
	var vat2 = (Number($("#totalAmount").val())/100) * tax2;
				vat3 = vat2.toFixed(2);

	$("#vat2").val(vat3);
	$("#vatValue2").val(vat3);

		var vat3 = (Number($("#totalAmount").val())/100) * tax3;
						vat4 = vat3.toFixed(2);

	$("#vat3").val(vat4);
	$("#vatValue3").val(vat4);
	
		 

	
		var hell= Number($("#totalAmount").val())  + Number($("#vat").val())+ Number($("#vat2").val())+ Number($("#vat3").val())+fright+expense;
		grandTotal5 = Math.round(hell);
	$("#grandTotal").val(grandTotal5);
	$("#grandTotalValue").val(grandTotal5);

	
  }
 


 function subAmount2() {
	var tableProductLength = $("#productTable3 tbody tr").length;
	var totalSubAmount = 0;
	for(x = 0; x < tableProductLength; x++) {
		var tr = $("#productTable3 tbody tr")[x];
		var count = $(tr).attr('id');
		count = count.substring(3);

		totalSubAmount = Number(totalSubAmount) + Number($("#zzz"+count).val());
	} // /for

	totalSubAmount2 = totalSubAmount.toFixed(2);

	// sub total
	$("#subTotal2").val(totalSubAmount2);
	$("#subTotalValue2").val(totalSubAmount2);
 }
function subAmount3() {
	var tableProductLength = $("#productTable tbody tr").length;
	var totalSubAmount = 0;
	for(x = 0; x < tableProductLength; x++) {
		var tr = $("#productTable tbody tr")[x];
		var count = $(tr).attr('id');
		count = count.substring(3);

		totalSubAmount = Number(totalSubAmount) + Number($("#vvd"+count).val());
	} // /for

	totalSubAmount = totalSubAmount.toFixed(2);

	// sub total
	$("#Totalcp").val(totalSubAmount);
	$("#TotalcpValue").val(totalSubAmount);

	// vat
}
 

function subAmount() {
	var tableProductLength = $("#productTable2 tbody tr").length;
	var totalSubAmount = 0;
	for(x = 0; x < tableProductLength; x++) {
		var tr = $("#productTable2 tbody tr")[x];
		var count = $(tr).attr('id');
		count = count.substring(3);

		totalSubAmount = Number(totalSubAmount) + Number($("#yyy"+count).val() );
	} // /for


	// sub total
	$("#subTotal").val(totalSubAmount);
	$("#subTotalValue").val(totalSubAmount);

	// vat
 

  
 
 

	var paidAmount = $("#paid").val();
	if(paidAmount) {
		paidAmount =  Number($("#grandTotal").val()) - Number(paidAmount);
		paidAmount = paidAmount.toFixed(2);
		$("#due").val(paidAmount);
		$("#dueValue").val(paidAmount);
	} else {	
		$("#due").val($("#grandTotal").val());
		$("#dueValue").val($("#grandTotal").val());
	} // else

} // /sub total amount

function discountFunc() {
	var discount = $("#discount").val();
 	var totalAmount = Number($("#grandTotal").val());
 	totalAmount = totalAmount.toFixed(2);

 	var grandTotal;
 	if(totalAmount) { 	
 		grandTotal = Number($("#grandTotal").val()) - Number($("#discount").val());
 		grandTotal = grandTotal.toFixed(1);

 		$("#grandTotal").val(grandTotal);
 		$("#grandTotalValue").val(grandTotal);
		
		
		
		
		
		
		
		

 	} else {
 	}

 	var paid = $("#paid").val();

 	var dueAmount; 	
 	if(paid) {
 		dueAmount = Number($("#grandTotal").val()) - Number($("#paid").val());
 		dueAmount = dueAmount.toFixed(2);

 		$("#due").val(dueAmount);
 		$("#dueValue").val(dueAmount);
 	} else {
 		$("#due").val($("#grandTotal").val());
 		$("#dueValue").val($("#grandTotal").val());
 	}

} // /discount function

function paidAmount() {
	var grandTotal = $("#grandTotal").val();

	if(grandTotal) {
		var dueAmount = Number($("#grandTotal").val()) - Number($("#paid").val());
		dueAmount = dueAmount.toFixed(2);
		$("#due").val(dueAmount);
		$("#dueValue").val(dueAmount);
	} // /if
} // /paid amoutn function


function resetOrderForm() {
	// reset the input field
	$("#createOrderForm")[0].reset();
	// remove remove text danger
	$(".text-danger").remove();
	// remove form group error 
	$(".form-group").removeClass('has-success').removeClass('has-error');
} // /reset order form


// remove order from server
function removeOrder(orderId = null) {
	if(orderId) {
		$("#removeOrderBtn").unbind('click').bind('click', function() {
			$("#removeOrderBtn").button('loading');

			$.ajax({
				url: 'php_action/removeOrder3.php',
				type: 'post',
				data: {orderId : orderId},
				dataType: 'json',
				success:function(response) {
					$("#removeOrderBtn").button('reset');

					if(response.success == true) {

						manageOrderTable.ajax.reload(null, false);
						// hide modal
						$("#removeOrderModal").modal('hide');
						// success messages
						$("#success-messages").html('<div class="alert alert-success">'+
	            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
	            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
	          '</div>');

						// remove the mesages
	          $(".alert-success").delay(500).show(10, function() {
							$(this).delay(3000).hide(10, function() {
								$(this).remove();
							});
						}); // /.alert	          

					} else {
						// error messages
						$(".removeOrderMessages").html('<div class="alert alert-warning">'+
	            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
	            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
	          '</div>');

						// remove the mesages
	          $(".alert-success").delay(500).show(10, function() {
							$(this).delay(3000).hide(10, function() {
								$(this).remove();
							});
						}); // /.alert	          
					} // /else

				} // /success
			});  // /ajax function to remove the order

		}); // /remove order button clicked
		

	} else {
		alert('error! refresh the page again');
	}
}
// /remove order from server

// Payment ORDER
function paymentOrder(orderId = null) {
	if(orderId) {

		$("#orderDate").datepicker();

		$.ajax({
			url: 'php_action/fetchOrderData.php',
			type: 'post',
			data: {orderId: orderId},
			dataType: 'json',
			success:function(response) {				

				// due 
				$("#due").val(response.order[10]);				

				// pay amount 
				$("#payAmount").val(response.order[10]);

				var paidAmount = response.order[9] 
				var dueAmount = response.order[10];							
				var grandTotal = response.order[8];

				// update payment
				$("#updatePaymentOrderBtn").unbind('click').bind('click', function() {
					var payAmount = $("#payAmount").val();
					var paymentType = $("#paymentType").val();
					var paymentStatus = $("#paymentStatus").val();

					if(payAmount == "") {
						$("#payAmount").after('<p class="text-danger">The Pay Amount field is required</p>');
						$("#payAmount").closest('.form-group').addClass('has-error');
					} else {
						$("#payAmount").closest('.form-group').addClass('has-success');
					}

					if(paymentType == "") {
						$("#paymentType").after('<p class="text-danger">The Pay Amount field is required</p>');
						$("#paymentType").closest('.form-group').addClass('has-error');
					} else {
						$("#paymentType").closest('.form-group').addClass('has-success');
					}

					if(paymentStatus == "") {
						$("#paymentStatus").after('<p class="text-danger">The Pay Amount field is required</p>');
						$("#paymentStatus").closest('.form-group').addClass('has-error');
					} else {
						$("#paymentStatus").closest('.form-group').addClass('has-success');
					}

					if(payAmount && paymentType && paymentStatus) {
						$("#updatePaymentOrderBtn").button('loading');
						$.ajax({
							url: 'php_action/editPayment.php',
							type: 'post',
							data: {
								orderId: orderId,
								payAmount: payAmount,
								paymentType: paymentType,
								paymentStatus: paymentStatus,
								paidAmount: paidAmount,
								grandTotal: grandTotal
							},
							dataType: 'json',
							success:function(response) {
								$("#updatePaymentOrderBtn").button('loading');

								// remove error
								$('.text-danger').remove();
								$('.form-group').removeClass('has-error').removeClass('has-success');

								$("#paymentOrderModal").modal('hide');

								$("#success-messages").html('<div class="alert alert-success">'+
			            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
			            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
			          '</div>');

								// remove the mesages
			          $(".alert-success").delay(500).show(10, function() {
									$(this).delay(3000).hide(10, function() {
										$(this).remove();
									});
								}); // /.alert	

			          // refresh the manage order table
								manageOrderTable.ajax.reload(null, false);

							} //

						});
					} // /if
						
					return false;
				}); // /update payment			

			} // /success
		}); // fetch order data
	} else {
		alert('Error ! Refresh the page again');
	}
}
