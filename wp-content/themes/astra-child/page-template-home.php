<?php
/**
 * Template Name: Home page
 * Template Post Type: page
 **/


// if ( ! defined( 'ABSPATH' ) ) {
	// exit; // Exit if accessed directly.
// }

get_header(); ?>
<!-- abcde -->
<!-- <div class="main-banners">
    <div class="main-banner">
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <div class="container title-container">
                <div>
                    <h1 class="txt">
                        The Answers, At One Go</h1> <br>
                    <h3 class="txt smaller">後顧無憂的商業解答</h3>
                </div>
            </div>
        </div>
        <img class="main-banner-img"
            src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/main-banner-bg-1.jpg" alt="">
    </div>
    <div class="main-banner">
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <div class="container title-container">
                <div>
                    <h1 class="txt">
                        承包您所有企業行政工作</h1> <br>
                    <h3 class="txt smaller">審計 | 會計 | 報稅 | 秘書 | 網站 | 數位宣傳 | 設計 等服務</h3>
                </div>
            </div>
        </div>
        <img class="main-banner-img"
            src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/main-banner-bg-2.jpg" alt="">
    </div>

    <div class="main-banner">
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <div class="container title-container">
                <div>
                    <h1 class="txt">

                        每天不分晝夜</h1> <br>
                    <h3 class="txt">解答您的各種商業疑難</h3>
                </div>
            </div>
        </div>
        <img class="main-banner-img"
            src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/main-banner-bg-3.jpg" alt="">
    </div>

    <div class="main-banner">
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <div class="container title-container">
                <div>
                    <h1 class="txt">


                        服務各個 初創企業｜社企｜NGO｜中小企｜學校</h1>
                </div>
            </div>
        </div>
        <img class="main-banner-img"
            src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/main-banner-bg-4.jpg" alt="">
    </div>
</div> -->
<div class="position-relative">
    <img class="w-100 dummy-banner-img"
        src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/main-banner-bg-4.jpg.webp" alt="">

    <div class="position-absolute w-100 h-100 top-0 left-0">
        <?php //echo get_field('banners');?>

        <div class="main-banners">
            <div class="main-banner"
                style="background:url(http://64.227.13.14/countaudit/wp-content/uploads/2021/12/main-banner-bg-1.jpg)">
                <div class="position-absolute top-0 start-0 w-100 h-100">
                    <div class="container title-container">
                        <div>
                            <div>
                                <h1 class="txt big">The Answers, At One Go</h1>
                            </div>
                            <h3 class="txt smaller">後顧無憂的商業解答</h3>
                        </div>
                    </div>
                </div>
                <img class="main-banner-img"
                    src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/main-banner-bg-1.jpg" alt="" />

            </div>
            <div class="main-banner"
                style="background:url(http://64.227.13.14/countaudit/wp-content/uploads/2021/12/main-banner-bg-2.jpg)">
                <div class="position-absolute top-0 start-0 w-100 h-100">
                    <div class="container title-container">
                        <div>
                            <div>
                                <h1 class="txt big">承包您所有企業行政工作</h1>
                            </div>
                            <h3 class="txt smaller">審計 | 會計 | 報稅 | 秘書 | 網站 | 數位宣傳 | 設計 等服務</h3>
                        </div>
                    </div>
                </div>
                <img class="main-banner-img"
                    src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/main-banner-bg-2.jpg" alt="" />

            </div>
            <div class="main-banner"
                style="background:url(http://64.227.13.14/countaudit/wp-content/uploads/2021/12/main-banner-bg-3.jpg)">
                <div class="position-absolute top-0 start-0 w-100 h-100">
                    <div class="container title-container">
                        <div>
                            <div>

                                <h1 class="txt big">每天不分晝夜</h1>
                            </div>
                            <h3 class="txt">解答您的各種商業疑難</h3>
                        </div>
                    </div>
                </div>
                <img class="main-banner-img"
                    src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/main-banner-bg-3.jpg" alt="" />

            </div>
            <div class="main-banner"
                style="background:url(http://64.227.13.14/countaudit/wp-content/uploads/2021/12/main-banner-bg-4.jpg)">
                <div class="position-absolute top-0 start-0 w-100 h-100">
                    <div class="container title-container">
                        <div>
                            <h1 class="txt">服務各個 初創企業｜社企｜NGO｜中小企｜學校</h1>
                        </div>
                    </div>
                </div>
                <img class="main-banner-img"
                    src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/main-banner-bg-4.jpg" alt="" />

            </div>
        </div>

    </div>
