<!-- <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script> -->
<script src="assets/custom/js/jquery.nicescroll.min.js"></script>
<script src="assets/custom/js/smooth-scroll.polyfills.min.js"></script>
<script>
    $(function() {
        $("body").niceScroll();
    });
</script>
<script>
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1000
    });
</script>
<script>
    // $(document).ready(function() {
    //     "use strict";
    //     $(window).on("scroll", function() {
    //         var sc = $(window).scrollTop();
    //         if (sc > 620) {
    //             $(".navbar").show();
    //             $(".navbar .heading").hide();
    //             $(".navbar").css("background-color", "#222222");
    //             $(".navbar").css("position", "fixed");
    //         } else if (sc <= 620) {
    //             $(".navbar").css("position", "absolute");
    //             $(".navbar").css("background", "none");
    //         }
    //         /*
    //         else if(sc >= 700){
    //             scrollButton.show();
    //         }
    //         else if(sc < 700){
    //             scrollButton.hide();
    //         }
    //         /*
    //         else if(sc <= 650){
    //             if($(".pnlm-load-button").click() === true){
    //                 $(".navbar").hide();
    //             }
    //             else{
    //                 $(".navbar").show();
    //             }
    //         }
    //         */
    //     });
    // });

    $(document).ready(function() {
        var scroll_start = 0;
        var startchange = $('#services');
        var offset = startchange.offset();
        if (startchange.length) {
            $(document).scroll(function() {
                scroll_start = $(this).scrollTop();
                if (scroll_start > offset.top) {
                    $(".navbar").css('background-color', '#f0f0f0');
                } else {
                    $('.navbar').css('background-color', 'transparent');
                }
            });
        }
    });
</script>