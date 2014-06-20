var noFocus = true;
if (masonryActive  === undefined ) {var masonryActive = true;}
if (noMasonry === undefined ) { var noMasonry = false; }

$(document).ready(function() {		

	// bouton menu for small device

	$('.menu-btn').click (
		function() {
			$(this).toggleClass("current");
			$('#main-nav').toggleClass("openmenu")
		}		
	)
	
	// Search button makes field appears

	$('.search-btn').click (
		function() {
			$('#searchform').toggleClass("visible");
			$('#searchform input').focus();
			$('#searchform input').focusout( function(){ $('#searchform').removeClass("visible")});
		}		
	)
	
	

	//no masonry in single content (loop.php) 
	if ( noMasonry != true ) {
	
	
		//first loading masonry
		$('.articles-grid').masonry({
		 columnWidth: 240,
		 itemSelector: 'article',
		 isFitWidth: true,
		 gutter: 25,
		 transitionDuration: 0,
		});




		//boutons changement layout
		$('.static-btn, .grid-btn').click( 
			function() {
				$('.static-btn, .grid-btn').toggleClass( "current" );
				$('#articles').toggleClass( "articles-grid" ).toggleClass( "articles-flow" );
				if ( masonryActive ) {
					$('#articles').masonry('destroy');
					$('body').scrollTo('.lastFocus', 500, {offset:-100} );
				}
				else {
					$('.articles-grid').masonry({
					 columnWidth: 240,
					 itemSelector: 'article',
					 isFitWidth: true,
					 gutter: 25,
					 transitionDuration: 0,
					});
				}
				
				masonryActive = !masonryActive;		
		});


		//focus sur un article
		$('article').focusin(function() {
			setTimeout(function() {noFocus = false;}, 10);
			if ( masonryActive ) {
				$('#articles').masonry('destroy');
				$('#articles').removeClass( "articles-grid" ).addClass( "articles-flow" );
			}
			$('body').scrollTo( this, 500, {offset:-100} );
		});	

		//perte du focus d'un article
		$('article').focusout(function() {
			$(this).addClass("lastFocus");
			setTimeout(function() {noFocus = true;}, 5);
				if ( masonryActive ) {
					setTimeout(function() {
						if ( noFocus ){
							$('#articles').addClass( "articles-grid" ).removeClass( "articles-flow" );
							$('.articles-grid').masonry({
								columnWidth: 240,
								itemSelector: 'article',
								isFitWidth: true,
								gutter: 25,
								transitionDuration: 0,
							});
						$('body').scrollTo('.lastFocus', 0, {offset:-100} );
						}
					}, 15);
				}
			setTimeout(function() {$('article').removeClass("lastFocus");}, 200);
		});
	}
});