</div>

<div class="container home-pts-ul-wrapper-container">
    <?php echo get_field('content_1');?>

    <h1>商業財務，從此變得簡單
    </h1>
    <!-- <ul class="home-pts-ul  p-0 ">
        <li>
            <img class="home-pts-icon" src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/home-icon-1.png"
                alt="">
            專業認可 持牌執業 <br>
            會計師事務所
        </li>
        <li>
            <img class="home-pts-icon" src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/home-icon-2.png"
                alt="">
            1對1專人長期跟進
        </li>
        <li>
            <img class="home-pts-icon" src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/home-icon-3.png"
                alt="">
            實用資訊文章 <br>
            舉辦講座工作坊
        </li>
        <li>
            <img class="home-pts-icon" src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/home-icon-4.png"
                alt="">
            實用資訊文章 <br>
            舉辦講座工作坊
        </li>
    </ul> -->

</div>

<div class="container mt-5">
    <?php echo get_field('content_2');?>

    <!-- <div class="row justify-content-center">

        <div class="col-lg-5 col-md-10 col-sm-10 col-10  pb-5">

            <div class="img-shadow-div">
                <img class="w-100" src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/home-img-1.jpg"
                    alt="">
                <div class="img-shadow"></div>
            </div>
        </div>
        <div class="col-lg-5 col-md-10 col-sm-10 col-12  pl-4 ps-5">

            <div>
                <h4 class="gold"> //為何成立？</h4>
            </div>
            <div>
                <h2> 我們的宗旨</h2>
            </div>

            <table class="border-0 mt-4">
                <tr>
                    <td><img class="gold-diamond"
                            src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/gold-diamond.png" alt="">
                    </td>
                    <td class="pb-3">

                        <h5 class="gold"> 加快資訊傳遞</h5>
                        <div>
                            不斷找出最新商業財務準則之更新，執法部門之行動，
                            業內最新消息，令重要資訊更快廣為人知。
                        </div>

                    </td>
                </tr>
                <tr>
                    <td><img class="gold-diamond"
                            src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/gold-diamond.png" alt="">
                    </td>
                    <td class="pb-3">

                        <h5 class="gold">
                            增強小機構業務力量</h5>
                        <div>協助小型機構，尤其是不太擅長市場推廣的NGO非弁利機構、
                            社會企業和初創小型公司。提供市場商業建議，協助他們實行
                            更有效率管理，省下時間專注服務社會。
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><img class="gold-diamond"
                            src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/gold-diamond.png" alt="">
                    </td>
                    <td class="pb-3">

                        <h5 class="gold">普及商業知識</h5>
                        <div>使香港各界人士對商業及財務知識更有了解，為自己爭取應得
                            之福祉，例如減少僱員／自僱人士被僱主剝削。</div>
                    </td>
                </tr>
                <tr>
                    <td><img class="gold-diamond"
                            src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/gold-diamond.png" alt="">
                    </td>
                    <td class="pb-3">
                        <h5 class="gold">連結社會創新企業</h5>

                        <div>締結社會創新圈子，令創業家能夠相互幫助，達至社會共蠃</div>
                    </td>
                </tr>
            </table>
        </div>
    </div> -->
</div>


<div class="mt-4 blue-bg">

    <?php echo get_field('content_3');?>
    <!-- <div class="container contact-container pt-5 pb-5">
        <h2 class="text-center white">聯絡我們</h2>

        <ul class="contact-ul text-center p-0 mt-4 ms-0">
            <li>
                <div><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/contact-icon-1.png" alt="">
                </div>
                <div>

                    +852 3525 1900


                </div>
            </li>
            <li>
                <div><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/contact-icon-2.png" alt="">
                </div>
                <div>
                    <a href="mailto:info@countaudit.hk" target="_blank" class="mail">info@countaudit.hk</a>



                </div>
            </li>
            <li>
                <div><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/contact-icon-3.png" alt="">
                </div>
                <div>
                    <a href="https://wa.me/+85265194755" class="tel">+852 6519 4755</a>

                </div>
            </li>
        </ul>
    </div> -->
