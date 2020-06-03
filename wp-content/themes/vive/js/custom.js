$(document).ready(function () {
//slider option
    $(".second").delay(2000).fadeIn(2000);
    $(".third").delay(4000).fadeIn(2000);
//setting button active 
    $(".btn-price:eq( 0 )").addClass( "active" ); 
    var defaultProductId1 = $(".btn-price:eq( 0 )").prop("value");
    var defaultPrice1 = $(".btn-price:eq( 0 )").next().val(); 
    var defaultVariation1 = $(".btn-price:eq( 0 )").next().next().val(); 
    $(".price_holder:eq( 0 )").children().append(defaultPrice1);
    $(".add_to_cart:eq( 0 )").attr("href", '/cart/?add-to-cart='+ defaultProductId1 +'&quantity=1&variation_id='+defaultVariation1+'');
    
    $(".btn-price:eq( 3 )").addClass( "active" ); 
    var defaultProductId2 = $(".btn-price:eq( 3 )").prop("value");
    var defaultPrice2 = $(".btn-price:eq( 3 )").next().val(); 
    var defaultVariation2 = $(".btn-price:eq( 3 )").next().next().val(); 
    $(".price_holder:eq( 1 )").children().append(defaultPrice2);
    $(".add_to_cart:eq( 1 )").attr("href", '/cart/?add-to-cart='+ defaultProductId2 +'&quantity=1&variation_id='+defaultVariation2+'');
    
    
//setting / preparing data for woocomerce call
    $(".btn-price").click(function () {
        $(".btn-price").removeClass("active");
        $(this).addClass( "active" );
   
//        get parametars needed
        var productId = $(this).prop("value");
        var priceClass='.'+productId+'';
        var linkId='#'+productId+'';
        
        var price = $(this).next().val(); 
        var variationId = $(this).next().next().val();
        
        $(priceClass).empty();
        $(priceClass).append(price);
//      add link for checkout on button click 
        $(linkId).attr("href", '/cart/?add-to-cart='+ productId +'&quantity=1&variation_id='+variationId+'');

    });
    
    
    $(".second-b").delay(7000).fadeIn(2000);

});

