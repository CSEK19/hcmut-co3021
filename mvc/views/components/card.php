<!--Section: Block Content-->
<?php require_once "mvc/views/blocks/onTop.php" ?>
<nav id="nav-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="ml125 breadcrumb-item"><a href="http://localhost/bkstore/Home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </ol>
    </nav>
<section>
<?php
  
?>
  <!--Grid row-->
  <div id="wrapper" class="row">

    <!--Grid column-->
    <div class="col-lg-8">

      <!-- Card -->
      <?php
        $total = 0;
        for($i=0;$i<$data["countOrder"];$i++){
            $total += $data["num"][$i]*$data["orderDetails"][$i]["price"];
            echo '<div class="mb-3">
              <div class="pt-4 wish-list">
                <div class="row mb-4">
                  <div class="col-md-5 col-lg-3 col-xl-3">
                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                       <a href="http://localhost/bkstore/Home/productDetail/'.$data["orderDetails"][$i]["id"].'">
                        <div class="mask">
                          <img class="img-fluid w-100"
                            src="'.$data["orderDetails"][$i]["thumbnail"].'">
                          <div class="mask rgba-black-slight"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-7 col-lg-9 col-xl-9">
                    <div>
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5>'.$data["orderDetails"][$i]["title"].'</h5>
                          <p class="mb-3 text-muted text-uppercase small">Price: '.number_format($data["orderDetails"][$i]["price"]).' đ</p>
                          <p class="mb-3 text-muted text-uppercase small">Amount: '.$data["num"][$i].'</p>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <p style="color:red; cursor:pointer" onclick="deleteCart('.$data["orderDetails"][$i]["id"].')" href="#!" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                              class="fas fa-trash-alt mr-1"></i> Remove item </p>
                        </div>
                        <p class="mb-0"><span><strong id="summary">'.number_format($data["num"][$i]*$data["orderDetails"][$i]["price"]).' đ</strong></span></p class="mb-0">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr/>';
        }
      ?>
      <!-- Card -->

      <!-- Card -->
      
      <!-- Card -->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4">
    <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-4">Payment methods</h5>

          <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
            alt="Visa">
          <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
            alt="American Express">
          <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
            alt="Mastercard">
          <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
            alt="PayPal acceptance mark">
        </div>
      </div>
      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-3">Total:</h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Product price:
              <span><?=number_format($total)?> đ</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              Shipping fee:
              <span>Freeship</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>Total:</strong>
              </div>
              <span><strong><?=number_format($total)?> đ</strong></span>
            </li>
          </ul>
          <?php
            if(isset($user)){
              if ($data["countOrder"] > 0) {
              echo '<a style="color:white;text-decoration:none" href="http://localhost/bkstore/Home/checkout/'.$total.'"><button type="button" class="btn btn-primary btn-block">Pay by cash</button></a>';
              echo '<br/>';
              echo '<a style="color:white;text-decoration:none" href="http://localhost/bkstore/Home/paymentOnline/'.$total.'"><button type="button" class="btn btn-primary btn-block">Online transfer</button></a>';}
              else {
                echo '<a style="color:red" href="http://localhost/bkstore/Home">Please select products to make payment.</a>';
              }
            }
            
            else echo '<a style="color:red" href="http://localhost/bkstore/Login">Sign in to make payment.</a>'; 
          ?>
          

        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
      <!-- Card -->

    </div>
    <!--Grid column-->

  </div>
  <!-- Grid row -->

</section>
<!--Section: Block Content-->

<script type="text/javascript">
	function deleteCart(productId) {
		var action = "delete";
        $.ajax({
            url:"../home/deleteCart",
            method:"POST",
            data:{action:action ,productId:productId},
            success:function(data){
                location.reload();
            }
        });
	}
</script>