</div>


<?php echo get_field('content_4');?>

<!-- <div class="container">

    <div class="mt-5">
        <h4 class="gold text-center"> //全方位解決所有商業問題
        </h4>
    </div>
    <div class="mb-5">
        <h2 class=" text-center"> CountAudit 服務項目</h2>
    </div>


    <div class="container">

        <div class="row">

            <div class="col-lg-4 col-md-12 col-sm-12 col-12  mb-4">

                <div class="price-table">

                    <div class="price-title white blue-bg text-center pt-3 pb-3">
                        <h3 class="gold-2">特快銀行開戶</h3>
                        <div>低至HK$1,000</div>
                    </div>

                    <div class="price-table-body grey-bg text-center">

                        <div class="price">$1,000</div>
                        <div>Per Company</div>

                        <ul>
                            <li>
                                <table>
                                    <tr>
                                        <td class="icon-td"><img
                                                src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/small-i-1.png"
                                                alt=""></td>
                                        <td class="ps-2">HSBC, BEA, CITIC
                                            開戶專人跟進</td>
                                    </tr>
                                </table>
                            </li>
                            <li>
                                <table>
                                    <tr>
                                        <td class="icon-td"><img
                                                src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/small-i-2.png"
                                                alt=""></td>
                                        <td class="ps-2">最快一星期成功開戶</td>
                                    </tr>
                                </table>
                            </li>
                            <li>
                                <table>
                                    <tr>
                                        <td class="icon-td"><img
                                                src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/small-i-3.png"
                                                alt=""></td>
                                        <td class="ps-2">開戶費可減甚至全免</td>
                                    </tr>
                                </table>
                            </li>
                        </ul>

                        <a href="http://64.227.13.14/countaudit/銀行開戶-hsbc-企業帳號/"
                            class="blue-bg white know-more-btn mt-3">了解更多</a>
                        <div class="small-2">亦可聯絡我們詳議</div>
                    </div>

                </div>

            </div>


            <div class="col-lg-4 col-md-12 col-sm-12 col-12  mb-4">

                <div class="price-table">

                    <div class="price-title white blue-bg text-center pt-3 pb-3">
                        <h3 class="gold-2">審計、報稅</h3>
                        <div>低至HK$3,500</div>
                    </div>

                    <div class="price-table-body grey-bg text-center">

                        <div class="price">$3,500</div>
                        <div>Per Company</div>

                        <ul>
                            <li>
                                <table>
                                    <tr>
                                        <td class="icon-td"><img
                                                src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/small-i-4.png"
                                                alt=""></td>
                                        <td class="ps-2">審計服務</td>
                                    </tr>
                                </table>
                            </li>
                            <li>
                                <table>
                                    <tr>
                                        <td class="icon-td"><img
                                                src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/small-i-5.png"
                                                alt=""></td>
                                        <td class="ps-2">報稅服務</td>
                                    </tr>
                                </table>
                            </li>
                            <li>
                                <table>
                                    <tr>
                                        <td class="icon-td"><img
                                                src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/small-i-6.png"
                                                alt=""></td>
                                        <td class="ps-2">稅務支出減免建議</td>
                                    </tr>
                                </table>
                            </li>
                        </ul>

                        <a href="http://64.227.13.14/countaudit/services/審計服務%e2%80%8b/"
                            class="blue-bg white know-more-btn mt-3">了解更多</a>
                        <div class="small-2">亦可聯絡我們詳議</div>
                    </div>

                </div>

            </div>


            <div class="col-lg-4 col-md-12 col-sm-12 col-12  mb-4">

                <div class="price-table">

                    <div class="price-title white blue-bg text-center pt-3 pb-3">
                        <h3 class="gold-2">公司,S88 NGO開立
                        </h3>
                        <div>低至HK$2,950</div>
                    </div>

                    <div class="price-table-body grey-bg text-center">

                        <div class="price">$2,950</div>
                        <div>Per Company</div>

                        <ul>
                            <li>
                                <table>
                                    <tr>
                                        <td class="icon-td"><img
                                                src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/small-i-7.png"
                                                alt=""></td>
                                        <td class="ps-2">成立公司全包服務</td>
                                    </tr>
                                </table>
                            </li>
                            <li>
                                <table>
                                    <tr>
                                        <td class="icon-td"><img
                                                src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/small-i-8.png"
                                                alt=""></td>
                                        <td class="ps-2">轉介開戶服務</td>
                                    </tr>
                                </table>
                            </li>
                            <li>
                                <table>
                                    <tr>
                                        <td class="icon-td"><img
                                                src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/small-i-9.png"
                                                alt=""></td>
                                        <td class="ps-2">各種牌照,技術轉介</td>
                                    </tr>
                                </table>
                            </li>
                        </ul>

                        <a href="http://64.227.13.14/countaudit/s88牌申請-ngo-非牟利團體-慈善機構/"
                            class="blue-bg white know-more-btn mt-3">了解更多</a>
                        <div class="small-2">亦可聯絡我們詳議</div>
                    </div>

                </div>

            </div>



            <div class="col-lg-4 col-md-12 col-sm-12 col-12  mb-4">

                <div class="price-table">

                    <div class="price-title white blue-bg text-center pt-3 pb-3">
                        <h3 class="gold-2">會計</h3>
                        <div>低至HK$1,000</div>
                    </div>

                    <div class="price-table-body grey-bg text-center">

                        <div class="price">$1,000</div>
                        <div>Per Company</div>

                        <ul>
                            <li>
                                <table>
                                    <tr>
                                        <td class="icon-td"><img
                                                src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/small-i-1.png"
                                                alt=""></td>
                                        <td class="ps-2">雲端會計服務
                                        </td>
                                    </tr>
                                </table>
                            </li>
                            <li>
                                <table>
                                    <tr>
                                        <td class="icon-td"><img
                                                src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/small-i-2.png"
                                                alt=""></td>
                                        <td class="ps-2">會計紀錄整理代存服務</td>
                                    </tr>
                                </table>
                            </li>
                            <li>
                                <table>
                                    <tr>
                                        <td class="icon-td"><img
                                                src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/small-i-3.png"
                                                alt=""></td>
                                        <td class="ps-2">會計分析服務</td>
                                    </tr>
                                </table>
                            </li>
                        </ul>

                        <a href="http://64.227.13.14/countaudit/審計服務%e2%80%8b/"
                            class="blue-bg white know-more-btn mt-3">了解更多</a>
                        <div class="small-2">亦可聯絡我們詳議</div>
                    </div>

                </div>

            </div>



            <div class="col-lg-4 col-md-12 col-sm-12 col-12  mb-4">

                <div class="price-table">

                    <div class="price-title white blue-bg text-center pt-3 pb-3">
                        <h3 class="gold-2">虛擬辦公室</h3>
                        <div>低至HK$650</div>
                    </div>

                    <div class="price-table-body grey-bg text-center">

                        <div class="price">$650</div>
                        <div>Per Company</div>

                        <ul>
                            <li>
                                <table>
                                    <tr>
                                        <td class="icon-td"><img
                                                src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/small-i-4.png"
                                                alt=""></td>
                                        <td class="ps-2">代收信件包裹</td>
                                    </tr>
                                </table>
                            </li>
                            <li>
                                <table>
                                    <tr>
                                        <td class="icon-td"><img
                                                src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/small-i-5.png"
                                                alt=""></td>
                                        <td class="ps-2">公司水牌</td>
                                    </tr>
                                </table>
                            </li>
                            <li>
                                <table>
                                    <tr>
                                        <td class="icon-td"><img
                                                src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/small-i-6.png"
                                                alt=""></td>
                                        <td class="ps-2">其他業務增值服務</td>
                                    </tr>
                                </table>
                            </li>
                        </ul>

                        <a href="http://64.227.13.14/countaudit/%e8%99%9b%e6%93%ac%e8%be%a6%e5%85%ac%e5%ae%a4%e5%87%ba%e7%a7%9f%e6%9c%8d%e5%8b%99/"
                            class="blue-bg white know-more-btn mt-3">了解更多</a>
                        <div class="small-2">亦可聯絡我們詳議</div>
                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 col-12  mb-4">

                <div class="price-table">

                    <div class="price-title white blue-bg text-center pt-3 pb-3">
                        <h3 class="gold-2">公司秘書</h3>
                        <div>低至HK$1,000</div>
                    </div>

                    <div class="price-table-body grey-bg text-center">

                        <div class="price">$1,000</div>
                        <div>Per Company</div>

                        <ul>
                            <li>
                                <table>
                                    <tr>
                                        <td class="icon-td"><img
                                                src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/small-i-7.png"
                                                alt=""></td>
                                        <td class="ps-2">製作交付周年申報
                                            及其他表格</td>
                                    </tr>
                                </table>
                            </li>
                            <li>
                                <table>
                                    <tr>
                                        <td class="icon-td"><img
                                                src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/small-i-8.png"
                                                alt=""></td>
                                        <td class="ps-2">合規及盡職調查</td>
                                    </tr>
                                </table>
                            </li>
                            <li>
                                <table>
                                    <tr>
                                        <td class="icon-td"><img
                                                src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/small-i-9.png"
                                                alt=""></td>
                                        <td class="ps-2">重要控制人士登記冊</td>
                                    </tr>
                                </table>
                            </li>
                        </ul>

                        <a href="http://64.227.13.14/countaudit/services/%e5%85%ac%e5%8f%b8%e7%a7%98%e6%9b%b8%e6%9c%8d%e5%8b%99/"
                            class="blue-bg white know-more-btn mt-3">了解更多</a>
                        <div class="small-2">亦可聯絡我們詳議</div>
                    </div>

                </div>

            </div>


        </div>
    </div>






