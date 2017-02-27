
<script>

    // Go into strict mode to prevent any bugs
    'use strict';


    //-----------------------------------------------------------------------
    //  List of functions to execute  
    //-----------------------------------------------------------------------


    // Test for local storage
    function supports_Local_Storage() {
      try {
        return 'localStorage' in window && window['localStorage'] !== null;
      } catch(e){
        return false;
      }
    }

    // Retrieve searches from Local Storage, return an array
    function get_wishlist_LS() {
      var searches = localStorage.getItem('wishlist');
      if (searches) {
        return JSON.parse(searches);
      }
      return [];
    }

    // Validate and save strings to store of past searches
    function validate_Product_Id(str) {
      var searches = get_wishlist_LS();
      if (searches.indexOf(str) > -1 || !str) {
        return false;
      }
      searches.push(str);
      localStorage.setItem('wishlist', JSON.stringify(searches));
      return true;
    }


    //---------------------------------------------------------------------------------------
    //  Executation of the two events
    //
    //  1) .add-to-wishlist: On click of adding a product to the wishlist, 
    //  the id of the product will be collected and be sent to the validate_Product_Id       //  function.
    //
    //  2) .remove-from-wishlist: On click, the product id will be collected and be removed  //      from local storage.
    //
    //---------------------------------------------------------------------------------------


      // If local storage is supported by the users browser 
      if (supports_Local_Storage) {

          // Set event handlers
          $(".add-to-wishlist").click(function(){
    			var ID = $(this).attr('id');
    			validate_Product_Id(ID);
      		});


          // Reference to how I removed individual product Ids from the
          // local storage array
          // http://stackoverflow.com/questions/39725221/remove-an-item-from-an-array-inside-a-local-storage-object-with-javascript

          $(".remove-from-wishlist").click(function(){
          var id = $(this).attr('id');
          var index = -1;
          var obj = JSON.parse(localStorage.getItem('wishlist')); //fetch cart from storage
        //var items = obj; //get the products
          for (var i = -1; i < obj.length; i++) { //loop over the collection
            //console.log(obj.length);
            if (obj[i] === id) { //see if ids match
              obj.splice(i, 1); //remove item from array
              break; //exit loop
            }
          }
          localStorage.setItem('wishlist', JSON.stringify(obj)); //set item back into storage
          });


          // When the user clicks on a colour variation 
          // this function runs to show the correct image 
          // according to what the user has picked.

          $(".circle-btn-add").click(function(){
            $(this).toggleClass( "hide" );
            $(".circle-btn-remove").toggleClass( "hide" );
          });
          
          $(".circle-btn-remove").click(function(){
            $(this).toggleClass( "hide" );
            $(".circle-btn-add").toggleClass( "hide" );
          });

      } // End of supports local storage function

</script>
































