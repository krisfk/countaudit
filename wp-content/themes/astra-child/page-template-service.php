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
            <li> <a class="gold-btn" href="http://64.227.13.14/countaudit/contact-us/"> SCHEDULE A MEETING</a></li>
            <li><a class="gold-btn" href="http://64.227.13.14/countaudit/contact-us/">CONTACT US</a></li>
            <li><a class="gold-btn"
                    href="http://64.227.13.14/countaudit/wp-content/uploads/2022/02/CountAudit-Service-Brochure.pdf">DOWNLOAD
                    BROCHURE</a></li>
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


                <!-- <h4 class="text-center lh-base"> Company Secretary in Hong Kong Application Form<br> 香港公司秘書服務計劃申請表 </h4>

                <form id="form" action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="form-type" value="com_sec_app_form">
                    <div class="form-div white-bg mt-4">

                        <div class="row  align-items-center">
                            <div class="col-12">
                                <h4 class="text-center mb-4"> 申請人資料 Applicant Information</h4>
                            </div>
                        </div>

                        <div class="row  align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="client-name">
                                    姓名 Name:</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="client-name"
                                    name="client-name" type="text" class="form-control">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="email">電郵 E-mail:</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="email" name="email"
                                    type="text" class="form-control">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="tel">電話 Tel:</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="tel" name="tel" type="text"
                                    class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="fax">傳真 Fax:</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="fax" name="fax" type="text"
                                    class="form-control">
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

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="date-change-secretary">
                                    公司秘書更改日期
                                    The date of changing Company Secretary＊</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="date-change-secretary"
                                    name="date-change-secretary" type="text" class="form-control">
                            </div>

                            <div class="col-12 mt-4">
                                <h4 class="text-center mb-4">申請所需之文件 Required Documents <br>
                                    (請上載下列文件 Please upload the following documents)</h4>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="upload-file-1">
                                    1. 商業登記証(副本) (BR); 周年申報表(副本) (NAR1) / 法團成立表格
                                    (NNC1); 公司證書 (CI); 公司章程 (AA)
                                </label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <input type="file" class="form-control" name="upload-file-1" id="upload-file-1">

                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="upload-file-2">2. 有效之身份證 /
                                    護照副本 及 3 個月內之住址證明
                                    All member’s ID/passport copy and address proof within 3 months</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <input type="file" class="form-control" name="upload-file-2" id="upload-file-2">

                            </div>

                            <div class="col-12 mt-4 mb-4">
                                <h4 class="text-center mb-4">附加詳情 Further Information</h4>
                                <div>上一個年度至今是否有任何股份變動或成員資料變更? Is there any Shares Transfer or Information change of the
                                    Company Members during the past annual year?</div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="details-of-changes">變動詳情

                                    Details of changes</label>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3 ">

                                <div class="form-check">
                                    <input name="details-of-changes[]" class="form-check-input" type="checkbox"
                                        value="沒有 No" id="details-of-changes-1">
                                    <label class="form-check-label" for="details-of-changes-1">
                                        沒有 No

                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="details-of-changes[]" class="form-check-input" type="checkbox"
                                        value="更改公司名稱 [NNC2] Change of Company Name" id="details-of-changes-2">
                                    <label class="form-check-label" for="details-of-changes-2">
                                        更改公司名稱 [NNC2] Change of Company Name
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="details-of-changes[]" class="form-check-input" type="checkbox"
                                        value="委任 / 辭任董事或公司秘書 [ND2A / ND4] Change / Resignation of Company Director(s) / Secretary"
                                        id="details-of-changes-3">
                                    <label class="form-check-label" for="details-of-changes-3">
                                        委任 / 辭任董事或公司秘書 [ND2A / ND4] Change / Resignation of Company Director(s) /
                                        Secretary
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="details-of-changes[]" class="form-check-input" type="checkbox"
                                        value="股權變動 Shares Transfer" id="details-of-changes-4">
                                    <label class="form-check-label" for="details-of-changes-4">
                                        股權變動 Shares Transfer

                                    </label>
                                </div>

                                <div class="form-check">
                                    <input name="details-of-changes[]" class="form-check-input" type="checkbox"
                                        value="更改註冊地址 [NR1] Change of Registered Address" id="details-of-changes-5">
                                    <label class="form-check-label" for="details-of-changes-5">
                                        更改註冊地址 [NR1] Change of Registered Address

                                    </label>
                                </div>

                                <div class="form-check">
                                    <input name="details-of-changes[]" class="form-check-input" type="checkbox" value="更改董事或公司秘書資料 [ND2B] Change of Information of Company Director(s) / Secretary
