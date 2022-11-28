<?php require_once "mvc/views/blocks/onTop.php" ?>
<div style="margin-top:70px" class="container">
            <h3>Order details</h3>
            <div class="table-responsive">
                <form action="http://localhost/bkstore/PaymentOnline" id="create_form" method="post">       
                    <input type="text" name="user_id" value="<?=$user["id"]?>" hidden="true">
                    
                    <div class="form-group">
                        <label for="form11">Full name </label>
                        <input type="text" name="fullname" id="form11" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="form18">Phone number </label>
                        <input type="text" name="phone" id="form18" class="form-control" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <label for="form19">Email </label>
                        <input type="email" name="email" id="form19" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="form14">Address </label>
                        <input type="text" name="address" id="form14" placeholder="Address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="language">Product type </label>
                        <select name="order_type" id="order_type" class="form-control">
                            <option value="billpayment">Payment</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="order_id">Order Id</label>
                        <input class="form-control" id="order_id" name="order_id" type="text" value="<?php echo date("YmdHis") ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="amount">Price</label>
                        <input class="form-control" id="amount"
                               name="amount" type="number" value="<?=$data["totalMoney"]?>"/>
                    </div>
                    <div class="form-group">
                        <label for="order_desc">Payment details</label>
                        <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2">Payment details</textarea>
                    </div>
                    <div class="form-group">
                        <label for="bank_code">Bank</label>
                        <select name="bank_code" id="bank_code" class="form-control">
                            <option value="">None</option>
                            <option value="NCB"> NCB Bank</option>
                            <option value="AGRIBANK"> Agribank Bank</option>
                            <option value="SCB"> SCB Bank</option>
                            <option value="SACOMBANK">SacomBank Bank</option>
                            <option value="EXIMBANK"> EximBank Bank</option>
                            <option value="MSBANK"> MSBANK Bank</option>
                            <option value="NAMABANK"> NamABank Bank</option>
                            <option value="VIETINBANK">Vietinbank Bank</option>
                            <option value="VIETCOMBANK">VCB Bank</option>
                            <option value="HDBANK">HDBank Bank</option>
                            <option value="DONGABANK">Dong A Bank</option>
                            <option value="TPBANK">TPBank Bank</option>
                            <option value="OJB">OceanBank Bank</option>
                            <option value="BIDV">BIDV Bank</option>
                            <option value="TECHCOMBANK">Techcombank Bank</option>
                            <option value="VPBANK"> VPBank Bank</option>
                            <option value="MBBANK"> MBBank Bank</option>
                            <option value="ACB">  ACB Bank</option>
                            <option value="OCB">  OCB Bank</option>
                            <option value="IVB">  IVB Bank</option>
                            <option value="VISA"> VISA/MASTER</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="language">Language</label>
                        <select name="language" id="language" class="form-control">
                            <option value="vn">Vietnamese</option>
                            <option value="en">English</option>
                        </select>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary" id="btnPopup">Thanh toán Post</button> -->
                    <button type="submit" name="redirect" id="redirect" class="btn btn-primary">Payment</button>

                </form>
            </div>
            <p>
                &nbsp;
            </p>
            <footer class="footer">
                <p>&copy; VNPAY <?php echo date('Y')?></p>
            </footer>
        </div> 