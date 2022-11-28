<?php
	$title = 'Product Management';
    $isActive = "ProductAdmin";
	require_once('mvc/views/blocks/header_admin.php');
?>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3>Product Management</h3>

		<a href="http://localhost/bkstore/ProductAdmin/viewAddProduct"><button class="btn btn-success">Add Product</button></a>

		<table class="table table-bordered table-hover" style="margin-top: 20px;">
			<thead>
				<tr>
					<th>No</th>
					<th>Thumbnail</th>
					<th>Product</th>
					<th>Price</th>
					<th>Category</th>
					<th style="width: 50px"></th>
					<th style="width: 50px"></th>
				</tr>
			</thead>
			<tbody>
<?php
	$countCategory = count($data["allProduct"]);
	for($i=0; $i<$countCategory;$i++) {
		echo '<tr>
					<th>'.($i).'</th>
					<td><img src="'.fixUrl($data["allProduct"][$i]["thumbnail"]).'" style="height: 100px"/></td>
					<td>'.$data["allProduct"][$i]["title"].'</td>
					<td>'.number_format($data["allProduct"][$i]['price']).' VNĐ</td>
					<td>'.$data["allProduct"][$i]['category_name'].'</td>
					<td style="width: 50px">
						<a href="http://localhost/bkstore/ProductAdmin/viewUpdateProduct/'.$data["allProduct"][$i]["id"].'"><button class="btn btn-warning">Modify</button></a>
					</td>
					<td style="width: 50px">
					<a href="http://localhost/bkstore/ProductAdmin/deleteProduct/'.$data["allProduct"][$i]["id"].'"><button class="btn btn-danger">Delete</button></a>
					</td>
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