<?php require_once "mvc/views/blocks/onTop.php" ?>
<!--Begin display -->
<div class="container">
    <div class="header clearfix">
        <h3 class="text-muted">Order details</h3>
    </div>
    <div class="table-responsive">
        <div class="form-group">
            <label>Order Id:</label>

            <label><?php echo $data["order_id"] ?></label>
        </div>
        <div class="form-group">

            <label>Price:</label>
            <label><?=number_format($data["money"]/100) ?> VNĐ</label>
        </div>
        <div class="form-group">
            <label>Payment details:</label>
            <label><?php $data["note"] ?></label>
        </div>
        <div class="form-group">
            <label>Response Code:</label>
            <label><?php echo $data["vnp_response_code"] ?></label>
        </div>
        <div class="form-group">
            <label>ResponseCode VNPAY:</label>
            <label><?php echo $data["code_vnpay"] ?></label>
        </div>
        <div class="form-group">
            <label>Bank Id:</label>
            <label><?php echo $data["code_bank"] ?></label>
        </div>
        <div class="form-group">
            <label>Time:</label>
            <label><?php echo $data["time"] ?></label>
        </div>
        <div class="form-group">
            <label>Result:</label>
            <label>
                <?php
                if ($data["secureHash"] == $data["vnp_SecureHash"]) {
                        echo "Successful";
                    } else {
                        echo "Not successful";
                    }
                } else {
                    echo "Invalid sign";
                }
                ?>

            </label>
            <br>
            <a href="../code/hocvien_thanhtoan.php">
                <button>Back</button>
            </a>
        </div>
    </div>
    <p>
        &nbsp;
    </p>
    <footer class="footer">
        <p>&copy; Bkstore 2022</p>
    </footer>
</div>