<?php

$query = new WC_Product_Query( array(
    'limit' => 10,
    'orderby' => 'date',
    'order' => 'DESC',
) );
$products = $query->get_products();

?>
<div class="container">
    <h3 class="text-center red">Pricing</h3>
    <div class="row">
       
  <?php foreach($products as $product){ ?>

    <div class="col-md-6 border-right">
            <h5 class="text-center red"><?php echo $product->name; ?> </h5>
            <div class="pricing-container">
                <div class="row text-center pb-3 pt-3">
                
    
   <?php if($product->is_type('variable')){
    foreach($product->get_available_variations() as $variation ){
    
             $variations = $product->get_available_variations();
        
        
        $variation_id = $variation['variation_id'];
        $variation_name = $variation['attributes']['attribute_weeks'];
           // Prices
        $active_price = floatval($variation['display_price']); // Active price
        $regular_price = floatval($variation['display_regular_price']); // Regular Price
        if( $active_price != $regular_price ){
            $sale_price = $active_price; // Sale Price
        }
        ?>
    <?php if(count($variations)>1) { ?>
                    <div class="col-md-4">
                        <a href="/cart/?add-to-cart=69&quantity=1&variation_id=<?php echo $variation_id; ?>"></a>
                        <button class="btn-price" value="<?php echo $product->id ?>"><?php echo $variation_name; ?></button>
                        <input type="hidden" name="price" value="<?php echo $active_price; ?>">
                        <input type="hidden" name="variationid" value="<?php echo $variation_id; ?>">
                    </div>
                    <?php } else {?>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <a href="/cart/?add-to-cart=69&quantity=1&variation_id=<?php echo $variation_id; ?>"></a>
                        <button class="btn-price" value="<?php echo $product->id ?>"><?php echo $variation_name; ?></button>
                        <input type="hidden" name="price" value="<?php echo $active_price; ?>">
                        <input type="hidden" name="variationid" value="<?php echo $variation_id; ?>">
                    </div>
                    <?php } ?>
        <?php } ?>
                </div>
                <div class="text-center">
                   <p class="red price_holder">$ <span class="<?php echo $product->id; ?>"></span></p>
                </div>
                <div class="row">
                    <div class="col-md-4 text-right">
                        <img src="/wp-content/uploads/2020/02/price-img1.png" alt="" class="span-img">
                    </div>
                    <div class="price-row col-md-4 text-center">
                        <span>
                            <span>NMN 750mg</span>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-right">
                        <img src="/wp-content/uploads/2020/02/price-img-2.png" alt="" class="span-img">
                    </div>
                    <div class="price-row col-md-4 text-center">
                        <span>Resveratrol 1000mg</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-right">
                        <img src="/wp-content/uploads/2020/02/price-img1.png" alt="" class="span-img">
                    </div>
                    <div class="price-row col-md-4 text-center">
                        <span>Aspirin 81mg</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-right">
                        <img src="/wp-content/uploads/2020/02/price-img-2.png" alt="" class="span-img">
                    </div>
                    <div class="price-row col-md-4 text-center">
                        <span>Vitamin D 600 IU</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-right">
                        <img src="/wp-content/uploads/2020/02/price-img1.png" alt="" class="span-img">
                    </div>
                    <div class="price-row col-md-4 text-center">
                        <span>Vitamin K3 100mcg</span>
                    </div>
                </div>
            </div>
            <div class="text-center pt-3 pb-3">
                <a href="" class="add_to_cart" id="<?php echo $product->id ?>"> <button class="btn-price">Add to cart</button></a>
            </div>

        </div>

        <?php 
}
        ?>

        <?php } ?>

     
    </div>

</div>