" id="details-of-changes-6">
                                    <label class="form-check-label" for="details-of-changes-6">
                                        更改董事或公司秘書資料 [ND2B] Change of Information of Company Director(s) / Secretary

                                    </label>
                                </div>

                                <div class="form-check">
                                    <input name="details-of-changes[]" class="form-check-input" type="checkbox"
                                        value="增加註冊資本 [NSC1] Return of Allotment" id="details-of-changes-7">
                                    <label class="form-check-label" for="details-of-changes-7">
                                        增加註冊資本 [NSC1] Return of Allotment

                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="details-of-changes[]" class="form-check-input" type="checkbox"
                                        value="登記册及公司紀錄備存地點通知書 Notice of Location of Registers and Company Records"
                                        id="details-of-changes-8">
                                    <label class="form-check-label" for="details-of-changes-8">
                                        登記册及公司紀錄備存地點通知書 Notice of Location of Registers and Company Records

                                    </label>
                                </div>

                                <div class="mt-3">
                                    <label name="details-of-changes-others" class="form-check-label mb-3"
                                        for="defaultCheck1">
                                        其他 Others:
                                    </label>
                                    <input type="text" name="details-of-changes-others" class="form-control">
                                </div>


                            </div>





                        </div>

                        <div class="row  align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="remarks">
                                    備註 Remarks</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="remarks" name="remarks"
                                    type="text" class="form-control">
                            </div>

                        </div>



                        <div class="col-12 mt-4">
                            <h4 class="text-center mb-4"> 服務計劃資料 Service Plan Information </h4>
                            <div>
                                <b>
                                    服務費用 (每年港幣$950) Service fee (per year HK$950)，已包括：</b>


                                <ul class="m-0 mt-2 p-0 ps-3">
                                    <li>擔任法定公司秘書 Act as Company Secretary</li>
                                    <li>準備及遞交週年申報表 Prepare and Submit Annual Return</li>
                                    <li>協助續辦商業登記證 Renew the Business Registration Certificate</li>
                                    <li> 對公司註冊署及稅局信提供專業意見 Provide professional opinions for CR and IRD’s letter</li>
                                    <li>更改公司註冊地址資料 Change of Registered Office Address</li>
                                    <li>準備及遞交任免董事資料 Appointment / Resignation / Change of Director</li>
                                    <li>準備及遞交任免秘書資料 Appointment / Resignation / Change of Secretary</li>
                                    <li>更改董事個人資料 Change of Personal Particulars of Director</li>
                                    <li>業務性質變更 Change of Company Business Nature</li>
                                    <li>準備及保存重要控制人登記册 Prepare and keep record of Significant Controllers Register</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 mt-4">
                            <h4 class="text-center mb-4"> 附加服務 Additional Services </h4>

                        </div>



                        <div class="col-12 mt-4">


                            <h5 class="text-center mb-4"> 虛擬辦工室 Virtual Office </h5>





                        </div>
                        <div class="mb-3">
                            <h5 class="text-center">- 尖沙咀 Tsim Sha Tsui -</h5>
                        </div>

                        <div class="row">

                            <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3">





                                <div class="form-check">
                                    <input name="virtual-office[]" class="form-check-input" type="checkbox"
                                        id="tst-HK1600-year" value="tst-HK1600-year">
                                    <label class="form-check-label" for="tst-HK1600-year">
                                        HK$1,600/year

                                    </label>
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


                                <div class="form-check">
                                    <input name="virtual-office[]" class="form-check-input" type="checkbox"
                                        id="tst-HK4000-year" value="tst-HK4000-year">
                                    <label class="form-check-label" for="tst-HK4000-year">
                                        HK$4,000/year

                                    </label>
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


                                <div class="form-check">
                                    <input name="virtual-office[]" class="form-check-input" type="checkbox"
                                        id="tst-HK12000-year" value="tst-HK12000-year">
                                    <label class="form-check-label" for="tst-HK12000-year">
                                        HK$12,000/year

                                    </label>
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
                            <h5 class="text-center">
                                - 荔枝角 Lai Chi Kok -</h5>
                        </div>

                        <div class="row">

                            <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3">





                                <div class="form-check">
                                    <input name="virtual-office[]" class="form-check-input" type="checkbox"
                                        id="lck-HK650-year" value="lck-HK650-year">
                                    <label class="form-check-label" for="lck-HK650-year">
                                        HK$650/year

                                    </label>
                                </div>

                                <ul class="m-0 ps-4">
                                    <li>註冊公司地址</li>
                                    <li>信件代收</li>
                                    <li>製作公司水牌</li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3">


                                <div class="form-check">
                                    <input name="virtual-office[]" class="form-check-input" type="checkbox"
                                        id="lck-HK950-year" value="lck-HK950-year">
                                    <label class="form-check-label" for="lck-HK950-year">
                                        HK$950/year

                                    </label>
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


                                <div class="form-check">
                                    <input name="virtual-office[]" class="form-check-input" type="checkbox"
                                        id="lck-HK1200-year" value="lck-HK1200-year">
                                    <label class="form-check-label" for="lck-HK1200-year">
                                        HK$1,200/year

                                    </label>
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
                            <h5 class="text-center">
                                - 觀塘 Kwun Tong -</h5>

                        </div>


                        <div class="row">

                            <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3">





                                <div class="form-check">
                                    <input name="virtual-office[]" class="form-check-input" type="checkbox"
                                        id="kt-HK900-year" value="kt-HK900-year">
                                    <label class="form-check-label" for="kt-HK900-year">
                                        HK$900/year

                                    </label>
                                </div>

                                <ul class="m-0 ps-4">
                                    <li>註冊公司地址</li>
                                    <li>信件代收</li>
                                    <li>製作公司水牌</li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3">


                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-3">






                            </div>
                        </div>


                        <div class="row mt-4 align-items-center">

                            <div class="col-12 mb-3">

                                <div class="form-check">
                                    <input name="increase-of-capital" class="form-check-input" type="checkbox"
                                        id="additional-1" value="1">
                                    <label class="form-check-label" for="additional-1">
                                        增加公司註冊股本 (港幣$500全包) <br>
                                        Increase of Capital (HK$500 all inclusive)
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 mb-3">

                                <div class="form-check">
                                    <input name="allotment-of-shares" class="form-check-input" type="checkbox"
                                        id="additional-2" value="2">
                                    <label class="form-check-label" for="additional-2">
                                        分配股份(港幣$500全包) <br>
                                        Allotment of Shares (HK$500 all inclusive)
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 mb-3">

                                <div class="form-check">
                                    <input name="register-branch" class="form-check-input" type="checkbox"
                                        id="additional-3" value="3">
                                    <label class="form-check-label" for="additional-3">
                                        申請分行(港幣$500全包) <br>
                                        Register Branch (HK$500 all inclusive)
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 mb-3">

                                <div class="form-check">
                                    <input name="annual-general-name" class="form-check-input" type="checkbox"
                                        id="additional-4" value="4">
                                    <label class="form-check-label" for="additional-4">
                                        年度股東大會(港幣$500全包) <br>
                                        Annual General Name (HK$500 all inclusive)
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 mb-3">

                                <div class="form-check">
                                    <input name="change-of-company-branch-name" class="form-check-input" type="checkbox"
                                        id="additional-5" value="5">
                                    <label class="form-check-label" for="additional-5">
                                        更改公司或分行名稱(港幣$500全包) <br>
                                        Change of Company / Branch Name (HK$500 all inclusive)
                                    </label>
                                </div>
                            </div>


                            <div class="col-12 mb-3">

                                <div class="form-check">
                                    <input name="transfer-of-shares" class="form-check-input" type="checkbox"
                                        id="additional-6" value="6">
                                    <label class="form-check-label" for="additional-6">
                                        股份轉讓 (HK$700服務費加印花稅） <br>
                                        Transfer of Shares (HK$700 plus stamp duty fees)
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 mb-3">

                                <div class="form-check">
                                    <input name="deregistration-of-limited-company" class="form-check-input"
                                        type="checkbox" id="additional-7" value="7">
                                    <label class="form-check-label" for="additional-7">
                                        撤銷公司(港幣$1,000加政府費用) <br>
                                        Deregistration of Limited Company (HK$1,000 plus government charges)
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3"><label for="other-additional">其他
                                    Others
                                    請註明 please specify:</label></div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12"> <input type="text" class="form-control"
                                    id="other-additional" name="other-additional">
                            </div>
                        </div>

                        <div class="col-12 mt-4">
                            <h4 class="text-center mb-4">條款及細則 Terms and Conditions </h4>
                            <textarea class="form-control" name="" id="" cols="30" rows="10">
服務條款 MAIN TERMS
*適用於虛擬辦工室客戶Applicable for Virtual Office Service

	1.本申請表由算數秘書有限公司（“本公司”）提供，並由公司秘書/虛擬辦公室服務計畫申請人（“客戶”）同意，雙方共同履行申請表內所載的條款及細則。
This application form is offered by CountAudit Secretarial Limited and accepted by the Company Secretarial Service / Virtual Office Service  Applicants (the “Client”), both executing the terms and conditions started in this application form.

	2.客戶須於服務到期日一個月前與本公司書面提出續約或中止服務，否則會遞交政府文件辭任公司秘書。
Client are required to renew / terminate the service with CountAudit Secretarial Limited 1 month before the expiry date of the service period. Otherwise, the resignation form of company secretary will be submitted to Companies Registry.  

	3.客戶如自行更改過公司資料，包括及不限於公司名稱、股權變動等，必須於周年日前   7    個工作天將相關資料以電郵通知本公司，如果因客戶的遺漏而導致周年申報表資料錯誤，客戶需另外支付額外費用，並可能需要支付遲交罰款。 
If there is any Shares Transfer or Information Change of the Company Members during the past Annual year. Client must send the related information and documents to CountAudit Secretarial Limited 7 days prior to the anniversary of the date of the company’s incorporation of that year. Client would be responsible if there is any missing of providing accurate information for preparing the Annual Return, and have to pay the additional fees for re-doing the Annual Return, the Client would also be responsible for paying the late charge / penalty (if any) due to late submission.

	4.客戶如需要簽署周年申報表或相關文件，必須將簽妥的文件正本於該年中的周年日後的    30    日內寄回本公司以確保有足夠時間安排提交文件及費用，如果因遲交而導致任何罰款，客戶需要自行承擔。
If Client has to sign the Annual Return, the signed documents must be returned to CountAudit Secretarial Limited within 30 days after the anniversary of the date of the company’s incorporation in that year, to ensure CountAudit Secretarial Limited has sufficient time to arrange submission of the documents. If there is any late charge / penalty due to late submission, the Client should hold full responsibilities. 

	5.*客戶知悉並同意本申請表中沒有賦予客戶佔用或使用任何本虛擬辦公室服務所列位址之辦公室、設備或設施的權力。
The Client understands and agrees that they will have no right to occupy and access any part of the premises, and any equipment or facilities within the premise of the virtual office address under this application form.

	6.*客戶不能在服務生效前或終止後，公開或使用本公司提供的位址、電話號碼以及傳真號碼。客戶也不能以其他未向本公司登記的公司和用戶的名義，公開或使用本公司提供的位址、電話號碼以及傳真號碼。
The Client shall not publish or use the provided address, telephone number and fax number provided by CountAudit Secretarial Limited before the commencement of the service or after the termination of service. The Client shall not allow any company or user not registered with CountAudit Secretarial Limited to publish or use the provided address, telephone number and fax number provided by CountAudit Secretarial Limited.

	7.*本公司只為申請人之公司提供虛擬辦公室服務，故不會代收其聯絡人之私人信件或包裹。如有此情況，本公司將收取HKD100手續費，並且本公司不承擔任何因此引致之損失（包括但不限於信件或包裹丟失）。
The virtual office service is provided to the applicant only, i.e.the Company registered with us. Thus, CountAudit Secretarial Limited will not accept the mails or parcels addressed to the other parties (including but not limited to the company contact persons) (“unauthorized mails and parcels”). If any unauthorized mails or parcels are sent to CountAudit Secretarial Limited, CountAudit Secretarial Limited will charge HKD100 handling fee. Moreover, CountAudit Secretarial Limited will not be responsible for any loss incurred resulted from this matter (including but not limited to the loss of mail or parcels).

	8.*在服務生效前及或終止期間，或任何未經許可的情況下，本公司有權拒絕收取客戶的郵件、包裹、電郵或傳真，及拒絕處理客戶專線電話的來電或傳真，並且不會通知以上各種項目的傳送。在服務終止的30天后，客戶遺下的任何郵件、包裹、傳真和物件，本公司有權代為處理。
Before the commencement of service, during suspension period, or any situation without the prior authorization, CountAudit Secretarial Limited reserves the right to reject any mails, parcels, faxes or any other objects sent to the Client and will not handle all calls from the assigned telephone/fax numbers. CountAudit Secretarial Limited is not responsible to notify the Client of such delivery. 30 days after the termination of service, any mail, parcels, fax or any other objects sent to or left at any offices of CountAudit Secretarial Limited shall be at the disposal of CountAudit Secretarial Limited at its absolute discretion.

	9.*代收取客戶郵件及包裹 MAIL HANDING SERVICES

	i.	包裹的體積不應超過20釐米*20釐米*20釐米。如包裹超過20釐米*20釐米*20釐米，本公司將按HKD20/每天/每20釐米*20釐米*20釐米收取存放費，並且本公司有權拒收任何超出上述體積的包裹。
The volume of parcels shall not exceed 20cm*20cm*20cm.If the volume of parcels exceed 20cm*20cm*20cm, storage fee will be charged at HKD20/day/20cm*20cm*20cm.Moreover, CountAudit Secretarial Limited reserves the right to refuse receiving mails and parcels exceeding the above stated size.
	ii.	客戶之體積不超過20釐米*20釐米*20釐米的包裹可以免費存放3天，3天後本公司將收取存放費(HKD20/每天/每件)
The storage of the parcel with its volume not exceeding 20cm*20cm*20cm will be free of charge for the first 3 days and HKD20/item/day will be charged afterwards.
	iii.	本公司有權拒絕收任何危險或非法物件。 
CountAudit Secretarial Limited reserves the right to refuse receiving any dangerous or illegal items.
	iv.	超逾30天不取，及不能聯絡者，本公司將自行處理寄存物，而不另行通知，並且不負任何責任，後果客戶自負。若客戶暫存的物件基於任何原因而被盜，遺失或損毀，本公司不須為此而負上任何責任。
Mails and parcels uncollected over 30 days, or if the Client is un-contactable, the mails and parcels shall be disposed of without any notice. CountAudit Secretarial Limited shall not be responsible for any losses or any obligations. CountAudit Secretarial Limited shall not be liable if the stored items are lost, being stolen or damaged due to any reason during the storage period. 

	10.*轉寄郵件及包裹服務 MAIL FORWARDING SERVICES

若客戶需要轉寄郵件及包裹，需於服務申請時提出，或每次以電郵或書面形式通知本公司。本公司不會為轉寄郵件及包裹所引致的損失、被竊、被破壞、或任何災害，而作出任何賠償及負上任何責任。本公司每次將收取HKD80元手續費（不包轉寄郵件及包裹之郵寄費用）。
If mail forwarding services is required, the Client should state at the time of application. Otherwise, the Client     should notice CountAudit Secretarial Limited by email or written notice every time. CountAudit Secretarial Limited shall not be liable for any losses, damages, cost, claims and expenses of liabilities of whatever nature in mail forwarding. CountAudit Secretarial Limited will charge HKD80 for handling charge (excluding mailing fee) of the forward mails and/or parcels.

	11.*電話服務 CALL SERVICES    
	1.	
	i.	 所有來電轉駁服務只適用於本地電話號碼。  
 All call forwarding services apply to local telephone number only.
	ii.	若客戶須更改系統直接轉駁之指定號碼，須於生效期前2個工作天向本公司以書面形式通知。 
If the designated number direct transferred by system is to be changed, a formal written notification should be submitted to CountAudit Secretarial Limited on or before 2 working days prior to the effective date.
	iii.	為保障客戶之利益及私隱，所有來電訊息只會儲存48小時。 
For protecting the Client’s interest and privacy, all messages from callers will be reserved 48 hours only.
	iv.	專線電話服務只限代接後留言及轉駁電話，而不包括任何產品查詢，報價及客戶服務的工作。
The telephone services provided by CountAudit Secretarial Limited can be only used for receiving calls, leaving messages and transferring calls on behalf of the Client, not including any services related to product inquires, making quotations and customer services.

	12.若有本公司不能控制的事件（包括客戶的作為或不作為），影響本公司按原定計劃履行本服務的能力，本公司或會酌加服務費用。
For CountAudit Secretarial Limited uncontrollable events, including Client act or omission to act, which affects CountAudit Secretarial Limited's ability to perform the service, CountAudit Secretarial Limited reserves the right to charge extra fee. 

	13.客戶應於賬單上列明的到期日前繳交有關款項，否則本公司有權終止其服務而不作另行通知。同時客戶有責任於到期日前確保已繳交之費用已由本公司收取並確認。 
The Client shall settle the fees before the due date specified on the relevant invoices, otherwise, CountAudit Secretarial Limited has right to suspend the services to the Client. The Client has the responsibility to ensure that their payments are received and identified by CountAudit Secretarial Limited before the due date specified on the relevant invoices.

	14.若客戶要求重啟因延遲繳款或欠款被終止的服務，本公司將會向客戶收取於終止期間的相關服務費用。 
If Client requests to reactivate the services which has been suspended by CountAudit Secretarial Limited due to late payment or overdue situation, CountAudit Secretarial Limited shall charge the Client the service fees for the suspended period.

	15.客戶如需更改服務指令、內容，需以書面形式通知本公司，及繳付相關費用。
If the Client requires to amend service instructions, contents, a written notice is required to provide to CountAudit Secretarial Limited, and the related service fees shall be applied.

	16.客戶或客戶代表所提供的一切資訊（“客戶資訊”）均為準確與完整的。本公司將依賴所獲提供的客戶資訊，本公司不會對客戶資訊進行任何評估或核證，也不會對任何錯誤資訊所引致之損失負責。
The information provided by the Client (“Client Information”) must be accurate and complete. CountAudit Secretarial Limited will depend on what the Client provide, and CountAudit Secretarial Limited shall not do any evaluation or certification about the Client Information and shall not be responsible for any loss suffered due to the inaccurate or incomplete information.

	17.就以下情況，本公司有權終止服務而不作任何通知；同時亦無須為停止提供服務，而負上法律責任或承擔任何被索償的後果。
Under the following circumstances, CountAudit Secretarial Limited reserves all rights to terminate services without any prior notice. CountAudit Secretarial Limited shall bear no legal responsibilities nor shall be liable for any claims or compensation for discontinuing services.

	i.	  客戶未能按時繳交費用，包括服務費、手續費或轉寄郵件費用；或未能及時更新商業登記；
The Client has failed to settle any service fees, handing fees or reimbursements of postage, or to renew business registration on time;
	ii.客戶涉嫌進行或涉及任何非法、違例或詐騙活動；
In suspicion of the Client is involving or carrying out a fraud and any illegal or improper activities;
	iii.客戶涉嫌利用本公司提供的服務作展銷會或招聘會等活動；
In suspicion of the Client is using provided services to hold any promotional sales or public recruitment events;
	iv.客戶涉嫌在未經本公司許可下，把服務轉移或分配至任何第三者使用。
In suspicion of the Client is transferring or assigning any or part of the services to any other parties, without the prior authorization from CountAudit Secretarial Limited.

	22.如有任何爭議，本公司將保留最終決定權。
Should any disputes arise, the decision of CountAudit Secretarial Limited shall be final.

責任範圍 LIMITATION OF LIABILITY

	23.客戶已知悉因語言、文字或電子通訊的限制，如服務受阻、延誤或中斷、或任何錯漏，本公司的責任只限於其服務受影響的服務費，本公司不會因上述原因而負上其他責任。
The Client acknowledges that due to the imperfect nature of verbal, written and electronic communications, CountAudit Secretarial Limited is not responsible for any failure to render any service, or any delay or interruption of any service, the sole obligation is limited to the service charges during the affected period. 

	24.客戶同意不會因服務受阻、延誤或中斷、或任何錯漏而引致的直接或間接損失(包括業務及收益之損失)而提出索償。
	3.	The Client agrees to waive, and agrees not to make, any claims for damages, direct or consequential, including with respect to lost business or profits, arising out any service, any error or omission with respect there to, or any delay or interruption of services.

協議期限與終止 SERVICE PERIOD AND TERMINATION

	25.本次服務由服務生效日開始計算，其後服務期會按照客戶每次繳付的服務週期而延續，而本申請表之內容亦會於新延續的服務期內適用。
The service period starts from the effective date of the service plan and the contract period will be extended according to the period covered by each payment from the Client. The content of this application form will be applicable within the extended contract period.

	26.未經本公司許可下，客戶不能在首張合約期之結束日期終止服務。
The Client is not allowed to terminate the service before the end date of the first contract period unless prior approval from CountAudit Secretarial Limited is obtained.

	27.提早終止服務並不會退回已繳交之服務費用。
Service fee will not be refunded for early termination.

資料保護DATE PROTECTION

	32.本公司可收集、使用、傳輸、儲存或以其他方式處理（統稱“處理”）可能與個別人士有關的客戶資訊（“個人資料”）。本公司處理個人資料時，將遵照適用的法律及專業守則。
The Company may collect, use, transfer, store or otherwise process (collectively referred to as the "processing") the information provided by the Clients, which may include personal information. The processing of those data will be in compliance with applicable laws and professional codes of practice.

	33.客戶同意在本公司在為客戶提供服務的情況下向第三者提供與客戶有關之資料。本公司亦將要求代本公司處理個人資料的任何服務供應商，遵守該等規定。
The Client agrees CountAudit Secretarial Limited to provide customer-related information to third parties for services to be provided to the Client by CountAudit Secretarial Limited. CountAudit Secretarial Limited will also request any third party service providers to be in compliance with applicable laws and professional codes of practice.

	34.客戶同意接收本公司推廣優惠之資訊，如客戶日後不欲繼續接收有關本公司推廣資訊，可隨時通知本公司停止有關資訊之發送。
The Client agrees to receive promotional information from CountAudit Secretarial Limited. Should the Client determines not to continue receiving such information, the Client can inform CountAudit Secretarial Limited and cease the receipt of the promotional information.

不可抗力FORCE MAJEURE

	35.若因客戶及本公司合理控制以外的情況而出現違反本申請表的情況，客戶及本公司均無須負責（付款責任除外）。
The Client and CountAudit Secretarial Limited shall not be liable (except payment obligations) for any violation of the application form due to circumstances beyond the reasonable control of the Client and CountAudit Secretarial Limited.

適用法律與爭議解決APPLICABLE LAW AND DISPUTE RESOLUTION

	36.本申請表受香港特別行政區法律管轄，且應當依照香港特別行政區法律進行解釋。雙方因本申請表而發生的爭議，應友好協商解決。經友好協商不成的會提交香港國際仲裁中心進行仲裁。
This application form shall be governed by and construed in accordance with the Laws of the Hong Kong Special Administrative Region. Both parties by this application form of disputes shall be settled through friendly consultations. If the dispute cannot be resolved, it will be settled by Hong Kong International Arbitration Center for arbitration.

其他事項OTHER BUSINESS

	37.本申請表構成雙方就本服務及本申請表所涵蓋其他事項的全部協定，並取代先前一切有關的協議、諒解、聲明。
The Application Form constitutes the entire agreement of all matters covered regarding the service and supersede the previous all relevant agreements, understandings and declarations.

	38.雙方可用電子方式簽署本申請表（及其修訂），各方可在本申請表的不同副本上簽署。本申請表或任何其附件的修訂，必須經雙方書面同意。
Both sides can electronically sign the application form (and its amendments), the parties sign on different copies of the application form. Any amendments on the Application Form or on its Appendix(es) must be agreed by both parties in writing.

	39.本申請表的任何條文（不論全部或部分）若被認定為不合法、無效或因其他理由不能執行，本申請表其他條文仍具有十足效力。
If any of the provisions of the Application Form (whether in whole or in part) identified as illegal, void, or for any other reason, unable to perform, the other provisions remain in full force and in effect.

	40.本公司不承擔任何與本服務相關的客戶的管理層責任。
CountAudit Secretarial Limited does not undertake any relevant client management responsibility.

	41.現有客戶續約本公司服務最少6個月起。
Existing Customers renewal to CountAudit Secretarial Limited with not less  than 6-month commitment period and agree to the relevant terms and conditions.
</textarea>
                        </div>





                        <div class="text-center mt-3">
                            <a href="javascript:void(0);" class="form-submit-btn">Submit</a>
                        </div>








                    </div>


            </div>
            </form> -->
                <!-- 
                <form id="form" action="" method="post" enctype="multipart/form-data">

                    <div class="form-div white-bg mt-4">

                        <div class="row  align-items-center">
                            <div class="col-12">
                                <h4 class="text-center mb-4"> Contact Information 聯絡資料</h4>
                            </div>
                        </div>


                        <div class="row  align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="client-name">Name
                                    姓名:</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="client-name"
                                    name="client-name" type="text" class="form-control">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="tel">Tel 電話:</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="tel" name="tel" type="text"
                                    class="form-control">
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="email">E-mail 電郵:</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="email" name="email"
                                    type="text" class="form-control">
                            </div>



                            <div class="col-12">
                                <h4 class="text-center mb-4">Company Information 公司資料</h4>
                            </div>



                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="company-name">Company name
                                    公司名稱</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="company-name"
                                    name="company-name" type="text" class="form-control"></div>



                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label
                                    for="principal-activities">Principal activities
                                    主要業務</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3 mb-3"><input id="principal-activities"
                                    name="principal-activities" type="text" class="form-control"></div>



                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label
                                    for="reporting-purposes">Has performed audit before?
                                    是否曾進行核數</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reporting-purposes"
                                        id="reporting-purposes-yes" value="yes">
                                    <label class="form-check-label" for="reporting-purposes-yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reporting-purposes"
                                        id="reporting-purposes-no" value="no">
                                    <label class="form-check-label" for="reporting-purposes-no">
                                        No
                                    </label>
                                </div>

                            </div>






                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="year-ended-date"> If Yes,
                                    please provide the related
                                    year
                                    ended
                                    date
                                    <br>
                                    如是，請提供相關年結日</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="year-ended-date"
                                    name="year-ended-date" type="text" class="form-control">
                            </div>




                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label
                                    for="declared-profits-tax-before">Has declared profits
                                    tax
                                    before?
                                    <br>
                                    是否曾申報利得稅</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="declared-profits-tax-before"
                                        id="declared-profits-tax-before-yes" value="yes">
                                    <label class="form-check-label" for="declared-profits-tax-before-yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="declared-profits-tax-before"
                                        id="declared-profits-tax-before-no" value="no">
                                    <label class="form-check-label" for="declared-profits-tax-before-no">
                                        No
                                    </label>
                                </div>

                            </div>






                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="year-assessment"> If Yes,
                                    please provide the related
                                    year of
                                    assessment
                                    <br>
                                    如是，請提供相關課稅年度</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="year-assessment"
                                    name="year-assessment" type="text" class="form-control">
                            </div>





                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label
                                    for="done-accounting-before">Has done accounting before?
                                    <br>
                                    是否曾做會計帳</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="done-accounting-before"
                                        id="done-accounting-before-yes" value="yes">
                                    <label class="form-check-label" for="done-accounting-before-yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="done-accounting-before"
                                        id="done-accounting-before-no" value="no">
                                    <label class="form-check-label" for="done-accounting-before-no">
                                        No
                                    </label>
                                </div>

                            </div>






                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="year-ended-date-2"> If
                                    Yes, please provide the
                                    related
                                    year
                                    ended
                                    date
                                    <br>
                                    如是，請提供相關年結日</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="year-ended-date-2"
                                    name="year-ended-date-2" type="text" class="form-control">
                            </div>







                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label
                                    for="reporting-frequency">Reporting Frequency <br>
                                    會計匯報頻率</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reporting-frequency"
                                        id="reporting-frequency-monthly" value="monthly">
                                    <label class="form-check-label" for="reporting-frequency-monthly">
                                        每月 Monthly
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reporting-frequency"
                                        id="reporting-frequency-quarterly" value="quarterly">
                                    <label class="form-check-label" for="reporting-frequency-quarterly">
                                        每季 Quarterly
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reporting-frequency"
                                        id="reporting-frequency-yearly" value="yearly">
                                    <label class="form-check-label" for="reporting-frequency-yearly">
                                        每年 Yearly
                                    </label>
                                </div>

                            </div>





                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label
                                    for="excel-for-business-records">
                                    Has done Excel for business records? <br>
                                    有否做Excel營業記錄？


                                </label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="excel-for-business-records"
                                        id="excel-for-business-records-yes" value="yes">
                                    <label class="form-check-label" for="excel-for-business-records-yes"
                                        name="excel-for-business-records">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="excel-for-business-records"
                                        id="excel-for-business-records-no" value="no">
                                    <label class="form-check-label" for="excel-for-business-records-no"
                                        name="excel-for-business-records">
                                        No
                                    </label>
                                </div>

                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="excel-file">if Yes, please
                                    upload <br>如有，請上載</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <input type="file" class="form-control" name="excel-file" id="excel-file">

                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="way-of-sorting-receipts">

                                    Way of sorting and keeping receipts <br>
                                    整理單據的方式 <br>
                                    e.g. Scanning / taking picture / sorted by folder / unsorted <br>
                                    例如電子掃描//拍照/分類袋分類/沒有任何分類
                                </label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <input type="text" class="form-control" name="way-of-sorting-receipts"
                                    id="way-of-sorting-receipts">
                            </div>



                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="total-turnover-yearly">

                                    Total Turnover (yearly)
                                    全年總營業額
                                </label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <input type="text" class="form-control" name="total-turnover-yearly"
                                    id="total-turnover-yearly">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <label for="any-stock">Any stock?
                                    有否存貨?</label>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="any-stock" id="any-stock-yes"
                                        value="yes">
                                    <label class="form-check-label" for="any-stock-yes" name="any-stock">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="any-stock" id="any-stock-no"
                                        value="no">
                                    <label class="form-check-label" for="any-stock-no" name="any-stock">
                                        No
                                    </label>
                                </div>

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <label for="no-of-bank-used">

                                    No. of bank used <br>
                                    使用銀行的數量

                                </label>

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <input name="no-of-bank-used" id="no-of-bank-used" type="text" class="form-control">

                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <label for="no-of-bank-transactions-monthly">

                                    No. of bank transactions (monthly) <br>
                                    每月經銀行交易的數量

                                </label>

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <input name="no-of-bank-transactions-monthly" id="no-of-bank-transactions-monthly"
                                    type="text" class="form-control">

                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <label for="any-property">

                                    Any property? <br>
                                    有否物業?
                                </label>

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="any-property"
                                        id="any-property-yes" value="yes">
                                    <label class="form-check-label" for="any-property-yes" name="any-property">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="any-property"
                                        id="any-property-no" value="no">
                                    <label class="form-check-label" for="any-property-no" name="any-property">
                                        No
                                    </label>
                                </div>

                            </div>




                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <label for="any-motor-vehicle">

                                    Any motor vehicle? <br>
                                    有否車輛?
                                </label>

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="any-motor-vehicle"
                                        id="any-motor-vehicle-yes" value="yes">
                                    <label class="form-check-label" for="any-motor-vehicle-yes"
                                        name="any-motor-vehicle">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="any-motor-vehicle"
                                        id="any-motor-vehicle-no" value="no">
                                    <label class="form-check-label" for="any-motor-vehicle-no" name="any-motor-vehicle">
                                        No
                                    </label>
                                </div>

                            </div>





                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <label for="no-of-loans-hire-purchases">
                                    No. of loans / hire purchases <br>
                                    貸款/分期付款數目

                                </label>

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <input name="no-of-loans-hire-purchases" id="no-of-loans-hire-purchases" type="text"
                                    class="form-control">

                            </div>



                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <label for="no-of-employees">
                                    No. of employees <br>
                                    員工人數 </label>

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <input name="no-of-employees" id="no-of-employees" type="text" class="form-control">

                            </div>


                            <div class="text-center mt-3">
                                <a href="javascript:void(0);" class="form-submit-btn">Submit</a>
                            </div>










                        </div>
                    </div>
                </form> -->
            </div>
        </div>

    </div>
    <textarea id="tnc-data" class="form-control d-none" name="" id="" cols="30"
        rows="10"><?php echo get_field('tnc');?></textarea>

    <?php get_footer(); ?>

    <?php
    
    if($_POST)
    {
        
        if($_POST['form-type']=='accounting_q_form')
        {
            
            $client_name = $_POST['client-name'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $company_name=$_POST['company-name'];
            $principal_activities=$_POST['principal-activities'];
            $performed_audit_before=$_POST['performed-audit-before'];
            $year_ended_date=$_POST['year-ended-date'];
            $declared_profits_tax_before=$_POST['declared-profits-tax-before'];
            $year_assessment=$_POST['year-assessment'];
            $done_accounting_before=$_POST['done-accounting-before'];
            $year_ended_date_2=$_POST['year-ended-date-2'];
            $reporting_frequency=$_POST['reporting-frequency'];
            $excel_for_business_records=$_POST['excel-for-business-records'];
            $way_of_sorting_receipts=$_POST['way-of-sorting-receipts'];
            $total_turnover_yearly = $_POST['total-turnover-yearly'];
            $any_stock=$_POST['any-stock'];
            $no_of_bank_used=$_POST['no-of-bank-used'];
            $no_of_bank_transactions_monthly=$_POST['no-of-bank-transactions-monthly'];
            $any_property= $_POST['any-property'];
            $any_motor_vehicle=$_POST['any-motor-vehicle'];
            $no_of_loans_hire_purchases=$_POST['no-of-loans-hire-purchases'];
            $no_of_employees=$_POST['no-of-employees'];

            $post_title = $client_name.' application';
            $post_id = wp_insert_post(array (
                'post_type' => 'accounting_q_form',
                'post_title' => $post_title,
                'post_status' => 'publish',
                'comment_status' => 'closed',   // if you prefer
                'ping_status' => 'closed',      // if you prefer
            ));

            if ($post_id) {
                add_post_meta($post_id, 'client_name', $client_name);
                add_post_meta($post_id, 'tel', $tel);
                add_post_meta($post_id, 'email', $email);
                add_post_meta($post_id, 'company_name', $company_name);
                add_post_meta($post_id, 'principal_activities', $principal_activities);
                add_post_meta($post_id, 'performed_audit_before', $performed_audit_before);
                add_post_meta($post_id, 'year_ended_date', $year_ended_date);
                add_post_meta($post_id, 'declared_profits_tax_before', $declared_profits_tax_before);
                add_post_meta($post_id, 'year_assessment', $year_assessment);
                add_post_meta($post_id, 'done_accounting_before', $done_accounting_before);
                add_post_meta($post_id, 'year_ended_date_2', $year_ended_date_2);
                add_post_meta($post_id, 'reporting_frequency', $reporting_frequency);
                add_post_meta($post_id, 'excel_for_business_records', $excel_for_business_records);
                add_post_meta($post_id, 'way_of_sorting_receipts', $way_of_sorting_receipts);
                add_post_meta($post_id, 'total_turnover_yearly', $total_turnover_yearly);
                add_post_meta($post_id, 'any_stock', $any_stock);
                add_post_meta($post_id, 'no_of_bank_used', $no_of_bank_used);
                add_post_meta($post_id, 'no_of_bank_transactions_monthly', $no_of_bank_transactions_monthly);
                add_post_meta($post_id, 'any_property', $any_property);
                add_post_meta($post_id, 'any_motor_vehicle', $any_motor_vehicle);
                add_post_meta($post_id, 'no_of_loans_hire_purchases', $no_of_loans_hire_purchases);
                add_post_meta($post_id, 'no_of_employees', $no_of_employees);
    
            }

        }


        if($_POST['form-type']=='audit_and_tax_report')
        {
           
            $client_name = $_POST['client-name'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $reporting_purposes = $_POST['reporting-purposes'];
            $other_reporting_purposes=$_POST['other-reporting-purposes'];
            $company_name=$_POST['company-name'];
            $principal_activities=$_POST['principal-activities'];
            $incorporation_date=$_POST['incorporation-date'];
            $performed_audit_before=$_POST['performed-audit-before'];
            $year_ended_date=$_POST['year-ended-date'];
            $declared_profits_tax_before=$_POST['declared-profits-tax-before'];
            $year_assessment=$_POST['year-assessment'];
            $has_receive_tax_return=$_POST['has-receive-tax-return'];
            $total_turnover_yearly=$_POST['total-turnover-yearly'];
            $any_stock=$_POST['any-stock'];
            $no_of_bank_used=$_POST['no-of-bank-used'];
            $no_of_bank_transactions_monthly= $_POST['no-of-bank-transactions-monthly'];
            $no_of_non_bank_transactions_monthly=$_POST['no-of-non-bank-transactions-monthly'];
            $any_property= $_POST['any-property'];
            $any_motor_vehicle=$_POST['any-motor-vehicle'];
            $no_of_loans_hire_purchases=$_POST['no-of-loans-hire-purchases'];
            $no_of_employees=$_POST['no-of-employees'];
           
            
            $post_title = $client_name.' application';
            $post_id = wp_insert_post(array (
                'post_type' => 'audit_and_tax_report',
                'post_title' => $post_title,
                'post_status' => 'publish',
                'comment_status' => 'closed',   // if you prefer
                'ping_status' => 'closed',      // if you prefer
            ));   


            if ($post_id) {
                add_post_meta($post_id, 'client_name', $client_name);
                add_post_meta($post_id, 'tel', $tel);
                add_post_meta($post_id, 'email', $email);
                add_post_meta($post_id, 'reporting_purposes', $reporting_purposes);
                add_post_meta($post_id, 'other_reporting_purposes', $other_reporting_purposes);
                add_post_meta($post_id, 'company_name', $company_name);
                add_post_meta($post_id, 'principal_activities', $principal_activities);
                add_post_meta($post_id, 'incorporation_date', $incorporation_date);
                add_post_meta($post_id, 'performed_audit_before', $performed_audit_before);
                add_post_meta($post_id, 'year_ended_date', $year_ended_date);
                add_post_meta($post_id, 'declared_profits_tax_before', $declared_profits_tax_before);
                add_post_meta($post_id, 'year_assessment', $year_assessment);
                add_post_meta($post_id, 'has_receive_tax_return', $has_receive_tax_return);
                add_post_meta($post_id, 'total_turnover_yearly', $total_turnover_yearly);
                add_post_meta($post_id, 'any_stock', $any_stock);
                add_post_meta($post_id, 'no_of_bank_used', $no_of_bank_used);
                add_post_meta($post_id, 'no_of_bank_transactions_monthly', $no_of_bank_transactions_monthly);
                add_post_meta($post_id, 'no_of_non_bank_transactions_monthly', $no_of_non_bank_transactions_monthly);
                add_post_meta($post_id, 'any_property', $any_property);
                add_post_meta($post_id, 'any_motor_vehicle', $any_motor_vehicle);
                add_post_meta($post_id, 'no_of_loans_hire_purchases', $no_of_loans_hire_purchases);
                add_post_meta($post_id, 'no_of_employees', $no_of_employees);   
            }
        }


        if($_POST['form-type']=='com_sec_app_form')
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
            $date_change_secretary=$_POST['date-change-secretary'];
            $details_of_changes=$_POST['details-of-changes'];
            $details_of_changes_others=$_POST['details-of-changes-others'];
            $remarks=$_POST['remarks'];
            $virtual_office=$_POST['virtual-office'];
            $increase_of_capital=$_POST['increase-of-capital'];
            $allotment_of_shares=$_POST['allotment-of-shares'];
            $register_branch=$_POST['register-branch'];
            $annual_general_name=$_POST['annual-general-name'];
            $change_of_company_branch_name=$_POST['change-of-company-branch-name'];
            $transfer_of_shares= $_POST['transfer-of-shares'];
            $deregistration_of_limited_company= $_POST['deregistration-of-limited-company'];
            $others=$_POST['others'];
            
            
            $post_title = $client_name.' application';
            $post_id = wp_insert_post(array (
                'post_type' => 'com_sec_app_form',
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
                add_post_meta($post_id, 'date_of_changing_company_secretary', $date_change_secretary);
                add_post_meta($post_id, 'remarks', $remarks);

                add_post_meta($post_id, 'details_of_changes', $details_of_changes);
                add_post_meta($post_id, 'details_of_changes_others', $details_of_changes_others);
                add_post_meta($post_id, 'virtual_office', $virtual_office);
                add_post_meta($post_id, 'increase_of_capital', $increase_of_capital);
                add_post_meta($post_id, 'allotment_of_shares', $allotment_of_shares);
                add_post_meta($post_id, 'register_branch', $register_branch);
                add_post_meta($post_id, 'annual_general_name', $annual_general_name);
                add_post_meta($post_id, 'change_of_company_branch_name', $change_of_company_branch_name);
                add_post_meta($post_id, 'transfer_of_shares', $transfer_of_shares);
                add_post_meta($post_id, 'deregistration_of_limited_company', $deregistration_of_limited_company);
                add_post_meta($post_id, 'others', $deregistration_of_limited_company);
     
                // 
            }
            

        }
    }




   if(!empty($_FILES))
    {
 
        
        //File 1
        if($_FILES["excel-file"]['size'])
        {
                $wordpress_upload_dir = wp_upload_dir();

                $new_file_path = $wordpress_upload_dir['path'] . '/' . $_FILES["excel-file"]["name"];

                    $i=0;
                while( file_exists( $new_file_path ) ) {
                    $i++;
                    $new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $_FILES["excel-file"]["name"];
                }
                
                if (move_uploaded_file($_FILES["excel-file"]["tmp_name"], $new_file_path)) {
        
                    $upload_id = wp_insert_attachment( array(
                    'guid'           => $new_file_path, 
                    'post_mime_type' => 'image/*',
                    //$_FILES["file_upload"]["tmp_name"],
                    'post_title'     => preg_replace( '/\.[^.]+$/', '', $_FILES["excel-file"]["name"] ),
                    'post_content'   => '',
                    'post_status'    => 'inherit'
                ), $new_file_path );
                require_once( ABSPATH . 'wp-admin/includes/image.php' );
            
                wp_update_attachment_metadata( $upload_id, wp_generate_attachment_metadata( $upload_id, $new_file_path ) );

                update_field( 'excel_file', $upload_id, $post_id );
                // update_field( 'mid_report_approval', false, $school_id );


                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
        }

         
        //File a
        if($_FILES["upload-file-1"]['size'])
        {
                $wordpress_upload_dir = wp_upload_dir();

                $new_file_path = $wordpress_upload_dir['path'] . '/' . $_FILES["upload-file-1"]["name"];

                    $i=0;
                while( file_exists( $new_file_path ) ) {
                    $i++;
                    $new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $_FILES["upload-file-1"]["name"];
                }
                
                if (move_uploaded_file($_FILES["upload-file-1"]["tmp_name"], $new_file_path)) {
        
                    $upload_id = wp_insert_attachment( array(
                    'guid'           => $new_file_path, 
                    'post_mime_type' => 'image/*',
                    //$_FILES["file_upload"]["tmp_name"],
                    'post_title'     => preg_replace( '/\.[^.]+$/', '', $_FILES["upload-file-1"]["name"] ),
                    'post_content'   => '',
                    'post_status'    => 'inherit'
                ), $new_file_path );
                require_once( ABSPATH . 'wp-admin/includes/image.php' );
            
                wp_update_attachment_metadata( $upload_id, wp_generate_attachment_metadata( $upload_id, $new_file_path ) );

                update_field( 'upload_file_1', $upload_id, $post_id );
                // update_field( 'mid_report_approval', false, $school_id );


                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
        }

         
        //File b
        if($_FILES["upload-file-2"]['size'])
        {
                $wordpress_upload_dir = wp_upload_dir();

                $new_file_path = $wordpress_upload_dir['path'] . '/' . $_FILES["upload-file-2"]["name"];

                    $i=0;
                while( file_exists( $new_file_path ) ) {
                    $i++;
                    $new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $_FILES["upload-file-2"]["name"];
                }
                
                if (move_uploaded_file($_FILES["upload-file-2"]["tmp_name"], $new_file_path)) {
        
                    $upload_id = wp_insert_attachment( array(
                    'guid'           => $new_file_path, 
                    'post_mime_type' => 'image/*',
                    //$_FILES["file_upload"]["tmp_name"],
                    'post_title'     => preg_replace( '/\.[^.]+$/', '', $_FILES["upload-file-2"]["name"] ),
                    'post_content'   => '',
                    'post_status'    => 'inherit'
                ), $new_file_path );
                require_once( ABSPATH . 'wp-admin/includes/image.php' );
            
                wp_update_attachment_metadata( $upload_id, wp_generate_attachment_metadata( $upload_id, $new_file_path ) );

                update_field( 'upload_file_2', $upload_id, $post_id );
                // update_field( 'mid_report_approval', false, $school_id );


                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
        }
        
}


    
    ?>
    <script type="text/javascript">
    // alert(99)

    $(function() {

        // var tnc = '<?php// echo get_field('tnc');?>';
        // $('#tnc').html('<?php //echo get_field('tnc');?>');
        // $('#tnc').val(div.replace("\\n","\n"));
        // alert(90)
        $('#tnc').html($('#tnc-data').html());
        // alert(80);
        $('.form-submit-btn').click(function() {
            // alert(650);
            $('#form').submit();
        });
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



        $('.service-contact-btn').click(function() {


            $("html, body").animate({
                scrollTop: $('.contact-form-container').offset().top
            }, 200);




        })




    })
    </script>
    </body>

    </html>