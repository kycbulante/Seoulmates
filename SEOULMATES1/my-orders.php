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
            <a href="my-orders.php" class="text-white">
                My Orders /
            </a>
    </div>
</div> -->
<div class="py-5">
    <div class="container">
    <div class="card-header bg-dark">
                        <span class="text-white fs-4">My Orders</span>
                        <!-- <a href="my-orders.php" class="btn btn-warning float-end"><i class="fa fa-reply"></i>Back</a> -->
                    </div>
        <div class="card card-body shadow">
        <div class="row">        
            <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>tracking Id</th>
                            <th>price</th>
                            <th>date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $orders = getOrders();

                        if(mysqli_num_rows($orders)>0)
                        {
                            foreach($orders as $item)
                            {?>
                            <tr>
                            <td><?= $item['id']?></td>
                            <td><?= $item['tracking_id']?></td>
                            <td><?= $item['total_price']?></td>
                            <td><?= $item['created_at']?></td>
                            <td>
                                <a href="view-order.php?t=<?= $item['tracking_id']; ?>" class="btn btn-primary">View details</a>
                            </td>
                            </tr>
                            <?php

                            }
                        }
                        else{
                            ?>
                            <tr>
                             <td colspan="5">No orders yet</td>
                            
                            </td>
                        </tr>
                            <?php
                        }
                        
                        
                        ?>
                        
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>

    
<?php include("includes/footer.php"); ?>