</div> -->
<div class="mb-5">

    <?php echo get_field('content_5');?>


    <!-- <div class="container">

        <div class="row mt-4 align-items-center  justify-content-center">

            <div class="col-lg-5 col-md-5 col-sm-10 col-10 ">
                <img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/home-big-point-1.jpg" alt="">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 ">


                <div class="home-big-point-content">
                    <div>
                        <span class="big-num">#1</span>
                        <span>
                            <h2 class="d-inline-block blue">增值服務</h2>
                        </span>
                    </div>

                    <ul>
                        <li>- 公司保險</li>
                        <li>- 強積金</li>
                        <li>- 商標註冊</li>
                        <li>- 資助申請</li>
                    </ul>

                    <a href="http://64.227.13.14/countaudit/services/%e5%af%a9%e8%a8%88%e6%9c%8d%e5%8b%99%e2%80%8b/"
                        class="d-none blue-bg white know-more-btn mt-4 quote-btn">服務報價</a>

                </div>
            </div>
        </div>

        <div class="row mt-5 align-items-center  justify-content-center">

            <div class="col-lg-5 col-md-5 col-sm-10 col-10 ">
                <img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/home-big-point-2.jpg" alt="">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 ">


                <div class="home-big-point-content">
                    <div>
                        <span class="big-num">#2</span>
                        <span>
                            <h2 class="d-inline-block blue">審計、報稅

                            </h2>
                        </span>
                    </div>

                    <ul>
                        <li>- 審計報稅服務 （$3,500 起）</li>
                        <li>- 無限公司報稅服務（$1,000 起）</li>
                        <li>- 增值服務﹕稅務支出減免建議</li>
                        <li>- 服務報價</li>

                    </ul>

                    <a href="http://64.227.13.14/countaudit/services/%e7%a8%85%e5%8b%99%e7%94%b3%e5%a0%b1%e6%9c%8d%e5%8b%99/"
                        class="d-none blue-bg white know-more-btn mt-4 quote-btn">服務報價</a>

                </div>

            </div>
        </div>
        <div class="row mt-5 align-items-center  justify-content-center reverse-row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 ">


                <div class="home-big-point-content">
                    <div>
                        <span class="big-num">#3</span>
                        <span>
                            <h2 class="d-inline-block blue">公司開立、公司秘書

                            </h2>
                        </span>
                    </div>

                    <ul>
                        <li>- 成立公司全包服務（$2,950 起）</li>
                        <li>- NGO、社團、Funding 申請服務（$4,000 起）</li>
                        <li>- 公司秘書服務（每年$800 起）</li>
                        <li>- 註冊辦公室地址 （每年$650 起）</li>

                    </ul>

                    <a href="http://64.227.13.14/countaudit/services/%e5%85%ac%e5%8f%b8%e7%a7%98%e6%9b%b8%e6%9c%8d%e5%8b%99/"
                        class="d-none blue-bg white know-more-btn mt-4 quote-btn">服務報價</a>

                </div>

            </div>
            <div class="col-lg-5 col-md-5 col-sm-10 col-10 ">
                <img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/home-big-point-3.jpg" alt="">


            </div>


        </div>
        <div class="row mt-5 align-items-center  justify-content-center reverse-row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 ">
                <div class="home-big-point-content">
                    <div>
                        <span class="big-num">#4</span>
                        <span>
                            <h2 class="d-inline-block blue">會計
                            </h2>
                        </span>
                    </div>

                    <ul>
                        <li>- 雲端會計服務（每月$500 起）</li>
                        <li>- 會計紀錄整理代存服務（每月$500 起）</li>
                        <li>- 增值服務﹕會計分析服務</li>
                        <li> - 服務報價</li>
                    </ul>

                    <a href="http://64.227.13.14/countaudit/審計服務%e2%80%8b/"
                        class="blue-bg white know-more-btn mt-4 quote-btn d-none">服務報價</a>

                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-10 col-10 ">
                <img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/home-big-point-4.jpg" alt="">
            </div>

        </div>


    </div> -->


