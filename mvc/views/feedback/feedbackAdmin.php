<?php
	$title = 'Feedback Management';
    $isActive = "FeedbackAdmin";
	require_once('mvc/views/blocks/header_admin.php');
?>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3>Feedback Management</h3>

		<table class="table table-bordered table-hover" style="margin-top: 20px;">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Phone Number</th>
					<th>Email</th>
					<th>Product</th>
					<th>Details</th>
					<th>Date</th>
					<th style="width: 120px"></th>
				</tr>
			</thead>
			<tbody>
<?php
	$countFeedback = count($data["allFeedback"]);
	for($i=0; $i<$countFeedback; $i++) {
		echo '<tr>
					<th>'.$i.'</th>
					<td>'.$data["allFeedback"][$i]['fullname'].'</td>
					<td>'.$data["allFeedback"][$i]['phone_number'].'</td>
					<td>'.$data["allFeedback"][$i]['email'].'</td>
					<td>'.$data["allFeedback"][$i]['title'].'</td>
					<td>'.$data["allFeedback"][$i]['note'].'</td>
					<td>'.$data["allFeedback"][$i]['updated_at'].'</td>
					<td style="width: 50px">';
		if($data["allFeedback"][$i]['status'] == 0) {
			echo '<a href="http://localhost/bkstore/FeedbackAdmin/updateStatusFeedback/'.$data["allFeedback"][$i]['id'].'"><button class="btn btn-danger">Seen</button><a/>';
		}	
		echo '</td>
				</tr>';
	}
?>
			</tbody>
		</table>
	</div>
</div>

<?php
	require_once('mvc/views/blocks/footer_admin.php');
?>