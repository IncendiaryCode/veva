<?php
/**
* Template Name: B - A/B
*/
?>
<?php get_header(); ?>
<section id="header-b">
    <div class="text-center header-content">
        <h1 class="red header-titles first heading-b">veva: more, healthy years.</h1>
        <div class="second animated-div">

            <div class="flex-container">
                <div class="healthy">
                    Healthy Years
                </div>
                <div class="final">
                    Final Years
                </div>
                <div class="years text-center ">
                    <p>78
                </div>
            </div>
        </div>
        <h1 class="red header-titles second-b heading-b"> Smarter aging </h1>
    </div>
</section>
<section id="product">
    <div class="container">
        <h3 class="red">Product</h3>
        <p>In life, it is said, the only thing required is death; everything else is optional. Except, evidently, aging. From the moment of our birth, we age. Aging appears so universal as to be unavoidable, natural, the price of life itself.</p>
        <p>But is it?</p>
        <p>Today, many respected scientists at top research institutions believe that it is not. They conclude that aging is a disease, one that can be treated, one that may even be cured. Researchers have already identified interventions that slow - and even reverse - declines that come with age: loss of strength, energy, fertility, cognitive capacity and immune function. In time, effective anti-aging products and services will become commercially available, and everything we thought we knew about living a long, full life will be rewritten.</p>

        <p>What is available, though, for those who do not want to wait, who may not have time to wait? We wondered. So we spent thousands of hours reading the scientific literature, reviewing thousands of scientific papers in hundreds of medical journals. Based on that research, we identified six molecules that met our criteria:</p>

        <p class="text-center">strong longevity effects</p>

        <p class="text-center">AND</p>

        <p class="text-center">negligible adverse effects</p>

        <p>We then vetted manufacturers for quality, validated purities, and talked to people about the best way to make smarter aging a part of their lives. The result is veva: a dynamic subscription that delivers the safest, most effective molecules right to your door. Add veva to your daily routine, and redefine aging with us</p>
    </div>
</section>
<section id="molecules">
    <div class="container">
        <h3 class="red">Molecules</h3>
        <p>Below is a list of all the active ingredients that are included in our product. There are a prescription and non-prescription version of the product available.</p>
        <?php get_template_part( 'template-parts/content', 'molecules' ); ?>
    </div>
</section>
<section id="pricing">
    <?php get_template_part( 'template-parts/content', 'price' ); ?>

</section>
<?php get_footer(); ?>
<script>
    $(document).ready(function() {

        setTimeout(function() {

            $(".healthy").animate({
                width: "90%",
            }, 1500);
            $(".final").animate({
                width: "10%"
            }, 1500);
            
            $(".years").hide();
            $(".healthy").html('veva');
            $(".final").html('')
            
            $(".healthy").css("padding-top", "30px");

        }, 5000);
        
            


    });

</script>
