(function($) {

  //twitter
  twitterFetcher.fetch('345170787868762112', 'example1', 1,true,    true, false);

  //media queries and changing navigation
  $(function (){
    $smallscreen();
    $(window).resize(function () {
    $smallscreen()
    });
  });
  $smallscreen = function (){
    "use strict";
    var menu = $('.menuswitch-js');
      if ( $(window).width() >= 992 ) { 
        //change class for scrolling changing navigation
          var menu = $('.menuswitch-js');
          var menu1 = $('.top1');
          $(window).scroll(function() {
          var y = $(this).scrollTop();
          var z = $('.flexslider').offset().top;
          if (y >= z) {
            menu.removeClass('navbar-height1').addClass('navbar-height2') &&
            menu1.addClass('top-disappear');
          } else  {
            menu.removeClass('navbar-height2').addClass('navbar-height1') &&
            menu1.removeClass('top-disappear');
          }
        });
      } 		
      else {
         menu.removeClass('navbar-height2').addClass('navbar-height1');
    }
  }

  //colorbox lightbox
  $('.imagepopup').colorbox({maxWidth:'70%', maxHeight:'70%', rel:'gal'});
  
  //counter
  $('.timerwrapper').waypoint(function(){
    $('.timer').countTo();     
  },{offset: 420, triggerOnce: true});

  //top slider 
  $('.flexslider').flexslider({
    animation: "fade",
	  controlNav: true, 
    directionNav: true,
	  slideshowSpeed: 6000,             
	  animationSpeed: 600,  
    start: function(){
      $('body').removeClass('loading');
    }
  });


  //scrollspy
  $('.scroll').scrollspy(); 
  
})(jQuery);


$(window).load(function() {

  // masonry for blog index
  "use strict";
  var $container = $('#masonrycontainer2');
  $container.masonry({
  itemSelector: '.masonrys' 
  });

  //menu
  "use strict";
  var menu = $('.navbar');
    $(window).scroll(function() {
  });
  $('.navbar a[href^="#"]').on('click', function(e) {
  e.preventDefault();
  var target = this.hash,
  $target = $(target);
  $('html, body').stop().animate({
    'scrollTop': $target.offset().top
  }, 500, 'swing', function() {
    window.location.hash = target;
  });
  });
  $('.button1 a[href^="#"]').on('click', function(e) {
  e.preventDefault();
  var target = this.hash,
  $target = $(target);
  $('html, body').stop().animate({
    'scrollTop': $target.offset().top
  }, 500, 'swing', function() {
    window.location.hash = target;
  });
  }); 
  
  // isotope
  "use strict";  
   var $container = $('#portfoliocontainer');
    $container.isotope({
        itemSelector: '.element'
    });

    var $optionSets = $('#options .option-set'),
        $optionLinks = $optionSets.find('a');
    $optionLinks.click(function() {
        var $this = $(this);
        // don't proceed if already selected
        if ($this.hasClass('selected')) {
            return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[key] = value;
        if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
            // changes in layout modes need extra logic
            changeLayoutMode($this, options)
        } else {
            // otherwise, apply new options
            $container.isotope(options);
        }
        return false;
    });
  });

  //scroll to top function
  function scrollToTop($) {
  jQuery('html, body').animate({
      scrollTop: 0
  }, 'slow');
}