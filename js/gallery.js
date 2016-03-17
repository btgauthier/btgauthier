/*
*	Description:
*		jQuery code for the gallery page

*
*	Revisions:
*
*/
$(document).ready( function() {

	$('figure').click( function() {

		if ($(this).is( '.galLarge' )) {
		   	// restore to small size		
			$(this).animate( { width: "250px" }, 700 ) 
			.removeClass( 'galLarge');
		}
		else { // clicked on a small pic

			// Ensure possible large is made small
			$('.galLarge').animate( { width: "250px" }, 200 )			
			.removeClass( 'galLarge');
			
			// Make this one large			
			$(this).animate( { width: "502px" }, 700 )
			.addClass( 'galLarge');
		}
	} );
} );

