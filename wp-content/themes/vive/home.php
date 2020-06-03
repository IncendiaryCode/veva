<?php get_header(); ?>
<section id="header">
    <div class="text-center header-content">
        <h1 class="red header-titles first">Would you like to be 25 again?</h1>
        <h1 class="red header-titles second"> And live another 50, 100 or 200 years at that age? </h1>
        <h1 class="red header-titles third"> We’d like that too. </h1>
    </div>
</section>
<section id="testimonials">
    <?php get_template_part( 'template-parts/content', 'experts' ); ?>
</section>
<section id="product">
    <div class="container">
        <h3 class="red">Product</h3>
        <p>Let us be clear. Going back to a 25-year-old body and living for another 100 years is not possible today. But it’s very likely the first person to live beyond 150 has been born. And it looks probable within 100 years we’ll have found a cure for aging. As one expert in the field put it, the goal right now is to “ride the wave” of anti-aging developments. To extend life to the point that aging can be halted and reversed.</p>

        <p>Labs around the world are making new discoveries every year that change the way we understand and can treat aging. Our mission is stay up to date with the latest advances in the field. To identify the molecules that have that have consistently demonstrated the best results in world class labs, and to combined them into a single product (with multiple pills) that is taken daily. The product will be regularly updated as new research becomes available.</p>

        <p>Like the doctor’s oath, our philosophy is “first do no harm”. So no molecule is included until it’s demonstrated strong results from multiple well-designed studies and has been thoroughly tested to screen for side effects. Many of the molecules such as aspirin and berberine are among the most studied and most used drugs in history.</p>

        <p>All of the ingredients are sourced from best-in-class GMP manufacturers and each is regularly tested at an independent lab to confirm it’s the highest possible quality.</p>

        <p> Is trying to cure aging a good idea? Imagine if none of your friends and family ever had to suffer through old age. Imagine if everyone could attain hundreds of years of knowledge and education. Imagine if Edison, Lincoln, Martin Luther King, Mozart, Newton, Picasso and Einstein were still with us today. There will be significant challenges in this new world, but we believe ending aging will have the greatest positive impact society has ever seen.</p>
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
<!--
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
    $(document).ready(function() {
 
        $(".second").delay(2000).fadeIn(2000);
        $(".third").delay(4000).fadeIn(2000);;
    });

</script>
-->
