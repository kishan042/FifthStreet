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
<script>
var disqus_config = function () {
this.page.url = 'http://thefifthstreet.com/';  
this.page.identifier = <?php echo $product["sku"] ?>;
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = '//fifthstreet-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
</body>