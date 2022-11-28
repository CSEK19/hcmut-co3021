<?php
	$title = 'Product Management';
	$isActive = "CategoryAdmin";
	require_once('mvc/views/blocks/header_admin.php');
?>
<?php require_once "mvc/views/blocks/onTop.php" ?>
<div class="row" style="margin-top: 20px;">
	<div class="col-md-12" style="margin-bottom: 20px;">
		<h3>Product Management</h3>
	</div>
	<div class="col-md-6">
		<form method="post" action="http://localhost/bkstore/CategoryAdmin/doupdateCategoryController">
			<div class="form-group">
			  <label for="usr" style="font-weight: bold;">Edit Category Name:</label>
			  <input required="true" type="text" class="form-control" id="usr" name="name" value="<?=$data["name"]?>">
			  <input type="text" name="id" value="<?=$data["id"]?>" hidden="true">
			</div>
			<button class="btn btn-success">Save</button>
		</form>
	</div>
</div>

<?php
	require_once('mvc/views/blocks/footer_admin.php');
?>