</div>
<div class="blue-bg pt-5 pb-5 mt-5">

    <h2 class="text-center white">


        <?php 
        if(ICL_LANGUAGE_CODE=='zh-hang')
        {
                echo '資訊文章類型';
        }
         
        if(ICL_LANGUAGE_CODE=='en')
        {
                echo 'Types Of Informative Article';
        }

      
      ?>


    </h2>


    <div class="container mt-5">

        <div class="article-carousel">

            <?php

            $content_6= get_field('content_6');
            $content_7= get_field('content_7');
            $content_8= get_field('content_8');


            global $sitepress;
            $current_lang= ICL_LANGUAGE_CODE;
            // $sitepress->switch_lang('en');
            // echo get_cat_name($fr_cat_id); // get_cat_name($en_cat_id); also work
            // $sitepress->switch_lang('zh-hant');

        $categories = get_categories();
        // echo 999;
        // print_r($categories);
        foreach($categories as $category) {
            
            // echo $category->slug;

            $slug = $category->slug;
    // print_r($category);            
           
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
                // Use the $slug variable here.
                'category_name' => $slug,
              );

            $the_query = new WP_Query( $args ); 

            while( $the_query->have_posts() ) {
                $the_query->the_post();
              
                ?>
            <div class="article-container">

                <div class="article-type-name"><?php echo $category->name;?></div>
                <img class="w-100"
                    src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' )[0];?>"
                    alt="">
                <div class="white-bg blue  ps-4 pe-4 pb-4">
                    <h3 class="text-center blue pt-3"><?php echo get_the_title();?></h3>
                    <div class="pt-2 pb-3">
                        <!-- 我們公司行政人手不足，導致帳目非常混亂。選用了CountAudit的雲端會計服務後，帳目立時變得清晰及容易查看！ -->
                        <?php echo get_the_excerpt();?>
                    </div>

                    <div class="text-end">
                        <a href="<?php echo get_permalink();?>" class="article-read-more gold  small">Read More>></a>
                    </div>
                </div>
            </div>

            <?php
            } 

            
        }

        $sitepress->switch_lang($current_lang);


        ?>

            <!-- 
                <div class="article-container"><img class="w-100"
                    src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/dummy-article-img.png" alt="">
                <div class="white-bg blue  ps-4 pe-4 pb-4">
                    <h3 class="text-center blue pt-3">僱員僱主文章</h3>
                    <div class="pt-2 pb-3">我們公司行政人手不足，導致帳目非常混亂。選用了CountAudit的雲端會計服務後，帳目立時變得清晰及容易查看！</div>

                    <div class="text-end">
                        <a href="#" class="article-read-more gold  small">Read More>></a>
                    </div>
                </div>
            </div>

            <div class="article-container"><img class="w-100"
                    src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/dummy-article-img.png" alt="">
                <div class="white-bg blue  ps-4 pe-4 pb-4">
                    <h3 class="text-center blue pt-3">僱員僱主文章</h3>
                    <div class="pt-2 pb-3">我們公司行政人手不足，導致帳目非常混亂。選用了CountAudit的雲端會計服務後，帳目立時變得清晰及容易查看！</div>

                    <div class="text-end">
                        <a href="#" class="article-read-more gold  small">Read More>></a>
                    </div>
                </div>
            </div>

            <div class="article-container"><img class="w-100"
                    src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/dummy-article-img.png" alt="">
                <div class="white-bg blue  ps-4 pe-4 pb-4">
                    <h3 class="text-center blue pt-3">僱員僱主文章</h3>
                    <div class="pt-2 pb-3">我們公司行政人手不足，導致帳目非常混亂。選用了CountAudit的雲端會計服務後，帳目立時變得清晰及容易查看！</div>

                    <div class="text-end">
                        <a href="#" class="article-read-more gold  small">Read More>></a>
                    </div>
                </div>
            </div>

            <div class="article-container"><img class="w-100"
                    src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/dummy-article-img.png" alt="">
                <div class="white-bg blue  ps-4 pe-4 pb-4">
                    <h3 class="text-center blue pt-3">僱員僱主文章</h3>
                    <div class="pt-2 pb-3">我們公司行政人手不足，導致帳目非常混亂。選用了CountAudit的雲端會計服務後，帳目立時變得清晰及容易查看！</div>

                    <div class="text-end">
                        <a href="#" class="article-read-more gold small">Read More>></a>
                    </div>
                </div>
            </div>
         -->


        </div>
    </div>



