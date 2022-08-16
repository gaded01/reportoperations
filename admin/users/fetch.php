<?php
	include_once('../../configs/Database.php');

	$database = new Connection();
	$db = $database->open();
	$num = 1;

	try{	
	    $sql = 'SELECT * FROM users';
	    foreach ($db->query($sql) as $row) {
	    	?>
	    	<tr>
				<td><?php echo $row['id_no']; ?></td>
	    		<td><?php echo $row['firstname']; ?></td>
	    		<td><?php echo $row['lastname']; ?></td>
	    		<td><?php echo $row['middlename']; ?></td>
				<td><?php echo $row['email']; ?></td>
	    		<td>
	    			<button type="button" class="btn btn-success btn-sm edit" data-id="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#editmodal"><span class="glyphicon glyphicon-edit"></span> Edit</button>
	    			<button type="button" class="btn btn-danger btn-sm delete" data-id="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#deletemodal"><span class="glyphicon glyphicon-trash"></span> Delete</button>
	    		</td>
	    	</tr>
	    	<?php
			$num++;
	    }
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	//close connection
	$database->close();
	
?>