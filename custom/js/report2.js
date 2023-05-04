$(document).ready(function() {
	// order date picker
	$("#startDate").datepicker();
	// order date picker
	$("#endDate").datepicker();

	$("#getOrderReportForm").unbind('submit').bind('submit', function() {
		
		var startDate = $("#startDate").val();
		var endDate = $("#endDate").val();

		if(startDate == "" || endDate == "") {
			if(startDate == "") {
				$("#startDate").closest('.form-group').addClass('has-error');
				$("#startDate").after('<p class="text-danger">The Start Date is required</p>');
			} else {
				$(".form-group").removeClass('has-error');
				$(".text-danger").remove();
			}

			if(endDate == "") {
				$("#endDate").closest('.form-group').addClass('has-error');
				$("#endDate").after('<p class="text-danger">The End Date is required</p>');
			} else {
				$(".form-group").removeClass('has-error');
				$(".text-danger").remove();
			}
		} else {
			$(".form-group").removeClass('has-error');
			$(".text-danger").remove();

			var form = $(this);

			$.ajax({
				url: form.attr('action'),
				type: form.attr('method'),
				data: form.serialize(),
				dataType: 'text',
				success:function(response) {
					var mywindow = window.open('', 'Stock Management System', 'height=400,width=600');
	        mywindow.document.write('<html><head><title>Order Report Slip</title>');        
	        mywindow.document.write('</head><body>');
	        mywindow.document.write(response);
	        mywindow.document.write('</body></html>');

	        mywindow.document.close(); // necessary for IE >= 10
	        mywindow.focus(); // necessary for IE >= 10

	        mywindow.print();
	        mywindow.close();
				} // /success
			});	// /ajax

		} // /else

		return false;
	});

});

function getProduct(row = null) {
	if(row) {
		var productId = $("#ff"+row).val();		
		
		if(productId == "") {
			$("#dd"+row).val("");
			$("#clientName"+row).val("");


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
					
					$("#dd"+row).val(response.due);

									$("#clientName"+row).val(response.customer_name);

					
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