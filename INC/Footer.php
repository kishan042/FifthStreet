<!-- Sass file = _footer.scss -->

<!-- Footer -->

<footer class="mob-footer bg-gray-light">
    <div class="container">
        <div id="mob-footer-wrapper">
            <div class="row mx-0 pl-1 pt-20">        
                <div class="col-xs-12 pl-0">
                    <p class="p-light">
                        <a href="<?php echo BASE_URL ?>">
                            <img src="<?php echo $img ?>icons/logo.svg" style="width:70px">
                        </a>
                        <span class="pl-1 <?php echo $hide ?>"> / </span>
                            <a class="<?php echo $hide ?>" href="../wardrobe.php">
                                <span class="pl-1"><?php echo 
                                    $PreviousPage ?>
                                </span>
                            </a>
                        <span class="pl-1"> / </span>
                        <a href="#"><span class="pl-1"><?php echo $CurrentPage ?></span></a>
                    </p>
                </div>
            </div> 
            <hr class="my-0 ">
            <div class="row mx-0">
                <div class="col-xs-12 col-md-9 footer-list">
                    <ul class="pt-10 mb-0">
                        <li class="pl-1">
                            <a href="<?php echo $men ?>">MEN</a>
                        </li>
                        <li class="pl-1">
                            <a href="<?php echo $women ?>">WOMEN</a>
                        </li>
                        <li class="pl-1">
                            <a href="<?php echo $brands ?>">BRANDS</a>
                        </li>
                        <li class="pl-1 hidden-md-up">
                            <a href="<?php echo $trending ?>">TRENDING</a>
                        </li>
                        <li class="pl-1 hidden-md-up">
                            <a href="<?php echo $offers ?>">OFFERS</a>
                        </li>
                        <li class="pl-1 hidden-md-up">
                            <a href="<?php echo $wardrobe ?>">WARDROBE</a>
                        </li> 
                        <li class="pl-1">
                            <a href="<?php echo $about ?>">ABOUT US</a>
                        </li>  
                    </ul>
                </div>
                <div class="txt-xs-center py-1 col-md-3">
                    <hr class="hidden-md-up">
                    <p class="p-light pt-10">&copy; <?php echo date("Y"); ?></p>     
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $JSPath ?>"></script>
<?php include (ROOT_PATH . 'JS/wishlist-local-storage.php'); ?>
<?php include (ROOT_PATH . 'JS/souvenirs-local-storage.php'); ?>
<?php include (ROOT_PATH . 'JS/simpleCart.min.php'); ?>
<script>

// If the user is using a device larger then tablet
// show the product name column
if ($(window).width() > 767) {
  simpleCart({  
                // chechout method
                checkout: {
                    type: "PayPal",
                    email: "user@FifthStreet.com"
                },
                // Currency
                currency: "GBP",
                // Layout of the cart div or table
                cartStyle: "table",
                // Cart columns 
                cartColumns: [

                     //{view:'image' , attr:'thumb', label: false},
                    { view: function(item, column){
                      return"<img src='"+item.get('image')+"'>";
                    },
                     attr: 'image' },
                    {attr: "name",         label: "Product"},
                    {view: "currency",     attr: "total", label: "Price"},
                    {view: "increment",    label: "Inc", text: "Add"},
                    {attr: "quantity",     label: "Qty"},
                    {view: "decrement",    label: "Dec", text: "Remove"}
                ]
            });
} else {
// If the user is using a mobile device
// remove the product name column
      simpleCart({  
                // chechout method
                checkout: {
                    type: "PayPal",
                    email: "user@FifthStreet.com"
                },
                // Currency
                currency: "GBP" ,
                // Layout of the cart div or table
                cartStyle: "table",
                // Cart columns 
                cartColumns: [

                     //{view:'image' , attr:'thumb', label: false},
                    { view: function(item, column){
                      return"<img class='img-fluid' src='"+item.get('image')+"'>";
                    },
                     attr: 'image' },
                    {attr: "name",         label: "Product"},
                    {view: "currency", attr: "total", label: "Price"},
                    {view: "decrement",    label: "Dec", text: "- 1"},
                    {attr: "quantity",     label: "false", text:"Qty"},
                    {view: "increment",    label: "Inc", text: "+ 1"},
                ]
            });





}
</script>
</body>