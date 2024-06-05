/*
	Author of the script
	Name: Ezra Adamu
	Email: ezra00100@gmail.com
	Date created: 18/09/2023 
	Date modified: 29/09/2023 
*/

/*some variables*/

$( document ).ready( () => {

	const disable_preview_btn = () => {
		$( '#preview_btn' ).addClass( 'disabled' );
		
		if ( $( `.chk_box_first:checked` ).length >= 1 && $( `.chk_box_second:checked` ).length >= 1 )
		{
			$( '#preview_btn' ).removeClass( 'disabled' );
		}
	};

	//compute total unit
	const compute_total_unit = ( sem_type ) => {
		let total_unit = 0;

		//iterate all listed checkbox items
		$( `.chk_box_${ sem_type }` ).each( function () { 
		   //this.checked = status;

		   if ( this.checked ) 
		   {
				total_unit += Number( this.dataset.unit );	
		   }
		});

		$( `.total_unit_${ sem_type }` ).text( total_unit );
	};

	const all_checked_boxes_default = ( sem_type ) => {
		//iterate all listed checkbox items

		$( `.chk_box_${ sem_type }` ).each( function () { 
		   this.checked = true;
		});

		compute_total_unit( sem_type );
	};

	//all_checked_boxes_default( 'first' );
	//all_checked_boxes_default( 'second' );

	const all_checked_boxes = ( check_box, check_all ) => {
		//check "all checkboxes" if all checkbox items are checked
		
		if ( $( `.${ check_box }:checked` ).length == $( `.${ check_box }` ).length ) 
		{
			$( `#${ check_all }` ).prop( 'checked', true );
		}

		compute_total_unit( 'first' );
		compute_total_unit( 'second' );
	};

   all_checked_boxes( 'chk_box_first', 'chk_box_all_first' );
   all_checked_boxes( 'chk_box_second', 'chk_box_all_second' );

   disable_preview_btn();

	$( '#chk_box_all_first, #chk_box_all_second' ).change( ( e ) => {
		//var status = this.checked; // "all checkboxes" checked status
		const sem_type = e.target.dataset.sem_type;
		const status = e.target.checked;

		if ( status == false )
		{
		   $( `.chk_box_${ sem_type }` ).prop( 'checked', false );
		   $( `.total_unit_${ sem_type }` ).text( 0 );
		}
		else
		{
		   $( `.chk_box_${ sem_type }` ).prop( 'checked', true );
			compute_total_unit( sem_type );
		}

		disable_preview_btn();
	});

	//uncheck "all checkboxes", if one of the listed checkbox item is unchecked
	$( '.chk_box_first, .chk_box_second' ).change( ( e ) => { 
		let status = e.target.checked;
		const sem_type = e.target.dataset.sem_type;
		
		if( status == false ) 
		{ 
			$( `#chk_box_all_${ sem_type }` ).prop( 'checked', false );
		}

		all_checked_boxes( `chk_box_${ sem_type }`, `chk_box_all_${ sem_type }` );
		compute_total_unit( sem_type );
		disable_preview_btn();
	});

});
