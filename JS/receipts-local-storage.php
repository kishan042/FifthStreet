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
    function get_basket_LS() {
      var searches = localStorage.getItem('basket');
      if (searches) {
        return JSON.parse(searches);
      }
      return [];
    }

    // Validate and save strings to store of past searches
    function validate_basket_Id(str) {
      var searches = get_basket_LS();
      searches.push(str);
      localStorage.setItem('basket', JSON.stringify(searches));
      return true;
    }

    // Retrieve searches from Local Storage, return an array
    function get_Receipt_LS() {
      var searches = localStorage.getItem('Receipt');
      if (searches) {
        return JSON.parse(searches);
      }
      return [];
    }

    // Validate and save strings to store of past searches
    function validate_Receipt_Id(str) {
      var searches = get_Receipt_LS();
      if (searches.indexOf(str) > -1 || !str) {
        return false;
      }
      searches.push(str);
      localStorage.setItem('Receipt', JSON.stringify(searches));
      return true;
    }


    //---------------------------------------------------------------------------------------
    //  Executation of the two events
    //
    //  1) .item-add: On click of adding a product to the basket, 
    //  the id of the product will be collected and be sent to the validate_receipt_Id function.
    //  The will allow to add multiple products to the LS key.
    //
    //  2) The second event has been moved to the simpleCart.js on line 1755.
    //  As there is a call back event, you can not us JS here to remove IDs from LS key
    //---------------------------------------------------------------------------------------


      // If local storage is supported by the users browser 
      if (supports_Local_Storage) {

          // Set event handlers
          $(".item_add").click(function(){
    			var ID = $(this).attr('id');
    			validate_basket_Id(ID);
      		});

          $(".checkout-btn").click(function(){
          var obj = JSON.parse(localStorage.getItem('basket')); //fetch cart from storage

             for (var i = -1; i < obj.length; i++) { //loop over the collection
               var id = obj[i]  //see if ids match
               validate_Receipt_Id(id);      
              }

          localStorage.removeItem('basket');
          localStorage.removeItem('simpleCart_items');

          });

           var basket_check = JSON.parse(localStorage.getItem('basket')); //fetch cart from storage

           //if basket array has more then one item
           // hide elements with the class .personlise
           if (basket_check.length > 0) {
              $('.personalise-l2').toggleClass("hide");
            } else {
             // $('.personalise-l2').parent().toggleClass("mt-100");
            }
           
      } // End of supports local storage function

</script>