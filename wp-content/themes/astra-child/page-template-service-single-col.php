<?php
/**
 * Template Name: Service page(single column)
 * Template Post Type: page
 **/


// if ( ! defined( 'ABSPATH' ) ) {
	// exit; // Exit if accessed directly.
// }

get_header(); ?>


<div class="main-banner position-relative"
    style="background:url(http://64.227.13.14/countaudit/wp-content/uploads/2021/12/main-banner-bg-1.jpg)">


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

            <li> <a class="gold-btn" href="http://64.227.13.14/countaudit/contact-us/"> SCHEDULE A MEETING</a></li>
            <li><a class="gold-btn" href="http://64.227.13.14/countaudit/contact-us/">CONTACT US</a></li>
            <li><a class="gold-btn"
                    href="http://64.227.13.14/countaudit/wp-content/uploads/2022/02/CountAudit-Service-Brochure.pdf">DOWNLOAD
                    BROCHURE</a></li>
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
<div class="mt-5">

    <?php if(get_field('intro_title') ||get_field('intro_content'))
{
    ?>
    <div class="row justify-content-center gx-5 mt-4">

        <div class="col-lg-8 col-md-8 col-sm-12 col-12 ">

            <h2 class="blue text-center mb-4"><?php echo get_field('intro_title');?>
            </h2>

            <div class="mt-4"><?php echo get_field('intro_content');?>
            </div>


        </div>
    </div>
    <?php
}

    ?>


    <?php
if( have_rows('faqs'))
{
?>
    <div class="row justify-content-center gx-5 mt-4">

        <div class="col-lg-8 col-md-8 col-sm-12 col-12 ">

            <h2 class="blue text-center mb-4">FAQ</h2>


            <?php
                    // Loop through rows.
                    $idx=1;
                    while( have_rows('faqs') ) { the_row();
                
                        ?>

            <div class="qt-ans-group mb-3">

                <a href="javascript:void(0);" class="qt position-relative">

                    <table class="m-0 border-0">
                        <tr>
                            <td class="pe-2 align-middle  symbol-td">
                                <span class="symbol align-top">Q<?php echo $idx;?>.</span>
                            </td>
                            <td class="align-middle">
                                <?php echo get_sub_field('question');?>
                            </td>
                        </tr>
                    </table>


                    <img class="arrow"
                        src="http://64.227.13.14/countaudit/wp-content/uploads/2022/03/down-arrow-qa.png.webp" alt="">
                </a>

                <div class="ans position-relative">

                    <table class="m-0 border-0">
                        <tr>
                            <td class="pe-2  symbol-td align-top">
                                <span class="symbol">A<?php echo $idx;?>.</span>
                            </td>
                            <td class="align-middle">
                                <?php echo get_sub_field('answer');?>
                            </td>
                        </tr>

                    </table>



                </div>
            </div>
            <?php
                        // Load sub field value.
                        // $sub_value = get_sub_field('sub_field');
                        // Do something...
                        $idx++;
                
                    }
                ?>




        </div>
    </div>

    <?php
        
                }?>
</div>

