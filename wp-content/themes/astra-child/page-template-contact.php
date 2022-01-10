<?php
/**
 * Template Name: Contact page
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


    <!-- <img class="main-banner-img" src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/banner-bg.jpg" alt=""> -->

    <img class="main-banner-img" src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/main-banner-bg-1.jpg"
        alt="">
    <!-- <img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/banner-bg.jpg" alt=""> -->

</div>


<div class="container contact-pts-ul-wrapper-container">

    <ul class="contact-pts-ul  p-0 ">
        <li>
            <img class="contact-pts-icon"
                src="http://64.227.13.14/countaudit/wp-content/uploads/2022/01/contact-icon-1.png" alt="">

            <h3 class="white m-0 fw-bold">VISIT US</h3>
            <div>可預約會面</div>

            <div class="gold mt-3">Lai Chi Kok Office</div>
            <div>Flat C, 11/F., Wing Hong Centre, 18 Wing Hong Street, Lai Chi Kok, Kowloon
                Unit C, 4/F, 760 Cheung Sha Wan Rd, Lai Chi Kok, Kowloon</div>

            <div class="gold mt-3">Kwun Tong Office</div>
            <div>Unit 9039, 9/F, Block B, Chung Mei Centre, 15-17 Hing Yip Street, Kwun Tong, Kowloon, Hong Kong
            </div>
        </li>
        <li>
            <img class="contact-pts-icon"
                src="http://64.227.13.14/countaudit/wp-content/uploads/2022/01/contact-icon-2.png" alt="">
            <h3 class="white m-0 fw-bold">CALL US</h3>
            <div>可致電或Whatsapp我們</div>

            <div class="gold mt-3">3525 1900
            </div>
            <div>Office hour: Mon to Fri 10am - 7pm
            </div>

            <div class="gold mt-3">6519 4755 </div>
            <div>Office hour: Mon to Fri 10am - 7pm

            </div>
        </li>
        <li>
            <img class="contact-pts-icon"
                src="http://64.227.13.14/countaudit/wp-content/uploads/2022/01/contact-icon-3.png" alt="">
            <h3 class="white m-0 fw-bold">CONTACT US</h3>
            <div>數小時內回覆</div>

            <div class="mt-3">
                <a class="gold no-deco" href="#" target="_blank">info@countaudit.hk
                </a>
            </div>
        </li>

    </ul>

</div>


<div class="grey-bg-2">

    <div class="text-center pt-5 pb-5">
        <div class="about-slogan blue">Our Team Of Experts <br>
            Are Here For You</div>
        <a href="javascript:void(0);" class="meet-them-btn gold-bg white">Meet Them</a>
    </div>
</div>


<div class="grey-bg-2 mt-5">


    <div class="container">
        <div class="row  mt-5 align-items-center">
            <div class="col-6">

                <div>
                    <h2 class="blue">聯絡我們</h2>

                    <table class="border-0 contact-table">
                        <tr>
                            <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/contact-icon-1-1.png"
                                    alt="">

                            </td>
                            <td>
                                <div>Lai Chi Kok Office <br>
                                    Flat C, 11/F., Wing Hong Centre, 18 Wing Hong Street, Lai Chi Kok, Kowloon<br>
                                    Unit C, 4/F, 760 Cheung Sha Wan Rd, Lai Chi Kok, Kowloon<br>
                                    Kwun Tong Office<br>
                                    Unit 9039, 9/F, Block B, Chung Mei Centre, 15-17 Hing Yip Street, Kwun Tong,<br>
                                    Kowloon, Hong Kong</div>
                            </td>
                        </tr>

                        <tr>
                            <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/contact-icon-2-1.png"
                                    alt=""> </td>
                            <td>3525 1900 <br>
                                Office hour: Mon to Fri 10am - 7pm<br>
                                6519 4755 (Whatsapp Only)</td>
                        </tr>
                        <tr>
                            <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/contact-icon-3-1.png"
                                    alt=""></td>
                            <td>
                                <a href="mailto:info@countaudit.hk" target="_blank">info@countaudit.hk</a>

                                <!--  -->
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-6 p-5">

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