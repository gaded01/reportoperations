$(document).ready(function(){
	// fetch();
	//add
	$('#login').submit(function(e){
		e.preventDefault();
		var login = $(this).serialize();
		//console.log(addform);
		$.ajax({
			method: 'POST',
			url: 'login.php',
			data: login,
			dataType: 'json',
			success: function(response){
				if(response.error){
					// $('#alert').show();
					// $('#alert_message').html(response.message);
					console.log(response.message)
				}
				else{
					// $('#alert').show();
					// $('#alert_message').html(response.message);
					// fetch();
					console.log(response.message)
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
			url: 'users/edit.php',
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
		fetch();
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
			url: 'users/delete.php',
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

});

function fetch(){
	$.ajax({
		method: 'POST',
		url: 'users/fetch.php',
		success: function(response){
			$('#tbody').html(response);
		}
	});
}

function getDetails(id){
	$.ajax({
		method: 'POST',
		url: 'users/fetch_row.php',
		data: {id:id},
		dataType: 'json',
		success: function(response){
			console.log(response);
			if(response.error){
				// $('#alert').show();
				// $('#alert_message').html(response.message);
			}
			else{
				$('.id').val(response.data.id);
				$('.id_no').val(response.data.id_no);
				$('.firstname').val(response.data.firstname);
				$('.lastname').val(response.data.lastname);
				$('.gender').val(response.data.gender);
				$('.email').val(response.data.email);
				$('.contact').val(response.data.contact);
				$('.username').val(response.data.username);
				$('.password').val(response.data.password);
				$('.campus_id').val(response.data.campus_id);
				// $('.department_id').val(response.data.department_id);
				$(".department option:selected").val(response.data.department_id);
			}
		}
	});
}