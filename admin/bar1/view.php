<!DOCTYPE html>

<?php
    include_once('../../configs/Database.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();

	$id = $_GET['id'];
    // session_start();

    // if(!$_SESSION["loggedin"])
    // {
    //     header("Location: ../index.php");
    // }

?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Report Operations</title>
	<link rel="stylesheet" href="../css/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

		<script>
			function generatePDF() {
				// Choose the element that our invoice is rendered in.
				const element = document.getElementById('invoice');
				// Choose the element and save the PDF for our user.
				var opt = {
				filename:     'myfile.pdf',
				pagebreak: { mode: 'avoid-all', after: '#page2el' },
				margin:       [0.5, 0.7],
				html2canvas:  { scale: 1 },
				jsPDF:        { unit: 'in', format: 'letter', orientation: 'landscape' },
				
				};
				// New Promise-based usage:
				html2pdf().set(opt).from(element).save();
			}
		</script>
</head>
<body>
	<div id="invoice">
	<div class="report-title">
		<span>Quarterly Physical Report of Operations</span>
	</div>
	<div>
		<?php
		try{
			$sql = 'SELECT * FROM department WHERE id = '. $id;
			foreach ($db->query($sql) as $row) { ?>

		<div  class="top-titles">
			<div>
				<span>Department:</span>
			</div>
			<div>
				<span><?php echo $row['department']; ?></span>
			</div>
		</div>
		<div  class="top-titles">
			<div>
				<span>Agency:</span>
			</div>
			<div>
				<span><?php echo $row['agency']; ?></span>
			</div>
		</div>
		<div  class="top-titles">
			<div>
				<span>As at Quarter Ending:Year:</span>
			</div>
			<div>
				<span><?php echo $row['quarter']; ?></span>
			</div>
		</div>
		<div  class="top-titles">
			<div>
				<span>Organization Code:</span>
			</div>
			<div>
				<span><?php echo $row['op_unit']; ?></span>
			</div>	
		</div>
			
		<?php
				}
			}
			catch(PDOException $e){
				echo "There is some problem in connection: " . $e->getMessage();
			}
			//close connection
			$database->close();
			?>
		
	</div>

	<table class="content-table" id="my-table" style="border-collapse: collapse;">
		<thead>
			<tr style="font-size: 12px;">
				<th rowspan="2">Particulars</th>
				<th rowspan="2">UACS CODE</th>
				<th colspan="4">Physical Targets</th>
				<th rowspan="2">Total</th>
				<th colspan="4">Physical Accomplishments</th>
				<th rowspan="2">Total</th>
				<th rowspan="2">Variance as<BR>June 30, 2021</th>
				<th rowspan="2">Remarks</th>
			</tr>
			<tr style="font-size: 12px;">
				<th>1st Quarter</th>
				<th>2nd Quarter</th>
				<th>3rd Quarter</th>
				<th>4th Quarter</th>
				<th>1st Quarter</th>
				<th>2nd Quarter</th>
				<th>3rd Quarter</th>
				<th>4th Quarter</th>
			</tr>
		</thead>
		<tbody>
			
			<?php
			try{
				$sql = 'SELECT * FROM department LEFT JOIN department_lines on department.unique_id = department_lines.unique_id WHERE department.id = '. $id . ' ORDER BY department_lines.row_count' ;
				foreach ($db->query($sql) as $row) { ?>
				<tr>
					<td class="row-title"><?php echo $row['row_title']; ?></td>
					<td><?php echo $row['uacs_code']; ?></td>
					<td><?php echo $row['pt_q1']; ?></td>
					<td><?php echo $row['pt_q2']; ?></td>
					<td><?php echo $row['pt_q3']; ?></td>
					<td><?php echo $row['pt_q4']; ?></td>
					<td><?php echo $row['pt_total']; ?></td>
					<td><?php echo $row['pa_q1']; ?></td>
					<td><?php echo $row['pa_q2']; ?></td>
					<td><?php echo $row['pa_q3']; ?></td>
					<td><?php echo $row['pa_q4']; ?></td>
					<td><?php echo $row['pa_total']; ?></td>
					<td><?php echo $row['variance']; ?></td>
					<td><?php echo $row['remarks']; ?></td>
				</tr>
				
			<?php
				}
			}
			catch(PDOException $e){
				echo "There is some problem in connection: " . $e->getMessage();
			}
			//close connection
			$database->close();
			?>

		</tbody>
	</table>

	</div>


	<button onclick="generatePDF()">Download as PDF</button>

</body>
</html>