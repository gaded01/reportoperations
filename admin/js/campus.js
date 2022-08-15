$(document).ready(function(){
	fetch();
	fetchHighestId();
	$('#addForm').submit(function(e){
		e.preventDefault();
		let name = document.querySelector('#campus_name').value;
		//console.log(addform);
		$.ajax({
			method: 'POST',
			url: 'campus/add.php',
			data: {
				'code' : '',
				'name' : name,
			},
			dataType: 'json',
			success: function(response){
				if(response.error){
					alert(response.message);
				}
				else{
					console.log(response.message);
					alert(response.message);
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
					alert(response.message);
				}
				else{
					// $('#alert').show();
					// $('#alert_message').html(response.message);
                    console.log(response.message);
					alert(response.message);
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
			url: 'campus/delete.php',
			data: deleteform,
			dataType: 'json',
			success: function(response){
				if(response.error){
                    console.log(response.message);
					alert(response.message);
				}
				else{
                    console.log(response.message);
					alert(response.message);
					location.reload();
				}
			}
		});
        $('.close').click();
		
	});
});

function fetch(){
	$.ajax({
		method: 'POST',
		url: 'campus/fetch.php',
		success: function(response){
			$('#tbody').html(response);
			// console.log('response', response);
		}
	});
}
function fetchHighestId() {
	$.ajax({
		method: 'POST',
		url: 'campus/fetch_user.php',
		success: function(response){
			console.log('responsesss', response);
		}
	});
}
function getDetails(id){
	$.ajax({
		method: 'POST',
		url: 'campus/fetch_row.php',
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
                console.log(response.data.id);
                console.log(response.data.name);
                console.log(response.data.code);
                console.log(response.data.status);
			}
		}
	});
}
function autoGenerate() {
	
}

