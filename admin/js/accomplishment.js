$(document).ready(function(){
	fetch();
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
					alert(response.message);
					fetch();
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
		url: 'accomplishment/fetch.php',
		success: function(response){
			$('#tbody').html(response);
			console.log(response);
		}
	});
}

function getDetails(id){
	$.ajax({
		method: 'POST',
		url: 'accomplishment/fetch_row.php',
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