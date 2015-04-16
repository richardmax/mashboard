
        
        $(document).ready(function() {
			
				 var $container = $('#container');
				 
				 
			$('.shuffle-button').on( 'click', function() {
				alert('shuffle');
  $container.isotope('shuffle');
});
			
			/* all button clicks - used in groups - todo - use for everything */
	$('.btn').click(function(e){
		e.preventDefault();
		//var active = $('.set-interaction-type[class*="active"]').val();
		var clicked = $(this).val();
		setRunSiteSetting(clicked);
	});
	
	
	
	
	
	/* button states ----------------------------------------------------------------------- */
	
	window.setActiveButtonState = function(activeButtonRef){
		var buttonClassName = '.' + activeButtonRef + '-button';
		$(buttonClassName).addClass( 'active' );
	}
	
	window.setRunSiteSetting = function(clicked){
		
		
		
		$body = $('body');
		if ( $body.hasClass('view-mode--expanded') ){
			expander.close();
		}
		
		// interactionType-buttons ---------------------------------------------------------- //
		
		
		// sizes ---------------------------------------------------------- //
		if(clicked == 'default'  || clicked == 'thumbnail' || clicked == 'small' || clicked == 'medium' || clicked == 'large'){
		
			$('body').removeClass('landscape-thumbnail').removeClass('landscape-small').removeClass('landscape-medium').removeClass('landscape-large').addClass( 'landscape-' + clicked );
		
		
			$container.isotope('layout');
			
		}
		
		// shape ---------------------------------------------------------- //
		if(clicked == 'square' || clicked == 'rectangle' || clicked == 'circle' || clicked == 'various' ){
		
		
		}
		

		
	
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
     
			//for(i=0; i<<?php echo $loopNo; ?>; i++){
				//alert('item<?php echo $i; ?>');
				//	$('item<?php echo $i; ?>').addClass('shrink');
				//classie.addClass( 'item<?php echo $i; ?>', 'shrink' );
			//}
			
			classie.addClass( document.body, 'loaded' );
			classie.removeClass( document.body, 'grid' );

            /* affix the navbar after scroll below header */
			
			$('#nav').affix({
				  offset: {
					//top: $('header').height()-$('#nav').height()
					top: $('header').height()
				  }
			}); 

			/* highlight the top nav as scrolling occurs */
			$('body').scrollspy({ target: '#nav' })
			
			/* smooth scrolling for scroll to top */
			$('.scroll-top').click(function(){
			   // alert('scroll to top');
			  $('body,html').animate({scrollTop:0},1000);
			})
			
			/* smooth scrolling for nav sections */
			$('#nav .navbar-nav li>a').click(function(){
			  var link = $(this).attr('href');
			  var posi = $(link).offset().top+20;
			  $('body,html').animate({scrollTop:posi},700);
			})

        });
		
		new grid3D( document.getElementById( 'grid3d' ) );
		
		
		
		
		
		
$( function() {
	
	
	
	$("[name='my-checkbox']").bootstrapSwitch();
	



  var $container = $('#container').isotope({
    itemSelector: '.item',
  /* 
    layoutMode: 'masonry',
     masonry: {
      columnWidth:60,
      isFitWidth: true,
      gutter:0
    },
  */      

    layoutMode: 'packery',
    packery: {
       /* columnWidth: 1, */
      isFitWidth: true,
      gutter:0
    },
	
	
	/*
	getSortData : {
  
  
  rating : function ( $elem ) {
    return $elem.attr('data-rating');
  }
  
}
	*/

  });

  var $output = $('#output');

  // filter with selects and checkboxes
  var $selects = $('#form-ui select');
  var $checkboxes = $('#form-ui input');
  var $lists = $('#form-ui select');
  
  $selects.add( $checkboxes ).change( function() {
    // map input values to an array
    var exclusives = [];
    var inclusives = [];
    // exclusive filters from selects
    $selects.each( function( i, elem ) {
      if ( elem.value ) {
        exclusives.push( elem.value );
      }
    });
    // inclusive filters from checkboxes
    $checkboxes.each( function( i, elem ) {
      // if checkbox, use value if checked
      if ( elem.checked ) {
        inclusives.push( elem.value );
      }
    });

    // combine exclusive and inclusive filters

    // first combine exclusives
    exclusives = exclusives.join('');
    
    var filterValue;
    if ( inclusives.length ) {
      // map inclusives with exclusives for
      filterValue = $.map( inclusives, function( value ) {
        return value + exclusives;
      });
      filterValue = filterValue.join(', ');
    } else {
      filterValue = exclusives;
    }

    $output.text( filterValue );
    $container.isotope({ filter: filterValue })
  });
  
  var $selectsA = $('#form-uiA select');
  var $checkboxesA = $('#form-uiA input');
  $selectsA.add( $checkboxesA ).change( function() {
    // map input values to an array
    var exclusives = [];
    var inclusives = [];
    // exclusive filters from selects
    $selectsA.each( function( i, elem ) {
      if ( elem.value ) {
        exclusives.push( elem.value );
      }
    });
    // inclusive filters from checkboxes
    $checkboxesA.each( function( i, elem ) {
      // if checkbox, use value if checked
      if ( elem.checked ) {
        inclusives.push( elem.value );
      }
    });

    // combine exclusive and inclusive filters

    // first combine exclusives
    exclusives = exclusives.join('');
    
    var filterValue;
    if ( inclusives.length ) {
      // map inclusives with exclusives for
      filterValue = $.map( inclusives, function( value ) {
        return value + exclusives;
      });
      filterValue = filterValue.join(', ');
    } else {
      filterValue = exclusives;
    }

    $output.text( filterValue );
    $container.isotope({ filter: filterValue })
  });
  
  
  

	//Add the class selected to the item that is clicked, and remove from the others
	var $optionSets = $('#cat_filters'),
	$optionLinks = $optionSets.find('a');
 
	$optionLinks.click(function(){
	var $this = $(this);
	// don't proceed if already selected
	if ( $this.hasClass('selected') ) {
	  return false;
	}
	var $optionSet = $this.parents('#cat_filters');
	$optionSets.find('.selected').removeClass('selected');
	$this.addClass('selected');
 
	//When an item is clicked, sort the items.
	 var selector = $(this).attr('data-filter');
	$container.isotope({ filter: selector });
 
	return false;
	});

  	// filter items on button click
	$('#filters').on( 'click', 'button', function() {
	  var filterValue = $(this).attr('data-filter');
	  
	 // gnMenu.prototype._closeMenu();
	 // gnMenu._closeMenu();
	 // _closeMenu();
	  
	  alert('1');
	  
	  $container.isotope({ filter: filterValue });
	});

  $(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
    //alert('scroll here 1');
  } else {
    $('nav').removeClass('shrink');
     //alert('scroll here 2');
  }
});


	//this._closeMenu();

  
});
