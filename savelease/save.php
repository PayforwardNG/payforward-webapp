
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="single-sidebar-widget mb-30">
                <div class="sidebar-title">
                    <h5>Saving Tools</h5>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit lorem ipsum anim id est laborum perspiciatis unde.</p>
                </div>
            </div>    
        </div>

        <div class="col-lg-8 tool-content">
            <div class="single-blog-inner pl-5 pt-5">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel dolores natus veritatis</p> 
                <p>Use the tool to see how your wealth grows in with your profit per annum</p>
                <form action="" method="">
                    <div class="container">
                        <div class="row">
                            <!-- amount options -->
                            <div class="col-12 h4">
                                <strong> Amount / month </strong> 
                            </div>
                            <div class="col-12 h5">
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" checked class="amount-option" value=5000>5,000
                                </label> &nbsp; &nbsp;
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" class="amount-option" value=10000>10,000
                                </label> &nbsp; &nbsp;
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" class="amount-option" value=15000>15,000
                                </label> &nbsp; &nbsp;
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" class="amount-option" value=20000>20,000
                                </label> &nbsp; &nbsp;
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" class="amount-option" value=25000>25,000
                                </label> 
                            </div>
                        </div> <br><br>

                        <!-- slider control -->
                        <div class="row">
                            <div class="col-lg-8 slider-container">
                                <div class="labels">
                                    <label for="five" class="pull-left">5%</label>
                                    <label for="ten" class="pull-right">10%</label>
                                </div>
                                <input type="range"  class="slider" min=5 max=10 step=1 value=5>
                                <span class="slider-span" style="color:white"></span>
                            </div> 
                        </div><br> <br> <br>
                        
                        <div class="row h5">
                            <div class="col-lg-4"> <strong> 2 years </strong> <br><br> <span style='font-size:30px;' id="amount-for-two-years"> &#8358; &#8213;</span> </div>
                            <div class="col-lg-4"> <strong> 5 years </strong> <br><br> <span style='font-size:30px;' id="amount-for-five-years"> &#8358; &#8213;</span> </div>
                            <div class="col-lg-4"> <strong> 10 years </strong> <br><br> <span style='font-size:30px;' id="amount-for-ten-years"> &#8358; &#8213;</span> </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        
        var $range = $('.slider');
  
        $range.each(function() {
        
            var $thumb = $(this).next('.slider-span');
            var max = parseInt(this.max, 10);
            var tw = 100; // Thumb width. See CSS
            // var ml = 
        
            $(this).on('input input.slider', function() {
        
            var w = $(this).width();
            var val = parseInt(this.value, 10);
            var txt = val <= max ? val : '∞';
            var xPX = val * (w - tw) / max; // Position in PX
            // var xPC = xPX * 100 / w;     // Position in % (if ever needed)
        
            $thumb.css({left: xPX}).attr("data-val", txt);
                // slider value in percent
              var valInPercent = val / 100;
            //     //   selected amount 
              var amountPerMonth = $('.amount-option:checked').val();
            // $(".amount-option").change(function(){
            //     if( $(this).is(":checked") ){ // check if the radio is checked
            //         var val = $(this).val(); // retrieve the value
               
                   
            //     }
            // });
              var amountPerYear = 12 * amountPerMonth;
              var percentProfit = 1 + valInPercent;
              var t_amountPerYear = Math.round( (amountPerYear * percentProfit) );
            //   alert (t_amountPerYear);
              $('span#amount-for-two-years').html('&#8358; '   +   2  *  t_amountPerYear ).css({'color':'#551EB9'});
              $('span#amount-for-five-years').html('&#8358; '  +   5  *  t_amountPerYear ).css({'color':'#551EB9'});
              $('span#amount-for-ten-years').html('&#8358; '   +   10 * t_amountPerYear  ).css({'color':'#551EB9'});
        
            });
        
        });
    
        $range.trigger('input.slider'); // Calc on load
        $(window).on("resize", () => $range.trigger("input.slider")); // and on resize // and on resize
    });
   
        // var $range = $('.slider');

        //     $range.each(function() {

        //     var $thumb = $(this).next('slider-span');
        //     var max = parseInt(this.max, 10);
        //     var tw = 476;
            
        //     // var maxPercent = 10;

        //     $(this).on('input.slider', function() {

        //         var w = $(this).width();
        //         // alert(w);
        //         var val = parseInt(this.value, 10);
        //         // alert(val);
        //         var txt = val >= max ? '∞' : val;
        //         var xPX = val * (w - tw) / max; 
        //         // alert(xPX);
        //         // Position in PX
        //         // var xPC = xPX * 100 / w;     // Position in % (if ever needed)

        //         $thumb.css({left: xPX}).attr("data-val", txt);
        //     });

        //     });

        //     $range.trigger('input.slider'); 
        //     $(window).on("resize", () => $range.trigger("input.slider")); 
        //     // and on resize

</script>
