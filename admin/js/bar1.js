$(document).ready(function(){
	fetch();

	$("#button1").click(function(){
		console.log("Clicked");
		var row_count = 1;
		var department = document.getElementsByClassName('department')[0].value;
		var agency = document.getElementsByClassName('agency')[0].value;
		var quarter = document.getElementsByClassName('quarter')[0].value;
		var op_unit = document.getElementsByClassName('op_unit')[0].value;

		var messageAlert = "";

		var unique_id=Math.floor(Date.now()/1000);

		$.ajax({
			method: 'POST',
			url: 'bar1/add_title.php',
			dataType: 'json',
			data: { department: department,
					agency: agency,
					quarter: quarter,
					op_unit: op_unit,
					unique_id: unique_id,},
			success: function(response){
				if(response.error){
					console.log(response.message);
					messageAlert = response.message;
				}
				else{
					console.log(response.message);
					messageAlert = response.message;
				}
			}
			
		});

		var tb = $('.mytable:eq(0) tbody');
		var size = tb.find("tr").length;
		// console.log("Number of rows : " + size);
		tb.find("tr").each(function(index, element) {
			var colSize = $(element).find('td').length;
			// console.log("  Number of cols in row " + (index + 1) + " : " + colSize);
			var td_values = [];
			$(element).find('td').each(function(index, element) {
				var colVal = $(element).text();
				// console.log("    Value in col " + (index + 1) + " : " + colVal.trim());
				td_values.push(colVal.trim());
			});

			console.log(td_values[1]);

			$.ajax({
				method: 'POST',
				url: 'bar1/add.php',
				dataType: 'json',
				data: { department: department,
						agency: agency,
						quarter: quarter,
						op_unit: op_unit,
						row_title: td_values[0],
						r1: td_values[1],
						r2: td_values[2],
						r3: td_values[3],
						r4: td_values[4],
						r5: td_values[5],
						r6: td_values[6],
						r7: td_values[7],
						r8: td_values[8],
						r9: td_values[9],
						r10: td_values[10],
						r11: td_values[11],
						r12: td_values[12],
						r13: td_values[13],
						unique_id: unique_id,
						row_count: row_count,},
				success: function(response){
					if(response.error){
						console.log(response.message);
					}
					else{
						console.log(response.message);
					}
				}

			});
			row_count = row_count + 1;
			td_values = [];
		});

		$( document ).ajaxStop(function(){
			alert(messageAlert);
			location.reload();
		});
		
	});


	$('#addForm').submit(function(e){
        
		e.preventDefault();
		var addform = $(this).serialize();
		console.log(addform);
	});
	//

	//edit
	$(document).on('click', '.edit', function(){
		var id = $(this).data('id');
		getDetails(id);
	});
	$('#editform').submit(function(e){
		e.preventDefault();
		var editform = $(this).serialize();
        console.log(editform);
		$.ajax({
			method: 'POST',
			url: 'bar1/edit.php',
			data: editform,
			dataType: 'json',
			success: function(response){
				if(response.error){
					// $('#alert').show();
					// $('#alert_message').html(response.message);
                    console.log(response.message);
				}
				else{
					// $('#alert').show();
					// $('#alert_message').html(response.message);
                    console.log(response.message);
					fetch();
				}
			}
		});
        $('.close').click();
	});
	//

	//delete
	$(document).on('click', '.delete', function(){
		var id = $(this).data('id');
		getDetails(id);
	});
	$('#deleteform').submit(function(e){
		e.preventDefault();
		var deleteform = $(this).serialize();
		$.ajax({
			method: 'POST',
			url: 'bar1/delete.php',
			data: deleteform,
			dataType: 'json',
			success: function(response){
				if(response.error){
					// $('#alert').show();
					// $('#alert_message').html(response.message);
                    console.log(response.message);
				}
				else{
					// $('#alert').show();
					// $('#alert_message').html(response.message);
                    console.log(response.message);
				}
			}
		});
		$.ajax({
			method: 'POST',
			url: 'bar1/delete_lines.php',
			data: deleteform,
			dataType: 'json',
			success: function(response){
				if(response.error){
					// $('#alert').show();
					// $('#alert_message').html(response.message);
                    console.log(response.message);
					alert(response.message);
				}
				else{
					// $('#alert').show();
					// $('#alert_message').html(response.message);
                    console.log(response.message);
					alert(response.message);
					fetch();
				}
			}
		});
		
        $('.close').click();
	});
	//

	//hide message
	// $(document).on('click', '.close', function(){
	// 	$('#alert').hide();
	// });

});

function fetch(){
	$.ajax({
		method: 'POST',
		url: 'bar1/fetch.php',
		success: function(response){
			$('#tbody').html(response);
		}
	});
}

function getDetails(id){
	$.ajax({
		method: 'POST',
		url: 'bar1/fetch_row.php',
		data: {id:id},
		dataType: 'json',
		success: function(response){
			if(response.error){
				// $('#edit').modal('hide');
				// $('#delete').modal('hide');
				// $('#alert').show();
				$('#alert_message').html(response.message);
			}
			else{
				$('.unique_id').val(response.data.unique_id);
				$('.id').val(response.data.id);
			}
		}
	});
}