<!--Section: Block Content-->
<?php require_once "mvc/views/blocks/onTop.php" ?>
<nav id="nav-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="ml125 breadcrumb-item"><a href="http://localhost/bkstore/Home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Order</li>
        </ol>
    </nav>
<!-- Card -->
<div id="wrapper">
  <div class="pt-4 pb-3">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-6 mb-5 mb-lg-0">

      <h5 class="mb-4 pb-1">Payment method</h5>

      <!-- Grid row -->
      <form method="POST" action="http://localhost/bkstore/OrderAdmin/addOrderSuccess">
      <div class="row">
        <!-- Grid column -->
        <div class="col-lg-12">

          <div class="md-form md-outline mt-0">
            <label for="form11">Full name</label>
            <input type="text" name="fullname" id="form11" class="form-control" placeholder="Name">
          </div>

        </div>

      </div>
      <input type="text" name="user_id" value="<?=$user["id"]?>" hidden="true">
      <input type="text" name="totalMoney" value="<?=$data["totalMoney"]?>" hidden="true">
      <div class="md-form md-outline mt-0">
        <label for="form14">Address</label>
        <input type="text" name="address" id="form14" placeholder="Address" class="form-control">
      </div>

      <!-- Phone -->
      <div class="md-form md-outline mt-0">
        <label for="form18">Phone number</label>
        <input type="text" name="phone" id="form18" class="form-control" placeholder="Phone">
      </div>

      <!-- Email address -->
      <div class="md-form md-outline mt-0">
        <label for="form19">Email</label>
        <input type="email" name="email" id="form19" class="form-control" placeholder="Email">
      </div>

      <a style="color:white;text-decoration:none" ><button onclick=checkOrderCheckout() name="btnCheckout" class="btn btn-primary btn-block">Submit</button></a>
</form>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-6">

    <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-3">Total:</h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Product price:
              <span><?=number_format($data["totalMoney"])?> đ</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              Shipping fee:
              <span>Freeship</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>Total:</strong>
              </div>
              <span><strong><?=number_format($data["totalMoney"])?> đ</strong></span>
            </li>
          </ul>

          

        </div>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  </div>
</div>
<!-- Card -->
<!--Section: Block Content-->
<script type="text/javascript">
    function checkOrderCheckout() {
        var fullname = document.getElementById("form11").value;
        var email = document.getElementById("form19").value;
        var phone_number = document.getElementById("form18").value;
        var address = document.getElementById("form14").value;

        if(fullname == '' || email == '' || phone_number == ''|| address == ''  ) 
          alert("Please fill all forms!!!");
    }
</script>