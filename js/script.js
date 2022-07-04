jQuery(document).ready(function(){


    // owlCarousel function 
    jQuery('.owl-carousel').owlCarousel({
        items:1,
        loop:true,
        margin:0,
        singleItem:true,
        nav:true,
        // navText: [
        //     "<i class='fa fa-caret-left'></i>",
        //     "<i class='fa fa-caret-right'></i>"
        // ],
        dots:true,
    });

    function sliderNextPrevButtonHeight(){
        var sliderHeight = jQuery('.owl-stage-outer').height();
        var buttonHeight = jQuery('button.owl-next span').height();
        var rightHeight = sliderHeight /2-buttonHeight;
        jQuery('button.owl-prev span').css('top',rightHeight+'px');
        jQuery('button.owl-next span').css('top',rightHeight+'px');
    }
    sliderNextPrevButtonHeight();
    jQuery(window).resize(function(){
        sliderNextPrevButtonHeight();
    });
    
    

});