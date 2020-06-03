<?php
 $arg_m = array(
        'numberposts'      => -1,
        'post_type'        => 'molecules',
        'suppress_filters' => true,
        'orderby'          => 'date',
        'order'            => 'ASC',
     
    );

$molecules = get_posts($arg_m); //geting all experts posts
$i=0;

foreach($molecules as $molecule) { 
?>
<div class="row molecules-row">
    <div class="col-md-3">
        <div class="molecules-img pr-3">
            <h5 class="pb-1"><?php echo $molecule->post_title; ?></h5>
            <img src="<?php echo get_the_post_thumbnail_url($molecule->ID); ?>" alt="img_<?php echo $molecule->post_title; ?>" width="100%">
        </div>
    </div>
    <div class="col-md-9">
        <div class="ml-5">
            <?php echo $molecule->post_content; ?>
        </div>
    </div>
</div>
<?php } ?>
