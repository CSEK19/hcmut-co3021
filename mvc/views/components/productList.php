<!-- Begin Breadcrumb -->
<nav id="nav-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="ml125 breadcrumb-item"><a href="http://localhost/bkstore/Home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product</li>
        </ol>
    </nav>
    <!-- End Breadcrumb -->
    <?php require_once "mvc/views/blocks/onTop.php" ?>
    <div id="wrapper">
    <p style="font-weight:600">Products</p>
    <button 
        style="margin-bottom: 5px; margin-right: 5px;
        <?php
            if($data["category_id"] == 0)
                echo "background-color:#FFA07A";
            else
                echo "background-color:#1B9CE5";
        ?>
        " 
        type="button" 
        class="btn">
        <a style="color:white;text-decoration:none" href="http://localhost/bkstore/Home/productList/0">All</a>
    </button>
    <?php
        $countCategory = count($data["allCategory"]);
            for($i=0;$i<$countCategory;$i++){
                echo   '<button style="margin-bottom: 5px; margin-right: 5px; background-color:#1B9CE5;';if($data["category_id"] == $data["allCategory"][$i]["id"]) echo "background-color:#FFA07A "; echo '" type="button" class="btn">
                    <a style="color:white;text-decoration:none" href="http://localhost/bkstore/Home/productList/'.$data["allCategory"][$i]["id"].'">'.$data["allCategory"][$i]["name"].'</a></button>';
            }
                
    ?>
        
        <hr>
        <p style="font-weight:600">Filter</p>
        <button style="margin-bottom: 5px; margin-right: 5px; background-color:#1B9CE5;
            <?php
                if($data["fillter"] == 1)
                    echo "background-color:#FFA07A";
                
            ?>
        " type="button" class="btn">
            <a style="color:white;text-decoration:none  " href="http://localhost/bkstore/Home/productList/<?=$data["category_id"]?>/1/1">Price (High &gt; Low)</a></button>
        <button style="margin-bottom: 5px; margin-right: 5px; background-color:#1B9CE5;
            <?php
                if($data["fillter"] == 2)
                    echo "background-color:#FFA07A";
            ?>
        " type="button" class="btn">
            <a style="color:white;text-decoration:none" href="http://localhost/bkstore/Home/productList/<?=$data["category_id"]?>/1/2">Price (Low &gt; High)</a></button>
        <button style="margin-bottom: 5px; margin-right: 5px; background-color:#1B9CE5;
            <?php
                if($data["fillter"] == 3)
                    echo "background-color:#FFA07A";
            ?>
        " type="button" class="btn">
            <a style="color:white;text-decoration:none" href="http://localhost/bkstore/Home/productList/<?=$data["category_id"]?>/1/3">Name (A &gt; Z)</a></button>
        <button style="margin-bottom: 5px; margin-right: 5px; background-color:#1B9CE5;
            <?php
                if($data["fillter"] == 4)
                    echo "background-color:#FFA07A";
            ?>
        " type="button" class="btn">
            <a style="color:white;text-decoration:none" href="http://localhost/bkstore/Home/productList/<?=$data["category_id"]?>/1/4">Name (Z &gt; A)</a></button>
       
        <hr>
        <?php
            $countCategoyCheck = 0;
            $countProduct = count($data["allProductCategory"]);
            echo '<p style="font-weight:600">'.$countProduct.' products in total (From: '.(1+$data["currentIndex"]).' -> '; 
                if($data["currentIndex"]+12 < $countProduct)
                    echo $data["currentIndex"]+12;
                else echo $countProduct;
                echo ')</p> ';
        ?>
        <hr>
        <div class="showproduct">
        <?php
            for($i=$data["currentIndex"];$i<$data["currentIndex"]+12 && $i<$countProduct;$i++){
                echo    '<div style="margin-bottom:10px" class="card">';
                echo        '<a href="http://localhost/bkstore/Home/productDetail/'.$data["allProductCategory"][$i]["id"].'">
                                <img class="card-img-top mt-2"
                                    src="'.$data["allProductCategory"][$i]["thumbnail"].'"
                                    alt="Card image cap">
                            </a>';
                echo        '<div class="card-body">';
                echo            '<a id="taga" href="http://localhost/bkstore/Home/productDetail/'.$data["allProductCategory"][$i]["id"].'"><h5 class="card-title">'.$data["allProductCategory"][$i]["title"].'</h5></a>
                                <hr />';
                echo            '<span class="card-text">'.number_format($data["allProductCategory"][$i]["price"]).'đ</span>';
                echo            '<span style="margin-left:12px; text-decoration: line-through;" class="card-text">'; if($data["allProductCategory"][$i]["discount"] != 0 AND is_numeric($data["allProductCategory"][$i]["discount"])) echo number_format($data["allProductCategory"][$i]["discount"]).'đ'; echo '</span>';
                echo        '</div>';
                echo        '<button type="button" class="btnOrder btn btn-danger" onclick="addToCard('.$data["allProductCategory"][$i]["id"].')">Order</button>';
                echo    '</div>';
            }
        ?>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination pg-blue justify-content-center">
                <li class="page-item">
            <?php
                    if($data["numPages"]>1){
                        if($data["pages"]==1){
                            echo    '<a href="http://localhost/bkstore/Home/productList/'.$data["category_id"].'/1" class="page-link"><i class="fa fa-chevron-left"></i> Previous</a>';
                        }
                        else echo    '<a href="http://localhost/bkstore/Home/productList/'.$data["category_id"].'/'.($data["pages"]-1).'" class="page-link"><i class="fa fa-chevron-left"></i> Previous</a>';
                        echo '</li>';
                        for($i=1; $i<=$data["numPages"];$i++){
                            if($i == $data["pages"]){
                                echo '<li class="page-item active"><a class="page-link" href="http://localhost/bkstore/Home/productList/'.$data["category_id"].'/'.$i.'">'.$i.'</a></li>';
                            }
                            else echo '<li><a class="page-link" href="http://localhost/bkstore/Home/productList/'.$data["category_id"].'/'.$i.'">'.$i.'</a></li>';
                        }
                        echo '<li class="page-item">';
                        if($data["pages"] == $data["numPages"]){
                            echo '<a href="http://localhost/bkstore/Home/productList/'.$data["category_id"].'/'.$data["numPages"].'" class="page-link"> Next <i class="fa fa-chevron-right"></i></a>';
                        }
                        else echo '<a href="http://localhost/bkstore/Home/productList/'.$data["category_id"].'/'.($data["pages"]+1).'" class="page-link "> Next <i class="fa fa-chevron-right"></i></a>';
                    }
                ?>
                </li>
            </ul>
        </nav>
    </div>
<script type="text/javascript">
    $(document).ready(function(){
		$(".btnOrder").click(function(){
            $("#alertSuccess").html('<p style="background-color: #55e073;padding: 10px;"><i class="fas fa-check-circle"></i>Successfully add to cart</p>');
		});
	});
    
    function addToCard(productId, priceProduct) {
        var action = "add";
        $.ajax({
            url:"http://localhost/bkstore/home/addToCart",
            method:"POST",
            data:{action:action ,productId:productId, num:1, priceProduct:priceProduct},
            success:function(data){
                location.reload();
            }
        });
    }
</script>