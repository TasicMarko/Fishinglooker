  ////////////////////////// FAQ questions code for toggle //////////////////////////////////

  jQuery(document).ready(function(){


    jQuery(".panel h4").click(function(){
        jQuery(this).parent(".panel").find(".panel__content").slideToggle();
        jQuery(this).parent(".panel").prevAll(".panel").find(".panel__content").slideUp();
        jQuery(this).parent(".panel").nextAll(".panel").find(".panel__content").slideUp();
        });


  });
