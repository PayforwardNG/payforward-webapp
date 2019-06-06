<div class="container">
    <div class="row">

        <div class="col-lg-3">
            <div class="single-sidebar-widget mb-30">
                <div class="sidebar-title">
                    <h5>Leasing</h5>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia</p>
                </div>
            </div>    
        </div>


        <!-- single sidebar widget -->
        <div class="col-lg-9 single-sidebar-widget mb-30">
            <div class="sidebar-title text-center">
                <h5>Leasing Calculator</h5>
            </div>
            <hr style="border: 2px solid #551EB9; width: 845px; margin-left: -45px">
                <p style="color:black; font-weight: 600">Click item to show payment details</p>
            <div class="row">
                <div class="col-lg-2 image-items ">
                    <div class="sidebar-body latest-post mt-3">
                        <ul>
                            <!-- single latest post -->
                            <li>
                                <div class="latest-post-wrap media">
                                    <div class="latest-post-img" id="image1" >
                                        <img src="../assets/img/blog/latest-blog1.png" alt="" id="img1"> 
                                    </div>
                                </div>
                            </li>
                            <!-- single latest post -->

                            <!-- single latest post -->
                            <li>
                                <div class="latest-post-wrap media">
                                    <div class="latest-post-img" id="image2" >
                                        <img src="../assets/img/blog/latest-blog2.png" alt="" id="img2">
                                    </div>
                                </div>
                            </li>
                            <!-- single latest post -->

                            <!-- single latest post -->
                            <li>
                                <div class="latest-post-wrap media">
                                    <div class="latest-post-img" id="image3" >
                                        <img src="../assets/img/blog/latest-blog3.png" alt="" id="img3">
                                    </div>
                                </div>
                            </li>
                            <!-- single latest post -->

                            <!-- single latest post -->
                            <li>
                                <div class="latest-post-wrap media">
                                    <div class="latest-post-img" id="image4">
                                        <img src="../assets/img/blog/latest-blog3.png" alt="" id="img4">
                                    </div>
                                </div>
                            </li>
                            <!-- single latest post -->
                        </ul>
                    </div>
                </div>
                <!-- end of image item col -->

                <div class="col-lg-10 mt-4">
                    <form action="" method="">
                        <div class="form-group row">
                            <label for="price" class="col-form-label col-sm-4 h5 lease-labels">Product Price</label>
                            <div class="slider-container-lease col-sm-6 pl-5">
                                <input type="range"  class="slider-lease" min="0" max="100000" step="1" value="0">
                                <span class="slider-span-lease"></span>
                            </div>
                            <div class="col-sm-2">
                                <input style="border: 1px solid #ced4da;" type="number" name="price" id="price" placeholder="0" class="form-control number-input-field">
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-form-label col-sm-4 h5 lease-labels">Down Payment</label>
                            <div class="slider-container-lease col-sm-6 pl-5">
                                <input type="range"  class="slider-lease" min="0" max="100000" step="1" value="0">
                                <span class="slider-span-lease"></span>
                            </div>
                            <div class="col-sm-2">
                                <input style="border: 1px solid #ced4da;" type="number" name="deposit" id="deposit" placeholder="0" class="form-control number-input-field">
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-form-label col-sm-4 h5 lease-labels">Lease Term</label>
                            <div class="slider-container-lease col-sm-6 pl-5">
                                <input type="range"  class="slider-lease" min="0" max="100000" step="1" value="0">
                                <span class="slider-span-lease"></span>
                            </div>
                            <div class="col-sm-2">
                                <input style="border: 1px solid #ced4da; cursor: not-allowed" type="number" name="months" id="months" placeholder="0" class="form-control number-input-field" disabled> months
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-form-label col-sm-6 h5 lease-labels ">Monthly Payment <br>Indicator</label>
                        
                            <div class="col-sm-6 mt-3">
                                <span style='font-size:30px;' id="payment"> &#8358; &#8213;&#8213;&#8213;</span>
                            </div> 
                        </div>
                            
                        
                    </form>
                </div>  
            </div>
        </div>
        <!--End of  single sidebar widget -->
    </div>
</div>






