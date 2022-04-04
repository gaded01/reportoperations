$(document).ready(function(){
	fetch();
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
			url: 'campus/edit.php',
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
					$('.id').val("");
					$('.name').val("");
					$('.code').val("");
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
			url: 'file_uploads/delete.php',
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
		url: 'file_uploads/fetch.php',
		success: function(response){
			$('#tbody').html(response);
			console.log(response);
		}
	});
}

function getDetails(id){
	$.ajax({
		method: 'POST',
		url: 'file_uploads/fetch_row.php',
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
				$('.id').val(response.data.id);
				$('.name').val(response.data.name);
				$('.code').val(response.data.code);
				$('.status').val(response.data.status);
				$('.filename').val(response.data.filepath);
                console.log(response.data.id);
                console.log(response.data.name);
                console.log(response.data.code);
                console.log(response.data.status);
			}
		}
	});
}