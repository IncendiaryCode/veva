<?php
/**
* Template Name: Researches
*/
?>
<?php get_header(); ?>
<?php 
    $arg_r = array(
        'numberposts'      => -1,
        'orderby'          => 'date',
        'order'            => 'ASC',
        'post_type'        => 'researche',
    );

$researches = get_posts($arg_r);

?>
<div class="main-container">
    <div class="container mb-5">
        <h3 class="red pt-5 pb-3">Research</h3>
        <p class="research-subtitle">Below are links to some of the most significant scientific papers on each of the molecules.</p>
        <?php 
        foreach($researches as $research) { 
            
                $content = $research->post_content;
                $content = apply_filters('the_content', $content);
                $strip = strtolower(str_replace(' ', '', $research->post_title));
        ?> 
        <div class="anchor" id="<?php echo $strip; ?>"></div>
        <div class="reseraches-content pt-5 text-justify" >
            <h5 class="red "><?php echo $research->post_title; ?></h5>
            <?php echo $content; ?>
            <div class="pt-2 pb-2">
             <a href="#">More scientific studies on  <?php echo $research->post_title; ?></a> 
             </div>
        </div>
        <?php } ?>
    </div>
</div>

<?php get_footer(); ?>
