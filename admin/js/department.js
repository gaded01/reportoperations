$(document).ready(function(){
	fetch();
	$('#addform').submit(function(e){
		e.preventDefault();
		var addform = $(this).serialize();
		//console.log(addform);
		$.ajax({
			method: 'POST',
			url: 'department/add.php',
			data: addform,
			dataType: 'json',
			success: function(response){
				if(response.error){
					// $('#alert').show();
					// $('#alert_message').html(response.message);
					console.log(response.message);
					// $('.id').val("");
					// $('.name').val("");
					// $('.code').val("");
				}
				else{
					// $('#alert').show();
					// $('#alert_message').html(response.message);
					// fetch();
					console.log(response.message);
					$('.id').val("");
					$('.name').val("");
					$('.code').val("");
				}
			}
		});
	});
	//

	//edit
	$(document).on('click', '.edit', function(){
		fetch();
		var id = $(this).data('id');
		getDetails(id);
	});
	$('#editform').submit(function(e){
		e.preventDefault();
		var editform = $(this).serialize();
		console.log(editform);
		$.ajax({
			method: 'POST',
			url: 'department/edit.php',
			data: editform,
			dataType: 'json',
			success: function(response){
				fetch();
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
		$('.close').click();
		fetch();
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
        console.log(editform);
		$.ajax({
			method: 'POST',
			url: 'department/delete.php',
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
	$(document).on('click', '.close', function(){
		$('#alert').hide();
	});

});

function fetch(){
	$.ajax({
		method: 'POST',
		url: 'department/fetch.php',
		success: function(response){
			$('#tbody').html(response);
		}
	});
}

function getDetails(id){
	$.ajax({
		method: 'POST',
		url: 'department/fetch_row.php',
		data: {id:id},
		dataType: 'json',
		success: function(response){
			if(response.error){
				// $('#edit').modal('hide');
				// $('#delete').modal('hide');
				// $('#alert').show();
				// $('#alert_message').html(response.message);
			}
			else{
				$('.id').val(response.data.id);
				$('.name').val(response.data.name);
				$('.code').val(response.data.code);
			}
		}
	});
}