</div>
<?php echo $content_6;?>
<!-- <div class="container">

    <div class="mt-5">
        <h4 class="gold text-center">//其他人是怎樣看的？

        </h4>
    </div>
    <div class="mb-5">
        <h2 class=" text-center blue">客戶評價</h2>
    </div>

    <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-12 col-12  mt-5 mb-3">
            <div class=" grey-bg client-comment-div pe-4 ps-4 pt-5  pb-5  h-100 ">
                <img class="profile-shadow"
                    src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/profile-shadow.png" alt="">

                <div class="text-center">
                    <h4 class="blue m-0 ps-0 pe-0 pb-0 pt-2">樹洞香港 TreeholeHK</h4>
                    <div class="small gold">企業培訓公司</div>
                </div>

                <div class="mt-4">
                    我們公司行政人手不足，導致帳目非常混亂。選用了CountAudit的雲端會計服務後，帳目立時變得清晰及容易查看！令我非常安心專注自己的培訓業務，其他財務工作也交給CountAudit</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12  mt-5 mb-3">
            <div class=" grey-bg client-comment-div pe-4 ps-4 pt-5  pb-5 h-100 ">

                <img class="profile-shadow"
                    src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/profile-shadow.png" alt="">

                <div class="text-center">
                    <h4 class="blue m-0 ps-0 pe-0 pb-0 pt-2">IDRPHK LIMITED</h4>
                    <div class="small gold">香港綜合債務重組機構</div>
                </div>

                <div class="mt-4">
                    感謝CountAudit 在公司的出入帳上提供莫大的幫助。基於會計師的專業，令凌亂的帳目得以改善。CountAudit 將會在日後與我們機構維持良好的長期合作關係。</div>
            </div>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12  mt-5  mb-3">
            <div class=" grey-bg client-comment-div pe-4 ps-4 pt-5  pb-5  h-100  ">

                <img class="profile-shadow"
                    src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/profile-shadow.png" alt="">

                <div class="text-center">
                    <h4 class="blue m-0 ps-0 pe-0 pb-0 pt-2">Dream Impact 夢創成真</h4>
                    <div class="small gold">社創工作空間</div>
                </div>

                <div class="mt-4">
                    Sam 是一個貼心的服務提供者。由了解我嘅需要到設計貼身嘅會計服務，整個過程都好順暢，令我可以專注於業務。</div>
            </div>
        </div>

    </div>

