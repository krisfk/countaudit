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
        <div class="row pt-0 pb-0  mt-0 align-items-center justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12  text-center mt-5">

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



                <?php echo get_field('bottom_form');?>

                <h4 class="text-center lh-base"> Limited Company Registration Application Form
                    <br> 香港有限公司註冊申請表
                </h4>
                <div class="text-center">*為必須填寫項目 Required Fields</div>

                <form id="form" action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="form-type" value="incorp_limited_app">
                    <div class="form-div white-bg mt-4">

                        <div class="row  align-items-center">
                            <div class="col-12">
                                <h4 class="text-center mb-4"> 申請人資料 Applicant Information</h4>
                            </div>
                        </div>

                        <div class="row  align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="client-name">
                                    申請人姓名 Applicant’s Name*:</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="client-name"
                                    name="client-name" type="text" class="form-control">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="tel">聯絡電話 Phone
                                    Number:</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="tel" name="tel" type="text"
                                    class="form-control">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="email">電郵 E-mail:</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="email" name="email"
                                    type="text" class="form-control">
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label
                                    for="language">選擇語言Language*:</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="language" id="language-chinese"
                                        value="中文 Chinese">
                                    <label class="form-check-label" for="language-chinese">
                                        中文 Chinese
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="language" id="language-english"
                                        value="英文 English">
                                    <label class="form-check-label" for="language-english">
                                        英文 English
                                    </label>
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label
                                    for="billing-contact-person">上述申請人為賬單聯絡人<br>The above applicant is the billing
                                    contact
                                    person</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="billing-contact-person"
                                        id="billing-contact-person-yes" value="yes">
                                    <label class="form-check-label" for="billing-contact-person-yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="billing-contact-person"
                                        id="billing-contact-person-no" value="no">
                                    <label class="form-check-label" for="billing-contact-person-no">
                                        No
                                    </label>
                                </div>

                            </div>
                            <div class="col-12">
                                如否，請提供賬單聯絡人資料 If No, please provide the information of the billing contact person
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="contact-name">
                                    聯絡人姓名 Name:</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="contact-name"
                                    name="contact-name" type="text" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label
                                    for="contact-phone-number">聯絡電話Phone
                                    Number:</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="contact-phone-number"
                                    name="contact-phone-number" type="text" class="form-control">
                            </div>

                            <div class="col-12 mt-4">
                                <h4 class="text-center mb-4"> 公司資料 Company Information</h4>
                            </div>
                            <div class="col-12 fw-bold">公司名稱 Company Name＊</div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="contact-name-chinese">
                                    中文名稱 Chinese Name</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="contact-name-chinese"
                                    name="contact-name-chinese" type="text" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="contact-name-english">
                                    英文名稱 English Name</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="contact-name-english"
                                    name="contact-name-english" type="text" class="form-control">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="contact-name-english">
                                    公司註冊地址 Registered Address</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">


                                <div>
                                    選用算數秘書公司的虛擬辦公室服務 Use CountAudit Virtual Office Service
                                    <div class="small">
                                        (費用詳情請看第4頁 Please see details in page 4 below for the fees)
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio"
                                        name="countaudit-virtual-office-service" id="tst" value="tst">
                                    <label class="form-check-label" for="tst">
                                        尖沙咀 Tsim Sha Tsui

                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio"
                                        name="countaudit-virtual-office-service" id="lck" value="lck">
                                    <label class="form-check-label" for="lck">
                                        荔枝角 Lai Chi Kok
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio"
                                        name="countaudit-virtual-office-service" id="kt" value="kt">
                                    <label class="form-check-label" for="kt">
                                        觀塘 Kwun Tong

                                    </label>
                                </div>

                                <label for="other-registered-office">以下列地址為公司註冊(英文)地址：Use the following address as
                                    registered office (English) address
                                </label>

                                <input type="text" id="other-registered-office" name="other-registered-office"
                                    class="form-control mt-2">




                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="contact-name-english">
                                    業務性質 Business Nature *</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <div class="form-check">
                                    <input name="business[]" class="form-check-input" type="checkbox" id="trading"
                                        value="貿易 Trading">
                                    <label class="form-check-label" for="trading">
                                        貿易 Trading
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="business[]" class="form-check-input" type="checkbox" id="retail"
                                        value="零售 Retail">
                                    <label class="form-check-label" for="retail">
                                        零售 Retail
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="business[]" class="form-check-input" type="checkbox" id="manufacture"
                                        value="製造 Manufacture">
                                    <label class="form-check-label" for="manufacture">
                                        製造 Manufacture

                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="business[]" class="form-check-input" type="checkbox" id="consultancy"
                                        value="顧問 Consultancy">
                                    <label class="form-check-label" for="consultancy">
                                        顧問 Consultancy

                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="business[]" class="form-check-input" type="checkbox" id="transport"
                                        value="運輸 Transport">
                                    <label class="form-check-label" for="transport">
                                        運輸 Transport


                                    </label>
                                </div>

                                <div class="form-check">
                                    <input name="business[]" class="form-check-input" type="checkbox" id="design"
                                        value="設計 Design">
                                    <label class="form-check-label" for="design">
                                        設計 Design


                                    </label>
                                </div>

                                <div class="form-check">
                                    <input name="business[]" class="form-check-input" type="checkbox" id="it"
                                        value="資訊科技 IT">
                                    <label class="form-check-label" for="it">
                                        資訊科技 IT



                                    </label>
                                </div>

                                <div class="form-check">
                                    <input name="business[]" class="form-check-input" type="checkbox" id="marketing"
                                        value="推廣劃 Marketing">
                                    <label class="form-check-label" for="marketing">
                                        推廣劃 Marketing


                                    </label>
                                </div>

                                <div class="mb-2 mt-2"> <label for="service"> 服務 Service:</label></div>
                                <div><input type="text" id="service" name="service" class="form-control"></div>

                                <div class="mb-2 mt-2"> <label for="other-business"> 其他 Others:</label></div>
                                <div><input type="text" id="other-business" name="other-business" class="form-control">
                                </div>



                            </div>
                            <div class="col-12 mt-4 mb-3">
                                <h4 class="text-center mb-4"> 股東及董事資料 Shareholder’s and Director’s Information </h4>
                                <div>



                                    <ul class="m-0 mt-2 p-0 ps-3">
                                        <li>請連同所有董事及股東之身份證明及住宅地址副本一併遞交。Please also submit the ID/Passport copy and
                                            address proof of every director and shareholder.
                                        </li>
                                        <li>如股東或董事是公司，請提供NNC1/NAR1，CI，BR，公司所有董事及股東之身份證明及住宅地址副本。If the
                                            Director or Shareholder is company, please also submit the NNCI / NAR1, CI,
                                            BR and ID/Passport copy and address proof of every director and shareholder.
                                        </li>

                                    </ul>
                                </div>

                                <div class="row align-items-center mt-3">

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label
                                            for="upload-file-1">上載股東及董事資料文件
                                            *
                                            <br> <span class="small">(壓縮zip檔 15mb上限)<span></label>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                        <input type="file" class="form-control" name="upload-file-1" id="upload-file-1">



                                    </div>

                                </div>


                            </div>


                            <div class="row applicant-div-wrapper mx-auto">


                            </div>




                            <div class="text-center">
                                <a href="javascript:void(0);" class="add-more-applicant-btn">＋ 更多申請人</a>

                                <a href="javascript:void(0);" class="minus-applicant-btn">- 滅少申請人</a>
                            </div>



                            <div class="col-12 mt-4 mb-3">
                                <h4 class="text-center mb-4"> 服務計劃資料 Service Plan Information </h4>

                                <div> 服務費用 (港幣$3,845 [已包括政府費用]) Service fee (HK$3,845 inclusive of government
                                    charges)，已包括：</div>
                                <div>



                                    <ul class="m-0 mt-2 p-0 ps-3">

                                        <li>查册公司名稱Name Search</li>
                                        <li>準備公司註冊證書申請文件 Prepare documents for Certificate of Incorporation</li>
                                        <li>準備商業登記證申請文件 Prepare documents for Business Registration</li>
                                        <li>首年公司秘書服務 First Year Company Secretary Service</li>
                                        <li>精美綠盒 Green Box (內含公司章程，公司鋼印，公司簽名印，公司圓印，股票書，法定記錄薄)</li>
                                        <li>會計師核證副本（如需要，銀行開戶用）Certified True Copy by CPA (for Bank Account Opening, if
                                            needed)</li>
                                        <li>轉介開設銀行戶口（HSBC/東亞/中信）Bank Account Opening Referral</li>
                                        <li>設立僱主MPF戶口 Setting up Employer’s MPF Account</li>
                                        <li>勞保報價 Quotation for Employees’ Compensation Insurance</li>
                                        <li>員工福利報價 Quotation for Employees’ Benefits</li>
                                        <li>持續業務諮詢 Free Business Consultation</li>

                                    </ul>
                                </div>





                            </div>
                            <h4 class="text-center mb-4 mt-4">附加服務 Additional Services </h4>


                            <h5 class="text-center mb-4 mt-0">A. 公司印章 </h5>


                            <div class="row">

                                <div class="col-lg-4 col-md-4 col-sm-12 col-12  mb-3">
                                    <div class="form-check">
                                        <input name="business-stamp[]" class="form-check-input" type="checkbox"
                                            id="stamp1" name="stamp1" value="小圓印 Round Chop [HK$150/個each]">
                                        <label class="form-check-label" for="stamp1">
                                            小圓印 Round Chop <br> [HK$150/個each]

                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12  mb-3">

                                    <div class="form-check">
                                        <input name="business-stamp[]" class="form-check-input" type="checkbox"
                                            id="stamp2" name="stamp2" value="支票印 Signature Chop [HK$150/個 each]">
                                        <label class="form-check-label" for="stamp2">
                                            支票印 Signature Chop <br> [HK$150/個 each]

                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12  mb-3">

                                    <div class="form-check">
                                        <input name="business-stamp[]" class="form-check-input" type="checkbox"
                                            id="stamp3" name="stamp3" value="鋼印 Company Seal [HK$250/個 each]">
                                        <label class="form-check-label" for="stamp3">
                                            鋼印 Company Seal <br> [HK$250/個 each]

                                        </label>
                                    </div>


                                </div>
                                <div class="col-12 mt-4">
                                    <h5 class="text-center mb-4">B. 虛擬辦工室 Virtual Office</h5>
                                </div>
                                <div class="mb-3">
                                    <h6 class="text-center">– 尖沙咀 Tsim Sha Tsui –</h6>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
                                        <div class="form-check"><input id="tst-HK1600-year" class="form-check-input"
                                                name="virtual-office[]" type="checkbox" value="tst-HK1600-year"> <label
                                                class="form-check-label" for="tst-HK1600-year"> HK$1,600/year </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li>註冊公司地址</li>
                                            <li>信件包裹代收</li>
                                            <li>稅局郵件轉寄</li>
                                            <li>製作公司水牌</li>
                                            <li>每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
                                        <div class="form-check"><input id="tst-HK4000-year" class="form-check-input"
                                                name="virtual-office[]" type="checkbox" value="tst-HK4000-year"> <label
                                                class="form-check-label" for="tst-HK4000-year"> HK$4,000/year </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li>註冊公司地址</li>
                                            <li>信件包裹代收</li>
                                            <li>稅局郵件轉寄</li>
                                            <li>製作公司水牌</li>
                                            <li>每月轉寄郵件/包裹(包首1KG 20x20x20cm)</li>
                                            <li>辦公室電話代接</li>
                                            <li>稅局文件代處理及信件代開</li>
                                            <li>準備及保存重要控制人登記册</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
                                        <div class="form-check"><input id="tst-HK12000-year" class="form-check-input"
                                                name="virtual-office[]" type="checkbox" value="tst-HK12000-year"> <label
                                                class="form-check-label" for="tst-HK12000-year"> HK$12,000/year </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li>註冊公司地址</li>
                                            <li>信件包裹代收</li>
                                            <li>稅局郵件轉寄</li>
                                            <li>製作公司水牌</li>
                                            <li>更改商業登記地址</li>
                                            <li>每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                            <li>辦公室電話代接</li>
                                            <li>稅局文件代處理及信件代開</li>
                                            <li>準備及保存重要控制人登記册</li>
                                            <li>每月三次會議室出租</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mb-3 mt-4">
                                    <h6 class="text-center">– 荔枝角 Lai Chi Kok –</h6>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
                                        <div class="form-check"><input id="lck-HK650-year" class="form-check-input"
                                                name="virtual-office[]" type="checkbox" value="lck-HK650-year"> <label
                                                class="form-check-label" for="lck-HK650-year"> HK$650/year </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li>註冊公司地址</li>
                                            <li>信件代收</li>
                                            <li>製作公司水牌</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
                                        <div class="form-check"><input id="lck-HK950-year" class="form-check-input"
                                                name="virtual-office[]" type="checkbox" value="lck-HK950-year"> <label
                                                class="form-check-label" for="lck-HK950-year"> HK$950/year </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li>註冊公司地址</li>
                                            <li>信件包裹代收</li>
                                            <li>稅局郵件轉寄</li>
                                            <li>製作公司水牌</li>
                                            <li>每月轉寄郵件</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
                                        <div class="form-check"><input id="lck-HK1200-year" class="form-check-input"
                                                name="virtual-office[]" type="checkbox" value="lck-HK1200-year"> <label
                                                class="form-check-label" for="lck-HK1200-year"> HK$1,200/year </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li>註冊公司地址</li>
                                            <li>信件包裹代收</li>
                                            <li>稅局郵件轉寄</li>
                                            <li>製作公司水牌</li>
                                            <li>更改商業登記地址</li>
                                            <li>每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                            <li>每月一次會議室出租</li>
                                            <li>辦公室電話代接</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-4 mb-3">
                                    <h6 class="text-center">– 觀塘 Kwun Tong –</h6>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
                                        <div class="form-check"><input id="kt-HK900-year" class="form-check-input"
                                                name="virtual-office[]" type="checkbox" value="kt-HK900-year"> <label
                                                class="form-check-label" for="kt-HK900-year"> HK$900/year </label></div>
                                        <ul class="m-0 ps-4">
                                            <li>註冊公司地址</li>
                                            <li>信件代收</li>
                                            <li>製作公司水牌</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3"></div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3"></div>
                                </div>






                            </div>

                            <h4 class="text-center mb-4 mt-4">附加服務 Additional Services </h4>



                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="email">年結日 Year End
                                        Date*</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                    <!-- <input type="text" class="form-control" name="upload-file-1" id="upload-file-1"> -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="year-end-date"
                                            id="year-end-date-1" value="12 月 31 日 (31-Dec)">
                                        <label class="form-check-label" for="year-end-date-1">
                                            12 月 31 日 (31-Dec)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="year-end-date"
                                            id="year-end-date-2" value="3 月 31 日 (31-Mar)">
                                        <label class="form-check-label" for="year-end-date-2">
                                            3 月 31 日 (31-Mar)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="year-end-date"
                                            id="year-end-date-3" value="客戶自訂 Others">
                                        <label class="form-check-label" for="year-end-date-3">
                                            客戶自訂 Others ：

                                            <input type="text" class="form-control mt-2" name="other-year-end-date">
                                        </label>
                                    </div>


                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label
                                        for="appoint-countaudit">會否委任CountAudit為您提供會計/審計服務 <br>
                                        Will you appoint CountAudit to provide Accounting / Audit Services?
                                    </label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="appoint-countaudit"
                                            id="appoint-countaudit-yes" value="yes">
                                        <label class="form-check-label" for="appoint-countaudit-yes">
                                            會 Yes

                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="appoint-countaudit"
                                            id="appoint-countaudit-no" value="no">
                                        <label class="form-check-label" for="appoint-countaudit-no">
                                            不會 No
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <h4 class="text-center mb-4 mt-4  lh-base">
                                轉介公司銀行戶口服務 <br> Bank Account Opening Referral Services
                            </h4>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-12  mb-3 text-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="bank-account-opening"
                                        id="bank-account-opening-yes" value="yes">
                                    <label class="form-check-label" for="bank-account-opening-yes">
                                        需要 Need

                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="bank-account-opening"
                                        id="bank-account-opening-no" value="no">
                                    <label class="form-check-label" for="bank-account-opening-no">
                                        不需要 No Need
                                    </label>
                                </div>
                            </div>



                        </div>


                        <h4 class="text-center mb-4 mt-4  lh-base">
                            條款及細則 Terms and Conditions </h4>


                        <textarea id="tnc" class="form-control" name="" id="" cols="30" rows="10"></textarea>


                        <div class="text-center mt-3">
                            <a href="javascript:void(0);" class="form-submit-btn">Submit</a>
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
      
            //shareholders

            //
            $business_stamp = $_POST['business-stamp'];
            $virtual_office = $_POST['virtual-office'];
            $year_end_date = $_POST['year-end-date'];
            $other_year_end_date=$_POST['other-year-end-date'];

            $appoint_countaudit=$_POST['appoint-countaudit'];
            $bank_account_opening= $_POST['bank-account-opening'];
            
            

       
        }
    }
    
    ?>
    <script type="text/javascript">
    var no_of_applicant = 0;
    var applicant_fill_html = '';

    function generate_fill_area(no_of_applicant, applicant_fill_html) {
        for (i = 1; i <= no_of_applicant; i++) {
            applicant_fill_html +=
                '<div class="row applicant-div mx-auto mb-3 "> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="language">' +
                i +
                '. 申請人身份 Applicant’s Position *</label> <div class="small">(請選擇最少其中一項 Choose at least one)</div> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <div class="form-check"> <input class="form-check-input" type="checkbox" name="applicant-position-' +
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
                '"> 證件上名稱 Name on ID/Passport * <div class="small">(中文 Chinese)</div></label> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><input id="name-on-id-chinese-' +
                i +
                '" name="name-on-id-chinese-' + i +
                '" type="text" class="form-control"> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="name-on-id-english-' +
                i +
                '"> 證件上名稱 Name on ID/Passport *<div class="small">(英文 English)</div></label> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><input id="name-on-id-english-' +
                i +
                '" name="name-on-id-english-' + i +
                '" type="text" class="form-control"> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="id-pass-co-no-' +
                i +
                '"> 身份證/護照/公司號碼 <br> ID/Passport/Company No *</label> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><input id="id-pass-co-no-' +
                i +
                '" name="id-pass-co-no-' + i +
                '" type="text" class="form-control"> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="percent-of-shares-' +
                i +
                '"> 持股比例 <br> % of Shares *</label> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><input id="percent-of-shares-' +
                i +
                '" name="percent-of-shares-' + i +
                '" type="text" class="form-control"> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="residential-address-' +
                i +
                '"> 住址 <br> Residential Address *</label> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><input id="residential-address-' +
                i + '" name="residential-address-' + i + '" type="text" class="form-control"> </div> </div>';
        }

        $('.applicant-div-wrapper').html(applicant_fill_html);
    }

    function add_fill_area(i) {
        // alert(applicant_fill_html);
        // alert(7);
        // applicant_fill_html = $('.applicant-div-wrapper').html();
        // alert(applicant_fill_html);
        var append_fill_html =
            '<div class="row applicant-div mx-auto mb-3 "> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="language">' +
            i +
            '. 申請人身份 Applicant’s Position *</label> <div class="small">(請選擇最少其中一項 Choose at least one)</div> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"> <div class="form-check"> <input class="form-check-input" type="checkbox" name="applicant-position-' +
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
            '"> 證件上名稱 Name on ID/Passport * <div class="small">(中文 Chinese)</div></label> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><input id="name-on-id-chinese-' +
            i +
            '" name="name-on-id-chinese-' + i +
            '" type="text" class="form-control"> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="name-on-id-english-' +
            i +
            '"> 證件上名稱 Name on ID/Passport *<div class="small">(英文 English)</div></label> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><input id="name-on-id-english-' +
            i +
            '" name="name-on-id-english-' + i +
            '" type="text" class="form-control"> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="id-pass-co-no-' +
            i +
            '"> 身份證/護照/公司號碼 <br> ID/Passport/Company No *</label> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><input id="id-pass-co-no-' +
            i +
            '" name="id-pass-co-no-' + i +
            '" type="text" class="form-control"> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="percent-of-shares-' +
            i +
            '"> 持股比例 <br> % of Shares *</label> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><input id="percent-of-shares-' +
            i +
            '" name="percent-of-shares-' + i +
            '" type="text" class="form-control"> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="residential-address-' +
            i +
            '"> 住址 <br> Residential Address *</label> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><input id="residential-address-' +
            i + '" name="residential-address-' + i + '" type="text" class="form-control"> </div> </div>';

        $('.applicant-div-wrapper').append(append_fill_html);

    }

    $(function() {

        $('#tnc').html($('#tnc-data').html());
        // alert(80);
        $('.form-submit-btn').click(function() {
            // alert(650);
            $('#form').submit();
        });



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




    })
    </script>
    </body>

    </html>