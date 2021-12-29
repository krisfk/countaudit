<?php
/**
 * Template Name: Service page(single column)
 * Template Post Type: page
 **/


// if ( ! defined( 'ABSPATH' ) ) {
	// exit; // Exit if accessed directly.
// }

get_header(); ?>

<div class="main-banner">



    <div class="position-absolute top-0 start-0 w-100 h-100">


        <div class="container title-container">
            <div><?php echo get_field('title_txt');?></div>
        </div>

    </div>


    <img class="main-banner-img" src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/main-banner-bg-1.jpg"
        alt="">


</div>


<div class="container banner-bottom-blue-container">

    <div class="p-4">
        <h3 class="white text-center">We'd Love To Meet You <br>And Let You The Perfect Solution</h3>

        <ul class="gold-btn-ul">
            <li> <a class="gold-btn" href="javascript:void(0);"> SCHEDULE A MEETING</a></li>
            <li><a class="gold-btn" href="javascript:void(0);">CONTACT US</a></li>
            <li><a class="gold-btn" href="javascript:void(0);">DOWNLOAD BROCHURE</a></li>
        </ul>
        <!-- <div class="text-end gold small">CountAudit宗旨</div> -->
    </div>
</div>

999
<?php echo get_the_content();?>

<div class="grey-bg-2 mt-5">


    <div class="container">
        <div class="row pt-5 pb-5  mt-5 align-items-center justify-content-center">
            <div class="col-5">

                <div>
                    <div>
                        <h4 class="gold">//明碼實價

                        </h4>
                    </div>
                    <div>
                        <h2 class="blue"> 索取服務報價 </h2>
                        <div class="small">請聯絡我們並提供資料，即時能獲取準確報價</div>
                    </div>
                </div>
            </div>
            <div class="col-5">

                <div class="form-div white-bg ">

                    <input type="text" class="form-control" placeholder="如何稱呼您？">
                    <input type="text" class="form-control" placeholder="聯絡電話">
                    <input type="text" class="form-control" placeholder="電郵">
                    <input type="text" class="form-control" placeholder="查詢類別">
                    <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="簡短留言"></textarea>

                    <div class="text-end">
                        <a href="#" class="blue-bg white submit-btn mt-3">服務報價</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
<script type="text/javascript">
$(function() {
    $('.about-carousel').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: false,
        pauseOnFocus: false,
        infinite: true,
        speed: 800,
        autoplaySpeed: 5000,
        cssEase: 'ease-out',
        pauseOnHover: false

    });




})
</script>
</body>

</html>