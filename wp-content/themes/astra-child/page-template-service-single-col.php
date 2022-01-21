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

<?php echo get_the_content();?>
<!-- 
<div class="container mt-5">

    <div class="text-center">
        <h4 class="gold"> //HK$2950起 </h4>
        <div class="text-center">
            <h2 class="blue"> 註冊香港公司服務 </h2>
            <div class="small">價格包括以下服務﹕ </div>
            <div class="small mt-3">如您需要，我們也可以提供公司香港註冊地址，並替您處理所有相關行政工作，例如公司網站、會議室出租、電話代接等，詳情另議。 <br>
                會有專人跟進回覆提問及與客戶商討解決其所有困難。不計工作時間，以解決客人問題為本。
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 ">
    <table class="ltd-co-table">
        <thead>

            <tr>
                <th></th>
                <th>
                    <div class="table-head">Lite Plan</div>
                </th>
                <th>
                    <div class="table-head">Standard Plan</div>
                </th>
                <th>
                    <div class="table-head">Premium Plan</div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td>
                    <div class="price">$2,950</div>
                    <span class="gold-label">BEST PRICE</span>
                </td>
                <td>
                    <div class="price">$3,845</div>
                    <span class="gold-label">MOST POPULAR</span>

                </td>
                <td>
                    <div class="price">$4,645</div>
                    <span class="gold-label">ALL INCLUSIVE</span>

                </td>
            </tr>
            <tr>
                <td>查冊公司名稱</td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
            </tr>
            <tr>
                <td>成立合法有限公司</td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
            </tr>
            <tr>
                <td>填寫法團成立表格</td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
            </tr>
            <tr>
                <td>首年商業登記証</td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
            </tr>
            <tr>
                <td>公司開立証明書</td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
            </tr>
            <tr>
                <td>修訂公司組織章程細則</td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
            </tr>
            <tr>
                <td>跟進轉介開立公司戶口</td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
            </tr>
            <tr>
                <td>會計師核証副本</td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
            </tr>
            <tr>
                <td>持續業務諮詢介紹</td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
            </tr>

            <tr>
                <td>委任一年公司秘書</td>
                <td> </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
            </tr>
            <tr>
                <td>填寫及遞交之後年份周年申報表</td>
                <td></td>
                <td>如下年度秘書服務續期</td>
                <td>如下年度秘書服務續期</td>
            </tr>
            <tr>
                <td>更改公司秘書及董事</td>
                <td></td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
            </tr>

            <tr>
                <td>註冊辦事處地址更改</td>
                <td></td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
            </tr>

            <tr>
                <td>重要控制人登記冊</td>
                <td></td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
            </tr>
            <tr>
                <td>辦理公司綠盒(Company Kit)</td>
                <td></td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
            </tr>
            <tr>
                <td>商業大廈公司註冊地址</td>
                <td></td>
                <td></td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
            </tr>
            <tr>
                <td>公司水牌</td>
                <td></td>
                <td></td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
            </tr>
            <tr>
                <td>代收公司郵件</td>
                <td></td>
                <td></td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
            </tr>
            <tr>
                <td>每月郵件轉寄</td>
                <td></td>
                <td></td>
                <td><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png" class="tick" alt="">
                </td>
            </tr>
            <tr>
                <td class="border-0">每月一次會議室租借</td>
                <td class="border-0"></td>
                <td class="border-0"></td>
                <td class="border-0"><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/tick.png"
                        class="tick" alt="">
                </td>
            </tr>
            <tr>
                <td class="border-0"></td>
                <td class="border-0"> <a href="#" class="choose-plan-btn">Choose Plan</a> </td>
                <td class="border-0"><a href="#" class="choose-plan-btn">Choose Plan</a></td>
                <td class="border-0"><a href="#" class="choose-plan-btn">Choose Plan</a></td>
                </td>
            </tr>


        </tbody>
    </table>

</div>

<div class="container img-shadow-div one-column grey-bg p-3 mt-5">
    <div class="row">
        <div class="col-3"> <img class="w-100 lazyloaded"
                src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/service-img-3.jpg.webp" alt=""
                data-src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/service-img-3.jpg.webp"
                loading="lazy"><noscript><img class="w-100"
                    src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/service-img-3.jpg.webp" alt=""
                    data-eio="l"></noscript></div>
        <div class="col-9 position-relative">
            <div class="deep-blue">
                <h3 class="blue mt-3">我們是CountAudit算數會計師事務所</h3>
                <div class=" mt-3">是真正在hkicpa登記的執業會計師事務所<br>PC Firm Registration Number:2589</div>
            </div>
            <div class="text-end mt-3"> <a href="javascript:void(0);" class="service-contact-btn">Registry</a> </div>
        </div>
    </div>
    <div class="img-shadow"></div>
</div> -->



<div class="grey-bg-2 mt-5">


    <div class="container contact-form-container">
        <div class="row pt-5 pb-5  mt-5 align-items-center justify-content-center">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12  p-lg-5 p-md-5 p-sm-3 p-3 ">

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