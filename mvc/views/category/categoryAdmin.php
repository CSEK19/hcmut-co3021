<?php
	$title = 'Product Management';
	$isActive = "CategoryAdmin";
	require_once('mvc/views/blocks/header_admin.php');
?>
<?php require_once "mvc/views/blocks/onTop.php" ?>
<div class="row" style="margin-top: 20px;">
	<div class="col-md-12" style="margin-bottom: 20px;">
		<h3>Product Management</h3>
		<p class="d-none" id="deleteSuccess"><?=$data["deleteSuccess"]?></p>
	</div>
	<div class="col-md-6">
		<form method="post" action="http://localhost/bkstore/CategoryAdmin/insertCategoryController">
			<div class="form-group">
			  <label for="usr" style="font-weight: bold;">Product:</label>
			  <input required="true" type="text" class="form-control" id="usr" name="name">
			</div>
			<button class="btn btn-success">Save</button>
		</form>
	</div>
	<div class="col-md-6 table-responsive">
		<table class="table table-bordered table-hover" style="margin-top: 20px;">
			<thead>
				<tr>
					<th>No</th>
					<th>Product</th>
					<th style="width: 50px"></th>
					<th style="width: 50px"></th>
				</tr>
			</thead>
			<tbody>
<?php
	$countCategory = count($data["category"]);
	for($i=0; $i<$countCategory;$i++) {
		echo '<tr>
					<th>'.($i).'</th>
					<td>'.$data["category"][$i]['name'].'</td>
					<td style="width: 50px">
						<a href="http://localhost/bkstore/CategoryAdmin/updateCategoryController/'.$data["category"][$i]["id"].'"><button class="btn btn-warning">Modify</button></a>
					</td>
					<td style="width: 50px">
					<a href="http://localhost/bkstore/CategoryAdmin/deleteCategoryController/'.$data["category"][$i]["id"].'"><button class="btn btn-danger">Delete</button></a>
					</td>
				</tr>';
	}
	
?>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">

	var deleteSuccess = document.getElementById("deleteSuccess").innerHTML;
	if(deleteSuccess == 1){
		alert("Delete failed!!! Please delete all products in the category!!!")
	}

</script>
<?php
	require_once('mvc/views/blocks/footer_admin.php');
?>