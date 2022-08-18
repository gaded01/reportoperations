<?php
	include_once('../../configs/Database.php');

	$database = new Connection();
	$db = $database->open();
	$num = 1;
	session_start();

	try{	
	    $sql = "SELECT accomplishment.id, id_no, filename, image, d.name dname
		FROM accomplishment LEFT JOIN office d ON accomplishment.office_id = d.id";

	    foreach ($db->query($sql) as $row) {
			$filename = $row['image'];
	    	?>
	    	<tr>
				<td><?php echo $row['id_no']; ?></td>
	    		<td><?php echo $row['filename']; ?></td>
                <td><?php echo $row['dname']; ?></td>
	    		<td>
					<style>
						a { color: #ffffff;}
					</style>
	    			<button class="btn btn-success btn-sm edit" data-id="<?php echo $row['image']; ?>">
						<a href="assets/accomplishment/<?php echo $row['image']; ?>" target="_blank">
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