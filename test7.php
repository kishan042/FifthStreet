<?php
// Config file
include_once 'INC/DB/Config.php';

// DB - Model
    include(ROOT_PATH . "INC/DB/model.php");

// Header
        // Title tag
        $Title = "test7";

        // Meta description
        $Description = "Fill text";

        // CSS path
        $CSSPath = BASE_URL . "CSS/Styles.css";

        // Image source
        $img = BASE_URL . "IMG/";

        include (ROOT_PATH . 'INC/Header.php');


// Navbar
        // Links to other pages 
        $men =  BASE_URL . MEN;
        $women = BASE_URL . WOMEN;
        $brands = BASE_URL . BRANDS;
        $about = BASE_URL . ABOUT;
        $trending = BASE_URL . TRENDING;
        $offers = BASE_URL . OFFERS;
        $wardrobe = BASE_URL . WARDROBE;
        $search = BASE_URL . SEARCH;
        $profile = BASE_URL . PROFILE;
        $basket = BASE_URL . BASKET;

        // Type "option-active" inside, to make option active
        $ActiveTrending = "";
        $ActiveOffers = "";
        $ActiveWardrobe = "option-active";

        include (ROOT_PATH . 'INC/Navbar.php'); 


// Hero-half-plain
        //IMG URL
        $url = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";
        // Amount of tint on image
        $tint = "tint-1";
        // copy for H1
        $h1 = "Admin Email";

        include (ROOT_PATH . 'INC/Hero-half.php'); 


?>

<div class="container">
    <ul id="output" class="products block">

    </ul>
</div>


<div class="mt-50"> <!--Spacing --> </div>


<div class="container-smal">
    <div class="row form-flex-center">
        <form id="form" name="form" method="post" class="form-flex-center"> <!--  action="wardrobe/Ajax-test7.php" -->

                <div class="col-xs-12 col-sm-8 col-lg-5 form-group">
                    <input type="text" name="first-name" id="input_first_name" placeholder="FIRST NAME" pattern="([A-z0-9À-ž]){2,}" required>
                </div>
                <div class="col-xs-12 col-sm-8 col-lg-5 mt-50 form-group">
                    <input type="text" name="second-name" id="input_surname" placeholder="SURNAME" pattern="([A-z0-9À-ž]){2,}" required>
                </div>
                <div class="col-xs-12 col-sm-8 col-lg-5 mt-50 form-group">
                    <input type="email" name="email" id="input_email" placeholder="EMAIL ADDRESS" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                </div>
                <div class="col-xs-12 mt-50">
                    <input type='submit' class="tertiary-btn-small" id='btnRegeister' value='SEND'/>
                </div>
                 <!-- <div class="col-xs-6 mt-50">
                    <input type='button' class="tertiary-btn-small bg-ruby" value='Clear LS' onclick="clearLS()" />
                </div> -->
        </form>
    </div>
</div>

<?php 

// Spacing  
        // Add a class to hide the seperation
        $hide = "";
        
        include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Footer
        // If current pages does not exist then add the 
        $hide = " ";

        // Bread crunb for the previous page 
        $PreviousPage = "Basket";

        // Bread crumbs for the current page
        $CurrentPage = "Admin";

        // JS path
        $JSPath = BASE_URL . "JS/jquery.js";

        include (ROOT_PATH . 'INC/Footer.php');

?>
<script>
    function clearLS() {
        localStorage.clear();
    }

   // define an empty array 
    var data = [];

    // collect ids from local storage
    var searches = localStorage.getItem('Receipt');
    // If searches exists iterate results
    if (searches) {
        // format ids collected into json array 
        searches = JSON.parse(searches);
        // Pushes each id into the data array 
        for (var item = 0; item != searches.length; item++) {
            // set the key name as 'item'
            data.push({ item : searches[item]});
        } 
    }

    //-----------------------------------------------------------------------
    //  AJAX request  
    //-----------------------------------------------------------------------

    $("form").submit(function(e){
        
        // Prevent the submission
        e.preventDefault(e);

        // Grab every field ID
        var Validation_input_first_name = document.getElementById('input_first_name');
        var Validation_input_surname = document.getElementById('input_surname');
        var Validation_input_email = document.getElementById('input_email');

        //get the ID's value
        var first_name = Validation_input_first_name.value;
        var surname = Validation_input_surname.value;
        var email = Validation_input_email.value;
        // use it
        //alert(first_name); // just to show the new value



        $.ajax({   
        url: "wardrobe/Ajax-test7.php?first_name="+first_name+"&surname="+surname+"&email="+email,                                   
        type: 'post',                     
        data: {'key': data}, // get data array and send through Ajax
        dataType: 'json',                    
        success: function(data)  // data returned from php db        
        {
        // put data collected into function "sortData" below
        //sortData(data);
        view(data);
        } 
        });

        $('form').unbind().submit();
        localStorage.removeItem('Receipt');
        alert(Email has been sent to customer);

    }); // End of submited form 

</script>