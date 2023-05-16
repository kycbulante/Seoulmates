<?php 
include('functions/userfunctions.php');
include("includes/header.php"); 
include("authenticate.php"); 
?>

<!-- <div class="py-3 bg-primary">
    <div class="container">
        <h6 class="text-white">
            <a href="index.php" class="text-white">
                Home /
            </a>
            <a href="cart.php" class="text-white">
                Cart /
            </a>
    </div>
</div> -->
<div class="py-5">
    <div class="container">
        <div class="card card-body shadow">
        <div class="row">
            <div class="col-md-12">
            <div id="mycart">
            <?php $items = getCartItems();

                if(mysqli_num_rows($items)>0){
                    ?>
                <div class="row align-items-center">
                                
                                <div class="col-md-5">
                                    <h6>Product</h6>
                                </div>
                                <div class="col-md-3">
                                    <h6>Price</h6>
                                </div>
                                <div class="col-md-2">
                                    <h6>Quantity</h6>
                                </div>
                                <div class="col-md-2">
                                    <h6>Remove</h6>
                                </div>
                    </div>
                    <div id="">
                        <?php
                            foreach($items as $citem)
                            {
                                ?>
                                    <div class="card product_data shadow-sm mb-3">
                                            <div class="row align-items-center">
                                                <div class="col-md-2">
                                                    <img src="uploads/<?= $citem['image']; ?>" alt="Image" width="80px">
                                                </div>
                                                <div class="col-md-3">
                                                    <h5><?= $citem['product_title']; ?></h5>
                                                </div>
                                                <div class="col-md-3">
                                                    <h5>PHP<?= $citem['price']; ?></h5>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="hidden" class="prodId" value="<?= $citem['prod_id']; ?>">
                                                    <div class="input-group mb-3" style="width:130px">
                                                                    <button class="input-group-text decrement-btn updateQty">-</button>
                                                                    <input type="text" class="form-control text-center input-qty bg-white" value="<?=$citem['prod_qty'];?>" disabled>
                                                                    <button class="input-group-text increment-btn updateQty">+</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button class="btn btn-danger btn-sm deleteItem" value="<?= $citem['cid']; ?>">Remove <i class="fa fa-trash"></i></button>
                                                </div>
                                            </div>
                                    </div>
                                <?php
                                
                                // echo $citem['product_title'];
                            }
                  
                        ?>
                    </div>
                    <div class="float-end">
                        <a href="checkout.php" class="btn btn-outline-primary">Proceed to Checkout</a>
                    </div>
                    <?php
                      }
                      else{
                        ?>
                        <card class="card-body shadow text-center">
                            <h4 class="py-3">Cart is empty</h4>
                        </card>
                        <?php
                      }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
<?php include("includes/footer.php"); ?>