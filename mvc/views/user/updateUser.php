<?php
	$title = 'Change User Account Information';
	$isActive = "UserAdmin";
	require_once('mvc/views/blocks/header_admin.php');
?>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3> Change User Account Information</h3>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h5 style="color: red;"></h5>
			</div>
			<div class="panel-body">
				<form method="post" action="http://localhost/bkstore/UserAdmin/updateUser/">
					<div class="form-group">
					  <label for="usr">Full name:</label>
					  <input required="true" type="text" class="form-control" id="usr" name="fullname" value="<?=$data["userItem"]["fullname"]?>">
					  <input type="text" name="id" value="<?=$data["userItem"]["id"]?>" hidden="true">
					</div>
					<div class="form-group">
					  <label for="usr">Role:</label>
					  <select class="form-control" name="role_id" id="role_id" required="true">
					  	<option value="">-- Select --</option>
					  	<?php
						  	$countRole = count($data["role"]);
					  		for($i=0;$i<$countRole;$i++) {
					  			if($data["userItem"]['role_id'] == $data["role"][$i]["id"]) {
					  				echo '<option selected value="'.$data["role"][$i]['id'].'">'.$data["role"][$i]['name'].'</option>';
					  			} else {
					  				echo '<option value="'.$data["role"][$i]['id'].'">'.$data["role"][$i]['name'].'</option>';
					  			}
					  		}
					  	?>
					  </select>
					</div>
					<div class="form-group">
					  <label for="email">Email:</label>
					  <input required="true" type="email" class="form-control" id="email" name="email" value="<?=$data["userItem"]["email"]?>">
					</div>
					<div class="form-group">
					  <label for="phone_number">Phone Number:</label>
					  <input required="true" type="tel" class="form-control" id="phone_number" name="phone_number" value="<?=$data["userItem"]["phone_number"]?>">
					</div>
					<div class="form-group">
					  <label for="address">Address:</label>
					  <input required="true" type="text" class="form-control" id="address" name="address" value="<?=$data["userItem"]["address"]?>">
					</div>
					<div class="form-group">
					  <label for="pwd">Password:</label>
					  <input type="password" class="form-control" id="pwd" name="password" minlength="6">
					</div>
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php
	require_once('mvc/views/blocks/footer_admin.php');
?>