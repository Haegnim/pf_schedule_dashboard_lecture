$(document).ready(function() {
    //Lightslider Plugin Code
    $(".intro").lightSlider({
        item:1,
        pager:false,
        loop: true,
        slideMargin:0,
        speed: 400, //ms'
          auto: true,
          pause: 5000,
          mode:'fade',
          adaptiveHeight:true,
    }); 

    $(".each-btns a").click(function(e){
      e.preventDefault();
    })

});