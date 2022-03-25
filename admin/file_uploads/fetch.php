<?php
	include_once('../../configs/Database.php');

	$database = new Connection();
	$db = $database->open();
	$num = 1;

	try{	
	    $sql = 'SELECT ipdo.id, d.name dname, from_date, to_date, year, types.name AS tname FROM ipdo LEFT JOIN department d ON ipdo.department_id = d.id LEFT JOIN types ON ipdo.type_id = types.id';
	    foreach ($db->query($sql) as $row) {
	    	?>
	    	<tr>
				<td><?php echo $num; ?></td>
	    		<td><?php echo $row['dname']; ?></td>
	    		<td><?php echo $row['from_date'] . " - " . $row['to_date']; ?></td>
	    		<td><?php echo $row['year']; ?></td>
				<td><?php echo $row['tname']; ?></td>
	    		<td>
	    			<button class="btn btn-success btn-sm edit" data-id="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-edit"></span> View</button>
	    			<button class="btn btn-danger btn-sm delete" data-id="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-trash"></span> Delete</button>
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