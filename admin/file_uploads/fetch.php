<?php
	include_once('../../configs/Database.php');

	$database = new Connection();
	$db = $database->open();
	$num = 1;
	session_start();

	try{	
	    $sql = "SELECT fileuploads.id, d.name dname, id_no, filepath, from_date ,semester,  year, types.name tname 
		FROM fileuploads LEFT JOIN office d ON fileuploads.office_id = d.id 
		LEFT JOIN types ON fileuploads.type_id = types.id 
		WHERE role_id = 'opcr'";

	    foreach ($db->query($sql) as $row) {
			$filename = $row['filepath'];
	    	?>
	    	<tr>
				<td><?php echo $row['id_no']; ?></td>
	    		<td><?php echo $row['dname']; ?></td>
	    		<td><?php echo $row['from_date']?></td>
	    		<td><?php echo $row['semester']?></td>
				<td><?php echo $row['tname']; ?></td>
	    		<td>
					<style>
						a { color: #ffffff;}
					</style>
	    			<button class="btn btn-success btn-sm edit" data-id="<?php echo $row['filepath']; ?>">
						<a href="assets/opcr/<?php echo $row['filepath']; ?>" target="_blank">
							<span class="glyphicon glyphicon-eye-open"></span>
							View
						</a>
					</button>
	    			<button type="button" class="btn btn-danger btn-sm delete" data-id="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#deletemodal"><span class="glyphicon glyphicon-trash"></span> Delete</button>
	    		</td>
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