<script>

    $(document).ready(function(){
    
                // if ($('#img1')) {
                    // $(this).css({'opacity': '1', 'margin-top':'20px', 'margin-bottom': '15px', 'margin-left': '-5px', 'transform': 'scale(1.5,1.5)'});
                    // $(this).siblings('.latest-post-img').css({'transform': 'scale(1,1)'});
                   
                //    function for onclick of each lease item
                    $('.latest-post-img').each(function(){
                        $('.latest-post-img').click(function(){
                            // alert('fggg');
                            $(this).css({'opacity': '1', 'margin-top':'20px', 'margin-bottom': '15px', 'margin-left': '-5px', 'transform': 'scale(1.5,1.5)'});
                            $('.latest-post-img').not(this).css({'opacity': '', 'margin-top':'', 'margin-bottom': '', 'margin-left': '', 'transform': ''});
                            $('#months').val(6);
                        //     $('li div.latest-post-img').has('li div.latest-post-img').not('#image1').css({'border': '1px solid blue'});
                        });
                    });
                
                // function to calculate down payment and actual montly payment
                    $('input#price').on('input', function(){ 
                    //    alert('fggg');
                    //     // for down payment value
                        $('input#deposit').val( Math.round(0.3 * $(this).val()) );

                    //     // monthly payment
                        var payment = Math.round( (1.25 * $(this).val()) / 6 );
                        $('span#payment').html('&#8358; '  + payment).css({'color':'#551EB9'});
                       
                    });
                    
                    
                // if ($('#img2')) {
                // //     $(this).css({'opacity': '1', 'margin-top':'20px', 'margin-bottom': '15px', 'margin-left': '-5px', 'transform': 'scale(1.5,1.5)'});
                // //     $(this).siblings('.latest-post-img').css({'transform': 'scale(1,1)'});
                //     $('#img2').click(function(){
                //         $('.latest-post-img').not('#img2').css({'border': '1px solid blue'});
                //         // $(this).css({'opacity': '1', 'margin-top':'20px', 'margin-bottom': '15px', 'margin-left': '-5px', 'transform': 'scale(1.5,1.5)'});
                //         alert ('yaya');
                //     });
                // }

                // if ($('#img3')) {
                // //     $(this).css({'opacity': '1', 'margin-top':'20px', 'margin-bottom': '15px', 'margin-left': '-5px', 'transform': 'scale(1.5,1.5)'});
                // //     $(this).siblings('.latest-post-img').css({'transform': 'scale(1,1)'});
                //     $('.latest-post-img').click(function(){
                //         // $('.latest-post-img').not(this).css({'border': '1px solid green'});
                //         // $(this).css({'opacity': '1', 'margin-top':'20px', 'margin-bottom': '15px', 'margin-left': '-5px', 'transform': 'scale(1.5,1.5)'});
                //         alert ('yoyo');
                //     });
                // }

                // if {
                // //     $(this).css({'opacity': '1', 'margin-top':'20px', 'margin-bottom': '15px', 'margin-left': '-5px', 'transform': 'scale(1.5,1.5)'});
                // //     $(this).siblings('.latest-post-img').css({'transform': 'scale(1,1)'});
                //     $('.latest-post-img').click(function(){
                //         // $('.latest-post-img').not(this).css({'border': '1px solid yellow'});
                //         // $(this).css({'opacity': '1', 'margin-top':'20px', 'margin-bottom': '15px', 'margin-left': '-5px', 'transform': 'scale(1.5,1.5)'});
                //         // $(this).siblings('.latest-post-img').css({'transform': 'scale(1,1)'});
                //         alert ('yooy');
                //     });
                // }
                // else if ($('#img3').click()) {
                //     $(this).css({'opacity': '1', 'margin-top':'20px', 'margin-bottom': '15px', 'margin-left': '-5px', 'transform': 'scale(1.5,1.5)'});
                //     $(this).siblings('.latest-post-img').css({'transform': 'scale(1,1)'});
                //     // alert ('yaay');
                // }
                // else {
                //     $(this).css({'opacity': '1', 'margin-top':'20px', 'margin-bottom': '15px', 'margin-left': '-5px', 'transform': 'scale(1.5,1.5)'});
                //     $(this).siblings('.latest-post-img').css({'transform': 'scale(1,1)'});
                //     alert ('yay');
                // }
      
    });

</script>