<div class="grey-bg-2 mt-5">


    <div class="container contact-form-container" id="contact-form-container">
        <div class="row pt-0 pb-0  mt-0 align-items-center justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12  text-center mt-5">

                <!-- <div>
                    <div>
                        <h4 class="gold">//明碼實價

                        </h4>
                    </div>
                    <div>
                        <h2 class="blue"> 索取服務報價 </h2>
                        <div class="small">請聯絡我們並提供資料，即時能獲取準確報價</div>
                    </div>
                </div> -->
                <?php echo get_field('content_2');?>

            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-12  p-lg-5 p-md-5 p-sm-3 p-3 ">





                <?php //echo get_field('bottom_form');?>
                <h4 class="text-center lh-base"> Limited Company Registration Application Form<br />香港有限公司註冊申請表 </h4>
                <div class="text-center">*為必須填寫項目 Required Fields</div>
                <form id="form" action="" enctype="multipart/form-data" method="post"> <input name="form-type"
                        type="hidden" value="incorp_limited_app" />
                    <div class="form-div white-bg mt-4">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h4 class="text-center mb-4">申請人資料 Applicant Information</h4>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <label for="client-name"> 申請人姓名
                                    Applicant’s Name*:</label> </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <input id="client-name"
                                    class="form-control" name="client-name" required="" type="text" /> </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <label for="tel">聯絡電話 Phone
                                    Number:</label> </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <input id="tel" class="form-control"
                                    name="tel" type="text" /> </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <label for="email">電郵 E-mail:</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <input id="email" class="form-control"
                                    name="email" type="text" /> </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <label
                                    for="language">選擇語言Language*:</label> </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                <div class="form-check"> <input id="language-chinese" class="form-check-input"
                                        name="language" required="" type="radio" value="中文 Chinese" /> <label
                                        class="form-check-label" for="language-chinese"> 中文 Chinese </label> </div>
                                <div class="form-check"> <input id="language-english" class="form-check-input"
                                        name="language" type="radio" value="英文 English" /> <label
                                        class="form-check-label" for="language-english"> 英文 English </label> </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <label
                                    for="billing-contact-person">上述申請人為賬單聯絡人 The above applicant is the billing contact
                                    person</label> </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                <div class="form-check"> <input id="billing-contact-person-yes" class="form-check-input"
                                        name="billing-contact-person" type="radio" value="yes" /> <label
                                        class="form-check-label" for="billing-contact-person-yes"> Yes </label> </div>
                                <div class="form-check"> <input id="billing-contact-person-no" class="form-check-input"
                                        name="billing-contact-person" type="radio" value="no" /> <label
                                        class="form-check-label" for="billing-contact-person-no"> No </label> </div>
                            </div>
                            <div class="col-12"> 如否，請提供賬單聯絡人資料 If No, please provide the information of the billing
                                contact person </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <label for="contact-name"> 聯絡人姓名
                                    Name:</label> </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <input id="contact-name"
                                    class="form-control" name="contact-name" type="text" /> </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <label
                                    for="contact-phone-number">聯絡電話Phone Number:</label> </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <input id="contact-phone-number"
                                    class="form-control" name="contact-phone-number" type="text" /> </div>
                            <div class="col-12 mt-4">
                                <h4 class="text-center mb-4">公司資料 Company Information</h4>
                            </div>
                            <div class="col-12 fw-bold">公司名稱 Company Name＊</div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <label for="contact-name-chinese">
                                    中文名稱 Chinese Name</label> </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <input id="contact-name-chinese"
                                    class="form-control" name="contact-name-chinese" required="" type="text" /> </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <label for="contact-name-english">
                                    英文名稱 English Name</label> </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <input id="contact-name-english"
                                    class="form-control" name="contact-name-english" required="" type="text" /> </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <label for="contact-name-english">
                                    公司註冊地址 Registered Address</label> </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                <div> 選用算數秘書公司的虛擬辦公室服務 Use CountAudit Virtual Office Service <div class="small">
                                        (費用詳情請看第4頁 Please see details in page 4 below for the fees) </div>
                                </div>
                                <div class="form-check"> <input id="tst" class="form-check-input"
                                        name="countaudit-virtual-office-service" type="radio" value="tst" /> <label
                                        class="form-check-label" for="tst"> 尖沙咀 Tsim Sha Tsui </label> </div>
                                <div class="form-check"> <input id="lck" class="form-check-input"
                                        name="countaudit-virtual-office-service" type="radio" value="lck" /> <label
                                        class="form-check-label" for="lck"> 荔枝角 Lai Chi Kok </label> </div>
                                <div class="form-check mb-3"> <input id="kt" class="form-check-input"
                                        name="countaudit-virtual-office-service" type="radio" value="kt" /> <label
                                        class="form-check-label" for="kt"> 觀塘 Kwun Tong </label> </div> <label
                                    for="other-registered-office">以下列地址為公司註冊(英文)地址：Use the following address as
                                    registered office (English) address </label> <input id="other-registered-office"
                                    class="form-control mt-2" name="other-registered-office" type="text" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <label for="contact-name-english">
                                    業務性質 Business Nature *</label> </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3 checkbox-group required">
                                <div class="form-check"> <input id="trading" class="form-check-input"
                                        name="business[]"="" type="checkbox" value="貿易 Trading" /> <label
                                        class="form-check-label" for="trading"> 貿易 Trading </label> </div>
                                <div class="form-check"> <input id="retail" class="form-check-input" name="business[]"
                                        type="checkbox" value="零售 Retail" /> <label class="form-check-label"
                                        for="retail"> 零售 Retail </label> </div>
                                <div class="form-check"> <input id="manufacture" class="form-check-input"
                                        name="business[]" type="checkbox" value="製造 Manufacture" /> <label
                                        class="form-check-label" for="manufacture"> 製造 Manufacture </label> </div>
                                <div class="form-check"> <input id="consultancy" class="form-check-input"
                                        name="business[]" type="checkbox" value="顧問 Consultancy" /> <label
                                        class="form-check-label" for="consultancy"> 顧問 Consultancy </label> </div>
                                <div class="form-check"> <input id="transport" class="form-check-input"
                                        name="business[]" type="checkbox" value="運輸 Transport" /> <label
                                        class="form-check-label" for="transport"> 運輸 Transport </label> </div>
                                <div class="form-check"> <input id="design" class="form-check-input" name="business[]"
                                        type="checkbox" value="設計 Design" /> <label class="form-check-label"
                                        for="design"> 設計 Design </label> </div>
                                <div class="form-check"> <input id="it" class="form-check-input" name="business[]"
                                        type="checkbox" value="資訊科技 IT" /> <label class="form-check-label" for="it">
                                        資訊科技 IT </label> </div>
                                <div class="form-check"> <input id="marketing" class="form-check-input"
                                        name="business[]" type="checkbox" value="推廣劃 Marketing" /> <label
                                        class="form-check-label" for="marketing"> 推廣劃 Marketing </label> </div>
                                <div class="mb-2 mt-2"> <label for="service"> 服務 Service:</label> </div>
                                <div> <input id="service" class="form-control" name="service" type="text" /> </div>
                                <div class="mb-2 mt-2"> <label for="other-business"> 其他 Others:</label> </div>
                                <div> <input id="other-business" class="form-control" name="other-business"
                                        type="text" /> </div>
                            </div>
                            <div class="col-12 mt-4 mb-3">
                                <h4 class="text-center mb-4"> 股東及董事資料 Shareholder’s and Director’s Information </h4>
                                <div>
                                    <ul class="m-0 mt-2 p-0 ps-3">
                                        <li> 請連同所有董事及股東之身份證明及住宅地址副本一併遞交。Please also submit the ID/Passport copy and
                                            address proof of every director and shareholder. </li>
                                    </ul>
                                </div>
                                <div class="row align-items-center mt-3">

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <label for="upload-file-1">
                                            所有董事及股東之身份證明(zip file)
                                        </label> </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <input id="upload-file-1"
                                            class="form-control" name="upload-file-1" type="file" /> </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">

                                        <label for="upload-file-2">所有董事及股東之地址証明副本 (zip file)</label>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <input id="upload-file-2"
                                            class="form-control" name="upload-file-2" type="file" /> </div>


                                </div>
                            </div>
                            <div class="row applicant-div-wrapper mx-auto"></div>
                            <div class="text-center"> <a class="add-more-applicant-btn">＋ 更多申請人</a> <a
                                    class="minus-applicant-btn">- 滅少申請人</a> </div>
                            <div class="col-12 mt-4 mb-3">
                                <h4 class="text-center mb-4"> 服務計劃資料 Service Plan Information </h4>
                                <div> 服務費用 (港幣$3,845 [已包括政府費用]) Service fee (HK$3,845 inclusive of government
                                    charges)，已包括： </div>
                                <div>
                                    <ul class="m-0 mt-2 p-0 ps-3">
                                        <li>查册公司名稱Name Search</li>
                                        <li> 準備公司註冊證書申請文件 Prepare documents for Certificate of Incorporation </li>
                                        <li> 準備商業登記證申請文件 Prepare documents for Business Registration </li>
                                        <li>首年公司秘書服務 First Year Company Secretary Service</li>
                                        <li> 精美綠盒 Green Box (內含公司章程，公司鋼印，公司簽名印，公司圓印，股票書，法定記錄薄) </li>
                                        <li> 會計師核證副本（如需要，銀行開戶用）Certified True Copy by CPA (for Bank Account Opening, if
                                            needed) </li>
                                        <li> 轉介開設銀行戶口（HSBC/東亞/中信）Bank Account Opening Referral </li>
                                        <li>設立僱主MPF戶口 Setting up Employer’s MPF Account</li>
                                        <li> 勞保報價 Quotation for Employees’ Compensation Insurance </li>
                                        <li>員工福利報價 Quotation for Employees’ Benefits</li>
                                        <li>持續業務諮詢 Free Business Consultation</li>
                                    </ul>
                                </div>
                            </div>
                            <h4 class="text-center mb-4 mt-4">附加服務 Additional Services</h4>
                            <h5 class="text-center mb-4 mt-0">A. 公司印章</h5>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                                    <div class="form-check"> <input id="stamp1" class="form-check-input"
                                            name="business-stamp[]" type="checkbox"
                                            value="小圓印 Round Chop [HK$150/個each]" /> <label class="form-check-label"
                                            for="stamp1"> 小圓印 Round Chop [HK$150/個each] </label> </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                                    <div class="form-check"> <input id="stamp2" class="form-check-input"
                                            name="business-stamp[]" type="checkbox"
                                            value="支票印 Signature Chop [HK$150/個 each]" /> <label
                                            class="form-check-label" for="stamp2"> 支票印 Signature Chop [HK$150/個 each]
                                        </label> </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                                    <div class="form-check"> <input id="stamp3" class="form-check-input"
                                            name="business-stamp[]" type="checkbox"
                                            value="鋼印 Company Seal [HK$250/個 each]" /> <label class="form-check-label"
                                            for="stamp3"> 鋼印 Company Seal [HK$250/個 each] </label> </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <h5 class="text-center mb-4">B. 虛擬辦工室 Virtual Office</h5>
                                </div>
                                <div class="mb-3">
                                    <h6 class="text-center">- 尖沙咀 Tsim Sha Tsui -</h6>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
                                        <div class="form-check"> <input id="tst-HK1600-year" class="form-check-input"
                                                name="virtual-office[]" type="checkbox" value="tst-HK1600-year" />
                                            <label class="form-check-label" for="tst-HK1600-year"> HK$1,600/year
                                            </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件包裹代收</li>
                                            <li class="ls1">稅局郵件轉寄</li>
                                            <li class="ls1">製作公司水牌</li>
                                            <li class="ls1">每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                            <li class="ls1">郵件到取</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                            <li class="ls1">郵件電子掃描</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
                                        <div class="form-check"> <input id="tst-HK4000-year" class="form-check-input"
                                                name="virtual-office[]" type="checkbox" value="tst-HK4000-year" />
                                            <label class="form-check-label" for="tst-HK4000-year"> HK$4,000/year
                                            </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件包裹代收</li>
                                            <li class="ls1">稅局郵件轉寄</li>
                                            <li class="ls1">製作公司水牌</li>
                                            <li class="ls1">每月轉寄郵件/包裹(包首1KG 20x20x20cm)</li>
                                            <li class="ls1">郵件到取</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                            <li class="ls1">郵件電子掃描</li>
                                            <li class="ls2">辦公室電話代接</li>
                                            <li class="ls2">稅局文件代處理及信件代開</li>
                                            <li class="ls2">準備及保存重要控制人登記册</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
                                        <div class="form-check"> <input id="tst-HK12000-year" class="form-check-input"
                                                name="virtual-office[]" type="checkbox" value="tst-HK12000-year" />
                                            <label class="form-check-label" for="tst-HK12000-year"> HK$12,000/year
                                            </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件包裹代收</li>
                                            <li class="ls1">稅局郵件轉寄</li>
                                            <li class="ls1">製作公司水牌</li>
                                            <li class="ls1">每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                            <li class="ls1">郵件到取</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                            <li class="ls1">郵件電子掃描</li>
                                            <li class="ls2">辦公室電話代接</li>
                                            <li class="ls2">稅局文件代處理及信件代開</li>
                                            <li class="ls2">準備及保存重要控制人登記册</li>
                                            <li class="ls3">每月三次會議室出租</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mb-3 mt-4">
                                    <h6 class="text-center">- 荔枝角 Lai Chi Kok -</h6>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
                                        <div class="form-check"> <input id="lck-HK950-year" class="form-check-input"
                                                name="virtual-office[]" type="checkbox" value="lck-HK950-year" /> <label
                                                class="form-check-label" for="lck-HK950-year"> HK$950/year </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件包裹代收</li>
                                            <li class="ls1">稅局郵件轉寄 (按要求)</li>
                                            <li class="ls1">製作公司水牌</li>
                                            <li class="ls1">每月轉寄郵件</li>
                                            <li class="ls1">郵件到取</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
                                        <div class="form-check"> <input id="lck-HK1500-year" class="form-check-input"
                                                name="virtual-office[]" type="checkbox" value="lck-HK1500-year" />
                                            <label class="form-check-label" for="lck-HK1500-year"> HK$1,500/year
                                            </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件包裹代收</li>
                                            <li class="ls1">稅局郵件轉寄</li>
                                            <li class="ls1">製作公司水牌</li>
                                            <li class="ls1">每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                            <li class="ls1">郵件到取</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                            <li class="ls2">郵件電子掃描</li>
                                            <li class="ls2">每月一次會議室出租</li>
                                            <li class="ls2">辦公室電話代接</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-4 mb-3">
                                    <h6 class="text-center">- 觀塘 Kwun Tong -</h6>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
                                        <div class="form-check"> <input id="kt-HK900-year" class="form-check-input"
                                                name="virtual-office[]" type="checkbox" value="kt-HK900-year" /> <label
                                                class="form-check-label" for="kt-HK900-year"> HK$900/year </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件代收</li>
                                            <li class="ls1">每月一次郵件轉寄 （註：不設到取服務）</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3"></div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3"></div>
                                </div>
                            </div>
                            <h4 class="text-center mb-4 mt-4"> 會計年度資料 Account Audit Information </h4>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <label for="email">年結日 Year End
                                        Date*</label> </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                    <div class="form-check"> <input id="year-end-date-1" class="form-check-input"
                                            name="year-end-date" type="radio" value="12 月 31 日 (31-Dec)" /> <label
                                            class="form-check-label" for="year-end-date-1"> 12 月 31 日 (31-Dec) </label>
                                    </div>
                                    <div class="form-check"> <input id="year-end-date-2" class="form-check-input"
                                            name="year-end-date" type="radio" value="3 月 31 日 (31-Mar)" /> <label
                                            class="form-check-label" for="year-end-date-2"> 3 月 31 日 (31-Mar) </label>
                                    </div>
                                    <div class="form-check"> <input id="year-end-date-3" class="form-check-input"
                                            name="year-end-date" type="radio" value="客戶自訂 Others" /> <label
                                            class="form-check-label" for="year-end-date-3"> 客戶自訂 Others ： <input
                                                class="form-control mt-2" name="other-year-end-date" type="text" />
                                        </label> </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <label
                                        for="appoint-countaudit">會否委任CountAudit為您提供會計/審計服務 Will you appoint CountAudit
                                        to provide Accounting / Audit Services? </label> </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                    <div class="form-check"> <input id="appoint-countaudit-yes" class="form-check-input"
                                            name="appoint-countaudit" type="radio" value="yes" /> <label
                                            class="form-check-label" for="appoint-countaudit-yes"> 會 Yes </label> </div>
                                    <div class="form-check"> <input id="appoint-countaudit-no" class="form-check-input"
                                            name="appoint-countaudit" type="radio" value="no" /> <label
                                            class="form-check-label" for="appoint-countaudit-no"> 不會 No </label> </div>
                                </div>
                            </div>
                            <h4 class="text-center mb-4 mt-4 lh-base"> 轉介公司銀行戶口服務 Bank Account Opening Referral Services
                            </h4>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3 text-center">
                                <div class="form-check"> <input id="bank-account-opening-yes" class="form-check-input"
                                        name="bank-account-opening" type="radio" value="need" /> <label
                                        class="form-check-label" for="bank-account-opening-yes"> 需要 Need </label> </div>
                                <div class="form-check"> <input id="bank-account-opening-no" class="form-check-input"
                                        name="bank-account-opening" type="radio" value="no need" /> <label
                                        class="form-check-label" for="bank-account-opening-no"> 不需要 No Need </label>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center mb-4 mt-4 lh-base"> 條款及細則 Terms and Conditions </h4> <textarea id="tnc"
                            class="form-control" cols="30" name="" readonly="readonly" rows="10"></textarea>
                        <div class="g-recaptcha" data-sitekey="6LdMWbweAAAAALQmZOSO7C8OvF2Zf8um7r1rSQGG"></div>
                        <div class="text-center mt-3"> <input class="form-submit-btn" type="submit" value="Submit" />
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
    <textarea id="tnc-data" class="form-control d-none" name="" id="" cols="30"
        rows="10"><?php echo get_field('tnc');?></textarea>


    <?php get_footer(); ?>
    <?php
    
      
    if($_POST)
    {

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
            ?>
    <script type="text/javascript">
    $(function() {

        $('.lightbox').fadeIn(200);
        $('.lightbox-msg-txt').html(
            'Submitted successfully, we will get back to you soon.');

    })
    </script>
    <?php


     
if($_POST['form-type']=='virtual_office_form')
{
    $client_name = $_POST['client-name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $fax = $_POST['fax'];
    $billing_contact_person =$_POST['billing-contact-person'];
    $contact_name=$_POST['contact-name'];
    $contact_phone_number=$_POST['contact-phone-number'];
    $contact_name_chinese=$_POST['contact-name-chinese'];
    $contact_name_english=$_POST['contact-name-english'];
    $virtual_office=$_POST['virtual-office'];
    
    
    $post_title = $client_name.' application';
    $post_id = wp_insert_post(array (
        'post_type' => 'virtual_office_form',
        'post_title' => $post_title,
        'post_status' => 'publish',
        'comment_status' => 'closed',   // if you prefer
        'ping_status' => 'closed',      // if you prefer
    ));   

    if ($post_id) {
        add_post_meta($post_id, 'name', $client_name);
        add_post_meta($post_id, 'tel', $tel);
        add_post_meta($post_id, 'email', $email);
        add_post_meta($post_id, 'fax', $fax);
        add_post_meta($post_id, 'is_billing_contact_person', $billing_contact_person);
        add_post_meta($post_id, 'contact_person_name', $contact_name);
        add_post_meta($post_id, 'contact_person_phone_number', $contact_phone_number);
        add_post_meta($post_id, 'company_name_chinese', $contact_name_chinese);
        add_post_meta($post_id, 'company_name_english', $contact_name_english);
         add_post_meta($post_id, 'virtual_office', $virtual_office);
       
         global $receive_email;

         $send_content='';
         $send_content .='稱呼:'.$client_name.'<br>';
         $send_content .='聯絡電話:'.$tel.'<br>';
         $send_content .='電郵:'.$email.'<br>';
         $send_content .='Browse form:'.get_site_url().'/print/?f=vof&aid='.$post_id.'<br>';
      

        $headers = array(
            'From: Countaudit <info@countaudit.com>',
          );

         wp_mail( $receive_email, 'Countaudit 香港公司秘書服務計劃申請表 (from '.$client_name.')', $send_content,$headers );   
 
        
         
    }
}


if($_POST['form-type']=='incorp_limited_app')
{


    $client_name = $_POST['client-name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $language = $_POST['language'];
    $billing_contact_person =$_POST['billing-contact-person'];
    $contact_name=$_POST['contact-name'];
    $contact_phone_number=$_POST['contact-phone-number'];
    $contact_name_chinese=$_POST['contact-name-chinese'];
    $contact_name_english=$_POST['contact-name-english'];

    $countaudit_virtual_office_service=$_POST['countaudit-virtual-office-service'];
    $other_registered_office=$_POST['other-registered-office'];
    $business = $_POST['business'];
    $service= $_POST['service'];
    $other_business= $_POST['other-business'];




    $business_stamp = $_POST['business-stamp'];
    $virtual_office = $_POST['virtual-office'];
    $year_end_date = $_POST['year-end-date'];
    $other_year_end_date=$_POST['other-year-end-date'];

    $appoint_countaudit=$_POST['appoint-countaudit'];
    $bank_account_opening= $_POST['bank-account-opening'];

    $post_title = $client_name.' application';
    $post_id = wp_insert_post(array (
        'post_type' => 'incorp_limited_app',
        'post_title' => $post_title,
        'post_status' => 'publish',
        'comment_status' => 'closed',   // if you prefer
        'ping_status' => 'closed',      // if you prefer
    ));   

    if ($post_id) {
        add_post_meta($post_id, 'name', $client_name);
        add_post_meta($post_id, 'tel', $tel);
        add_post_meta($post_id, 'email', $email);
        add_post_meta($post_id, 'language', $language);
        add_post_meta($post_id, 'is_billing_contact_person', $billing_contact_person);
        add_post_meta($post_id, 'contact_person_name', $contact_name);
        add_post_meta($post_id, 'contact_person_phone_number', $contact_phone_number);
        add_post_meta($post_id, 'company_name_chinese', $contact_name_chinese);
        add_post_meta($post_id, 'company_name_english', $contact_name_english);
        add_post_meta($post_id, 'use_countaudit_virtual_office', $countaudit_virtual_office_service);
        add_post_meta($post_id, 'custom_address_as_registered_office', $other_registered_office);

        

        add_post_meta($post_id, 'business_nature', $business);
        add_post_meta($post_id, 'business_service', $service);
        add_post_meta($post_id, 'business_others', $other_business);
        // add_post_meta($post_id, 'custom_address_as_registered_office', $aaa);
        // add_post_meta($post_id, 'shareholders_and_directors', $aaa);
        add_post_meta($post_id, 'business_stamp', $business_stamp);
        add_post_meta($post_id, 'virtual_office', $virtual_office);
        add_post_meta($post_id, 'year_end_date', $year_end_date);
        add_post_meta($post_id, 'other_year_end_date', $other_year_end_date);
        add_post_meta($post_id, 'appoint_countaudit_to_provide_accounting_audit_services', $appoint_countaudit);
        add_post_meta($post_id, 'bank_account_opening_referral_services', $bank_account_opening);


         global $receive_email;

        $send_content='';
        $send_content .='稱呼:'.$client_name.'<br>';
        $send_content .='聯絡電話:'.$tel.'<br>';
        $send_content .='電郵:'.$email.'<br>';
        $send_content .='Browse form:'.get_site_url().'/print/?f=ilaf&aid='.$post_id.'<br>';
     

        $headers = array(
            'From: Countaudit <info@countaudit.com>',
          );

        wp_mail( $receive_email, 'Countaudit 香港公司秘書服務計劃申請表 (from '.$client_name.')', $send_content,$headers );   

        

        for($i=1;$i<=count($_POST['applicant-fill']);$i++)
        {

            $applicant_position=$_POST['applicant-position-'.$i];
            $name_on_id_chinese=$_POST['name-on-id-chinese-'.$i];
            $name_on_id_english=$_POST['name-on-id-english-'.$i];
            $id_pass_co_no=$_POST['id-pass-co-no-'.$i];
            $percent_of_shares=$_POST['percent-of-shares-'.$i];
            $residential_address=$_POST['residential-address-'.$i];

            // add_row('applicant_position', $applicant_position, $post_id);
            // add_row('applicant_name_chinese', $name_on_id_chinese, $post_id);
            // add_row('applicant_name_english', $name_on_id_english, $post_id);
            // add_row('applicant_id_passport_company_no', $id_pass_co_no, $post_id);
            // add_row('percent_of_shares', $percent_of_shares, $post_id);
            // add_row('residential_address', $residential_address, $post_id);
// 
            $row = array(
                'applicant_position' => $applicant_position,
                'applicant_name_chinese'   => $name_on_id_chinese,
                'applicant_name_english'  => $name_on_id_english,
                'applicant_id_passport_company_no'  => $id_pass_co_no,
                'percent_of_shares'  => $percent_of_shares,
                'residential_address'  => $residential_address
                
            );

            
            
            add_row('shareholders_and_directors',$row,$post_id);

        }
        


    }
    
    


    
    


}


    if(!empty($_FILES))
    {

             
        for($j=1;$j<=6;$j++)
        {
            if($_FILES["upload-file-".$j]['size'])
            {
                    $wordpress_upload_dir = wp_upload_dir();
        
                    $new_file_path = $wordpress_upload_dir['path'] . '/' . $_FILES["upload-file-".$j]["name"];
        
                        $i=0;
                    while( file_exists( $new_file_path ) ) {
                        $i++;
                        $new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $_FILES["upload-file-".$j]["name"];
                    }
                    
                    if (move_uploaded_file($_FILES["upload-file-".$j]["tmp_name"], $new_file_path)) {
            
                        $upload_id = wp_insert_attachment( array(
                        'guid'           => $new_file_path, 
                        'post_mime_type' => 'image/*',
                        //$_FILES["file_upload"]["tmp_name"],
                        'post_title'     => preg_replace( '/\.[^.]+$/', '', $_FILES["upload-file-".$j]["name"] ),
                        'post_content'   => '',
                        'post_status'    => 'inherit'
                    ), $new_file_path );
                    require_once( ABSPATH . 'wp-admin/includes/image.php' );
                
                    wp_update_attachment_metadata( $upload_id, wp_generate_attachment_metadata( $upload_id, $new_file_path ) );
        
                    update_field( 'upload_file_'.$j, $upload_id, $post_id );
                    // update_field( 'mid_report_approval', false, $school_id );
        
        
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
            }
        }

            }
        }
        

   
               
    }
    
    ?>
    <script type="text/javascript">
    var no_of_applicant = 0;
    var applicant_fill_html = '';


    function add_fill_area(i) {
        // alert(applicant_fill_html);
        // alert(7);
        // applicant_fill_html = $('.applicant-div-wrapper').html();
        // alert(applicant_fill_html);
        var append_fill_html =
            '<div class="row applicant-div mx-auto mb-3 "><input required type="checkbox" checked name="applicant-fill[]" value="1" class="d-none"> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="language">' +
            i +
            '. 申請人身份 Applicant’s Position *</label> <div class="small">(請選擇最少其中一項 Choose at least one)</div> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3 checkbox-group required"> <div class="form-check"> <input class="form-check-input" type="checkbox" name="applicant-position-' +
            i + '[]" id="shareholder' + i +
            '" value="股東 Shareholder"> <label class="form-check-label" for="shareholder' + i +
            '"> 股東 Shareholder </label> </div> <div class="form-check"> <input class="form-check-input" type="checkbox" name="applicant-position-' +
            i + '[]" id="director-' + i +
            '" value="董事 Director"> <label class="form-check-label" for="director-' + i +
            '"> 董事 Director </label> </div> <div class="form-check"> <input class="form-check-input" type="checkbox" name="applicant-position-' +
            i +
            '[]" id="beneficial-owner-' + i +
            '" value="受益人 Beneficial Owner"> <label class="form-check-label" for="beneficial-owner-' + i +
            '"> 受益人 Beneficial Owner </label> </div> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="name-on-id-chinese-' +
            i +
            '"> 證件上名稱 Name on ID/Passport * <div class="small">(中文 Chinese)</div></label> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><input  required id="name-on-id-chinese-' +
            i +
            '" name="name-on-id-chinese-' + i +
            '" type="text" class="form-control"> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="name-on-id-english-' +
            i +
            '"> 證件上名稱 Name on ID/Passport *<div class="small">(英文 English)</div></label> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><input  required id="name-on-id-english-' +
            i +
            '" name="name-on-id-english-' + i +
            '" type="text" class="form-control"> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="id-pass-co-no-' +
            i +
            '"> 身份證/護照/公司號碼 <br> ID/Passport/Company No *</label> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><input required id="id-pass-co-no-' +
            i +
            '" name="id-pass-co-no-' + i +
            '" type="text" class="form-control"> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="percent-of-shares-' +
            i +
            '"> 持股比例 <br> % of Shares *</label> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><input required id="percent-of-shares-' +
            i +
            '" name="percent-of-shares-' + i +
            '" type="text" class="form-control"> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="residential-address-' +
            i +
            '"> 住址 <br> Residential Address *</label> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><input required id="residential-address-' +
            i + '" name="residential-address-' + i + '" type="text" class="form-control"> </div> </div>';

        $('.applicant-div-wrapper').append(append_fill_html);




    }

    $(function() {


        $('.qt').click(function() {
            $(this).toggleClass('active');
            if ($(this).hasClass('active')) {
                $(this).next('.ans').slideDown(200);
            } else {
                $(this).next('.ans').slideUp(200);

            }
        });

        $('#tnc').html($('#tnc-data').html());




        $('input[name="other-year-end-date"]').focus(function() {
            // alert(7);
            $('#year-end-date-3').click();
        });

        $('#year-end-date-3').focus(function() {
            $('input[name="other-year-end-date"]').focus();
        })


        no_of_applicant++;
        add_fill_area(no_of_applicant);


        // generate_fill_area(no_of_applicant, applicant_fill_html);

        $('.add-more-applicant-btn').click(function() {
            no_of_applicant++;

            add_fill_area(no_of_applicant);
        })

        $('.minus-applicant-btn').click(function() {
            if (no_of_applicant >= 2) {
                no_of_applicant--;
                $('.applicant-div:last-child').remove();

                applicant_fill_html = $('.applicant-div-wrapper').html();
            }

        })

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

        // $('.service-contact-btn').click(function() {


        //     $("html, body").animate({
        //         scrollTop: $('.contact-form-container').offset().top
        //     }, 200);




        // })



        $('#form').submit(function() {

            var invalid_obj_arr = [];

            for (i = 0; i < $('div.checkbox-group.required').length; i++) {

                if ($('div.checkbox-group.required').eq(i).find(':checkbox:checked').length == 0) {
                    invalid_obj_arr.push($('div.checkbox-group.required').eq(i));
                }
            }

            if (invalid_obj_arr.length > 0) {
                $('html, body').animate({
                    scrollTop: invalid_obj_arr[0].offset().top - 50
                });

                return false;

            } else {
                $('.lightbox').fadeIn(200);
                $('.lightbox-msg-txt').html(
                    'Submitting the form. Please wait...');
                $('.close-btn').fadeOut(0);
                $('.cover').fadeIn(0);
            }



        })









    })
    </script>
    </body>

    </html>