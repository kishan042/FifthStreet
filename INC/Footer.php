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
                        <span class="breadcrumb-pl <?php echo $hide ?>"> / </span>
                            <a class="<?php echo $hide ?>" href="<?php echo $PreviousPage_Link ?>">
                                <span class="breadcrumb-pl hidden-xs-down"><?php echo 
                                    $PreviousPage ?>
                                </span>
                                <span class="breadcrumb-pl hidden-sm-up">
                                ...
                                </span>
                            </a>
                        <span class="breadcrumb-pl"> / </span>
                        <a href="#"><span class="breadcrumb-pl"><?php echo $CurrentPage ?></span></a>
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
    <?php include (ROOT_PATH . 'JS/jquery-model-controller.min.php'); ?>
    <?php include (ROOT_PATH . 'JS/simpleCart.min.php'); ?> 
<script>
// If the user is using a device larger then tablet
// show the product name column
if ($(window).width() > 766) {

  simpleCart({  
                // chechout method
                checkout: {
                    type: "PayPal",
                    email: "user@FifthStreet.com"
                },
                // Currency
                currency: "GBP",
                // Layout of the cart div or table
                cartStyle: "div",
                // Cart columns 
                cartColumns: [

                    { view: function(item, column){
                      var itemID = item.get('id');
                      var id = $.trim(itemID); 
                      return"<a href='<?php echo BASE_URL . "product.php?id=" ?>"+id+"'><img class='img-fluid' src='"+item.get('image')+"'></a>";
                    },
                     attr: 'image' },
                    {attr: "name",         label: "Product"},
                    {view: "increment",    label: "Inc", text: "+ Qty"},
                    {attr: "quantity",     label: "Qty"},
                    {view: "decrement",    label: "Dec", text: "-  Qty"},
                    {view: "currency",     attr: "total", label: "Price"},
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
                cartStyle: "div",
                // Cart columns 
                cartColumns: [


                    { view: function(item, column){
                      var itemID = item.get('id');
                      var id = $.trim(itemID);  
                      return"<a href='<?php echo BASE_URL . "product.php?id=" ?>"+id+"'><img class='img-fluid' src='"+item.get('image')+"'></a>";
                    },
                     attr: 'image' },
                    {attr: "name",         label: "Product"},
                    {view: "currency", attr: "total", label: "Price"},
                    {view: "increment",    label: "Inc", text: "+ Qty"},
                    {attr: "quantity",     label: "false", text:"Qty"},
                    {view: "decrement",    label: "Dec", text: "- Qty"},
                ]
      });
}
</script>
</body>