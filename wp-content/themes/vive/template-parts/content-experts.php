<?php
 $arg_e = array(
        'numberposts'      => -1,
        'post_type'        => 'experts',
        'suppress_filters' => true,
        'orderby'          => 'date',
        'order'            => 'ASC',
    );

$experts = get_posts($arg_e); //geting all experts posts
$i=0;
?>
<div class="container">
    <?php foreach($experts as $expert){ 
        if($i < 1){ //the first post 
            $content = $expert->post_content;
            $content = apply_filters('the_content', $content);
?>
    <!--    format of first posts-->
    <div class="row testimonial-row">
        <div class="col-md-8 col-12">
            <div class="testimonial-container pt-2 pb-2">
                <?php echo $content; ?>
                <div class="testimonial-person">
                    <p class="text-right"><?php echo get_post_meta($expert->ID,'expert_name',true) ?></p>
                    <p class="text-right"><?php echo get_post_meta($expert->ID,'expert_position',true) ?></p>
                    <p class="text-right"><?php echo get_post_meta($expert->ID,'expert_company',true) ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php  } else { //the  posts after first post
        
        if($i % 2 == 0){
            $content = $expert->post_content;
            $content = apply_filters('the_content', $content);
            //if its even post format post this way  ?>
    <!--           format of even posts-->
    <div class="row testimonial-row">
        <div class="col-md-8 offset-md-2 col-12">
            <div class="testimonial-container pt-2 pb-2">
                <?php echo $content; ?>
                <div class="testimonial-person text-right">
                    <p class="text-right"><?php echo get_post_meta($expert->ID,'expert_name',true) ?></p>
                    <p class="text-right"><?php echo get_post_meta($expert->ID,'expert_position',true) ?></p>
                    <p class="text-right"><?php echo get_post_meta($expert->ID,'expert_company',true) ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php  } else {   
            $content = $expert->post_content;
            $content = apply_filters('the_content', $content);
            //if its odd post format post this way  ?>
    <!--           format of odd posts-->
    <div class="row testimonial-row">
        <div class="col-md-8 offset-md-4 col-12">
            <div class="testimonial-container pt-2 pb-2">
                <?php echo $content; ?>
                <div class="testimonial-person">
                    <p class="text-right"><?php echo get_post_meta($expert->ID,'expert_name',true) ?></p>
                    <p class="text-right"><?php echo get_post_meta($expert->ID,'expert_position',true) ?></p>
                    <p class="text-right"><?php echo get_post_meta($expert->ID,'expert_company',true) ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php 
            } //closing checking of odd or even post number 
        } // closing the  posts after first post
    $i++;
    } //closing checking if the post is first or not 
    ?>
</div>
