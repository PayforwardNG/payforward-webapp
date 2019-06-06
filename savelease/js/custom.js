/*==================================================================================
    Custom JS (Any custom js code you want to apply should be defined here).
====================================================================================*/

$(document).ready(function(){
    // saving section loader here
    $('#finance-tools').load('./../savelease/save.php', function(response, status, callback){
        // loadPages();
        if (status == 'error') {
            var msg = 'Requested page not found';
            alert (msg);
        }
    });

    // click function for saving tool button
    $('#save-tool').click(function(){
        // alert('lease');
        $('#finance-tools').load('./../savelease/save.php', function(response, status, callback){
            // loadPages();
            if (status == 'error') {
                var msg = 'Requested page not found';
                alert (msg);
            }
        });
    });
    // end of saving section loader

    
//    lease tool section loader here
    $('#lease-tool').click(function(){
        // alert('lease');
        $('#finance-tools').load('./../savelease/lease.php', function(response, status, callback){
            // loadPages();
            if (status == 'error') {
                var msg = 'Requested page not found';
                alert (msg);
            }
        });
    });

    // function loadPages() {
    //     var $range = $('.slider');
    
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
    // }

});

