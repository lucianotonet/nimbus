(function ($, root, undefined) {
    
    $(function () {
        
        'use strict';

            // Obras Slider
            //  ->  http://www.jqueryscript.net/slideshow/Coverflow-Style-Image-Carousel-Plugin-For-jQuery-Carousel-Evolution.html
            jQuery('#obras_slider').carousel({
                carouselWidth: 261,        
                carouselHeight: 400,
                frontWidth: 261,
                // frontHeight: 337,
                directionNav: true,
                reflection: false,
                // shadow: false,
                // buttonNav: false,
                description: false,
                descriptionContainer: $('.legend'),
                autoplay: false,
                autoplayInterval: 3000,
                backZoom: 0.9,
                backOpacity: 0.15,
                slidesPerScroll: 2,
                speed: 700,
                buttonNav: 'none',
            });


            // jQuery('#characterLeft').text('140 characters left');

            // jQuery('#message').keydown(function () {
            //     var max = 140;
            //     var len = jQuery(this).val().length;
            //     if (len >= max) {
            //         jQuery('#characterLeft').text('You have reached the limit');
            //         jQuery('#characterLeft').addClass('red');
            //         jQuery('#btnSubmit').addClass('disabled');            
            //     } 
            //     else {
            //         var ch = max - len;
            //         jQuery('#characterLeft').text(ch + ' characters left');
            //         jQuery('#btnSubmit').removeClass('disabled');
            //         jQuery('#characterLeft').removeClass('red');            
            //     }
            // });    
            // 
            
            jQuery('#contato_form_submit').click(function(e){
                // var name = $("#name").val();
                e.preventDefault();
                var dados = jQuery('#contato_form').serialize();
                console.log( dados );
                jQuery.ajax({
                    type: 'POST',
                    url: ajaxurl,
                    data: dados + '&action=contact_form',
                    success: function(data) {                        
                        alert(data); //should print out the name since you sent it along
                        console.log( data );
                    }
                });                
            });
        
    });
    
})(jQuery, this);