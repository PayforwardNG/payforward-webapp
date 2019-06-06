<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include("../include_links/head.php");
    ?>
</head>

<body id="load_this">
    <!-- Preloader -->
    <div class="preLoader">
        <div class="preload-inner">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>
    </div>
    <!-- End Of Preloader -->

    <!-- Main header -->
<?php
include("../include_links/header.php");

?>
    <!-- End of Main header -->

    <!-- page title -->
    <div class="page-title-wrap-savelease" data-bg-img="../assets/img/feature/businesscalc3.jpg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- page title content -->
                    <div class="page-title-content text-center">
                        <h1 class="h2" style="border: 1px solid white; width: 50%; padding:25px">Check Amount</h1>
                    </div><!-- /.End of page title content -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!--/.End of page title -->

    <!-- blog list area -->
    <section class="pt-120 pb-150">
        <div class="container">
             <!-- blog pagination -->
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 col-pagination">
                    <ul class="theme-pagination pt-sans pagination align-items-center">
                        <li class="active"><a href="#" id="save-tool">Saving Tool</a></li>
                        <li><a href="#"  class="link-list" id="lease-tool">Leasing Tool</a></li>
                    </ul>
                        <!--End of blog pagination -->
                </div>
                <div class="col-3"></div>
            </div>
             
            <div class="row" id="finance-tools">
                <!-- saving tools section -->
            </div>
        </div>
    </section>
    
    <!-- Start of Footer     -->
    <?php

    include("../include_links/footer.php");

    ?>
        <!-- End of Footer -->
        
        <!-- footer files -->
        <?php
            include("../include_links/foot.php");
        ?>

    <!-- script for range slider values display-->
    <script>
        // $(document).ready(function(){
        
            // var $range = $('.slider');

            // $range.each(function() {

            // var $thumb = $(this).next();
            // var max = parseInt(this.max);
            // var tw = 476;
             // Thumb width. See CSS
            // var maxPercent = 10;

            // $(this).on('input.slider', function() {

            //     var w = $(this).width();
                // alert(w);
                // var val = parseInt(this.value);
                // // alert(val);
                // var max = parseInt(this.max);
                // var txt = val >= max ? '∞' : val;
                // var xPX = val * (w - tw) / max; 
                // alert(xPX);
                // Position in PX
                // var xPC = xPX * 100 / w;     // Position in % (if ever needed)

                // $thumb.css({left: xPX}).attr("data-val", txt);
            // });

            // });

            // $range.trigger('input.slider'); /
            // $(window).on("resize", () => $range.trigger("input.slider")); 
            // and on resize

        // });
    //     $(document).ready(function(){
    // // $('body#load_this').on('load', loadPages);
    //         loadPages(); //perform this function on load of index page

            
    //     });

    //     function loadPages() {
    //         // $('#save-tool').click(function(){
    //             // alert ("tggjh");
    //             $('#saving-tools').load('./../savelease/save.php', function(response, status, callback){
    //                 if (status == 'error') {
    //                     var msg = 'Error occured';
    //                     alert (msg);
    //                 }
    //             });

    //         // });
    //     }
        //     </script>
</body>

</html>