/*
   Author of the script
   Name: Ezra Adamu
   Email: ezra00100@gmail.com
   Date created: 18/09/2023 
   Date modified: 16/03/2024
*/

const makeAjaxCall = async ( url, method, data, ret = false ) => {
   let res;

   try
   {
      res = await $.ajax({
         url: url, 
         method: method, 
         data: data,
      });

      //alert( res );
      if ( ret )
      {
         return res;
      }
   }
   catch ( err )
   {
      console.error( err );
   }
};

$( document ).ready( () => {
   
   var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
   var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
   });
      
   $( '#session_top' ).change( ( e ) => {
      const session_top = $( '#session_top' ).val();
      
      makeAjaxCall( '', 'POST', { 'set_session_top' : true, 'session_top' : session_top }, true ).
	   then( ( data ) => 
			//redirect
			window.location.replace( app_url )
		);
   });

});