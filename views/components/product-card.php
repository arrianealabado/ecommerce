<div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo BASE_URL. $product["image_url"]; ?>" class ="card-img-top" alt ="Product Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product["product_name"];?></h5>
                        <p class="card-text">Category: <?php echo $product["category_id"];?></p>
                        <p class="card-text">Price: <?php echo number_format ($product["unit_price"],2);?></p>
                        <p class="card-text">Stock: <?php echo $product["stocks"];?></p>
                        <p class="card-text">Total Price: <?php echo number_format ($product["total_price"],2);?></p>
                        <a href="#" class="btn btn-primary">Edit Product</a>
                        <form action= "<?php echo BASE_URL;?>app/product/delete_product.php" class="d-inline" method = "POST">
                        <input type ="hidden" name="id" value="<?php echo $product["id"]; ?>">
                        
                        
                        <button href="#" class="btn btn-danger" onlick="return confirm('Are you sure you want to delete this record?')" >Delete Product</button>
                    
                    </div>
                </div>
            </div>
