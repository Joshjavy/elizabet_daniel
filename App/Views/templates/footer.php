
<!-- <script src="<?= $baseUrl ?>js/jquery-3.5.1.slim.min.js"></script> -->
<!--Carga JS al final-->
<!-- <script type="text/javascript" src="<?= $baseUrl ?>src/js/jquery_3.4.1.js"></script>
<script type="text/javascript" src="<?= $baseUrl ?>src/js/materialize.min.js"></script>
<script type="text/javascript" src="<?= $baseUrl ?>src/js/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="<?= $baseUrl ?>src/js/scripts.js?v=1.0.1"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.3/axios.min.js"></script>


<script type="text/javascript" src="<?= $baseUrl ?>src/js/proyecto/carroucel.js"></script>
<script "text/javascript" src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script> -->
<!-- <script type="text/javascript" src="<?= $baseUrl ?>src/js/proyecto/actions.js"></script> -->


<script>
    $(document).ready(function() {
        //  $('.slider').bxSlider({
        //     controls: false,
        //     pager:false,
        //     infiniteLoop:true,
        //     responsive:true,
        //     auto:true,
        //     autoStart:true,
        //     pause:5000,

        //  });

        let h = $(window).height();
        let hif = h - 100;
        let w = $(window).width();

        if (w <= 999) {
            $('.imagebg').addClass("hidden")
            $('.imagemb').removeClass("hidden")
            $('.imagemb').css({
                'height': h + 'px'
            })

            $('.imgagradecertop').addClass("hidden")
            $('.imgagradecerbott').removeClass("hidden")

            $('.contentimgagradece').removeClass("justify-center ")
            $('.contentimgagradece').removeClass("flex")

             
        } else if (w >= 1000) {
            $('.imagebg').removeClass("hidden")
            $('.imagemb').addClass("hidden")
            $('.imagebg').css({
                'height': h + 'px'
            })
            $('.imgagradecertop').removeClass("hidden")
            $('.imgagradecerbott').addClass("hidden")

            $('.contentimgagradece').addClass("justify-center ")
            $('.contentimgagradece').addClass("flex")
           
        }



        $(window).on('resize', function() {
            let win = $(this);

            if (win.height() <= 999) {
                $('.imagebg').addClass("hidden")
                $('.imagemb').removeClass("hidden")
                $('.imagemb').css({
                    'height': h + 'px'
                })

                $('.imgagradecertop').addClass("hidden")
                $('.imgagradecerbott').removeClass("hidden")
                
                $('.contentimgagradece').removeClass("justify-center ")
                $('.contentimgagradece').removeClass("flex")
            }
            if (win.width() >= 1000) {
                $('.imagebg').removeClass("hidden")
                $('.imagemb').addClass("hidden")
                $('.imagebg').height = win.height()

                $('.imgagradecertop').removeClass("hidden")
                $('.imgagradecerbott').addClass("hidden")
                $('.contentimgagradece').addClass("justify-center ")
                $('.contentimgagradece').addClass("flex")

            }

        });
    });

   
</script>
</body>

</html>