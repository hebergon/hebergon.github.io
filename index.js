$(document).ready(function(){
    $('.navbar-nav .nav-item').click(function(){
      $('.navbar-nav .nav-item').removeClass('active');
      $(this).addClass('active');
    })
    $('.navbar-nav .nav-link').click(function(){
      $('.navbar-nav .nav-link').removeClass('active');
      $(this).addClass('active');
    })
    
      //banner
      $("#banner-area .owl-carousel").owlCarousel({
          dots: true,
          items: 1,
          loop: true,
          autoplay: true,
          autoplayTimeout:5000,
          autoplayHoverPause:true,
          autoHeight:true
      });
      $("#marcas .owl-carousel").owlCarousel({
        dots: false,
        items: 5,
        loop: true,
        autoplay: true,
        autoplayTimeout:1500,
        autoplayHoverPause:true,
        autoHeight:true
    });
      $("#view .owl-carousel").owlCarousel({
        touchDrag: false,
        items: 1,
        dots: false,
    });
      $(window).load(function(){
          // isotope filter
        var $grid = $(".grid").isotope({
            itemSelector : '.grid-item',
            layoutMode : 'fitRows'
        });
  
        // filter items on button click
        $(".button-group").on("click", "button", function(){
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({ filter: filterValue});
        })
      });
  
      //Lo más nuevo
      $("#blogs .owl-carousel").owlCarousel({
          loop: true,
          autoplay: true,
          autoplayTimeout:5000,
          nav: true,
          navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
          dots: true,
          responsive: {
              0: {
                  items: 1
              },
              800: {
                  items: 2
              },
              1000: {
                  items: 3
              }
          }
      })
  
      $(".navbar a").on('click', function(event) { 
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();
      
            // Store hash
            var hash = this.hash;
      
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 900, function(){
         
              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
          } // End if
        });
        
        $(window).scroll(function() {
          $(".slideanim").each(function(){
            var pos = $(this).offset().top;
      
            var winTop = $(window).scrollTop();
              if (pos < winTop + 600) {
                $(this).addClass("slide");
              }
          });
        });
        
      
  });
  
  
  $('.dropdown-toggle').click(function () {
      $(this).next('.dropdown-menu').slideToggle(300);
  });
  
  $('.dropdown-toggle').focusout(function () {
      $(this).next('.dropdown-menu').slideUp(600);
  });