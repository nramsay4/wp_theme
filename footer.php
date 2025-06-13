<div>
            <div style="background: transparent linear-gradient(263deg, #0D5E82 0%, #0A455C 100%) 0% 0% no-repeat padding-box; opacity: 1;" class="w-full px-20 py-5 max-sm:px-5">
                <h3 class="text-lg font-extrabold text-white pt-3 pb-0">Van Tatenhove Center for Counseling</h3>
                <hr class="my-5 text-white max-w-xs">
                <div class="text-white grid grid-cols-2 max-w-md max-[400px]:block">
                    <p class="text-sm mr-3"><span class="font-extrabold">Kirkpatrick-Rembert <br/>Building Upper Level</span><br/> 190 Spring Street<br/>Wilmore, KY 40390<br/>(859) 858-2338<br/><a href="mailto:VCfC@asburyseminary.edu" class="text-white">vcfc@asburyseminary.edu</a></p>
                    <p class="text-sm max-[400px]:my-5"><span class="font-bold">Clinic Hours</span><br/>Tuesday -Thursday: 11 a.m. - 5 p.m.</p>
                </div>
                <div class="text-xs text-center text-white">
                Asbury Theological Seminary &copy; <?php echo date("Y") ?> | <a class="text-white" href="https://asburyseminary.edu/about/communications/privacy/">Privacy Policy</a>
                </div>
            </div> 	
        </div>


        <script>
            jQuery(".carousel-info").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.carousel-img',
            autoplay: true,
            autoplaySpeed: 6000,
            pauseOnHover: true,
            });
            jQuery('.carousel-img').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.carousel-info',
            dots: false,
            arrows: true,
            centerMode: true,
            focusOnSelect: true,
            pauseOnHover: true,
            });
            
            jQuery('.slick-prev').empty();
            jQuery('.slick-next').empty();
        
        </script>
	<?php wp_footer(); ?>
    </body>
</html>



