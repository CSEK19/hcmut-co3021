<?php require_once "mvc/views/blocks/onTop.php" ?>
<h4 style="margin:70px 0 10px 50px ">Order Management</h4>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Phone number</th>
      <th scope="col">Date</th>
      <th scope="col">Total</th>
      <th scope="col">Status</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
    $countOrderItem = count($data["orderItem"]);
    for($i=0;$i<$countOrderItem;$i++){
      echo '<tr>
        <td>'.($i+1).'</td>
        <td><a href="http://localhost/bkstore/Home/detailOrderUser/'.$data["orderItem"][$i]["id"].'">'.$data["orderItem"][$i]["fullname"].'</a></td>
        <td>'.$data["orderItem"][$i]["phone"].'</td>
        <td>'.$data["orderItem"][$i]["created_at"].'</td>
        <td>'.number_format($data["orderItem"][$i]["total_money"]).' đ</td>
        <td>';
        if($data["orderItem"][$i]["status"] == 0)
            echo 'Pending';
        else if($data["orderItem"][$i]["status"] == 1) echo "Shipping";
        else if($data["orderItem"][$i]["status"] == 4) echo "Paid";
        else echo "Done";
        echo '</td>';
        if($data["orderItem"][$i]["status"] != 3)
          echo '<td><a href="http://localhost/bkstore/Home/confirmOrder/'.$data["orderItem"][$i]["id"].'/'.$user["id"].'"><button class="btn btn-danger">Has received the goods</button><a/></td>
      </tr>';
    }
  ?>
  </tbody>
</table>