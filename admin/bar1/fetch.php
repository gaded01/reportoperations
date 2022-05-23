<?php
	include_once('../../configs/Database.php');

	$database = new Connection();
	$db = $database->open();
	$num = 1;

	try{	
	    $sql = "SELECT * FROM bar1";

	    foreach ($db->query($sql) as $row) {
	    	?>
	    	<tr>
				<td><?php echo $num; ?></td>
	    		<td><?php echo $row['department']; ?></td>
	    		<td><?php echo $row['agency']?></td>
	    		<td><?php echo $row['quarter']; ?></td>
				<td><?php echo $row['op_unit']; ?></td>
	    		<td>
				<style>
						a { color: #ffffff;}
					</style>
	    			<button class="btn btn-success btn-sm edit">
						<a href="bar1/view.php?id=<?php echo $row['id']; ?>" target="_blank">
							<span class="glyphicon glyphicon-edit"></span>
							View
						</a>
					</button>
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