</div> -->

<?php //echo get_field('content_6');?>

<div class="grey-bg-2 mt-5">


    <div class="container contact-form-container">
        <div class="row pt-lg-0 pt-md-0 pt-sm-5  pt-5  mt-5 align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">

                <?php echo $content_7;?>
                <!-- <div>
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

                            </td>
                        </tr>
                    </table>
                </div> -->


            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12  p-lg-5 p-md-5 p-sm-3 p-3 ">

                <?php
if ($_POST) {
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LdMWbweAAAAANK8OWHVYPts4avJ5fblHpeBpV-C',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }
   $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        ?>
                <script type="text/javascript">
                $(function() {

                    $('.lightbox').fadeIn(200);
                    $('.lightbox-msg-txt').html(
                        'Please go back and make sure you check the security CAPTCHA box.');

                })
                </script>
                <?php
    } else {


        if($_POST)
        {
            global $receive_email;

                    $client_name=$_POST['client-name'];
                    $tel=$_POST['tel'];
                    $email=$_POST['email'];
                    $enquiry_type=$_POST['enquiry-type'];
                    $message = $_POST['message'];
                    $send_content='';
                    $send_content .='稱呼:'.$client_name.'<br>';
                    $send_content .='聯絡電話:'.$tel.'<br>';
                    $send_content .='電郵:'.$email.'<br>';
                    $send_content .='查詢類別:'.$enquiry_type.'<br>';
                    $send_content .='簡短留言:'.$message.'<br>';
                 
                    $headers = array(
                        'From: Countaudit <info@countaudit.com>',
                      );
                      
                wp_mail( $receive_email, 'Countaudit 一般查詢(from '.$client_name.')', $send_content,$headers );   
               
                
        }
        
        ?>
                <script type="text/javascript">
                $(function() {

                    $('.lightbox').fadeIn(200);
                    $('.lightbox-msg-txt').html(
                        'Submitted successfully, we will get back to you soon.');

                })
                </script>
                <?php
    }
}

