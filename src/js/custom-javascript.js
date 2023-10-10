  ////////////////////////// FAQ questions code for toggle //////////////////////////////////

  jQuery(document).ready(function(){


    jQuery(".panel h4").click(function(){
 
        jQuery(this).parent(".panel").find(".panel__content").slideToggle();
        jQuery(this).parent(".panel").prevAll(".panel").find(".panel__content").slideUp();
        jQuery(this).parent(".panel").nextAll(".panel").find(".panel__content").slideUp();
        // jQuery(this).toggleClass('rotate');
        });



        // var SLIDE_TIMEOUT = 500;

        // jQuery( ".burger-menu" ).on( "click", function(e) {
        //   e.preventDefault();
        //   if(jQuery(".fish-navigation-mob").css('display') !== "block") {
        //     jQuery(".fish-navigation-mob").show("slide", {direction: "right"}, SLIDE_TIMEOUT);
        //     jQuery(".burger").css("display", "none");
        //     jQuery(".x").css("display", "block");
        //   } else if (jQuery(".fish-navigation-mob").css('display') == "block") {
        //     jQuery(".fish-navigation-mob").hide("slide", {direction: "right"}, SLIDE_TIMEOUT);
        //   }
        //   });



        jQuery(".burger-menu ").on("click",".bar",function(){
  
          jQuery(".fish-navigation-mob").slideToggle("linear");
          jQuery(".bar").toggleClass('change');
          // jQuery(".fish-navigation-mob li").slideRight();
        
         });

         
         ///////// Mob menu dropdown ////////// 

         jQuery(".fish-navigation-mob .menu-item-has-children").append('<span class="made-chevron"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>'); 
          //  jQuery(".fish-navigation .menu-item-has-children").append('<span class="made-chevron"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>');

           jQuery(".dropdown-some").addClass("hide-nav");
           jQuery(".made-chevron").on("click",function(){


            var $this = jQuery(this).prev(".dropdown-some");
            // jQuery(this).prev(".dropdown-some").slideToggle("linear");

            if ($this.hasClass("hide-nav")) {
              $this.removeClass("hide-nav");
              $this.toggle('slow');
            } else {
              $this.addClass("hide-nav");
              $this.slideUp('slow');
            }
           });


  });
