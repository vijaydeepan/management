<?php 
require_once 'php_action/db_connect.php'; 
require_once 'includes/header.php'; 



?>

					<link rel = "stylesheet" type = "text/css" href = "css/chosen.css" />

				<select class="chosen-select" name="deepan" id="deepan<?php echo $x; ?>" onchange="getProduct(<?php echo $x; ?>)" >
			  						<option value="">~~SELECT~~</option>
			  								<?php
			  							$productSql = "SELECT * FROM supliers ";
			  							$productData = $connect->query($productSql);

			  							while($row = $productData->fetch_array()) {									 		
			  									echo "<option value='".$row['suplier_id']."' id='changeProduct".$row['suplier_name']."'>".$row['suplier_name']."</option>";
										 	} // /while 

			  						?>
		  						</select>
							
	
	
					
							
							<table id="dataTable">
    <tr>
	  <th><input type="checkbox" id="selectall" value="selectAll"/></th>
      <th>Field-1</th>
      <th>Field-2</th>
      <th>Field-3</th>
      <th>Field-4</th>
      <th>Field-5</th>
	</tr>
      <tbody>
          <tr>
			<td><input type="checkbox"  class="check"></td>
			<td>
				<select name="input-1[]" class="chosen_select_L">
              		<option></option>
					<option>Option 1</option>
					<option>Option 2</option>
					<option>Option 3</option>
				</select>
            </td>
			<td><input name="input-2[]" type="text" class="chosen_text"></td>
			<td><input name="input-3[]" type="text" class="chosen_text"></td>
			<td><input name="input-4[]" type="text" class="chosen_text"></td>
            <td>
				<select name="input-5[]" class="chosen_select_M">
					<option></option>
                    <option>Option 1</option>
					<option>Option 2</option>
					<option>Option 3</option>
				</select>
			</td>
		  </tr>
      </tbody>
</table>
<p>
<input type="button" value="Add Field" onClick="addRow('dataTable')" /> 
<input type="button" value="Remove Field" onClick="deleteRow('dataTable')"  /> 
</p>
<p>(All acions apply only to entries with check marked check boxes only.)</p>
							
							
							
						<script type = "text/javascript">
	
							
							$(".chosen_select_L").chosen({
    disable_search_threshold: 10,
    no_results_text: "Oops, nothing found!"
  });
$(".chosen_select_M").chosen({
    disable_search_threshold: 10,
    no_results_text: "Oops, nothing found!"
  });

$(document).ready(function() {
    $('#selectall').click(function(event) {
        if(this.checked) { 
            $('.check').each(function() { 
                this.checked = true; 
            });
        }else{
            $('.check').each(function() { 
                this.checked = false; 
            });        
        }
    });
});

function addRow(dataTable) {
	var table = document.getElementById(dataTable);
	var rowCount = table.rows.length;
	if(rowCount < 11){
        $(".chosen_select_L").chosen('destroy');
		$(".chosen_select_M").chosen('destroy');
		var row = table.insertRow(rowCount);
		var colCount = table.rows[1].cells.length;
		for(var i=0; i<colCount; i++) {
			var newcell = row.insertCell(i);

			newcell.innerHTML = table.rows[1].cells[i].innerHTML;
		}
	}else{
		 alert("Maximum fields is 10.");
			   
	}
     $(".chosen_select_L").chosen();
	$(".chosen_select_M").chosen();
}

function deleteRow(dataTable) {
	var table = document.getElementById(dataTable);
	var rowCount = table.rows.length;
	for(var i=2; i<rowCount; i++) {
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0];
		if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 1) {
				alert("Cannot Remove all fields.");
				break;
			}
			table.deleteRow(i);
			rowCount--;
			i--;
		}
	}
}
							
							
							
							
						</script>
	
							
							<style>
							.chosen_text{
border-radius: 3px;
border: 1px solid #ADACAC;
background-color: #EDEBEB;
width:auto;
max-width:80px;
}
							</style>
							
							
	
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/chosen.jquery.js"></script>
<script type = "text/javascript">
	$('.chosen-select').chosen({width: "70%"});
</script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#group').on('change', function(){
				if($('#group').val() == ""){
					$('#animal').empty();				
					$('#zoo').empty();

					$('<option value = "">Select an animal</option>').appendTo('#animal');
				    $('<option value = "">Select an zoo</option>').appendTo('#zoo');

					$('#animal').attr('disabled', 'disabled');
										$('#zoo').attr('disabled', 'disabled');

				}else{
					$('#animal').removeAttr('disabled', 'disabled');
					$('#animal').load('animal_get.php?animal_group=' + $('#group').val());
					$('#zoo').removeAttr('disabled', 'disabled');
					$('#zoo').load('zoo_get.php?animal_group=' + $('#group').val());
					
				}
		});
	});
</script>
