<?php
	$title = 'Order Details';
    $isActive = "OrderAdmin";
	require_once('mvc/views/blocks/header_admin.php');
?>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3>Order Details</h3>

		<table class="table table-bordered table-hover" style="margin-top: 20px;">
			<thead>
				<tr>
					<th>No</th>
					<th>Full name</th>
					<th>Email</th>
					<th>Total</th>
					<th>date</th>
					<th style="width: 120px"></th>
				</tr>
			</thead>
			<tbody>
<?php
	$countOrder = count($data["allOrder"]);
	for ($i=0; $i<$countOrder; $i++) {
		echo '<tr>
					<th>'.$i.'</th>
					<td><a href="http://localhost/bkstore/OrderAdmin/detailOrder/'.$data["allOrder"][$i]['id'].'">'.$data["allOrder"][$i]['fullname'].'</a></td>
					<td>'.$data["allOrder"][$i]['email'].'</a></td>
					<td>'.number_format($data["allOrder"][$i]['total_money']).' đ</td>
					<td>'.$data["allOrder"][$i]['created_at'].'</td>
					<td style="width: 50px">';
		if($data["allOrder"][$i]['status'] == 0) {
			echo '<a href="http://localhost/bkstore/OrderAdmin/updateStatusOrder/'.$data["allOrder"][$i]['id'].'/1"><button  class="btn btn-sm btn-success" style="margin-bottom: 10px;">Accept</button><a/>
			<a href="http://localhost/bkstore/OrderAdmin/updateStatusOrder/'.$data["allOrder"][$i]['id'].'/2"><button class="btn btn-sm btn-danger">Cancel</button><a/>';
		} else if($data["allOrder"][$i]['status'] == 1) {
			echo '<label class="badge badge-success">Accepted</label>';
		} else if($data["allOrder"][$i]['status'] == 2){
			echo '<label class="badge badge-danger">Canceled</label>';
		}
		else if($data["allOrder"][$i]['status'] == 4){
			echo '<a href="http://localhost/bkstore/OrderAdmin/updateStatusOrder/'.$data["allOrder"][$i]['id'].'/1"><button  class="btn btn-sm btn-success" style="margin-bottom: 10px;">Accept</button><a/>
			<a href="http://localhost/bkstore/OrderAdmin/updateStatusOrder/'.$data["allOrder"][$i]['id'].'/2"><button class="btn btn-sm btn-danger">Cancel</button><a/>';
			echo '<label class="badge badge-danger">Paid</label>';
		}	
		else echo '<label class="badge badge-danger">Transfer success</label>';
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