?>

                <?php echo $content_8;?>


                <!-- <div class="form-div white-bg contact-form-div">

                    <input type="text" class="form-control" placeholder="如何稱呼您？">
                    <input type="text" class="form-control" placeholder="聯絡電話">
                    <input type="text" class="form-control" placeholder="電郵">
                    <input type="text" class="form-control" placeholder="查詢類別">
                    <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="簡短留言"></textarea>

                    <div class="text-end">
                        <a href="#" class="blue-bg white submit-btn mt-3">服務報價</a>
                    </div>

                </div> -->
                <?php
                	// global $receive_email;
                    // echo $receive_email;
                    // // $receive_email = 'krisfk@gmail.com';

                    
                ?>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
<script type="text/javascript">
$(function() {

    $('.home-big-point-content ul li a').click(function() {

        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {

            $(this).next('.expand-cnt').slideDown(200);
        } else {
            $(this).next('.expand-cnt').slideUp(200);

        }


    })

    $('.article-carousel').slick({
        infinite: true,
        // slidesToShow: 3,
        // slidesToScroll: 3,
        dots: true,
        arrows: false,
        autoplay: false,
        pauseOnFocus: false,
        infinite: true,
        speed: 800,
        autoplaySpeed: 5000,
        cssEase: 'ease-out',
        pauseOnHover: false,
        responsive: [{
                breakpoint: 1920,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]

    });

    $('.main-banners').on('init', function(event, slick, direction) {
        // $('.dummy-banner-img').height(0);

        $(this).fadeIn(200);

    }).slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        // fade: true,
        arrows: false,
        autoplay: true,
        pauseOnFocus: false,
        infinite: true,
        speed: 800,
        autoplaySpeed: 5000,
        cssEase: 'ease-out',
        pauseOnHover: false,



    });










})
</script>
</body>

</html>