<?php
/**
 * Template Name: Service page
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

<div class="container mt-5">


    <div class="row justify-content-center gx-5">
        <div class="col-lg-5 col-md-10 col-sm-10 col-10  mb-5">
            <div class="img-shadow-div grey-bg p-3">

                <img class="w-100" src="<?php echo wp_get_attachment_image_src(get_field('service_image'),'full')[0];?>"
                    alt="">
                <div class="deep-blue">
                    <h3 class="blue mt-3">我們是CountAudit算數會計師事務所</h3>
                    <div class=" mt-3">是真正在hkicpa登記的執業會計師事務所<br>PC Firm Registration Number:<br>2589</div>
                </div>

                <div class="text-end mt-3">
                    <a href="javascript:void(0);" class="service-contact-btn">Registry</a>
                </div>
                <div class="img-shadow"></div>


            </div>


        </div>
        <div class="col-lg-5 col-md-10 col-sm-10 col-10 ">
            <div class="text-start">
                <?php echo get_field('service_content');?>
                <!--
                    
                <div>
                    <h4 class="gold"> //HK$3,500起
                    </h4>
                </div>
                <div>
                    <h2 class="blue"> 有限公司周年審計服務 </h2>
                    <div class="small-2">價格包括以下服務﹕</div>
                </div>

                <ul class="service-ul mt-4">
                    <li>審計核數服務</li>
                    <li> 編制財務年報</li>
                    <li> 委任為稅務代表</li>
                    <li> 填妥利得稅報稅表</li>
                    <li> 遞交報稅表</li>
                    <li> 稅務建議</li>
                    <li> 其他雜項費用</li>

                </ul>

                <div class="mt-4">如您需要，我們也可負責將不完整的賬目完善直到合乎審計標準，詳情另議。
                    會有專人跟進回覆提問及與客戶商討解決其所有困難。不計工作時間，以解決客人問題為本。</div>
                 -->
            </div>
        </div>
    </div>





</div>


<div class="grey-bg-2 mt-5">


    <div class="container contact-form-container">
        <div class="row pt-0 pb-0  mt-0 align-items-center justify-content-center">
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 ">

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
            <div class="col-lg-8 col-md-12 col-sm-12 col-12  p-lg-5 p-md-5 p-sm-3 p-3 ">

                <h4 class="text-center"> Quotation Form of Accounting Service <br>
                    會計服務報價表</h4>


                <div class="form-div white-bg mt-4">
                    <table class="border-0 mt-0">
                        <tr>
                            <td colspan="2">
                                <h4 class="text-center"> Contact Information 聯絡資料</h4>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="name">Name 姓名:</label></td>
                            <td><input id="name" type="text" class="form-control"></td>
                        </tr>
                    </table>

                    <!-- <input type="text" class="form-control" placeholder="如何稱呼您？">
                    <input type="text" class="form-control" placeholder="聯絡電話">
                    <input type="text" class="form-control" placeholder="電郵">
                    <input type="text" class="form-control" placeholder="查詢類別">
                    <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="簡短留言"></textarea>

                    <div class="text-end">
                        <a href="#" class="blue-bg white submit-btn mt-3">服務報價</a>
                    </div> -->

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